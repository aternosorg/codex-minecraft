<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A mod failed to load on a dedicated server, because it tried to load a client-only class
 * or refused to load, because it is a client-only mod.
 *
 * Only the fatal case is detected (a "Loading errors encountered" block that names the mod).
 * The plain "Attempted to load class ... for invalid dist DEDICATED_SERVER" line is not matched on its own,
 * because it is also logged for skipped client mixins and caught class scans, which are harmless.
 */
class ClientOnlyModProblem extends ModProblem
{
    /**
     * Matches the cause line Forge prints below the failing mod in a "Loading errors encountered" block, e.g.
     * "§7java.lang.RuntimeException: Attempted to load class X for invalid dist DEDICATED_SERVER" or
     * "§7java.lang.UnsupportedOperationException: Attempting to load a clientside only mod [EMF] on the server, refusing"
     */
    public const string CLIENT_ONLY_CAUSE = '(?:§7)?(?:[\w.$]+: )*(?:Attempted to load class (\S+) for invalid dist DEDICATED_SERVER|Attempting to load a clientside only mod)';

    protected string $modId;
    protected ?string $className = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("client-only-mod-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/^\s*([^\(\n]+) \(([^\)]+)\) (?:has failed to load correctly|encountered an error during[^\n]*)\n' . static::CLIENT_ONLY_CAUSE . '/m'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = trim($matches[1]);
        $this->modId = $matches[2];
        if (!empty($matches[3])) {
            $this->className = str_replace("/", ".", $matches[3]);
        }

        $this->addSolution(new ModRemoveSolution($this->getModName()));
        $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
    }

    /**
     * @return string
     */
    public function getModId(): string
    {
        return $this->modId;
    }

    /**
     * @return string|null the client-only class the mod tried to load, e.g. "net.minecraft.client.Minecraft",
     * or null if the mod refused to load on its own
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }
}
