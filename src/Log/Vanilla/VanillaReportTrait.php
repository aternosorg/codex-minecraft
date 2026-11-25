<?php

namespace Aternos\Codex\Minecraft\Log\Vanilla;

use Aternos\Codex\Minecraft\Parser\ReportParser;

trait VanillaReportTrait
{
    /**
     * @return ReportParser
     */
    public static function getDefaultParser(): ReportParser
    {
        return new ReportParser();
    }
}