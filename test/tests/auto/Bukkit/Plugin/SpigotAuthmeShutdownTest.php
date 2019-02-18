<?php

class SpigotAuthmeShutdownTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../../data/bukkit/plugin/spigot-authme-shutdown.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\SpigotLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:32] [Server thread/INFO]: Starting minecraft server version 1.12
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:32] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:32] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:33] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:33] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-596221b-9a1fc1e (MC: 1.12) (Implementing API version 1.12-R0.1-SNAPSHOT)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:34] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:34] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:34] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:34] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:35] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:35] [Server thread/INFO]: Starting Minecraft server on *:10347
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:35] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:35] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:36] [Server thread/INFO]: Set PluginClassLoader as parallel capable
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:36] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:36] [Server thread/ERROR]: Could not load \'plugins/AnvilLogin.jar\' in folder \'plugins\'
                                    [number:protected] => 12
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.UnknownDependencyException: Languagy
                                    [number:protected] => 13
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:216) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                    [number:protected] => 14
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_12_R1.CraftServer.loadPlugins(CraftServer.java:298) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                    [number:protected] => 15
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_12_R1.DedicatedServer.init(DedicatedServer.java:205) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                    [number:protected] => 16
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_12_R1.MinecraftServer.run(MinecraftServer.java:544) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                    [number:protected] => 17
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v6.1.8-SNAPSHOT;cd4729f
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [ColoredSigns] Loading ColoredSigns v2.0
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [SetLobby] Loading SetLobby v1.1
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [WorldGuard] Loading WorldGuard v6.2.1;84bc322
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [MultiWorld] Loading MultiWorld v5.2.8
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [SkinsRestorer] Loading SkinsRestorer v13.5-SNAPSHOT
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [PermissionsEx] Loading PermissionsEx v1.23.4
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/WARN]: [PermissionsEx] This server is in offline mode. Unless this server is configured to integrate with a supported proxy (see http://dft.ba/-8ous), UUIDs *may not be stable*!
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [PerWorldSpawn] Loading PerWorldSpawn v1.0.0
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [ViaVersion] Loading ViaVersion v1.6.0
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:38] [Server thread/INFO]: [ViaVersion] ViaVersion 1.6.0 is now loaded, injecting!
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:40] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:40] [Server thread/INFO]: [ViaVersion] Loading block mapping...
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:41] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:41] [Server thread/INFO]: [ViaVersion] Loading item mapping...
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:41] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:41] [Server thread/INFO]: [ViaVersion] Loading new tags...
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:41] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:41] [Server thread/INFO]: [ViaVersion] Loading enchantments...
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:41] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:41] [Server thread/INFO]: [ViaVersion] Loading sound mapping...
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Tablist] Loading Tablist v1.3.2.9
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Vault] Loading Vault v1.7.1-b91
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [PerWorldTablist] Loading PerWorldTablist v1.1.0
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [DailyRewards] Loading DailyRewards v1.3.1
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [NameManager] Loading NameManager v3.1.1
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Essentials] Loading Essentials v2.0.1-b488
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [ArmorStandTools] Loading ArmorStandTools v2.4.3
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [GadgetsMenu] Loading GadgetsMenu v4.3.4
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.4.0-b1877
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [PerWorldInventory] Loading PerWorldInventory v1.7.5
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [BedwarsRel] Loading BedwarsRel v1.3.6
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Citizens] Loading Citizens v2.0.22-SNAPSHOT (build 1487)
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [ASkyBlock] Loading ASkyBlock v3.0.9.4
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [SimplePrefix] Loading SimplePrefix v2.5.1
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [GuiSignShop] Loading GuiSignShop v0.6b
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [CitizensCMD] Loading CitizensCMD v1.2.2
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [MinigamesLib] Loading MinigamesLib v1.14.17-20170612.052814
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [MGSkyWars] Loading MGSkyWars v1.14.17-20170612.054656
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Vault] Enabling Vault v1.7.1-b91
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Vault] [Economy] Essentials Economy found: Waiting
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Vault] [Permission] PermissionsEx found: Waiting
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Vault] [Permission] SuperPermissions loaded as backup permission system.
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Vault] [Chat] PermissionsEx found: Waiting
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [Vault] Enabled Version 1.7.1-b91
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:42] [Server thread/INFO]: [ASkyBlock] Enabling ASkyBlock v3.0.9.4
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/INFO]: [ASkyBlock] Loading entity limits
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/INFO]: [ASkyBlock] HOPPER will be limited to 30
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/WARN]: [ASkyBlock] ***********************************************************
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/WARN]: [ASkyBlock] Config file is out of date. See config.new.yml for updates!
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/WARN]: [ASkyBlock] config.yml version is \'3.0.8\'
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/WARN]: [ASkyBlock] Latest config version is \'3.0.9\'
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/WARN]: [ASkyBlock] ***********************************************************
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:44] [Server thread/INFO]: [ASkyBlock] Loaded default island schematic.
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: [ASkyBlock] Loaded default nether schematic.
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic The Original (island.schematic) for all players, order 1
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic NetherBlock Island (nether.schematic) for all players, order 0
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic Island Duo (double.schematic) for all players, order 2
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic Black Diamonds (harder.schematic) for all players, order 3
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: [ASkyBlock] Loading offline messages...
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: -------- World Settings For [world] --------
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:45] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: -------- World Settings For [world_nether] --------
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:48] [Server thread/INFO]: Preparing start region for level 0 (Seed: 5794635734043525586)
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:50] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:50] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:51] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:51] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:52] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:52] [Server thread/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:53] [Server thread/INFO]: Preparing spawn area: 35%
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:54] [Server thread/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:55] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:56] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:56] [Server thread/INFO]: Preparing spawn area: 81%
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:57] [Server thread/INFO]: Preparing spawn area: 97%
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:57] [Server thread/INFO]: Preparing start region for level 1 (Seed: 2568388266100767191)
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:58] [Server thread/INFO]: Preparing spawn area: 27%
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:00:59] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:00:59] [Server thread/INFO]: Preparing spawn area: 50%
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:00] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:01] [Server thread/INFO]: Preparing start region for level 2 (Seed: 5794635734043525586)
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:02] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:02] [Server thread/INFO]: [WorldEdit] Enabling WorldEdit v6.1.8-SNAPSHOT;cd4729f
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:03] [Server thread/INFO]: WEPIF: Using the Bukkit Permissions API.
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:04] [Server thread/INFO]: [WorldEdit] Using com.sk89q.worldedit.bukkit.adapter.impl.Spigot_v1_12_R1 as the Bukkit adapter
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:04] [Server thread/INFO]: [ColoredSigns] Enabling ColoredSigns v2.0
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:04] [Server thread/INFO]: [ColoredSigns] ColoredSigns enabling.
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:04] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:04] [Server thread/WARN]: [ColoredSigns] PermissionsEx support is enabled.
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:04] [Server thread/INFO]: [ColoredSigns] Starting services.. loading file and library\'s.
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:04] [Server thread/INFO]: [SetLobby] Enabling SetLobby v1.1
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:04] [Server thread/INFO]: [WorldGuard] Enabling WorldGuard v6.2.1;84bc322
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world) TNT ignition is PERMITTED.
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world) Lighters are PERMITTED.
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world) Lava fire is blocked.
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world) Fire spread is UNRESTRICTED.
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'world\'
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) TNT ignition is PERMITTED.
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) Lighters are PERMITTED.
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) Lava fire is blocked.
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) Fire spread is UNRESTRICTED.
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'world_nether\'
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) TNT ignition is PERMITTED.
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) Lighters are PERMITTED.
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) Lava fire is blocked.
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) Fire spread is UNRESTRICTED.
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'world_the_end\'
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: [WorldGuard] Loading region data...
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: [MultiWorld] Enabling MultiWorld v5.2.8
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: -------- World Settings For [City] --------
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:06] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:07] [Server thread/INFO]: Preparing start region for level 3 (Seed: -2856484906013726143)
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:08] [Server thread/INFO]: Preparing spawn area for City, 0%
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:09] [Server thread/INFO]: Preparing spawn area for City, 12%
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:10] [Server thread/INFO]: Preparing spawn area for City, 24%
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:11] [Server thread/INFO]: Preparing spawn area for City, 36%
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:13] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:13] [Server thread/INFO]: Preparing spawn area for City, 40%
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:14] [Server thread/INFO]: Preparing spawn area for City, 44%
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:15] [Server thread/INFO]: Preparing spawn area for City, 56%
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:16] [Server thread/INFO]: Preparing spawn area for City, 73%
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Preparing spawn area for City, 93%
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: [WorldGuard] (City) TNT ignition is PERMITTED.
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: [WorldGuard] (City) Lighters are PERMITTED.
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: [WorldGuard] (City) Lava fire is blocked.
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: [WorldGuard] (City) Fire spread is UNRESTRICTED.
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'City\'
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: -------- World Settings For [Island] --------
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:17] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:18] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:18] [Server thread/INFO]: Preparing start region for level 4 (Seed: 6943831984230690673)
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:19] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:19] [Server thread/INFO]: Preparing spawn area for Island, 0%
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:20] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:20] [Server thread/INFO]: Preparing spawn area for Island, 48%
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: [WorldGuard] (Island) TNT ignition is PERMITTED.
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: [WorldGuard] (Island) Lighters are PERMITTED.
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: [WorldGuard] (Island) Lava fire is blocked.
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: [WorldGuard] (Island) Fire spread is UNRESTRICTED.
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Island\'
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: -------- World Settings For [Lobby] --------
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:21] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:22] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:22] [Server thread/INFO]: Preparing start region for level 5 (Seed: 4625368226363698133)
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:23] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:23] [Server thread/INFO]: Preparing spawn area for Lobby, 40%
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Preparing spawn area for Lobby, 93%
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) TNT ignition is PERMITTED.
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) Lighters are PERMITTED.
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) Lava fire is blocked.
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) Fire spread is UNRESTRICTED.
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Lobby\'
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: -------- World Settings For [SkyGrid] --------
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:24] [Server thread/INFO]: Preparing start region for level 6 (Seed: 5896774497783074816)
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:25] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:25] [Server thread/INFO]: Preparing spawn area for SkyGrid, 4%
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:26] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:26] [Server thread/INFO]: Preparing spawn area for SkyGrid, 20%
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:27] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:27] [Server thread/INFO]: Preparing spawn area for SkyGrid, 32%
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:28] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:28] [Server thread/INFO]: Preparing spawn area for SkyGrid, 44%
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:29] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:29] [Server thread/INFO]: Preparing spawn area for SkyGrid, 53%
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:30] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:30] [Server thread/INFO]: Preparing spawn area for SkyGrid, 69%
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:31] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:31] [Server thread/INFO]: Preparing spawn area for SkyGrid, 81%
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:32] [Server thread/INFO]: Preparing spawn area for SkyGrid, 89%
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:33] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:33] [Server thread/INFO]: Preparing spawn area for SkyGrid, 97%
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) TNT ignition is PERMITTED.
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [351] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) Lighters are PERMITTED.
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [352] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) Lava fire is blocked.
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [353] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) Fire spread is UNRESTRICTED.
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [354] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'SkyGrid\'
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [355] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: -------- World Settings For [Skywars] --------
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [356] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [357] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [358] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [359] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [360] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [361] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [362] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 369
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [363] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 370
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [364] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 371
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [365] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 372
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [366] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 373
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [367] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 374
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [368] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 375
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [369] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 376
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [370] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 377
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [371] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 378
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [372] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 379
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [373] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 380
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [374] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 381
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [375] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 382
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [376] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 383
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [377] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 384
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [378] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 385
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [379] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 386
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [380] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 387
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [381] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 388
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [382] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:34] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 389
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [383] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:35] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:35] [Server thread/INFO]: Preparing start region for level 7 (Seed: 3032716577299497366)
                                    [number:protected] => 390
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [384] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Preparing spawn area for Skywars, 32%
                                    [number:protected] => 391
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [385] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) TNT ignition is PERMITTED.
                                    [number:protected] => 392
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [386] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) Lighters are PERMITTED.
                                    [number:protected] => 393
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [387] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) Lava fire is blocked.
                                    [number:protected] => 394
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [388] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) Fire spread is UNRESTRICTED.
                                    [number:protected] => 395
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [389] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Skywars\'
                                    [number:protected] => 396
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [390] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: -------- World Settings For [Survival] --------
                                    [number:protected] => 397
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [391] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 398
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [392] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 399
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [393] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 400
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [394] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 401
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [395] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 402
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [396] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 403
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [397] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 404
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [398] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 405
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [399] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 406
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [400] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 407
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [401] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 408
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [402] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 409
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [403] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 410
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [404] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 411
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [405] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 412
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [406] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 413
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [407] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 414
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [408] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 415
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [409] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 416
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [410] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 417
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [411] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 418
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [412] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 419
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [413] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 420
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [414] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 421
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [415] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 422
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [416] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 423
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [417] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:36] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 424
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [418] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:37] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:37] [Server thread/INFO]: Preparing start region for level 8 (Seed: 8097323309806930998)
                                    [number:protected] => 425
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [419] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:38] [Server thread/INFO]: Preparing spawn area for Survival, 8%
                                    [number:protected] => 426
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [420] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:39] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:39] [Server thread/INFO]: Preparing spawn area for Survival, 40%
                                    [number:protected] => 427
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [421] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:40] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:40] [Server thread/INFO]: Preparing spawn area for Survival, 77%
                                    [number:protected] => 428
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [422] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:41] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:41] [Server thread/INFO]: Preparing spawn area for Survival, 93%
                                    [number:protected] => 429
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [423] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) TNT ignition is PERMITTED.
                                    [number:protected] => 430
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [424] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) Lighters are PERMITTED.
                                    [number:protected] => 431
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [425] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) Lava fire is blocked.
                                    [number:protected] => 432
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [426] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) Fire spread is UNRESTRICTED.
                                    [number:protected] => 433
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [427] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Survival\'
                                    [number:protected] => 434
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [428] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [MultiWorld] v5.2.8 enabled.
                                    [number:protected] => 435
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [429] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [SkinsRestorer] Enabling SkinsRestorer v13.5-SNAPSHOT
                                    [number:protected] => 436
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [430] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: \u001b[0;33;1m[\u001b[0;32;22mSkinsRestorer\u001b[0;33;1m] \u001b[0;32;1mDetected Minecraft \u001b[0;33;1mv1_12_R1\u001b[0;32;1m, using \u001b[0;33;1mUniversalSkinFactory\u001b[0;32;1m.\u001b[m
                                    [number:protected] => 437
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [431] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [PermissionsEx] Enabling PermissionsEx v1.23.4
                                    [number:protected] => 438
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [432] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [PermissionsEx] Initializing file backend
                                    [number:protected] => 439
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [433] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:42] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:42] [Server thread/INFO]: [PermissionsEx] Permissions file successfully reloaded
                                    [number:protected] => 440
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [434] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:43] [Server thread/INFO]: WEPIF: PermissionsEx detected! Using PermissionsEx for permissions.
                                    [number:protected] => 441
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [435] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:43] [Server thread/INFO]: [Vault][Permission] PermissionsEx hooked.
                                    [number:protected] => 442
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [436] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:43] [Server thread/INFO]: [Vault][Chat] PermissionsEx_Chat hooked.
                                    [number:protected] => 443
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [437] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:43] [Server thread/INFO]: [PerWorldSpawn] Enabling PerWorldSpawn v1.0.0
                                    [number:protected] => 444
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [438] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:43] [Server thread/INFO]: [PerWorldSpawn] Enabling the plugin...
                                    [number:protected] => 445
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [439] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:43] [Server thread/INFO]: [PerWorldSpawn] Enabled PerWorldSpawn v1.0.0!
                                    [number:protected] => 446
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [440] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:43] [Server thread/INFO]: [ViaVersion] Enabling ViaVersion v1.6.0
                                    [number:protected] => 447
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [441] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:44] [Server thread/INFO]: [Tablist] Enabling Tablist v1.3.2.9
                                    [number:protected] => 448
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [442] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:44] [Server thread/INFO]: Tablist&gt; You have to install PlaceholderAPI to use some placeholders !
                                    [number:protected] => 449
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [443] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:44] [Server thread/INFO]: Tablist&gt; Tablist v1.3.2.9 enabled!!
                                    [number:protected] => 450
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [444] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:44] [Server thread/INFO]: [PerWorldTablist] Enabling PerWorldTablist v1.1.0
                                    [number:protected] => 451
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [445] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:44] [Server thread/INFO]: [DailyRewards] Enabling DailyRewards v1.3.1
                                    [number:protected] => 452
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [446] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:44] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:44] [Server thread/INFO]: [NameManager] Enabling NameManager v3.1.1
                                    [number:protected] => 453
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [447] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:45] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:45] [Server thread/INFO]: [Essentials] Enabling Essentials v2.0.1-b488
                                    [number:protected] => 454
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [448] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:47] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:47] [Server thread/INFO]: [Essentials] Using 1.8.3+ BlockStateMeta provider as mob spawner provider.
                                    [number:protected] => 455
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [449] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:47] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:47] [Server thread/INFO]: [Essentials] Using Reflection based provider as spawn egg provider.
                                    [number:protected] => 456
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [450] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:47] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:47] [Server thread/INFO]: [Essentials] Using 1.9+ BasePotionData provider as potion meta provider.
                                    [number:protected] => 457
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [451] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: Using locale en_US
                                    [number:protected] => 458
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [452] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: [Essentials] Starting Metrics. Opt-out using the global bStats config.
                                    [number:protected] => 459
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [453] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: [Vault][Economy] Essentials Economy hooked.
                                    [number:protected] => 460
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [454] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: [Essentials] Using Vault based permissions (PermissionsEx)
                                    [number:protected] => 461
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [455] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: [ArmorStandTools] Enabling ArmorStandTools v2.4.3
                                    [number:protected] => 462
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [456] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: [ArmorStandTools] Loading support for v1_12_R1
                                    [number:protected] => 463
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [457] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: [ArmorStandTools] PlotSquared plugin not found. Continuing without PlotSquared support.
                                    [number:protected] => 464
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [458] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:48] [Server thread/INFO]: [ArmorStandTools] WorldGuard plugin found. WorldGuard support enabled.
                                    [number:protected] => 465
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [459] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu] Enabling GadgetsMenu v4.3.4
                                    [number:protected] => 466
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [460] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu] ------------------------------------------------------
                                    [number:protected] => 467
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [461] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu] GadgetsMenu 4.3.4 is loading... [server: git-Spigot-596221b-9a1fc1e (MC: 1.12)]
                                    [number:protected] => 468
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [462] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu]                Plugin by Yap Zhen Yie.
                                    [number:protected] => 469
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [463] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu]               Date Modified: 30 Jan 2019
                                    [number:protected] => 470
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [464] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu]                            
                                    [number:protected] => 471
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [465] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu]              Initializing module v1_12_R1
                                    [number:protected] => 472
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [466] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:49] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:49] [Server thread/INFO]: [GadgetsMenu] ------------------------------------------------------
                                    [number:protected] => 473
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [467] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:56] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:56] [Server thread/INFO]: [AuthMe] Enabling AuthMe v5.4.0-b1877
                                    [number:protected] => 474
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [468] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/WARN]: [AuthMe] Error during SQLite initialization: [SQLiteException]: [SQLITE_ERROR] SQL error or missing database (near "219": syntax error)
                                    [number:protected] => 475
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [469] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/WARN]: [AuthMe] Could not create data source: [SQLiteException]: [SQLITE_ERROR] SQL error or missing database (near "219": syntax error)
                                    [number:protected] => 476
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [470] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/WARN]: [AuthMe] Aborting initialization of AuthMe: [IllegalStateException]: Error during initialization of data source
                                    [number:protected] => 477
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [471] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/WARN]: [AuthMe] THE SERVER IS GOING TO SHUT DOWN AS DEFINED IN THE CONFIGURATION!
                                    [number:protected] => 478
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [472] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [AuthMe] Waiting for 0 tasks to finish
                                    [number:protected] => 479
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [473] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [AuthMe] AuthMe 5.4.0-b1877 disabled!
                                    [number:protected] => 480
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [474] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [PerWorldInventory] Enabling PerWorldInventory v1.7.5
                                    [number:protected] => 481
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [475] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [PerWorldInventory] Registering commands...
                                    [number:protected] => 482
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [476] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [PerWorldInventory] Commands registered! Registering listeners...
                                    [number:protected] => 483
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [477] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [PerWorldInventory] Registered PlayerGameModeChangeListener.
                                    [number:protected] => 484
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [478] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [PerWorldInventory] Listeners enabled!
                                    [number:protected] => 485
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [479] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [PerWorldInventory] Vault found! Hooking into it...
                                    [number:protected] => 486
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [480] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [PerWorldInventory] Hooked into Vault!
                                    [number:protected] => 487
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [481] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:57] [Server thread/INFO]: [BedwarsRel] Enabling BedwarsRel v1.3.6
                                    [number:protected] => 488
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [482] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:58] [Server thread/INFO]: \u001b[0;30;1m[\u001b[0;36;1mBedWars\u001b[0;30;1m]\u001b[0;37;1m \u001b[0;37;1m\u001b[0;33;22mThe locale "cz" defined in your config is not available. Using fallback locale: en_US\u001b[m
                                    [number:protected] => 489
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [483] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:58] [Server thread/INFO]: \u001b[0;30;1m[\u001b[0;36;1mBedWars\u001b[0;30;1m]\u001b[0;37;1m \u001b[0;37;1m\u001b[0;32;1mGame \'Island\' successfully loaded!\u001b[m
                                    [number:protected] => 490
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [484] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:58] [Server thread/INFO]: [Citizens] Enabling Citizens v2.0.22-SNAPSHOT (build 1487)
                                    [number:protected] => 491
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [485] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:01:59] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:01:59] [Server thread/INFO]: [SimplePrefix] Enabling SimplePrefix v2.5.1
                                    [number:protected] => 492
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [486] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [GuiSignShop] Enabling GuiSignShop v0.6b
                                    [number:protected] => 493
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [487] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [GuiSignShop] Loading the plugin...\u001b[m
                                    [number:protected] => 494
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [488] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [GuiSignShop] Loading StickySigns.yml\u001b[m
                                    [number:protected] => 495
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [489] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [GuiSignShop] StickySigns.yml has been loaded\u001b[m
                                    [number:protected] => 496
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [490] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [GuiSignShop] Loading all the Sticky Signs from the file\u001b[m
                                    [number:protected] => 497
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [491] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [GuiSignShop] Plugin loaded perfectly\u001b[m
                                    [number:protected] => 498
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [492] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [CitizensCMD] Enabling CitizensCMD v1.2.2
                                    [number:protected] => 499
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [493] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [MinigamesLib] Enabling MinigamesLib v1.14.17-20170612.052814
                                    [number:protected] => 500
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [494] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [MinigamesLib] ?c?lLoaded MinigamesAPI. We\'re on V1_12_R1.
                                    [number:protected] => 501
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [495] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:00] [Server thread/INFO]: [MGSkyWars] Enabling MGSkyWars v1.14.17-20170612.054656
                                    [number:protected] => 502
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [496] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:01] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 503
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [497] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: Done (77.975s)! For help, type "help" or "?"
                                    [number:protected] => 504
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [498] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 505
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [499] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Query Listener #1/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Query Listener #1/INFO]: Query running on **.**.**.**:10347
                                    [number:protected] => 506
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [500] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: Stopping server
                                    [number:protected] => 507
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [501] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [MGSkyWars] Disabling MGSkyWars v1.14.17-20170612.054656
                                    [number:protected] => 508
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [502] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [MinigamesLib] Disabling MinigamesLib v1.14.17-20170612.052814
                                    [number:protected] => 509
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [503] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [CitizensCMD] Disabling CitizensCMD v1.2.2
                                    [number:protected] => 510
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [504] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [GuiSignShop] Disabling GuiSignShop v0.6b
                                    [number:protected] => 511
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [505] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [SimplePrefix] Disabling SimplePrefix v2.5.1
                                    [number:protected] => 512
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [506] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [ASkyBlock] Disabling ASkyBlock v3.0.9.4
                                    [number:protected] => 513
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [507] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [ASkyBlock] Saving offline messages...
                                    [number:protected] => 514
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [508] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:03] [Server thread/INFO]: [Citizens] Disabling Citizens v2.0.22-SNAPSHOT (build 1487)
                                    [number:protected] => 515
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [509] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:04] [Server thread/INFO]: [BedwarsRel] Disabling BedwarsRel v1.3.6
                                    [number:protected] => 516
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [510] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [PerWorldInventory] Disabling PerWorldInventory v1.7.5
                                    [number:protected] => 517
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [511] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [GadgetsMenu] Disabling GadgetsMenu v4.3.4
                                    [number:protected] => 518
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [512] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [ArmorStandTools] Disabling ArmorStandTools v2.4.3
                                    [number:protected] => 519
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [513] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [Essentials] Disabling Essentials v2.0.1-b488
                                    [number:protected] => 520
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [514] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [Vault][Economy] Essentials Economy unhooked.
                                    [number:protected] => 521
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [515] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [NameManager] Disabling NameManager v3.1.1
                                    [number:protected] => 522
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [516] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [DailyRewards] Disabling DailyRewards v1.3.1
                                    [number:protected] => 523
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [517] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [PerWorldTablist] Disabling PerWorldTablist v1.1.0
                                    [number:protected] => 524
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [518] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [Vault] Disabling Vault v1.7.1-b91
                                    [number:protected] => 525
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [519] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [Tablist] Disabling Tablist v1.3.2.9
                                    [number:protected] => 526
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [520] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Tablist&gt; Tablist v1.3.2.9 disabled!!
                                    [number:protected] => 527
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [521] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [ViaVersion] Disabling ViaVersion v1.6.0
                                    [number:protected] => 528
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [522] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [ViaVersion] ViaVersion is disabling, if this is a reload and you experience issues consider rebooting.
                                    [number:protected] => 529
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [523] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [PerWorldSpawn] Disabling PerWorldSpawn v1.0.0
                                    [number:protected] => 530
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [524] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [PerWorldSpawn] Disabling the plugin...
                                    [number:protected] => 531
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [525] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [PerWorldSpawn] Disabled PerWorldSpawn v1.0.0!
                                    [number:protected] => 532
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [526] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [PermissionsEx] Disabling PermissionsEx v1.23.4
                                    [number:protected] => 533
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [527] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: WEPIF: PermissionsEx detected! Using PermissionsEx for permissions.
                                    [number:protected] => 534
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [528] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [SkinsRestorer] Disabling SkinsRestorer v13.5-SNAPSHOT
                                    [number:protected] => 535
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [529] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [MultiWorld] Disabling MultiWorld v5.2.8
                                    [number:protected] => 536
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [530] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [MultiWorld] Disabled.
                                    [number:protected] => 537
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [531] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [WorldGuard] Disabling WorldGuard v6.2.1;84bc322
                                    [number:protected] => 538
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [532] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [WorldGuard] Shutting down executor and waiting for any pending tasks...
                                    [number:protected] => 539
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [533] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [SetLobby] Disabling SetLobby v1.1
                                    [number:protected] => 540
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [534] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [ColoredSigns] Disabling ColoredSigns v2.0
                                    [number:protected] => 541
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [535] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/WARN]: [ColoredSigns] ColoredSigns version 2.0 disabling...
                                    [number:protected] => 542
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [536] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: [WorldEdit] Disabling WorldEdit v6.1.8-SNAPSHOT;cd4729f
                                    [number:protected] => 543
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [537] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving players
                                    [number:protected] => 544
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [538] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving worlds
                                    [number:protected] => 545
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [539] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'world\'/overworld
                                    [number:protected] => 546
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [540] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'world_nether\'/the_nether
                                    [number:protected] => 547
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [541] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/the_end
                                    [number:protected] => 548
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [542] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'City\'/overworld
                                    [number:protected] => 549
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [543] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'Island\'/overworld
                                    [number:protected] => 550
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [544] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'Lobby\'/overworld
                                    [number:protected] => 551
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [545] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'SkyGrid\'/overworld
                                    [number:protected] => 552
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [546] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'Skywars\'/overworld
                                    [number:protected] => 553
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [547] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:02:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:02:08] [Server thread/INFO]: Saving chunks for level \'Survival\'/overworld
                                    [number:protected] => 554
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 548
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [16:00:32] [Server thread/INFO]: Starting minecraft server version 1.12
[16:00:32] [Server thread/INFO]: Loading properties
[16:00:32] [Server thread/INFO]: Default game type: SURVIVAL
[16:00:33] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-596221b-9a1fc1e (MC: 1.12) (Implementing API version 1.12-R0.1-SNAPSHOT)
[16:00:34] [Server thread/INFO]: Server Ping Player Sample Count: 12
[16:00:34] [Server thread/INFO]: Using 4 threads for Netty based IO
[16:00:34] [Server thread/INFO]: Debug logging is disabled
[16:00:34] [Server thread/INFO]: Generating keypair
[16:00:35] [Server thread/INFO]: Starting Minecraft server on *:10347
[16:00:35] [Server thread/INFO]: Using epoll channel type
[16:00:36] [Server thread/INFO]: Set PluginClassLoader as parallel capable
[16:00:36] [Server thread/ERROR]: Could not load \'plugins/AnvilLogin.jar\' in folder \'plugins\'
org.bukkit.plugin.UnknownDependencyException: Languagy
	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:216) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
	at org.bukkit.craftbukkit.v1_12_R1.CraftServer.loadPlugins(CraftServer.java:298) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
	at net.minecraft.server.v1_12_R1.DedicatedServer.init(DedicatedServer.java:205) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
	at net.minecraft.server.v1_12_R1.MinecraftServer.run(MinecraftServer.java:544) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[16:00:38] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v6.1.8-SNAPSHOT;cd4729f
[16:00:38] [Server thread/INFO]: [ColoredSigns] Loading ColoredSigns v2.0
[16:00:38] [Server thread/INFO]: [SetLobby] Loading SetLobby v1.1
[16:00:38] [Server thread/INFO]: [WorldGuard] Loading WorldGuard v6.2.1;84bc322
[16:00:38] [Server thread/INFO]: [MultiWorld] Loading MultiWorld v5.2.8
[16:00:38] [Server thread/INFO]: [SkinsRestorer] Loading SkinsRestorer v13.5-SNAPSHOT
[16:00:38] [Server thread/INFO]: [PermissionsEx] Loading PermissionsEx v1.23.4
[16:00:38] [Server thread/WARN]: [PermissionsEx] This server is in offline mode. Unless this server is configured to integrate with a supported proxy (see http://dft.ba/-8ous), UUIDs *may not be stable*!
[16:00:38] [Server thread/INFO]: [PerWorldSpawn] Loading PerWorldSpawn v1.0.0
[16:00:38] [Server thread/INFO]: [ViaVersion] Loading ViaVersion v1.6.0
[16:00:38] [Server thread/INFO]: [ViaVersion] ViaVersion 1.6.0 is now loaded, injecting!
[16:00:40] [Server thread/INFO]: [ViaVersion] Loading block mapping...
[16:00:41] [Server thread/INFO]: [ViaVersion] Loading item mapping...
[16:00:41] [Server thread/INFO]: [ViaVersion] Loading new tags...
[16:00:41] [Server thread/INFO]: [ViaVersion] Loading enchantments...
[16:00:41] [Server thread/INFO]: [ViaVersion] Loading sound mapping...
[16:00:42] [Server thread/INFO]: [Tablist] Loading Tablist v1.3.2.9
[16:00:42] [Server thread/INFO]: [Vault] Loading Vault v1.7.1-b91
[16:00:42] [Server thread/INFO]: [PerWorldTablist] Loading PerWorldTablist v1.1.0
[16:00:42] [Server thread/INFO]: [DailyRewards] Loading DailyRewards v1.3.1
[16:00:42] [Server thread/INFO]: [NameManager] Loading NameManager v3.1.1
[16:00:42] [Server thread/INFO]: [Essentials] Loading Essentials v2.0.1-b488
[16:00:42] [Server thread/INFO]: [ArmorStandTools] Loading ArmorStandTools v2.4.3
[16:00:42] [Server thread/INFO]: [GadgetsMenu] Loading GadgetsMenu v4.3.4
[16:00:42] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.4.0-b1877
[16:00:42] [Server thread/INFO]: [PerWorldInventory] Loading PerWorldInventory v1.7.5
[16:00:42] [Server thread/INFO]: [BedwarsRel] Loading BedwarsRel v1.3.6
[16:00:42] [Server thread/INFO]: [Citizens] Loading Citizens v2.0.22-SNAPSHOT (build 1487)
[16:00:42] [Server thread/INFO]: [ASkyBlock] Loading ASkyBlock v3.0.9.4
[16:00:42] [Server thread/INFO]: [SimplePrefix] Loading SimplePrefix v2.5.1
[16:00:42] [Server thread/INFO]: [GuiSignShop] Loading GuiSignShop v0.6b
[16:00:42] [Server thread/INFO]: [CitizensCMD] Loading CitizensCMD v1.2.2
[16:00:42] [Server thread/INFO]: [MinigamesLib] Loading MinigamesLib v1.14.17-20170612.052814
[16:00:42] [Server thread/INFO]: [MGSkyWars] Loading MGSkyWars v1.14.17-20170612.054656
[16:00:42] [Server thread/INFO]: [Vault] Enabling Vault v1.7.1-b91
[16:00:42] [Server thread/INFO]: [Vault] [Economy] Essentials Economy found: Waiting
[16:00:42] [Server thread/INFO]: [Vault] [Permission] PermissionsEx found: Waiting
[16:00:42] [Server thread/INFO]: [Vault] [Permission] SuperPermissions loaded as backup permission system.
[16:00:42] [Server thread/INFO]: [Vault] [Chat] PermissionsEx found: Waiting
[16:00:42] [Server thread/INFO]: [Vault] Enabled Version 1.7.1-b91
[16:00:42] [Server thread/INFO]: [ASkyBlock] Enabling ASkyBlock v3.0.9.4
[16:00:44] [Server thread/INFO]: [ASkyBlock] Loading entity limits
[16:00:44] [Server thread/INFO]: [ASkyBlock] HOPPER will be limited to 30
[16:00:44] [Server thread/WARN]: [ASkyBlock] ***********************************************************
[16:00:44] [Server thread/WARN]: [ASkyBlock] Config file is out of date. See config.new.yml for updates!
[16:00:44] [Server thread/WARN]: [ASkyBlock] config.yml version is \'3.0.8\'
[16:00:44] [Server thread/WARN]: [ASkyBlock] Latest config version is \'3.0.9\'
[16:00:44] [Server thread/WARN]: [ASkyBlock] ***********************************************************
[16:00:44] [Server thread/INFO]: [ASkyBlock] Loaded default island schematic.
[16:00:45] [Server thread/INFO]: [ASkyBlock] Loaded default nether schematic.
[16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic The Original (island.schematic) for all players, order 1
[16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic NetherBlock Island (nether.schematic) for all players, order 0
[16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic Island Duo (double.schematic) for all players, order 2
[16:00:45] [Server thread/INFO]: [ASkyBlock] Loading schematic Black Diamonds (harder.schematic) for all players, order 3
[16:00:45] [Server thread/INFO]: [ASkyBlock] Loading offline messages...
[16:00:45] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[16:00:45] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
[16:00:45] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[16:00:45] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
[16:00:45] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
[16:00:45] [Server thread/INFO]: Preparing level "world"
[16:00:45] [Server thread/INFO]: -------- World Settings For [world] --------
[16:00:45] [Server thread/INFO]: Mob Spawn Range: 4
[16:00:45] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:00:45] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:00:45] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:00:45] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:00:45] [Server thread/INFO]: Random Lighting Updates: false
[16:00:45] [Server thread/INFO]: Structure Info Saving: true
[16:00:45] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:00:45] [Server thread/INFO]: Max TNT Explosions: 100
[16:00:45] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:00:45] [Server thread/INFO]: Item Merge Radius: 2.5
[16:00:45] [Server thread/INFO]: Item Despawn Rate: 6000
[16:00:45] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:00:45] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:00:45] [Server thread/INFO]: View Distance: 10
[16:00:45] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:00:45] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:00:45] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:00:48] [Server thread/INFO]: -------- World Settings For [world_nether] --------
[16:00:48] [Server thread/INFO]: Mob Spawn Range: 4
[16:00:48] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:00:48] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:00:48] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:00:48] [Server thread/INFO]: Random Lighting Updates: false
[16:00:48] [Server thread/INFO]: Structure Info Saving: true
[16:00:48] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:00:48] [Server thread/INFO]: Max TNT Explosions: 100
[16:00:48] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:00:48] [Server thread/INFO]: Item Merge Radius: 2.5
[16:00:48] [Server thread/INFO]: Item Despawn Rate: 6000
[16:00:48] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:00:48] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:00:48] [Server thread/INFO]: View Distance: 10
[16:00:48] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:00:48] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:00:48] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:00:48] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
[16:00:48] [Server thread/INFO]: Mob Spawn Range: 4
[16:00:48] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:00:48] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:00:48] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:00:48] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:00:48] [Server thread/INFO]: Random Lighting Updates: false
[16:00:48] [Server thread/INFO]: Structure Info Saving: true
[16:00:48] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:00:48] [Server thread/INFO]: Max TNT Explosions: 100
[16:00:48] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:00:48] [Server thread/INFO]: Item Merge Radius: 2.5
[16:00:48] [Server thread/INFO]: Item Despawn Rate: 6000
[16:00:48] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:00:48] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:00:48] [Server thread/INFO]: View Distance: 10
[16:00:48] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:00:48] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:00:48] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:00:48] [Server thread/INFO]: Preparing start region for level 0 (Seed: 5794635734043525586)
[16:00:50] [Server thread/INFO]: Preparing spawn area: 0%
[16:00:51] [Server thread/INFO]: Preparing spawn area: 4%
[16:00:52] [Server thread/INFO]: Preparing spawn area: 23%
[16:00:53] [Server thread/INFO]: Preparing spawn area: 35%
[16:00:54] [Server thread/INFO]: Preparing spawn area: 47%
[16:00:55] [Server thread/INFO]: Preparing spawn area: 52%
[16:00:56] [Server thread/INFO]: Preparing spawn area: 81%
[16:00:57] [Server thread/INFO]: Preparing spawn area: 97%
[16:00:57] [Server thread/INFO]: Preparing start region for level 1 (Seed: 2568388266100767191)
[16:00:58] [Server thread/INFO]: Preparing spawn area: 27%
[16:00:59] [Server thread/INFO]: Preparing spawn area: 50%
[16:01:00] [Server thread/INFO]: Preparing spawn area: 80%
[16:01:01] [Server thread/INFO]: Preparing start region for level 2 (Seed: 5794635734043525586)
[16:01:02] [Server thread/INFO]: [WorldEdit] Enabling WorldEdit v6.1.8-SNAPSHOT;cd4729f
[16:01:03] [Server thread/INFO]: WEPIF: Using the Bukkit Permissions API.
[16:01:04] [Server thread/INFO]: [WorldEdit] Using com.sk89q.worldedit.bukkit.adapter.impl.Spigot_v1_12_R1 as the Bukkit adapter
[16:01:04] [Server thread/INFO]: [ColoredSigns] Enabling ColoredSigns v2.0
[16:01:04] [Server thread/INFO]: [ColoredSigns] ColoredSigns enabling.
[16:01:04] [Server thread/WARN]: [ColoredSigns] PermissionsEx support is enabled.
[16:01:04] [Server thread/INFO]: [ColoredSigns] Starting services.. loading file and library\'s.
[16:01:04] [Server thread/INFO]: [SetLobby] Enabling SetLobby v1.1
[16:01:04] [Server thread/INFO]: [WorldGuard] Enabling WorldGuard v6.2.1;84bc322
[16:01:05] [Server thread/INFO]: [WorldGuard] (world) TNT ignition is PERMITTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world) Lighters are PERMITTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world) Lava fire is blocked.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world) Fire spread is UNRESTRICTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'world\'
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) TNT ignition is PERMITTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) Lighters are PERMITTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) Lava fire is blocked.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_nether) Fire spread is UNRESTRICTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'world_nether\'
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) TNT ignition is PERMITTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) Lighters are PERMITTED.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) Lava fire is blocked.
[16:01:05] [Server thread/INFO]: [WorldGuard] (world_the_end) Fire spread is UNRESTRICTED.
[16:01:06] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'world_the_end\'
[16:01:06] [Server thread/INFO]: [WorldGuard] Loading region data...
[16:01:06] [Server thread/INFO]: [MultiWorld] Enabling MultiWorld v5.2.8
[16:01:06] [Server thread/INFO]: -------- World Settings For [City] --------
[16:01:06] [Server thread/INFO]: Mob Spawn Range: 4
[16:01:06] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:01:06] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:01:06] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:01:06] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:01:06] [Server thread/INFO]: Random Lighting Updates: false
[16:01:06] [Server thread/INFO]: Structure Info Saving: true
[16:01:06] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:01:06] [Server thread/INFO]: Max TNT Explosions: 100
[16:01:06] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:01:06] [Server thread/INFO]: Item Merge Radius: 2.5
[16:01:06] [Server thread/INFO]: Item Despawn Rate: 6000
[16:01:06] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:01:06] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:01:06] [Server thread/INFO]: View Distance: 10
[16:01:06] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:01:06] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:01:06] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:01:07] [Server thread/INFO]: Preparing start region for level 3 (Seed: -2856484906013726143)
[16:01:08] [Server thread/INFO]: Preparing spawn area for City, 0%
[16:01:09] [Server thread/INFO]: Preparing spawn area for City, 12%
[16:01:10] [Server thread/INFO]: Preparing spawn area for City, 24%
[16:01:11] [Server thread/INFO]: Preparing spawn area for City, 36%
[16:01:13] [Server thread/INFO]: Preparing spawn area for City, 40%
[16:01:14] [Server thread/INFO]: Preparing spawn area for City, 44%
[16:01:15] [Server thread/INFO]: Preparing spawn area for City, 56%
[16:01:16] [Server thread/INFO]: Preparing spawn area for City, 73%
[16:01:17] [Server thread/INFO]: Preparing spawn area for City, 93%
[16:01:17] [Server thread/INFO]: [WorldGuard] (City) TNT ignition is PERMITTED.
[16:01:17] [Server thread/INFO]: [WorldGuard] (City) Lighters are PERMITTED.
[16:01:17] [Server thread/INFO]: [WorldGuard] (City) Lava fire is blocked.
[16:01:17] [Server thread/INFO]: [WorldGuard] (City) Fire spread is UNRESTRICTED.
[16:01:17] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'City\'
[16:01:17] [Server thread/INFO]: -------- World Settings For [Island] --------
[16:01:17] [Server thread/INFO]: Mob Spawn Range: 4
[16:01:17] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:01:17] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:01:17] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:01:17] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:01:17] [Server thread/INFO]: Random Lighting Updates: false
[16:01:17] [Server thread/INFO]: Structure Info Saving: true
[16:01:17] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:01:17] [Server thread/INFO]: Max TNT Explosions: 100
[16:01:17] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:01:17] [Server thread/INFO]: Item Merge Radius: 2.5
[16:01:17] [Server thread/INFO]: Item Despawn Rate: 6000
[16:01:17] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:01:17] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:01:17] [Server thread/INFO]: View Distance: 10
[16:01:17] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:01:17] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:01:17] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:01:18] [Server thread/INFO]: Preparing start region for level 4 (Seed: 6943831984230690673)
[16:01:19] [Server thread/INFO]: Preparing spawn area for Island, 0%
[16:01:20] [Server thread/INFO]: Preparing spawn area for Island, 48%
[16:01:21] [Server thread/INFO]: [WorldGuard] (Island) TNT ignition is PERMITTED.
[16:01:21] [Server thread/INFO]: [WorldGuard] (Island) Lighters are PERMITTED.
[16:01:21] [Server thread/INFO]: [WorldGuard] (Island) Lava fire is blocked.
[16:01:21] [Server thread/INFO]: [WorldGuard] (Island) Fire spread is UNRESTRICTED.
[16:01:21] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Island\'
[16:01:21] [Server thread/INFO]: -------- World Settings For [Lobby] --------
[16:01:21] [Server thread/INFO]: Mob Spawn Range: 4
[16:01:21] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:01:21] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:01:21] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:01:21] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:01:21] [Server thread/INFO]: Random Lighting Updates: false
[16:01:21] [Server thread/INFO]: Structure Info Saving: true
[16:01:21] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:01:21] [Server thread/INFO]: Max TNT Explosions: 100
[16:01:21] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:01:21] [Server thread/INFO]: Item Merge Radius: 2.5
[16:01:21] [Server thread/INFO]: Item Despawn Rate: 6000
[16:01:21] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:01:21] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:01:21] [Server thread/INFO]: View Distance: 10
[16:01:21] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:01:21] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:01:21] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:01:22] [Server thread/INFO]: Preparing start region for level 5 (Seed: 4625368226363698133)
[16:01:23] [Server thread/INFO]: Preparing spawn area for Lobby, 40%
[16:01:24] [Server thread/INFO]: Preparing spawn area for Lobby, 93%
[16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) TNT ignition is PERMITTED.
[16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) Lighters are PERMITTED.
[16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) Lava fire is blocked.
[16:01:24] [Server thread/INFO]: [WorldGuard] (Lobby) Fire spread is UNRESTRICTED.
[16:01:24] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Lobby\'
[16:01:24] [Server thread/INFO]: -------- World Settings For [SkyGrid] --------
[16:01:24] [Server thread/INFO]: Mob Spawn Range: 4
[16:01:24] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:01:24] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:01:24] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:01:24] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:01:24] [Server thread/INFO]: Random Lighting Updates: false
[16:01:24] [Server thread/INFO]: Structure Info Saving: true
[16:01:24] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:01:24] [Server thread/INFO]: Max TNT Explosions: 100
[16:01:24] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:01:24] [Server thread/INFO]: Item Merge Radius: 2.5
[16:01:24] [Server thread/INFO]: Item Despawn Rate: 6000
[16:01:24] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:01:24] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:01:24] [Server thread/INFO]: View Distance: 10
[16:01:24] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:01:24] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:01:24] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:01:24] [Server thread/INFO]: Preparing start region for level 6 (Seed: 5896774497783074816)
[16:01:25] [Server thread/INFO]: Preparing spawn area for SkyGrid, 4%
[16:01:26] [Server thread/INFO]: Preparing spawn area for SkyGrid, 20%
[16:01:27] [Server thread/INFO]: Preparing spawn area for SkyGrid, 32%
[16:01:28] [Server thread/INFO]: Preparing spawn area for SkyGrid, 44%
[16:01:29] [Server thread/INFO]: Preparing spawn area for SkyGrid, 53%
[16:01:30] [Server thread/INFO]: Preparing spawn area for SkyGrid, 69%
[16:01:31] [Server thread/INFO]: Preparing spawn area for SkyGrid, 81%
[16:01:32] [Server thread/INFO]: Preparing spawn area for SkyGrid, 89%
[16:01:33] [Server thread/INFO]: Preparing spawn area for SkyGrid, 97%
[16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) TNT ignition is PERMITTED.
[16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) Lighters are PERMITTED.
[16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) Lava fire is blocked.
[16:01:34] [Server thread/INFO]: [WorldGuard] (SkyGrid) Fire spread is UNRESTRICTED.
[16:01:34] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'SkyGrid\'
[16:01:34] [Server thread/INFO]: -------- World Settings For [Skywars] --------
[16:01:34] [Server thread/INFO]: Mob Spawn Range: 4
[16:01:34] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:01:34] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:01:34] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:01:34] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:01:34] [Server thread/INFO]: Random Lighting Updates: false
[16:01:34] [Server thread/INFO]: Structure Info Saving: true
[16:01:34] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:01:34] [Server thread/INFO]: Max TNT Explosions: 100
[16:01:34] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:01:34] [Server thread/INFO]: Item Merge Radius: 2.5
[16:01:34] [Server thread/INFO]: Item Despawn Rate: 6000
[16:01:34] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:01:34] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:01:34] [Server thread/INFO]: View Distance: 10
[16:01:34] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:01:34] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:01:34] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:01:35] [Server thread/INFO]: Preparing start region for level 7 (Seed: 3032716577299497366)
[16:01:36] [Server thread/INFO]: Preparing spawn area for Skywars, 32%
[16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) TNT ignition is PERMITTED.
[16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) Lighters are PERMITTED.
[16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) Lava fire is blocked.
[16:01:36] [Server thread/INFO]: [WorldGuard] (Skywars) Fire spread is UNRESTRICTED.
[16:01:36] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Skywars\'
[16:01:36] [Server thread/INFO]: -------- World Settings For [Survival] --------
[16:01:36] [Server thread/INFO]: Mob Spawn Range: 4
[16:01:36] [Server thread/INFO]: Cactus Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Cane Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Melon Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Sapling Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Wheat Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Vine Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[16:01:36] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[16:01:36] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[16:01:36] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[16:01:36] [Server thread/INFO]: Random Lighting Updates: false
[16:01:36] [Server thread/INFO]: Structure Info Saving: true
[16:01:36] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[16:01:36] [Server thread/INFO]: Max TNT Explosions: 100
[16:01:36] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[16:01:36] [Server thread/INFO]: Item Merge Radius: 2.5
[16:01:36] [Server thread/INFO]: Item Despawn Rate: 6000
[16:01:36] [Server thread/INFO]: Arrow Despawn Rate: 1200
[16:01:36] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[16:01:36] [Server thread/INFO]: View Distance: 10
[16:01:36] [Server thread/INFO]: Experience Merge Radius: 3.0
[16:01:36] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[16:01:36] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[16:01:37] [Server thread/INFO]: Preparing start region for level 8 (Seed: 8097323309806930998)
[16:01:38] [Server thread/INFO]: Preparing spawn area for Survival, 8%
[16:01:39] [Server thread/INFO]: Preparing spawn area for Survival, 40%
[16:01:40] [Server thread/INFO]: Preparing spawn area for Survival, 77%
[16:01:41] [Server thread/INFO]: Preparing spawn area for Survival, 93%
[16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) TNT ignition is PERMITTED.
[16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) Lighters are PERMITTED.
[16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) Lava fire is blocked.
[16:01:42] [Server thread/INFO]: [WorldGuard] (Survival) Fire spread is UNRESTRICTED.
[16:01:42] [Server thread/INFO]: [WorldGuard] Loaded configuration for world \'Survival\'
[16:01:42] [Server thread/INFO]: [MultiWorld] v5.2.8 enabled.
[16:01:42] [Server thread/INFO]: [SkinsRestorer] Enabling SkinsRestorer v13.5-SNAPSHOT
[16:01:42] [Server thread/INFO]: \u001b[0;33;1m[\u001b[0;32;22mSkinsRestorer\u001b[0;33;1m] \u001b[0;32;1mDetected Minecraft \u001b[0;33;1mv1_12_R1\u001b[0;32;1m, using \u001b[0;33;1mUniversalSkinFactory\u001b[0;32;1m.\u001b[m
[16:01:42] [Server thread/INFO]: [PermissionsEx] Enabling PermissionsEx v1.23.4
[16:01:42] [Server thread/INFO]: [PermissionsEx] Initializing file backend
[16:01:42] [Server thread/INFO]: [PermissionsEx] Permissions file successfully reloaded
[16:01:43] [Server thread/INFO]: WEPIF: PermissionsEx detected! Using PermissionsEx for permissions.
[16:01:43] [Server thread/INFO]: [Vault][Permission] PermissionsEx hooked.
[16:01:43] [Server thread/INFO]: [Vault][Chat] PermissionsEx_Chat hooked.
[16:01:43] [Server thread/INFO]: [PerWorldSpawn] Enabling PerWorldSpawn v1.0.0
[16:01:43] [Server thread/INFO]: [PerWorldSpawn] Enabling the plugin...
[16:01:43] [Server thread/INFO]: [PerWorldSpawn] Enabled PerWorldSpawn v1.0.0!
[16:01:43] [Server thread/INFO]: [ViaVersion] Enabling ViaVersion v1.6.0
[16:01:44] [Server thread/INFO]: [Tablist] Enabling Tablist v1.3.2.9
[16:01:44] [Server thread/INFO]: Tablist&gt; You have to install PlaceholderAPI to use some placeholders !
[16:01:44] [Server thread/INFO]: Tablist&gt; Tablist v1.3.2.9 enabled!!
[16:01:44] [Server thread/INFO]: [PerWorldTablist] Enabling PerWorldTablist v1.1.0
[16:01:44] [Server thread/INFO]: [DailyRewards] Enabling DailyRewards v1.3.1
[16:01:44] [Server thread/INFO]: [NameManager] Enabling NameManager v3.1.1
[16:01:45] [Server thread/INFO]: [Essentials] Enabling Essentials v2.0.1-b488
[16:01:47] [Server thread/INFO]: [Essentials] Using 1.8.3+ BlockStateMeta provider as mob spawner provider.
[16:01:47] [Server thread/INFO]: [Essentials] Using Reflection based provider as spawn egg provider.
[16:01:47] [Server thread/INFO]: [Essentials] Using 1.9+ BasePotionData provider as potion meta provider.
[16:01:48] [Server thread/INFO]: Using locale en_US
[16:01:48] [Server thread/INFO]: [Essentials] Starting Metrics. Opt-out using the global bStats config.
[16:01:48] [Server thread/INFO]: [Vault][Economy] Essentials Economy hooked.
[16:01:48] [Server thread/INFO]: [Essentials] Using Vault based permissions (PermissionsEx)
[16:01:48] [Server thread/INFO]: [ArmorStandTools] Enabling ArmorStandTools v2.4.3
[16:01:48] [Server thread/INFO]: [ArmorStandTools] Loading support for v1_12_R1
[16:01:48] [Server thread/INFO]: [ArmorStandTools] PlotSquared plugin not found. Continuing without PlotSquared support.
[16:01:48] [Server thread/INFO]: [ArmorStandTools] WorldGuard plugin found. WorldGuard support enabled.
[16:01:49] [Server thread/INFO]: [GadgetsMenu] Enabling GadgetsMenu v4.3.4
[16:01:49] [Server thread/INFO]: [GadgetsMenu] ------------------------------------------------------
[16:01:49] [Server thread/INFO]: [GadgetsMenu] GadgetsMenu 4.3.4 is loading... [server: git-Spigot-596221b-9a1fc1e (MC: 1.12)]
[16:01:49] [Server thread/INFO]: [GadgetsMenu]                Plugin by Yap Zhen Yie.
[16:01:49] [Server thread/INFO]: [GadgetsMenu]               Date Modified: 30 Jan 2019
[16:01:49] [Server thread/INFO]: [GadgetsMenu]                            
[16:01:49] [Server thread/INFO]: [GadgetsMenu]              Initializing module v1_12_R1
[16:01:49] [Server thread/INFO]: [GadgetsMenu] ------------------------------------------------------
[16:01:56] [Server thread/INFO]: [AuthMe] Enabling AuthMe v5.4.0-b1877
[16:01:57] [Server thread/WARN]: [AuthMe] Error during SQLite initialization: [SQLiteException]: [SQLITE_ERROR] SQL error or missing database (near "219": syntax error)
[16:01:57] [Server thread/WARN]: [AuthMe] Could not create data source: [SQLiteException]: [SQLITE_ERROR] SQL error or missing database (near "219": syntax error)
[16:01:57] [Server thread/WARN]: [AuthMe] Aborting initialization of AuthMe: [IllegalStateException]: Error during initialization of data source
[16:01:57] [Server thread/WARN]: [AuthMe] THE SERVER IS GOING TO SHUT DOWN AS DEFINED IN THE CONFIGURATION!
[16:01:57] [Server thread/INFO]: [AuthMe] Waiting for 0 tasks to finish
[16:01:57] [Server thread/INFO]: [AuthMe] AuthMe 5.4.0-b1877 disabled!
[16:01:57] [Server thread/INFO]: [PerWorldInventory] Enabling PerWorldInventory v1.7.5
[16:01:57] [Server thread/INFO]: [PerWorldInventory] Registering commands...
[16:01:57] [Server thread/INFO]: [PerWorldInventory] Commands registered! Registering listeners...
[16:01:57] [Server thread/INFO]: [PerWorldInventory] Registered PlayerGameModeChangeListener.
[16:01:57] [Server thread/INFO]: [PerWorldInventory] Listeners enabled!
[16:01:57] [Server thread/INFO]: [PerWorldInventory] Vault found! Hooking into it...
[16:01:57] [Server thread/INFO]: [PerWorldInventory] Hooked into Vault!
[16:01:57] [Server thread/INFO]: [BedwarsRel] Enabling BedwarsRel v1.3.6
[16:01:58] [Server thread/INFO]: \u001b[0;30;1m[\u001b[0;36;1mBedWars\u001b[0;30;1m]\u001b[0;37;1m \u001b[0;37;1m\u001b[0;33;22mThe locale "cz" defined in your config is not available. Using fallback locale: en_US\u001b[m
[16:01:58] [Server thread/INFO]: \u001b[0;30;1m[\u001b[0;36;1mBedWars\u001b[0;30;1m]\u001b[0;37;1m \u001b[0;37;1m\u001b[0;32;1mGame \'Island\' successfully loaded!\u001b[m
[16:01:58] [Server thread/INFO]: [Citizens] Enabling Citizens v2.0.22-SNAPSHOT (build 1487)
[16:01:59] [Server thread/INFO]: [SimplePrefix] Enabling SimplePrefix v2.5.1
[16:02:00] [Server thread/INFO]: [GuiSignShop] Enabling GuiSignShop v0.6b
[16:02:00] [Server thread/INFO]: [GuiSignShop] Loading the plugin...\u001b[m
[16:02:00] [Server thread/INFO]: [GuiSignShop] Loading StickySigns.yml\u001b[m
[16:02:00] [Server thread/INFO]: [GuiSignShop] StickySigns.yml has been loaded\u001b[m
[16:02:00] [Server thread/INFO]: [GuiSignShop] Loading all the Sticky Signs from the file\u001b[m
[16:02:00] [Server thread/INFO]: [GuiSignShop] Plugin loaded perfectly\u001b[m
[16:02:00] [Server thread/INFO]: [CitizensCMD] Enabling CitizensCMD v1.2.2
[16:02:00] [Server thread/INFO]: [MinigamesLib] Enabling MinigamesLib v1.14.17-20170612.052814
[16:02:00] [Server thread/INFO]: [MinigamesLib] ?c?lLoaded MinigamesAPI. We\'re on V1_12_R1.
[16:02:00] [Server thread/INFO]: [MGSkyWars] Enabling MGSkyWars v1.14.17-20170612.054656
[16:02:01] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[16:02:03] [Server thread/INFO]: Done (77.975s)! For help, type "help" or "?"
[16:02:03] [Server thread/INFO]: Starting GS4 status listener
[16:02:03] [Query Listener #1/INFO]: Query running on **.**.**.**:10347
[16:02:03] [Server thread/INFO]: Stopping server
[16:02:03] [Server thread/INFO]: [MGSkyWars] Disabling MGSkyWars v1.14.17-20170612.054656
[16:02:03] [Server thread/INFO]: [MinigamesLib] Disabling MinigamesLib v1.14.17-20170612.052814
[16:02:03] [Server thread/INFO]: [CitizensCMD] Disabling CitizensCMD v1.2.2
[16:02:03] [Server thread/INFO]: [GuiSignShop] Disabling GuiSignShop v0.6b
[16:02:03] [Server thread/INFO]: [SimplePrefix] Disabling SimplePrefix v2.5.1
[16:02:03] [Server thread/INFO]: [ASkyBlock] Disabling ASkyBlock v3.0.9.4
[16:02:03] [Server thread/INFO]: [ASkyBlock] Saving offline messages...
[16:02:03] [Server thread/INFO]: [Citizens] Disabling Citizens v2.0.22-SNAPSHOT (build 1487)
[16:02:04] [Server thread/INFO]: [BedwarsRel] Disabling BedwarsRel v1.3.6
[16:02:08] [Server thread/INFO]: [PerWorldInventory] Disabling PerWorldInventory v1.7.5
[16:02:08] [Server thread/INFO]: [GadgetsMenu] Disabling GadgetsMenu v4.3.4
[16:02:08] [Server thread/INFO]: [ArmorStandTools] Disabling ArmorStandTools v2.4.3
[16:02:08] [Server thread/INFO]: [Essentials] Disabling Essentials v2.0.1-b488
[16:02:08] [Server thread/INFO]: [Vault][Economy] Essentials Economy unhooked.
[16:02:08] [Server thread/INFO]: [NameManager] Disabling NameManager v3.1.1
[16:02:08] [Server thread/INFO]: [DailyRewards] Disabling DailyRewards v1.3.1
[16:02:08] [Server thread/INFO]: [PerWorldTablist] Disabling PerWorldTablist v1.1.0
[16:02:08] [Server thread/INFO]: [Vault] Disabling Vault v1.7.1-b91
[16:02:08] [Server thread/INFO]: [Tablist] Disabling Tablist v1.3.2.9
[16:02:08] [Server thread/INFO]: Tablist&gt; Tablist v1.3.2.9 disabled!!
[16:02:08] [Server thread/INFO]: [ViaVersion] Disabling ViaVersion v1.6.0
[16:02:08] [Server thread/INFO]: [ViaVersion] ViaVersion is disabling, if this is a reload and you experience issues consider rebooting.
[16:02:08] [Server thread/INFO]: [PerWorldSpawn] Disabling PerWorldSpawn v1.0.0
[16:02:08] [Server thread/INFO]: [PerWorldSpawn] Disabling the plugin...
[16:02:08] [Server thread/INFO]: [PerWorldSpawn] Disabled PerWorldSpawn v1.0.0!
[16:02:08] [Server thread/INFO]: [PermissionsEx] Disabling PermissionsEx v1.23.4
[16:02:08] [Server thread/INFO]: WEPIF: PermissionsEx detected! Using PermissionsEx for permissions.
[16:02:08] [Server thread/INFO]: [SkinsRestorer] Disabling SkinsRestorer v13.5-SNAPSHOT
[16:02:08] [Server thread/INFO]: [MultiWorld] Disabling MultiWorld v5.2.8
[16:02:08] [Server thread/INFO]: [MultiWorld] Disabled.
[16:02:08] [Server thread/INFO]: [WorldGuard] Disabling WorldGuard v6.2.1;84bc322
[16:02:08] [Server thread/INFO]: [WorldGuard] Shutting down executor and waiting for any pending tasks...
[16:02:08] [Server thread/INFO]: [SetLobby] Disabling SetLobby v1.1
[16:02:08] [Server thread/INFO]: [ColoredSigns] Disabling ColoredSigns v2.0
[16:02:08] [Server thread/WARN]: [ColoredSigns] ColoredSigns version 2.0 disabling...
[16:02:08] [Server thread/INFO]: [WorldEdit] Disabling WorldEdit v6.1.8-SNAPSHOT;cd4729f
[16:02:08] [Server thread/INFO]: Saving players
[16:02:08] [Server thread/INFO]: Saving worlds
[16:02:08] [Server thread/INFO]: Saving chunks for level \'world\'/overworld
[16:02:08] [Server thread/INFO]: Saving chunks for level \'world_nether\'/the_nether
[16:02:08] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/the_end
[16:02:08] [Server thread/INFO]: Saving chunks for level \'City\'/overworld
[16:02:08] [Server thread/INFO]: Saving chunks for level \'Island\'/overworld
[16:02:08] [Server thread/INFO]: Saving chunks for level \'Lobby\'/overworld
[16:02:08] [Server thread/INFO]: Saving chunks for level \'SkyGrid\'/overworld
[16:02:08] [Server thread/INFO]: Saving chunks for level \'Skywars\'/overworld
[16:02:08] [Server thread/INFO]: Saving chunks for level \'Survival\'/overworld
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem Object
                (
                    [pluginPath:protected] => plugins/AnvilLogin.jar
                    [pluginName:protected] => AnvilLogin
                    [dependencyPluginName:protected] => Languagy
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution Object
                                (
                                    [pluginName:protected] => Languagy
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/AnvilLogin.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:00:36] [Server thread/ERROR]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:00:36] [Server thread/ERROR]: Could not load \'plugins/AnvilLogin.jar\' in folder \'plugins\'
                                            [number:protected] => 12
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.UnknownDependencyException: Languagy
                                            [number:protected] => 13
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:216) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                            [number:protected] => 14
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_12_R1.CraftServer.loadPlugins(CraftServer.java:298) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                            [number:protected] => 15
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_12_R1.DedicatedServer.init(DedicatedServer.java:205) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                            [number:protected] => 16
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_12_R1.MinecraftServer.run(MinecraftServer.java:544) [minecraft_server.jar:git-Spigot-596221b-9a1fc1e]
                                            [number:protected] => 17
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 18
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin\AuthMeShutdownProblem Object
                (
                    [solutions:protected] => 
                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:01:57] [Server thread/WARN]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:01:57] [Server thread/WARN]: [AuthMe] THE SERVER IS GOING TO SHUT DOWN AS DEFINED IN THE CONFIGURATION!
                                            [number:protected] => 478
                                        )

                                )

                            [level:protected] => WARN
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));
    }
}