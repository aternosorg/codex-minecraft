<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ServerLogTypeInterface;

class FabricServerLog extends FabricLog implements ServerLogTypeInterface
{
    /**
     * The classic server launcher stops before the loader logs its "Loading Minecraft ... with Fabric Loader" line,
     * so a missing server jar is only recognisable by the launcher's own message, which has no prefix:
     * The Minecraft server .JAR is missing (/srv/server/server.jar)!
     *
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/^The Minecraft server \.JAR is missing \(/m')
        ]);
    }
}
