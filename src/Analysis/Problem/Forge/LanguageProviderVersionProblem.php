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
     * Matches the error and the found version on the next line, which can have a color code:
     * Mod File ironchest-1.20.2-14.5.7.jar needs language provider javafml:48 or above to load
     * §7We have found 47
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Mod File (?<file>[^\/\n]+) needs language provider (?<provider>[\w-]+):(?<required>.*?) to load[\n\s§\da-f]*We have found (?<found>\d+)/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches["file"];
        $this->languageProvider = $matches["provider"];
        $this->requiredVersion = $matches["required"];
        $this->foundVersion = $matches["found"];

        $this->addSolution(new ModRemoveSolution($this->getModName()));
        $this->addSolution(new ForgeInstallDifferentVersionSolution());
    }
}
