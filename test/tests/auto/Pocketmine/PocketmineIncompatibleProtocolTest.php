<?php

class PocketmineIncompatibleProtocolTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/pocketmine/pocketmine-incompatible-protocol.log");
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
                                    [text:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]: Loading pocketmine.yml...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389596
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]: Loading server properties...
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389596
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]: Selected English (eng) as the base language
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389596
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.16.100
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389596
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:56] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389596
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/NOTICE]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:56] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389596
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/NOTICE]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]: Opening server on **.**.**.**:47616
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389596
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:57] [Server thread/INFO]: This server is running PocketMine-MP version 3.16.0
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389597
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:57] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:57] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389597
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:57] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading resource packs...
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Slapper\': Incompatible network protocol version (plugin requires one of: 361, 388, 389, 390, 407, 408)
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'EasyCommandAutofill\': Incompatible network protocol version (plugin requires one of: 389, 390, 407, 408)
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Texter\': Incompatible network protocol version (plugin requires one of: 388, 389, 390, 407, 408)
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'RankText\': Incompatible network protocol version (plugin requires one of: 407)
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Mineflow\': Incompatible network protocol version (plugin requires one of: 389, 390, 407, 408)
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading EconomyAPI v5.7.2
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading MailPlugin v3.5
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading XGTShowPlayerHP v1.0.1
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading CustomShopUI v4.0.5
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading BuilderTools v1.2.0-beta2
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading BedWars v1.1.7
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading AutoClearLagg v3.1.0
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading EC-TableUI v1.1.2-pre
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading RealTime v1.1.0
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerSkinStealer v1.0.0
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading TapToPot v2.0.0
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading Parkour v1.5.7
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/CRITICAL]: Could not load plugin \'QuestPlugin\': Unknown dependency: Slapper
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => CRITICAL
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/CRITICAL]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading ChatScrambler v1.0.0
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading Relics v1.1.2
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading HealthTag v2.0.2
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading SimpleHome v1.0.3
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading SocialSpy v1.0.0
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading ItemCloud v1.3.1
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading GroupsUI v1.2.0
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading BankNotes v2.0.3
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading KygekJoinUI v1.2.0
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PortalsPE v1.1.1
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PingTag v0.4
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading Dragons v1.0.0
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading WhatCrates v2.0.0
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading OreGen v1.2.5
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading HeadHunter v0.1
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading NoFallDamage v1.0
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PiggyCustomEnchants v2.3.0
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading MultiEconomy v2.0.0
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading KillStreak v1.0.0
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading SizePlayer v1.1.0
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerInfo v2.1.4
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading Bounty v1.1.2
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading BetterVoting v2.0.2
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PCEBookShop v1.0.3
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading CombatLogger v0.0.6
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading BlazinFly v1.8.7
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading SellAll v1.3.0
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading BurgerSpawners v0.1.4
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading Rewards v4.0
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading Powertools v1.0.0
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading RedSkyBlock v3.1.1
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading HubDelay v1.0.0
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading MyPlot v1.9.0-pre
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerVaults v3.2.3
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerSelectors v1.0.8
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading AddNetherite-HiroTeam v2.0.0
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PiggyShopUI v2.1.1
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading AdvancedJobs v0.2
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading ProfileUI v4.2.1
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading SimpleBanner v0.1.0
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading PurePerms v1.4.3
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: [PurePerms] Setting default language to \'en\'
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/NOTICE]: [PurePerms] Multiworld support is currently disabled.
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/NOTICE]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/NOTICE]: [PurePerms] Don\'t forget to set enable-multiworld-perms option in config.yml to true if you want to use per-world permissions!
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/NOTICE]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: Loading EasyKits v1.1.5
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: [EasyKits] loaded PiggyCustomEnchants
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]: [EasyKits] loaded EconomyAPI
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389598
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading FactionsPro v1.3.20
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading MultiWorld v1.5.2
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading KOTH v1.0.0-Beta4
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading KygekRulesUI v1.1.0
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading KygekRanksUI v1.3.0
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading MineReset v3.2.0
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading SkyBlock v3.0.0
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading essentialsTP v1.2.2
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading PiggyFactions v1.1.2
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading PiggyCustomEnchantsShop v1.3.5
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading PiggyCrates v2.0.9
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading PureChat v1.4.11
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Loading SkyBlockUI v1.1.0
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling MyPlot v1.9.0-pre
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Preparing world "lobby"
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling EconomyAPI v5.7.2
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]: [EconomyAPI] The update server is now online!
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]: [EconomyAPI] Database provider was set to: Yaml
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling MailPlugin v3.5
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling XGTShowPlayerHP v1.0.1
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling CustomShopUI v4.0.5
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling BuilderTools v1.2.0-beta2
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling BedWars v1.1.7
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]: Registered /games command
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]: Registered /gamestatus command
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]: Registered game BedWars by XenialDan
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/NOTICE]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling AutoClearLagg v3.1.0
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling EC-TableUI v1.1.2-pre
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling RealTime v1.1.0
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling PlayerSkinStealer v1.0.0
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling TapToPot v2.0.0
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling Parkour v1.5.7
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: [Parkour] EconomyAPI is installed, you can use $ amounts as rewards
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]: Enabling ChatScrambler v1.0.0
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389599
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:19:59] [Server thread/INFO]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: [ChatScrambler] Version: 1.0.0 for API: 3.0.0
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling Relics v1.1.2
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling HealthTag v2.0.2
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling SimpleHome v1.0.3
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling SocialSpy v1.0.0
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling ItemCloud v1.3.1
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling GroupsUI v1.2.0
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling BankNotes v2.0.3
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling KygekJoinUI v1.2.0
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PortalsPE v1.1.1
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PingTag v0.4
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling Dragons v1.0.0
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/ERROR]: [Dragons] Invalid lobby level!
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/ERROR]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling WhatCrates v2.0.0
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling OreGen v1.2.5
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling HeadHunter v0.1
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling NoFallDamage v1.0
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PiggyCustomEnchants v2.3.0
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling MultiEconomy v2.0.0
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling KillStreak v1.0.0
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling SizePlayer v1.1.0
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PlayerInfo v2.1.4
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling Bounty v1.1.2
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]: Enabling BetterVoting v2.0.2
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389600
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:00] [Server thread/INFO]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling PCEBookShop v1.0.3
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling CombatLogger v0.0.6
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling BlazinFly v1.8.7
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling SellAll v1.3.0
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling BurgerSpawners v0.1.4
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling Rewards v4.0
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling Powertools v1.0.0
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling RedSkyBlock v3.1.1
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Preparing world "SB"
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: [RedSkyBlock] SkyBlock is running on the world SB
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling HubDelay v1.0.0
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling PlayerVaults v3.2.3
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling PlayerSelectors v1.0.8
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]: Enabling AddNetherite-HiroTeam v2.0.0
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389601
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:01] [Server thread/INFO]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling PiggyShopUI v2.1.1
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling AdvancedJobs v0.2
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling ProfileUI v4.2.1
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/NOTICE]: [ProfielUI] Enabled! - By Infernus101
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/NOTICE]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling SimpleBanner v0.1.0
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling PurePerms v1.4.3
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/NOTICE]: [PurePerms] Set data provider to YAMLv1.
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/NOTICE]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling EasyKits v1.1.5
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling FactionsPro v1.3.20
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: [FactionsPro] Add AntiSpamPro to ban rude Faction names
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling MultiWorld v1.5.2
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling KOTH v1.0.0-Beta4
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling KygekRulesUI v1.1.0
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling KygekRanksUI v1.3.0
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]: Enabling MineReset v3.2.0
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389602
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:02] [Server thread/INFO]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: Enabling SkyBlock v3.0.0
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/WARNING]: [SkyBlock] Disable the spawn protection on your server.properties, otherwise SkyBlock won\'t work
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/WARNING]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: Disabling SkyBlock v3.0.0
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: Enabling essentialsTP v1.2.2
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] essentialsTP+ loading...
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml]....
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml] DONE
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] essentialsTP+ loaded!
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: Enabling PiggyFactions v1.1.2
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: Enabling PiggyCustomEnchantsShop v1.3.5
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]: Enabling PiggyCrates v2.0.9
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389603
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:03] [Server thread/INFO]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]: Enabling PureChat v1.4.11
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389604
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:04] [Server thread/NOTICE]: [PureChat] FactionsPro < 1.4 support enabled.
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1606389604
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:04] [Server thread/NOTICE]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]: Enabling SkyBlockUI v1.1.0
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389604
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389604
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]: Setting query port to 47616
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389604
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]: Query running on **.**.**.**:47616
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1606389604
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-11-26 [11:20:04] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 179
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]: Loading pocketmine.yml...
2020-11-26 [11:19:56] [Server thread/INFO]: Loading server properties...
2020-11-26 [11:19:56] [Server thread/INFO]: Selected English (eng) as the base language
2020-11-26 [11:19:56] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.16.100
2020-11-26 [11:19:56] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
2020-11-26 [11:19:56] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
2020-11-26 [11:19:56] [Server thread/INFO]: Opening server on **.**.**.**:47616
2020-11-26 [11:19:57] [Server thread/INFO]: This server is running PocketMine-MP version 3.16.0
2020-11-26 [11:19:57] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
2020-11-26 [11:19:58] [Server thread/INFO]: Loading resource packs...
2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Slapper\': Incompatible network protocol version (plugin requires one of: 361, 388, 389, 390, 407, 408)
2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'EasyCommandAutofill\': Incompatible network protocol version (plugin requires one of: 389, 390, 407, 408)
2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Texter\': Incompatible network protocol version (plugin requires one of: 388, 389, 390, 407, 408)
2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'RankText\': Incompatible network protocol version (plugin requires one of: 407)
2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Mineflow\': Incompatible network protocol version (plugin requires one of: 389, 390, 407, 408)
2020-11-26 [11:19:58] [Server thread/INFO]: Loading EconomyAPI v5.7.2
2020-11-26 [11:19:58] [Server thread/INFO]: Loading MailPlugin v3.5
2020-11-26 [11:19:58] [Server thread/INFO]: Loading XGTShowPlayerHP v1.0.1
2020-11-26 [11:19:58] [Server thread/INFO]: Loading CustomShopUI v4.0.5
2020-11-26 [11:19:58] [Server thread/INFO]: Loading BuilderTools v1.2.0-beta2
2020-11-26 [11:19:58] [Server thread/INFO]: Loading BedWars v1.1.7
2020-11-26 [11:19:58] [Server thread/INFO]: Loading AutoClearLagg v3.1.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading EC-TableUI v1.1.2-pre
2020-11-26 [11:19:58] [Server thread/INFO]: Loading RealTime v1.1.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerSkinStealer v1.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading TapToPot v2.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading Parkour v1.5.7
2020-11-26 [11:19:58] [Server thread/CRITICAL]: Could not load plugin \'QuestPlugin\': Unknown dependency: Slapper
2020-11-26 [11:19:58] [Server thread/INFO]: Loading ChatScrambler v1.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading Relics v1.1.2
2020-11-26 [11:19:58] [Server thread/INFO]: Loading HealthTag v2.0.2
2020-11-26 [11:19:58] [Server thread/INFO]: Loading SimpleHome v1.0.3
2020-11-26 [11:19:58] [Server thread/INFO]: Loading SocialSpy v1.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading ItemCloud v1.3.1
2020-11-26 [11:19:58] [Server thread/INFO]: Loading GroupsUI v1.2.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading BankNotes v2.0.3
2020-11-26 [11:19:58] [Server thread/INFO]: Loading KygekJoinUI v1.2.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PortalsPE v1.1.1
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PingTag v0.4
2020-11-26 [11:19:58] [Server thread/INFO]: Loading Dragons v1.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading WhatCrates v2.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading OreGen v1.2.5
2020-11-26 [11:19:58] [Server thread/INFO]: Loading HeadHunter v0.1
2020-11-26 [11:19:58] [Server thread/INFO]: Loading NoFallDamage v1.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PiggyCustomEnchants v2.3.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading MultiEconomy v2.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading KillStreak v1.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading SizePlayer v1.1.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerInfo v2.1.4
2020-11-26 [11:19:58] [Server thread/INFO]: Loading Bounty v1.1.2
2020-11-26 [11:19:58] [Server thread/INFO]: Loading BetterVoting v2.0.2
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PCEBookShop v1.0.3
2020-11-26 [11:19:58] [Server thread/INFO]: Loading CombatLogger v0.0.6
2020-11-26 [11:19:58] [Server thread/INFO]: Loading BlazinFly v1.8.7
2020-11-26 [11:19:58] [Server thread/INFO]: Loading SellAll v1.3.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading BurgerSpawners v0.1.4
2020-11-26 [11:19:58] [Server thread/INFO]: Loading Rewards v4.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading Powertools v1.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading RedSkyBlock v3.1.1
2020-11-26 [11:19:58] [Server thread/INFO]: Loading HubDelay v1.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading MyPlot v1.9.0-pre
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerVaults v3.2.3
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PlayerSelectors v1.0.8
2020-11-26 [11:19:58] [Server thread/INFO]: Loading AddNetherite-HiroTeam v2.0.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PiggyShopUI v2.1.1
2020-11-26 [11:19:58] [Server thread/INFO]: Loading AdvancedJobs v0.2
2020-11-26 [11:19:58] [Server thread/INFO]: Loading ProfileUI v4.2.1
2020-11-26 [11:19:58] [Server thread/INFO]: Loading SimpleBanner v0.1.0
2020-11-26 [11:19:58] [Server thread/INFO]: Loading PurePerms v1.4.3
2020-11-26 [11:19:58] [Server thread/INFO]: [PurePerms] Setting default language to \'en\'
2020-11-26 [11:19:58] [Server thread/NOTICE]: [PurePerms] Multiworld support is currently disabled.
2020-11-26 [11:19:58] [Server thread/NOTICE]: [PurePerms] Don\'t forget to set enable-multiworld-perms option in config.yml to true if you want to use per-world permissions!
2020-11-26 [11:19:58] [Server thread/INFO]: Loading EasyKits v1.1.5
2020-11-26 [11:19:58] [Server thread/INFO]: [EasyKits] loaded PiggyCustomEnchants
2020-11-26 [11:19:58] [Server thread/INFO]: [EasyKits] loaded EconomyAPI
2020-11-26 [11:19:59] [Server thread/INFO]: Loading FactionsPro v1.3.20
2020-11-26 [11:19:59] [Server thread/INFO]: Loading MultiWorld v1.5.2
2020-11-26 [11:19:59] [Server thread/INFO]: Loading KOTH v1.0.0-Beta4
2020-11-26 [11:19:59] [Server thread/INFO]: Loading KygekRulesUI v1.1.0
2020-11-26 [11:19:59] [Server thread/INFO]: Loading KygekRanksUI v1.3.0
2020-11-26 [11:19:59] [Server thread/INFO]: Loading MineReset v3.2.0
2020-11-26 [11:19:59] [Server thread/INFO]: Loading SkyBlock v3.0.0
2020-11-26 [11:19:59] [Server thread/INFO]: Loading essentialsTP v1.2.2
2020-11-26 [11:19:59] [Server thread/INFO]: Loading PiggyFactions v1.1.2
2020-11-26 [11:19:59] [Server thread/INFO]: Loading PiggyCustomEnchantsShop v1.3.5
2020-11-26 [11:19:59] [Server thread/INFO]: Loading PiggyCrates v2.0.9
2020-11-26 [11:19:59] [Server thread/INFO]: Loading PureChat v1.4.11
2020-11-26 [11:19:59] [Server thread/INFO]: Loading SkyBlockUI v1.1.0
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling MyPlot v1.9.0-pre
2020-11-26 [11:19:59] [Server thread/INFO]: Preparing world "lobby"
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling EconomyAPI v5.7.2
2020-11-26 [11:19:59] [Server thread/NOTICE]: [EconomyAPI] The update server is now online!
2020-11-26 [11:19:59] [Server thread/NOTICE]: [EconomyAPI] Database provider was set to: Yaml
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling MailPlugin v3.5
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling XGTShowPlayerHP v1.0.1
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling CustomShopUI v4.0.5
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling BuilderTools v1.2.0-beta2
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling BedWars v1.1.7
2020-11-26 [11:19:59] [Server thread/NOTICE]: Registered /games command
2020-11-26 [11:19:59] [Server thread/NOTICE]: Registered /gamestatus command
2020-11-26 [11:19:59] [Server thread/NOTICE]: Registered game BedWars by XenialDan
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling AutoClearLagg v3.1.0
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling EC-TableUI v1.1.2-pre
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling RealTime v1.1.0
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling PlayerSkinStealer v1.0.0
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling TapToPot v2.0.0
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling Parkour v1.5.7
2020-11-26 [11:19:59] [Server thread/INFO]: [Parkour] EconomyAPI is installed, you can use $ amounts as rewards
2020-11-26 [11:19:59] [Server thread/INFO]: Enabling ChatScrambler v1.0.0
2020-11-26 [11:20:00] [Server thread/INFO]: [ChatScrambler] Version: 1.0.0 for API: 3.0.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling Relics v1.1.2
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling HealthTag v2.0.2
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling SimpleHome v1.0.3
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling SocialSpy v1.0.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling ItemCloud v1.3.1
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling GroupsUI v1.2.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling BankNotes v2.0.3
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling KygekJoinUI v1.2.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PortalsPE v1.1.1
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PingTag v0.4
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling Dragons v1.0.0
2020-11-26 [11:20:00] [Server thread/ERROR]: [Dragons] Invalid lobby level!
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling WhatCrates v2.0.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling OreGen v1.2.5
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling HeadHunter v0.1
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling NoFallDamage v1.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PiggyCustomEnchants v2.3.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling MultiEconomy v2.0.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling KillStreak v1.0.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling SizePlayer v1.1.0
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling PlayerInfo v2.1.4
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling Bounty v1.1.2
2020-11-26 [11:20:00] [Server thread/INFO]: Enabling BetterVoting v2.0.2
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling PCEBookShop v1.0.3
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling CombatLogger v0.0.6
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling BlazinFly v1.8.7
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling SellAll v1.3.0
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling BurgerSpawners v0.1.4
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling Rewards v4.0
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling Powertools v1.0.0
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling RedSkyBlock v3.1.1
2020-11-26 [11:20:01] [Server thread/INFO]: Preparing world "SB"
2020-11-26 [11:20:01] [Server thread/INFO]: [RedSkyBlock] SkyBlock is running on the world SB
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling HubDelay v1.0.0
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling PlayerVaults v3.2.3
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling PlayerSelectors v1.0.8
2020-11-26 [11:20:01] [Server thread/INFO]: Enabling AddNetherite-HiroTeam v2.0.0
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling PiggyShopUI v2.1.1
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling AdvancedJobs v0.2
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling ProfileUI v4.2.1
2020-11-26 [11:20:02] [Server thread/NOTICE]: [ProfielUI] Enabled! - By Infernus101
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling SimpleBanner v0.1.0
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling PurePerms v1.4.3
2020-11-26 [11:20:02] [Server thread/NOTICE]: [PurePerms] Set data provider to YAMLv1.
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling EasyKits v1.1.5
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling FactionsPro v1.3.20
2020-11-26 [11:20:02] [Server thread/INFO]: [FactionsPro] Add AntiSpamPro to ban rude Faction names
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling MultiWorld v1.5.2
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling KOTH v1.0.0-Beta4
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling KygekRulesUI v1.1.0
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling KygekRanksUI v1.3.0
2020-11-26 [11:20:02] [Server thread/INFO]: Enabling MineReset v3.2.0
2020-11-26 [11:20:03] [Server thread/INFO]: Enabling SkyBlock v3.0.0
2020-11-26 [11:20:03] [Server thread/WARNING]: [SkyBlock] Disable the spawn protection on your server.properties, otherwise SkyBlock won\'t work
2020-11-26 [11:20:03] [Server thread/INFO]: Disabling SkyBlock v3.0.0
2020-11-26 [11:20:03] [Server thread/INFO]: Enabling essentialsTP v1.2.2
2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] essentialsTP+ loading...
2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml]....
2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml] DONE
2020-11-26 [11:20:03] [Server thread/INFO]: [essentialsTP] essentialsTP+ loaded!
2020-11-26 [11:20:03] [Server thread/INFO]: Enabling PiggyFactions v1.1.2
2020-11-26 [11:20:03] [Server thread/INFO]: Enabling PiggyCustomEnchantsShop v1.3.5
2020-11-26 [11:20:03] [Server thread/INFO]: Enabling PiggyCrates v2.0.9
2020-11-26 [11:20:04] [Server thread/INFO]: Enabling PureChat v1.4.11
2020-11-26 [11:20:04] [Server thread/NOTICE]: [PureChat] FactionsPro < 1.4 support enabled.
2020-11-26 [11:20:04] [Server thread/INFO]: Enabling SkyBlockUI v1.1.0
2020-11-26 [11:20:04] [Server thread/INFO]: Starting GS4 status listener
2020-11-26 [11:20:04] [Server thread/INFO]: Setting query port to 47616
2020-11-26 [11:20:04] [Server thread/INFO]: Query running on **.**.**.**:47616
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
                                            [text:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.16.100
                                            [number:protected] => 4
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1606389596
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:56] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Bedrock version
                    [value:protected] => 1.16.100
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-11-26 [11:19:57] [Server thread/INFO]: This server is running PocketMine-MP version 3.16.0
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1606389597
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:57] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Pocketmine version
                    [value:protected] => 3.16.0
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Slapper\': Incompatible network protocol version (plugin requires one of: 361, 388, 389, 390, 407, 408)
                                            [number:protected] => 11
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1606389598
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => Slapper
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => Slapper
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => Slapper
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'EasyCommandAutofill\': Incompatible network protocol version (plugin requires one of: 389, 390, 407, 408)
                                            [number:protected] => 12
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1606389598
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => EasyCommandAutofill
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => EasyCommandAutofill
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => EasyCommandAutofill
                )

            [4] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Texter\': Incompatible network protocol version (plugin requires one of: 388, 389, 390, 407, 408)
                                            [number:protected] => 13
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1606389598
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => Texter
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => Texter
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => Texter
                )

            [5] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'RankText\': Incompatible network protocol version (plugin requires one of: 407)
                                            [number:protected] => 14
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1606389598
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => RankText
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => RankText
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => RankText
                )

            [6] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]: Could not load plugin \'Mineflow\': Incompatible network protocol version (plugin requires one of: 389, 390, 407, 408)
                                            [number:protected] => 15
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1606389598
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => Mineflow
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => Mineflow
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => Mineflow
                )

            [7] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-11-26 [11:19:58] [Server thread/CRITICAL]: Could not load plugin \'QuestPlugin\': Unknown dependency: Slapper
                                            [number:protected] => 28
                                        )

                                )

                            [level:protected] => CRITICAL
                            [time:protected] => 1606389598
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-11-26 [11:19:58] [Server thread/CRITICAL]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallSolution Object
                                (
                                    [pluginName:protected] => Slapper
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => QuestPlugin
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => QuestPlugin
                    [dependencyPluginName:protected] => Slapper
                )

        )

    [iterator:protected] => 7
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.16.100", $analysis[0]->getMessage());

        $this->assertEquals("Pocketmine version: 3.16.0", $analysis[1]->getMessage());

        $this->assertEquals("The plugin 'Slapper' is incompatible with your current server version.", $analysis[2]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'Slapper'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Remove the plugin 'Slapper'.", $analysis[2][1]->getMessage());

        $this->assertEquals("The plugin 'EasyCommandAutofill' is incompatible with your current server version.", $analysis[3]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'EasyCommandAutofill'.", $analysis[3][0]->getMessage());
        $this->assertEquals("Remove the plugin 'EasyCommandAutofill'.", $analysis[3][1]->getMessage());

        $this->assertEquals("The plugin 'Texter' is incompatible with your current server version.", $analysis[4]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'Texter'.", $analysis[4][0]->getMessage());
        $this->assertEquals("Remove the plugin 'Texter'.", $analysis[4][1]->getMessage());

        $this->assertEquals("The plugin 'RankText' is incompatible with your current server version.", $analysis[5]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'RankText'.", $analysis[5][0]->getMessage());
        $this->assertEquals("Remove the plugin 'RankText'.", $analysis[5][1]->getMessage());

        $this->assertEquals("The plugin 'Mineflow' is incompatible with your current server version.", $analysis[6]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'Mineflow'.", $analysis[6][0]->getMessage());
        $this->assertEquals("Remove the plugin 'Mineflow'.", $analysis[6][1]->getMessage());

        $this->assertEquals("The plugin 'QuestPlugin' is missing the required the plugin 'Slapper'.", $analysis[7]->getMessage());
        $this->assertEquals("Install the plugin 'Slapper'.", $analysis[7][0]->getMessage());
        $this->assertEquals("Remove the plugin 'QuestPlugin'.", $analysis[7][1]->getMessage());

    }
}