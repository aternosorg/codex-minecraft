<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Quilt;

use Aternos\Codex\Minecraft\Log\VanillaLog;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class QuiltJavaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Quilt
 */
class QuiltJavaVersionInformation extends QuiltInformation
{
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("java-version");
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
        return ['/'. VanillaLog::getPrefixPattern() .'Loading [0-9]+ mods:[\s\n](?:\s*- .+\n ?)*(?:\s+- )?java[ @](\d+)/'];
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