<?php

date_default_timezone_set('UTC');
require_once __DIR__ . '/../vendor/autoload.php';

$input = $argv[1] ?? __DIR__ . "/data/";
$output = $argv[2] ?? __DIR__ . "/tests/auto/";

if (substr($input, -1) !== "/") {
    $input .= "/";
}

if (substr($output, -1) !== "/") {
    $output .= "/";
}

$inputFiles = new RegexIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($input)), '/.+\.log/i', RecursiveRegexIterator::GET_MATCH);
foreach ($inputFiles as $inputFilePath => $inputFile) {
    $relativeInputPath = substr($inputFilePath, strlen($input));
    $pathParts = explode("/", $relativeInputPath);
    $fileName = $pathParts[count($pathParts) - 1];
    unset($pathParts[count($pathParts) - 1]);

    $outputPath = $output;
    foreach ($pathParts as $pathPart) {
        $outputPath .= ucfirst($pathPart) . "/";
    }

    if (!file_exists($outputPath)) {
        mkdir($outputPath, 0755, true);
    }

    $fileNameWithoutExtension = explode(".", $fileName)[0];
    $fileNameParts = explode("-", $fileNameWithoutExtension);
    $className = "";
    foreach ($fileNameParts as $fileNamePart) {
        $className .= ucfirst($fileNamePart);
    }
    $className .= "Test";
    $outputPath .= $className . ".php";

    $logFile = new \Aternos\Codex\Log\File\PathLogFile($inputFilePath);
    $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
    $detective->setLogFile($logFile);
    $log = $detective->detect();
    $log->parse();

    $testClassContent = '<?php

class ' . $className . ' extends PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        date_default_timezone_set(\'UTC\');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile("' . $inputFilePath . '");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        
        $expected = \'' . str_replace("'", "\\'", print_r($log, true)) . '\';
        
        $this->assertEquals($expected, print_r($log, true));
    }
}';
    if (file_exists($outputPath) && file_get_contents($outputPath) === $testClassContent) {
        continue;
    }
    file_put_contents($outputPath, $testClassContent);
    echo "Updated '" . $className . "' (<= " . $relativeInputPath . ")" . PHP_EOL;
}