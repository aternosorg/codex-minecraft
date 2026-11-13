<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Quilt;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class QuiltVersionInformation extends QuiltInformation
{
    protected static string $quiltVersionInformation = "[\d.]+(?:-beta\.\d+)?";

    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("quilt-version");
    }


    /**
     * Matches the Quilt Loader version:
     * [19:33:44] [main/INFO]: Loading Minecraft 1.18.2 with Quilt Loader 0.16.1-beta.3
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . VanillaServerLog::getPrefixPattern() . 'Loading Minecraft ' . VanillaVersionInformation::getVersionPattern() . ' with Quilt Loader (?<version>' . static::$quiltVersionInformation . ')/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches['version'];
    }
}