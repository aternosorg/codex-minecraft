<?php

namespace Aternos\Codex\Minecraft\Test\Logs;

use Aternos\Codex\Log\File\PathLogFile;
use Aternos\Codex\Minecraft\Detective\Detective;
use Exception;

class TestLog
{
    const BASE_PATH = __DIR__ . "/../../data/";
    protected string $logPath;

    /**
     * @param string $logPath
     */
    public function __construct(string $logPath)
    {
        $this->setLogPath($logPath);
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getExpectedPath(): string
    {
        $dirname = dirname($this->getFullLogPath());
        $basename = $this->getName();

        $outputPath = $dirname . "/" . $basename . ".json";
        if (!file_exists($outputPath)) {
            throw new Exception("Output file does not exist: " . $outputPath);
        }
        return $outputPath;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        $logFile = new PathLogFile($this->getFullLogPath());
        $detective = new Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $log->analyse();
        return json_encode($log, JSON_PRETTY_PRINT);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return basename($this->getFullLogPath(), ".log");
    }

    /**
     * @return string
     */
    public function getFunctionName(): string
    {
        return "test_" . str_replace("-", "_", $this->getName());
    }

    /**
     * @return string
     */
    public function getTestFunction(): string
    {
        return
            "    /**" . PHP_EOL .
            "     * @return void" . PHP_EOL .
            "     * @throws Exception" . PHP_EOL .
            "     */" . PHP_EOL .
            "    public function " . $this->getFunctionName() . "(): void" . PHP_EOL .
            "    {" . PHP_EOL .
            "        \$log = new TestLog('" . $this->getLogPath() . "');" . PHP_EOL .
            "        \$this->assertStringEqualsFile(\$log->getExpectedPath(), \$log->getOutput(), \$log->getLogPath());" . PHP_EOL .
            "    }" . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getFullLogPath(): string
    {
        return static::BASE_PATH . $this->logPath;
    }

    /**
     * @param string $logPath
     * @return $this
     */
    public function setLogPath(string $logPath): static
    {
        if (str_starts_with($logPath, "/")) {
            $logPath = substr($logPath, strlen(realpath(static::BASE_PATH)) + 1);
        }
        $this->logPath = $logPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogPath(): string
    {
        return $this->logPath;
    }
}