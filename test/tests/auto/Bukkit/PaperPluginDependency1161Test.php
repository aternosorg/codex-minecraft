<?php

class PaperPluginDependency1161Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/paper-plugin-dependency-1161.log");
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
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:12] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', name=\'PROD\'
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:12] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:16] [main/INFO]: Reloading ResourceManager: Default, bukkit
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:16] [main/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:18] [Worker-Main-4/INFO]: Loaded 7 recipes
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:18] [Worker-Main-4/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:22] [Server thread/INFO]: Starting minecraft server version 1.16.1
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:22] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:22] [Server thread/INFO]: Loading properties
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:22] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:23] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-9639cf7-4b9bc9d (MC: 1.16.1) (Implementing API version 1.16.1-R0.1-SNAPSHOT)
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:23] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:25] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:25] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:25] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:25] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:25] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:25] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:25] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:25] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:25] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:25] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:26] [Server thread/INFO]: Starting Minecraft server on *:10341
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:26] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:26] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:26] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:31] [Server thread/WARN]: Initializing Legacy Material Support. Unless you have legacy plugins and/or data this is a bug!
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:31] [Server thread/WARN]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/WARN]: Legacy plugin SetHome v1.4 does not specify an api-version.
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/WARN]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/WARN]: Legacy plugin GroupManagerPex v1.1.0 does not specify an api-version.
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/WARN]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/ERROR]: Could not load \'plugins/LuckPermsChat-2.0.2.jar\' in folder \'plugins\'
                                    [number:protected] => 17
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.UnknownDependencyException: Unknown dependency LuckPerms. Please download and install LuckPerms to run this plugin.
                                    [number:protected] => 18
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:269) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                    [number:protected] => 19
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_16_R1.CraftServer.loadPlugins(CraftServer.java:382) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                    [number:protected] => 20
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_16_R1.DedicatedServer.init(DedicatedServer.java:186) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                    [number:protected] => 21
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_16_R1.MinecraftServer.v(MinecraftServer.java:810) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                    [number:protected] => 22
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_16_R1.MinecraftServer.lambda$0(MinecraftServer.java:164) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                    [number:protected] => 23
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/ERROR]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/WARN]: Legacy plugin GroupManager v3.3 does not specify an api-version.
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/WARN]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/WARN]: Legacy plugin EasySetSpawn v3.3 does not specify an api-version.
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/WARN]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/WARN]: Legacy plugin AdminGUI v1.0 does not specify an api-version.
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/WARN]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/WARN]: Legacy plugin SetHomes v1.2.7 does not specify an api-version.
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/WARN]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:48] [Server thread/WARN]: Legacy plugin AddLight v4.3.2 does not specify an api-version.
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:48] [Server thread/WARN]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [SimpleTpa] Loading SimpleTpa v3.9
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [SetHome] Loading SetHome v1.4
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [GroupManagerPex] Loading GroupManagerPex v1.1.0
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [GroupManager] Loading GroupManager v3.3
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [Admin_Utils] Loading Admin_Utils v2.4
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [EasySetSpawn] Loading EasySetSpawn v3.3
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [AdminGUI] Loading AdminGUI v1.0
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [Vault] Loading Vault v1.7.3-b131
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [SetHomes] Loading SetHomes v1.2.7
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:59:49] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v7.2.0-beta-02+d10d7d6
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:59:49] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 32
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [09:59:12] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', name=\'PROD\'
[09:59:16] [main/INFO]: Reloading ResourceManager: Default, bukkit
[09:59:18] [Worker-Main-4/INFO]: Loaded 7 recipes
[09:59:22] [Server thread/INFO]: Starting minecraft server version 1.16.1
[09:59:22] [Server thread/INFO]: Loading properties
[09:59:23] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-9639cf7-4b9bc9d (MC: 1.16.1) (Implementing API version 1.16.1-R0.1-SNAPSHOT)
[09:59:25] [Server thread/INFO]: Server Ping Player Sample Count: 12
[09:59:25] [Server thread/INFO]: Using 4 threads for Netty based IO
[09:59:25] [Server thread/INFO]: Debug logging is disabled
[09:59:25] [Server thread/INFO]: Default game type: SURVIVAL
[09:59:25] [Server thread/INFO]: Generating keypair
[09:59:26] [Server thread/INFO]: Starting Minecraft server on *:10341
[09:59:26] [Server thread/INFO]: Using epoll channel type
[09:59:31] [Server thread/WARN]: Initializing Legacy Material Support. Unless you have legacy plugins and/or data this is a bug!
[09:59:48] [Server thread/WARN]: Legacy plugin SetHome v1.4 does not specify an api-version.
[09:59:48] [Server thread/WARN]: Legacy plugin GroupManagerPex v1.1.0 does not specify an api-version.
[09:59:48] [Server thread/ERROR]: Could not load \'plugins/LuckPermsChat-2.0.2.jar\' in folder \'plugins\'
org.bukkit.plugin.UnknownDependencyException: Unknown dependency LuckPerms. Please download and install LuckPerms to run this plugin.
at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:269) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
at org.bukkit.craftbukkit.v1_16_R1.CraftServer.loadPlugins(CraftServer.java:382) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
at net.minecraft.server.v1_16_R1.DedicatedServer.init(DedicatedServer.java:186) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
at net.minecraft.server.v1_16_R1.MinecraftServer.v(MinecraftServer.java:810) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
at net.minecraft.server.v1_16_R1.MinecraftServer.lambda$0(MinecraftServer.java:164) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
[09:59:48] [Server thread/WARN]: Legacy plugin GroupManager v3.3 does not specify an api-version.
[09:59:48] [Server thread/WARN]: Legacy plugin EasySetSpawn v3.3 does not specify an api-version.
[09:59:48] [Server thread/WARN]: Legacy plugin AdminGUI v1.0 does not specify an api-version.
[09:59:48] [Server thread/WARN]: Legacy plugin SetHomes v1.2.7 does not specify an api-version.
[09:59:48] [Server thread/WARN]: Legacy plugin AddLight v4.3.2 does not specify an api-version.
[09:59:49] [Server thread/INFO]: [SimpleTpa] Loading SimpleTpa v3.9
[09:59:49] [Server thread/INFO]: [SetHome] Loading SetHome v1.4
[09:59:49] [Server thread/INFO]: [GroupManagerPex] Loading GroupManagerPex v1.1.0
[09:59:49] [Server thread/INFO]: [GroupManager] Loading GroupManager v3.3
[09:59:49] [Server thread/INFO]: [Admin_Utils] Loading Admin_Utils v2.4
[09:59:49] [Server thread/INFO]: [EasySetSpawn] Loading EasySetSpawn v3.3
[09:59:49] [Server thread/INFO]: [AdminGUI] Loading AdminGUI v1.0
[09:59:49] [Server thread/INFO]: [Vault] Loading Vault v1.7.3-b131
[09:59:49] [Server thread/INFO]: [SetHomes] Loading SetHomes v1.2.7
[09:59:49] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v7.2.0-beta-02+d10d7d6
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
                                            [text:protected] => [09:59:22] [Server thread/INFO]: Starting minecraft server version 1.16.1
                                            [number:protected] => 4
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [09:59:22] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.16.1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [09:59:48] [Server thread/ERROR]: Could not load \'plugins/LuckPermsChat-2.0.2.jar\' in folder \'plugins\'
                                            [number:protected] => 17
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.UnknownDependencyException: Unknown dependency LuckPerms. Please download and install LuckPerms to run this plugin.
                                            [number:protected] => 18
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:269) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                            [number:protected] => 19
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_16_R1.CraftServer.loadPlugins(CraftServer.java:382) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                            [number:protected] => 20
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_16_R1.DedicatedServer.init(DedicatedServer.java:186) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                            [number:protected] => 21
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_16_R1.MinecraftServer.v(MinecraftServer.java:810) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                            [number:protected] => 22
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_16_R1.MinecraftServer.lambda$0(MinecraftServer.java:164) ~[minecraft_server.jar:git-Spigot-9639cf7-4b9bc9d]
                                            [number:protected] => 23
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [09:59:48] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution Object
                                (
                                    [pluginName:protected] => LuckPerms
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/LuckPermsChat-2.0.2.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [pluginPath:protected] => plugins/LuckPermsChat-2.0.2.jar
                    [pluginName:protected] => LuckPermsChat-2.0.2
                    [dependencyPluginName:protected] => LuckPerms
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.16.1", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'LuckPermsChat-2.0.2' is missing the required the plugin 'LuckPerms'.", $analysis[1]->getMessage());
        $this->assertEquals("Install the plugin 'LuckPerms'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file 'plugins/LuckPermsChat-2.0.2.jar'.", $analysis[1][1]->getMessage());

    }
}