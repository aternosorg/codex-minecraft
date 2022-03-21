<?php

class BedrockStart19Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bedrock/bedrock-start-19.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\BedrockLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:14 INFO] Starting Server
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279774
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:14 INFO] Version 1.9.0.15
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279774
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:14 INFO] Level Name: world
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279774
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:14 INFO] Game mode: 0 Survival
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279774
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:14 INFO] Difficulty: 1 EASY
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279774
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:16 INFO] IPv4 supported, port: 13941
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279776
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:16 INFO]
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:16 INFO] IPv6 not supported
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279776
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:16 INFO]
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-02-16 01:16:19 INFO] Server started.
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550279779
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-02-16 01:16:19 INFO]
                )

        )

    [iterator:protected] => 8
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [2019-02-16 01:16:14 INFO] Starting Server
[2019-02-16 01:16:14 INFO] Version 1.9.0.15
[2019-02-16 01:16:14 INFO] Level Name: world
[2019-02-16 01:16:14 INFO] Game mode: 0 Survival
[2019-02-16 01:16:14 INFO] Difficulty: 1 EASY
[2019-02-16 01:16:16 INFO] IPv4 supported, port: 13941
[2019-02-16 01:16:16 INFO] IPv6 not supported
[2019-02-16 01:16:19 INFO] Server started.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [2019-02-16 01:16:14 INFO] Version 1.9.0.15
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1550279774
                            [iterator:protected] => 0
                            [prefix:protected] => [2019-02-16 01:16:14 INFO]
                        )

                    [counter:protected] => 1
                    [label:protected] => Bedrock version
                    [value:protected] => 1.9.0.15
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.9.0.15", $analysis[0]->getMessage());

    }
}