<?php

class OldVanillaStart152Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/vanilla/old-vanilla-start-152.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\OldVanillaLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:12 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:12 [INFO] Starting minecraft server version 1.5.2
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276712
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:12 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:12 [INFO] Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276712
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:12 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:12 [INFO] Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276712
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:12 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:12 [INFO] Generating keypair
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276712
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:13 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:13 [INFO] Starting Minecraft server on *:10791
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276713
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:13 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:13 [INFO] Preparing level "world"
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276713
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:14 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:14 [INFO] Preparing start region for level 0
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276714
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:15 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:15 [INFO] Preparing spawn area: 2%
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276715
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:16 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:16 [INFO] Preparing spawn area: 5%
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276716
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:17 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:17 [INFO] Preparing spawn area: 9%
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276717
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:18 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:18 [INFO] Preparing spawn area: 16%
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276718
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:19 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:19 [INFO] Preparing spawn area: 23%
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276719
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:20 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:20 [INFO] Preparing spawn area: 30%
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276720
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:21 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:21 [INFO] Preparing spawn area: 36%
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276721
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:22 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:22 [INFO] Preparing spawn area: 43%
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276722
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:23 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:23 [INFO] Preparing spawn area: 48%
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276723
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:24 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:24 [INFO] Preparing spawn area: 54%
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276724
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:25 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:25 [INFO] Preparing spawn area: 63%
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276725
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:26 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:26 [INFO] Preparing spawn area: 72%
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276726
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:27 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:27 [INFO] Preparing spawn area: 81%
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276727
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:28 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:28 [INFO] Preparing spawn area: 91%
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276728
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:29 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:29 [INFO] Done (15.748s)! For help, type "help" or "?"
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276729
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:29 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:29 [INFO] Starting GS4 status listener
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276729
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019-02-16 00:25:29 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 00:25:29 [INFO] Query running on 0.0.0.0:10791
                                    [number:protected] => 24
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276729
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 24
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2019-02-16 00:25:12 [INFO] Starting minecraft server version 1.5.2
2019-02-16 00:25:12 [INFO] Loading properties
2019-02-16 00:25:12 [INFO] Default game type: SURVIVAL
2019-02-16 00:25:12 [INFO] Generating keypair
2019-02-16 00:25:13 [INFO] Starting Minecraft server on *:10791
2019-02-16 00:25:13 [INFO] Preparing level "world"
2019-02-16 00:25:14 [INFO] Preparing start region for level 0
2019-02-16 00:25:15 [INFO] Preparing spawn area: 2%
2019-02-16 00:25:16 [INFO] Preparing spawn area: 5%
2019-02-16 00:25:17 [INFO] Preparing spawn area: 9%
2019-02-16 00:25:18 [INFO] Preparing spawn area: 16%
2019-02-16 00:25:19 [INFO] Preparing spawn area: 23%
2019-02-16 00:25:20 [INFO] Preparing spawn area: 30%
2019-02-16 00:25:21 [INFO] Preparing spawn area: 36%
2019-02-16 00:25:22 [INFO] Preparing spawn area: 43%
2019-02-16 00:25:23 [INFO] Preparing spawn area: 48%
2019-02-16 00:25:24 [INFO] Preparing spawn area: 54%
2019-02-16 00:25:25 [INFO] Preparing spawn area: 63%
2019-02-16 00:25:26 [INFO] Preparing spawn area: 72%
2019-02-16 00:25:27 [INFO] Preparing spawn area: 81%
2019-02-16 00:25:28 [INFO] Preparing spawn area: 91%
2019-02-16 00:25:29 [INFO] Done (15.748s)! For help, type "help" or "?"
2019-02-16 00:25:29 [INFO] Starting GS4 status listener
2019-02-16 00:25:29 [INFO] Query running on 0.0.0.0:10791

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.5.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => 2019-02-16 00:25:12 [INFO]
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-16 00:25:12 [INFO] Starting minecraft server version 1.5.2
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1550276712
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