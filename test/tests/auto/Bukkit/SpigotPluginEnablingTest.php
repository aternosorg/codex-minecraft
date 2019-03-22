<?php

class SpigotPluginEnablingTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/spigot-plugin-enabling.log");
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
                    [prefix:protected] => [14:33:05] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:05] [main/INFO]: Loaded 0 recipes
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:06] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:06] [Server thread/INFO]: Loading properties
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:06] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:07] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-3cb9dcb-77ca7ca (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:09] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:09] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:09] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:09] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:11] [Server thread/INFO]: Starting Minecraft server on *:10160
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:11] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:33] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:33] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v7.0.0-beta-05;6bbf29b
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:33] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:33] [Server thread/INFO]: [Multiverse-Core] Loading Multiverse-Core v2.5.0-b727
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:34] [Server thread/INFO]: [Multiverse-Portals] Loading Multiverse-Portals v2.5.0-b751
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:33:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:33:34] [Server thread/INFO]: [Multiverse-NetherPortals] Loading Multiverse-NetherPortals v2.5-b675
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: View Distance: 7
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: Preparing start region for level 5 (Seed: -4752855715155864395)
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:15] [Server thread/INFO]: [Multiverse-Core] 8 - World(s) loaded.
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:16] [Server thread/INFO]: [Multiverse-Core] Version 2.5.0-b727 (API v20) Enabled - By Rigby, fernferret, lithium3141, main-- and dumptruckman
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:16] [Server thread/INFO]: [Multiverse-Portals] Enabling Multiverse-Portals v2.5.0-b751
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:16] [Server thread/INFO]: [Multiverse-Portals] - Version 2.5.0-b751 Enabled - By Rigby and fernferret
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:16] [Server thread/INFO]: [MVPLogging] 0 - Portals(s) loaded
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:16] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:16] [Server thread/ERROR]: Error occurred while enabling Multiverse-Portals v2.5.0-b751 (Is it up to date?)
                                    [number:protected] => 31
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NoClassDefFoundError: com/sk89q/worldedit/bukkit/WorldEditAPI
                                    [number:protected] => 32
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.onarandombox.MultiversePortals.WorldEditConnection.connect(WorldEditConnection.java:47) ~[?:?]
                                    [number:protected] => 33
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.onarandombox.MultiversePortals.MultiversePortals.checkForWorldEdit(MultiversePortals.java:174) ~[?:?]
                                    [number:protected] => 34
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.onarandombox.MultiversePortals.MultiversePortals.onEnable(MultiversePortals.java:141) ~[?:?]
                                    [number:protected] => 35
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:254) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 36
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:340) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 37
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:404) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 38
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:436) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 39
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:350) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 40
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:580) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 41
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:542) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 42
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:420) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 43
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:294) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 44
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:698) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 45
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 46
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ClassNotFoundException: com.sk89q.worldedit.bukkit.WorldEditAPI
                                    [number:protected] => 47
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.net.URLClassLoader.findClass(URLClassLoader.java:381) ~[?:1.8.0_144]
                                    [number:protected] => 48
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.plugin.java.PluginClassLoader.findClass(PluginClassLoader.java:134) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 49
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.plugin.java.PluginClassLoader.findClass(PluginClassLoader.java:80) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                    [number:protected] => 50
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
                                    [number:protected] => 51
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
                                    [number:protected] => 52
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 14 more
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:16] [Server thread/INFO]: [Multiverse-NetherPortals] Enabling Multiverse-NetherPortals v2.5-b675
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:17] [Server thread/INFO]: [Multiverse-NetherPortals] - Version 2.5-b675 Enabled - By Rigby and fernferret
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:17] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:17] [Server thread/INFO]: Done (43.099s)! For help, type "help"
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:17] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [14:34:18] [Query Listener #1/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:34:18] [Query Listener #1/INFO]: Query running on **.**.**.**:10160
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 37
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [14:33:05] [main/INFO]: Loaded 0 recipes
[14:33:06] [Server thread/INFO]: Starting minecraft server version 1.13.2
[14:33:06] [Server thread/INFO]: Loading properties
[14:33:06] [Server thread/INFO]: Default game type: SURVIVAL
[14:33:07] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-3cb9dcb-77ca7ca (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
[14:33:09] [Server thread/INFO]: Using 4 threads for Netty based IO
[14:33:09] [Server thread/INFO]: Server Ping Player Sample Count: 12
[14:33:09] [Server thread/INFO]: Debug logging is disabled
[14:33:09] [Server thread/INFO]: Generating keypair
[14:33:11] [Server thread/INFO]: Starting Minecraft server on *:10160
[14:33:11] [Server thread/INFO]: Using epoll channel type
[14:33:33] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v7.0.0-beta-05;6bbf29b
[14:33:33] [Server thread/INFO]: [Multiverse-Core] Loading Multiverse-Core v2.5.0-b727
[14:33:34] [Server thread/INFO]: [Multiverse-Portals] Loading Multiverse-Portals v2.5.0-b751
[14:33:34] [Server thread/INFO]: [Multiverse-NetherPortals] Loading Multiverse-NetherPortals v2.5-b675
[14:34:15] [Server thread/INFO]: Max TNT Explosions: 100
[14:34:15] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[14:34:15] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[14:34:15] [Server thread/INFO]: Item Despawn Rate: 6000
[14:34:15] [Server thread/INFO]: Item Merge Radius: 2.5
[14:34:15] [Server thread/INFO]: Arrow Despawn Rate: 1200
[14:34:15] [Server thread/INFO]: View Distance: 7
[14:34:15] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[14:34:15] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[14:34:15] [Server thread/INFO]: Preparing start region for level 5 (Seed: -4752855715155864395)
[14:34:15] [Server thread/INFO]: [Multiverse-Core] 8 - World(s) loaded.
[14:34:16] [Server thread/INFO]: [Multiverse-Core] Version 2.5.0-b727 (API v20) Enabled - By Rigby, fernferret, lithium3141, main-- and dumptruckman
[14:34:16] [Server thread/INFO]: [Multiverse-Portals] Enabling Multiverse-Portals v2.5.0-b751
[14:34:16] [Server thread/INFO]: [Multiverse-Portals] - Version 2.5.0-b751 Enabled - By Rigby and fernferret
[14:34:16] [Server thread/INFO]: [MVPLogging] 0 - Portals(s) loaded
[14:34:16] [Server thread/ERROR]: Error occurred while enabling Multiverse-Portals v2.5.0-b751 (Is it up to date?)
java.lang.NoClassDefFoundError: com/sk89q/worldedit/bukkit/WorldEditAPI
at com.onarandombox.MultiversePortals.WorldEditConnection.connect(WorldEditConnection.java:47) ~[?:?]
at com.onarandombox.MultiversePortals.MultiversePortals.checkForWorldEdit(MultiversePortals.java:174) ~[?:?]
at com.onarandombox.MultiversePortals.MultiversePortals.onEnable(MultiversePortals.java:141) ~[?:?]
at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:254) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:340) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:404) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:436) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:350) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:580) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:542) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:420) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:294) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:698) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.lang.ClassNotFoundException: com.sk89q.worldedit.bukkit.WorldEditAPI
at java.net.URLClassLoader.findClass(URLClassLoader.java:381) ~[?:1.8.0_144]
at org.bukkit.plugin.java.PluginClassLoader.findClass(PluginClassLoader.java:134) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at org.bukkit.plugin.java.PluginClassLoader.findClass(PluginClassLoader.java:80) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
... 14 more
[14:34:16] [Server thread/INFO]: [Multiverse-NetherPortals] Enabling Multiverse-NetherPortals v2.5-b675
[14:34:17] [Server thread/INFO]: [Multiverse-NetherPortals] - Version 2.5-b675 Enabled - By Rigby and fernferret
[14:34:17] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[14:34:17] [Server thread/INFO]: Done (43.099s)! For help, type "help"
[14:34:17] [Server thread/INFO]: Starting GS4 status listener
[14:34:18] [Query Listener #1/INFO]: Query running on **.**.**.**:10160
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.13.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [14:33:06] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:33:06] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginEnablingProblem Object
                (
                    [pluginName:protected] => Multiverse-Portals
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => Multiverse-Portals
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => Multiverse-Portals
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [14:34:16] [Server thread/ERROR]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:34:16] [Server thread/ERROR]: Error occurred while enabling Multiverse-Portals v2.5.0-b751 (Is it up to date?)
                                            [number:protected] => 31
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NoClassDefFoundError: com/sk89q/worldedit/bukkit/WorldEditAPI
                                            [number:protected] => 32
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.onarandombox.MultiversePortals.WorldEditConnection.connect(WorldEditConnection.java:47) ~[?:?]
                                            [number:protected] => 33
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.onarandombox.MultiversePortals.MultiversePortals.checkForWorldEdit(MultiversePortals.java:174) ~[?:?]
                                            [number:protected] => 34
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.onarandombox.MultiversePortals.MultiversePortals.onEnable(MultiversePortals.java:141) ~[?:?]
                                            [number:protected] => 35
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:254) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 36
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:340) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 37
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:404) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 38
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:436) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 39
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:350) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 40
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:580) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 41
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:542) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 42
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:420) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 43
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:294) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 44
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:698) [minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 45
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 46
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.ClassNotFoundException: com.sk89q.worldedit.bukkit.WorldEditAPI
                                            [number:protected] => 47
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.net.URLClassLoader.findClass(URLClassLoader.java:381) ~[?:1.8.0_144]
                                            [number:protected] => 48
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.plugin.java.PluginClassLoader.findClass(PluginClassLoader.java:134) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 49
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.plugin.java.PluginClassLoader.findClass(PluginClassLoader.java:80) ~[minecraft_server.jar:git-Spigot-3cb9dcb-77ca7ca]
                                            [number:protected] => 50
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
                                            [number:protected] => 51
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
                                            [number:protected] => 52
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 14 more
                                            [number:protected] => 53
                                        )

                                )

                            [level:protected] => ERROR
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

        $this->assertEquals("Minecraft version: 1.13.2", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'Multiverse-Portals' could not be enabled.", $analysis[1]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'Multiverse-Portals'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Remove the plugin 'Multiverse-Portals'.", $analysis[1][1]->getMessage());

    }
}