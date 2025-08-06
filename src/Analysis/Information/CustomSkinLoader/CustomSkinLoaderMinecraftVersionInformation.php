<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader\CustomSkinLoaderLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class CustomSkinLoaderMinecraftVersionInformation extends CustomSkinLoaderInformation
{
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("minecraft-version");
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/^' . CustomSkinLoaderLog::getPrefixPattern() . 'Minecraft: (' . VanillaVersionInformation::getVersionPattern() . ')$/'];
    }
}