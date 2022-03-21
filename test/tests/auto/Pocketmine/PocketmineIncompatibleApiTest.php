<?php

class PocketmineIncompatibleApiTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/pocketmine/pocketmine-incompatible-api.log");
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
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading pocketmine.yml...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading server properties...
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Selected English (eng) as the base language
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.9.0
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Opening server on **.**.**.**:16166
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: This server is running PocketMine-MP version 3.6.1
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading resource packs...
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]: Could not load plugin \'EconomyJob\': Incompatible API version (plugin requires one of: 3.0.0-ALPHA7, 3.0.0-ALPHA8, 3.0.0-ALPHA9, 3.0.0-ALPHA10, 3.0.0-ALPHA11)
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]: Could not load plugin \'CustomAlerts\': Incompatible API version (plugin requires one of: 3.0.0-ALPHA7, 3.0.0-ALPHA8, 3.0.0-ALPHA9, 3.0.0-ALPHA10)
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading KitUI v1.3.1
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading essentialsTP v1.2.1
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading MysteryCrate v8.0.0
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [MysteryCrate] Checking for updates...
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading BuilderTools v1.1.0
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading EasyTeleporter v1.1.0
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading GMPermissions v1.2.6
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading FactionsProBeta v1.4.6
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]: Level "world" not found
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]: Spawn terrain for level "world" is being generated in the background
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Enabling KitUI v1.3.1
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]: [KitUI] Enabled! - By Infernus101
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/NOTICE]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Enabling essentialsTP v1.2.1
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ loading...
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ Homes database created!
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ request database created!
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ warps database created!
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ Spawns database created!
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ cooldown database created!
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml]....
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml] DONE
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ loaded!
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Enabling MysteryCrate v8.0.0
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: [MysteryCrate] Plugin Enabled.
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Enabling BuilderTools v1.1.0
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Enabling EasyTeleporter v1.1.0
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Enabling GMPermissions v1.2.6
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Enabling FactionsProBeta v1.4.6
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007025
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007026
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]: Setting query port to 16166
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007026
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]: Query running on **.**.**.**:16166
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007026
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]: Default game type: Survival Mode
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007026
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]: Done (1.139s)! For help, type "help" or "?"
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1550007026
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-12 [21:30:26] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 46
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Loading pocketmine.yml...
2019-02-12 [21:30:25] [Server thread/INFO]: Loading server properties...
2019-02-12 [21:30:25] [Server thread/INFO]: Selected English (eng) as the base language
2019-02-12 [21:30:25] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.9.0
2019-02-12 [21:30:25] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
2019-02-12 [21:30:25] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
2019-02-12 [21:30:25] [Server thread/INFO]: Opening server on **.**.**.**:16166
2019-02-12 [21:30:25] [Server thread/INFO]: This server is running PocketMine-MP version 3.6.1
2019-02-12 [21:30:25] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
2019-02-12 [21:30:25] [Server thread/INFO]: Loading resource packs...
2019-02-12 [21:30:25] [Server thread/ERROR]: Could not load plugin \'EconomyJob\': Incompatible API version (plugin requires one of: 3.0.0-ALPHA7, 3.0.0-ALPHA8, 3.0.0-ALPHA9, 3.0.0-ALPHA10, 3.0.0-ALPHA11)
2019-02-12 [21:30:25] [Server thread/ERROR]: Could not load plugin \'CustomAlerts\': Incompatible API version (plugin requires one of: 3.0.0-ALPHA7, 3.0.0-ALPHA8, 3.0.0-ALPHA9, 3.0.0-ALPHA10)
2019-02-12 [21:30:25] [Server thread/INFO]: Loading KitUI v1.3.1
2019-02-12 [21:30:25] [Server thread/INFO]: Loading essentialsTP v1.2.1
2019-02-12 [21:30:25] [Server thread/INFO]: Loading MysteryCrate v8.0.0
2019-02-12 [21:30:25] [Server thread/INFO]: [MysteryCrate] Checking for updates...
2019-02-12 [21:30:25] [Server thread/INFO]: Loading BuilderTools v1.1.0
2019-02-12 [21:30:25] [Server thread/INFO]: Loading EasyTeleporter v1.1.0
2019-02-12 [21:30:25] [Server thread/INFO]: Loading GMPermissions v1.2.6
2019-02-12 [21:30:25] [Server thread/INFO]: Loading FactionsProBeta v1.4.6
2019-02-12 [21:30:25] [Server thread/NOTICE]: Level "world" not found
2019-02-12 [21:30:25] [Server thread/INFO]: Preparing level "world"
2019-02-12 [21:30:25] [Server thread/NOTICE]: Spawn terrain for level "world" is being generated in the background
2019-02-12 [21:30:25] [Server thread/INFO]: Enabling KitUI v1.3.1
2019-02-12 [21:30:25] [Server thread/NOTICE]: [KitUI] Enabled! - By Infernus101
2019-02-12 [21:30:25] [Server thread/INFO]: Enabling essentialsTP v1.2.1
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ loading...
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ Homes database created!
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ request database created!
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ warps database created!
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ Spawns database created!
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ cooldown database created!
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml]....
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] [INFO] loading [config.yml] DONE
2019-02-12 [21:30:25] [Server thread/INFO]: [essentialsTP] essentialsTP+ loaded!
2019-02-12 [21:30:25] [Server thread/INFO]: Enabling MysteryCrate v8.0.0
2019-02-12 [21:30:25] [Server thread/INFO]: [MysteryCrate] Plugin Enabled.
2019-02-12 [21:30:25] [Server thread/INFO]: Enabling BuilderTools v1.1.0
2019-02-12 [21:30:25] [Server thread/INFO]: Enabling EasyTeleporter v1.1.0
2019-02-12 [21:30:25] [Server thread/INFO]: Enabling GMPermissions v1.2.6
2019-02-12 [21:30:25] [Server thread/INFO]: Enabling FactionsProBeta v1.4.6
2019-02-12 [21:30:26] [Server thread/INFO]: Starting GS4 status listener
2019-02-12 [21:30:26] [Server thread/INFO]: Setting query port to 16166
2019-02-12 [21:30:26] [Server thread/INFO]: Query running on **.**.**.**:16166
2019-02-12 [21:30:26] [Server thread/INFO]: Default game type: Survival Mode
2019-02-12 [21:30:26] [Server thread/INFO]: Done (1.139s)! For help, type "help" or "?"
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
                                            [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.9.0
                                            [number:protected] => 4
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1550007025
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
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
                                            [text:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]: This server is running PocketMine-MP version 3.6.1
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1550007025
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Pocketmine version
                    [value:protected] => 3.6.1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]: Could not load plugin \'EconomyJob\': Incompatible API version (plugin requires one of: 3.0.0-ALPHA7, 3.0.0-ALPHA8, 3.0.0-ALPHA9, 3.0.0-ALPHA10, 3.0.0-ALPHA11)
                                            [number:protected] => 11
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1550007025
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => EconomyJob
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => EconomyJob
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => EconomyJob
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]: Could not load plugin \'CustomAlerts\': Incompatible API version (plugin requires one of: 3.0.0-ALPHA7, 3.0.0-ALPHA8, 3.0.0-ALPHA9, 3.0.0-ALPHA10)
                                            [number:protected] => 12
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1550007025
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-12 [21:30:25] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => CustomAlerts
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => CustomAlerts
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => CustomAlerts
                )

        )

    [iterator:protected] => 3
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.9.0", $analysis[0]->getMessage());

        $this->assertEquals("Pocketmine version: 3.6.1", $analysis[1]->getMessage());

        $this->assertEquals("The plugin 'EconomyJob' is incompatible with your current server version.", $analysis[2]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'EconomyJob'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Remove the plugin 'EconomyJob'.", $analysis[2][1]->getMessage());

        $this->assertEquals("The plugin 'CustomAlerts' is incompatible with your current server version.", $analysis[3]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'CustomAlerts'.", $analysis[3][0]->getMessage());
        $this->assertEquals("Remove the plugin 'CustomAlerts'.", $analysis[3][1]->getMessage());

    }
}