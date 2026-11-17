<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The help.yml in the server folder is not valid YAML, so the server ignores it and uses the default help topics.
 *
 * Deleting the file is safe: the server does not need it and uses the default help topics without it.
 * Only custom help topics from the file are lost.
 */
class HelpYmlInvalidProblem extends BukkitProblem
{
    protected const string FILE = "help.yml";

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("help-yml-invalid-problem", [
            "file-path" => static::FILE
        ]);
    }

    /**
     * Matches the error CraftBukkit logs when it cannot parse help.yml, for example:
     * [16:22:04 ERROR]: Failed to load help.yml. Verify the yaml indentation is correct. Reverting to default help.yml.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Failed to load help\.yml\. Verify the yaml indentation is correct\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new FileDeleteSolution(static::FILE));
    }
}
