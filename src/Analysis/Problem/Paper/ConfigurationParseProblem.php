<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\AnalysisInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\ConfigurationSyntaxFixSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A Paper configuration file is not valid YAML, so the server crashes during startup.
 *
 * The file and the position of the error are not part of the matched line.
 * They are read from the stack trace and the YAML error in the rest of the log, which works for logs and crash reports.
 * The file is only known for the global and the world defaults configuration,
 * the configuration of a single world does not show up in the stack trace with its name.
 */
class ConfigurationParseProblem extends PaperProblem
{
    /**
     * Frame of the method that loads a configuration file, for example:
     * at io.papermc.paper.configuration.Configurations.initializeGlobalConfiguration(Configurations.java:132)
     */
    protected const string CONFIGURATION_FRAME_PATTERN = '/io\.papermc\.paper\.configuration\.Configurations\.initialize(?<configuration>Global|WorldDefaults)Configuration\(/';

    /**
     * Position of the YAML error, for example:
     *  in 'reader', line 134, column 8:
     */
    protected const string POSITION_PATTERN = "/ in 'reader', line (?<line>\d+), column (?<column>\d+):/";

    protected const array CONFIGURATION_FILES = [
        "Global" => "config/paper-global.yml",
        "WorldDefaults" => "config/paper-world-defaults.yml",
    ];

    protected ?string $filePath = null;
    protected ?int $line = null;
    protected ?int $column = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        if ($this->getFilePath() === null || $this->getLine() === null) {
            return Translator::getInstance()->getTranslation("paper-configuration-parse-unknown-file-problem");
        }
        return Translator::getInstance()->getTranslation("paper-configuration-parse-problem", [
            "file-path" => $this->getFilePath(),
            "line" => $this->getLine(),
            "column" => $this->getColumn()
        ]);
    }

    /**
     * Matches the exception that Configurate throws for a file that is not valid YAML, for example:
     * org.spongepowered.configurate.loader.ParsingException: []: Unknown error occurred while loading
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/org\.spongepowered\.configurate\.loader\.ParsingException: /'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
    }

    /**
     * Reads the file and the position of the error from the log, see the class docblock.
     *
     * @param AnalysisInterface $analysis
     * @return $this
     */
    public function setAnalysis(AnalysisInterface $analysis): static
    {
        parent::setAnalysis($analysis);
        $content = $this->getLogContent() ?? "";

        if (preg_match(static::CONFIGURATION_FRAME_PATTERN, $content, $matches)) {
            $this->filePath = static::CONFIGURATION_FILES[$matches["configuration"]];
        }
        if (preg_match(static::POSITION_PATTERN, $content, $matches)) {
            $this->line = (int)$matches["line"];
            $this->column = (int)$matches["column"];
        }

        if ($this->getFilePath() !== null && $this->getLine() !== null) {
            $this->addSolution(new ConfigurationSyntaxFixSolution($this->getFilePath(), $this->getLine(), $this->getColumn()));
        }
        if ($this->getFilePath() !== null) {
            $this->addSolution(new FileDeleteSolution($this->getFilePath()));
        }
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    /**
     * @return int|null
     */
    public function getLine(): ?int
    {
        return $this->line;
    }

    /**
     * @return int|null
     */
    public function getColumn(): ?int
    {
        return $this->column;
    }
}
