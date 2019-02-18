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
                    [prefix:protected] => [00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:37:06] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:06] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:31:32] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:31:32] [Server thread/WARN] [FML/]: Forge Mod Loader detected that the backup level.dat is being used.
                                    [number:protected] => 3
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 4
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => This may happen due to a bug or corruption, continuing can damage
                                    [number:protected] => 5
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => your world beyond repair or lose data / progress.
                                    [number:protected] => 6
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 7
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => It\'s recommended to create a world backup before continuing.
                                    [number:protected] => 8
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 9
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Run the command /fml confirm or or /fml cancel to proceed.
                                    [number:protected] => 10
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Alternatively start the server with -Dfml.queryResult=confirm or -Dfml.queryResult=cancel to preselect the answer.
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 3
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
[00:37:06] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
[13:31:32] [Server thread/WARN] [FML/]: Forge Mod Loader detected that the backup level.dat is being used.

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
                                            [number:protected] => 3
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 4
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => This may happen due to a bug or corruption, continuing can damage
                                            [number:protected] => 5
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => your world beyond repair or lose data / progress.
                                            [number:protected] => 6
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 7
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => It\'s recommended to create a world backup before continuing.
                                            [number:protected] => 8
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 9
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Run the command /fml confirm or or /fml cancel to proceed.
                                            [number:protected] => 10
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Alternatively start the server with -Dfml.queryResult=confirm or -Dfml.queryResult=cancel to preselect the answer.
                                            [number:protected] => 11
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
    }
}