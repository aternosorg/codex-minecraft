<?php

class ClientSingleplayerTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/vanilla/client-singleplayer.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\VanillaLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:36] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:36] [Render thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:37] [Render thread/INFO]: Setting user: JulianVennen
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:37] [Render thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:38] [Render thread/WARN]: Invalid floating point value for option textBackgroundOpacity = 
                                    [number:protected] => 3
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NumberFormatException: empty String
                                    [number:protected] => 4
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.math.FloatingDecimal.readJavaFormatString(FloatingDecimal.java:1842) ~[?:?]
                                    [number:protected] => 5
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.math.FloatingDecimal.parseDouble(FloatingDecimal.java:110) ~[?:?]
                                    [number:protected] => 6
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Double.parseDouble(Double.java:651) ~[?:?]
                                    [number:protected] => 7
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at dyv$2.a(SourceFile:429) [1.18.2.jar:?]
                                    [number:protected] => 8
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at dyv.a(SourceFile:304) [1.18.2.jar:?]
                                    [number:protected] => 9
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at dyv.a(SourceFile:387) [1.18.2.jar:?]
                                    [number:protected] => 10
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at dyv.<init>(SourceFile:236) [1.18.2.jar:?]
                                    [number:protected] => 11
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at dyr.<init>(SourceFile:454) [1.18.2.jar:?]
                                    [number:protected] => 12
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.client.main.Main.main(SourceFile:197) [1.18.2.jar:?]
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:38] [Render thread/WARN]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:38] [Render thread/INFO]: Backend library: LWJGL version 3.2.2 build 10
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:38] [Render thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:39] [Render thread/INFO]: Reloading ResourceManager: Default
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:39] [Render thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:44] [Render thread/INFO]: OpenAL initialized on device SteelSeries Arctis 7 Game
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:44] [Render thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:44] [Render thread/INFO]: Sound engine started
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:44] [Render thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:45] [Render thread/INFO]: Created: 1024x1024x4 minecraft:textures/atlas/blocks.png-atlas
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:45] [Render thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:45] [Render thread/INFO]: Created: 256x128x4 minecraft:textures/atlas/signs.png-atlas
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:45] [Render thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:45] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/banner_patterns.png-atlas
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:45] [Render thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:45] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/shield_patterns.png-atlas
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:45] [Render thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:45] [Render thread/INFO]: Created: 256x256x4 minecraft:textures/atlas/chest.png-atlas
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:45] [Render thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:45] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/beds.png-atlas
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:45] [Render thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:45] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/shulker_boxes.png-atlas
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:45] [Render thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:46] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/particles.png-atlas
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:46] [Render thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:47] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/paintings.png-atlas
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:47] [Render thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:53:47] [Render thread/INFO]: Created: 256x128x0 minecraft:textures/atlas/mob_effects.png-atlas
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:53:47] [Render thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:05] [Render thread/WARN]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:05] [Render thread/WARN]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:05] [Render thread/WARN]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:05] [Render thread/WARN]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:05] [Render thread/WARN]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:05] [Render thread/INFO]: Loaded 7 recipes
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:05] [Render thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:05] [Render thread/INFO]: Loaded 1141 advancements
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:05] [Render thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:06] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:06] [Render thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:06] [Server thread/INFO]: Starting integrated minecraft server version 1.18.2
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:06] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:06] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:06] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:15] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:15] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:16] [Render thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:16] [Render thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:35] [Render thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:35] [Render thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:36] [Render thread/INFO]: Time elapsed: 20866 ms
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:36] [Render thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:36] [Server thread/INFO]: Changing view distance to 12, from 10
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:36] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:36] [Server thread/INFO]: Changing simulation distance to 12, from 0
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:36] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:36] [Server thread/INFO]: JulianVennen[local:E:b0f3fc68] logged in with entity id 100 at (-137.5, 76.0, 153.5)
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:36] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:36] [Server thread/INFO]: JulianVennen joined the game
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:36] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:36] [Render thread/INFO]: Loaded 0 advancements
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:36] [Render thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:40] [Server thread/INFO]: Saving and pausing game...
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:40] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:40] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:overworld
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:40] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_nether
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_end
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: JulianVennen lost connection: Disconnected
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: JulianVennen left the game
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: Stopping singleplayer server as player logged out
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: Stopping server
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: Saving players
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:41] [Server thread/INFO]: Saving worlds
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:41] [Server thread/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:42] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:overworld
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:42] [Server thread/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:42] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_nether
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:42] [Server thread/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:42] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_end
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:42] [Server thread/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage (New World): All chunks are saved
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:42] [Server thread/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage (DIM-1): All chunks are saved
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:42] [Server thread/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage (DIM1): All chunks are saved
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:42] [Server thread/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage: All dimensions are saved
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:42] [Server thread/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:54:43] [Render thread/INFO]: Stopping!
                                    [number:protected] => 64
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:54:43] [Render thread/INFO]:
                )

        )

    [iterator:protected] => 54
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [23:53:36] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[23:53:37] [Render thread/INFO]: Setting user: JulianVennen
[23:53:38] [Render thread/WARN]: Invalid floating point value for option textBackgroundOpacity = 
java.lang.NumberFormatException: empty String
	at jdk.internal.math.FloatingDecimal.readJavaFormatString(FloatingDecimal.java:1842) ~[?:?]
	at jdk.internal.math.FloatingDecimal.parseDouble(FloatingDecimal.java:110) ~[?:?]
	at java.lang.Double.parseDouble(Double.java:651) ~[?:?]
	at dyv$2.a(SourceFile:429) [1.18.2.jar:?]
	at dyv.a(SourceFile:304) [1.18.2.jar:?]
	at dyv.a(SourceFile:387) [1.18.2.jar:?]
	at dyv.<init>(SourceFile:236) [1.18.2.jar:?]
	at dyr.<init>(SourceFile:454) [1.18.2.jar:?]
	at net.minecraft.client.main.Main.main(SourceFile:197) [1.18.2.jar:?]
[23:53:38] [Render thread/INFO]: Backend library: LWJGL version 3.2.2 build 10
[23:53:39] [Render thread/INFO]: Reloading ResourceManager: Default
[23:53:44] [Render thread/INFO]: OpenAL initialized on device SteelSeries Arctis 7 Game
[23:53:44] [Render thread/INFO]: Sound engine started
[23:53:45] [Render thread/INFO]: Created: 1024x1024x4 minecraft:textures/atlas/blocks.png-atlas
[23:53:45] [Render thread/INFO]: Created: 256x128x4 minecraft:textures/atlas/signs.png-atlas
[23:53:45] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/banner_patterns.png-atlas
[23:53:45] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/shield_patterns.png-atlas
[23:53:45] [Render thread/INFO]: Created: 256x256x4 minecraft:textures/atlas/chest.png-atlas
[23:53:45] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/beds.png-atlas
[23:53:45] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/shulker_boxes.png-atlas
[23:53:46] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/particles.png-atlas
[23:53:47] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/paintings.png-atlas
[23:53:47] [Render thread/INFO]: Created: 256x128x0 minecraft:textures/atlas/mob_effects.png-atlas
[23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[23:54:05] [Render thread/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[23:54:05] [Render thread/INFO]: Loaded 7 recipes
[23:54:05] [Render thread/INFO]: Loaded 1141 advancements
[23:54:06] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[23:54:06] [Server thread/INFO]: Starting integrated minecraft server version 1.18.2
[23:54:06] [Server thread/INFO]: Generating keypair
[23:54:15] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[23:54:16] [Render thread/INFO]: Preparing spawn area: 0%
[23:54:35] [Render thread/INFO]: Preparing spawn area: 96%
[23:54:36] [Render thread/INFO]: Time elapsed: 20866 ms
[23:54:36] [Server thread/INFO]: Changing view distance to 12, from 10
[23:54:36] [Server thread/INFO]: Changing simulation distance to 12, from 0
[23:54:36] [Server thread/INFO]: JulianVennen[local:E:b0f3fc68] logged in with entity id 100 at (-137.5, 76.0, 153.5)
[23:54:36] [Server thread/INFO]: JulianVennen joined the game
[23:54:36] [Render thread/INFO]: Loaded 0 advancements
[23:54:40] [Server thread/INFO]: Saving and pausing game...
[23:54:40] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:overworld
[23:54:41] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_nether
[23:54:41] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_end
[23:54:41] [Server thread/INFO]: JulianVennen lost connection: Disconnected
[23:54:41] [Server thread/INFO]: JulianVennen left the game
[23:54:41] [Server thread/INFO]: Stopping singleplayer server as player logged out
[23:54:41] [Server thread/INFO]: Stopping server
[23:54:41] [Server thread/INFO]: Saving players
[23:54:41] [Server thread/INFO]: Saving worlds
[23:54:42] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:overworld
[23:54:42] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_nether
[23:54:42] [Server thread/INFO]: Saving chunks for level \'ServerLevel[New World]\'/minecraft:the_end
[23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage (New World): All chunks are saved
[23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage (DIM-1): All chunks are saved
[23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage (DIM1): All chunks are saved
[23:54:42] [Server thread/INFO]: ThreadedAnvilChunkStorage: All dimensions are saved
[23:54:43] [Render thread/INFO]: Stopping!

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\EnvironmentInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [23:53:36] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [23:53:36] [Render thread/INFO]:
                        )

                    [counter:protected] => 54
                    [label:protected] => Environment
                    [value:protected] => Client
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Environment: Client", $analysis[0]->getMessage());

    }
}