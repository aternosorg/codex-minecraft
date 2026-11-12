<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ApiVersionLowerThanAllowedProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ServerJarInPluginFolderProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\VersionDowngradeProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\UnregisteredClassLoaderProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\PluginUpdateProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\MisconfiguredUpdateDirectoryProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\AmbiguousProvidedNameProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\PluginBootstrapperProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\PluginDataFolderProblem;

class PaperAnalyser extends BukkitAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(VersionDowngradeProblem::class);
        $this->addPossibleInsightClass(ApiVersionLowerThanAllowedProblem::class);
        $this->addPossibleInsightClass(ServerJarInPluginFolderProblem::class);
        $this->addPossibleInsightClass(UnregisteredClassLoaderProblem::class);
        $this->addPossibleInsightClass(PluginUpdateProblem::class);
        $this->addPossibleInsightClass(MisconfiguredUpdateDirectoryProblem::class);
        $this->addPossibleInsightClass(AmbiguousProvidedNameProblem::class);
        $this->addPossibleInsightClass(PluginBootstrapperProblem::class);
        $this->addPossibleInsightClass(PluginDataFolderProblem::class);
    }
}
