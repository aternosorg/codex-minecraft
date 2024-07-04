<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader\CustomSkinLoaderJavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader\CustomSkinLoaderMinecraftVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader\CustomSkinLoaderVersionInformation;

class CustomSkinLoaderAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(CustomSkinLoaderVersionInformation::class);
        $this->addPossibleInsightClass(CustomSkinLoaderJavaVersionInformation::class);
        $this->addPossibleInsightClass(CustomSkinLoaderMinecraftVersionInformation::class);
    }
}