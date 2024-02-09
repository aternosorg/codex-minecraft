<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\NeoForgeAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;
use Aternos\Codex\Minecraft\Parser\ForgeParser;
use Aternos\Codex\Parser\ParserInterface;

abstract class NeoForgeLog extends VanillaLog
{
    protected static string $pattern = '/^(\[(?:\S+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\]]+\/(\w+)\](?: \[([^\]]+)\])?\:).*$/';

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/NeoForge mod loading/')
        ]);
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new NeoForgeAnalyser();
    }

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
    {
        return (new ForgeParser())
            ->setPattern(static::$pattern)
            ->setMatches([ForgeParser::PREFIX, ForgeParser::LEVEL, ForgeParser::CHANNEL]);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "NeoForge";
    }
}