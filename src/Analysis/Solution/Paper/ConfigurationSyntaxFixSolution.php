<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Fix the YAML syntax of a configuration file at the position that the parser reported.
 */
class ConfigurationSyntaxFixSolution extends PaperSolution
{
    /**
     * @param string $filePath
     * @param int $line
     * @param int $column
     */
    public function __construct(protected string $filePath, protected int $line, protected int $column)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-configuration-syntax-fix-solution", [
            "file-path" => $this->filePath,
            "line" => $this->line,
            "column" => $this->column
        ]);
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }
}
