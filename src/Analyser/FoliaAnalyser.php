<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Folia\PluginRegionalTickingProblem;

/**
 * Class FoliaAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class FoliaAnalyser extends PaperAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(PluginRegionalTickingProblem::class);
    }
}