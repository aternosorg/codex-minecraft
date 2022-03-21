<?php

class BungeecordTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bungeecord/bungeecord.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\BungeeCordLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Using mbed TLS based native cipher.
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Using zlib based native compressor.
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled BungeeCord version git:BungeeCord-Bootstrap:1.17-R0.1-SNAPSHOT:bda1605:1598
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Not on Windows, attempting to use enhanced EpollEventLoop
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Epoll is working, utilising it!
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_alert, file=modules/cmd_alert.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_find, file=modules/cmd_find.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_list, file=modules/cmd_list.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_send, file=modules/cmd_send.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_server, file=modules/cmd_server.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Discovered module: ModuleSpec(name=reconnect_yaml, file=modules/reconnect_yaml.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin ExarotonBungeePlugin version 1.0.0 by null
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin BungeeGuard version 1.2-SNAPSHOT by Luck
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Loaded plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [WARNING] Forced host server pvp is not defined
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [WARNING]
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [WARNING] MinecraftForge support is currently unmaintained and may have unresolved issues. Please use at your own risk.
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [WARNING]
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin ExarotonBungeePlugin version 1.0.0 by null
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin BungeeGuard version 1.2-SNAPSHOT by Luck
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Enabled plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Listening on /0.0.0.0:55134
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:22 [INFO] Started query on /0.0.0.0:9898
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:22 [INFO]
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:45 [INFO] Closing listener [id: 0xefd6c3d7, L:/0.0.0.0:9898]
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:45 [INFO]
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:45 [INFO] Closing listener [id: 0xb3abf524, L:/0.0.0.0:55134]
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:45 [INFO]
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:45 [INFO] Closing pending connections
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:45 [INFO]
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:45 [INFO] Disconnecting 0 connections
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:45 [INFO]
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:45 [INFO] Saving reconnect locations
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:45 [INFO]
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:45 [INFO] Disabling plugins
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:45 [INFO]
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 14:24:45 [INFO] Closing IO threads
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 14:24:45 [INFO]
                )

        )

    [iterator:protected] => 38
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 14:24:22 [INFO] Using mbed TLS based native cipher.
14:24:22 [INFO] Using zlib based native compressor.
14:24:22 [INFO] Enabled BungeeCord version git:BungeeCord-Bootstrap:1.17-R0.1-SNAPSHOT:bda1605:1598
14:24:22 [INFO] Not on Windows, attempting to use enhanced EpollEventLoop
14:24:22 [INFO] Epoll is working, utilising it!
14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_alert, file=modules/cmd_alert.jar, provider=JenkinsModuleSource())
14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_find, file=modules/cmd_find.jar, provider=JenkinsModuleSource())
14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_list, file=modules/cmd_list.jar, provider=JenkinsModuleSource())
14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_send, file=modules/cmd_send.jar, provider=JenkinsModuleSource())
14:24:22 [INFO] Discovered module: ModuleSpec(name=cmd_server, file=modules/cmd_server.jar, provider=JenkinsModuleSource())
14:24:22 [INFO] Discovered module: ModuleSpec(name=reconnect_yaml, file=modules/reconnect_yaml.jar, provider=JenkinsModuleSource())
14:24:22 [INFO] Loaded plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Loaded plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Loaded plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Loaded plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Loaded plugin ExarotonBungeePlugin version 1.0.0 by null
14:24:22 [INFO] Loaded plugin BungeeGuard version 1.2-SNAPSHOT by Luck
14:24:22 [INFO] Loaded plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Loaded plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [WARNING] Forced host server pvp is not defined
14:24:22 [WARNING] MinecraftForge support is currently unmaintained and may have unresolved issues. Please use at your own risk.
14:24:22 [INFO] Enabled plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Enabled plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Enabled plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Enabled plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Enabled plugin ExarotonBungeePlugin version 1.0.0 by null
14:24:22 [INFO] Enabled plugin BungeeGuard version 1.2-SNAPSHOT by Luck
14:24:22 [INFO] Enabled plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Enabled plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:bda1605:1598 by SpigotMC
14:24:22 [INFO] Listening on /0.0.0.0:55134
14:24:22 [INFO] Started query on /0.0.0.0:9898
14:24:45 [INFO] Closing listener [id: 0xefd6c3d7, L:/0.0.0.0:9898]
14:24:45 [INFO] Closing listener [id: 0xb3abf524, L:/0.0.0.0:55134]
14:24:45 [INFO] Closing pending connections
14:24:45 [INFO] Disconnecting 0 connections
14:24:45 [INFO] Saving reconnect locations
14:24:45 [INFO] Disabling plugins
14:24:45 [INFO] Closing IO threads
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