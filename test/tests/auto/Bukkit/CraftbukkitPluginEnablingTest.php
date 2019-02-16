<?php

class CraftbukkitPluginEnablingTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/craftbukkit-plugin-enabling.log");
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
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
                                    [number:protected] => 1
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Loading properties
                                    [number:protected] => 2
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Starting Minecraft server on *:10719
                                    [number:protected] => 3
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] This server is running CraftBukkit version git-Bukkit-1.1-R6-b1988jnks (MC: 1.1) (Implementing API version 1.1-R6)
                                    [number:protected] => 4
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] [ItemNBTAPI] Loading ItemNBTAPI v1.1
                                    [number:protected] => 5
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] [Admin Chat] Loading Admin Chat v1.0
                                    [number:protected] => 6
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing level "world"
                                    [number:protected] => 7
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Default game type: 0
                                    [number:protected] => 8
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing start region for level 0 (Seed: 2360843)
                                    [number:protected] => 9
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:21 [INFO] Preparing spawn area: 65%
                                    [number:protected] => 10
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing start region for level 1 (Seed: 2360843)
                                    [number:protected] => 11
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing spawn area: 60%
                                    [number:protected] => 12
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] [ItemNBTAPI] Enabling ItemNBTAPI v1.1
                                    [number:protected] => 13
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [SEVERE] Error occurred while enabling ItemNBTAPI v1.1 (Is it up to date?)
                                    [number:protected] => 14
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NoSuchMethodError: org.bukkit.scheduler.BukkitScheduler.runTaskTimerAsynchronously(Lorg/bukkit/plugin/Plugin;Ljava/lang/Runnable;JJ)Lorg/bukkit/scheduler/BukkitTask;
                                    [number:protected] => 15
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.mcstats.Metrics.start(Metrics.java:205)
                                    [number:protected] => 16
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.initmcstats(Itemnbtapi.java:83)
                                    [number:protected] => 17
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.onEnable(Itemnbtapi.java:16)
                                    [number:protected] => 18
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:215)
                                    [number:protected] => 19
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:336)
                                    [number:protected] => 20
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:363)
                                    [number:protected] => 21
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.loadPlugin(CraftServer.java:249)
                                    [number:protected] => 22
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.enablePlugins(CraftServer.java:231)
                                    [number:protected] => 23
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.t(MinecraftServer.java:356)
                                    [number:protected] => 24
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.a(MinecraftServer.java:343)
                                    [number:protected] => 25
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.init(MinecraftServer.java:174)
                                    [number:protected] => 26
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:407)
                                    [number:protected] => 27
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.ThreadServerApplication.run(SourceFile:465)
                                    [number:protected] => 28
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] [Admin Chat] Enabling Admin Chat v1.0
                                    [number:protected] => 29
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Admin Chat v1.0 is now enabled!
                                    [number:protected] => 30
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 31
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Done (2.709s)! For help, type "help" or "?"
                                    [number:protected] => 32
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Starting GS4 status listener
                                    [number:protected] => 33
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] \'spawn-protection\' in server.properties has been moved to \'settings.spawn-radius\' in bukkit.yml. I will move your config for you.
                                    [number:protected] => 34
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Query running on **.**.**.**:10719
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => 
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 1
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
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginEnablingProblem Object
                (
                    [pluginName:protected] => ItemNBTAPI
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
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => 
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
                                            [number:protected] => 1
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:19 [INFO] Loading properties
                                            [number:protected] => 2
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:19 [INFO] Starting Minecraft server on *:10719
                                            [number:protected] => 3
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:20 [INFO] This server is running CraftBukkit version git-Bukkit-1.1-R6-b1988jnks (MC: 1.1) (Implementing API version 1.1-R6)
                                            [number:protected] => 4
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:20 [INFO] [ItemNBTAPI] Loading ItemNBTAPI v1.1
                                            [number:protected] => 5
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:20 [INFO] [Admin Chat] Loading Admin Chat v1.0
                                            [number:protected] => 6
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing level "world"
                                            [number:protected] => 7
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:20 [INFO] Default game type: 0
                                            [number:protected] => 8
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing start region for level 0 (Seed: 2360843)
                                            [number:protected] => 9
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:21 [INFO] Preparing spawn area: 65%
                                            [number:protected] => 10
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing start region for level 1 (Seed: 2360843)
                                            [number:protected] => 11
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing spawn area: 60%
                                            [number:protected] => 12
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] [ItemNBTAPI] Enabling ItemNBTAPI v1.1
                                            [number:protected] => 13
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [SEVERE] Error occurred while enabling ItemNBTAPI v1.1 (Is it up to date?)
                                            [number:protected] => 14
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NoSuchMethodError: org.bukkit.scheduler.BukkitScheduler.runTaskTimerAsynchronously(Lorg/bukkit/plugin/Plugin;Ljava/lang/Runnable;JJ)Lorg/bukkit/scheduler/BukkitTask;
                                            [number:protected] => 15
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.mcstats.Metrics.start(Metrics.java:205)
                                            [number:protected] => 16
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.initmcstats(Itemnbtapi.java:83)
                                            [number:protected] => 17
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at de.tr7zw.itemnbtapi.Itemnbtapi.onEnable(Itemnbtapi.java:16)
                                            [number:protected] => 18
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:215)
                                            [number:protected] => 19
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:336)
                                            [number:protected] => 20
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:363)
                                            [number:protected] => 21
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.loadPlugin(CraftServer.java:249)
                                            [number:protected] => 22
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.CraftServer.enablePlugins(CraftServer.java:231)
                                            [number:protected] => 23
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.t(MinecraftServer.java:356)
                                            [number:protected] => 24
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.a(MinecraftServer.java:343)
                                            [number:protected] => 25
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.init(MinecraftServer.java:174)
                                            [number:protected] => 26
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:407)
                                            [number:protected] => 27
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.ThreadServerApplication.run(SourceFile:465)
                                            [number:protected] => 28
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] [Admin Chat] Enabling Admin Chat v1.0
                                            [number:protected] => 29
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] Admin Chat v1.0 is now enabled!
                                            [number:protected] => 30
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] Server permissions file permissions.yml is empty, ignoring it
                                            [number:protected] => 31
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] Done (2.709s)! For help, type "help" or "?"
                                            [number:protected] => 32
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] Starting GS4 status listener
                                            [number:protected] => 33
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] \'spawn-protection\' in server.properties has been moved to \'settings.spawn-radius\' in bukkit.yml. I will move your config for you.
                                            [number:protected] => 34
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-02-08 23:33:23 [INFO] Query running on **.**.**.**:10719
                                            [number:protected] => 35
                                        )

                                )

                            [level:protected] => 
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