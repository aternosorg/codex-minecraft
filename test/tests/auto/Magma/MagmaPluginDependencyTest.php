<?php

class MagmaPluginDependencyTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/magma/magma-plugin-dependency.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\MagmaLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:42] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:42] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:42] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:42] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:43] [Server thread/INFO]: Default game type: CREATIVE
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:43] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:53] [Server thread/INFO] [Minecraft]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:11] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:11] [Server thread/INFO] [FML]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:47] [Server thread/INFO]: Starting Minecraft server on *:10921
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:47] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:47] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:47] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:48] [Server thread/INFO]: Set PluginClassLoader as parallel capable
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:48] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:48] [Server thread/ERROR]: Could not load \'plugins/FactionsShop.jar\' in folder \'plugins\'
                                    [number:protected] => 13
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.UnknownDependencyException: Vault
                                    [number:protected] => 14
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:219) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 15
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 16
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 17
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 18
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:48] [Server thread/ERROR]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:48] [Server thread/ERROR]: Could not load \'plugins/BasicTab.jar\' in folder \'plugins\'
                                    [number:protected] => 20
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.UnknownDependencyException: ProtocolLib
                                    [number:protected] => 21
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:219) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 22
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 23
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 24
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 25
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:48] [Server thread/ERROR]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:49] [Server thread/INFO]: [AdvanceRespawn] Loading AdvanceRespawn v7.1.2
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:49] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:49] [Server thread/INFO]: [SuperLobbyPlus] Loading SuperLobbyPlus v1.3.3
                                    [number:protected] => 28
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:49] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 16
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [11:47:42] [Server thread/INFO]: Starting minecraft server version 1.8.8
[11:47:42] [Server thread/INFO]: Loading properties
[11:47:43] [Server thread/INFO]: Default game type: CREATIVE
[15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
[00:05:11] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
[11:47:46] [Server thread/INFO]: Server Ping Player Sample Count: 12
[11:47:46] [Server thread/INFO]: Using 4 threads for Netty based IO
[11:47:46] [Server thread/INFO]: Debug logging is disabled
[11:47:46] [Server thread/INFO]: Generating keypair
[11:47:47] [Server thread/INFO]: Starting Minecraft server on *:10921
[11:47:47] [Server thread/INFO]: Using epoll channel type
[11:47:48] [Server thread/INFO]: Set PluginClassLoader as parallel capable
[11:47:48] [Server thread/ERROR]: Could not load \'plugins/FactionsShop.jar\' in folder \'plugins\'
org.bukkit.plugin.UnknownDependencyException: Vault
	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:219) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[11:47:48] [Server thread/ERROR]: Could not load \'plugins/BasicTab.jar\' in folder \'plugins\'
org.bukkit.plugin.UnknownDependencyException: ProtocolLib
	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:219) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[11:47:49] [Server thread/INFO]: [AdvanceRespawn] Loading AdvanceRespawn v7.1.2
[11:47:49] [Server thread/INFO]: [SuperLobbyPlus] Loading SuperLobbyPlus v1.3.3

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
                                            [text:protected] => [11:47:42] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:47:42] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.8.8
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Magma\MagmaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
                                            [number:protected] => 4
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:02:53] [Server thread/INFO] [Minecraft]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Magma version
                    [value:protected] => e2b9ab6
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [00:05:11] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                            [number:protected] => 5
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [00:05:11] [Server thread/INFO] [FML]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 14.23.5.2814
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [11:47:48] [Server thread/ERROR]: Could not load \'plugins/FactionsShop.jar\' in folder \'plugins\'
                                            [number:protected] => 13
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.UnknownDependencyException: Vault
                                            [number:protected] => 14
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:219) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 15
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 16
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 17
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 18
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 19
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:47:48] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution Object
                                (
                                    [pluginName:protected] => Vault
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/FactionsShop.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [pluginPath:protected] => plugins/FactionsShop.jar
                    [pluginName:protected] => FactionsShop
                    [dependencyPluginName:protected] => Vault
                )

            [4] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [11:47:48] [Server thread/ERROR]: Could not load \'plugins/BasicTab.jar\' in folder \'plugins\'
                                            [number:protected] => 20
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.UnknownDependencyException: ProtocolLib
                                            [number:protected] => 21
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:219) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 22
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 23
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 24
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 25
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 26
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:47:48] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution Object
                                (
                                    [pluginName:protected] => ProtocolLib
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/BasicTab.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [pluginPath:protected] => plugins/BasicTab.jar
                    [pluginName:protected] => BasicTab
                    [dependencyPluginName:protected] => ProtocolLib
                )

        )

    [iterator:protected] => 4
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.8.8", $analysis[0]->getMessage());

        $this->assertEquals("Magma version: e2b9ab6", $analysis[1]->getMessage());

        $this->assertEquals("Forge version: 14.23.5.2814", $analysis[2]->getMessage());

        $this->assertEquals("The plugin 'FactionsShop' is missing the required the plugin 'Vault'.", $analysis[3]->getMessage());
        $this->assertEquals("Install the plugin 'Vault'.", $analysis[3][0]->getMessage());
        $this->assertEquals("Delete the file 'plugins/FactionsShop.jar'.", $analysis[3][1]->getMessage());

        $this->assertEquals("The plugin 'BasicTab' is missing the required the plugin 'ProtocolLib'.", $analysis[4]->getMessage());
        $this->assertEquals("Install the plugin 'ProtocolLib'.", $analysis[4][0]->getMessage());
        $this->assertEquals("Delete the file 'plugins/BasicTab.jar'.", $analysis[4][1]->getMessage());

    }
}