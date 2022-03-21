<?php

class CraftbukkitPluginEventTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/craftbukkit-plugin-event.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\CraftBukkitLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:13] [Server thread/INFO]: Starting minecraft server version 1.8
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:13] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:13] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:13] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:13] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:13] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:13] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:13] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:13] [Server thread/INFO]: Starting Minecraft server on *:10485
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:13] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:14] [Server thread/INFO]: This server is running CraftBukkit version git-Bukkit-7019900 (MC: 1.8) (Implementing API version 1.8-R0.1-SNAPSHOT)
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:14] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:15] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v6.1.3;7a097ca
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:15] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:15] [Server thread/INFO]: [TrollBoss] Loading TrollBoss v5.6
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:15] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:15] [Server thread/INFO]: [NametagEdit] Loading NametagEdit v4.4.0
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:15] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:15] [Server thread/INFO]: [Vault] Loading Vault v1.5.0-b28
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:15] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:15] [Server thread/INFO]: [MySkin] Loading MySkin v2.2
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:15] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [ChatColor] Loading ChatColor v5.5
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [Holograms] Loading Holograms v2.5.0-SNAPSHOT
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [SimpleRename] Loading SimpleRename v10.7.5
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.5.0-SNAPSHOT-b2116
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [Shopkeepers] Loading Shopkeepers v2.2.1
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [LockettePro] Loading LockettePro v2.4.0
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [Vault] Enabling Vault v1.5.0-b28
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [Vault] [Permission] SuperPermissions loaded as backup permission system.
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: [Vault] Enabled Version 1.5.0-b28
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/WARN]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/WARN]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/WARN]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/WARN]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:16] [Server thread/INFO]: Preparing start region for level 0 (Seed: 296591835528737454)
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:16] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:17] [Server thread/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:17] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:18] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:18] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:19] [Server thread/INFO]: Preparing spawn area: 62%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:19] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:20] [Server thread/INFO]: Preparing start region for level 1 (Seed: 296591835528737454)
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:20] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:21] [Server thread/INFO]: Preparing spawn area: 61%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:21] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:22] [Server thread/INFO]: Preparing start region for level 2 (Seed: 296591835528737454)
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:22] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:22] [Server thread/INFO]: [WorldEdit] Enabling WorldEdit v6.1.3;7a097ca
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:22] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: WEPIF: Using the Bukkit Permissions API.
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: [WorldEdit] Using com.sk89q.worldedit.bukkit.adapter.impl.Spigot_v1_8_R1 as the Bukkit adapter
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: [TrollBoss] Enabling TrollBoss v5.6
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: [TrollBoss] Metrics started!
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: [TrollBoss] Created stats file.
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: [TrollBoss] Saved stats file.
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: [TrollBoss] Plugin enabled!
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:23] [Server thread/INFO]: [NametagEdit] Enabling NametagEdit v4.4.0
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:23] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:24] [Server thread/INFO]: [MySkin] Enabling MySkin v2.2
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:24] [Server thread/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:24] [Server thread/INFO]: \u001b[0;32;1m[MySkin] Running on server version \u001b[0;33;1mv1_8_R1\u001b[m
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:24] [Server thread/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: [ChatColor] Enabling ChatColor v5.5
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: [ChatColor] Using ChatLogger
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: [Holograms] Enabling Holograms v2.5.0-SNAPSHOT
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: [Holograms] HologramEntityController set to: com.sainttx.holograms.nms.v1_8_R1.HologramEntityControllerImpl
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: [SimpleRename] Enabling SimpleRename v10.7.5
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: SimpleRename enabled!
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: [AuthMe] Enabling AuthMe v5.5.0-SNAPSHOT-b2116
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:25] [Server thread/INFO]: [AuthMe] SQLite Setup finished
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:25] [Server thread/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:26] [Server thread/INFO]: [AuthMe] Hooked into Vault!
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:26] [Server thread/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:26] [Server thread/INFO]: [AuthMe] [LICENSE] This product includes GeoLite2 data created by MaxMind, available at https://www.maxmind.com
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:26] [Server thread/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:26] [Server thread/WARN]: [AuthMe] WARNING! The protectInventory feature requires ProtocolLib! Disabling it...
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:26] [Server thread/WARN]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:26] [Server thread/INFO]: [AuthMe] Development builds are available on our jenkins, thanks to FastVM.io
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:26] [Server thread/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:26] [Server thread/INFO]: [AuthMe] Do you want a good vps for your game server? Look at our sponsor FastVM.io leader as virtual server provider!
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:26] [Server thread/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:26] [Server thread/INFO]: [AuthMe] AuthMe 5.5.0-SNAPSHOT build n.2116 correctly enabled!
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:26] [Server thread/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/INFO]: [Shopkeepers] Enabling Shopkeepers v2.2.1
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': POLAR_BEAR
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': STRAY
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': WITHER_SKELETON
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': ZOMBIE_VILLAGER
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': HUSK
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': EVOKER
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': VEX
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': VINDICATOR
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': ILLUSIONER
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': PARROT
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:27] [Server thread/WARN]: [Shopkeepers] Config: All existing entity type names can be found here: https://hub.spigotmc.org/javadocs/spigot/org/bukkit/entity/EntityType.html
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:27] [Server thread/WARN]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:28] [Server thread/INFO]: [Shopkeepers] Loading data of 4 shopkeepers..
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:28] [Server thread/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:29] [Server thread/INFO]: [LockettePro] Enabling LockettePro v2.4.0
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:29] [Server thread/INFO]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:29] [Server thread/ERROR]: [LockettePro] Plugin LockettePro v2.4.0 has failed to register events for class me.crafter.mc.lockettepro.BlockEnvironmentListener because org/bukkit/event/block/BlockExplodeEvent does not exist.
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:29] [Server thread/ERROR]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:29] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:29] [Server thread/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:29] [Server thread/INFO]: Done (13.397s)! For help, type "help" or "?"
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:29] [Server thread/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:29] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:29] [Server thread/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:41:29] [Query Listener #1/INFO]: Query running on **.**.**.**:10485
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [03:41:29] [Query Listener #1/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [04:18:58] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
                                    [number:protected] => 77
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.event.EventException
                                    [number:protected] => 78
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 79
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 80
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 81
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 82
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 83
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 84
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 85
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 86
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 87
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 88
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 89
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 90
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 91
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 92
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 93
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 94
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 95
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 96
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException
                                    [number:protected] => 97
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at listeners.CreeperExplodeListener.onCreeperExplodeBow(CreeperExplodeListener.java:77) ~[?:?]
                                    [number:protected] => 98
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                    [number:protected] => 99
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                    [number:protected] => 100
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                    [number:protected] => 101
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                    [number:protected] => 102
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 103
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 17 more
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [04:18:58] [Server thread/ERROR]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [04:18:58] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
                                    [number:protected] => 105
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.event.EventException
                                    [number:protected] => 106
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 107
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 108
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 109
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 110
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 111
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 112
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 113
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 114
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 115
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 116
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 117
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 118
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 119
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 120
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 121
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 122
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 123
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 124
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException
                                    [number:protected] => 125
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at listeners.CreeperExplodeListener.onCreeperExplode(CreeperExplodeListener.java:27) ~[?:?]
                                    [number:protected] => 126
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                    [number:protected] => 127
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                    [number:protected] => 128
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                    [number:protected] => 129
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                    [number:protected] => 130
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 131
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 17 more
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [04:18:58] [Server thread/ERROR]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [04:25:12] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
                                    [number:protected] => 133
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.event.EventException
                                    [number:protected] => 134
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 135
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 136
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 137
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 138
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 139
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 140
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 141
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 142
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 143
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 144
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 145
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 146
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 147
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 148
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 149
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 150
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 151
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 152
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException
                                    [number:protected] => 153
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at listeners.CreeperExplodeListener.onCreeperExplodeBow(CreeperExplodeListener.java:77) ~[?:?]
                                    [number:protected] => 154
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                    [number:protected] => 155
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                    [number:protected] => 156
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                    [number:protected] => 157
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                    [number:protected] => 158
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 159
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 17 more
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [04:25:12] [Server thread/ERROR]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [04:25:12] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
                                    [number:protected] => 161
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.event.EventException
                                    [number:protected] => 162
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 163
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 164
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 165
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 166
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 167
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 168
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 169
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 170
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 171
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 172
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 173
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 174
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 175
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 176
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 177
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 178
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 179
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 180
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException
                                    [number:protected] => 181
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at listeners.CreeperExplodeListener.onCreeperExplode(CreeperExplodeListener.java:27) ~[?:?]
                                    [number:protected] => 182
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                    [number:protected] => 183
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                    [number:protected] => 184
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                    [number:protected] => 185
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                    [number:protected] => 186
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
                                    [number:protected] => 187
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 17 more
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [04:25:12] [Server thread/ERROR]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [04:26:30] [Server thread/INFO]: Saving...
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [04:26:30] [Server thread/INFO]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [04:26:30] [Server thread/INFO]: Saved the world
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [04:26:30] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 82
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [03:41:13] [Server thread/INFO]: Starting minecraft server version 1.8
[03:41:13] [Server thread/INFO]: Loading properties
[03:41:13] [Server thread/INFO]: Default game type: SURVIVAL
[03:41:13] [Server thread/INFO]: Generating keypair
[03:41:13] [Server thread/INFO]: Starting Minecraft server on *:10485
[03:41:14] [Server thread/INFO]: This server is running CraftBukkit version git-Bukkit-7019900 (MC: 1.8) (Implementing API version 1.8-R0.1-SNAPSHOT)
[03:41:15] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v6.1.3;7a097ca
[03:41:15] [Server thread/INFO]: [TrollBoss] Loading TrollBoss v5.6
[03:41:15] [Server thread/INFO]: [NametagEdit] Loading NametagEdit v4.4.0
[03:41:15] [Server thread/INFO]: [Vault] Loading Vault v1.5.0-b28
[03:41:15] [Server thread/INFO]: [MySkin] Loading MySkin v2.2
[03:41:16] [Server thread/INFO]: [ChatColor] Loading ChatColor v5.5
[03:41:16] [Server thread/INFO]: [Holograms] Loading Holograms v2.5.0-SNAPSHOT
[03:41:16] [Server thread/INFO]: [SimpleRename] Loading SimpleRename v10.7.5
[03:41:16] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.5.0-SNAPSHOT-b2116
[03:41:16] [Server thread/INFO]: [Shopkeepers] Loading Shopkeepers v2.2.1
[03:41:16] [Server thread/INFO]: [LockettePro] Loading LockettePro v2.4.0
[03:41:16] [Server thread/INFO]: [Vault] Enabling Vault v1.5.0-b28
[03:41:16] [Server thread/INFO]: [Vault] [Permission] SuperPermissions loaded as backup permission system.
[03:41:16] [Server thread/INFO]: [Vault] Enabled Version 1.5.0-b28
[03:41:16] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[03:41:16] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
[03:41:16] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[03:41:16] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
[03:41:16] [Server thread/INFO]: Preparing level "world"
[03:41:16] [Server thread/INFO]: Preparing start region for level 0 (Seed: 296591835528737454)
[03:41:17] [Server thread/INFO]: Preparing spawn area: 3%
[03:41:18] [Server thread/INFO]: Preparing spawn area: 28%
[03:41:19] [Server thread/INFO]: Preparing spawn area: 62%
[03:41:20] [Server thread/INFO]: Preparing start region for level 1 (Seed: 296591835528737454)
[03:41:21] [Server thread/INFO]: Preparing spawn area: 61%
[03:41:22] [Server thread/INFO]: Preparing start region for level 2 (Seed: 296591835528737454)
[03:41:22] [Server thread/INFO]: [WorldEdit] Enabling WorldEdit v6.1.3;7a097ca
[03:41:23] [Server thread/INFO]: WEPIF: Using the Bukkit Permissions API.
[03:41:23] [Server thread/INFO]: [WorldEdit] Using com.sk89q.worldedit.bukkit.adapter.impl.Spigot_v1_8_R1 as the Bukkit adapter
[03:41:23] [Server thread/INFO]: [TrollBoss] Enabling TrollBoss v5.6
[03:41:23] [Server thread/INFO]: [TrollBoss] Metrics started!
[03:41:23] [Server thread/INFO]: [TrollBoss] Created stats file.
[03:41:23] [Server thread/INFO]: [TrollBoss] Saved stats file.
[03:41:23] [Server thread/INFO]: [TrollBoss] Plugin enabled!
[03:41:23] [Server thread/INFO]: [NametagEdit] Enabling NametagEdit v4.4.0
[03:41:24] [Server thread/INFO]: [MySkin] Enabling MySkin v2.2
[03:41:24] [Server thread/INFO]: \u001b[0;32;1m[MySkin] Running on server version \u001b[0;33;1mv1_8_R1\u001b[m
[03:41:25] [Server thread/INFO]: [ChatColor] Enabling ChatColor v5.5
[03:41:25] [Server thread/INFO]: [ChatColor] Using ChatLogger
[03:41:25] [Server thread/INFO]: [Holograms] Enabling Holograms v2.5.0-SNAPSHOT
[03:41:25] [Server thread/INFO]: [Holograms] HologramEntityController set to: com.sainttx.holograms.nms.v1_8_R1.HologramEntityControllerImpl
[03:41:25] [Server thread/INFO]: [SimpleRename] Enabling SimpleRename v10.7.5
[03:41:25] [Server thread/INFO]: SimpleRename enabled!
[03:41:25] [Server thread/INFO]: [AuthMe] Enabling AuthMe v5.5.0-SNAPSHOT-b2116
[03:41:25] [Server thread/INFO]: [AuthMe] SQLite Setup finished
[03:41:26] [Server thread/INFO]: [AuthMe] Hooked into Vault!
[03:41:26] [Server thread/INFO]: [AuthMe] [LICENSE] This product includes GeoLite2 data created by MaxMind, available at https://www.maxmind.com
[03:41:26] [Server thread/WARN]: [AuthMe] WARNING! The protectInventory feature requires ProtocolLib! Disabling it...
[03:41:26] [Server thread/INFO]: [AuthMe] Development builds are available on our jenkins, thanks to FastVM.io
[03:41:26] [Server thread/INFO]: [AuthMe] Do you want a good vps for your game server? Look at our sponsor FastVM.io leader as virtual server provider!
[03:41:26] [Server thread/INFO]: [AuthMe] AuthMe 5.5.0-SNAPSHOT build n.2116 correctly enabled!
[03:41:27] [Server thread/INFO]: [Shopkeepers] Enabling Shopkeepers v2.2.1
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': POLAR_BEAR
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': STRAY
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': WITHER_SKELETON
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': ZOMBIE_VILLAGER
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': HUSK
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': EVOKER
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': VEX
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': VINDICATOR
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': ILLUSIONER
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: Invalid living entity type name in \'enabled-living-shops\': PARROT
[03:41:27] [Server thread/WARN]: [Shopkeepers] Config: All existing entity type names can be found here: https://hub.spigotmc.org/javadocs/spigot/org/bukkit/entity/EntityType.html
[03:41:28] [Server thread/INFO]: [Shopkeepers] Loading data of 4 shopkeepers..
[03:41:29] [Server thread/INFO]: [LockettePro] Enabling LockettePro v2.4.0
[03:41:29] [Server thread/ERROR]: [LockettePro] Plugin LockettePro v2.4.0 has failed to register events for class me.crafter.mc.lockettepro.BlockEnvironmentListener because org/bukkit/event/block/BlockExplodeEvent does not exist.
[03:41:29] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[03:41:29] [Server thread/INFO]: Done (13.397s)! For help, type "help" or "?"
[03:41:29] [Server thread/INFO]: Starting GS4 status listener
[03:41:29] [Query Listener #1/INFO]: Query running on **.**.**.**:10485
[04:18:58] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
org.bukkit.event.EventException
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.lang.NullPointerException
	at listeners.CreeperExplodeListener.onCreeperExplodeBow(CreeperExplodeListener.java:77) ~[?:?]
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
	... 17 more
[04:18:58] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
org.bukkit.event.EventException
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.lang.NullPointerException
	at listeners.CreeperExplodeListener.onCreeperExplode(CreeperExplodeListener.java:27) ~[?:?]
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
	... 17 more
[04:25:12] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
org.bukkit.event.EventException
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.lang.NullPointerException
	at listeners.CreeperExplodeListener.onCreeperExplodeBow(CreeperExplodeListener.java:77) ~[?:?]
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
	... 17 more
[04:25:12] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
org.bukkit.event.EventException
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.lang.NullPointerException
	at listeners.CreeperExplodeListener.onCreeperExplode(CreeperExplodeListener.java:27) ~[?:?]
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
	... 17 more
[04:26:30] [Server thread/INFO]: Saving...
[04:26:30] [Server thread/INFO]: Saved the world
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [03:41:13] [Server thread/INFO]: Starting minecraft server version 1.8
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [03:41:13] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.8
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginRuntimeProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [04:18:58] [Server thread/ERROR]: Could not pass event EntityExplodeEvent to TrollBoss v5.6
                                            [number:protected] => 77
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.event.EventException
                                            [number:protected] => 78
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:297) ~[minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 79
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.RegisteredListener.callEvent(RegisteredListener.java:62) ~[minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 80
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.fireEvent(SimplePluginManager.java:501) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 81
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.callEvent(SimplePluginManager.java:486) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 82
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.Explosion.a(Explosion.java:181) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 83
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.World.createExplosion(World.java:1627) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 84
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.createExplosion(WorldServer.java:965) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 85
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.cp(EntityCreeper.java:214) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 86
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.EntityCreeper.s_(EntityCreeper.java:104) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 87
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.World.entityJoinedWorld(World.java:1374) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 88
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.World.g(World.java:1352) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 89
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.World.tickEntities(World.java:1222) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 90
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.WorldServer.tickEntities(WorldServer.java:539) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 91
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.z(MinecraftServer.java:715) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 92
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.DedicatedServer.z(DedicatedServer.java:284) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 93
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.y(MinecraftServer.java:609) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 94
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R1.MinecraftServer.run(MinecraftServer.java:517) [minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 95
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 96
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.NullPointerException
                                            [number:protected] => 97
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at listeners.CreeperExplodeListener.onCreeperExplodeBow(CreeperExplodeListener.java:77) ~[?:?]
                                            [number:protected] => 98
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                            [number:protected] => 99
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                            [number:protected] => 100
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                            [number:protected] => 101
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                            [number:protected] => 102
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader$1.execute(JavaPluginLoader.java:295) ~[minecraft_server.jar:git-Bukkit-7019900]
                                            [number:protected] => 103
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	... 17 more
                                            [number:protected] => 104
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [04:18:58] [Server thread/ERROR]:
                        )

                    [counter:protected] => 4
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => TrollBoss
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => TrollBoss
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => TrollBoss
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.8", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'TrollBoss' has a problem while running.", $analysis[1]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'TrollBoss'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Remove the plugin 'TrollBoss'.", $analysis[1][1]->getMessage());

    }
}