<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperConfigResetSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperInstallNewerVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperWorldConfigResetSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A Paper configuration file has a higher config version than the server supports,
 * usually because the server was downgraded to an older Paper version.
 * Paper still starts, but settings from the newer version might be ignored or misread.
 *
 * The path of a world config file is not reported, because it depends on the Paper version:
 * up to 1.21 it is in the world folder ('world_nether/paper-world.yml'),
 * since 26.1 it is in the dimension folder ('world/dimensions/minecraft/the_nether/paper-world.yml').
 */
class NewerConfigVersionProblem extends PaperProblem
{
    /**
     * The start shared by all variants of the message, capturing both config versions.
     *
     * Example: Loading a newer configuration than is supported (999 > 31)! You may have to backup & delete
     */
    protected const string NEWER_CONFIG_PREFIX = 'Loading a newer configuration than is supported \((?<config_version>\d+) > (?<supported_version>\d+)\)! You may have to backup & delete ';

    protected const string GLOBAL_CONFIG_PATH = "config/paper-global.yml";
    protected const string WORLD_DEFAULTS_CONFIG_PATH = "config/paper-world-defaults.yml";

    protected int $configVersion;
    protected int $supportedVersion;
    protected ?string $filePath = null;
    protected ?string $worldName = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        $placeholders = [
            "config-version" => $this->configVersion,
            "supported-version" => $this->supportedVersion
        ];

        if ($this->worldName !== null) {
            return Translator::getInstance()->getTranslation("paper-newer-world-config-problem",
                ["world-name" => $this->worldName, ...$placeholders]);
        }

        return Translator::getInstance()->getTranslation("paper-newer-config-file-problem",
            ["file-path" => $this->filePath, ...$placeholders]);
    }

    /**
     * Global config, world defaults config and the config of a single world.
     * Newer Paper versions name the world by its key ('minecraft:the_nether'), older ones by its name ('world_nether').
     *
     * Example: Loading a newer configuration than is supported (999 > 31)! You may have to backup & delete your global config file to start the server.
     * Example: Loading a newer configuration than is supported (999 > 31)! You may have to backup & delete the world defaults config file to start the server.
     * Example: Loading a newer configuration than is supported (999 > 31)! You may have to backup & delete the minecraft:the_nether config file to start the server.
     * Example: Loading a newer configuration than is supported (999 > 31)! You may have to backup & delete the world_nether config file to start the server.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . static::NEWER_CONFIG_PREFIX . 'your global config file to start the server\./',
            '/' . static::NEWER_CONFIG_PREFIX . 'the world defaults config file to start the server\./',
            '/' . static::NEWER_CONFIG_PREFIX . 'the (?<world>\S+) config file to start the server\./'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->configVersion = (int)$matches["config_version"];
        $this->supportedVersion = (int)$matches["supported_version"];

        if ($patternKey === 2) {
            $this->worldName = $matches["world"];
            $this->addSolution(new PaperWorldConfigResetSolution($this->worldName));
        } else {
            $this->filePath = $patternKey === 0 ? static::GLOBAL_CONFIG_PATH : static::WORLD_DEFAULTS_CONFIG_PATH;
            $this->addSolution(new PaperConfigResetSolution($this->filePath));
        }

        $this->addSolution(new PaperInstallNewerVersionSolution());
    }

    /**
     * @return int
     */
    public function getConfigVersion(): int
    {
        return $this->configVersion;
    }

    /**
     * @return int
     */
    public function getSupportedVersion(): int
    {
        return $this->supportedVersion;
    }

    /**
     * @return string|null The path of the global or world defaults config, null for the config of a single world
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    /**
     * @return string|null The name or key of the world, null for the global or world defaults config
     */
    public function getWorldName(): ?string
    {
        return $this->worldName;
    }

    /**
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getFilePath() === $insight->getFilePath()
            && $this->getWorldName() === $insight->getWorldName();
    }
}
