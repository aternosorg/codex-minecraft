<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bedrock;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class BedrockDBStorageChainProblem extends BedrockProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("bedrock-dbstorage-chain-problem");
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/ERROR\] DBStorage chain is invalid\. Possibly encryption-related, or bad DBStorageConfig passed\. Reason: Unable to decipher\/decrypt LevelDB\./'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new GenerateNewWorldSolution());
    }
}