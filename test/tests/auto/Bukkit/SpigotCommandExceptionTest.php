<?php

class SpigotCommandExceptionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/spigot-command-exception.log");
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
                                    [text:protected] => [11:47:43] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:47:43] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [10:25:31] [Server thread/INFO]: Player issued server command: /bm enable
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [10:25:31] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [10:25:31] [Server thread/ERROR]: null
                                    [number:protected] => 6
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.command.CommandException: Cannot execute command \'bm\' in plugin BuildMoney v3.5 - plugin is disabled.
                                    [number:protected] => 7
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.command.PluginCommand.execute(PluginCommand.java:36) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 8
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.command.SimpleCommandMap.dispatch(SimpleCommandMap.java:141) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 9
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R1.CraftServer.dispatchCommand(CraftServer.java:694) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 10
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerConnection.handleCommand(PlayerConnection.java:1634) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 11
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerConnection.a(PlayerConnection.java:1469) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 12
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PacketPlayInChat.a(PacketPlayInChat.java:45) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 13
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PacketPlayInChat.a(PacketPlayInChat.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 14
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerConnectionUtils.a(SourceFile:10) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 15
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.Executors$RunnableAdapter.call(Executors.java:511) [?:1.8.0_144]
                                    [number:protected] => 16
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.FutureTask.run(FutureTask.java:266) [?:1.8.0_144]
                                    [number:protected] => 17
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.SystemUtils.a(SourceFile:198) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 18
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:884) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 19
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 20
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 21
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 22
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [10:25:31] [Server thread/ERROR]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [10:25:55] [Server thread/WARN]: Unexpected exception while parsing console command "bm enable"
                                    [number:protected] => 24
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.command.CommandException: Cannot execute command \'bm\' in plugin BuildMoney v3.5 - plugin is disabled.
                                    [number:protected] => 25
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.command.PluginCommand.execute(PluginCommand.java:36) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 26
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.command.SimpleCommandMap.dispatch(SimpleCommandMap.java:141) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 27
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R1.CraftServer.dispatchCommand(CraftServer.java:694) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 28
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R1.CraftServer.dispatchServerCommand(CraftServer.java:679) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 29
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.aW(DedicatedServer.java:453) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 30
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:412) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 31
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 32
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 33
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [10:25:55] [Server thread/WARN]:
                )

        )

    [iterator:protected] => 7
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [11:47:42] [Server thread/INFO]: Starting minecraft server version 1.8.8
[11:47:42] [Server thread/INFO]: Loading properties
[11:47:43] [Server thread/INFO]: Default game type: CREATIVE
[11:47:43] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
[10:25:31] [Server thread/INFO]: Player issued server command: /bm enable
[10:25:31] [Server thread/ERROR]: null
org.bukkit.command.CommandException: Cannot execute command \'bm\' in plugin BuildMoney v3.5 - plugin is disabled.
at org.bukkit.command.PluginCommand.execute(PluginCommand.java:36) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at org.bukkit.command.SimpleCommandMap.dispatch(SimpleCommandMap.java:141) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at org.bukkit.craftbukkit.v1_13_R1.CraftServer.dispatchCommand(CraftServer.java:694) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerConnection.handleCommand(PlayerConnection.java:1634) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerConnection.a(PlayerConnection.java:1469) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PacketPlayInChat.a(PacketPlayInChat.java:45) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PacketPlayInChat.a(PacketPlayInChat.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerConnectionUtils.a(SourceFile:10) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.Executors$RunnableAdapter.call(Executors.java:511) [?:1.8.0_144]
at java.util.concurrent.FutureTask.run(FutureTask.java:266) [?:1.8.0_144]
at net.minecraft.server.v1_13_R1.SystemUtils.a(SourceFile:198) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:884) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[10:25:55] [Server thread/WARN]: Unexpected exception while parsing console command "bm enable"
org.bukkit.command.CommandException: Cannot execute command \'bm\' in plugin BuildMoney v3.5 - plugin is disabled.
at org.bukkit.command.PluginCommand.execute(PluginCommand.java:36) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at org.bukkit.command.SimpleCommandMap.dispatch(SimpleCommandMap.java:141) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at org.bukkit.craftbukkit.v1_13_R1.CraftServer.dispatchCommand(CraftServer.java:694) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at org.bukkit.craftbukkit.v1_13_R1.CraftServer.dispatchServerCommand(CraftServer.java:679) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.DedicatedServer.aW(DedicatedServer.java:453) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:412) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
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

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginCommandExceptionProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [10:25:31] [Server thread/ERROR]: null
                                            [number:protected] => 6
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.command.CommandException: Cannot execute command \'bm\' in plugin BuildMoney v3.5 - plugin is disabled.
                                            [number:protected] => 7
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.command.PluginCommand.execute(PluginCommand.java:36) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 8
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.command.SimpleCommandMap.dispatch(SimpleCommandMap.java:141) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 9
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_13_R1.CraftServer.dispatchCommand(CraftServer.java:694) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 10
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerConnection.handleCommand(PlayerConnection.java:1634) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 11
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerConnection.a(PlayerConnection.java:1469) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 12
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PacketPlayInChat.a(PacketPlayInChat.java:45) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 13
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PacketPlayInChat.a(PacketPlayInChat.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 14
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerConnectionUtils.a(SourceFile:10) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 15
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.concurrent.Executors$RunnableAdapter.call(Executors.java:511) [?:1.8.0_144]
                                            [number:protected] => 16
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.concurrent.FutureTask.run(FutureTask.java:266) [?:1.8.0_144]
                                            [number:protected] => 17
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.SystemUtils.a(SourceFile:198) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 18
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:884) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 19
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 20
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 21
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 22
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 23
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [10:25:31] [Server thread/ERROR]:
                        )

                    [counter:protected] => 2
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => BuildMoney
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => BuildMoney
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => BuildMoney
                    [command:protected] => bm
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.8.8", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'BuildMoney' cannot execute the command '/bm'.", $analysis[1]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'BuildMoney'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Remove the plugin 'BuildMoney'.", $analysis[1][1]->getMessage());

    }
}