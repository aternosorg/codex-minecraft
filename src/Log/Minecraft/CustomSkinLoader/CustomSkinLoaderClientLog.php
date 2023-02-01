<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader\CustomSkinLoaderVersionInformation;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

class CustomSkinLoaderClientLog extends CustomSkinLoaderLog implements ClientLogTypeInterface
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())
            ->setPattern("/^\[\d{4}(?:\-\d\d){2} (?:[0-9]{2}\:?){3}\] \[Render thread INFO\] CustomSkinLoader "
                . CustomSkinLoaderVersionInformation::getVersionPattern() . "$/m")];
    }
}