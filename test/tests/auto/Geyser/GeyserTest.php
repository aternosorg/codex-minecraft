<?php

class GeyserTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/geyser/geyser.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\GeyserLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:16.779 main/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:16.779 main/INFO] ******************************************
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:16.781 main/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:16.781 main/INFO]
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:16.784 main/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:16.784 main/INFO] Loading Geyser version 1.4.1-SNAPSHOT (git-master-71e2ec9)
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:16.784 main/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:16.784 main/INFO]
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:16.784 main/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:16.784 main/INFO] ******************************************
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.578 main/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.578 main/INFO] Started Geyser on 0.0.0.0:19132
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.581 main/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.581 main/INFO] Done (1.804s)! Run /geyser help for help!
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.582 main/WARN]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.582 main/WARN] Geyser doesn\'t translate Bedrock movements perfectly! Using Geyser in servers that have an anticheat could get you banned.
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.582 main/WARN]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.582 main/WARN] *********************************************
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.582 main/WARN]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.582 main/WARN]
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.582 main/WARN]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.582 main/WARN] YOU ARE RUNNING AN UNSUPPORTED VERSION OF JAVA!
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.582 main/WARN]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.582 main/WARN] Geyser will not work on your version of Java in the future. Please update to Java 16. Current Java version: 1.8.0_292
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.582 main/WARN]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.582 main/WARN]
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:18.583 main/WARN]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:18.583 main/WARN] *********************************************
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:15:19.089 ForkJoinPool.commonPool-worker-1/INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:15:19.089 ForkJoinPool.commonPool-worker-1/INFO] Downloading Minecraft JAR to extract en_us locale, please wait... (this may take some time depending on the speed of your internet connection)
                                    [number:protected] => 15
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 15
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [15:15:16.779 main/INFO] ******************************************
[15:15:16.781 main/INFO]
[15:15:16.784 main/INFO] Loading Geyser version 1.4.1-SNAPSHOT (git-master-71e2ec9)
[15:15:16.784 main/INFO]
[15:15:16.784 main/INFO] ******************************************
[15:15:18.578 main/INFO] Started Geyser on 0.0.0.0:19132
[15:15:18.581 main/INFO] Done (1.804s)! Run /geyser help for help!
[15:15:18.582 main/WARN] Geyser doesn\'t translate Bedrock movements perfectly! Using Geyser in servers that have an anticheat could get you banned.
[15:15:18.582 main/WARN] *********************************************
[15:15:18.582 main/WARN]
[15:15:18.582 main/WARN] YOU ARE RUNNING AN UNSUPPORTED VERSION OF JAVA!
[15:15:18.582 main/WARN] Geyser will not work on your version of Java in the future. Please update to Java 16. Current Java version: 1.8.0_292
[15:15:18.582 main/WARN]
[15:15:18.583 main/WARN] *********************************************
[15:15:19.089 ForkJoinPool.commonPool-worker-1/INFO] Downloading Minecraft JAR to extract en_us locale, please wait... (this may take some time depending on the speed of your internet connection)

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

    }
}