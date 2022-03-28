<?php

class PocketmineNewTimeFormatTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/pocketmine/pocketmine-new-time-format.log");
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
                                    [text:protected] => 2022-03-29 [00:38:19.573] [Server thread/INFO]: Loading server configuration
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.573] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.594] [Server thread/INFO]: Selected English (eng) as the base language
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.594] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.597] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.18.10
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.597] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.601] [Server thread/INFO]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.601] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.624] [Server thread/INFO]: This server is running PocketMine-MP version 4.2.5
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.624] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.624] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.624] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.805] [Server thread/INFO]: Loading resource packs...
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.805] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.826] [Server thread/INFO]: Preparing world "world"
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.826] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:19.844] [Server thread/NOTICE]: Spawn terrain for world "world" is being generated in the background
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1648514299
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:19.844] [Server thread/NOTICE]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.008] [Server thread/INFO]: Minecraft network interface running on 0.0.0.0:11303
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.008] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.009] [Server thread/INFO]: GS4 Query listener running on 0.0.0.0:11303
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.009] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.035] [Server thread/INFO]: Minecraft network interface running on [::]:19133
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.035] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.035] [Server thread/INFO]: GS4 Query listener running on [::]:19133
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.035] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.040] [Server thread/INFO]: Default game type: Survival Mode
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.040] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.040] [Server thread/INFO]: If you find this project useful, please consider donating to support development: https://patreon.com/pocketminemp
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.040] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.040] [Server thread/INFO]: Done (0.468s)! For help, type "help" or "?"
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.040] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.343] [Server thread/INFO]: [World: world] Generating spawn terrain: 1 / 224 (0%)
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.343] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.436] [Server thread/INFO]: [World: world] Generating spawn terrain: 23 / 224 (10%)
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.436] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.512] [Server thread/INFO]: [World: world] Generating spawn terrain: 45 / 224 (20%)
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.512] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.549] [Server thread/INFO]: [World: world] Generating spawn terrain: 68 / 224 (30%)
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.549] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.591] [Server thread/INFO]: [World: world] Generating spawn terrain: 90 / 224 (40%)
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.591] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.633] [Server thread/INFO]: [World: world] Generating spawn terrain: 112 / 224 (50%)
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.633] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.680] [Server thread/INFO]: [World: world] Generating spawn terrain: 135 / 224 (60%)
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.680] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.726] [Server thread/INFO]: [World: world] Generating spawn terrain: 157 / 224 (70%)
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.726] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.800] [Server thread/INFO]: [World: world] Generating spawn terrain: 180 / 224 (80%)
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.800] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.855] [Server thread/INFO]: [World: world] Generating spawn terrain: 202 / 224 (90%)
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.855] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2022-03-29 [00:38:20.978] [Server thread/INFO]: [World: world] Generating spawn terrain: 224 / 224 (100%)
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1648514300
                    [iterator:protected] => 0
                    [prefix:protected] => 2022-03-29 [00:38:20.978] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 27
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2022-03-29 [00:38:19.573] [Server thread/INFO]: Loading server configuration
2022-03-29 [00:38:19.594] [Server thread/INFO]: Selected English (eng) as the base language
2022-03-29 [00:38:19.597] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.18.10
2022-03-29 [00:38:19.601] [Server thread/INFO]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
2022-03-29 [00:38:19.624] [Server thread/INFO]: This server is running PocketMine-MP version 4.2.5
2022-03-29 [00:38:19.624] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
2022-03-29 [00:38:19.805] [Server thread/INFO]: Loading resource packs...
2022-03-29 [00:38:19.826] [Server thread/INFO]: Preparing world "world"
2022-03-29 [00:38:19.844] [Server thread/NOTICE]: Spawn terrain for world "world" is being generated in the background
2022-03-29 [00:38:20.008] [Server thread/INFO]: Minecraft network interface running on 0.0.0.0:11303
2022-03-29 [00:38:20.009] [Server thread/INFO]: GS4 Query listener running on 0.0.0.0:11303
2022-03-29 [00:38:20.035] [Server thread/INFO]: Minecraft network interface running on [::]:19133
2022-03-29 [00:38:20.035] [Server thread/INFO]: GS4 Query listener running on [::]:19133
2022-03-29 [00:38:20.040] [Server thread/INFO]: Default game type: Survival Mode
2022-03-29 [00:38:20.040] [Server thread/INFO]: If you find this project useful, please consider donating to support development: https://patreon.com/pocketminemp
2022-03-29 [00:38:20.040] [Server thread/INFO]: Done (0.468s)! For help, type "help" or "?"
2022-03-29 [00:38:20.343] [Server thread/INFO]: [World: world] Generating spawn terrain: 1 / 224 (0%)
2022-03-29 [00:38:20.436] [Server thread/INFO]: [World: world] Generating spawn terrain: 23 / 224 (10%)
2022-03-29 [00:38:20.512] [Server thread/INFO]: [World: world] Generating spawn terrain: 45 / 224 (20%)
2022-03-29 [00:38:20.549] [Server thread/INFO]: [World: world] Generating spawn terrain: 68 / 224 (30%)
2022-03-29 [00:38:20.591] [Server thread/INFO]: [World: world] Generating spawn terrain: 90 / 224 (40%)
2022-03-29 [00:38:20.633] [Server thread/INFO]: [World: world] Generating spawn terrain: 112 / 224 (50%)
2022-03-29 [00:38:20.680] [Server thread/INFO]: [World: world] Generating spawn terrain: 135 / 224 (60%)
2022-03-29 [00:38:20.726] [Server thread/INFO]: [World: world] Generating spawn terrain: 157 / 224 (70%)
2022-03-29 [00:38:20.800] [Server thread/INFO]: [World: world] Generating spawn terrain: 180 / 224 (80%)
2022-03-29 [00:38:20.855] [Server thread/INFO]: [World: world] Generating spawn terrain: 202 / 224 (90%)
2022-03-29 [00:38:20.978] [Server thread/INFO]: [World: world] Generating spawn terrain: 224 / 224 (100%)
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
                                            [text:protected] => 2022-03-29 [00:38:19.597] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.18.10
                                            [number:protected] => 3
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1648514299
                            [iterator:protected] => 0
                            [prefix:protected] => 2022-03-29 [00:38:19.597] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Bedrock version
                    [value:protected] => 1.18.10
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2022-03-29 [00:38:19.624] [Server thread/INFO]: This server is running PocketMine-MP version 4.2.5
                                            [number:protected] => 5
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1648514299
                            [iterator:protected] => 0
                            [prefix:protected] => 2022-03-29 [00:38:19.624] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Pocketmine version
                    [value:protected] => 4.2.5
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.18.10", $analysis[0]->getMessage());

        $this->assertEquals("Pocketmine version: 4.2.5", $analysis[1]->getMessage());

    }
}