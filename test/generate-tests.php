<?php

use Aternos\Codex\Log\File\PathLogFile;
use Aternos\Codex\Minecraft\Detective\Detective;

date_default_timezone_set('UTC');
require_once __DIR__ . '/../vendor/autoload.php';

$input = __DIR__ . "/data/";

if (!str_ends_with($input, "/")) {
    $input .= "/";
}

$inputFiles = new RegexIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($input)), '/.+\.log/i', RegexIterator::GET_MATCH);
foreach ($inputFiles as $inputFilePath => $inputFile) {
    $dirname = dirname($inputFilePath);
    $basename = basename($inputFilePath, ".log");

    $outputPath = $dirname . "/" . $basename . ".json";

    $logFile = new PathLogFile($inputFilePath);
    $detective = new Detective();
    $detective->setLogFile($logFile);
    $log = $detective->detect();
    $log->parse();

    $outputJson = json_encode($log, JSON_PRETTY_PRINT);

    if (file_exists($outputPath) && file_get_contents($outputPath) === $outputJson) {
        continue;
    }
    file_put_contents($outputPath, $outputJson);
    echo "Updated '" . $basename . "'" . PHP_EOL;
}