<?php

class PaperPluginDependency1182Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/paper-plugin-dependency-1-18-2.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PaperLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:29:59] [ServerMain/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:29:59] [ServerMain/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:08] [Worker-Main-1/INFO]: Loaded 7 recipes
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:08] [Worker-Main-1/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:12] [Server thread/INFO]: Starting minecraft server version 1.18.2
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:12] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:12] [Server thread/INFO]: Loading properties
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:12] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:12] [Server thread/INFO]: This server is running Paper version git-Paper-333 (MC: 1.18.2) (Implementing API version 1.18.2-R0.1-SNAPSHOT) (Git: 9fd870d)
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:12] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:12] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:12] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:12] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:12] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Starting Minecraft server on *:32699
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Paper: Using libdeflate (Linux x86_64) compression from Velocity.
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Paper: Using OpenSSL 1.1.x (Linux x86_64) cipher from Velocity.
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/ERROR]: Could not load \'plugins/ViaBackwards-4.2.1.jar\' in folder \'plugins\'
                                    [number:protected] => 14
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.UnknownDependencyException: Unknown/missing dependency plugins: [ViaVersion]. Please download and install these plugins to run \'ViaBackwards\'.
                                    [number:protected] => 15
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:291) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                    [number:protected] => 16
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_18_R2.CraftServer.loadPlugins(CraftServer.java:418) ~[paper-1.18.2.jar:git-Paper-333]
                                    [number:protected] => 17
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.initServer(DedicatedServer.java:288) ~[paper-1.18.2.jar:git-Paper-333]
                                    [number:protected] => 18
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.runServer(MinecraftServer.java:1163) ~[paper-1.18.2.jar:git-Paper-333]
                                    [number:protected] => 19
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.lambda$spin$0(MinecraftServer.java:315) ~[paper-1.18.2.jar:git-Paper-333]
                                    [number:protected] => 20
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:833) ~[?:?]
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/ERROR]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:13] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:13] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:24] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:24] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:26] [Worker-Main-1/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:26] [Worker-Main-1/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:26] [Worker-Main-1/INFO]: Preparing spawn area: 99%
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:26] [Worker-Main-1/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Server thread/INFO]: Time elapsed: 937 ms
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Query Listener #1/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Server thread/INFO]: Thread Query Listener started
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Server thread/INFO]: JMX monitoring enabled
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Server thread/INFO]: Running delayed init tasks
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Server thread/INFO]: Done (24.549s)! For help, type "help"
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [08:30:36] [Server thread/INFO]: Timings Reset
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [08:30:36] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 27
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [08:29:59] [ServerMain/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[08:30:08] [Worker-Main-1/INFO]: Loaded 7 recipes
[08:30:12] [Server thread/INFO]: Starting minecraft server version 1.18.2
[08:30:12] [Server thread/INFO]: Loading properties
[08:30:12] [Server thread/INFO]: This server is running Paper version git-Paper-333 (MC: 1.18.2) (Implementing API version 1.18.2-R0.1-SNAPSHOT) (Git: 9fd870d)
[08:30:12] [Server thread/INFO]: Server Ping Player Sample Count: 12
[08:30:12] [Server thread/INFO]: Using 4 threads for Netty based IO
[08:30:13] [Server thread/INFO]: Default game type: SURVIVAL
[08:30:13] [Server thread/INFO]: Generating keypair
[08:30:13] [Server thread/INFO]: Starting Minecraft server on *:32699
[08:30:13] [Server thread/INFO]: Using epoll channel type
[08:30:13] [Server thread/INFO]: Paper: Using libdeflate (Linux x86_64) compression from Velocity.
[08:30:13] [Server thread/INFO]: Paper: Using OpenSSL 1.1.x (Linux x86_64) cipher from Velocity.
[08:30:13] [Server thread/ERROR]: Could not load \'plugins/ViaBackwards-4.2.1.jar\' in folder \'plugins\'
org.bukkit.plugin.UnknownDependencyException: Unknown/missing dependency plugins: [ViaVersion]. Please download and install these plugins to run \'ViaBackwards\'.
	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:291) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
	at org.bukkit.craftbukkit.v1_18_R2.CraftServer.loadPlugins(CraftServer.java:418) ~[paper-1.18.2.jar:git-Paper-333]
	at net.minecraft.server.dedicated.DedicatedServer.initServer(DedicatedServer.java:288) ~[paper-1.18.2.jar:git-Paper-333]
	at net.minecraft.server.MinecraftServer.runServer(MinecraftServer.java:1163) ~[paper-1.18.2.jar:git-Paper-333]
	at net.minecraft.server.MinecraftServer.lambda$spin$0(MinecraftServer.java:315) ~[paper-1.18.2.jar:git-Paper-333]
	at java.lang.Thread.run(Thread.java:833) ~[?:?]
[08:30:13] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[08:30:13] [Server thread/INFO]: Preparing level "world"
[08:30:24] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[08:30:26] [Worker-Main-1/INFO]: Preparing spawn area: 0%
[08:30:26] [Worker-Main-1/INFO]: Preparing spawn area: 99%
[08:30:36] [Server thread/INFO]: Time elapsed: 937 ms
[08:30:36] [Server thread/INFO]: Starting GS4 status listener
[08:30:36] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
[08:30:36] [Server thread/INFO]: Thread Query Listener started
[08:30:36] [Server thread/INFO]: JMX monitoring enabled
[08:30:36] [Server thread/INFO]: Running delayed init tasks
[08:30:36] [Server thread/INFO]: Done (24.549s)! For help, type "help"
[08:30:36] [Server thread/INFO]: Timings Reset
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
                                            [text:protected] => [08:30:12] [Server thread/INFO]: Starting minecraft server version 1.18.2
                                            [number:protected] => 3
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [08:30:12] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependenciesProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [08:30:13] [Server thread/ERROR]: Could not load \'plugins/ViaBackwards-4.2.1.jar\' in folder \'plugins\'
                                            [number:protected] => 14
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.UnknownDependencyException: Unknown/missing dependency plugins: [ViaVersion]. Please download and install these plugins to run \'ViaBackwards\'.
                                            [number:protected] => 15
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:291) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                            [number:protected] => 16
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_18_R2.CraftServer.loadPlugins(CraftServer.java:418) ~[paper-1.18.2.jar:git-Paper-333]
                                            [number:protected] => 17
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.initServer(DedicatedServer.java:288) ~[paper-1.18.2.jar:git-Paper-333]
                                            [number:protected] => 18
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.runServer(MinecraftServer.java:1163) ~[paper-1.18.2.jar:git-Paper-333]
                                            [number:protected] => 19
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.lambda$spin$0(MinecraftServer.java:315) ~[paper-1.18.2.jar:git-Paper-333]
                                            [number:protected] => 20
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:833) ~[?:?]
                                            [number:protected] => 21
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [08:30:13] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution Object
                                (
                                    [pluginName:protected] => ViaVersion
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/ViaBackwards-4.2.1.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [pluginPath:protected] => plugins/ViaBackwards-4.2.1.jar
                    [pluginName:protected] => ViaBackwards-4.2.1
                    [dependencyPluginNames:protected] => Array
                        (
                            [0] => ViaVersion
                        )

                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'ViaBackwards-4.2.1' is missing the required plugin 'ViaVersion'.", $analysis[1]->getMessage());
        $this->assertEquals("Install the plugin 'ViaVersion'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file 'plugins/ViaBackwards-4.2.1.jar'.", $analysis[1][1]->getMessage());

    }
}