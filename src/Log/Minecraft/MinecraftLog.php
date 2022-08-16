<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Analyser\PatternAnalyser;
use Aternos\Codex\Detective\LinePatternDetector;
use Aternos\Codex\Log\DetectableLogInterface;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\ContentLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\ProxyLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\ServerLogTypeInterface;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class MinecraftLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft
 */
class MinecraftLog extends \Aternos\Codex\Log\AnalysableLog implements DetectableLogInterface
{
    protected static string $pattern;

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setMatches([Parser::PREFIX, Parser::LEVEL]);
    }

    /**
     * Get an array of detectors matching DetectorInterface
     *
     * @return array
     */
    public static function getDetectors(): array
    {
        return [
            (new LinePatternDetector())->setPattern(static::$pattern)
        ];
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return match (true) {
            $this instanceof ServerLogTypeInterface => "Server",
            $this instanceof ClientLogTypeInterface => "Client",
            $this instanceof ProxyLogTypeInterface => "Proxy",
            $this instanceof CrashReportLogTypeInterface => "Crash Report",
            $this instanceof ContentLogTypeInterface => "Content",
            default => "Unknown"
        };
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Unknown";
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new PatternAnalyser();
    }
}