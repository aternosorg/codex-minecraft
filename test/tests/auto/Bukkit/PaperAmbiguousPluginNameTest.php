<?php

class PaperAmbiguousPluginNameTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
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
                    [prefix:protected] => [19:23:07] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:08] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:08] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:08] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:09] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:10] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:11] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
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
                    [prefix:protected] => [19:23:11] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:13:42] [Server thread/ERROR]: Ambiguous plugin name `Multiverse-Core\' for files `plugins/Multiverse-Core-3.0.0-SNAPSHOT.jar\' and `plugins/Multiverse-Core-2.5.jar\' in `plugins\'
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:13:42] [Server thread/ERROR]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:23:12] [Server thread/ERROR]: Ambiguous plugin name `WorldEdit\' for files `plugins/worldedit-bukkit-7.0.0-beta-05.jar\' and `plugins/worldedit-bukkit-7.0.0-beta-01.jar\' in `plugins\'
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [19:23:12] [Server thread/ERROR]:
                )

        )

    [iterator:protected] => 13
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
[16:13:42] [Server thread/ERROR]: Ambiguous plugin name `Multiverse-Core\' for files `plugins/Multiverse-Core-3.0.0-SNAPSHOT.jar\' and `plugins/Multiverse-Core-2.5.jar\' in `plugins\'
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
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
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
                            [prefix:protected] => [19:23:08] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.13.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\AmbiguousPluginNameProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:13:42] [Server thread/ERROR]: Ambiguous plugin name `Multiverse-Core\' for files `plugins/Multiverse-Core-3.0.0-SNAPSHOT.jar\' and `plugins/Multiverse-Core-2.5.jar\' in `plugins\'
                                            [number:protected] => 12
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [16:13:42] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/Multiverse-Core-3.0.0-SNAPSHOT.jar
                                    [relativePath:protected] => 1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/Multiverse-Core-2.5.jar
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [firstPluginPath:protected] => plugins/Multiverse-Core-3.0.0-SNAPSHOT.jar
                    [secondPluginPath:protected] => plugins/Multiverse-Core-2.5.jar
                    [pluginName:protected] => Multiverse-Core
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\AmbiguousPluginNameProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [19:23:12] [Server thread/ERROR]: Ambiguous plugin name `WorldEdit\' for files `plugins/worldedit-bukkit-7.0.0-beta-05.jar\' and `plugins/worldedit-bukkit-7.0.0-beta-01.jar\' in `plugins\'
                                            [number:protected] => 13
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [19:23:12] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
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
                    [firstPluginPath:protected] => plugins/worldedit-bukkit-7.0.0-beta-05.jar
                    [secondPluginPath:protected] => plugins/worldedit-bukkit-7.0.0-beta-01.jar
                    [pluginName:protected] => WorldEdit
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.13.2", $analysis[0]->getMessage());

        $this->assertEquals("There are multiple plugin files for the plugin name 'Multiverse-Core': 'Multiverse-Core-3.0.0-SNAPSHOT.jar' and 'Multiverse-Core-2.5.jar'.", $analysis[1]->getMessage());
        $this->assertEquals("Delete the file 'plugins/Multiverse-Core-3.0.0-SNAPSHOT.jar'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file 'plugins/Multiverse-Core-2.5.jar'.", $analysis[1][1]->getMessage());

        $this->assertEquals("There are multiple plugin files for the plugin name 'WorldEdit': 'worldedit-bukkit-7.0.0-beta-05.jar' and 'worldedit-bukkit-7.0.0-beta-01.jar'.", $analysis[2]->getMessage());
        $this->assertEquals("Delete the file 'plugins/worldedit-bukkit-7.0.0-beta-05.jar'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Delete the file 'plugins/worldedit-bukkit-7.0.0-beta-01.jar'.", $analysis[2][1]->getMessage());

    }
}