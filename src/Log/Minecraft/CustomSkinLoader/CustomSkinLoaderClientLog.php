<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader\CustomSkinLoaderVersionInformation;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

class CustomSkinLoaderClientLog extends CustomSkinLoaderLog implements ClientLogTypeInterface
{
    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())
            ->setPattern("/^" . static::$prefixPattern . "CustomSkinLoader "
                . CustomSkinLoaderVersionInformation::getVersionPattern() . "$/m")];
    }
}