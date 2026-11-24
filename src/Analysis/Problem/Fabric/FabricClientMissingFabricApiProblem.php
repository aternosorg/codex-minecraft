<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Fabric\FabricClientInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A player tried to join with a client without Fabric Loader or without Fabric API,
 * while the server has mods with their own registry entries (blocks, items, sounds, ...).
 * Fabric API's registry sync then disconnects the player.
 *
 * The registry namespaces that Fabric API lists below the message are not turned into solutions,
 * because the message only says that they "may be related" and a namespace is not always a mod ID.
 */
class FabricClientMissingFabricApiProblem extends FabricProblem
{
    protected string $playerName;
    protected bool $loaderMissing;

    /**
     * @return string
     */
    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    /**
     * @return bool true if the client has no Fabric Loader at all, false if only Fabric API is missing
     */
    public function isLoaderMissing(): bool
    {
        return $this->loaderMissing;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        $key = $this->isLoaderMissing() ? "fabric-client-missing-loader-problem" : "fabric-client-missing-fabric-api-problem";
        return Translator::getInstance()->getTranslation($key, ["player-name" => $this->getPlayerName()]);
    }

    /**
     * Matches the disconnect of a player, for a client without Fabric Loader (Vanilla) and for a client without Fabric API:
     * Tester (f3d28cb0-7225-3cb1-baeb-2dadd2be89ae) lost connection: This server requires Fabric Loader and Fabric API installed on your client!
     * Tester (f3d28cb0-7225-3cb1-baeb-2dadd2be89ae) lost connection: This server requires Fabric API installed on your client!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        $player = '(?<player>\S+) \([0-9a-f-]+\) lost connection: ';
        return [
            'loader' => '/' . $player . 'This server requires Fabric Loader and Fabric API installed on your client!/',
            'api' => '/' . $player . 'This server requires Fabric API installed on your client!/',
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->playerName = $matches['player'];
        $this->loaderMissing = $patternKey === 'loader';
        $this->addSolution(new FabricClientInstallSolution());
    }

    /**
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPlayerName() === $insight->getPlayerName()
            && $this->isLoaderMissing() === $insight->isLoaderMissing();
    }
}
