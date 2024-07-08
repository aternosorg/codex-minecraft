<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ApiVersionLowerThanAllowedProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Paper\VersionDowngradeProblem;

/**
 * Class PaperAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class PaperAnalyser extends BukkitAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(VersionDowngradeProblem::class);
        $this->addPossibleInsightClass(ApiVersionLowerThanAllowedProblem::class);
    }
}
