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
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/\[[^\]]+\]: ModLauncher(?: [\w\.+]+)? starting: java version ([0-9\._]+) by/'];
    }

}