<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

class ForgeJavaVersionInformation extends ForgeInformation
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
        return ['/\[[^\]]+\]: ModLauncher(?: [\w\.+]+)? starting: java version ([0-9\._]+) by/'];
    }

}