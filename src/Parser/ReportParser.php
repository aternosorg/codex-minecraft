<?php

namespace Aternos\Codex\Minecraft\Parser;

use Aternos\Codex\Log\Line;
use Aternos\Codex\Minecraft\Log\Entry;

class ReportParser extends \Aternos\Codex\Parser\Parser
{
    protected const string LEVEL_INFO = "info";
    protected const string LEVEL_WARNING = "warn";
    protected const string LEVEL_TITLE = "title";
    protected const string LEVEL_COMMENT = "comment";
    protected const string LEVEL_STACKTRACE = "stacktrace";

    protected const string DEFAULT_LEVEL = self::LEVEL_INFO;

    protected const array PATTERN = [
        self::LEVEL_WARNING => ["/\s*WARNING: .*$/"],
        self::LEVEL_STACKTRACE => ["/^\s+at (?:\w+\/+)?\S+\(.+\)$/", "/^(?:Caused by: )?[a-z]+\.(?:\w+\.?)+: .*$/", "/^\\tat [a-z]+\..*$/"],
        self::LEVEL_INFO => ["/^([^|:]+:) .+$/", "/^(\w+:)$/", "/^(\\t[^:.]+:)$/"],
        self::LEVEL_TITLE => ["/^-{2,4} .* -{2,4}$/"],
        self::LEVEL_COMMENT => ["/\/\/.*$/"],
    ];

    /**
     * @return void
     */
    public function parse(): void
    {
        foreach ($this->getLogContentAsArray() as $number => $lineString) {
            $line = new Line($number + 1, $lineString);

            $entry = (new Entry())->addLine($line);
            $this->log->addEntry($entry);

            foreach (static::PATTERN as $level => $patterns) {
                foreach ($patterns as $pattern) {
                    if (preg_match($pattern, $lineString, $matches)) {
                        $entry->setLevel(ReportLevel::fromString($level));
                        if (isset($matches[1])) {
                            $entry->setPrefix($matches[1]);
                        }
                        continue 3;
                    }
                    $entry->setLevel(ReportLevel::fromString(static::DEFAULT_LEVEL));
                }
            }
        }
    }
}
