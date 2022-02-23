<?php

date_default_timezone_set('UTC');
require_once __DIR__ . '/../vendor/autoload.php';

$input = __DIR__ . "/data/";
$output = __DIR__ . "/tests/auto/";
$outputToInput = "/../..";

if (substr($input, -1) !== "/") {
    $input .= "/";
}

if (substr($output, -1) !== "/") {
    $output .= "/";
}

$inputFiles = new RegexIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($input)), '/.+\.log/i', RecursiveRegexIterator::GET_MATCH);
foreach ($inputFiles as $inputFilePath => $inputFile) {
    $inputFilePathToDir = $outputToInput . str_replace(__DIR__, '', $inputFilePath);
    $relativeInputPath = substr($inputFilePath, strlen($input));
    $pathParts = explode("/", $relativeInputPath);
    $fileName = $pathParts[count($pathParts) - 1];
    unset($pathParts[count($pathParts) - 1]);

    $outputPath = $output;
    foreach ($pathParts as $pathPart) {
        $inputFilePathToDir = "/.." . $inputFilePathToDir;
        $pathPartParts = explode("-", $pathPart);
        foreach ($pathPartParts as $pathPartPart) {
            $outputPath .= ucfirst($pathPartPart);
        }
        $outputPath .= "/";
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
    /** @var \Aternos\Codex\Minecraft\Log\MinecraftLog $log */
    $log = $detective->detect();
    $log->parse();
    $analysis = $log->analyse();

    $testClassContent = '<?php

class ' . $className . ' extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set(\'UTC\');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "' . $inputFilePathToDir . '");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = \'' . str_replace("'", "\\'", print_r($log, true)) . '\';
        
        $expectedAnalysis = \'' . str_replace("'", "\\'", print_r($analysis, true)) . '\';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

';

    foreach ($analysis as $insightKey => $insight) {
        /** @var \Aternos\Codex\Analysis\Insight $insight */
        $testClassContent .= '        $this->assertEquals("' . $insight->getMessage() . '", $analysis[' . $insightKey . ']->getMessage());' . PHP_EOL;

        if ($insight instanceof \Aternos\Codex\Analysis\ProblemInterface) {
            foreach ($insight as $solutionKey => $solution) {
                /** @var \Aternos\Codex\Analysis\SolutionInterface $solution */
                $testClassContent .= '        $this->assertEquals("' . $solution->getMessage() . '", $analysis[' . $insightKey . '][' . $solutionKey . ']->getMessage());' . PHP_EOL;
            }
        }
        $testClassContent .= PHP_EOL;
    }

    $testClassContent .= '    }
}';
    if (file_exists($outputPath) && file_get_contents($outputPath) === $testClassContent) {
        continue;
    }
    file_put_contents($outputPath, $testClassContent);
    echo "Updated '" . $className . "' (<= " . $relativeInputPath . ")" . PHP_EOL;
}