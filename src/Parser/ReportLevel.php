<?php

namespace Aternos\Codex\Minecraft\Parser;

use Aternos\Codex\Log\LevelInterface;

/**
 * Class CrashReportLevel
 *
 * @package Aternos\Codex\Minecraft\Log\CrashReport
 */
enum ReportLevel: int implements LevelInterface
{
    case WARNING = 4;
    case INFO = 6;
    case TITLE = 8;
    case COMMENT = 9;
    case STACKTRACE = 10;

    /**
     * @inheritDoc
     */
    public static function fromString(string $level): LevelInterface
    {
        return match (strtolower($level)) {
            "warning" => ReportLevel::WARNING,
            "title" => ReportLevel::TITLE,
            "comment" => ReportLevel::COMMENT,
            "stacktrace" => ReportLevel::STACKTRACE,
            default => ReportLevel::INFO
        };
    }

    /**
     * @inheritDoc
     */
    public function asString(): string
    {
        return match ($this) {
            ReportLevel::WARNING => "warning",
            ReportLevel::TITLE => "title",
            ReportLevel::COMMENT => "comment",
            ReportLevel::STACKTRACE => "stacktrace",
            ReportLevel::INFO => "info"
        };
    }

    /**
     * @return int
     */
    public function asInt(): int
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): int
    {
        return $this->value;
    }
}
