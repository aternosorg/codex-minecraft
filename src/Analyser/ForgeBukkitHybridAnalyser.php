<?php

namespace Aternos\Codex\Minecraft\Analyser;

/**
 * Class ForgeBukkitHybridAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
abstract class ForgeBukkitHybridAnalyser extends ForgeAnalyser
{
    public function __construct()
    {
        parent::__construct();

        foreach (BukkitAnalyser::getInsightClasses() as $insightClass) {
            $this->addPossibleInsightClass($insightClass);
        }
    }
}