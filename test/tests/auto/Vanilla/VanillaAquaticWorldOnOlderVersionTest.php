<?php

class VanillaAquaticWorldOnOlderVersionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/vanilla/vanilla-aquatic-world-on-older-version.log");
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
                    [prefix:protected] => [07:20:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:32] [Server thread/INFO]: Starting minecraft server version 1.12.2
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:32] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:32] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:32] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:32] [Server thread/INFO]: Starting Minecraft server on *:10890
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:32] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:32] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:33] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:33] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:34] [Server thread/INFO]: Loaded 488 advancements
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:34] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:34] [Server thread/INFO]: Preparing start region for level 0
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:34] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:34] [Server thread/WARN]: Could not set level chunk heightmap, array length is 0 instead of 256
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07:20:34] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07:20:34] [Server thread/ERROR]: Encountered an unexpected exception
                                    [number:protected] => 11
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.IllegalArgumentException: ChunkNibbleArrays should be 2048 bytes not: 0
                                    [number:protected] => 12
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at axs<init>(SourceFile:16) ~[minecraft_server.jar:?]
                                    [number:protected] => 13
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at aye.a(SourceFile:315) ~[minecraft_server.jar:?]
                                    [number:protected] => 14
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at aye.a(SourceFile:97) ~[minecraft_server.jar:?]
                                    [number:protected] => 15
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at aye.a(SourceFile:72) ~[minecraft_server.jar:?]
                                    [number:protected] => 16
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at on.f(SourceFile:124) [minecraft_server.jar:?]
                                    [number:protected] => 17
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at on.b(SourceFile:81) [minecraft_server.jar:?]
                                    [number:protected] => 18
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at on.c(SourceFile:95) [minecraft_server.jar:?]
                                    [number:protected] => 19
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.l(SourceFile:328) [minecraft_server.jar:?]
                                    [number:protected] => 20
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.a(SourceFile:299) [minecraft_server.jar:?]
                                    [number:protected] => 21
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at nz.j(SourceFile:233) [minecraft_server.jar:?]
                                    [number:protected] => 22
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(SourceFile:434) [minecraft_server.jar:?]
                                    [number:protected] => 23
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 11
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [07:20:32] [Server thread/INFO]: Starting minecraft server version 1.12.2
[07:20:32] [Server thread/INFO]: Loading properties
[07:20:32] [Server thread/INFO]: Default game type: SURVIVAL
[07:20:32] [Server thread/INFO]: Generating keypair
[07:20:32] [Server thread/INFO]: Starting Minecraft server on *:10890
[07:20:32] [Server thread/INFO]: Using epoll channel type
[07:20:33] [Server thread/INFO]: Preparing level "world"
[07:20:34] [Server thread/INFO]: Loaded 488 advancements
[07:20:34] [Server thread/INFO]: Preparing start region for level 0
[07:20:34] [Server thread/WARN]: Could not set level chunk heightmap, array length is 0 instead of 256
[07:20:34] [Server thread/ERROR]: Encountered an unexpected exception
java.lang.IllegalArgumentException: ChunkNibbleArrays should be 2048 bytes not: 0
at axs<init>(SourceFile:16) ~[minecraft_server.jar:?]
at aye.a(SourceFile:315) ~[minecraft_server.jar:?]
at aye.a(SourceFile:97) ~[minecraft_server.jar:?]
at aye.a(SourceFile:72) ~[minecraft_server.jar:?]
at on.f(SourceFile:124) [minecraft_server.jar:?]
at on.b(SourceFile:81) [minecraft_server.jar:?]
at on.c(SourceFile:95) [minecraft_server.jar:?]
at net.minecraft.server.MinecraftServer.l(SourceFile:328) [minecraft_server.jar:?]
at net.minecraft.server.MinecraftServer.a(SourceFile:299) [minecraft_server.jar:?]
at nz.j(SourceFile:233) [minecraft_server.jar:?]
at net.minecraft.server.MinecraftServer.run(SourceFile:434) [minecraft_server.jar:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.12.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [07:20:32] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [07:20:32] [Server thread/INFO]: Starting minecraft server version 1.12.2
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\AquaticWorldOnOlderVersionProblem Object
                (
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution Object
                                (
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\AquaticVersionInstallSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [07:20:34] [Server thread/ERROR]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [07:20:34] [Server thread/ERROR]: Encountered an unexpected exception
                                            [number:protected] => 11
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.IllegalArgumentException: ChunkNibbleArrays should be 2048 bytes not: 0
                                            [number:protected] => 12
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at axs<init>(SourceFile:16) ~[minecraft_server.jar:?]
                                            [number:protected] => 13
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at aye.a(SourceFile:315) ~[minecraft_server.jar:?]
                                            [number:protected] => 14
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at aye.a(SourceFile:97) ~[minecraft_server.jar:?]
                                            [number:protected] => 15
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at aye.a(SourceFile:72) ~[minecraft_server.jar:?]
                                            [number:protected] => 16
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at on.f(SourceFile:124) [minecraft_server.jar:?]
                                            [number:protected] => 17
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at on.b(SourceFile:81) [minecraft_server.jar:?]
                                            [number:protected] => 18
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at on.c(SourceFile:95) [minecraft_server.jar:?]
                                            [number:protected] => 19
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.l(SourceFile:328) [minecraft_server.jar:?]
                                            [number:protected] => 20
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.a(SourceFile:299) [minecraft_server.jar:?]
                                            [number:protected] => 21
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at nz.j(SourceFile:233) [minecraft_server.jar:?]
                                            [number:protected] => 22
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(SourceFile:434) [minecraft_server.jar:?]
                                            [number:protected] => 23
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.12.2", $analysis[0]->getMessage());

        $this->assertEquals("The current world was created/loaded with Minecraft 1.13 or higher. The new format cannot be loaded in any older version.", $analysis[1]->getMessage());
        $this->assertEquals("Generate a new world.", $analysis[1][0]->getMessage());
        $this->assertEquals("Update the server software to 1.13 or newer.", $analysis[1][1]->getMessage());

    }
}