<?php

namespace Aternos\Codex\Minecraft\Test\Performance;

use Aternos\Codex\Analysis\PatternInsightInterface;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\ChunkLoadExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ServerJarInPluginFolderProblem;
use Aternos\Codex\Minecraft\Test\Logs\TestLog;
use FilesystemIterator;
use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use RegexIterator;

/**
 * Checks that every insight pattern still works on long log entries.
 *
 * PatternAnalyser treats a failed preg_match_all() like "no match",
 * so a pattern that hits the backtrack or JIT stack limit silently misses its problem.
 * A pattern whose time grows quadratically with the entry length never hits a limit,
 * but takes minutes on a large log.
 */
class PatternSafetyTest extends TestCase
{
    /**
     * PHP's default, set explicitly so that a local php.ini can't hide a failure
     */
    protected const int BACKTRACK_LIMIT = 1_000_000;

    /**
     * Entries of the test logs are repeated up to this size, real uploads have entries of this size
     */
    protected const int SCALED_ENTRY_SIZE = 1_000_000;

    /**
     * Only entries with continuation lines (stack traces, mod lists) are worth scaling up
     */
    protected const int MIN_ENTRY_SIZE_TO_SCALE = 2_000;

    /**
     * Sizes of the synthetic inputs used to measure how the time of a pattern grows
     */
    protected const int SMALL_INPUT_SIZE = 20_000;
    protected const int LARGE_INPUT_SIZE = 80_000;

    /**
     * Linear patterns take about 4 times as long on the 4 times larger input, quadratic ones 16 times
     */
    protected const float MAX_GROWTH_FACTOR = 8.0;

    /**
     * Below this time on the large input, timing noise outweighs the growth factor
     */
    protected const float MIN_RELEVANT_MILLISECONDS = 20.0;

    /**
     * Fragments that are repeated to build long synthetic inputs, each one is a typical part of a log line
     */
    protected const array INPUT_FRAGMENTS = [
        "log prefix" => "[12:00:00] [Server thread/ERROR]: ",
        "stack trace line" => "\tat net.minecraft.server.Main.main(Main.java:1)\n",
        "mod list" => "\t\tmod-name (modid) 1.0.0 ",
        "spaces" => " ",
        "newlines" => "\n",
    ];

    /**
     * Patterns that are known to fail on scaled entries or to grow quadratically.
     * They are reported as incomplete instead of failing, remove a pattern here when fixing it.
     * Which of them actually fails depends on whether PCRE JIT is enabled.
     */
    protected const array KNOWN_UNSAFE_PATTERNS = [
        ChunkLoadExceptionProblem::class => [0, 1, 2],
        ModDependencyProblem::class => ["loading-failed-exception"],
        ServerJarInPluginFolderProblem::class => [0],
    ];

    /**
     * @var string[]|null
     */
    protected static ?array $testLogEntries = null;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        ini_set("pcre.backtrack_limit", (string)static::BACKTRACK_LIMIT);
    }

    /**
     * One case per pattern of every insight class in src/Analysis, also the ones no analyser registers
     *
     * @return Generator<string, array{class-string<PatternInsightInterface>, int|string, string}>
     */
    public static function providePatterns(): Generator
    {
        $analysisPath = realpath(__DIR__ . "/../../../src/Analysis");
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($analysisPath, FilesystemIterator::SKIP_DOTS));
        $classes = [];
        foreach ($files as $file) {
            $relativeName = str_replace("/", "\\", substr($file->getPathname(), strlen($analysisPath) + 1, -strlen(".php")));
            $class = "Aternos\\Codex\\Minecraft\\Analysis\\" . $relativeName;
            if (is_subclass_of($class, PatternInsightInterface::class) && !(new ReflectionClass($class))->isAbstract()) {
                $classes[$relativeName] = $class;
            }
        }
        ksort($classes);

        foreach ($classes as $relativeName => $class) {
            foreach ($class::getPatterns() as $patternKey => $pattern) {
                yield $relativeName . "#" . $patternKey => [$class, $patternKey, $pattern];
            }
        }
    }

    /**
     * @param class-string<PatternInsightInterface> $class
     * @param int|string $patternKey
     * @param string $pattern
     * @return void
     */
    #[DataProvider("providePatterns")]
    public function test_pattern_works_on_test_log_entries(string $class, int|string $patternKey, string $pattern): void
    {
        $failures = [];
        foreach (static::getTestLogEntries() as $logPath => $entries) {
            foreach ($entries as $entry) {
                $failures[] = static::findPatternFailure($pattern, $entry, $logPath);
            }
        }
        $this->assertSame([], array_values(array_filter($failures)));
    }

    /**
     * @param class-string<PatternInsightInterface> $class
     * @param int|string $patternKey
     * @param string $pattern
     * @return void
     */
    #[DataProvider("providePatterns")]
    public function test_pattern_works_on_scaled_entries(string $class, int|string $patternKey, string $pattern): void
    {
        $this->skipKnownUnsafePattern($class, $patternKey);

        $failures = [];
        foreach (static::getTestLogEntries() as $logPath => $entries) {
            foreach ($entries as $entryIndex => $entry) {
                if (strlen($entry) < static::MIN_ENTRY_SIZE_TO_SCALE) {
                    continue;
                }
                $subjectDescription = "entry " . $entryIndex . " of " . $logPath . " scaled to " . static::SCALED_ENTRY_SIZE . " bytes";
                $failures[] = static::findPatternFailure($pattern, static::scaleEntry($entry), $subjectDescription);
            }
        }
        $this->assertSame([], array_values(array_filter($failures)));
    }

    /**
     * @param class-string<PatternInsightInterface> $class
     * @param int|string $patternKey
     * @param string $pattern
     * @return void
     */
    #[DataProvider("providePatterns")]
    public function test_pattern_time_grows_linearly(string $class, int|string $patternKey, string $pattern): void
    {
        $this->skipKnownUnsafePattern($class, $patternKey);

        $failures = [];
        foreach (static::INPUT_FRAGMENTS as $fragmentName => $fragment) {
            $smallInput = str_repeat($fragment, intdiv(static::SMALL_INPUT_SIZE, strlen($fragment)));
            $largeInput = str_repeat($fragment, intdiv(static::LARGE_INPUT_SIZE, strlen($fragment)));

            $largeMilliseconds = static::measureMilliseconds($pattern, $largeInput);
            if ($largeMilliseconds < static::MIN_RELEVANT_MILLISECONDS) {
                continue;
            }
            $smallMilliseconds = static::measureMilliseconds($pattern, $smallInput);

            $growthFactor = $largeMilliseconds / max($smallMilliseconds, 0.001);
            if ($growthFactor > static::MAX_GROWTH_FACTOR) {
                $failures[] = sprintf(
                    "Pattern %s takes %.0f ms on %d bytes of '%s' and %.0f ms on %d bytes, it probably scans the rest of the line from every position.",
                    $pattern, $smallMilliseconds, strlen($smallInput), $fragmentName, $largeMilliseconds, strlen($largeInput)
                );
            }
        }
        $this->assertSame([], $failures);
    }

    /**
     * Match the pattern and describe the PCRE error, if there is one
     *
     * @param string $pattern
     * @param string $subject
     * @param string $subjectDescription
     * @return string|null null if the pattern works on the subject
     */
    protected static function findPatternFailure(string $pattern, string $subject, string $subjectDescription): ?string
    {
        if (preg_match_all($pattern, $subject) !== false) {
            return null;
        }
        return sprintf(
            "Pattern %s fails on %s with '%s', so the analysis silently misses it.",
            $pattern, $subjectDescription, preg_last_error_msg()
        );
    }

    /**
     * @param class-string<PatternInsightInterface> $class
     * @param int|string $patternKey
     * @return void
     */
    protected function skipKnownUnsafePattern(string $class, int|string $patternKey): void
    {
        if (in_array($patternKey, static::KNOWN_UNSAFE_PATTERNS[$class] ?? [], true)) {
            $this->markTestIncomplete("Pattern " . $patternKey . " of " . $class . " is known to be unsafe on long entries.");
        }
    }

    /**
     * Repeat everything after the first line of the entry until it reaches SCALED_ENTRY_SIZE,
     * like a stack trace or mod list that is much longer than in the test log
     *
     * @param string $entry
     * @return string
     */
    protected static function scaleEntry(string $entry): string
    {
        [$firstLine, $continuationLines] = explode("\n", $entry, 2) + [1 => ""];
        $continuationLines .= "\n";
        $repetitions = max(1, intdiv(static::SCALED_ENTRY_SIZE, strlen($continuationLines)));
        return $firstLine . "\n" . str_repeat($continuationLines, $repetitions);
    }

    /**
     * Fastest of three runs, to reduce noise from the machine
     *
     * @param string $pattern
     * @param string $subject
     * @return float
     */
    protected static function measureMilliseconds(string $pattern, string $subject): float
    {
        $fastest = INF;
        for ($run = 0; $run < 3; $run++) {
            $start = hrtime(true);
            preg_match_all($pattern, $subject);
            $fastest = min($fastest, (hrtime(true) - $start) / 1e6);
        }
        return $fastest;
    }

    /**
     * Entries of all test logs as strings, the way PatternAnalyser matches them, keyed by log path
     *
     * @return array<string, string[]>
     */
    protected static function getTestLogEntries(): array
    {
        if (static::$testLogEntries !== null) {
            return static::$testLogEntries;
        }

        $logFiles = new RegexIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator(TestLog::BASE_PATH)), '/\.log$/');
        $entriesByLog = [];
        foreach ($logFiles as $logFile) {
            $testLog = new TestLog(realpath($logFile->getPathname()));
            $entriesByLog[$testLog->getLogPath()] = array_map(strval(...), iterator_to_array($testLog->getParsedLog(), false));
        }
        ksort($entriesByLog);

        return static::$testLogEntries = $entriesByLog;
    }
}
