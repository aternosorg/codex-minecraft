<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\CustomSkinLoaderAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader\CustomSkinLoaderVersionInformation;
use Aternos\Codex\Minecraft\Parser\Parser;

/**
 * Class CustomSkinLoaderLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader
 */
abstract class CustomSkinLoaderLog extends \Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog
{
    protected static string $prefixPattern = '\[\d{4}(?:\-\d\d){2} (?:[0-9]{2}\:?){3}(?:\] \[)?[^\]]+[ \/][A-Z]+\](?: \[[^\]]+\]:)? ';
    protected static string $pattern = '/^(\[(\d{4}(?:\-\d\d){2} (?:[0-9]{2}\:?){3})(?:\] \[)?[^\]]+[ \/]([A-Z]+)\](?: \[[^\]]+\]:)?) .*$/';
    protected static ?string $versionInformationClass = CustomSkinLoaderVersionInformation::class;

    /**
     * @return Parser
     */
    public static function getDefaultParser(): Parser
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setTimeFormat('Y-m-d H:i:s')
            ->setMatches([Parser::PREFIX, Parser::TIME, Parser::LEVEL]);;
    }

    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new CustomSkinLoaderAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "CustomSkinLoader";
    }

    /**
     * @return string
     */
    public static function getPrefixPattern(): string
    {
        return static::$prefixPattern;
    }
}