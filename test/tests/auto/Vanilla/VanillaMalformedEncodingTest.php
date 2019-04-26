<?php

class VanillaMalformedEncodingTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/vanilla/vanilla-malformed-encoding.log");
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
                    [prefix:protected] => [21:28:50] [main/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:28:50] [main/FATAL]: Failed to start the minecraft server
                                    [number:protected] => 1
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.IllegalArgumentException: Malformed \uxxxx encoding.
                                    [number:protected] => 2
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.Properties.loadConvert(Properties.java:574) ~[?:1.8.0_202]
                                    [number:protected] => 3
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.Properties.load0(Properties.java:391) ~[?:1.8.0_202]
                                    [number:protected] => 4
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.Properties.load(Properties.java:341) ~[?:1.8.0_202]
                                    [number:protected] => 5
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at uk.b(SourceFile:55) ~[minecraft_server.jar:?]
                                    [number:protected] => 6
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at uh.a(SourceFile:69) ~[minecraft_server.jar:?]
                                    [number:protected] => 7
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at ui.&lt;init&gt;(SourceFile:12) ~[minecraft_server.jar:?]
                                    [number:protected] => 8
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.main(SourceFile:887) [minecraft_server.jar:?]
                                    [number:protected] => 9
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 1
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [21:28:50] [main/FATAL]: Failed to start the minecraft server
java.lang.IllegalArgumentException: Malformed \uxxxx encoding.
at java.util.Properties.loadConvert(Properties.java:574) ~[?:1.8.0_202]
at java.util.Properties.load0(Properties.java:391) ~[?:1.8.0_202]
at java.util.Properties.load(Properties.java:341) ~[?:1.8.0_202]
at uk.b(SourceFile:55) ~[minecraft_server.jar:?]
at uh.a(SourceFile:69) ~[minecraft_server.jar:?]
at ui.&lt;init&gt;(SourceFile:12) ~[minecraft_server.jar:?]
at net.minecraft.server.MinecraftServer.main(SourceFile:887) [minecraft_server.jar:?]

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\MalformedEncodingProblem Object
                (
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ChangeMOTDSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [21:28:50] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [21:28:50] [main/FATAL]: Failed to start the minecraft server
                                            [number:protected] => 1
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.IllegalArgumentException: Malformed \uxxxx encoding.
                                            [number:protected] => 2
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.Properties.loadConvert(Properties.java:574) ~[?:1.8.0_202]
                                            [number:protected] => 3
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.Properties.load0(Properties.java:391) ~[?:1.8.0_202]
                                            [number:protected] => 4
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.Properties.load(Properties.java:341) ~[?:1.8.0_202]
                                            [number:protected] => 5
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at uk.b(SourceFile:55) ~[minecraft_server.jar:?]
                                            [number:protected] => 6
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at uh.a(SourceFile:69) ~[minecraft_server.jar:?]
                                            [number:protected] => 7
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at ui.&lt;init&gt;(SourceFile:12) ~[minecraft_server.jar:?]
                                            [number:protected] => 8
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.main(SourceFile:887) [minecraft_server.jar:?]
                                            [number:protected] => 9
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 10
                                        )

                                )

                            [level:protected] => FATAL
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

        $this->assertEquals("Something (probably the MOTD) contains malformed formatting codes.", $analysis[0]->getMessage());
        $this->assertEquals("Change the server MOTD.", $analysis[0][0]->getMessage());

    }
}