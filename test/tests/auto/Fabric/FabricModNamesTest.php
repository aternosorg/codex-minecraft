<?php

class FabricModNamesTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-mod-names.log");
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
                                    [text:protected] => [14:46:59] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:46:59] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:46:59] [main/INFO]: Loading 34 mods:
                                    [number:protected] => 2
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric 0.48.0+1.18.2
                                    [number:protected] => 3
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-api-base 0.4.4+d7c144a860 via fabric
                                    [number:protected] => 4
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-api-lookup-api-v1 1.5.7+d7c144a860 via fabric
                                    [number:protected] => 5
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-biome-api-v1 8.0.3+801ec85b60 via fabric
                                    [number:protected] => 6
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-command-api-v1 1.1.9+d7c144a860 via fabric
                                    [number:protected] => 7
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-commands-v0 0.2.8+b4f4f6cd60 via fabric
                                    [number:protected] => 8
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-containers-v0 0.1.21+d7c144a860 via fabric
                                    [number:protected] => 9
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-content-registries-v0 3.0.2+d82b939260 via fabric
                                    [number:protected] => 10
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-crash-report-info-v1 0.1.11+3ac43d9560 via fabric
                                    [number:protected] => 11
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-dimensions-v1 2.1.17+2540745460 via fabric
                                    [number:protected] => 12
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-entity-events-v1 1.4.8+d7c144a860 via fabric
                                    [number:protected] => 13
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-events-interaction-v0 0.4.19+d7c144a860 via fabric
                                    [number:protected] => 14
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-events-lifecycle-v0 0.2.13+d7c144a860 via fabric
                                    [number:protected] => 15
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-game-rule-api-v1 1.0.13+d7c144a860 via fabric
                                    [number:protected] => 16
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-item-api-v1 1.3.3+691a79b560 via fabric
                                    [number:protected] => 17
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-item-groups-v0 0.3.10+3ac43d9560 via fabric
                                    [number:protected] => 18
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-lifecycle-events-v1 2.0.2+2540745460 via fabric
                                    [number:protected] => 19
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-loot-tables-v1 1.0.11+d7c144a860 via fabric
                                    [number:protected] => 20
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-mining-level-api-v1 2.0.4+d1027f7d60 via fabric
                                    [number:protected] => 21
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-networking-api-v1 1.0.21+d882b91560 via fabric
                                    [number:protected] => 22
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-networking-v0 0.3.8+b4f4f6cd60 via fabric
                                    [number:protected] => 23
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-object-builder-api-v1 2.0.3+40c91ec860 via fabric
                                    [number:protected] => 24
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-particles-v1 0.2.12+526dc1ac60 via fabric
                                    [number:protected] => 25
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-registry-sync-v0 0.9.8+0d9ab37260 via fabric
                                    [number:protected] => 26
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-rendering-data-attachment-v1 0.3.7+d7c144a860 via fabric
                                    [number:protected] => 27
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-rendering-fluids-v1 2.0.2+54e5b2ec60 via fabric
                                    [number:protected] => 28
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-resource-conditions-api-v1 2.0.2+d1027f7d60 via fabric
                                    [number:protected] => 29
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-resource-loader-v0 0.4.18+2de5574560 via fabric
                                    [number:protected] => 30
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-screen-handler-api-v1 1.1.14+40c91ec860 via fabric
                                    [number:protected] => 31
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-transfer-api-v1 1.5.14+cca23f9360 via fabric
                                    [number:protected] => 32
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabric-transitive-access-wideners-v1 1.0.0+40c91ec860 via fabric
                                    [number:protected] => 33
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabricloader 0.13.3
                                    [number:protected] => 34
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- java 17
                                    [number:protected] => 35
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- minecraft 1.18.2
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:46:59] [main/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:00] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:00] [main/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:00] [main/INFO]: Compatibility level set to JAVA_16
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:00] [main/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:14] [main/WARN]: @Inject(@At("INVOKE")) Shift.BY=3 on fabric-lifecycle-events-v1.mixins.json:server.WorldChunkMixin::handler$zca000$onLoadBlockEntity exceeds the maximum allowed value: 0. Increase the value of maxShiftBy to suppress this warning.
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:14] [main/WARN]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:18] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:18] [main/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:23] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:23] [main/WARN]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:23] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:23] [main/WARN]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:23] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:23] [main/WARN]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:23] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:23] [main/WARN]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:23] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:23] [main/WARN]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:24] [Worker-Main-3/INFO]: Loaded 7 recipes
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:24] [Worker-Main-3/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:25] [Worker-Main-3/INFO]: Loaded 1141 advancements
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:25] [Worker-Main-3/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:28] [main/INFO]: Applied 0 biome modifications to 0 of 61 new biomes in 5.061 ms
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:28] [main/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:28] [Server thread/INFO]: Starting minecraft server version 1.18.2
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:28] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:28] [Server thread/INFO]: Loading properties
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:28] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:28] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:28] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:28] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:28] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:28] [Server thread/INFO]: Starting Minecraft server on *:52194
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:28] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:28] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:28] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:29] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:29] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:29] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:29] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-4/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:45] [Worker-Main-3/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:46] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:46] [Worker-Main-4/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:46] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:46] [Worker-Main-4/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:47] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:47] [Worker-Main-4/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:47] [Worker-Main-4/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:47] [Worker-Main-4/INFO]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:48] [Worker-Main-4/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:48] [Worker-Main-4/INFO]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:51] [Worker-Main-4/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:51] [Worker-Main-4/INFO]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:51] [Worker-Main-4/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:51] [Worker-Main-4/INFO]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:51] [Worker-Main-3/INFO]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:51] [Worker-Main-3/INFO]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:51] [Worker-Main-3/INFO]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:51] [Worker-Main-3/INFO]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:51] [Worker-Main-3/INFO]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:52] [Worker-Main-4/INFO]: Preparing spawn area: 7%
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:52] [Worker-Main-4/INFO]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:52] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:52] [Worker-Main-3/INFO]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:53] [Worker-Main-4/INFO]: Preparing spawn area: 17%
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:53] [Worker-Main-4/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:53] [Worker-Main-3/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:53] [Worker-Main-3/INFO]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:54] [Worker-Main-3/INFO]: Preparing spawn area: 27%
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:54] [Worker-Main-3/INFO]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:54] [Worker-Main-4/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:54] [Worker-Main-4/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:55] [Worker-Main-4/INFO]: Preparing spawn area: 34%
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:55] [Worker-Main-4/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:55] [Worker-Main-3/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:55] [Worker-Main-3/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:56] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:56] [Worker-Main-3/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:56] [Worker-Main-3/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:56] [Worker-Main-3/INFO]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:57] [Worker-Main-3/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:57] [Worker-Main-3/INFO]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:57] [Worker-Main-4/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:57] [Worker-Main-4/INFO]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:58] [Worker-Main-4/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:58] [Worker-Main-4/INFO]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:58] [Worker-Main-4/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:58] [Worker-Main-4/INFO]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:59] [Worker-Main-4/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:59] [Worker-Main-4/INFO]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:47:59] [Worker-Main-4/INFO]: Preparing spawn area: 69%
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:47:59] [Worker-Main-4/INFO]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:00] [Worker-Main-4/INFO]: Preparing spawn area: 70%
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:00] [Worker-Main-4/INFO]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:00] [Worker-Main-4/INFO]: Preparing spawn area: 70%
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:00] [Worker-Main-4/INFO]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:01] [Worker-Main-4/INFO]: Preparing spawn area: 71%
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:01] [Worker-Main-4/INFO]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:01] [Worker-Main-4/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:01] [Worker-Main-4/INFO]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:02] [Worker-Main-3/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:02] [Worker-Main-3/INFO]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:02] [Worker-Main-4/INFO]: Preparing spawn area: 73%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:02] [Worker-Main-4/INFO]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:03] [Worker-Main-4/INFO]: Preparing spawn area: 74%
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:03] [Worker-Main-4/INFO]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:03] [Worker-Main-3/INFO]: Preparing spawn area: 75%
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:03] [Worker-Main-3/INFO]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:04] [Worker-Main-3/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:04] [Worker-Main-3/INFO]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:04] [Worker-Main-3/INFO]: Preparing spawn area: 77%
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:04] [Worker-Main-3/INFO]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:05] [Worker-Main-3/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:05] [Worker-Main-3/INFO]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:05] [Worker-Main-4/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:05] [Worker-Main-4/INFO]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:06] [Worker-Main-4/INFO]: Preparing spawn area: 81%
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:06] [Worker-Main-4/INFO]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:06] [Worker-Main-3/INFO]: Preparing spawn area: 82%
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:06] [Worker-Main-3/INFO]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:07] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:07] [Worker-Main-3/INFO]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:07] [Worker-Main-4/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:07] [Worker-Main-4/INFO]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:08] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:08] [Worker-Main-3/INFO]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:08] [Worker-Main-4/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:08] [Worker-Main-4/INFO]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:09] [Worker-Main-3/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:09] [Worker-Main-3/INFO]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:09] [Worker-Main-3/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:09] [Worker-Main-3/INFO]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:10] [Worker-Main-4/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:10] [Worker-Main-4/INFO]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:10] [Worker-Main-3/INFO]: Preparing spawn area: 86%
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:10] [Worker-Main-3/INFO]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:11] [Worker-Main-4/INFO]: Preparing spawn area: 86%
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:11] [Worker-Main-4/INFO]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:11] [Worker-Main-3/INFO]: Preparing spawn area: 86%
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:11] [Worker-Main-3/INFO]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:12] [Worker-Main-4/INFO]: Preparing spawn area: 87%
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:12] [Worker-Main-4/INFO]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:12] [Worker-Main-3/INFO]: Preparing spawn area: 87%
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:12] [Worker-Main-3/INFO]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:13] [Worker-Main-3/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:13] [Worker-Main-3/INFO]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:13] [Worker-Main-4/INFO]: Preparing spawn area: 89%
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:13] [Worker-Main-4/INFO]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:14] [Worker-Main-4/INFO]: Preparing spawn area: 90%
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:14] [Worker-Main-4/INFO]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:14] [Worker-Main-3/INFO]: Preparing spawn area: 91%
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:14] [Worker-Main-3/INFO]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:15] [Worker-Main-4/INFO]: Preparing spawn area: 91%
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:15] [Worker-Main-4/INFO]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:15] [Worker-Main-3/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:15] [Worker-Main-3/INFO]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:16] [Worker-Main-3/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:16] [Worker-Main-3/INFO]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:16] [Worker-Main-3/INFO]: Preparing spawn area: 93%
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:16] [Worker-Main-3/INFO]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:17] [Worker-Main-4/INFO]: Preparing spawn area: 94%
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:17] [Worker-Main-4/INFO]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:17] [Worker-Main-4/INFO]: Preparing spawn area: 95%
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:17] [Worker-Main-4/INFO]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:18] [Worker-Main-4/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:18] [Worker-Main-4/INFO]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:18] [Worker-Main-4/INFO]: Preparing spawn area: 97%
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:18] [Worker-Main-4/INFO]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:19] [Worker-Main-3/INFO]: Preparing spawn area: 97%
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:19] [Worker-Main-3/INFO]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:19] [Worker-Main-3/INFO]: Preparing spawn area: 98%
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:19] [Worker-Main-3/INFO]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:20] [Worker-Main-3/INFO]: Preparing spawn area: 98%
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:20] [Worker-Main-3/INFO]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:20] [Server thread/INFO]: Time elapsed: 50962 ms
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:20] [Server thread/INFO]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:20] [Server thread/INFO]: Done (51.331s)! For help, type "help"
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:20] [Server thread/INFO]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:20] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:20] [Server thread/INFO]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:20] [Server thread/INFO]: Thread Query Listener started
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:20] [Server thread/INFO]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:20] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:20] [Query Listener #1/INFO]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:48:20] [Server thread/INFO]: JMX monitoring enabled
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:48:20] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 130
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [14:46:59] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
[14:46:59] [main/INFO]: Loading 34 mods:
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
[14:47:00] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
[14:47:00] [main/INFO]: Compatibility level set to JAVA_16
[14:47:14] [main/WARN]: @Inject(@At("INVOKE")) Shift.BY=3 on fabric-lifecycle-events-v1.mixins.json:server.WorldChunkMixin::handler$zca000$onLoadBlockEntity exceeds the maximum allowed value: 0. Increase the value of maxShiftBy to suppress this warning.
[14:47:18] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[14:47:23] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[14:47:23] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[14:47:23] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[14:47:23] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[14:47:23] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[14:47:24] [Worker-Main-3/INFO]: Loaded 7 recipes
[14:47:25] [Worker-Main-3/INFO]: Loaded 1141 advancements
[14:47:28] [main/INFO]: Applied 0 biome modifications to 0 of 61 new biomes in 5.061 ms
[14:47:28] [Server thread/INFO]: Starting minecraft server version 1.18.2
[14:47:28] [Server thread/INFO]: Loading properties
[14:47:28] [Server thread/INFO]: Default game type: SURVIVAL
[14:47:28] [Server thread/INFO]: Generating keypair
[14:47:28] [Server thread/INFO]: Starting Minecraft server on *:52194
[14:47:28] [Server thread/INFO]: Using epoll channel type
[14:47:29] [Server thread/INFO]: Preparing level "world"
[14:47:29] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[14:47:46] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:46] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:47] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[14:47:47] [Worker-Main-4/INFO]: Preparing spawn area: 1%
[14:47:48] [Worker-Main-4/INFO]: Preparing spawn area: 4%
[14:47:51] [Worker-Main-4/INFO]: Preparing spawn area: 5%
[14:47:51] [Worker-Main-4/INFO]: Preparing spawn area: 5%
[14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[14:47:51] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[14:47:52] [Worker-Main-4/INFO]: Preparing spawn area: 7%
[14:47:52] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[14:47:53] [Worker-Main-4/INFO]: Preparing spawn area: 17%
[14:47:53] [Worker-Main-3/INFO]: Preparing spawn area: 20%
[14:47:54] [Worker-Main-3/INFO]: Preparing spawn area: 27%
[14:47:54] [Worker-Main-4/INFO]: Preparing spawn area: 32%
[14:47:55] [Worker-Main-4/INFO]: Preparing spawn area: 34%
[14:47:55] [Worker-Main-3/INFO]: Preparing spawn area: 47%
[14:47:56] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[14:47:56] [Worker-Main-3/INFO]: Preparing spawn area: 60%
[14:47:57] [Worker-Main-3/INFO]: Preparing spawn area: 64%
[14:47:57] [Worker-Main-4/INFO]: Preparing spawn area: 68%
[14:47:58] [Worker-Main-4/INFO]: Preparing spawn area: 68%
[14:47:58] [Worker-Main-4/INFO]: Preparing spawn area: 68%
[14:47:59] [Worker-Main-4/INFO]: Preparing spawn area: 68%
[14:47:59] [Worker-Main-4/INFO]: Preparing spawn area: 69%
[14:48:00] [Worker-Main-4/INFO]: Preparing spawn area: 70%
[14:48:00] [Worker-Main-4/INFO]: Preparing spawn area: 70%
[14:48:01] [Worker-Main-4/INFO]: Preparing spawn area: 71%
[14:48:01] [Worker-Main-4/INFO]: Preparing spawn area: 72%
[14:48:02] [Worker-Main-3/INFO]: Preparing spawn area: 72%
[14:48:02] [Worker-Main-4/INFO]: Preparing spawn area: 73%
[14:48:03] [Worker-Main-4/INFO]: Preparing spawn area: 74%
[14:48:03] [Worker-Main-3/INFO]: Preparing spawn area: 75%
[14:48:04] [Worker-Main-3/INFO]: Preparing spawn area: 76%
[14:48:04] [Worker-Main-3/INFO]: Preparing spawn area: 77%
[14:48:05] [Worker-Main-3/INFO]: Preparing spawn area: 79%
[14:48:05] [Worker-Main-4/INFO]: Preparing spawn area: 80%
[14:48:06] [Worker-Main-4/INFO]: Preparing spawn area: 81%
[14:48:06] [Worker-Main-3/INFO]: Preparing spawn area: 82%
[14:48:07] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[14:48:07] [Worker-Main-4/INFO]: Preparing spawn area: 83%
[14:48:08] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[14:48:08] [Worker-Main-4/INFO]: Preparing spawn area: 84%
[14:48:09] [Worker-Main-3/INFO]: Preparing spawn area: 84%
[14:48:09] [Worker-Main-3/INFO]: Preparing spawn area: 84%
[14:48:10] [Worker-Main-4/INFO]: Preparing spawn area: 85%
[14:48:10] [Worker-Main-3/INFO]: Preparing spawn area: 86%
[14:48:11] [Worker-Main-4/INFO]: Preparing spawn area: 86%
[14:48:11] [Worker-Main-3/INFO]: Preparing spawn area: 86%
[14:48:12] [Worker-Main-4/INFO]: Preparing spawn area: 87%
[14:48:12] [Worker-Main-3/INFO]: Preparing spawn area: 87%
[14:48:13] [Worker-Main-3/INFO]: Preparing spawn area: 88%
[14:48:13] [Worker-Main-4/INFO]: Preparing spawn area: 89%
[14:48:14] [Worker-Main-4/INFO]: Preparing spawn area: 90%
[14:48:14] [Worker-Main-3/INFO]: Preparing spawn area: 91%
[14:48:15] [Worker-Main-4/INFO]: Preparing spawn area: 91%
[14:48:15] [Worker-Main-3/INFO]: Preparing spawn area: 92%
[14:48:16] [Worker-Main-3/INFO]: Preparing spawn area: 92%
[14:48:16] [Worker-Main-3/INFO]: Preparing spawn area: 93%
[14:48:17] [Worker-Main-4/INFO]: Preparing spawn area: 94%
[14:48:17] [Worker-Main-4/INFO]: Preparing spawn area: 95%
[14:48:18] [Worker-Main-4/INFO]: Preparing spawn area: 96%
[14:48:18] [Worker-Main-4/INFO]: Preparing spawn area: 97%
[14:48:19] [Worker-Main-3/INFO]: Preparing spawn area: 97%
[14:48:19] [Worker-Main-3/INFO]: Preparing spawn area: 98%
[14:48:20] [Worker-Main-3/INFO]: Preparing spawn area: 98%
[14:48:20] [Server thread/INFO]: Time elapsed: 50962 ms
[14:48:20] [Server thread/INFO]: Done (51.331s)! For help, type "help"
[14:48:20] [Server thread/INFO]: Starting GS4 status listener
[14:48:20] [Server thread/INFO]: Thread Query Listener started
[14:48:20] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
[14:48:20] [Server thread/INFO]: JMX monitoring enabled
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
                                            [text:protected] => [14:46:59] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:46:59] [main/INFO]:
                        )

                    [counter:protected] => 2
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
                                            [text:protected] => [14:46:59] [main/INFO]: Loading Minecraft 1.18.2 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:46:59] [main/INFO]:
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
                                            [text:protected] => [14:46:59] [main/INFO]: Loading 34 mods:
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric 0.48.0+1.18.2
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-api-base 0.4.4+d7c144a860 via fabric
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-api-lookup-api-v1 1.5.7+d7c144a860 via fabric
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-biome-api-v1 8.0.3+801ec85b60 via fabric
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-command-api-v1 1.1.9+d7c144a860 via fabric
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-commands-v0 0.2.8+b4f4f6cd60 via fabric
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-containers-v0 0.1.21+d7c144a860 via fabric
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-content-registries-v0 3.0.2+d82b939260 via fabric
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-crash-report-info-v1 0.1.11+3ac43d9560 via fabric
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-dimensions-v1 2.1.17+2540745460 via fabric
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-entity-events-v1 1.4.8+d7c144a860 via fabric
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-events-interaction-v0 0.4.19+d7c144a860 via fabric
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-events-lifecycle-v0 0.2.13+d7c144a860 via fabric
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-game-rule-api-v1 1.0.13+d7c144a860 via fabric
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-item-api-v1 1.3.3+691a79b560 via fabric
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-item-groups-v0 0.3.10+3ac43d9560 via fabric
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-lifecycle-events-v1 2.0.2+2540745460 via fabric
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-loot-tables-v1 1.0.11+d7c144a860 via fabric
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-mining-level-api-v1 2.0.4+d1027f7d60 via fabric
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-networking-api-v1 1.0.21+d882b91560 via fabric
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-networking-v0 0.3.8+b4f4f6cd60 via fabric
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-object-builder-api-v1 2.0.3+40c91ec860 via fabric
                                            [number:protected] => 24
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-particles-v1 0.2.12+526dc1ac60 via fabric
                                            [number:protected] => 25
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-registry-sync-v0 0.9.8+0d9ab37260 via fabric
                                            [number:protected] => 26
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-rendering-data-attachment-v1 0.3.7+d7c144a860 via fabric
                                            [number:protected] => 27
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-rendering-fluids-v1 2.0.2+54e5b2ec60 via fabric
                                            [number:protected] => 28
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-resource-conditions-api-v1 2.0.2+d1027f7d60 via fabric
                                            [number:protected] => 29
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-resource-loader-v0 0.4.18+2de5574560 via fabric
                                            [number:protected] => 30
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-screen-handler-api-v1 1.1.14+40c91ec860 via fabric
                                            [number:protected] => 31
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-transfer-api-v1 1.5.14+cca23f9360 via fabric
                                            [number:protected] => 32
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabric-transitive-access-wideners-v1 1.0.0+40c91ec860 via fabric
                                            [number:protected] => 33
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabricloader 0.13.3
                                            [number:protected] => 34
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- java 17
                                            [number:protected] => 35
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- minecraft 1.18.2
                                            [number:protected] => 36
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:46:59] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Java version
                    [value:protected] => 17
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[0]->getMessage());

        $this->assertEquals("Fabric loader version: 0.13.3", $analysis[1]->getMessage());

        $this->assertEquals("Java version: 17", $analysis[2]->getMessage());

    }
}