<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Quilt;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\VanillaLog;
use Aternos\Codex\Minecraft\Translator\Translator;

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
            '/'. VanillaLog::getPrefixPattern() .'Loading Minecraft '. VanillaVersionInformation::getVersionPattern() .' with Quilt Loader ('. static::$quiltVersionInformation .')/'
        ];
    }

    public function setMatches(array $matches, $patternKey): void
    {
        $this->value = $matches[3];
    }
}