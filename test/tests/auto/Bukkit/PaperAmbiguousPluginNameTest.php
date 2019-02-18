<?php

class PaperAmbiguousPluginNameTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/paper-ambiguous-plugin-name.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PaperLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:07] [main/INFO]: Loaded 0 recipes
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:08] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:08] [Server thread/INFO]: Loading properties
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:08] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:09] [Server thread/INFO]: This server is running Paper version git-Paper-522 (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:10] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:10] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:10] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:10] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:11] [Server thread/INFO]: Starting Minecraft server on *:10730
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:11] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:23:12] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:12] [Server thread/ERROR]: Ambiguous plugin name `WorldEdit\' for files `plugins/worldedit-bukkit-7.0.0-beta-05.jar\' and `plugins/worldedit-bukkit-7.0.0-beta-01.jar\' in `plugins\'
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 12
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [19:23:07] [main/INFO]: Loaded 0 recipes
[19:23:08] [Server thread/INFO]: Starting minecraft server version 1.13.2
[19:23:08] [Server thread/INFO]: Loading properties
[19:23:08] [Server thread/INFO]: Default game type: SURVIVAL
[19:23:09] [Server thread/INFO]: This server is running Paper version git-Paper-522 (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
[19:23:10] [Server thread/INFO]: Server Ping Player Sample Count: 12
[19:23:10] [Server thread/INFO]: Using 4 threads for Netty based IO
[19:23:10] [Server thread/INFO]: Debug logging is disabled
[19:23:10] [Server thread/INFO]: Generating keypair
[19:23:11] [Server thread/INFO]: Starting Minecraft server on *:10730
[19:23:11] [Server thread/INFO]: Using epoll channel type
[19:23:12] [Server thread/ERROR]: Ambiguous plugin name `WorldEdit\' for files `plugins/worldedit-bukkit-7.0.0-beta-05.jar\' and `plugins/worldedit-bukkit-7.0.0-beta-01.jar\' in `plugins\'
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
                    [value:protected] => 1.13.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [19:23:08] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [19:23:08] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\AmbiguousPluginNameProblem Object
                (
                    [firstPluginPath:protected] => plugins/worldedit-bukkit-7.0.0-beta-05.jar
                    [secondPluginPath:protected] => plugins/worldedit-bukkit-7.0.0-beta-01.jar
                    [pluginName:protected] => WorldEdit
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/worldedit-bukkit-7.0.0-beta-05.jar
                                    [relativePath:protected] => 1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/worldedit-bukkit-7.0.0-beta-01.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [19:23:12] [Server thread/ERROR]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [19:23:12] [Server thread/ERROR]: Ambiguous plugin name `WorldEdit\' for files `plugins/worldedit-bukkit-7.0.0-beta-05.jar\' and `plugins/worldedit-bukkit-7.0.0-beta-01.jar\' in `plugins\'
                                            [number:protected] => 12
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
    }
}