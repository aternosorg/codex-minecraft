<?php

class WaterfallTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bungeecord/waterfall.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\WaterfallLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Using mbed TLS based native cipher.
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Using zlib based native compressor.
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Enabled Waterfall version git:Waterfall-Bootstrap:1.17-R0.1-SNAPSHOT:93773f9:448
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Not on Windows, attempting to use enhanced EpollEventLoop
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Epoll is working, utilising it!
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_alert, file=modules/cmd_alert.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_find, file=modules/cmd_find.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_list, file=modules/cmd_list.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_send, file=modules/cmd_send.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_server, file=modules/cmd_server.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=reconnect_yaml, file=modules/reconnect_yaml.jar, provider=JenkinsModuleSource())
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Loaded plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Loaded plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Loaded plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Loaded plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Loaded plugin ExarotonBungeePlugin version 1.0.0 by null
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:07] [main/INFO]: Loaded plugin BungeeGuard version 1.2-SNAPSHOT by Luck
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Loaded plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Loaded plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/WARN]: Forced host server pvp is not defined
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin ExarotonBungeePlugin version 1.0.0 by null
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin BungeeGuard version 1.2-SNAPSHOT by Luck
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [main/INFO]: Enabled plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [Netty Boss IO Thread #0/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [Netty Boss IO Thread #0/INFO]: Listening on /0.0.0.0:55134
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:08] [Netty Worker IO Thread #0/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:08] [Netty Worker IO Thread #0/INFO]: Started query on /0.0.0.0:9898
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:14] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:14] [Shutdown Thread/INFO]: Closing listener [id: 0xa3367a0e, L:/0.0.0.0:9898]
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:14] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:14] [Shutdown Thread/INFO]: Closing listener [id: 0x629648f6, L:/0.0.0.0:55134]
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:14] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:14] [Shutdown Thread/INFO]: Closing pending connections
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:14] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:14] [Shutdown Thread/INFO]: Disconnecting 0 connections
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:15] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:15] [Shutdown Thread/INFO]: Saving reconnect locations
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:15] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:15] [Shutdown Thread/INFO]: Disabling plugins
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:15] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:15] [Shutdown Thread/INFO]: Closing IO threads
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:51:17] [Shutdown Thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:51:17] [Shutdown Thread/INFO]: Thank you and goodbye
                                    [number:protected] => 38
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 38
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [14:51:07] [main/INFO]: Using mbed TLS based native cipher.
[14:51:07] [main/INFO]: Using zlib based native compressor.
[14:51:07] [main/INFO]: Enabled Waterfall version git:Waterfall-Bootstrap:1.17-R0.1-SNAPSHOT:93773f9:448
[14:51:07] [main/INFO]: Not on Windows, attempting to use enhanced EpollEventLoop
[14:51:07] [main/INFO]: Epoll is working, utilising it!
[14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_alert, file=modules/cmd_alert.jar, provider=JenkinsModuleSource())
[14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_find, file=modules/cmd_find.jar, provider=JenkinsModuleSource())
[14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_list, file=modules/cmd_list.jar, provider=JenkinsModuleSource())
[14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_send, file=modules/cmd_send.jar, provider=JenkinsModuleSource())
[14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=cmd_server, file=modules/cmd_server.jar, provider=JenkinsModuleSource())
[14:51:07] [main/INFO]: Discovered module: ModuleSpec(name=reconnect_yaml, file=modules/reconnect_yaml.jar, provider=JenkinsModuleSource())
[14:51:07] [main/INFO]: Loaded plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:07] [main/INFO]: Loaded plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:07] [main/INFO]: Loaded plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:07] [main/INFO]: Loaded plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:07] [main/INFO]: Loaded plugin ExarotonBungeePlugin version 1.0.0 by null
[14:51:07] [main/INFO]: Loaded plugin BungeeGuard version 1.2-SNAPSHOT by Luck
[14:51:08] [main/INFO]: Loaded plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [main/INFO]: Loaded plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [main/WARN]: Forced host server pvp is not defined
[14:51:08] [main/INFO]: Enabled plugin reconnect_yaml version git:reconnect_yaml:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [main/INFO]: Enabled plugin cmd_find version git:cmd_find:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [main/INFO]: Enabled plugin cmd_server version git:cmd_server:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [main/INFO]: Enabled plugin cmd_alert version git:cmd_alert:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [main/INFO]: Enabled plugin ExarotonBungeePlugin version 1.0.0 by null
[14:51:08] [main/INFO]: Enabled plugin BungeeGuard version 1.2-SNAPSHOT by Luck
[14:51:08] [main/INFO]: Enabled plugin cmd_send version git:cmd_send:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [main/INFO]: Enabled plugin cmd_list version git:cmd_list:1.17-R0.1-SNAPSHOT:93773f9:448 by WaterfallMC
[14:51:08] [Netty Boss IO Thread #0/INFO]: Listening on /0.0.0.0:55134
[14:51:08] [Netty Worker IO Thread #0/INFO]: Started query on /0.0.0.0:9898
[14:51:14] [Shutdown Thread/INFO]: Closing listener [id: 0xa3367a0e, L:/0.0.0.0:9898]
[14:51:14] [Shutdown Thread/INFO]: Closing listener [id: 0x629648f6, L:/0.0.0.0:55134]
[14:51:14] [Shutdown Thread/INFO]: Closing pending connections
[14:51:14] [Shutdown Thread/INFO]: Disconnecting 0 connections
[14:51:15] [Shutdown Thread/INFO]: Saving reconnect locations
[14:51:15] [Shutdown Thread/INFO]: Disabling plugins
[14:51:15] [Shutdown Thread/INFO]: Closing IO threads
[14:51:17] [Shutdown Thread/INFO]: Thank you and goodbye

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