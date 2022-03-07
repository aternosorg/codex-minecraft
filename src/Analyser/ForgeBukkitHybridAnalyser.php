<?php

namespace Aternos\Codex\Minecraft\Analyser;

/**
 * Class ForgeBukkitHybridAnalyser
 * Analyzes logs of a Forge+Bukkit hybrid server
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