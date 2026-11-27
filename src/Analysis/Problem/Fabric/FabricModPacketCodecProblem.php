<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A network packet (custom payload) of a mod could not be written or read.
 * Fabric API adds the payload ID to the exception, and its namespace is usually the mod ID.
 * The mod mostly has different versions on the client and the server, less often it is broken.
 *
 * Payloads in the "minecraft" namespace are not matched, because they do not belong to a mod.
 */
class FabricModPacketCodecProblem extends FabricModProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-packet-codec-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * Matches a payload that could not be read or written, e.g.
     * Tester lost connection: Internal Exception: io.netty.handler.codec.DecoderException: Failed to decode packet 'serverbound/minecraft:custom_payload' (pktmod:select)
     * io.netty.handler.codec.EncoderException: Failed to encode packet 'clientbound/minecraft:custom_payload' (pktmod:sync)
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Failed to (?:de|en)code packet '[^']+' \((?!minecraft:)(?<namespace>[a-z0-9_.-]+):[^)]+\)/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches['namespace']);
        $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
        $this->addSolution(new ModRemoveSolution($this->getModName()));
    }
}
