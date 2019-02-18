<?php

class SpigotPluginLoadTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/spigot-plugin-load.log");
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
                    [prefix:protected] => [11:47:42] [Server thread/INFO]:
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
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:42] [Server thread/INFO]:
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
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:43] [Server thread/INFO]:
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
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:43] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:46] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:47] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:47] [Server thread/INFO]: Starting Minecraft server on *:10921
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:47] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:47] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:48] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:48] [Server thread/ERROR]: Could not load \'plugins/GamenixText.jar\' in folder \'plugins\'
                                    [number:protected] => 11
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.InvalidDescriptionException: main is not defined
                                    [number:protected] => 12
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.PluginDescriptionFile.loadMap(PluginDescriptionFile.java:917) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 13
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.PluginDescriptionFile.&lt;init&gt;(PluginDescriptionFile.java:232) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 14
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.getPluginDescription(JavaPluginLoader.java:159) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 15
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:133) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 16
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 17
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 18
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 19
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 20
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException
                                    [number:protected] => 21
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.PluginDescriptionFile.loadMap(PluginDescriptionFile.java:912) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 22
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 7 more
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:47:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:47:48] [Server thread/INFO]: Set PluginClassLoader as parallel capable
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 12
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [11:47:42] [Server thread/INFO]: Starting minecraft server version 1.8.8
[11:47:42] [Server thread/INFO]: Loading properties
[11:47:43] [Server thread/INFO]: Default game type: CREATIVE
[11:47:43] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
[11:47:46] [Server thread/INFO]: Server Ping Player Sample Count: 12
[11:47:46] [Server thread/INFO]: Using 4 threads for Netty based IO
[11:47:46] [Server thread/INFO]: Debug logging is disabled
[11:47:46] [Server thread/INFO]: Generating keypair
[11:47:47] [Server thread/INFO]: Starting Minecraft server on *:10921
[11:47:47] [Server thread/INFO]: Using epoll channel type
[11:47:48] [Server thread/ERROR]: Could not load \'plugins/GamenixText.jar\' in folder \'plugins\'
org.bukkit.plugin.InvalidDescriptionException: main is not defined
	at org.bukkit.plugin.PluginDescriptionFile.loadMap(PluginDescriptionFile.java:917) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at org.bukkit.plugin.PluginDescriptionFile.&lt;init&gt;(PluginDescriptionFile.java:232) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at org.bukkit.plugin.java.JavaPluginLoader.getPluginDescription(JavaPluginLoader.java:159) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:133) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.lang.NullPointerException
	at org.bukkit.plugin.PluginDescriptionFile.loadMap(PluginDescriptionFile.java:912) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
	... 7 more
[11:47:48] [Server thread/INFO]: Set PluginClassLoader as parallel capable
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginLoadProblem Object
                (
                    [pluginPath:protected] => plugins/GamenixText.jar
                    [pluginName:protected] => GamenixText
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => GamenixText
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/GamenixText.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [11:47:48] [Server thread/ERROR]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [11:47:48] [Server thread/ERROR]: Could not load \'plugins/GamenixText.jar\' in folder \'plugins\'
                                            [number:protected] => 11
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.InvalidDescriptionException: main is not defined
                                            [number:protected] => 12
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.PluginDescriptionFile.loadMap(PluginDescriptionFile.java:917) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 13
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.PluginDescriptionFile.&lt;init&gt;(PluginDescriptionFile.java:232) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 14
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.getPluginDescription(JavaPluginLoader.java:159) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 15
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:133) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 16
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_8_R3.CraftServer.loadPlugins(CraftServer.java:292) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 17
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:198) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 18
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 19
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 20
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.NullPointerException
                                            [number:protected] => 21
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.PluginDescriptionFile.loadMap(PluginDescriptionFile.java:912) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 22
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	... 7 more
                                            [number:protected] => 23
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));
    }
}