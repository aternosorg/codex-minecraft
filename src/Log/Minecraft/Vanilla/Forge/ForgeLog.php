<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\WeightedSinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\ForgeAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;
use Aternos\Codex\Minecraft\Parser\ForgeParser;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;
use Aternos\Codex\Parser\PatternParser;

abstract class ForgeLog extends VanillaLog
{
    /**
     * Start of an INFO line from the main thread, used by the Forge and NeoForge detectors.
     * Usually the level is in the thread bracket, in newer versions followed by the logger:
     *   [12:00:00] [main/INFO]:
     *   [12:00:00] [main/INFO] [cpw.mods.modlauncher.Launcher/]:
     * The Modrinth App writes the thread and the logger in separate brackets, with the level after the logger:
     *   [18:43:19] [main] [cpw.mods.modlauncher.Launcher/INFO]:
     */
    public const string MAIN_INFO_PREFIX = '^\[[^\]]+\] \[main(?:\/INFO\](?: \[[^\]]+\])?|\] \[[^\]]+\/INFO\]): ';

    /**
     * Matches the start of an entry, the optional bracket without a slash is the thread written by the Modrinth App:
     *   [12:00:00] [main/INFO] [cpw.mods.modlauncher.Launcher/]:
     *   [18:43:19] [main] [cpw.mods.modlauncher.Launcher/INFO]:
     */
    protected static string $pattern = '/^(\[(?:\S+ )?(?:[0-9]{2}:?){3}(?:\.[0-9]+)?\] (?:\[[^\]\/]+\] )?\[[^\]]+\/(\w+)\](?: \[([^\]]+)\])?:).*$/';

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new WeightedSinglePatternDetector())->setPattern('/MinecraftForge v[0-9.]+ Initialized/')->setWeight(1)
        ]);
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new ForgeAnalyser();
    }

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
    {
        return (new ForgeParser())
            ->setPattern(static::$pattern)
            ->setMatches([Parser::PREFIX, PatternParser::LEVEL, ForgeParser::CHANNEL]);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Forge";
    }
}