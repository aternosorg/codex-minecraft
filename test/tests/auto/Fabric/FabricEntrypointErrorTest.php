<?php

class FabricEntrypointErrorTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-entrypoint-error.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\FabricLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:46] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:46] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:46] [main/INFO]: Loading 36 mods:
                                    [number:protected] => 2
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- bfapi 1.3.2
                                    [number:protected] => 3
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric 0.48.0+1.18.2
                                    [number:protected] => 4
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-api-base 0.4.4+d7c144a860 via fabric
                                    [number:protected] => 5
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-api-lookup-api-v1 1.5.7+d7c144a860 via fabric
                                    [number:protected] => 6
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-biome-api-v1 8.0.3+801ec85b60 via fabric
                                    [number:protected] => 7
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-command-api-v1 1.1.9+d7c144a860 via fabric
                                    [number:protected] => 8
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-commands-v0 0.2.8+b4f4f6cd60 via fabric
                                    [number:protected] => 9
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-containers-v0 0.1.21+d7c144a860 via fabric
                                    [number:protected] => 10
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-content-registries-v0 3.0.2+d82b939260 via fabric
                                    [number:protected] => 11
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-crash-report-info-v1 0.1.11+3ac43d9560 via fabric
                                    [number:protected] => 12
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-dimensions-v1 2.1.17+2540745460 via fabric
                                    [number:protected] => 13
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-entity-events-v1 1.4.8+d7c144a860 via fabric
                                    [number:protected] => 14
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-events-interaction-v0 0.4.19+d7c144a860 via fabric
                                    [number:protected] => 15
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-events-lifecycle-v0 0.2.13+d7c144a860 via fabric
                                    [number:protected] => 16
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-game-rule-api-v1 1.0.13+d7c144a860 via fabric
                                    [number:protected] => 17
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-item-api-v1 1.3.3+691a79b560 via fabric
                                    [number:protected] => 18
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-item-groups-v0 0.3.10+3ac43d9560 via fabric
                                    [number:protected] => 19
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-lifecycle-events-v1 2.0.2+2540745460 via fabric
                                    [number:protected] => 20
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-loot-tables-v1 1.0.11+d7c144a860 via fabric
                                    [number:protected] => 21
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-mining-level-api-v1 2.0.4+d1027f7d60 via fabric
                                    [number:protected] => 22
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-networking-api-v1 1.0.21+d882b91560 via fabric
                                    [number:protected] => 23
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-networking-v0 0.3.8+b4f4f6cd60 via fabric
                                    [number:protected] => 24
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-object-builder-api-v1 2.0.3+40c91ec860 via fabric
                                    [number:protected] => 25
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-particles-v1 0.2.12+526dc1ac60 via fabric
                                    [number:protected] => 26
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-registry-sync-v0 0.9.8+0d9ab37260 via fabric
                                    [number:protected] => 27
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-rendering-data-attachment-v1 0.3.7+d7c144a860 via fabric
                                    [number:protected] => 28
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-rendering-fluids-v1 2.0.2+54e5b2ec60 via fabric
                                    [number:protected] => 29
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-resource-conditions-api-v1 2.0.2+d1027f7d60 via fabric
                                    [number:protected] => 30
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-resource-loader-v0 0.4.18+2de5574560 via fabric
                                    [number:protected] => 31
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-screen-handler-api-v1 1.1.14+40c91ec860 via fabric
                                    [number:protected] => 32
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-transfer-api-v1 1.5.14+cca23f9360 via fabric
                                    [number:protected] => 33
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-transitive-access-wideners-v1 1.0.0+40c91ec860 via fabric
                                    [number:protected] => 34
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabricloader 0.13.3
                                    [number:protected] => 35
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- java 17
                                    [number:protected] => 36
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- minecraft 1.18.2
                                    [number:protected] => 37
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- voicechat 1.18.2-2.2.30
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:46] [main/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:47] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:47] [main/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:47] [main/INFO]: Compatibility level set to JAVA_16
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:47] [main/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:51] [main/WARN]: @Inject(@At("INVOKE")) Shift.BY=3 on fabric-lifecycle-events-v1.mixins.json:server.WorldChunkMixin::handler$zcj000$onLoadBlockEntity exceeds the maximum allowed value: 0. Increase the value of maxShiftBy to suppress this warning.
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:51] [main/WARN]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:52] [main/INFO]: Compatibility version 14
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:52] [main/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:52] [main/INFO]: Loading plugins
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:52] [main/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:52] [main/INFO]: Loaded 0 plugin(s)
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:52] [main/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:52] [main/INFO]: Initializing plugins
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:52] [main/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:52] [main/INFO]: Initialized 0 plugin(s)
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:52] [main/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:28:53] [main/ERROR]: Failed to start the minecraft server
                                    [number:protected] => 47
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.RuntimeException: Could not execute entrypoint stage \'main\' due to errors, provided by \'bfapi\'!
                                    [number:protected] => 48
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.lambda$invoke0$0(EntrypointUtils.java:51) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 49
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.util.ExceptionUtil.gatherExceptions(ExceptionUtil.java:33) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 50
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:49) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 51
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke(EntrypointUtils.java:35) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 52
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.game.minecraft.Hooks.startServer(Hooks.java:62) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 53
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.Main.main(Main.java:101) [server-intermediary.jar:?]
                                    [number:protected] => 54
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                    [number:protected] => 55
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
                                    [number:protected] => 56
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                    [number:protected] => 57
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
                                    [number:protected] => 58
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.game.minecraft.MinecraftGameProvider.launch(MinecraftGameProvider.java:416) [fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 59
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.Knot.launch(Knot.java:77) [fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 60
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.KnotServer.main(KnotServer.java:23) [fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 61
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                    [number:protected] => 62
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
                                    [number:protected] => 63
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                    [number:protected] => 64
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
                                    [number:protected] => 65
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:66) [fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 66
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NoSuchMethodError: net.minecraft.class_2370: method \'void <init>(net.minecraft.class_5321, com.mojang.serialization.Lifecycle)\' not found
                                    [number:protected] => 67
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:104) ~[bfapi.jar:?]
                                    [number:protected] => 68
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:100) ~[bfapi.jar:?]
                                    [number:protected] => 69
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:96) ~[bfapi.jar:?]
                                    [number:protected] => 70
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:92) ~[bfapi.jar:?]
                                    [number:protected] => 71
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<clinit>(BFAPIRegistry.java:42) ~[bfapi.jar:?]
                                    [number:protected] => 72
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.register(Event.java:46) ~[bfapi.jar:?]
                                    [number:protected] => 73
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:33) ~[bfapi.jar:?]
                                    [number:protected] => 74
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:25) ~[bfapi.jar:?]
                                    [number:protected] => 75
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.bb1.fabric.bfapi.Loader.<clinit>(Loader.java:42) ~[bfapi.jar:?]
                                    [number:protected] => 76
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Class.forName0(Native Method) ~[?:?]
                                    [number:protected] => 77
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Class.forName(Class.java:467) ~[?:?]
                                    [number:protected] => 78
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.util.DefaultLanguageAdapter.create(DefaultLanguageAdapter.java:50) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 79
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointStorage$NewEntry.getOrCreate(EntrypointStorage.java:117) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 80
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointContainerImpl.getEntrypoint(EntrypointContainerImpl.java:53) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 81
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:47) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 82
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 15 more
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:28:53] [main/ERROR]:
                )

        )

    [iterator:protected] => 11
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [22:28:46] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
[22:28:46] [main/INFO]: Loading 36 mods:
	- bfapi 1.3.2
	- fabric 0.48.0+1.18.2
	- fabric-api-base 0.4.4+d7c144a860 via fabric
	- fabric-api-lookup-api-v1 1.5.7+d7c144a860 via fabric
	- fabric-biome-api-v1 8.0.3+801ec85b60 via fabric
	- fabric-command-api-v1 1.1.9+d7c144a860 via fabric
	- fabric-commands-v0 0.2.8+b4f4f6cd60 via fabric
	- fabric-containers-v0 0.1.21+d7c144a860 via fabric
	- fabric-content-registries-v0 3.0.2+d82b939260 via fabric
	- fabric-crash-report-info-v1 0.1.11+3ac43d9560 via fabric
	- fabric-dimensions-v1 2.1.17+2540745460 via fabric
	- fabric-entity-events-v1 1.4.8+d7c144a860 via fabric
	- fabric-events-interaction-v0 0.4.19+d7c144a860 via fabric
	- fabric-events-lifecycle-v0 0.2.13+d7c144a860 via fabric
	- fabric-game-rule-api-v1 1.0.13+d7c144a860 via fabric
	- fabric-item-api-v1 1.3.3+691a79b560 via fabric
	- fabric-item-groups-v0 0.3.10+3ac43d9560 via fabric
	- fabric-lifecycle-events-v1 2.0.2+2540745460 via fabric
	- fabric-loot-tables-v1 1.0.11+d7c144a860 via fabric
	- fabric-mining-level-api-v1 2.0.4+d1027f7d60 via fabric
	- fabric-networking-api-v1 1.0.21+d882b91560 via fabric
	- fabric-networking-v0 0.3.8+b4f4f6cd60 via fabric
	- fabric-object-builder-api-v1 2.0.3+40c91ec860 via fabric
	- fabric-particles-v1 0.2.12+526dc1ac60 via fabric
	- fabric-registry-sync-v0 0.9.8+0d9ab37260 via fabric
	- fabric-rendering-data-attachment-v1 0.3.7+d7c144a860 via fabric
	- fabric-rendering-fluids-v1 2.0.2+54e5b2ec60 via fabric
	- fabric-resource-conditions-api-v1 2.0.2+d1027f7d60 via fabric
	- fabric-resource-loader-v0 0.4.18+2de5574560 via fabric
	- fabric-screen-handler-api-v1 1.1.14+40c91ec860 via fabric
	- fabric-transfer-api-v1 1.5.14+cca23f9360 via fabric
	- fabric-transitive-access-wideners-v1 1.0.0+40c91ec860 via fabric
	- fabricloader 0.13.3
	- java 17
	- minecraft 1.18.2
	- voicechat 1.18.2-2.2.30
[22:28:47] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
[22:28:47] [main/INFO]: Compatibility level set to JAVA_16
[22:28:51] [main/WARN]: @Inject(@At("INVOKE")) Shift.BY=3 on fabric-lifecycle-events-v1.mixins.json:server.WorldChunkMixin::handler$zcj000$onLoadBlockEntity exceeds the maximum allowed value: 0. Increase the value of maxShiftBy to suppress this warning.
[22:28:52] [main/INFO]: Compatibility version 14
[22:28:52] [main/INFO]: Loading plugins
[22:28:52] [main/INFO]: Loaded 0 plugin(s)
[22:28:52] [main/INFO]: Initializing plugins
[22:28:52] [main/INFO]: Initialized 0 plugin(s)
[22:28:53] [main/ERROR]: Failed to start the minecraft server
java.lang.RuntimeException: Could not execute entrypoint stage \'main\' due to errors, provided by \'bfapi\'!
	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.lambda$invoke0$0(EntrypointUtils.java:51) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.util.ExceptionUtil.gatherExceptions(ExceptionUtil.java:33) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:49) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke(EntrypointUtils.java:35) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.game.minecraft.Hooks.startServer(Hooks.java:62) ~[fabric-loader-0.13.3.jar:?]
	at net.minecraft.server.Main.main(Main.java:101) [server-intermediary.jar:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
	at net.fabricmc.loader.impl.game.minecraft.MinecraftGameProvider.launch(MinecraftGameProvider.java:416) [fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.launch.knot.Knot.launch(Knot.java:77) [fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.launch.knot.KnotServer.main(KnotServer.java:23) [fabric-loader-0.13.3.jar:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
	at net.fabricmc.loader.impl.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:66) [fabric-loader-0.13.3.jar:?]
Caused by: java.lang.NoSuchMethodError: net.minecraft.class_2370: method \'void <init>(net.minecraft.class_5321, com.mojang.serialization.Lifecycle)\' not found
	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:104) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:100) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:96) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:92) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<clinit>(BFAPIRegistry.java:42) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.events.Event.register(Event.java:46) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:33) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:25) ~[bfapi.jar:?]
	at com.bb1.fabric.bfapi.Loader.<clinit>(Loader.java:42) ~[bfapi.jar:?]
	at java.lang.Class.forName0(Native Method) ~[?:?]
	at java.lang.Class.forName(Class.java:467) ~[?:?]
	at net.fabricmc.loader.impl.util.DefaultLanguageAdapter.create(DefaultLanguageAdapter.java:50) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.entrypoint.EntrypointStorage$NewEntry.getOrCreate(EntrypointStorage.java:117) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.entrypoint.EntrypointContainerImpl.getEntrypoint(EntrypointContainerImpl.java:53) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:47) ~[fabric-loader-0.13.3.jar:?]
	... 15 more
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:28:46] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:28:46] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:28:46] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:28:46] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Fabric loader version
                    [value:protected] => 0.13.3
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricJavaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:28:46] [main/INFO]: Loading 36 mods:
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- bfapi 1.3.2
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric 0.48.0+1.18.2
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-api-base 0.4.4+d7c144a860 via fabric
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-api-lookup-api-v1 1.5.7+d7c144a860 via fabric
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-biome-api-v1 8.0.3+801ec85b60 via fabric
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-command-api-v1 1.1.9+d7c144a860 via fabric
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-commands-v0 0.2.8+b4f4f6cd60 via fabric
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-containers-v0 0.1.21+d7c144a860 via fabric
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-content-registries-v0 3.0.2+d82b939260 via fabric
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-crash-report-info-v1 0.1.11+3ac43d9560 via fabric
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-dimensions-v1 2.1.17+2540745460 via fabric
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-entity-events-v1 1.4.8+d7c144a860 via fabric
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-events-interaction-v0 0.4.19+d7c144a860 via fabric
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-events-lifecycle-v0 0.2.13+d7c144a860 via fabric
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-game-rule-api-v1 1.0.13+d7c144a860 via fabric
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-item-api-v1 1.3.3+691a79b560 via fabric
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-item-groups-v0 0.3.10+3ac43d9560 via fabric
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-lifecycle-events-v1 2.0.2+2540745460 via fabric
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-loot-tables-v1 1.0.11+d7c144a860 via fabric
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-mining-level-api-v1 2.0.4+d1027f7d60 via fabric
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-networking-api-v1 1.0.21+d882b91560 via fabric
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-networking-v0 0.3.8+b4f4f6cd60 via fabric
                                            [number:protected] => 24
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-object-builder-api-v1 2.0.3+40c91ec860 via fabric
                                            [number:protected] => 25
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-particles-v1 0.2.12+526dc1ac60 via fabric
                                            [number:protected] => 26
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-registry-sync-v0 0.9.8+0d9ab37260 via fabric
                                            [number:protected] => 27
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-rendering-data-attachment-v1 0.3.7+d7c144a860 via fabric
                                            [number:protected] => 28
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-rendering-fluids-v1 2.0.2+54e5b2ec60 via fabric
                                            [number:protected] => 29
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-resource-conditions-api-v1 2.0.2+d1027f7d60 via fabric
                                            [number:protected] => 30
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-resource-loader-v0 0.4.18+2de5574560 via fabric
                                            [number:protected] => 31
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-screen-handler-api-v1 1.1.14+40c91ec860 via fabric
                                            [number:protected] => 32
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-transfer-api-v1 1.5.14+cca23f9360 via fabric
                                            [number:protected] => 33
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-transitive-access-wideners-v1 1.0.0+40c91ec860 via fabric
                                            [number:protected] => 34
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabricloader 0.13.3
                                            [number:protected] => 35
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- java 17
                                            [number:protected] => 36
                                        )

                                    [35] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- minecraft 1.18.2
                                            [number:protected] => 37
                                        )

                                    [36] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- voicechat 1.18.2-2.2.30
                                            [number:protected] => 38
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:28:46] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Java version
                    [value:protected] => 17
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\EnvironmentInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:28:53] [main/ERROR]: Failed to start the minecraft server
                                            [number:protected] => 47
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.RuntimeException: Could not execute entrypoint stage \'main\' due to errors, provided by \'bfapi\'!
                                            [number:protected] => 48
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.lambda$invoke0$0(EntrypointUtils.java:51) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 49
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.util.ExceptionUtil.gatherExceptions(ExceptionUtil.java:33) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 50
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:49) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 51
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke(EntrypointUtils.java:35) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 52
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.game.minecraft.Hooks.startServer(Hooks.java:62) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 53
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.Main.main(Main.java:101) [server-intermediary.jar:?]
                                            [number:protected] => 54
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 55
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
                                            [number:protected] => 56
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 57
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
                                            [number:protected] => 58
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.game.minecraft.MinecraftGameProvider.launch(MinecraftGameProvider.java:416) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 59
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.Knot.launch(Knot.java:77) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 60
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.KnotServer.main(KnotServer.java:23) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 61
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 62
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
                                            [number:protected] => 63
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 64
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
                                            [number:protected] => 65
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:66) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 66
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.NoSuchMethodError: net.minecraft.class_2370: method \'void <init>(net.minecraft.class_5321, com.mojang.serialization.Lifecycle)\' not found
                                            [number:protected] => 67
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:104) ~[bfapi.jar:?]
                                            [number:protected] => 68
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:100) ~[bfapi.jar:?]
                                            [number:protected] => 69
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:96) ~[bfapi.jar:?]
                                            [number:protected] => 70
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:92) ~[bfapi.jar:?]
                                            [number:protected] => 71
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<clinit>(BFAPIRegistry.java:42) ~[bfapi.jar:?]
                                            [number:protected] => 72
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.register(Event.java:46) ~[bfapi.jar:?]
                                            [number:protected] => 73
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:33) ~[bfapi.jar:?]
                                            [number:protected] => 74
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:25) ~[bfapi.jar:?]
                                            [number:protected] => 75
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.Loader.<clinit>(Loader.java:42) ~[bfapi.jar:?]
                                            [number:protected] => 76
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Class.forName0(Native Method) ~[?:?]
                                            [number:protected] => 77
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Class.forName(Class.java:467) ~[?:?]
                                            [number:protected] => 78
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.util.DefaultLanguageAdapter.create(DefaultLanguageAdapter.java:50) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 79
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointStorage$NewEntry.getOrCreate(EntrypointStorage.java:117) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 80
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointContainerImpl.getEntrypoint(EntrypointContainerImpl.java:53) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 81
                                        )

                                    [35] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:47) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 82
                                        )

                                    [36] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	... 15 more
                                            [number:protected] => 83
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:28:53] [main/ERROR]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Environment
                    [value:protected] => Server
                )

            [4] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricEntryStageProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:28:53] [main/ERROR]: Failed to start the minecraft server
                                            [number:protected] => 47
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.RuntimeException: Could not execute entrypoint stage \'main\' due to errors, provided by \'bfapi\'!
                                            [number:protected] => 48
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.lambda$invoke0$0(EntrypointUtils.java:51) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 49
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.util.ExceptionUtil.gatherExceptions(ExceptionUtil.java:33) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 50
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:49) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 51
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke(EntrypointUtils.java:35) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 52
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.game.minecraft.Hooks.startServer(Hooks.java:62) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 53
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.Main.main(Main.java:101) [server-intermediary.jar:?]
                                            [number:protected] => 54
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 55
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
                                            [number:protected] => 56
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 57
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
                                            [number:protected] => 58
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.game.minecraft.MinecraftGameProvider.launch(MinecraftGameProvider.java:416) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 59
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.Knot.launch(Knot.java:77) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 60
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.KnotServer.main(KnotServer.java:23) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 61
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 62
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77) ~[?:?]
                                            [number:protected] => 63
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 64
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:568) ~[?:?]
                                            [number:protected] => 65
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:66) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 66
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.NoSuchMethodError: net.minecraft.class_2370: method \'void <init>(net.minecraft.class_5321, com.mojang.serialization.Lifecycle)\' not found
                                            [number:protected] => 67
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:104) ~[bfapi.jar:?]
                                            [number:protected] => 68
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:100) ~[bfapi.jar:?]
                                            [number:protected] => 69
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:96) ~[bfapi.jar:?]
                                            [number:protected] => 70
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<init>(BFAPIRegistry.java:92) ~[bfapi.jar:?]
                                            [number:protected] => 71
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.registery.BFAPIRegistry.<clinit>(BFAPIRegistry.java:42) ~[bfapi.jar:?]
                                            [number:protected] => 72
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.register(Event.java:46) ~[bfapi.jar:?]
                                            [number:protected] => 73
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:33) ~[bfapi.jar:?]
                                            [number:protected] => 74
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.events.Event.<init>(Event.java:25) ~[bfapi.jar:?]
                                            [number:protected] => 75
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at com.bb1.fabric.bfapi.Loader.<clinit>(Loader.java:42) ~[bfapi.jar:?]
                                            [number:protected] => 76
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Class.forName0(Native Method) ~[?:?]
                                            [number:protected] => 77
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Class.forName(Class.java:467) ~[?:?]
                                            [number:protected] => 78
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.util.DefaultLanguageAdapter.create(DefaultLanguageAdapter.java:50) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 79
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointStorage$NewEntry.getOrCreate(EntrypointStorage.java:117) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 80
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointContainerImpl.getEntrypoint(EntrypointContainerImpl.java:53) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 81
                                        )

                                    [35] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.entrypoint.EntrypointUtils.invoke0(EntrypointUtils.java:47) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 82
                                        )

                                    [36] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	... 15 more
                                            [number:protected] => 83
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:28:53] [main/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution Object
                                (
                                    [modName:protected] => bfapi
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => bfapi
                )

        )

    [iterator:protected] => 4
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[0]->getMessage());

        $this->assertEquals("Fabric loader version: 0.13.3", $analysis[1]->getMessage());

        $this->assertEquals("Java version: 17", $analysis[2]->getMessage());

        $this->assertEquals("Environment: Server", $analysis[3]->getMessage());

        $this->assertEquals("The mod 'bfapi' has thrown an exception.", $analysis[4]->getMessage());
        $this->assertEquals("Remove the mod 'bfapi'.", $analysis[4][0]->getMessage());

    }
}