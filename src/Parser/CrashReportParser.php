<?php

namespace Aternos\Codex\Minecraft\Parser;

use Aternos\Codex\Log\Line;
use Aternos\Codex\Minecraft\Log\Entry;

class CrashReportParser extends \Aternos\Codex\Parser\Parser
{
    const LEVEL_INFO = "INFO";
    const LEVEL_WARNING = "WARN";
    const LEVEL_TITLE = "TITLE";
    const LEVEL_COMMENT = "COMMENT";
    const LEVEL_STACKTRACE = "STACKTRACE";

    const DEFAULT_LEVEL = self::LEVEL_INFO;

    const PATTERN = [
        self::LEVEL_WARNING => ["/\s*WARNING: .*$/"],
        self::LEVEL_STACKTRACE => ["/^\s+at \S+\(.+\)$/", "/^(?:Caused by: )?[a-z]+\.(?:\w+\.?)+: .*$/", "/^\\tat [a-z]+\..*$/"],
        self::LEVEL_INFO => ["/^([^.:]+:) .+$/", "/^(\w+:)$/", "/^(\\t[^:.]+:)$/"],
        self::LEVEL_TITLE => ["/^-{2,4} .* -{2,4}$/"],
        self::LEVEL_COMMENT => ["/\/\/.*$/"],
    ];

    public function parse()
    {
        foreach ($this->getLogContentAsArray() as $number => $lineString) {
            $line = new Line($number + 1, $lineString);

            $entry = (new Entry())->addLine($line);
            $this->log->addEntry($entry);

            foreach (static::PATTERN as $level => $patterns) {
                foreach ($patterns as $pattern) {
                    if (preg_match($pattern, $lineString, $matches)) {
                        $entry->setLevel($level);
                        if (isset($matches[1])) {
                            $entry->setPrefix($matches[1]);
                        }
                        continue 3;
                    }
                    $entry->setLevel(static::DEFAULT_LEVEL);
                }
            }
        }
    }
}