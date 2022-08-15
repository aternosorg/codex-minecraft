<?php

namespace tests\Logs;

use Aternos\Codex\Log\File\PathLogFile;
use Aternos\Codex\Minecraft\Detective\Detective;
use Exception;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;

class LogsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @throws Exception
     */
    public function testLogs()
    {
        $basePath = __DIR__ . "/../../data";
        $inputFiles = new RegexIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($basePath)), '/.+\.log/i', RegexIterator::GET_MATCH);
        foreach ($inputFiles as $inputFilePath => $inputFile) {
            $dirname = dirname($inputFilePath);
            $basename = basename($inputFilePath, ".log");

            $outputPath = $dirname . "/" . $basename . ".json";
            if (!file_exists($outputPath)) {
                throw new Exception("Output file does not exist: " . $outputPath);
            }

            $logFile = new PathLogFile($inputFilePath);
            $detective = new Detective();
            $detective->setLogFile($logFile);
            $log = $detective->detect();
            $log->parse();

            $output = json_encode($log, JSON_PRETTY_PRINT);
            $this->assertJsonStringEqualsJsonFile($outputPath, $output, $basename);
        }
    }
}