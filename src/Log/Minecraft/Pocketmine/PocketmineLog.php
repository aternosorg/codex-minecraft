<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Pocketmine;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\PocketmineAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineBedrockVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class PocketmineLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Pocketmine
 */
abstract class PocketmineLog extends MinecraftLog
{
    protected static string $pattern = '/^(((?:[0-9]{2,4}-?){3} \[(?:[0-9]{2}\:?){3})(?:\.[0-9]{3})?\] \[[^\/]+\/(\w+)\]\:).*$/';
    protected static ?string $versionInformationClass = PocketmineBedrockVersionInformation::class;

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setTimeFormat('Y-m-d [H:i:s')
            ->setMatches([Parser::PREFIX, Parser::TIME, Parser::LEVEL]);
    }

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/This server is running PocketMine-MP version/')
        ]);
    }

    /**
     * @return PocketmineAnalyser
     */
    public static function getDefaultAnalyser(): PocketmineAnalyser
    {
        return new PocketmineAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Pocketmine";
    }
}