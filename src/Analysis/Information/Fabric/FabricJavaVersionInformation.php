<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Fabric;

use Aternos\Codex\Minecraft\Log\VanillaLog;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class FabricJavaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Forge
 */
class FabricJavaVersionInformation extends FabricInformation
{
    /**
     * FabricJavaVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("java-version");
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/'. VanillaLog::getPrefixPattern() . '\[FabricLoader\] Loading [0-9]+ mods: (?:\w{1,63}@[^, ]+, )*java@([0-9]+)/'];
    }

    public function setMatches(array $matches, $patternKey)
    {
        $this->value = $matches[3];
    }
}
