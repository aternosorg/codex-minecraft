<?php

class CraftbukkitPluginEnablingTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/craftbukkit-plugin-enabling.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\OldCraftBukkitLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668799
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668799
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Starting Minecraft server on *:10719
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668799
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] This server is running CraftBukkit version git-Bukkit-1.1-R6-b1988jnks (MC: 1.1) (Implementing API version 1.1-R6)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] [ItemNBTAPI] Loading ItemNBTAPI v1.1
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] [Admin Chat] Loading Admin Chat v1.0
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing level "world"
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Default game type: 0
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing start region for level 0 (Seed: 2360843)
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:21 [INFO] Preparing spawn area: 65%
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668801
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:21 [INFO]
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing start region for level 1 (Seed: 2360843)
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668802
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:22 [INFO]
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing spawn area: 60%
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668802
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:22 [INFO]
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] [ItemNBTAPI] Enabling ItemNBTAPI v1.1
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [SEVERE] Error occurred while enabling ItemNBTAPI v1.1 (Is it up to date?)
                                    [number:protected] => 14
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NoSuchMethodError: org.bukkit.scheduler.BukkitScheduler.runTaskTimerAsynchronously(Lorg/bukkit/plugin/Plugin;Ljava/lang/Runnable;JJ)Lorg/bukkit/scheduler/BukkitTask;
                                    [number:protected] => 15
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.mcstats.Metrics.start(Metrics.java:205)
                                    [number:protected] => 16
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.initmcstats(Itemnbtapi.java:83)
                                    [number:protected] => 17
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.onEnable(Itemnbtapi.java:16)
                                    [number:protected] => 18
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:215)
                                    [number:protected] => 19
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:336)
                                    [number:protected] => 20
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:363)
                                    [number:protected] => 21
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.loadPlugin(CraftServer.java:249)
                                    [number:protected] => 22
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.enablePlugins(CraftServer.java:231)
                                    [number:protected] => 23
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.t(MinecraftServer.java:356)
                                    [number:protected] => 24
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.a(MinecraftServer.java:343)
                                    [number:protected] => 25
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.init(MinecraftServer.java:174)
                                    [number:protected] => 26
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:407)
                                    [number:protected] => 27
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.ThreadServerApplication.run(SourceFile:465)
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => SEVERE
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [SEVERE]
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] [Admin Chat] Enabling Admin Chat v1.0
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Admin Chat v1.0 is now enabled!
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Done (2.709s)! For help, type "help" or "?"
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Starting GS4 status listener
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] \'spawn-protection\' in server.properties has been moved to \'settings.spawn-radius\' in bukkit.yml. I will move your config for you.
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Query running on **.**.**.**:10719
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

        )

    [iterator:protected] => 21
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
2019-02-08 23:33:19 [INFO] Loading properties
2019-02-08 23:33:19 [INFO] Starting Minecraft server on *:10719
2019-02-08 23:33:20 [INFO] This server is running CraftBukkit version git-Bukkit-1.1-R6-b1988jnks (MC: 1.1) (Implementing API version 1.1-R6)
2019-02-08 23:33:20 [INFO] [ItemNBTAPI] Loading ItemNBTAPI v1.1
2019-02-08 23:33:20 [INFO] [Admin Chat] Loading Admin Chat v1.0
2019-02-08 23:33:20 [INFO] Preparing level "world"
2019-02-08 23:33:20 [INFO] Default game type: 0
2019-02-08 23:33:20 [INFO] Preparing start region for level 0 (Seed: 2360843)
2019-02-08 23:33:21 [INFO] Preparing spawn area: 65%
2019-02-08 23:33:22 [INFO] Preparing start region for level 1 (Seed: 2360843)
2019-02-08 23:33:22 [INFO] Preparing spawn area: 60%
2019-02-08 23:33:23 [INFO] [ItemNBTAPI] Enabling ItemNBTAPI v1.1
2019-02-08 23:33:23 [SEVERE] Error occurred while enabling ItemNBTAPI v1.1 (Is it up to date?)
java.lang.NoSuchMethodError: org.bukkit.scheduler.BukkitScheduler.runTaskTimerAsynchronously(Lorg/bukkit/plugin/Plugin;Ljava/lang/Runnable;JJ)Lorg/bukkit/scheduler/BukkitTask;
	at org.mcstats.Metrics.start(Metrics.java:205)
	at de.tr7zw.itemnbtapi.Itemnbtapi.initmcstats(Itemnbtapi.java:83)
	at de.tr7zw.itemnbtapi.Itemnbtapi.onEnable(Itemnbtapi.java:16)
	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:215)
	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:336)
	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:363)
	at org.bukkit.craftbukkit.CraftServer.loadPlugin(CraftServer.java:249)
	at org.bukkit.craftbukkit.CraftServer.enablePlugins(CraftServer.java:231)
	at net.minecraft.server.MinecraftServer.t(MinecraftServer.java:356)
	at net.minecraft.server.MinecraftServer.a(MinecraftServer.java:343)
	at net.minecraft.server.MinecraftServer.init(MinecraftServer.java:174)
	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:407)
	at net.minecraft.server.ThreadServerApplication.run(SourceFile:465)
2019-02-08 23:33:23 [INFO] [Admin Chat] Enabling Admin Chat v1.0
2019-02-08 23:33:23 [INFO] Admin Chat v1.0 is now enabled!
2019-02-08 23:33:23 [INFO] Server permissions file permissions.yml is empty, ignoring it
2019-02-08 23:33:23 [INFO] Done (2.709s)! For help, type "help" or "?"
2019-02-08 23:33:23 [INFO] Starting GS4 status listener
2019-02-08 23:33:23 [INFO] \'spawn-protection\' in server.properties has been moved to \'settings.spawn-radius\' in bukkit.yml. I will move your config for you.
2019-02-08 23:33:23 [INFO] Query running on **.**.**.**:10719
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
                                            [text:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1549668799
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginEnablingProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [SEVERE] Error occurred while enabling ItemNBTAPI v1.1 (Is it up to date?)
                                            [number:protected] => 14
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NoSuchMethodError: org.bukkit.scheduler.BukkitScheduler.runTaskTimerAsynchronously(Lorg/bukkit/plugin/Plugin;Ljava/lang/Runnable;JJ)Lorg/bukkit/scheduler/BukkitTask;
                                            [number:protected] => 15
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.mcstats.Metrics.start(Metrics.java:205)
                                            [number:protected] => 16
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.initmcstats(Itemnbtapi.java:83)
                                            [number:protected] => 17
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.onEnable(Itemnbtapi.java:16)
                                            [number:protected] => 18
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:215)
                                            [number:protected] => 19
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:336)
                                            [number:protected] => 20
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:363)
                                            [number:protected] => 21
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.loadPlugin(CraftServer.java:249)
                                            [number:protected] => 22
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.enablePlugins(CraftServer.java:231)
                                            [number:protected] => 23
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.t(MinecraftServer.java:356)
                                            [number:protected] => 24
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.a(MinecraftServer.java:343)
                                            [number:protected] => 25
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.init(MinecraftServer.java:174)
                                            [number:protected] => 26
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:407)
                                            [number:protected] => 27
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.ThreadServerApplication.run(SourceFile:465)
                                            [number:protected] => 28
                                        )

                                )

                            [level:protected] => SEVERE
                            [time:protected] => 1549668803
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-08 23:33:23 [SEVERE]
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => ItemNBTAPI
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => ItemNBTAPI
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => ItemNBTAPI
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.1", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'ItemNBTAPI' could not be enabled.", $analysis[1]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'ItemNBTAPI'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Remove the plugin 'ItemNBTAPI'.", $analysis[1][1]->getMessage());

    }
}