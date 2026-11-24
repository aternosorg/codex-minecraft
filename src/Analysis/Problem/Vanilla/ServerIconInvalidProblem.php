<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The server-icon.png in the server folder is not a PNG image of 64x64 pixels, so the server has no icon.
 *
 * Vanilla logs the message, and Bukkit servers log it a second time when CraftBukkit loads the icon.
 * Deleting the file is safe: the server runs normally without an icon.
 */
class ServerIconInvalidProblem extends VanillaProblem
{
    protected const string FILE = "server-icon.png";

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("server-icon-invalid-problem", [
            "file-path" => static::FILE
        ]);
    }

    /**
     * Matches the error the server logs with the exception of the image, for example:
     * Couldn't load server icon
     * java.io.IOException: Bad PNG Signature: 6E6F74206120706E
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ["/Couldn't load server icon/"];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new FileDeleteSolution(static::FILE));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static;
    }
}
