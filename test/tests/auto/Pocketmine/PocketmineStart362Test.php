<?php

class PocketmineStart362Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/pocketmine/pocketmine-start-362.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PocketmineLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: Loading pocketmine.yml...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: Loading server properties...
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: Selected English (eng) as the base language
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.9.0
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/NOTICE]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/NOTICE]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: Opening server on 0.0.0.0:13941
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: This server is running PocketMine-MP version 3.6.2
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278084
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:05] [Server thread/INFO]: Loading resource packs...
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278085
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:05] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:05] [Server thread/NOTICE]: Level "world" not found
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550278085
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:05] [Server thread/NOTICE]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:05] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278085
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:05] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:05] [Server thread/NOTICE]: Spawn terrain for level "world" is being generated in the background
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550278085
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:05] [Server thread/NOTICE]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278086
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]: Setting query port to 13941
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278086
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]: Query running on 0.0.0.0:13941
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278086
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]: Default game type: Survival Mode
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278086
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]: Done (1.564s)! For help, type "help" or "?"
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550278086
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-16 [00:48:06] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 18
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: Loading pocketmine.yml...
2019-02-16 [00:48:04] [Server thread/INFO]: Loading server properties...
2019-02-16 [00:48:04] [Server thread/INFO]: Selected English (eng) as the base language
2019-02-16 [00:48:04] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.9.0
2019-02-16 [00:48:04] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
2019-02-16 [00:48:04] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
2019-02-16 [00:48:04] [Server thread/INFO]: Opening server on 0.0.0.0:13941
2019-02-16 [00:48:04] [Server thread/INFO]: This server is running PocketMine-MP version 3.6.2
2019-02-16 [00:48:04] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
2019-02-16 [00:48:05] [Server thread/INFO]: Loading resource packs...
2019-02-16 [00:48:05] [Server thread/NOTICE]: Level "world" not found
2019-02-16 [00:48:05] [Server thread/INFO]: Preparing level "world"
2019-02-16 [00:48:05] [Server thread/NOTICE]: Spawn terrain for level "world" is being generated in the background
2019-02-16 [00:48:06] [Server thread/INFO]: Starting GS4 status listener
2019-02-16 [00:48:06] [Server thread/INFO]: Setting query port to 13941
2019-02-16 [00:48:06] [Server thread/INFO]: Query running on 0.0.0.0:13941
2019-02-16 [00:48:06] [Server thread/INFO]: Default game type: Survival Mode
2019-02-16 [00:48:06] [Server thread/INFO]: Done (1.564s)! For help, type "help" or "?"
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineBedrockVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.9.0
                                            [number:protected] => 4
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1550278084
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Bedrock version
                    [value:protected] => 1.9.0
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]: This server is running PocketMine-MP version 3.6.2
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1550278084
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-16 [00:48:04] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Pocketmine version
                    [value:protected] => 3.6.2
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.9.0", $analysis[0]->getMessage());

        $this->assertEquals("Pocketmine version: 3.6.2", $analysis[1]->getMessage());

    }
}