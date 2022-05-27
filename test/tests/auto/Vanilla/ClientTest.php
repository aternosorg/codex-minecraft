<?php

class ClientTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/vanilla/client.log");
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
                                    [text:protected] => [23:50:45] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:45] [Render thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:45] [Render thread/INFO]: Setting user: JulianVennen
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:45] [Render thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:46] [Render thread/WARN]: Invalid floating point value for option textBackgroundOpacity = 
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
                    [prefix:protected] => [23:50:46] [Render thread/WARN]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:46] [Render thread/INFO]: Backend library: LWJGL version 3.2.2 build 10
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:46] [Render thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:47] [Render thread/INFO]: Reloading ResourceManager: Default
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:47] [Render thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:52] [Render thread/INFO]: OpenAL initialized on device SteelSeries Arctis 7 Game
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:52] [Render thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:52] [Render thread/INFO]: Sound engine started
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:52] [Render thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:53] [Render thread/INFO]: Created: 1024x1024x4 minecraft:textures/atlas/blocks.png-atlas
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:53] [Render thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:53] [Render thread/INFO]: Created: 256x128x4 minecraft:textures/atlas/signs.png-atlas
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:53] [Render thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:53] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/banner_patterns.png-atlas
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:53] [Render thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:53] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/shield_patterns.png-atlas
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:53] [Render thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:53] [Render thread/INFO]: Created: 256x256x4 minecraft:textures/atlas/chest.png-atlas
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:53] [Render thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:53] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/beds.png-atlas
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:53] [Render thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:53] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/shulker_boxes.png-atlas
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:53] [Render thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:55] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/particles.png-atlas
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:55] [Render thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:55] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/paintings.png-atlas
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:55] [Render thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:50:55] [Render thread/INFO]: Created: 256x128x0 minecraft:textures/atlas/mob_effects.png-atlas
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:50:55] [Render thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:51:10] [Render thread/INFO]: Stopping!
                                    [number:protected] => 28
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:51:10] [Render thread/INFO]:
                )

        )

    [iterator:protected] => 18
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [23:50:45] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[23:50:45] [Render thread/INFO]: Setting user: JulianVennen
[23:50:46] [Render thread/WARN]: Invalid floating point value for option textBackgroundOpacity = 
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
[23:50:46] [Render thread/INFO]: Backend library: LWJGL version 3.2.2 build 10
[23:50:47] [Render thread/INFO]: Reloading ResourceManager: Default
[23:50:52] [Render thread/INFO]: OpenAL initialized on device SteelSeries Arctis 7 Game
[23:50:52] [Render thread/INFO]: Sound engine started
[23:50:53] [Render thread/INFO]: Created: 1024x1024x4 minecraft:textures/atlas/blocks.png-atlas
[23:50:53] [Render thread/INFO]: Created: 256x128x4 minecraft:textures/atlas/signs.png-atlas
[23:50:53] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/banner_patterns.png-atlas
[23:50:53] [Render thread/INFO]: Created: 1024x512x4 minecraft:textures/atlas/shield_patterns.png-atlas
[23:50:53] [Render thread/INFO]: Created: 256x256x4 minecraft:textures/atlas/chest.png-atlas
[23:50:53] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/beds.png-atlas
[23:50:53] [Render thread/INFO]: Created: 512x256x4 minecraft:textures/atlas/shulker_boxes.png-atlas
[23:50:55] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/particles.png-atlas
[23:50:55] [Render thread/INFO]: Created: 256x256x0 minecraft:textures/atlas/paintings.png-atlas
[23:50:55] [Render thread/INFO]: Created: 256x128x0 minecraft:textures/atlas/mob_effects.png-atlas
[23:51:10] [Render thread/INFO]: Stopping!

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
                                            [text:protected] => [23:50:45] [Render thread/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [23:50:45] [Render thread/INFO]:
                        )

                    [counter:protected] => 18
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