<?php

class PocketminePluginRuntimeProblemTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/pocketmine/pocketmine-plugin-runtime-problem.log");
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
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: Loading pocketmine.yml...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: Loading server properties...
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: Selected English (eng) as the base language
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.14.0
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/NOTICE]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/NOTICE]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: Opening server on **.**.**.**:52912
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: This server is running PocketMine-MP version 3.11.6
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404989
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading resource packs...
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading CustomAlerts v2.1
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading AutoInv v0.0.10
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading BuilderTools v1.2.0-beta2
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading ServerChannels v2.3
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading SizePlayer v1.1.0
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading MorphX v1.0.0
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading Newspaper v1.0.1
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading ProfileUI v4.2.1
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading InvSee v1.0.0
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading Neon v1.1.1
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading BlazinVanish v1.0.4
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading BlazinFly v1.8.7
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading PurePerms v1.4.3
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: [PurePerms] Setting default language to \'en\'
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]: [PurePerms] Multiworld support is currently disabled.
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]: [PurePerms] Don\'t forget to set enable-multiworld-perms option in config.yml to true if you want to use per-world permissions!
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading Slapper v1.5.2
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading Wilderness v0.0.1
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading PiggyCustomEnchants v2.0.5
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading PlayerHead v1.0
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading VanillaCoordinates v1.0.0
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading AdvancedKits v5.3.0
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading CustomSetting v1.0.3
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading AntiSpamPro v1.4.1
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading KeepInventory v1.0
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading EconomyAPI v5.7.2
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading HealthTag v2.0.0
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading ChatScrambler v1.0.0
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading SignPortal v1.1.4
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading SellAll v1.3.0
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading CustomShopUI v4.0.5
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading FactionsPro v1.3.20
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Loading PureChat v1.4.11
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling CustomAlerts v2.1
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling ServerChannels v2.3
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Preparing world "world"
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling AutoInv v0.0.10
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling BuilderTools v1.2.0-beta2
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling SizePlayer v1.1.0
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling MorphX v1.0.0
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Newspaper v1.0.1
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling ProfileUI v4.2.1
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]: [ProfielUI] Enabled! - By Infernus101
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling InvSee v1.0.0
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Neon v1.1.1
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling BlazinVanish v1.0.4
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling BlazinFly v1.8.7
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling PurePerms v1.4.3
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]: [PurePerms] Set data provider to YAMLv1.
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Slapper v1.5.2
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Wilderness v0.0.1
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling PiggyCustomEnchants v2.0.5
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling PlayerHead v1.0
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling VanillaCoordinates v1.0.0
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling AdvancedKits v5.3.0
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]: [AdvancedKits] PiggyCustomEnchants detected. Activated custom enchants support
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/WARNING]: [AdvancedKits] Bad configuration in kit starter kit. Image type not supported. Please use \'path\' or \'url\'
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/WARNING]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling CustomSetting v1.0.3
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling AntiSpamPro v1.4.1
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: [AntiSpamPro] AntiSpamPro Swear Filter Enabled
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling KeepInventory v1.0
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: -=-++-=-++-=-++-=-++-=-++-=-++-=-++-=-
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: [KeepInventory] Plugin enabled!
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: [KeepInventory] Plugin by KhoaGamingPro
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: [KeepInventory] Plugin version: 1.0
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: -=-++-=-++-=-++-=-++-=-++-=-++-=-++-=-
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]: [KeepInventory] Keep inventory enabled. Player\'s inventory will keep after death.
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]: [KeepInventory] You can disable it in config.yml
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/NOTICE]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]: Enabling EconomyAPI v5.7.2
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404990
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:30] [Server thread/INFO]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/NOTICE]: [EconomyAPI] Something went wrong on update server.
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/NOTICE]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/NOTICE]: [EconomyAPI] Database provider was set to: Yaml
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/NOTICE]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Enabling HealthTag v2.0.0
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Enabling ChatScrambler v1.0.0
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: [ChatScrambler] Version: 1.0.0 for API: 3.0.0
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Enabling SignPortal v1.1.4
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Enabling SellAll v1.3.0
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Enabling CustomShopUI v4.0.5
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Enabling FactionsPro v1.3.20
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Enabling PureChat v1.4.11
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/NOTICE]: [PureChat] FactionsPro < 1.4 support enabled.
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/NOTICE]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Setting query port to 52912
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Query running on **.**.**.**:52912
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Default game type: Survival Mode
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: If you find this project useful, please consider donating to support development: https://patreon.com/pocketminemp
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]: Done (1.795s)! For help, type "help" or "?"
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582404991
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [20:56:31] [Server thread/INFO]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:23] [Server thread/INFO]: Plugins (30): PiggyCustomEnchants v2.0.5, Slapper v1.5.2, AutoInv v0.0.10, ServerChannels v2.3, EconomyAPI v5.7.2, AdvancedKits v5.3.0, BuilderTools v1.2.0-beta2, PlayerHead v1.0, KeepInventory v1.0, AntiSpamPro v1.4.1, BlazinFly v1.8.7, SizePlayer v1.1.0, CustomAlerts v2.1, ChatScrambler v1.0.0, PurePerms v1.4.3, Neon v1.1.1, BlazinVanish v1.0.4, Wilderness v0.0.1, SellAll v1.3.0, HealthTag v2.0.0, MorphX v1.0.0, Newspaper v1.0.1, InvSee v1.0.0, CustomSetting v1.0.3, CustomShopUI v4.0.5, ProfileUI v4.2.1, VanillaCoordinates v1.0.0, SignPortal v1.1.4, FactionsPro v1.3.20, PureChat v1.4.11
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408943
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:23] [Server thread/INFO]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/CRITICAL]: Error: "Call to undefined method pocketmine\command\ConsoleCommandSender::dataPacket()" (EXCEPTION) in "plugins/VanillaCoordinates.phar/src/shelly7w7/VanillaCoordinates/command/CoordinateCommand" at line 37
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => CRITICAL
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/CRITICAL]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #0 src/pocketmine/command/SimpleCommandMap(248): shelly7w7\VanillaCoordinates\command\CoordinateCommand->execute(object pocketmine\command\ConsoleCommandSender, string[6] coords, array[1])
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #1 src/pocketmine/Server(1807): pocketmine\command\SimpleCommandMap->dispatch(object pocketmine\command\ConsoleCommandSender, string[9] coords on)
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #2 src/pocketmine/Server(1419): pocketmine\Server->dispatchCommand(object pocketmine\command\ConsoleCommandSender, string[9] coords on)
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #3 vendor/pocketmine/snooze/src/SleeperHandler(123): pocketmine\Server->pocketmine\{closure}()
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #4 vendor/pocketmine/snooze/src/SleeperHandler(85): pocketmine\snooze\SleeperHandler->processNotifications()
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #5 src/pocketmine/Server(2146): pocketmine\snooze\SleeperHandler->sleepUntil(double 1582437757.3646)
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #6 src/pocketmine/Server(1990): pocketmine\Server->tickProcessor()
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #7 src/pocketmine/Server(1584): pocketmine\Server->start()
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #8 src/pocketmine/PocketMine(273): pocketmine\Server->__construct(object BaseClassLoader, object pocketmine\utils\MainLogger, string[16] /aternos/server/, string[24] /aternos/server/plugins/)
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #9 src/pocketmine/PocketMine(296): pocketmine\server()
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]: #10 (11): require(string[64] phar:///aternos/server/server.phar/src/pocketmine/PocketMine.php)
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/DEBUG]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/EMERGENCY]: An unrecoverable error has occurred and the server has crashed. Creating a crash dump
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => EMERGENCY
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/EMERGENCY]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/EMERGENCY]: Please upload the "/aternos/server/crashdumps/Sat_Feb_22-22.02.37-PST_2020.log" file to the Crash Archive and submit the link to the Bug Reporting page. Give as much info as you can.
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => EMERGENCY
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/EMERGENCY]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PiggyCustomEnchants v2.0.5
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Slapper v1.5.2
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling AutoInv v0.0.10
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling ServerChannels v2.3
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling EconomyAPI v5.7.2
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling AdvancedKits v5.3.0
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling BuilderTools v1.2.0-beta2
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PlayerHead v1.0
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling KeepInventory v1.0
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: [KeepInventory] Plugin disabled!
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling AntiSpamPro v1.4.1
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling BlazinFly v1.8.7
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling SizePlayer v1.1.0
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: [SizePlayer] SizePlayer plugin is currently disabled!
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling CustomAlerts v2.1
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling ChatScrambler v1.0.0
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PurePerms v1.4.3
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Neon v1.1.1
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling BlazinVanish v1.0.4
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Wilderness v0.0.1
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling SellAll v1.3.0
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling HealthTag v2.0.0
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling MorphX v1.0.0
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Newspaper v1.0.1
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling InvSee v1.0.0
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling CustomSetting v1.0.3
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling CustomShopUI v4.0.5
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling ProfileUI v4.2.1
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/NOTICE]: [ProfielUI] Disabled! - By Infernus101
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/NOTICE]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling VanillaCoordinates v1.0.0
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling SignPortal v1.1.4
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling FactionsPro v1.3.20
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PureChat v1.4.11
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1582408957
                    [iterator:protected] => 0
                    [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 144
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: Loading pocketmine.yml...
2020-02-22 [20:56:29] [Server thread/INFO]: Loading server properties...
2020-02-22 [20:56:29] [Server thread/INFO]: Selected English (eng) as the base language
2020-02-22 [20:56:29] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.14.0
2020-02-22 [20:56:29] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
2020-02-22 [20:56:29] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
2020-02-22 [20:56:29] [Server thread/INFO]: Opening server on **.**.**.**:52912
2020-02-22 [20:56:29] [Server thread/INFO]: This server is running PocketMine-MP version 3.11.6
2020-02-22 [20:56:29] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
2020-02-22 [20:56:30] [Server thread/INFO]: Loading resource packs...
2020-02-22 [20:56:30] [Server thread/INFO]: Loading CustomAlerts v2.1
2020-02-22 [20:56:30] [Server thread/INFO]: Loading AutoInv v0.0.10
2020-02-22 [20:56:30] [Server thread/INFO]: Loading BuilderTools v1.2.0-beta2
2020-02-22 [20:56:30] [Server thread/INFO]: Loading ServerChannels v2.3
2020-02-22 [20:56:30] [Server thread/INFO]: Loading SizePlayer v1.1.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading MorphX v1.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading Newspaper v1.0.1
2020-02-22 [20:56:30] [Server thread/INFO]: Loading ProfileUI v4.2.1
2020-02-22 [20:56:30] [Server thread/INFO]: Loading InvSee v1.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading Neon v1.1.1
2020-02-22 [20:56:30] [Server thread/INFO]: Loading BlazinVanish v1.0.4
2020-02-22 [20:56:30] [Server thread/INFO]: Loading BlazinFly v1.8.7
2020-02-22 [20:56:30] [Server thread/INFO]: Loading PurePerms v1.4.3
2020-02-22 [20:56:30] [Server thread/INFO]: [PurePerms] Setting default language to \'en\'
2020-02-22 [20:56:30] [Server thread/NOTICE]: [PurePerms] Multiworld support is currently disabled.
2020-02-22 [20:56:30] [Server thread/NOTICE]: [PurePerms] Don\'t forget to set enable-multiworld-perms option in config.yml to true if you want to use per-world permissions!
2020-02-22 [20:56:30] [Server thread/INFO]: Loading Slapper v1.5.2
2020-02-22 [20:56:30] [Server thread/INFO]: Loading Wilderness v0.0.1
2020-02-22 [20:56:30] [Server thread/INFO]: Loading PiggyCustomEnchants v2.0.5
2020-02-22 [20:56:30] [Server thread/INFO]: Loading PlayerHead v1.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading VanillaCoordinates v1.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading AdvancedKits v5.3.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading CustomSetting v1.0.3
2020-02-22 [20:56:30] [Server thread/INFO]: Loading AntiSpamPro v1.4.1
2020-02-22 [20:56:30] [Server thread/INFO]: Loading KeepInventory v1.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading EconomyAPI v5.7.2
2020-02-22 [20:56:30] [Server thread/INFO]: Loading HealthTag v2.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading ChatScrambler v1.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading SignPortal v1.1.4
2020-02-22 [20:56:30] [Server thread/INFO]: Loading SellAll v1.3.0
2020-02-22 [20:56:30] [Server thread/INFO]: Loading CustomShopUI v4.0.5
2020-02-22 [20:56:30] [Server thread/INFO]: Loading FactionsPro v1.3.20
2020-02-22 [20:56:30] [Server thread/INFO]: Loading PureChat v1.4.11
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling CustomAlerts v2.1
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling ServerChannels v2.3
2020-02-22 [20:56:30] [Server thread/INFO]: Preparing world "world"
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling AutoInv v0.0.10
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling BuilderTools v1.2.0-beta2
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling SizePlayer v1.1.0
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling MorphX v1.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Newspaper v1.0.1
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling ProfileUI v4.2.1
2020-02-22 [20:56:30] [Server thread/NOTICE]: [ProfielUI] Enabled! - By Infernus101
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling InvSee v1.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Neon v1.1.1
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling BlazinVanish v1.0.4
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling BlazinFly v1.8.7
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling PurePerms v1.4.3
2020-02-22 [20:56:30] [Server thread/NOTICE]: [PurePerms] Set data provider to YAMLv1.
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Slapper v1.5.2
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling Wilderness v0.0.1
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling PiggyCustomEnchants v2.0.5
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling PlayerHead v1.0
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling VanillaCoordinates v1.0.0
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling AdvancedKits v5.3.0
2020-02-22 [20:56:30] [Server thread/NOTICE]: [AdvancedKits] PiggyCustomEnchants detected. Activated custom enchants support
2020-02-22 [20:56:30] [Server thread/WARNING]: [AdvancedKits] Bad configuration in kit starter kit. Image type not supported. Please use \'path\' or \'url\'
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling CustomSetting v1.0.3
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling AntiSpamPro v1.4.1
2020-02-22 [20:56:30] [Server thread/INFO]: [AntiSpamPro] AntiSpamPro Swear Filter Enabled
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling KeepInventory v1.0
2020-02-22 [20:56:30] [Server thread/INFO]: -=-++-=-++-=-++-=-++-=-++-=-++-=-++-=-
2020-02-22 [20:56:30] [Server thread/INFO]: [KeepInventory] Plugin enabled!
2020-02-22 [20:56:30] [Server thread/INFO]: [KeepInventory] Plugin by KhoaGamingPro
2020-02-22 [20:56:30] [Server thread/INFO]: [KeepInventory] Plugin version: 1.0
2020-02-22 [20:56:30] [Server thread/INFO]: -=-++-=-++-=-++-=-++-=-++-=-++-=-++-=-
2020-02-22 [20:56:30] [Server thread/NOTICE]: [KeepInventory] Keep inventory enabled. Player\'s inventory will keep after death.
2020-02-22 [20:56:30] [Server thread/NOTICE]: [KeepInventory] You can disable it in config.yml
2020-02-22 [20:56:30] [Server thread/INFO]: Enabling EconomyAPI v5.7.2
2020-02-22 [20:56:31] [Server thread/NOTICE]: [EconomyAPI] Something went wrong on update server.
2020-02-22 [20:56:31] [Server thread/NOTICE]: [EconomyAPI] Database provider was set to: Yaml
2020-02-22 [20:56:31] [Server thread/INFO]: Enabling HealthTag v2.0.0
2020-02-22 [20:56:31] [Server thread/INFO]: Enabling ChatScrambler v1.0.0
2020-02-22 [20:56:31] [Server thread/INFO]: [ChatScrambler] Version: 1.0.0 for API: 3.0.0
2020-02-22 [20:56:31] [Server thread/INFO]: Enabling SignPortal v1.1.4
2020-02-22 [20:56:31] [Server thread/INFO]: Enabling SellAll v1.3.0
2020-02-22 [20:56:31] [Server thread/INFO]: Enabling CustomShopUI v4.0.5
2020-02-22 [20:56:31] [Server thread/INFO]: Enabling FactionsPro v1.3.20
2020-02-22 [20:56:31] [Server thread/INFO]: Enabling PureChat v1.4.11
2020-02-22 [20:56:31] [Server thread/NOTICE]: [PureChat] FactionsPro < 1.4 support enabled.
2020-02-22 [20:56:31] [Server thread/INFO]: Starting GS4 status listener
2020-02-22 [20:56:31] [Server thread/INFO]: Setting query port to 52912
2020-02-22 [20:56:31] [Server thread/INFO]: Query running on **.**.**.**:52912
2020-02-22 [20:56:31] [Server thread/INFO]: Default game type: Survival Mode
2020-02-22 [20:56:31] [Server thread/INFO]: If you find this project useful, please consider donating to support development: https://patreon.com/pocketminemp
2020-02-22 [20:56:31] [Server thread/INFO]: Done (1.795s)! For help, type "help" or "?"
2020-02-22 [22:02:23] [Server thread/INFO]: Plugins (30): PiggyCustomEnchants v2.0.5, Slapper v1.5.2, AutoInv v0.0.10, ServerChannels v2.3, EconomyAPI v5.7.2, AdvancedKits v5.3.0, BuilderTools v1.2.0-beta2, PlayerHead v1.0, KeepInventory v1.0, AntiSpamPro v1.4.1, BlazinFly v1.8.7, SizePlayer v1.1.0, CustomAlerts v2.1, ChatScrambler v1.0.0, PurePerms v1.4.3, Neon v1.1.1, BlazinVanish v1.0.4, Wilderness v0.0.1, SellAll v1.3.0, HealthTag v2.0.0, MorphX v1.0.0, Newspaper v1.0.1, InvSee v1.0.0, CustomSetting v1.0.3, CustomShopUI v4.0.5, ProfileUI v4.2.1, VanillaCoordinates v1.0.0, SignPortal v1.1.4, FactionsPro v1.3.20, PureChat v1.4.11
2020-02-22 [22:02:37] [Server thread/CRITICAL]: Error: "Call to undefined method pocketmine\command\ConsoleCommandSender::dataPacket()" (EXCEPTION) in "plugins/VanillaCoordinates.phar/src/shelly7w7/VanillaCoordinates/command/CoordinateCommand" at line 37
2020-02-22 [22:02:37] [Server thread/DEBUG]: #0 src/pocketmine/command/SimpleCommandMap(248): shelly7w7\VanillaCoordinates\command\CoordinateCommand->execute(object pocketmine\command\ConsoleCommandSender, string[6] coords, array[1])
2020-02-22 [22:02:37] [Server thread/DEBUG]: #1 src/pocketmine/Server(1807): pocketmine\command\SimpleCommandMap->dispatch(object pocketmine\command\ConsoleCommandSender, string[9] coords on)
2020-02-22 [22:02:37] [Server thread/DEBUG]: #2 src/pocketmine/Server(1419): pocketmine\Server->dispatchCommand(object pocketmine\command\ConsoleCommandSender, string[9] coords on)
2020-02-22 [22:02:37] [Server thread/DEBUG]: #3 vendor/pocketmine/snooze/src/SleeperHandler(123): pocketmine\Server->pocketmine\{closure}()
2020-02-22 [22:02:37] [Server thread/DEBUG]: #4 vendor/pocketmine/snooze/src/SleeperHandler(85): pocketmine\snooze\SleeperHandler->processNotifications()
2020-02-22 [22:02:37] [Server thread/DEBUG]: #5 src/pocketmine/Server(2146): pocketmine\snooze\SleeperHandler->sleepUntil(double 1582437757.3646)
2020-02-22 [22:02:37] [Server thread/DEBUG]: #6 src/pocketmine/Server(1990): pocketmine\Server->tickProcessor()
2020-02-22 [22:02:37] [Server thread/DEBUG]: #7 src/pocketmine/Server(1584): pocketmine\Server->start()
2020-02-22 [22:02:37] [Server thread/DEBUG]: #8 src/pocketmine/PocketMine(273): pocketmine\Server->__construct(object BaseClassLoader, object pocketmine\utils\MainLogger, string[16] /aternos/server/, string[24] /aternos/server/plugins/)
2020-02-22 [22:02:37] [Server thread/DEBUG]: #9 src/pocketmine/PocketMine(296): pocketmine\server()
2020-02-22 [22:02:37] [Server thread/DEBUG]: #10 (11): require(string[64] phar:///aternos/server/server.phar/src/pocketmine/PocketMine.php)
2020-02-22 [22:02:37] [Server thread/EMERGENCY]: An unrecoverable error has occurred and the server has crashed. Creating a crash dump
2020-02-22 [22:02:37] [Server thread/EMERGENCY]: Please upload the "/aternos/server/crashdumps/Sat_Feb_22-22.02.37-PST_2020.log" file to the Crash Archive and submit the link to the Bug Reporting page. Give as much info as you can.
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PiggyCustomEnchants v2.0.5
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Slapper v1.5.2
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling AutoInv v0.0.10
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling ServerChannels v2.3
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling EconomyAPI v5.7.2
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling AdvancedKits v5.3.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling BuilderTools v1.2.0-beta2
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PlayerHead v1.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling KeepInventory v1.0
2020-02-22 [22:02:37] [Server thread/INFO]: [KeepInventory] Plugin disabled!
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling AntiSpamPro v1.4.1
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling BlazinFly v1.8.7
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling SizePlayer v1.1.0
2020-02-22 [22:02:37] [Server thread/INFO]: [SizePlayer] SizePlayer plugin is currently disabled!
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling CustomAlerts v2.1
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling ChatScrambler v1.0.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PurePerms v1.4.3
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Neon v1.1.1
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling BlazinVanish v1.0.4
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Wilderness v0.0.1
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling SellAll v1.3.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling HealthTag v2.0.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling MorphX v1.0.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling Newspaper v1.0.1
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling InvSee v1.0.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling CustomSetting v1.0.3
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling CustomShopUI v4.0.5
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling ProfileUI v4.2.1
2020-02-22 [22:02:37] [Server thread/NOTICE]: [ProfielUI] Disabled! - By Infernus101
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling VanillaCoordinates v1.0.0
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling SignPortal v1.1.4
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling FactionsPro v1.3.20
2020-02-22 [22:02:37] [Server thread/INFO]: Disabling PureChat v1.4.11
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
                                            [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.14.0
                                            [number:protected] => 4
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1582404989
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Bedrock version
                    [value:protected] => 1.14.0
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]: This server is running PocketMine-MP version 3.11.6
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1582404989
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-02-22 [20:56:29] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Pocketmine version
                    [value:protected] => 3.11.6
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginRuntimeProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2020-02-22 [22:02:37] [Server thread/CRITICAL]: Error: "Call to undefined method pocketmine\command\ConsoleCommandSender::dataPacket()" (EXCEPTION) in "plugins/VanillaCoordinates.phar/src/shelly7w7/VanillaCoordinates/command/CoordinateCommand" at line 37
                                            [number:protected] => 98
                                        )

                                )

                            [level:protected] => CRITICAL
                            [time:protected] => 1582408957
                            [iterator:protected] => 0
                            [prefix:protected] => 2020-02-22 [22:02:37] [Server thread/CRITICAL]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/VanillaCoordinates.phar
                                    [relativePath:protected] => 1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => VanillaCoordinates
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => VanillaCoordinates
                    [pluginPath:protected] => plugins/VanillaCoordinates.phar
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.14.0", $analysis[0]->getMessage());

        $this->assertEquals("Pocketmine version: 3.11.6", $analysis[1]->getMessage());

        $this->assertEquals("The plugin 'VanillaCoordinates' has a problem while running.", $analysis[2]->getMessage());
        $this->assertEquals("Delete the file 'plugins/VanillaCoordinates.phar'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'VanillaCoordinates'.", $analysis[2][1]->getMessage());

    }
}