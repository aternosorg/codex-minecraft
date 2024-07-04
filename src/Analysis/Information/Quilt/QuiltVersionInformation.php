<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Quilt;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class QuiltJavaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Quilt
 */
class QuiltVersionInformation extends QuiltInformation
{
    protected static string $quiltVersionInformation = "[\d\.]+(?:-beta.\d+)?";

    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("quilt-version");
    }


    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/'. VanillaServerLog::getPrefixPattern() .'Loading Minecraft '. VanillaVersionInformation::getVersionPattern() .' with Quilt Loader ('. static::$quiltVersionInformation .')/'
        ];
    }

    /**
     * @param string[] $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[3];
    }
}