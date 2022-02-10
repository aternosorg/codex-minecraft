<?php

class Forge1165Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/crash-reports/forge-1165.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\CrashReport\ForgeCrashReportLog Object
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
                                    [text:protected] => ---- Minecraft Crash Report ----
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => // But it works on my machine.
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => COMMENT
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Time:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Time: 2/2/22 12:16 AM
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Description:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Description: Ticking entity
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.RuntimeException: Attempted to load class net/minecraft/server/integrated/IntegratedServer for invalid dist DEDICATED_SERVER
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClassWithFlags(RuntimeDistCleaner.java:71) ~[forge.jar:36.2] {}
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:85) ~[modlauncher-8.0.9.jar:?] {}
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:120) ~[modlauncher-8.0.9.jar:?] {}
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.TransformingClassLoader$DelegatedClassLoader.findClass(TransformingClassLoader.java:265) ~[modlauncher-8.0.9.jar:?] {}
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:136) ~[modlauncher-8.0.9.jar:?] {re:classloading}
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:98) ~[modlauncher-8.0.9.jar:?] {re:classloading}
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_292] {}
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.silentchaos512.scalinghealth.event.DifficultyEvents.onLivingUpdate(DifficultyEvents.java:81) ~[scalinghealth:4.1.3+9] {re:classloading}
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.ASMEventHandler_98_DifficultyEvents_onLivingUpdate_LivingUpdateEvent.invoke(.dynamic) ~[?:?] {}
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85) ~[eventbus-4.0.0.jar:?] {}
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:302) ~[eventbus-4.0.0.jar:?] {}
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:283) ~[eventbus-4.0.0.jar:?] {}
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.common.ForgeHooks.onLivingUpdate(ForgeHooks.java:340) ~[forge:?] {re:classloading}
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.LivingEntity.func_70071_h_(LivingEntity.java:2112) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:mixin:APP:cgm.mixins.json:common.LivingEntityMixin,pl:mixin:A,pl:runtimedistcleaner:A}
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.MobEntity.func_70071_h_(MobEntity.java:300) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.monster.ZombieEntity.func_70071_h_(ZombieEntity.java:205) ~[?:?] {re:classloading}
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.server.ServerWorld.func_217479_a(ServerWorld.java:611) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_217390_a(World.java:554) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.server.ServerWorld.func_72835_b(ServerWorld.java:404) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:851) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:291) ~[?:?] {re:classloading,pl:accesstransformer:B}
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:787) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_240802_v_(MinecraftServer.java:642) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_240783_a_(MinecraftServer.java:232) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_292] {}
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => A detailed walkthrough of the error, its code path and all known details is as follows:
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ---------------------------------------------------------------------------------------
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Head --
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Thread:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Thread: Server thread
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Stacktrace:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClassWithFlags(RuntimeDistCleaner.java:71) ~[forge.jar:36.2] {}
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:85) ~[modlauncher-8.0.9.jar:?] {}
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:120) ~[modlauncher-8.0.9.jar:?] {}
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.TransformingClassLoader$DelegatedClassLoader.findClass(TransformingClassLoader.java:265) ~[modlauncher-8.0.9.jar:?] {}
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:136) ~[modlauncher-8.0.9.jar:?] {re:classloading}
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:98) ~[modlauncher-8.0.9.jar:?] {re:classloading}
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_292] {}
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.silentchaos512.scalinghealth.event.DifficultyEvents.onLivingUpdate(DifficultyEvents.java:81) ~[scalinghealth:4.1.3+9] {re:classloading}
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.ASMEventHandler_98_DifficultyEvents_onLivingUpdate_LivingUpdateEvent.invoke(.dynamic) ~[?:?] {}
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85) ~[eventbus-4.0.0.jar:?] {}
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:302) ~[eventbus-4.0.0.jar:?] {}
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:283) ~[eventbus-4.0.0.jar:?] {}
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.common.ForgeHooks.onLivingUpdate(ForgeHooks.java:340) ~[forge:?] {re:classloading}
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.LivingEntity.func_70071_h_(LivingEntity.java:2112) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:mixin:APP:cgm.mixins.json:common.LivingEntityMixin,pl:mixin:A,pl:runtimedistcleaner:A}
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.MobEntity.func_70071_h_(MobEntity.java:300) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.monster.ZombieEntity.func_70071_h_(ZombieEntity.java:205) ~[?:?] {re:classloading}
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.server.ServerWorld.func_217479_a(ServerWorld.java:611) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Entity being ticked --
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Details:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity Type:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity Type: minecraft:drowned (net.minecraft.entity.monster.DrownedEntity)
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity ID:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity ID: 26
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity Name:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity Name: Drowned
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity\'s Exact location:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Exact location: 78.50, 50.00, 50.50
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity\'s Block location:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Block location: World: (78,50,50), Chunk: (at 14,3,2 in 4,3; contains blocks 64,0,48 to 79,255,63), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,0,0 to 511,255,511)
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity\'s Momentum:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Momentum: 0.00, 0.00, 0.00
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity\'s Passengers:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Passengers: []
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Entity\'s Vehicle:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Vehicle: ~~ERROR~~ NullPointerException: null
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Stacktrace:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_217390_a(World.java:554) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.server.ServerWorld.func_72835_b(ServerWorld.java:404) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Affected level --
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Details:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	All players:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	All players: 0 total; []
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Chunk stats:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Chunk stats: ServerChunkCache: 2025
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level dimension:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level dimension: minecraft:overworld
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level spawn location:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level spawn location: World: (0,66,45), Chunk: (at 0,4,13 in 0,2; contains blocks 0,0,32 to 15,255,47), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,0,0 to 511,255,511)
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level time:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level time: 1 game time, 1 day time
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level name:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level name: world
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level game mode:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level game mode: Game mode: survival (ID 0). Hardcore: false. Cheats: false
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level weather:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level weather: Rain time: 92823 (now: false), thunder time: 162309 (now: false)
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Known server brands:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Known server brands: forge
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level was modded:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level was modded: true
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Level storage version:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level storage version: 0x04ABD - Anvil
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Stacktrace:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:851) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:291) ~[?:?] {re:classloading,pl:accesstransformer:B}
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:787) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_240802_v_(MinecraftServer.java:642) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_240783_a_(MinecraftServer.java:232) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_292] {}
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- System Details --
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => Details:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Minecraft Version:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Minecraft Version: 1.16.5
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Minecraft Version ID:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Minecraft Version ID: 1.16.5
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Operating System:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Operating System: Linux (amd64) version 5.4.0-91-generic
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Java Version:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java Version: 1.8.0_292, Oracle Corporation
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Java VM Version:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode), Oracle Corporation
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Memory:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Memory: 1424844888 bytes (1358 MB) / 2354577408 bytes (2245 MB) up to 2354577408 bytes (2245 MB)
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	CPUs:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	CPUs: 3
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	JVM Flags:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	JVM Flags: 3 total; -XX:MaxMetaspaceSize=200M -Xmx2300M -Xms1150M
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	ModLauncher:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher: 8.0.9+86+master.3cf110c
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	ModLauncher launch target:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher launch target: fmlserver
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	ModLauncher naming:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher naming: srg
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	ModLauncher services:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher services:
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/mixin-0.8.4.jar mixin PLUGINSERVICE
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/eventbus-4.0.0.jar eventbus PLUGINSERVICE
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/forge.jar object_holder_definalize PLUGINSERVICE
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/forge.jar runtime_enum_extender PLUGINSERVICE
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/accesstransformers-3.0.1.jar accesstransformer PLUGINSERVICE
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/forge.jar capability_inject_definalize PLUGINSERVICE
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/forge.jar runtimedistcleaner PLUGINSERVICE
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/mixin-0.8.4.jar mixin TRANSFORMATIONSERVICE
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		/forge.jar fml TRANSFORMATIONSERVICE
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	FML:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	FML: 36.2
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Forge:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Forge: net.minecraftforge:36.2.20
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	FML Language Providers:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	FML Language Providers:
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		javafml@36.2
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		minecraft@1
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Mod List:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Mod List:
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		forge-1.16.5-36.2.20-server.jar                   |Minecraft                     |minecraft                     |1.16.5              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		YungsApi-1.16.4-Forge-6.jar                       |YUNG\'s API                    |yungsapi                      |1.16.4-Forge-6      |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		useful_backpacks-1.16.5-1.12.1.90.jar             |Useful Backpacks              |usefulbackpacks               |**.**.**.**           |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		obfuscate-0.6.2-1.16.3.jar                        |Obfuscate                     |obfuscate                     |0.6.2               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		u_team_core-1.16.5-3.2.1.196.jar                  |U Team Core                   |uteamcore                     |**.**.**.**           |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		silent-lib-1.16.3-4.9.6.jar                       |Silent Lib                    |silentlib                     |4.9.6               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		cgm-1.0.1-1.16.3.jar                              |MrCrayfish\'s Gun Mod          |cgm                           |1.0.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BiomesOPlenty-1.16.5-13.1.0.477-universal.jar     |Biomes O\' Plenty              |biomesoplenty                 |1.16.5-13.1.0.477   |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		cfm-7.0.0pre22-1.16.3.jar                         |MrCrayfish\'s Furniture Mod    |cfm                           |7.0.0-pre22         |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		CreativeCore_v2.2.1_mc1.16.5.jar                  |CreativeCore                  |creativecore                  |2.0.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		mcw-furniture-2.0.1-mc1.16.5.jar                  |Macaw\'s Furniture             |mcwfurnitures                 |2.0.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Hwyla-forge-1.10.11-B78_1.16.2.jar                |Waila                         |waila                         |1.10.11-B78_1.16.2  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		jei-1.16.5-7.7.1.145.jar                          |Just Enough Items             |jei                           |**.**.**.**           |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		towers_of_the_wild-1.16.4-2.0.1.jar               |Towers Of The Wild            |towers_of_the_wild            |1.16.4-2.0.1        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		EyesInTheDarkness-1.16.5-1.0.6.jar                |Eyes in the Darkness          |eyesinthedarkness             |1.0.6               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		MedievalCraft-1.16.5-1.16.2.jar                   |Medieval craft                |medieval_craft                |1.14.4              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		forge-1.16.5-36.2.20-universal.jar                |Forge                         |forge                         |36.2.20             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ScalingHealth-1.16.5-4.1.3+9.jar                  |Scaling Health                |scalinghealth                 |4.1.3+9             |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		SpartanShields-1.16.5-2.1.2.jar                   |Spartan Shields               |spartanshields                |2.1.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BetterMineshafts-Forge-1.16.4-2.0.3.jar           |YUNG\'s Better Mineshafts      |bettermineshafts              |1.16.4-2.0.3        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BetterCaves-Forge-1.16.4-1.1.2.jar                |YUNG\'s Better Caves           |bettercaves                   |1.16.4-1.1.2        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Xaeros_Minimap_22.1.2_Forge_1.16.5.jar            |Xaero\'s Minimap               |xaerominimap                  |22.1.2              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		corpse-1.16.5-1.0.6.jar                           |Corpse                        |corpse                        |1.16.5-1.0.6        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Crash Report UUID:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Crash Report UUID: cfe6d998-1be7-48cd-bfc5-1542683bfaa1
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Player Count:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Player Count: 0 / 20; []
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Data Packs:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Data Packs: vanilla, mod:yungsapi, mod:usefulbackpacks, mod:obfuscate (incompatible), mod:uteamcore, mod:silentlib (incompatible), mod:cgm (incompatible), mod:biomesoplenty, mod:cfm (incompatible), mod:creativecore, mod:mcwfurnitures, mod:waila, mod:jei, mod:towers_of_the_wild, mod:eyesinthedarkness (incompatible), mod:medieval_craft, mod:forge, mod:scalinghealth, mod:spartanshields, mod:bettermineshafts, mod:bettercaves (incompatible), mod:xaerominimap, mod:corpse
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Is Modded:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Is Modded: Definitely; Server brand changed to \'forge\'
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 	Type:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Type: Dedicated Server (map_server.txt)
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 151
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => ---- Minecraft Crash Report ----
// But it works on my machine.

Time: 2/2/22 12:16 AM
Description: Ticking entity

java.lang.RuntimeException: Attempted to load class net/minecraft/server/integrated/IntegratedServer for invalid dist DEDICATED_SERVER
	at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClassWithFlags(RuntimeDistCleaner.java:71) ~[forge.jar:36.2] {}
	at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:85) ~[modlauncher-8.0.9.jar:?] {}
	at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:120) ~[modlauncher-8.0.9.jar:?] {}
	at cpw.mods.modlauncher.TransformingClassLoader$DelegatedClassLoader.findClass(TransformingClassLoader.java:265) ~[modlauncher-8.0.9.jar:?] {}
	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:136) ~[modlauncher-8.0.9.jar:?] {re:classloading}
	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:98) ~[modlauncher-8.0.9.jar:?] {re:classloading}
	at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_292] {}
	at net.silentchaos512.scalinghealth.event.DifficultyEvents.onLivingUpdate(DifficultyEvents.java:81) ~[scalinghealth:4.1.3+9] {re:classloading}
	at net.minecraftforge.eventbus.ASMEventHandler_98_DifficultyEvents_onLivingUpdate_LivingUpdateEvent.invoke(.dynamic) ~[?:?] {}
	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85) ~[eventbus-4.0.0.jar:?] {}
	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:302) ~[eventbus-4.0.0.jar:?] {}
	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:283) ~[eventbus-4.0.0.jar:?] {}
	at net.minecraftforge.common.ForgeHooks.onLivingUpdate(ForgeHooks.java:340) ~[forge:?] {re:classloading}
	at net.minecraft.entity.LivingEntity.func_70071_h_(LivingEntity.java:2112) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:mixin:APP:cgm.mixins.json:common.LivingEntityMixin,pl:mixin:A,pl:runtimedistcleaner:A}
	at net.minecraft.entity.MobEntity.func_70071_h_(MobEntity.java:300) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.entity.monster.ZombieEntity.func_70071_h_(ZombieEntity.java:205) ~[?:?] {re:classloading}
	at net.minecraft.world.server.ServerWorld.func_217479_a(ServerWorld.java:611) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}
	at net.minecraft.world.World.func_217390_a(World.java:554) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.world.server.ServerWorld.func_72835_b(ServerWorld.java:404) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}
	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:851) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:291) ~[?:?] {re:classloading,pl:accesstransformer:B}
	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:787) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.server.MinecraftServer.func_240802_v_(MinecraftServer.java:642) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.server.MinecraftServer.func_240783_a_(MinecraftServer.java:232) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_292] {}


A detailed walkthrough of the error, its code path and all known details is as follows:
---------------------------------------------------------------------------------------

-- Head --
Thread: Server thread
Stacktrace:
	at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClassWithFlags(RuntimeDistCleaner.java:71) ~[forge.jar:36.2] {}
	at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:85) ~[modlauncher-8.0.9.jar:?] {}
	at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:120) ~[modlauncher-8.0.9.jar:?] {}
	at cpw.mods.modlauncher.TransformingClassLoader$DelegatedClassLoader.findClass(TransformingClassLoader.java:265) ~[modlauncher-8.0.9.jar:?] {}
	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:136) ~[modlauncher-8.0.9.jar:?] {re:classloading}
	at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:98) ~[modlauncher-8.0.9.jar:?] {re:classloading}
	at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_292] {}
	at net.silentchaos512.scalinghealth.event.DifficultyEvents.onLivingUpdate(DifficultyEvents.java:81) ~[scalinghealth:4.1.3+9] {re:classloading}
	at net.minecraftforge.eventbus.ASMEventHandler_98_DifficultyEvents_onLivingUpdate_LivingUpdateEvent.invoke(.dynamic) ~[?:?] {}
	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85) ~[eventbus-4.0.0.jar:?] {}
	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:302) ~[eventbus-4.0.0.jar:?] {}
	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:283) ~[eventbus-4.0.0.jar:?] {}
	at net.minecraftforge.common.ForgeHooks.onLivingUpdate(ForgeHooks.java:340) ~[forge:?] {re:classloading}
	at net.minecraft.entity.LivingEntity.func_70071_h_(LivingEntity.java:2112) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:mixin:APP:cgm.mixins.json:common.LivingEntityMixin,pl:mixin:A,pl:runtimedistcleaner:A}
	at net.minecraft.entity.MobEntity.func_70071_h_(MobEntity.java:300) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.entity.monster.ZombieEntity.func_70071_h_(ZombieEntity.java:205) ~[?:?] {re:classloading}
	at net.minecraft.world.server.ServerWorld.func_217479_a(ServerWorld.java:611) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}
-- Entity being ticked --
Details:
	Entity Type: minecraft:drowned (net.minecraft.entity.monster.DrownedEntity)
	Entity ID: 26
	Entity Name: Drowned
	Entity\'s Exact location: 78.50, 50.00, 50.50
	Entity\'s Block location: World: (78,50,50), Chunk: (at 14,3,2 in 4,3; contains blocks 64,0,48 to 79,255,63), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,0,0 to 511,255,511)
	Entity\'s Momentum: 0.00, 0.00, 0.00
	Entity\'s Passengers: []
	Entity\'s Vehicle: ~~ERROR~~ NullPointerException: null
Stacktrace:
	at net.minecraft.world.World.func_217390_a(World.java:554) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.world.server.ServerWorld.func_72835_b(ServerWorld.java:404) ~[?:?] {re:mixin,pl:runtimedistcleaner:A,re:classloading,pl:runtimedistcleaner:A}


-- Affected level --
Details:
	All players: 0 total; []
	Chunk stats: ServerChunkCache: 2025
	Level dimension: minecraft:overworld
	Level spawn location: World: (0,66,45), Chunk: (at 0,4,13 in 0,2; contains blocks 0,0,32 to 15,255,47), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,0,0 to 511,255,511)
	Level time: 1 game time, 1 day time
	Level name: world
	Level game mode: Game mode: survival (ID 0). Hardcore: false. Cheats: false
	Level weather: Rain time: 92823 (now: false), thunder time: 162309 (now: false)
	Known server brands: forge
	Level was modded: true
	Level storage version: 0x04ABD - Anvil
Stacktrace:
	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:851) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:291) ~[?:?] {re:classloading,pl:accesstransformer:B}
	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:787) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.server.MinecraftServer.func_240802_v_(MinecraftServer.java:642) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at net.minecraft.server.MinecraftServer.func_240783_a_(MinecraftServer.java:232) ~[?:?] {re:classloading,pl:accesstransformer:B,pl:runtimedistcleaner:A}
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_292] {}


-- System Details --
Details:
	Minecraft Version: 1.16.5
	Minecraft Version ID: 1.16.5
	Operating System: Linux (amd64) version 5.4.0-91-generic
	Java Version: 1.8.0_292, Oracle Corporation
	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode), Oracle Corporation
	Memory: 1424844888 bytes (1358 MB) / 2354577408 bytes (2245 MB) up to 2354577408 bytes (2245 MB)
	CPUs: 3
	JVM Flags: 3 total; -XX:MaxMetaspaceSize=200M -Xmx2300M -Xms1150M
	ModLauncher: 8.0.9+86+master.3cf110c
	ModLauncher launch target: fmlserver
	ModLauncher naming: srg
	ModLauncher services:
		/mixin-0.8.4.jar mixin PLUGINSERVICE
		/eventbus-4.0.0.jar eventbus PLUGINSERVICE
		/forge.jar object_holder_definalize PLUGINSERVICE
		/forge.jar runtime_enum_extender PLUGINSERVICE
		/accesstransformers-3.0.1.jar accesstransformer PLUGINSERVICE
		/forge.jar capability_inject_definalize PLUGINSERVICE
		/forge.jar runtimedistcleaner PLUGINSERVICE
		/mixin-0.8.4.jar mixin TRANSFORMATIONSERVICE
		/forge.jar fml TRANSFORMATIONSERVICE
	FML: 36.2
	Forge: net.minecraftforge:36.2.20
	FML Language Providers:
		javafml@36.2
		minecraft@1
	Mod List:
		forge-1.16.5-36.2.20-server.jar                   |Minecraft                     |minecraft                     |1.16.5              |DONE      |Manifest: NOSIGNATURE
		YungsApi-1.16.4-Forge-6.jar                       |YUNG\'s API                    |yungsapi                      |1.16.4-Forge-6      |DONE      |Manifest: NOSIGNATURE
		useful_backpacks-1.16.5-1.12.1.90.jar             |Useful Backpacks              |usefulbackpacks               |**.**.**.**           |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		obfuscate-0.6.2-1.16.3.jar                        |Obfuscate                     |obfuscate                     |0.6.2               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		u_team_core-1.16.5-3.2.1.196.jar                  |U Team Core                   |uteamcore                     |**.**.**.**           |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		silent-lib-1.16.3-4.9.6.jar                       |Silent Lib                    |silentlib                     |4.9.6               |DONE      |Manifest: NOSIGNATURE
		cgm-1.0.1-1.16.3.jar                              |MrCrayfish\'s Gun Mod          |cgm                           |1.0.1               |DONE      |Manifest: NOSIGNATURE
		BiomesOPlenty-1.16.5-13.1.0.477-universal.jar     |Biomes O\' Plenty              |biomesoplenty                 |1.16.5-13.1.0.477   |DONE      |Manifest: NOSIGNATURE
		cfm-7.0.0pre22-1.16.3.jar                         |MrCrayfish\'s Furniture Mod    |cfm                           |7.0.0-pre22         |DONE      |Manifest: NOSIGNATURE
		CreativeCore_v2.2.1_mc1.16.5.jar                  |CreativeCore                  |creativecore                  |2.0.0               |DONE      |Manifest: NOSIGNATURE
		mcw-furniture-2.0.1-mc1.16.5.jar                  |Macaw\'s Furniture             |mcwfurnitures                 |2.0.1               |DONE      |Manifest: NOSIGNATURE
		Hwyla-forge-1.10.11-B78_1.16.2.jar                |Waila                         |waila                         |1.10.11-B78_1.16.2  |DONE      |Manifest: NOSIGNATURE
		jei-1.16.5-7.7.1.145.jar                          |Just Enough Items             |jei                           |**.**.**.**           |DONE      |Manifest: NOSIGNATURE
		towers_of_the_wild-1.16.4-2.0.1.jar               |Towers Of The Wild            |towers_of_the_wild            |1.16.4-2.0.1        |DONE      |Manifest: NOSIGNATURE
		EyesInTheDarkness-1.16.5-1.0.6.jar                |Eyes in the Darkness          |eyesinthedarkness             |1.0.6               |DONE      |Manifest: NOSIGNATURE
		MedievalCraft-1.16.5-1.16.2.jar                   |Medieval craft                |medieval_craft                |1.14.4              |DONE      |Manifest: NOSIGNATURE
		forge-1.16.5-36.2.20-universal.jar                |Forge                         |forge                         |36.2.20             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		ScalingHealth-1.16.5-4.1.3+9.jar                  |Scaling Health                |scalinghealth                 |4.1.3+9             |DONE      |Manifest: NOSIGNATURE
		SpartanShields-1.16.5-2.1.2.jar                   |Spartan Shields               |spartanshields                |2.1.2               |DONE      |Manifest: NOSIGNATURE
		BetterMineshafts-Forge-1.16.4-2.0.3.jar           |YUNG\'s Better Mineshafts      |bettermineshafts              |1.16.4-2.0.3        |DONE      |Manifest: NOSIGNATURE
		BetterCaves-Forge-1.16.4-1.1.2.jar                |YUNG\'s Better Caves           |bettercaves                   |1.16.4-1.1.2        |DONE      |Manifest: NOSIGNATURE
		Xaeros_Minimap_22.1.2_Forge_1.16.5.jar            |Xaero\'s Minimap               |xaerominimap                  |22.1.2              |DONE      |Manifest: NOSIGNATURE
		corpse-1.16.5-1.0.6.jar                           |Corpse                        |corpse                        |1.16.5-1.0.6        |DONE      |Manifest: NOSIGNATURE
	Crash Report UUID: cfe6d998-1be7-48cd-bfc5-1542683bfaa1
	Player Count: 0 / 20; []
	Data Packs: vanilla, mod:yungsapi, mod:usefulbackpacks, mod:obfuscate (incompatible), mod:uteamcore, mod:silentlib (incompatible), mod:cgm (incompatible), mod:biomesoplenty, mod:cfm (incompatible), mod:creativecore, mod:mcwfurnitures, mod:waila, mod:jei, mod:towers_of_the_wild, mod:eyesinthedarkness (incompatible), mod:medieval_craft, mod:forge, mod:scalinghealth, mod:spartanshields, mod:bettermineshafts, mod:bettercaves (incompatible), mod:xaerominimap, mod:corpse
	Is Modded: Definitely; Server brand changed to \'forge\'
	Type: Dedicated Server (map_server.txt)
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.16.5
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => 	Minecraft Version:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	Minecraft Version: 1.16.5
                                            [number:protected] => 97
                                        )

                                )

                            [level:protected] => INFO
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

        $this->assertEquals("Minecraft version: 1.16.5", $analysis[0]->getMessage());

    }
}