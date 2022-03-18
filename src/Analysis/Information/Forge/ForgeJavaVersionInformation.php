<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Forge;

use Aternos\Codex\Minecraft\Log\ForgeLog;
use Aternos\Codex\Minecraft\Log\VanillaLog;
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
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/\[cpw\.mods\.modlauncher\.Launcher\/MODLAUNCHER\]: ModLauncher(?: [\w\.+]+)? starting: java version ([0-9\._]+) by Oracle Corporation/'];
    }

}