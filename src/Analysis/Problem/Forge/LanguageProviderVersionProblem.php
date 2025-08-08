<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ForgeInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class LanguageProviderVersionProblem extends ModProblem
{
    protected string $languageProvider = "";
    protected string $requiredVersion = "";
    protected string $foundVersion = "";

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        $provider = $this->languageProvider;
        if ($provider === "javafml") {
            $provider = "Forge";
        }
        return Translator::getInstance()->getTranslation("forge-language-provider-version-problem",
            [
                "mod-file" => $this->getModName(),
                "required-version" => $provider . " " . $this->requiredVersion,
                "found-version" => $this->foundVersion
            ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Mod File ([^\/\n]+) needs language provider ([\w-]+):(.*?) to load[\n\s§\da-f]*We have found (\d+)/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches[1];
        $this->languageProvider = $matches[2];
        $this->requiredVersion = $matches[3];
        $this->foundVersion = $matches[4];

        $this->addSolution(new ModRemoveSolution($this->getModName()));
        $this->addSolution(new ForgeInstallDifferentVersionSolution());
    }
}
