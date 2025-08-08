<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader;

use Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader\CustomSkinLoaderLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class CustomSkinLoaderJavaVersionInformation extends CustomSkinLoaderInformation
{
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("java-version");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/^' . CustomSkinLoaderLog::getPrefixPattern() . 'Java Version: ([0-9\.]+(?:_\d+)?)/'];
    }
}