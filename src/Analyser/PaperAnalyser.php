<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ApiVersionLowerThanAllowedProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ServerJarInPluginFolderProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\VersionDowngradeProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\UnregisteredClassLoaderProblem;

class PaperAnalyser extends BukkitAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(VersionDowngradeProblem::class);
        $this->addPossibleInsightClass(ApiVersionLowerThanAllowedProblem::class);
        $this->addPossibleInsightClass(ServerJarInPluginFolderProblem::class);
        $this->addPossibleInsightClass(UnregisteredClassLoaderProblem::class);
    }
}
