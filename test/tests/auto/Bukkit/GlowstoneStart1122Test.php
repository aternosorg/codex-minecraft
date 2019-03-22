<?php

class GlowstoneStart1122Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/glowstone-start-1122.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\GlowstoneLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:45 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:45 [INFO] Scanning plugins...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275965
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:45 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:45 [INFO] Preparing spawn for world...
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275965
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:51 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:51 [INFO] Preparing spawn for world: 0%
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275971
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:52 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:52 [INFO] Preparing spawn for world: 0%
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275972
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:54 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:54 [INFO] Preparing spawn for world: 1%
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275974
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:55 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:55 [INFO] Preparing spawn for world: 3%
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275975
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:56 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:56 [INFO] Preparing spawn for world: 4%
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275976
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:57 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:57 [INFO] Preparing spawn for world: 5%
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275977
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:12:58 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:12:58 [INFO] Preparing spawn for world: 10%
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275978
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:00 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:00 [INFO] Preparing spawn for world: 16%
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275980
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:01 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:01 [INFO] Preparing spawn for world: 21%
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275981
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:02 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:02 [INFO] Preparing spawn for world: 26%
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275982
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:03 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:03 [INFO] Preparing spawn for world: 34%
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275983
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:04 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:04 [INFO] Preparing spawn for world: 41%
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275984
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:05 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:05 [INFO] Preparing spawn for world: 47%
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275985
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:06 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:06 [INFO] Preparing spawn for world: 52%
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275986
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:07 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:07 [INFO] Preparing spawn for world: 59%
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275987
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:08 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:08 [INFO] Preparing spawn for world: 65%
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275988
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:09 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:09 [INFO] Preparing spawn for world: 72%
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275989
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:11 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:11 [INFO] Preparing spawn for world: 73%
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275991
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:12 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:12 [INFO] Preparing spawn for world: 79%
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275992
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:13 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:13 [INFO] Preparing spawn for world: 87%
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275993
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:14 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:14 [INFO] Preparing spawn for world: 93%
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275994
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:15 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:15 [INFO] Preparing spawn for world: done
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275995
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:15 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:15 [INFO] Preparing spawn for world_nether...
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275995
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:16 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:16 [INFO] Preparing spawn for world_nether: 11%
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275996
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:17 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:17 [INFO] Preparing spawn for world_nether: 34%
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275997
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:18 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:18 [INFO] Preparing spawn for world_nether: 60%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275998
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:19 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:19 [INFO] Preparing spawn for world_nether: 83%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550275999
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:20 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:20 [INFO] Preparing spawn for world_nether: done
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276000
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:20 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:20 [INFO] Preparing spawn for world_the_end...
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276000
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:21 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:21 [INFO] Preparing spawn for world_the_end: 64%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276001
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:21 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:21 [INFO] Preparing spawn for world_the_end: done
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276001
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:22 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:22 [INFO] Binding server to 0.0.0.0:10,111...
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276002
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:22 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:22 [INFO] Successfully bound server to 0.0.0.0:10,111.
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276002
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:22 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:22 [INFO] Binding query to address 0.0.0.0:10111...
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276002
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:23 [WARNING]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:23 [WARNING] Unknown channel option \'SO_KEEPALIVE\' for channel \'[id: 0x477d3901]\'
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 1550276003
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:23 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:23 [INFO] Successfully bound query to 0.0.0.0:10111.
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276003
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 2019/02/16 00:13:23 [INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019/02/16 00:13:23 [INFO] Ready for connections.
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550276003
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 39
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2019/02/16 00:12:45 [INFO] Scanning plugins...
2019/02/16 00:12:45 [INFO] Preparing spawn for world...
2019/02/16 00:12:51 [INFO] Preparing spawn for world: 0%
2019/02/16 00:12:52 [INFO] Preparing spawn for world: 0%
2019/02/16 00:12:54 [INFO] Preparing spawn for world: 1%
2019/02/16 00:12:55 [INFO] Preparing spawn for world: 3%
2019/02/16 00:12:56 [INFO] Preparing spawn for world: 4%
2019/02/16 00:12:57 [INFO] Preparing spawn for world: 5%
2019/02/16 00:12:58 [INFO] Preparing spawn for world: 10%
2019/02/16 00:13:00 [INFO] Preparing spawn for world: 16%
2019/02/16 00:13:01 [INFO] Preparing spawn for world: 21%
2019/02/16 00:13:02 [INFO] Preparing spawn for world: 26%
2019/02/16 00:13:03 [INFO] Preparing spawn for world: 34%
2019/02/16 00:13:04 [INFO] Preparing spawn for world: 41%
2019/02/16 00:13:05 [INFO] Preparing spawn for world: 47%
2019/02/16 00:13:06 [INFO] Preparing spawn for world: 52%
2019/02/16 00:13:07 [INFO] Preparing spawn for world: 59%
2019/02/16 00:13:08 [INFO] Preparing spawn for world: 65%
2019/02/16 00:13:09 [INFO] Preparing spawn for world: 72%
2019/02/16 00:13:11 [INFO] Preparing spawn for world: 73%
2019/02/16 00:13:12 [INFO] Preparing spawn for world: 79%
2019/02/16 00:13:13 [INFO] Preparing spawn for world: 87%
2019/02/16 00:13:14 [INFO] Preparing spawn for world: 93%
2019/02/16 00:13:15 [INFO] Preparing spawn for world: done
2019/02/16 00:13:15 [INFO] Preparing spawn for world_nether...
2019/02/16 00:13:16 [INFO] Preparing spawn for world_nether: 11%
2019/02/16 00:13:17 [INFO] Preparing spawn for world_nether: 34%
2019/02/16 00:13:18 [INFO] Preparing spawn for world_nether: 60%
2019/02/16 00:13:19 [INFO] Preparing spawn for world_nether: 83%
2019/02/16 00:13:20 [INFO] Preparing spawn for world_nether: done
2019/02/16 00:13:20 [INFO] Preparing spawn for world_the_end...
2019/02/16 00:13:21 [INFO] Preparing spawn for world_the_end: 64%
2019/02/16 00:13:21 [INFO] Preparing spawn for world_the_end: done
2019/02/16 00:13:22 [INFO] Binding server to 0.0.0.0:10,111...
2019/02/16 00:13:22 [INFO] Successfully bound server to 0.0.0.0:10,111.
2019/02/16 00:13:22 [INFO] Binding query to address 0.0.0.0:10111...
2019/02/16 00:13:23 [WARNING] Unknown channel option \'SO_KEEPALIVE\' for channel \'[id: 0x477d3901]\'
2019/02/16 00:13:23 [INFO] Successfully bound query to 0.0.0.0:10111.
2019/02/16 00:13:23 [INFO] Ready for connections.
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