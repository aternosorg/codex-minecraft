<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\NeoForge;

use Aternos\Codex\Minecraft\Translator\Translator;

class NeoForgeJavaVersionInformation extends NeoForgeInformation
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
        return ['/\[cpw\.mods\.modlauncher\.Launcher\/MODLAUNCHER\]: ModLauncher(?: [\w\.+]+)? starting: java version ([0-9\._]+) by Oracle Corporation/'];
    }
}