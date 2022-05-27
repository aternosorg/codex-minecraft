<?php

class Fabric1181Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-1181.log");
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
                                    [text:protected] => [01:59:25] [main/INFO]: Loading Minecraft 1.18.1 with Fabric Loader 0.13.3
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:25] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:25] [main/INFO]: Loading 3 mods:
                                    [number:protected] => 2
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabricloader 0.13.3
                                    [number:protected] => 3
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- java 17
                                    [number:protected] => 4
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- minecraft 1.18.1
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:25] [main/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:25] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:25] [main/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [main/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [main/WARN]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [main/WARN]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [main/WARN]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [main/WARN]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [main/WARN]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [main/INFO]: Reloading ResourceManager: Default
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [main/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:30] [Worker-Main-3/INFO]: Loaded 7 recipes
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:30] [Worker-Main-3/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:31] [Worker-Main-3/INFO]: Loaded 1141 advancements
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:31] [Worker-Main-3/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:33] [Server thread/INFO]: Starting minecraft server version 1.18.1
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:33] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:33] [Server thread/INFO]: Loading properties
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:33] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:33] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:33] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:33] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:33] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:33] [Server thread/INFO]: Starting Minecraft server on *:52194
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:33] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:33] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:33] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:33] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:33] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:39] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:39] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:41] [Worker-Main-4/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:41] [Worker-Main-4/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:41] [Worker-Main-4/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:41] [Worker-Main-4/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:41] [Worker-Main-4/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:42] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:42] [Worker-Main-3/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:42] [Worker-Main-4/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:42] [Worker-Main-4/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:43] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:43] [Worker-Main-3/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:43] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:43] [Worker-Main-3/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:44] [Worker-Main-4/INFO]: Preparing spawn area: 2%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:44] [Worker-Main-4/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:44] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:44] [Worker-Main-3/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:45] [Worker-Main-3/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:45] [Worker-Main-3/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:46] [Worker-Main-4/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:46] [Worker-Main-4/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:46] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:46] [Worker-Main-3/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:46] [Worker-Main-4/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:46] [Worker-Main-4/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:47] [Worker-Main-4/INFO]: Preparing spawn area: 6%
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:47] [Worker-Main-4/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:47] [Worker-Main-4/INFO]: Preparing spawn area: 7%
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:47] [Worker-Main-4/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:48] [Worker-Main-3/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:48] [Worker-Main-3/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:48] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:48] [Worker-Main-3/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:49] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:49] [Worker-Main-3/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:49] [Worker-Main-4/INFO]: Preparing spawn area: 11%
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:49] [Worker-Main-4/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:50] [Worker-Main-3/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:50] [Worker-Main-3/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:50] [Worker-Main-3/INFO]: Preparing spawn area: 14%
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:50] [Worker-Main-3/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:51] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:51] [Worker-Main-3/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:51] [Worker-Main-4/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:51] [Worker-Main-4/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:52] [Worker-Main-4/INFO]: Preparing spawn area: 17%
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:52] [Worker-Main-4/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:52] [Worker-Main-4/INFO]: Preparing spawn area: 18%
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:52] [Worker-Main-4/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:53] [Worker-Main-3/INFO]: Preparing spawn area: 19%
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:53] [Worker-Main-3/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:53] [Worker-Main-3/INFO]: Preparing spawn area: 21%
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:53] [Worker-Main-3/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:54] [Worker-Main-4/INFO]: Preparing spawn area: 22%
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:54] [Worker-Main-4/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:54] [Worker-Main-3/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:54] [Worker-Main-3/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:55] [Worker-Main-3/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:55] [Worker-Main-3/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:55] [Worker-Main-3/INFO]: Preparing spawn area: 26%
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:55] [Worker-Main-3/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:56] [Worker-Main-4/INFO]: Preparing spawn area: 27%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:56] [Worker-Main-4/INFO]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:56] [Worker-Main-4/INFO]: Preparing spawn area: 29%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:56] [Worker-Main-4/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:57] [Worker-Main-4/INFO]: Preparing spawn area: 31%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:57] [Worker-Main-4/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:57] [Worker-Main-4/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:57] [Worker-Main-4/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:58] [Worker-Main-4/INFO]: Preparing spawn area: 34%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:58] [Worker-Main-4/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:58] [Worker-Main-3/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:58] [Worker-Main-3/INFO]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:59] [Worker-Main-3/INFO]: Preparing spawn area: 37%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:59] [Worker-Main-3/INFO]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [01:59:59] [Worker-Main-3/INFO]: Preparing spawn area: 38%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [01:59:59] [Worker-Main-3/INFO]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:00] [Worker-Main-3/INFO]: Preparing spawn area: 39%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:00] [Worker-Main-3/INFO]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:00] [Worker-Main-3/INFO]: Preparing spawn area: 41%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:00] [Worker-Main-3/INFO]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:01] [Worker-Main-4/INFO]: Preparing spawn area: 42%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:01] [Worker-Main-4/INFO]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:01] [Worker-Main-3/INFO]: Preparing spawn area: 43%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:01] [Worker-Main-3/INFO]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:02] [Worker-Main-3/INFO]: Preparing spawn area: 45%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:02] [Worker-Main-3/INFO]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:02] [Worker-Main-3/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:02] [Worker-Main-3/INFO]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:03] [Worker-Main-3/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:03] [Worker-Main-3/INFO]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:03] [Worker-Main-3/INFO]: Preparing spawn area: 50%
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:03] [Worker-Main-3/INFO]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:04] [Worker-Main-4/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:04] [Worker-Main-4/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:04] [Worker-Main-4/INFO]: Preparing spawn area: 54%
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:04] [Worker-Main-4/INFO]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:05] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:05] [Worker-Main-3/INFO]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:05] [Worker-Main-3/INFO]: Preparing spawn area: 57%
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:05] [Worker-Main-3/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:06] [Worker-Main-4/INFO]: Preparing spawn area: 58%
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:06] [Worker-Main-4/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:06] [Worker-Main-4/INFO]: Preparing spawn area: 59%
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:06] [Worker-Main-4/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:07] [Worker-Main-4/INFO]: Preparing spawn area: 62%
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:07] [Worker-Main-4/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:07] [Worker-Main-4/INFO]: Preparing spawn area: 63%
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:07] [Worker-Main-4/INFO]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:08] [Worker-Main-3/INFO]: Preparing spawn area: 65%
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:08] [Worker-Main-3/INFO]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:08] [Worker-Main-4/INFO]: Preparing spawn area: 67%
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:08] [Worker-Main-4/INFO]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:09] [Worker-Main-4/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:09] [Worker-Main-4/INFO]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:09] [Worker-Main-4/INFO]: Preparing spawn area: 70%
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:09] [Worker-Main-4/INFO]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:10] [Worker-Main-3/INFO]: Preparing spawn area: 71%
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:10] [Worker-Main-3/INFO]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:10] [Worker-Main-4/INFO]: Preparing spawn area: 73%
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:10] [Worker-Main-4/INFO]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:11] [Worker-Main-4/INFO]: Preparing spawn area: 74%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:11] [Worker-Main-4/INFO]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:11] [Worker-Main-4/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:11] [Worker-Main-4/INFO]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:12] [Worker-Main-3/INFO]: Preparing spawn area: 78%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:12] [Worker-Main-3/INFO]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:12] [Worker-Main-3/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:12] [Worker-Main-3/INFO]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:13] [Worker-Main-3/INFO]: Preparing spawn area: 82%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:13] [Worker-Main-3/INFO]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:13] [Worker-Main-4/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:13] [Worker-Main-4/INFO]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:14] [Worker-Main-3/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:14] [Worker-Main-3/INFO]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:14] [Worker-Main-3/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:14] [Worker-Main-3/INFO]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:15] [Worker-Main-4/INFO]: Preparing spawn area: 87%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:15] [Worker-Main-4/INFO]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:15] [Worker-Main-4/INFO]: Preparing spawn area: 89%
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:15] [Worker-Main-4/INFO]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:16] [Worker-Main-4/INFO]: Preparing spawn area: 91%
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:16] [Worker-Main-4/INFO]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:16] [Worker-Main-4/INFO]: Preparing spawn area: 93%
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:16] [Worker-Main-4/INFO]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:17] [Worker-Main-4/INFO]: Preparing spawn area: 95%
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:17] [Worker-Main-4/INFO]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:17] [Worker-Main-3/INFO]: Preparing spawn area: 97%
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:17] [Worker-Main-3/INFO]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:18] [Worker-Main-4/INFO]: Preparing spawn area: 99%
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:18] [Worker-Main-4/INFO]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:18] [Server thread/INFO]: Time elapsed: 38632 ms
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:18] [Server thread/INFO]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:18] [Server thread/INFO]: Done (44.757s)! For help, type "help"
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:18] [Server thread/INFO]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:18] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:18] [Server thread/INFO]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:18] [Server thread/INFO]: Thread Query Listener started
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:18] [Server thread/INFO]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:18] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:18] [Query Listener #1/INFO]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:00:18] [Server thread/INFO]: JMX monitoring enabled
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:00:18] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 104
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [01:59:25] [main/INFO]: Loading Minecraft 1.18.1 with Fabric Loader 0.13.3
[01:59:25] [main/INFO]: Loading 3 mods:
	- fabricloader 0.13.3
	- java 17
	- minecraft 1.18.1
[01:59:25] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
[01:59:30] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[01:59:30] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[01:59:30] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[01:59:30] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[01:59:30] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[01:59:30] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[01:59:30] [main/INFO]: Reloading ResourceManager: Default
[01:59:30] [Worker-Main-3/INFO]: Loaded 7 recipes
[01:59:31] [Worker-Main-3/INFO]: Loaded 1141 advancements
[01:59:33] [Server thread/INFO]: Starting minecraft server version 1.18.1
[01:59:33] [Server thread/INFO]: Loading properties
[01:59:33] [Server thread/INFO]: Default game type: SURVIVAL
[01:59:33] [Server thread/INFO]: Generating keypair
[01:59:33] [Server thread/INFO]: Starting Minecraft server on *:52194
[01:59:33] [Server thread/INFO]: Using epoll channel type
[01:59:33] [Server thread/INFO]: Preparing level "world"
[01:59:39] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[01:59:41] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[01:59:42] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[01:59:42] [Worker-Main-4/INFO]: Preparing spawn area: 0%
[01:59:43] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[01:59:43] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[01:59:44] [Worker-Main-4/INFO]: Preparing spawn area: 2%
[01:59:44] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[01:59:45] [Worker-Main-3/INFO]: Preparing spawn area: 4%
[01:59:46] [Worker-Main-4/INFO]: Preparing spawn area: 5%
[01:59:46] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[01:59:46] [Worker-Main-4/INFO]: Preparing spawn area: 5%
[01:59:47] [Worker-Main-4/INFO]: Preparing spawn area: 6%
[01:59:47] [Worker-Main-4/INFO]: Preparing spawn area: 7%
[01:59:48] [Worker-Main-3/INFO]: Preparing spawn area: 8%
[01:59:48] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[01:59:49] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[01:59:49] [Worker-Main-4/INFO]: Preparing spawn area: 11%
[01:59:50] [Worker-Main-3/INFO]: Preparing spawn area: 12%
[01:59:50] [Worker-Main-3/INFO]: Preparing spawn area: 14%
[01:59:51] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[01:59:51] [Worker-Main-4/INFO]: Preparing spawn area: 16%
[01:59:52] [Worker-Main-4/INFO]: Preparing spawn area: 17%
[01:59:52] [Worker-Main-4/INFO]: Preparing spawn area: 18%
[01:59:53] [Worker-Main-3/INFO]: Preparing spawn area: 19%
[01:59:53] [Worker-Main-3/INFO]: Preparing spawn area: 21%
[01:59:54] [Worker-Main-4/INFO]: Preparing spawn area: 22%
[01:59:54] [Worker-Main-3/INFO]: Preparing spawn area: 23%
[01:59:55] [Worker-Main-3/INFO]: Preparing spawn area: 24%
[01:59:55] [Worker-Main-3/INFO]: Preparing spawn area: 26%
[01:59:56] [Worker-Main-4/INFO]: Preparing spawn area: 27%
[01:59:56] [Worker-Main-4/INFO]: Preparing spawn area: 29%
[01:59:57] [Worker-Main-4/INFO]: Preparing spawn area: 31%
[01:59:57] [Worker-Main-4/INFO]: Preparing spawn area: 32%
[01:59:58] [Worker-Main-4/INFO]: Preparing spawn area: 34%
[01:59:58] [Worker-Main-3/INFO]: Preparing spawn area: 36%
[01:59:59] [Worker-Main-3/INFO]: Preparing spawn area: 37%
[01:59:59] [Worker-Main-3/INFO]: Preparing spawn area: 38%
[02:00:00] [Worker-Main-3/INFO]: Preparing spawn area: 39%
[02:00:00] [Worker-Main-3/INFO]: Preparing spawn area: 41%
[02:00:01] [Worker-Main-4/INFO]: Preparing spawn area: 42%
[02:00:01] [Worker-Main-3/INFO]: Preparing spawn area: 43%
[02:00:02] [Worker-Main-3/INFO]: Preparing spawn area: 45%
[02:00:02] [Worker-Main-3/INFO]: Preparing spawn area: 47%
[02:00:03] [Worker-Main-3/INFO]: Preparing spawn area: 48%
[02:00:03] [Worker-Main-3/INFO]: Preparing spawn area: 50%
[02:00:04] [Worker-Main-4/INFO]: Preparing spawn area: 51%
[02:00:04] [Worker-Main-4/INFO]: Preparing spawn area: 54%
[02:00:05] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[02:00:05] [Worker-Main-3/INFO]: Preparing spawn area: 57%
[02:00:06] [Worker-Main-4/INFO]: Preparing spawn area: 58%
[02:00:06] [Worker-Main-4/INFO]: Preparing spawn area: 59%
[02:00:07] [Worker-Main-4/INFO]: Preparing spawn area: 62%
[02:00:07] [Worker-Main-4/INFO]: Preparing spawn area: 63%
[02:00:08] [Worker-Main-3/INFO]: Preparing spawn area: 65%
[02:00:08] [Worker-Main-4/INFO]: Preparing spawn area: 67%
[02:00:09] [Worker-Main-4/INFO]: Preparing spawn area: 68%
[02:00:09] [Worker-Main-4/INFO]: Preparing spawn area: 70%
[02:00:10] [Worker-Main-3/INFO]: Preparing spawn area: 71%
[02:00:10] [Worker-Main-4/INFO]: Preparing spawn area: 73%
[02:00:11] [Worker-Main-4/INFO]: Preparing spawn area: 74%
[02:00:11] [Worker-Main-4/INFO]: Preparing spawn area: 76%
[02:00:12] [Worker-Main-3/INFO]: Preparing spawn area: 78%
[02:00:12] [Worker-Main-3/INFO]: Preparing spawn area: 79%
[02:00:13] [Worker-Main-3/INFO]: Preparing spawn area: 82%
[02:00:13] [Worker-Main-4/INFO]: Preparing spawn area: 83%
[02:00:14] [Worker-Main-3/INFO]: Preparing spawn area: 84%
[02:00:14] [Worker-Main-3/INFO]: Preparing spawn area: 85%
[02:00:15] [Worker-Main-4/INFO]: Preparing spawn area: 87%
[02:00:15] [Worker-Main-4/INFO]: Preparing spawn area: 89%
[02:00:16] [Worker-Main-4/INFO]: Preparing spawn area: 91%
[02:00:16] [Worker-Main-4/INFO]: Preparing spawn area: 93%
[02:00:17] [Worker-Main-4/INFO]: Preparing spawn area: 95%
[02:00:17] [Worker-Main-3/INFO]: Preparing spawn area: 97%
[02:00:18] [Worker-Main-4/INFO]: Preparing spawn area: 99%
[02:00:18] [Server thread/INFO]: Time elapsed: 38632 ms
[02:00:18] [Server thread/INFO]: Done (44.757s)! For help, type "help"
[02:00:18] [Server thread/INFO]: Starting GS4 status listener
[02:00:18] [Server thread/INFO]: Thread Query Listener started
[02:00:18] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
[02:00:18] [Server thread/INFO]: JMX monitoring enabled
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
                                            [text:protected] => [01:59:25] [main/INFO]: Loading Minecraft 1.18.1 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [01:59:25] [main/INFO]:
                        )

                    [counter:protected] => 2
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [01:59:25] [main/INFO]: Loading Minecraft 1.18.1 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [01:59:25] [main/INFO]:
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
                                            [text:protected] => [01:59:25] [main/INFO]: Loading 3 mods:
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabricloader 0.13.3
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- java 17
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- minecraft 1.18.1
                                            [number:protected] => 5
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [01:59:25] [main/INFO]:
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
                                            [text:protected] => [01:59:33] [Server thread/INFO]: Starting minecraft server version 1.18.1
                                            [number:protected] => 16
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [01:59:33] [Server thread/INFO]:
                        )

                    [counter:protected] => 13
                    [label:protected] => Environment
                    [value:protected] => Server
                )

        )

    [iterator:protected] => 3
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.1", $analysis[0]->getMessage());

        $this->assertEquals("Fabric loader version: 0.13.3", $analysis[1]->getMessage());

        $this->assertEquals("Java version: 17", $analysis[2]->getMessage());

        $this->assertEquals("Environment: Server", $analysis[3]->getMessage());

    }
}