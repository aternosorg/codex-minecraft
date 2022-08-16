<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Analyser\PatternAnalyser;
use Aternos\Codex\Analysis\InformationInterface;
use Aternos\Codex\Detective\LinePatternDetector;
use Aternos\Codex\Log\AnalysableLog;
use Aternos\Codex\Log\DetectableLogInterface;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\ContentLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\ProxyLogTypeInterface;
use Aternos\Codex\Minecraft\Log\Type\ServerLogTypeInterface;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class MinecraftLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft
 */
class MinecraftLog extends AnalysableLog implements DetectableLogInterface
{
    protected static string $pattern;

    /** @var class-string<InformationInterface>|null */
    protected static ?string $versionInformationClass = null;

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new PatternAnalyser();
    }

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setMatches([Parser::PREFIX, Parser::LEVEL]);
    }

    /**
     * Get an array of detectors matching DetectorInterface
     *
     * @return array
     */
    public static function getDetectors(): array
    {
        return [
            (new LinePatternDetector())->setPattern(static::$pattern)
        ];
    }

    /**
     * @return string|null
     */
    public function getTypeName(): ?string
    {
        return match (true) {
            $this instanceof ServerLogTypeInterface => "Server",
            $this instanceof ClientLogTypeInterface => "Client",
            $this instanceof ProxyLogTypeInterface => "Proxy",
            $this instanceof CrashReportLogTypeInterface => "Crash Report",
            $this instanceof ContentLogTypeInterface => "Content",
            default => null
        };
    }

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        if (static::$versionInformationClass === null) {
            return null;
        }

        /** @var InformationInterface[] $insights */
        $insights = $this->analyse()->getFilteredInsights(static::$versionInformationClass);
        if (count($insights) === 0) {
            return null;
        }
        return $insights[0]->getValue();
    }

    /**
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        if ($this->getTypeName() === null) {
            return null;
        }
        return strtolower(str_replace(" ", "-", $this->getTypeName()));
    }

    /**
     * @return string|null
     */
    public function getNameId(): ?string
    {
        if ($this->getName() === null) {
            return null;
        }
        return strtolower(str_replace(" ", "-", $this->getName()));
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        $nameId = $this->getNameId() ?? "unknown";
        $typeId = $this->getTypeId() ?? "unknown";
        return $nameId . "/" . $typeId;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return null;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_merge([
            'id' => $this->getId(),
            'name' => $this->getName(),
            'type' => $this->getTypeName(),
            'version' => $this->getVersion()
        ], parent::jsonSerialize());
    }
}