<?php

class BedrockStart19Test extends PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile("/home/matthias/Development/aternos/codex-minecraft/test/data/bedrock/bedrock-start-19.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        
        $expected = 'Aternos\Codex\Minecraft\Log\BedrockLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
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
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
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
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
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
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
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
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:14 INFO]
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
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:16 INFO]
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
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:16 INFO]
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
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2019-02-16 01:16:19 INFO]
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
                )

        )

    [iterator:protected] => 0
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
        
        $this->assertEquals($expected, print_r($log, true));
    }
}