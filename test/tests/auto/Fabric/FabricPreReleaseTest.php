<?php

class FabricPreReleaseTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-pre-release.log");
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
                                    [text:protected] => [11:28:26] [main/INFO]: Loading Minecraft 1.18.2-pre3 with Fabric Loader 0.13.3
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:26] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:26] [main/INFO]: Fabric is preparing JARs on first launch, this may take a few seconds...
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:26] [main/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:26] [main/INFO]: Loading 3 mods:
                                    [number:protected] => 3
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- fabricloader 0.13.3
                                    [number:protected] => 4
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- java 17
                                    [number:protected] => 5
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	- minecraft 1.18.2-beta.3
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:26] [main/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:26] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:26] [main/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:29] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:29] [main/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:31] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:31] [main/WARN]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:31] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:31] [main/WARN]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:31] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:31] [main/WARN]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:31] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:31] [main/WARN]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:31] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:31] [main/WARN]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:31] [Worker-Main-6/INFO]: Loaded 7 recipes
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:31] [Worker-Main-6/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:32] [Worker-Main-6/INFO]: Loaded 1141 advancements
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:32] [Worker-Main-6/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:33] [Server thread/INFO]: Starting minecraft server version 1.18.2 Pre-release 3
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:33] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:33] [Server thread/INFO]: Loading properties
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:33] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:33] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:33] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:33] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:33] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:33] [Server thread/INFO]: Starting Minecraft server on *:23728
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:33] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:33] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:33] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:33] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:33] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:28:42] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:28:42] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:29:11] [Server thread/INFO]: Time elapsed: 2446 ms
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:29:11] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:29:11] [Server thread/INFO]: Done (38.261s)! For help, type "help"
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:29:11] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:29:11] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:29:11] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:29:11] [Server thread/INFO]: Thread Query Listener started
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:29:11] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:29:11] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:29:11] [Query Listener #1/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:29:11] [Server thread/INFO]: JMX monitoring enabled 
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:29:11] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 26
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [11:28:26] [main/INFO]: Loading Minecraft 1.18.2-pre3 with Fabric Loader 0.13.3
[11:28:26] [main/INFO]: Fabric is preparing JARs on first launch, this may take a few seconds...
[11:28:26] [main/INFO]: Loading 3 mods:
	- fabricloader 0.13.3
	- java 17
	- minecraft 1.18.2-beta.3
[11:28:26] [main/INFO]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=file:/server/libraries/net/fabricmc/sponge-mixin/0.11.2+mixin.0.8.5/sponge-mixin-0.11.2+mixin.0.8.5.jar Service=Knot/Fabric Env=SERVER
[11:28:29] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[11:28:31] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[11:28:31] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[11:28:31] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[11:28:31] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[11:28:31] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[11:28:31] [Worker-Main-6/INFO]: Loaded 7 recipes
[11:28:32] [Worker-Main-6/INFO]: Loaded 1141 advancements
[11:28:33] [Server thread/INFO]: Starting minecraft server version 1.18.2 Pre-release 3
[11:28:33] [Server thread/INFO]: Loading properties
[11:28:33] [Server thread/INFO]: Default game type: SURVIVAL
[11:28:33] [Server thread/INFO]: Generating keypair
[11:28:33] [Server thread/INFO]: Starting Minecraft server on *:23728
[11:28:33] [Server thread/INFO]: Using epoll channel type
[11:28:33] [Server thread/INFO]: Preparing level "world"
[11:28:42] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[11:29:11] [Server thread/INFO]: Time elapsed: 2446 ms
[11:29:11] [Server thread/INFO]: Done (38.261s)! For help, type "help"
[11:29:11] [Server thread/INFO]: Starting GS4 status listener
[11:29:11] [Server thread/INFO]: Thread Query Listener started
[11:29:11] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
[11:29:11] [Server thread/INFO]: JMX monitoring enabled 
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
                                            [text:protected] => [11:28:26] [main/INFO]: Loading Minecraft 1.18.2-pre3 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:28:26] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2-pre3
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [11:28:26] [main/INFO]: Loading Minecraft 1.18.2-pre3 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:28:26] [main/INFO]:
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
                                            [text:protected] => [11:28:26] [main/INFO]: Loading 3 mods:
                                            [number:protected] => 3
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- fabricloader 0.13.3
                                            [number:protected] => 4
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- java 17
                                            [number:protected] => 5
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	- minecraft 1.18.2-beta.3
                                            [number:protected] => 6
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:28:26] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Java version
                    [value:protected] => 17
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [11:28:33] [Server thread/INFO]: Starting minecraft server version 1.18.2 Pre-release 3
                                            [number:protected] => 16
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:28:33] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2
                )

        )

    [iterator:protected] => 3
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.2-pre3", $analysis[0]->getMessage());

        $this->assertEquals("Fabric loader version: 0.13.3", $analysis[1]->getMessage());

        $this->assertEquals("Java version: 17", $analysis[2]->getMessage());

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[3]->getMessage());

    }
}