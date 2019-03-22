<?php

class ForgeConfirmTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-confirm.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\ForgeLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:31:32] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:31:32] [Server thread/WARN] [FML/]: Forge Mod Loader detected that the backup level.dat is being used.
                                    [number:protected] => 1
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 2
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => This may happen due to a bug or corruption, continuing can damage
                                    [number:protected] => 3
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => your world beyond repair or lose data / progress.
                                    [number:protected] => 4
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 5
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => It\'s recommended to create a world backup before continuing.
                                    [number:protected] => 6
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 7
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Run the command /fml confirm or or /fml cancel to proceed.
                                    [number:protected] => 8
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Alternatively start the server with -Dfml.queryResult=confirm or -Dfml.queryResult=cancel to preselect the answer.
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 1
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [13:31:32] [Server thread/WARN] [FML/]: Forge Mod Loader detected that the backup level.dat is being used.

This may happen due to a bug or corruption, continuing can damage
your world beyond repair or lose data / progress.

It\'s recommended to create a world backup before continuing.

Run the command /fml confirm or or /fml cancel to proceed.
Alternatively start the server with -Dfml.queryResult=confirm or -Dfml.queryResult=cancel to preselect the answer.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\FmlConfirmProblem Object
                (
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\CommandRunSolution Object
                                (
                                    [command:protected] => /fml confirm
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:31:32] [Server thread/WARN] [FML/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:31:32] [Server thread/WARN] [FML/]: Forge Mod Loader detected that the backup level.dat is being used.
                                            [number:protected] => 1
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 2
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => This may happen due to a bug or corruption, continuing can damage
                                            [number:protected] => 3
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => your world beyond repair or lose data / progress.
                                            [number:protected] => 4
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 5
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => It\'s recommended to create a world backup before continuing.
                                            [number:protected] => 6
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 7
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Run the command /fml confirm or or /fml cancel to proceed.
                                            [number:protected] => 8
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Alternatively start the server with -Dfml.queryResult=confirm or -Dfml.queryResult=cancel to preselect the answer.
                                            [number:protected] => 9
                                        )

                                )

                            [level:protected] => WARN
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Forge requires your confirmation to apply changes and start the server.", $analysis[0]->getMessage());
        $this->assertEquals("Run the command '/fml confirm'.", $analysis[0][0]->getMessage());

    }
}