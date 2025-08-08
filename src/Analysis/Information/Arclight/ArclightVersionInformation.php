<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Arclight;

use Aternos\Codex\Minecraft\Translator\Translator;

class ArclightVersionInformation extends ArclightInformation
{

    /**
     * MohistVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("arclight-version");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/This server is running Arclight version arclight-[0-9\.wa]+-[\.0-9]+(?:-SNAPSHOT)?-([0-9a-f]+) /'
        ];
    }
}