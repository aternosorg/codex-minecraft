<?php

namespace Aternos\Codex\Minecraft\Parser;

use Aternos\Codex\Log\Line;
use Aternos\Codex\Minecraft\Log\Entry;

class ReportParser extends \Aternos\Codex\Parser\Parser
{

    protected const ReportLevel DEFAULT_LEVEL = ReportLevel::INFO;

    /**
     * @var array<int, array<string>> Regular expression patterns to match log lines to levels
     */
    protected const array PATTERN = [
        ReportLevel::WARNING->value => ["/\s*WARNING: .*$/"],
        ReportLevel::STACKTRACE->value => ["/^\s+at (?:\w+\/+)?\S+\(.+\)$/", "/^(?:Caused by: )?[a-z]+\.(?:\w+\.?)+: .*$/", "/^\\tat [a-z]+\..*$/"],
        ReportLevel::INFO->value => ["/^([^|:]+:) .+$/", "/^(\w+:)$/", "/^(\\t[^:.]+:)$/"],
        ReportLevel::TITLE->value => ["/^-{2,4} .* -{2,4}$/"],
        ReportLevel::COMMENT->value => ["/\/\/.*$/"],
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
                        $entry->setLevel(ReportLevel::from($level));
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
