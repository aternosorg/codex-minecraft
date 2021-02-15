<?php

class FabricJava8Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-java8.log");
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
                    [prefix:protected] => [13:31:46] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:31:46] [main/INFO]: Loading for game Minecraft 1.16.5
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:31:49] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:31:49] [main/INFO]: [FabricLoader] Loading 3 mods: minecraft@1.16.5, java@8, fabricloader@0.11.1
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:31:49] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:31:49] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.2 Source=file:/server/fabric.jar Service=Knot/Fabric Env=SERVER
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:40] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:40] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:42] [main/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:42] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:42] [main/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:42] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:42] [main/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:42] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:42] [main/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:42] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:42] [main/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:42] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:42] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:42] [main/INFO]: Reloading ResourceManager: Default
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:46] [Worker-Main-2/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:46] [Worker-Main-2/INFO]: Loaded 7 recipes
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:32:48] [Worker-Main-2/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:32:48] [Worker-Main-2/INFO]: Loaded 927 advancements
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:01] [Server thread/INFO]: Starting minecraft server version 1.16.5
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:01] [Server thread/INFO]: Loading properties
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:01] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:01] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:03] [Server thread/INFO]: Starting Minecraft server on *:29101
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:03] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:04] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:43] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:43] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:44] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:44] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:44] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:44] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:44] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:44] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:45] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:45] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:46] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:46] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:47] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:47] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:47] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:47] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:48] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:48] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:48] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:48] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:50] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:50] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:51] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:51] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:51] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:51] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:52] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:52] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:52] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:52] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:52] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:52] [Worker-Main-3/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:53] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:53] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:53] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:53] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:54] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:54] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:55] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:55] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:55] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:55] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:55] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:55] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:56] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:56] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:56] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:56] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:57] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:57] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:57] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:57] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:58] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:58] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:58] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:58] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:59] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:33:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:33:59] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:00] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:00] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:00] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:00] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:02] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:02] [Worker-Main-3/INFO]: Preparing spawn area: 1%
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:02] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:02] [Worker-Main-3/INFO]: Preparing spawn area: 2%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:02] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:02] [Worker-Main-3/INFO]: Preparing spawn area: 2%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:03] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:03] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:03] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:03] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:03] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:03] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:04] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:04] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:05] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:05] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:05] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:05] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:05] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:05] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:08] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:08] [Worker-Main-3/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:08] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:08] [Worker-Main-3/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:09] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:09] [Worker-Main-3/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:10] [Worker-Main-3/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:10] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:10] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:11] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:11] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:11] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:11] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:12] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:12] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:12] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:12] [Worker-Main-3/INFO]: Preparing spawn area: 5%
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:13] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:13] [Worker-Main-3/INFO]: Preparing spawn area: 6%
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:13] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:13] [Worker-Main-3/INFO]: Preparing spawn area: 6%
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:14] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:14] [Worker-Main-3/INFO]: Preparing spawn area: 7%
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:15] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:15] [Worker-Main-3/INFO]: Preparing spawn area: 7%
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:15] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:15] [Worker-Main-3/INFO]: Preparing spawn area: 7%
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:15] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:15] [Worker-Main-3/INFO]: Preparing spawn area: 7%
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:16] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:16] [Worker-Main-3/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:16] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:16] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:17] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:17] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:17] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:17] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:18] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:18] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:18] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:18] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:19] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:19] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:19] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:19] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:20] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:20] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:20] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:20] [Worker-Main-3/INFO]: Preparing spawn area: 9%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:21] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:21] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:21] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:21] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:22] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:22] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:23] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:23] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:23] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:23] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:23] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:23] [Worker-Main-3/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:24] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:24] [Worker-Main-3/INFO]: Preparing spawn area: 11%
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:24] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:24] [Worker-Main-3/INFO]: Preparing spawn area: 11%
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:25] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:25] [Worker-Main-3/INFO]: Preparing spawn area: 13%
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:25] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:25] [Worker-Main-3/INFO]: Preparing spawn area: 13%
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:26] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:26] [Worker-Main-3/INFO]: Preparing spawn area: 13%
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:26] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:26] [Worker-Main-3/INFO]: Preparing spawn area: 13%
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:27] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:27] [Worker-Main-3/INFO]: Preparing spawn area: 14%
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:27] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:27] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:28] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:28] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:28] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:28] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:29] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:29] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:30] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:30] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:30] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:30] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:30] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:30] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:31] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:31] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:31] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:31] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:32] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:32] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:32] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:32] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:33] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:33] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:33] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:33] [Worker-Main-3/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:34] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:34] [Worker-Main-3/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:34] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:34] [Worker-Main-3/INFO]: Preparing spawn area: 17%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:35] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:35] [Worker-Main-3/INFO]: Preparing spawn area: 17%
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:35] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:35] [Worker-Main-3/INFO]: Preparing spawn area: 18%
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:36] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:36] [Worker-Main-3/INFO]: Preparing spawn area: 18%
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:37] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:37] [Worker-Main-3/INFO]: Preparing spawn area: 18%
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:37] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:37] [Worker-Main-3/INFO]: Preparing spawn area: 18%
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:37] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:37] [Worker-Main-3/INFO]: Preparing spawn area: 18%
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:38] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:38] [Worker-Main-3/INFO]: Preparing spawn area: 19%
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:39] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:39] [Worker-Main-3/INFO]: Preparing spawn area: 19%
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:39] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:39] [Worker-Main-3/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:39] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:39] [Worker-Main-3/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:40] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:40] [Worker-Main-3/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:41] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:41] [Worker-Main-3/INFO]: Preparing spawn area: 21%
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:41] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:41] [Worker-Main-3/INFO]: Preparing spawn area: 21%
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:41] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:41] [Worker-Main-3/INFO]: Preparing spawn area: 21%
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:42] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:42] [Worker-Main-3/INFO]: Preparing spawn area: 22%
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:43] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:43] [Worker-Main-3/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:43] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:43] [Worker-Main-3/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:43] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:43] [Worker-Main-3/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:44] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:44] [Worker-Main-3/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:44] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:44] [Worker-Main-3/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:45] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:45] [Worker-Main-3/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:45] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:45] [Worker-Main-3/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:46] [Worker-Main-3/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:46] [Worker-Main-3/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:47] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:47] [Worker-Main-3/INFO]: Preparing spawn area: 25%
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:47] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:47] [Worker-Main-3/INFO]: Preparing spawn area: 25%
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:48] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:48] [Worker-Main-3/INFO]: Preparing spawn area: 25%
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:48] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:48] [Worker-Main-3/INFO]: Preparing spawn area: 25%
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:49] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:49] [Worker-Main-3/INFO]: Preparing spawn area: 26%
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:49] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:49] [Worker-Main-3/INFO]: Preparing spawn area: 26%
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:50] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:50] [Worker-Main-3/INFO]: Preparing spawn area: 26%
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:50] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:50] [Worker-Main-3/INFO]: Preparing spawn area: 27%
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:51] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:51] [Worker-Main-3/INFO]: Preparing spawn area: 27%
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:51] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:51] [Worker-Main-3/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:52] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:52] [Worker-Main-3/INFO]: Preparing spawn area: 29%
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:52] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:52] [Worker-Main-3/INFO]: Preparing spawn area: 30%
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:53] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:53] [Worker-Main-3/INFO]: Preparing spawn area: 30%
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:53] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:53] [Worker-Main-3/INFO]: Preparing spawn area: 30%
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:54] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:54] [Worker-Main-3/INFO]: Preparing spawn area: 31%
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:54] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:54] [Worker-Main-3/INFO]: Preparing spawn area: 31%
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:55] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:55] [Worker-Main-3/INFO]: Preparing spawn area: 31%
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:55] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:55] [Worker-Main-3/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:56] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:56] [Worker-Main-3/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:56] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:56] [Worker-Main-3/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:57] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:57] [Worker-Main-3/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:57] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:57] [Worker-Main-3/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:58] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:58] [Worker-Main-3/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:59] [Worker-Main-3/INFO]: Preparing spawn area: 33%
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:59] [Worker-Main-3/INFO]: Preparing spawn area: 33%
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:34:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:34:59] [Worker-Main-3/INFO]: Preparing spawn area: 33%
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:00] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:00] [Worker-Main-3/INFO]: Preparing spawn area: 34%
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:00] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:00] [Worker-Main-3/INFO]: Preparing spawn area: 34%
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:01] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:01] [Worker-Main-3/INFO]: Preparing spawn area: 34%
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:01] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:01] [Worker-Main-3/INFO]: Preparing spawn area: 35%
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:02] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:02] [Worker-Main-3/INFO]: Preparing spawn area: 35%
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:03] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:03] [Worker-Main-3/INFO]: Preparing spawn area: 35%
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:03] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:03] [Worker-Main-3/INFO]: Preparing spawn area: 35%
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:04] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:04] [Worker-Main-3/INFO]: Preparing spawn area: 37%
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:04] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:04] [Worker-Main-3/INFO]: Preparing spawn area: 37%
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:04] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:04] [Worker-Main-3/INFO]: Preparing spawn area: 37%
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:05] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:05] [Worker-Main-3/INFO]: Preparing spawn area: 37%
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:05] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:05] [Worker-Main-3/INFO]: Preparing spawn area: 37%
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:06] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:06] [Worker-Main-3/INFO]: Preparing spawn area: 38%
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:06] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:06] [Worker-Main-3/INFO]: Preparing spawn area: 38%
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:07] [Worker-Main-3/INFO]: Preparing spawn area: 38%
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:07] [Worker-Main-3/INFO]: Preparing spawn area: 39%
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:08] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:08] [Worker-Main-3/INFO]: Preparing spawn area: 39%
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:09] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:09] [Worker-Main-3/INFO]: Preparing spawn area: 39%
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:09] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:09] [Worker-Main-3/INFO]: Preparing spawn area: 39%
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:10] [Worker-Main-3/INFO]: Preparing spawn area: 41%
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:10] [Worker-Main-3/INFO]: Preparing spawn area: 41%
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:10] [Worker-Main-3/INFO]: Preparing spawn area: 42%
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:11] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:11] [Worker-Main-3/INFO]: Preparing spawn area: 42%
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:11] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:11] [Worker-Main-3/INFO]: Preparing spawn area: 42%
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:12] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:12] [Worker-Main-3/INFO]: Preparing spawn area: 42%
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:12] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:12] [Worker-Main-3/INFO]: Preparing spawn area: 42%
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:13] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:13] [Worker-Main-3/INFO]: Preparing spawn area: 42%
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:13] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:13] [Worker-Main-3/INFO]: Preparing spawn area: 43%
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:14] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:14] [Worker-Main-3/INFO]: Preparing spawn area: 43%
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:14] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:14] [Worker-Main-3/INFO]: Preparing spawn area: 43%
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:15] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:15] [Worker-Main-3/INFO]: Preparing spawn area: 43%
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:15] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:15] [Worker-Main-3/INFO]: Preparing spawn area: 45%
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:16] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:16] [Worker-Main-3/INFO]: Preparing spawn area: 45%
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:16] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:16] [Worker-Main-3/INFO]: Preparing spawn area: 45%
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:17] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:17] [Worker-Main-3/INFO]: Preparing spawn area: 46%
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:18] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:18] [Worker-Main-3/INFO]: Preparing spawn area: 46%
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:18] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:18] [Worker-Main-3/INFO]: Preparing spawn area: 46%
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:18] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:18] [Worker-Main-3/INFO]: Preparing spawn area: 46%
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:19] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:19] [Worker-Main-3/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:19] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:19] [Worker-Main-3/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:20] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:20] [Worker-Main-3/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:20] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:20] [Worker-Main-3/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:21] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:21] [Worker-Main-3/INFO]: Preparing spawn area: 47%
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:21] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:21] [Worker-Main-3/INFO]: Preparing spawn area: 49%
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:22] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:22] [Worker-Main-3/INFO]: Preparing spawn area: 49%
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:22] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:22] [Worker-Main-3/INFO]: Preparing spawn area: 50%
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:23] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:23] [Worker-Main-3/INFO]: Preparing spawn area: 50%
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:23] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:23] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:24] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:24] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:24] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:24] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:26] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:26] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:27] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:27] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:27] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:27] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:28] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:28] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:28] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:28] [Worker-Main-3/INFO]: Preparing spawn area: 51%
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:28] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:28] [Worker-Main-3/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:29] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:29] [Worker-Main-3/INFO]: Preparing spawn area: 54%
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:29] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:29] [Worker-Main-3/INFO]: Preparing spawn area: 54%
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:30] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:30] [Worker-Main-3/INFO]: Preparing spawn area: 54%
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:30] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:30] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:31] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:31] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:31] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:31] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:32] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:32] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:33] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:33] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:33] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:33] [Worker-Main-3/INFO]: Preparing spawn area: 55%
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:33] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:33] [Worker-Main-3/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:34] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:34] [Worker-Main-3/INFO]: Preparing spawn area: 57%
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:35] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:35] [Worker-Main-3/INFO]: Preparing spawn area: 57%
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:35] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:35] [Worker-Main-3/INFO]: Preparing spawn area: 57%
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:35] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:35] [Worker-Main-3/INFO]: Preparing spawn area: 58%
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:36] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:36] [Worker-Main-3/INFO]: Preparing spawn area: 58%
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:36] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:36] [Worker-Main-3/INFO]: Preparing spawn area: 58%
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:37] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:37] [Worker-Main-3/INFO]: Preparing spawn area: 58%
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:37] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:37] [Worker-Main-3/INFO]: Preparing spawn area: 59%
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:38] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:38] [Worker-Main-3/INFO]: Preparing spawn area: 59%
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:38] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:38] [Worker-Main-3/INFO]: Preparing spawn area: 59%
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:39] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:39] [Worker-Main-3/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:39] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:39] [Worker-Main-3/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:40] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:40] [Worker-Main-3/INFO]: Preparing spawn area: 62%
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:40] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:40] [Worker-Main-3/INFO]: Preparing spawn area: 62%
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:41] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:41] [Worker-Main-3/INFO]: Preparing spawn area: 62%
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:41] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:41] [Worker-Main-3/INFO]: Preparing spawn area: 63%
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:42] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:42] [Worker-Main-3/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:42] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:42] [Worker-Main-3/INFO]: Preparing spawn area: 65%
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:43] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:43] [Worker-Main-3/INFO]: Preparing spawn area: 65%
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:43] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:43] [Worker-Main-3/INFO]: Preparing spawn area: 66%
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:44] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:44] [Worker-Main-3/INFO]: Preparing spawn area: 67%
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 67%
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 67%
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 67%
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:46] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:47] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:47] [Worker-Main-3/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:47] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:47] [Worker-Main-3/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:48] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:48] [Worker-Main-3/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:48] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:48] [Worker-Main-3/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:49] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:49] [Worker-Main-3/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:49] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:49] [Worker-Main-3/INFO]: Preparing spawn area: 69%
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:50] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:50] [Worker-Main-3/INFO]: Preparing spawn area: 70%
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:50] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:50] [Worker-Main-3/INFO]: Preparing spawn area: 70%
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:51] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:51] [Worker-Main-3/INFO]: Preparing spawn area: 71%
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:52] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:52] [Worker-Main-3/INFO]: Preparing spawn area: 71%
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:52] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:52] [Worker-Main-3/INFO]: Preparing spawn area: 71%
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:53] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:53] [Worker-Main-3/INFO]: Preparing spawn area: 71%
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:53] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:53] [Worker-Main-3/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:53] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:53] [Worker-Main-3/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:54] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:54] [Worker-Main-3/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:54] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:54] [Worker-Main-3/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:55] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:55] [Worker-Main-3/INFO]: Preparing spawn area: 73%
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:55] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:55] [Worker-Main-3/INFO]: Preparing spawn area: 74%
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:56] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:56] [Worker-Main-3/INFO]: Preparing spawn area: 74%
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:56] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:56] [Worker-Main-3/INFO]: Preparing spawn area: 74%
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:57] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:57] [Worker-Main-3/INFO]: Preparing spawn area: 74%
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:57] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:57] [Worker-Main-3/INFO]: Preparing spawn area: 74%
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:58] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:58] [Worker-Main-3/INFO]: Preparing spawn area: 75%
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:59] [Worker-Main-3/INFO]: Preparing spawn area: 75%
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:59] [Worker-Main-3/INFO]: Preparing spawn area: 75%
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:35:59] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:35:59] [Worker-Main-3/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:00] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:00] [Worker-Main-3/INFO]: Preparing spawn area: 77%
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:00] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:00] [Worker-Main-3/INFO]: Preparing spawn area: 77%
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:01] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:01] [Worker-Main-3/INFO]: Preparing spawn area: 77%
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:01] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:01] [Worker-Main-3/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:02] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:02] [Worker-Main-3/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:02] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:02] [Worker-Main-3/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:03] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:03] [Worker-Main-3/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:04] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:04] [Worker-Main-3/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:04] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:04] [Worker-Main-3/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:04] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:04] [Worker-Main-3/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:05] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:05] [Worker-Main-3/INFO]: Preparing spawn area: 81%
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:06] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:06] [Worker-Main-3/INFO]: Preparing spawn area: 81%
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:06] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:06] [Worker-Main-3/INFO]: Preparing spawn area: 81%
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:07] [Worker-Main-3/INFO]: Preparing spawn area: 82%
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:07] [Worker-Main-3/INFO]: Preparing spawn area: 82%
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:07] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:07] [Worker-Main-3/INFO]: Preparing spawn area: 82%
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:08] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:08] [Worker-Main-3/INFO]: Preparing spawn area: 82%
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:08] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:08] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:09] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:09] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:10] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:10] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:10] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:10] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:11] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:11] [Worker-Main-3/INFO]: Preparing spawn area: 83%
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:11] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:11] [Worker-Main-3/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:12] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:12] [Worker-Main-3/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:12] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:12] [Worker-Main-3/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:13] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:13] [Worker-Main-3/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:13] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:13] [Worker-Main-3/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:14] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:14] [Worker-Main-3/INFO]: Preparing spawn area: 86%
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:14] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:14] [Worker-Main-3/INFO]: Preparing spawn area: 86%
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:15] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:15] [Worker-Main-3/INFO]: Preparing spawn area: 87%
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:15] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:15] [Worker-Main-3/INFO]: Preparing spawn area: 87%
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:16] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:16] [Worker-Main-3/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:17] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:17] [Worker-Main-3/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:17] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:17] [Worker-Main-3/INFO]: Preparing spawn area: 89%
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:17] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:17] [Worker-Main-3/INFO]: Preparing spawn area: 89%
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:18] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:18] [Worker-Main-3/INFO]: Preparing spawn area: 90%
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:18] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:18] [Worker-Main-3/INFO]: Preparing spawn area: 90%
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:19] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:19] [Worker-Main-3/INFO]: Preparing spawn area: 90%
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:19] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:19] [Worker-Main-3/INFO]: Preparing spawn area: 91%
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:20] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:20] [Worker-Main-3/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:20] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:20] [Worker-Main-3/INFO]: Preparing spawn area: 93%
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:21] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:21] [Worker-Main-3/INFO]: Preparing spawn area: 93%
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:21] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:21] [Worker-Main-3/INFO]: Preparing spawn area: 93%
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:22] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:22] [Worker-Main-3/INFO]: Preparing spawn area: 93%
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:22] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:22] [Worker-Main-3/INFO]: Preparing spawn area: 95%
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:23] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:23] [Worker-Main-3/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:24] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:24] [Worker-Main-3/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:24] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:24] [Worker-Main-3/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:24] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:24] [Worker-Main-3/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:25] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:25] [Worker-Main-3/INFO]: Preparing spawn area: 97%
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:26] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:26] [Worker-Main-3/INFO]: Preparing spawn area: 98%
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:26] [Worker-Main-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:26] [Worker-Main-3/INFO]: Preparing spawn area: 99%
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:26] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:26] [Server thread/INFO]: Time elapsed: 163035 ms
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:26] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:26] [Server thread/INFO]: Done (202.341s)! For help, type "help"
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:26] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:26] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:26] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:26] [Server thread/INFO]: Thread Query Listener started
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:36:26] [Query Listener #1/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:36:26] [Query Listener #1/INFO]: Query running on **.**.**.**:9898
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 351
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [13:31:46] [main/INFO]: Loading for game Minecraft 1.16.5
[13:31:49] [main/INFO]: [FabricLoader] Loading 3 mods: minecraft@1.16.5, java@8, fabricloader@0.11.1
[13:31:49] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.2 Source=file:/server/fabric.jar Service=Knot/Fabric Env=SERVER
[13:32:40] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[13:32:42] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[13:32:42] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[13:32:42] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[13:32:42] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[13:32:42] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[13:32:42] [main/INFO]: Reloading ResourceManager: Default
[13:32:46] [Worker-Main-2/INFO]: Loaded 7 recipes
[13:32:48] [Worker-Main-2/INFO]: Loaded 927 advancements
[13:33:01] [Server thread/INFO]: Starting minecraft server version 1.16.5
[13:33:01] [Server thread/INFO]: Loading properties
[13:33:01] [Server thread/INFO]: Default game type: SURVIVAL
[13:33:01] [Server thread/INFO]: Generating keypair
[13:33:03] [Server thread/INFO]: Starting Minecraft server on *:29101
[13:33:03] [Server thread/INFO]: Using epoll channel type
[13:33:04] [Server thread/INFO]: Preparing level "world"
[13:33:43] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[13:33:44] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:44] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:44] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:45] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:46] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:46] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:47] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:47] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:48] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:48] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:50] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:51] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:52] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:52] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:52] [Worker-Main-3/INFO]: Preparing spawn area: 0%
[13:33:53] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:53] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:54] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:55] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:55] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:55] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:56] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:56] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:57] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:57] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:58] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:58] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:59] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:33:59] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:34:00] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:34:00] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:34:02] [Worker-Main-3/INFO]: Preparing spawn area: 1%
[13:34:02] [Worker-Main-3/INFO]: Preparing spawn area: 2%
[13:34:02] [Worker-Main-3/INFO]: Preparing spawn area: 2%
[13:34:03] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:03] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:03] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:04] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:05] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:05] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:05] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:07] [Worker-Main-3/INFO]: Preparing spawn area: 3%
[13:34:08] [Worker-Main-3/INFO]: Preparing spawn area: 4%
[13:34:08] [Worker-Main-3/INFO]: Preparing spawn area: 4%
[13:34:09] [Worker-Main-3/INFO]: Preparing spawn area: 4%
[13:34:10] [Worker-Main-3/INFO]: Preparing spawn area: 4%
[13:34:10] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[13:34:10] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[13:34:11] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[13:34:11] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[13:34:12] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[13:34:12] [Worker-Main-3/INFO]: Preparing spawn area: 5%
[13:34:13] [Worker-Main-3/INFO]: Preparing spawn area: 6%
[13:34:13] [Worker-Main-3/INFO]: Preparing spawn area: 6%
[13:34:14] [Worker-Main-3/INFO]: Preparing spawn area: 7%
[13:34:15] [Worker-Main-3/INFO]: Preparing spawn area: 7%
[13:34:15] [Worker-Main-3/INFO]: Preparing spawn area: 7%
[13:34:15] [Worker-Main-3/INFO]: Preparing spawn area: 7%
[13:34:16] [Worker-Main-3/INFO]: Preparing spawn area: 8%
[13:34:16] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:17] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:17] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:18] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:18] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:19] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:19] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:20] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:20] [Worker-Main-3/INFO]: Preparing spawn area: 9%
[13:34:21] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[13:34:21] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[13:34:22] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[13:34:23] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[13:34:23] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[13:34:23] [Worker-Main-3/INFO]: Preparing spawn area: 10%
[13:34:24] [Worker-Main-3/INFO]: Preparing spawn area: 11%
[13:34:24] [Worker-Main-3/INFO]: Preparing spawn area: 11%
[13:34:25] [Worker-Main-3/INFO]: Preparing spawn area: 13%
[13:34:25] [Worker-Main-3/INFO]: Preparing spawn area: 13%
[13:34:26] [Worker-Main-3/INFO]: Preparing spawn area: 13%
[13:34:26] [Worker-Main-3/INFO]: Preparing spawn area: 13%
[13:34:27] [Worker-Main-3/INFO]: Preparing spawn area: 14%
[13:34:27] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:28] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:28] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:29] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:30] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:30] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:30] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:31] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:31] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:32] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:32] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:33] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:33] [Worker-Main-3/INFO]: Preparing spawn area: 15%
[13:34:34] [Worker-Main-3/INFO]: Preparing spawn area: 16%
[13:34:34] [Worker-Main-3/INFO]: Preparing spawn area: 17%
[13:34:35] [Worker-Main-3/INFO]: Preparing spawn area: 17%
[13:34:35] [Worker-Main-3/INFO]: Preparing spawn area: 18%
[13:34:36] [Worker-Main-3/INFO]: Preparing spawn area: 18%
[13:34:37] [Worker-Main-3/INFO]: Preparing spawn area: 18%
[13:34:37] [Worker-Main-3/INFO]: Preparing spawn area: 18%
[13:34:37] [Worker-Main-3/INFO]: Preparing spawn area: 18%
[13:34:38] [Worker-Main-3/INFO]: Preparing spawn area: 19%
[13:34:39] [Worker-Main-3/INFO]: Preparing spawn area: 19%
[13:34:39] [Worker-Main-3/INFO]: Preparing spawn area: 20%
[13:34:39] [Worker-Main-3/INFO]: Preparing spawn area: 20%
[13:34:40] [Worker-Main-3/INFO]: Preparing spawn area: 20%
[13:34:41] [Worker-Main-3/INFO]: Preparing spawn area: 21%
[13:34:41] [Worker-Main-3/INFO]: Preparing spawn area: 21%
[13:34:41] [Worker-Main-3/INFO]: Preparing spawn area: 21%
[13:34:42] [Worker-Main-3/INFO]: Preparing spawn area: 22%
[13:34:43] [Worker-Main-3/INFO]: Preparing spawn area: 23%
[13:34:43] [Worker-Main-3/INFO]: Preparing spawn area: 23%
[13:34:43] [Worker-Main-3/INFO]: Preparing spawn area: 23%
[13:34:44] [Worker-Main-3/INFO]: Preparing spawn area: 23%
[13:34:44] [Worker-Main-3/INFO]: Preparing spawn area: 23%
[13:34:45] [Worker-Main-3/INFO]: Preparing spawn area: 24%
[13:34:45] [Worker-Main-3/INFO]: Preparing spawn area: 24%
[13:34:46] [Worker-Main-3/INFO]: Preparing spawn area: 24%
[13:34:46] [Worker-Main-3/INFO]: Preparing spawn area: 24%
[13:34:47] [Worker-Main-3/INFO]: Preparing spawn area: 25%
[13:34:47] [Worker-Main-3/INFO]: Preparing spawn area: 25%
[13:34:48] [Worker-Main-3/INFO]: Preparing spawn area: 25%
[13:34:48] [Worker-Main-3/INFO]: Preparing spawn area: 25%
[13:34:49] [Worker-Main-3/INFO]: Preparing spawn area: 26%
[13:34:49] [Worker-Main-3/INFO]: Preparing spawn area: 26%
[13:34:50] [Worker-Main-3/INFO]: Preparing spawn area: 26%
[13:34:50] [Worker-Main-3/INFO]: Preparing spawn area: 27%
[13:34:51] [Worker-Main-3/INFO]: Preparing spawn area: 27%
[13:34:51] [Worker-Main-3/INFO]: Preparing spawn area: 28%
[13:34:52] [Worker-Main-3/INFO]: Preparing spawn area: 29%
[13:34:52] [Worker-Main-3/INFO]: Preparing spawn area: 30%
[13:34:53] [Worker-Main-3/INFO]: Preparing spawn area: 30%
[13:34:53] [Worker-Main-3/INFO]: Preparing spawn area: 30%
[13:34:54] [Worker-Main-3/INFO]: Preparing spawn area: 31%
[13:34:54] [Worker-Main-3/INFO]: Preparing spawn area: 31%
[13:34:55] [Worker-Main-3/INFO]: Preparing spawn area: 31%
[13:34:55] [Worker-Main-3/INFO]: Preparing spawn area: 32%
[13:34:56] [Worker-Main-3/INFO]: Preparing spawn area: 32%
[13:34:56] [Worker-Main-3/INFO]: Preparing spawn area: 32%
[13:34:57] [Worker-Main-3/INFO]: Preparing spawn area: 32%
[13:34:57] [Worker-Main-3/INFO]: Preparing spawn area: 32%
[13:34:58] [Worker-Main-3/INFO]: Preparing spawn area: 32%
[13:34:59] [Worker-Main-3/INFO]: Preparing spawn area: 33%
[13:34:59] [Worker-Main-3/INFO]: Preparing spawn area: 33%
[13:34:59] [Worker-Main-3/INFO]: Preparing spawn area: 33%
[13:35:00] [Worker-Main-3/INFO]: Preparing spawn area: 34%
[13:35:00] [Worker-Main-3/INFO]: Preparing spawn area: 34%
[13:35:01] [Worker-Main-3/INFO]: Preparing spawn area: 34%
[13:35:01] [Worker-Main-3/INFO]: Preparing spawn area: 35%
[13:35:02] [Worker-Main-3/INFO]: Preparing spawn area: 35%
[13:35:03] [Worker-Main-3/INFO]: Preparing spawn area: 35%
[13:35:03] [Worker-Main-3/INFO]: Preparing spawn area: 35%
[13:35:04] [Worker-Main-3/INFO]: Preparing spawn area: 37%
[13:35:04] [Worker-Main-3/INFO]: Preparing spawn area: 37%
[13:35:04] [Worker-Main-3/INFO]: Preparing spawn area: 37%
[13:35:05] [Worker-Main-3/INFO]: Preparing spawn area: 37%
[13:35:05] [Worker-Main-3/INFO]: Preparing spawn area: 37%
[13:35:06] [Worker-Main-3/INFO]: Preparing spawn area: 38%
[13:35:06] [Worker-Main-3/INFO]: Preparing spawn area: 38%
[13:35:07] [Worker-Main-3/INFO]: Preparing spawn area: 38%
[13:35:07] [Worker-Main-3/INFO]: Preparing spawn area: 39%
[13:35:08] [Worker-Main-3/INFO]: Preparing spawn area: 39%
[13:35:09] [Worker-Main-3/INFO]: Preparing spawn area: 39%
[13:35:09] [Worker-Main-3/INFO]: Preparing spawn area: 39%
[13:35:10] [Worker-Main-3/INFO]: Preparing spawn area: 41%
[13:35:10] [Worker-Main-3/INFO]: Preparing spawn area: 41%
[13:35:10] [Worker-Main-3/INFO]: Preparing spawn area: 42%
[13:35:11] [Worker-Main-3/INFO]: Preparing spawn area: 42%
[13:35:11] [Worker-Main-3/INFO]: Preparing spawn area: 42%
[13:35:12] [Worker-Main-3/INFO]: Preparing spawn area: 42%
[13:35:12] [Worker-Main-3/INFO]: Preparing spawn area: 42%
[13:35:13] [Worker-Main-3/INFO]: Preparing spawn area: 42%
[13:35:13] [Worker-Main-3/INFO]: Preparing spawn area: 43%
[13:35:14] [Worker-Main-3/INFO]: Preparing spawn area: 43%
[13:35:14] [Worker-Main-3/INFO]: Preparing spawn area: 43%
[13:35:15] [Worker-Main-3/INFO]: Preparing spawn area: 43%
[13:35:15] [Worker-Main-3/INFO]: Preparing spawn area: 45%
[13:35:16] [Worker-Main-3/INFO]: Preparing spawn area: 45%
[13:35:16] [Worker-Main-3/INFO]: Preparing spawn area: 45%
[13:35:17] [Worker-Main-3/INFO]: Preparing spawn area: 46%
[13:35:18] [Worker-Main-3/INFO]: Preparing spawn area: 46%
[13:35:18] [Worker-Main-3/INFO]: Preparing spawn area: 46%
[13:35:18] [Worker-Main-3/INFO]: Preparing spawn area: 46%
[13:35:19] [Worker-Main-3/INFO]: Preparing spawn area: 47%
[13:35:19] [Worker-Main-3/INFO]: Preparing spawn area: 47%
[13:35:20] [Worker-Main-3/INFO]: Preparing spawn area: 47%
[13:35:20] [Worker-Main-3/INFO]: Preparing spawn area: 47%
[13:35:21] [Worker-Main-3/INFO]: Preparing spawn area: 47%
[13:35:21] [Worker-Main-3/INFO]: Preparing spawn area: 49%
[13:35:22] [Worker-Main-3/INFO]: Preparing spawn area: 49%
[13:35:22] [Worker-Main-3/INFO]: Preparing spawn area: 50%
[13:35:23] [Worker-Main-3/INFO]: Preparing spawn area: 50%
[13:35:23] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:24] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:24] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:26] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:27] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:28] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:28] [Worker-Main-3/INFO]: Preparing spawn area: 51%
[13:35:28] [Worker-Main-3/INFO]: Preparing spawn area: 52%
[13:35:29] [Worker-Main-3/INFO]: Preparing spawn area: 54%
[13:35:29] [Worker-Main-3/INFO]: Preparing spawn area: 54%
[13:35:30] [Worker-Main-3/INFO]: Preparing spawn area: 54%
[13:35:30] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[13:35:31] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[13:35:31] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[13:35:32] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[13:35:33] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[13:35:33] [Worker-Main-3/INFO]: Preparing spawn area: 55%
[13:35:33] [Worker-Main-3/INFO]: Preparing spawn area: 56%
[13:35:34] [Worker-Main-3/INFO]: Preparing spawn area: 57%
[13:35:35] [Worker-Main-3/INFO]: Preparing spawn area: 57%
[13:35:35] [Worker-Main-3/INFO]: Preparing spawn area: 57%
[13:35:35] [Worker-Main-3/INFO]: Preparing spawn area: 58%
[13:35:36] [Worker-Main-3/INFO]: Preparing spawn area: 58%
[13:35:36] [Worker-Main-3/INFO]: Preparing spawn area: 58%
[13:35:37] [Worker-Main-3/INFO]: Preparing spawn area: 58%
[13:35:37] [Worker-Main-3/INFO]: Preparing spawn area: 59%
[13:35:38] [Worker-Main-3/INFO]: Preparing spawn area: 59%
[13:35:38] [Worker-Main-3/INFO]: Preparing spawn area: 59%
[13:35:39] [Worker-Main-3/INFO]: Preparing spawn area: 60%
[13:35:39] [Worker-Main-3/INFO]: Preparing spawn area: 60%
[13:35:40] [Worker-Main-3/INFO]: Preparing spawn area: 62%
[13:35:40] [Worker-Main-3/INFO]: Preparing spawn area: 62%
[13:35:41] [Worker-Main-3/INFO]: Preparing spawn area: 62%
[13:35:41] [Worker-Main-3/INFO]: Preparing spawn area: 63%
[13:35:42] [Worker-Main-3/INFO]: Preparing spawn area: 64%
[13:35:42] [Worker-Main-3/INFO]: Preparing spawn area: 65%
[13:35:43] [Worker-Main-3/INFO]: Preparing spawn area: 65%
[13:35:43] [Worker-Main-3/INFO]: Preparing spawn area: 66%
[13:35:44] [Worker-Main-3/INFO]: Preparing spawn area: 67%
[13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 67%
[13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 67%
[13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 67%
[13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 68%
[13:35:46] [Worker-Main-3/INFO]: Preparing spawn area: 68%
[13:35:47] [Worker-Main-3/INFO]: Preparing spawn area: 68%
[13:35:47] [Worker-Main-3/INFO]: Preparing spawn area: 68%
[13:35:48] [Worker-Main-3/INFO]: Preparing spawn area: 68%
[13:35:48] [Worker-Main-3/INFO]: Preparing spawn area: 68%
[13:35:49] [Worker-Main-3/INFO]: Preparing spawn area: 68%
[13:35:49] [Worker-Main-3/INFO]: Preparing spawn area: 69%
[13:35:50] [Worker-Main-3/INFO]: Preparing spawn area: 70%
[13:35:50] [Worker-Main-3/INFO]: Preparing spawn area: 70%
[13:35:51] [Worker-Main-3/INFO]: Preparing spawn area: 71%
[13:35:52] [Worker-Main-3/INFO]: Preparing spawn area: 71%
[13:35:52] [Worker-Main-3/INFO]: Preparing spawn area: 71%
[13:35:53] [Worker-Main-3/INFO]: Preparing spawn area: 71%
[13:35:53] [Worker-Main-3/INFO]: Preparing spawn area: 72%
[13:35:53] [Worker-Main-3/INFO]: Preparing spawn area: 72%
[13:35:54] [Worker-Main-3/INFO]: Preparing spawn area: 72%
[13:35:54] [Worker-Main-3/INFO]: Preparing spawn area: 72%
[13:35:55] [Worker-Main-3/INFO]: Preparing spawn area: 73%
[13:35:55] [Worker-Main-3/INFO]: Preparing spawn area: 74%
[13:35:56] [Worker-Main-3/INFO]: Preparing spawn area: 74%
[13:35:56] [Worker-Main-3/INFO]: Preparing spawn area: 74%
[13:35:57] [Worker-Main-3/INFO]: Preparing spawn area: 74%
[13:35:57] [Worker-Main-3/INFO]: Preparing spawn area: 74%
[13:35:58] [Worker-Main-3/INFO]: Preparing spawn area: 75%
[13:35:59] [Worker-Main-3/INFO]: Preparing spawn area: 75%
[13:35:59] [Worker-Main-3/INFO]: Preparing spawn area: 75%
[13:35:59] [Worker-Main-3/INFO]: Preparing spawn area: 76%
[13:36:00] [Worker-Main-3/INFO]: Preparing spawn area: 77%
[13:36:00] [Worker-Main-3/INFO]: Preparing spawn area: 77%
[13:36:01] [Worker-Main-3/INFO]: Preparing spawn area: 77%
[13:36:01] [Worker-Main-3/INFO]: Preparing spawn area: 79%
[13:36:02] [Worker-Main-3/INFO]: Preparing spawn area: 79%
[13:36:02] [Worker-Main-3/INFO]: Preparing spawn area: 79%
[13:36:03] [Worker-Main-3/INFO]: Preparing spawn area: 79%
[13:36:04] [Worker-Main-3/INFO]: Preparing spawn area: 79%
[13:36:04] [Worker-Main-3/INFO]: Preparing spawn area: 80%
[13:36:04] [Worker-Main-3/INFO]: Preparing spawn area: 80%
[13:36:05] [Worker-Main-3/INFO]: Preparing spawn area: 81%
[13:36:06] [Worker-Main-3/INFO]: Preparing spawn area: 81%
[13:36:06] [Worker-Main-3/INFO]: Preparing spawn area: 81%
[13:36:07] [Worker-Main-3/INFO]: Preparing spawn area: 82%
[13:36:07] [Worker-Main-3/INFO]: Preparing spawn area: 82%
[13:36:07] [Worker-Main-3/INFO]: Preparing spawn area: 82%
[13:36:08] [Worker-Main-3/INFO]: Preparing spawn area: 82%
[13:36:08] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[13:36:09] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[13:36:10] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[13:36:10] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[13:36:10] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[13:36:11] [Worker-Main-3/INFO]: Preparing spawn area: 83%
[13:36:11] [Worker-Main-3/INFO]: Preparing spawn area: 85%
[13:36:12] [Worker-Main-3/INFO]: Preparing spawn area: 85%
[13:36:12] [Worker-Main-3/INFO]: Preparing spawn area: 85%
[13:36:13] [Worker-Main-3/INFO]: Preparing spawn area: 85%
[13:36:13] [Worker-Main-3/INFO]: Preparing spawn area: 85%
[13:36:14] [Worker-Main-3/INFO]: Preparing spawn area: 86%
[13:36:14] [Worker-Main-3/INFO]: Preparing spawn area: 86%
[13:36:15] [Worker-Main-3/INFO]: Preparing spawn area: 87%
[13:36:15] [Worker-Main-3/INFO]: Preparing spawn area: 87%
[13:36:16] [Worker-Main-3/INFO]: Preparing spawn area: 88%
[13:36:17] [Worker-Main-3/INFO]: Preparing spawn area: 88%
[13:36:17] [Worker-Main-3/INFO]: Preparing spawn area: 89%
[13:36:17] [Worker-Main-3/INFO]: Preparing spawn area: 89%
[13:36:18] [Worker-Main-3/INFO]: Preparing spawn area: 90%
[13:36:18] [Worker-Main-3/INFO]: Preparing spawn area: 90%
[13:36:19] [Worker-Main-3/INFO]: Preparing spawn area: 90%
[13:36:19] [Worker-Main-3/INFO]: Preparing spawn area: 91%
[13:36:20] [Worker-Main-3/INFO]: Preparing spawn area: 92%
[13:36:20] [Worker-Main-3/INFO]: Preparing spawn area: 93%
[13:36:21] [Worker-Main-3/INFO]: Preparing spawn area: 93%
[13:36:21] [Worker-Main-3/INFO]: Preparing spawn area: 93%
[13:36:22] [Worker-Main-3/INFO]: Preparing spawn area: 93%
[13:36:22] [Worker-Main-3/INFO]: Preparing spawn area: 95%
[13:36:23] [Worker-Main-3/INFO]: Preparing spawn area: 96%
[13:36:24] [Worker-Main-3/INFO]: Preparing spawn area: 96%
[13:36:24] [Worker-Main-3/INFO]: Preparing spawn area: 96%
[13:36:24] [Worker-Main-3/INFO]: Preparing spawn area: 96%
[13:36:25] [Worker-Main-3/INFO]: Preparing spawn area: 97%
[13:36:26] [Worker-Main-3/INFO]: Preparing spawn area: 98%
[13:36:26] [Worker-Main-3/INFO]: Preparing spawn area: 99%
[13:36:26] [Server thread/INFO]: Time elapsed: 163035 ms
[13:36:26] [Server thread/INFO]: Done (202.341s)! For help, type "help"
[13:36:26] [Server thread/INFO]: Starting GS4 status listener
[13:36:26] [Server thread/INFO]: Thread Query Listener started
[13:36:26] [Query Listener #1/INFO]: Query running on **.**.**.**:9898
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.16.5
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:31:46] [main/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:31:46] [main/INFO]: Loading for game Minecraft 1.16.5
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 3
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation Object
                (
                    [label:protected] => Fabric loader version
                    [value:protected] => 0.11.1
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:31:49] [main/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:31:49] [main/INFO]: [FabricLoader] Loading 3 mods: minecraft@1.16.5, java@8, fabricloader@0.11.1
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricJavaVersionInformation Object
                (
                    [label:protected] => Java version
                    [value:protected] => 8
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:31:49] [main/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:31:49] [main/INFO]: [FabricLoader] Loading 3 mods: minecraft@1.16.5, java@8, fabricloader@0.11.1
                                            [number:protected] => 2
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

        $this->assertEquals("Fabric loader version: 0.11.1", $analysis[1]->getMessage());

        $this->assertEquals("Java version: 8", $analysis[2]->getMessage());

    }
}