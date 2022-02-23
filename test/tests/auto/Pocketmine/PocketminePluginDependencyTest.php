<?php

class PocketminePluginDependencyTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/pocketmine/pocketmine-plugin-dependency.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PocketmineLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Loading pocketmine.yml...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Loading server properties...
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Selected English (eng) as the base language
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.10.0
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/NOTICE]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => NOTICE
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/NOTICE]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Opening server on **.**.**.**:46551
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: This server is running PocketMine-MP version 3.7.0
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Loading resource packs...
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189554
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading PCFly v3.0.0
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading AdvancedJoin v1.0.9
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading BlazinJump v1.0.3
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading 8ball v1.0
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading 1vs1 v1.0.1
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/CRITICAL]: Could not load plugin \'BankNotes\': Unknown dependency: EconomyAPI
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => CRITICAL
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/CRITICAL]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading Afterlife v3.2.9
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading SkyWars v1.1.0
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading BanWarn v1.2.3
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]: Loading PurePerms v1.4.2-c2a
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1553189555
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 20
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Loading pocketmine.yml...
2019-03-21 [17:32:34] [Server thread/INFO]: Loading server properties...
2019-03-21 [17:32:34] [Server thread/INFO]: Selected English (eng) as the base language
2019-03-21 [17:32:34] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.10.0
2019-03-21 [17:32:34] [Server thread/NOTICE]: Online mode is enabled. The server will verify that players are authenticated to Xbox Live.
2019-03-21 [17:32:34] [Server thread/NOTICE]: To disable authentication, set "xbox-auth" to "false" in server.properties.
2019-03-21 [17:32:34] [Server thread/INFO]: Opening server on **.**.**.**:46551
2019-03-21 [17:32:34] [Server thread/INFO]: This server is running PocketMine-MP version 3.7.0
2019-03-21 [17:32:34] [Server thread/INFO]: PocketMine-MP is distributed under the LGPL License
2019-03-21 [17:32:34] [Server thread/INFO]: Loading resource packs...
2019-03-21 [17:32:35] [Server thread/INFO]: Loading PCFly v3.0.0
2019-03-21 [17:32:35] [Server thread/INFO]: Loading AdvancedJoin v1.0.9
2019-03-21 [17:32:35] [Server thread/INFO]: Loading BlazinJump v1.0.3
2019-03-21 [17:32:35] [Server thread/INFO]: Loading 8ball v1.0
2019-03-21 [17:32:35] [Server thread/INFO]: Loading 1vs1 v1.0.1
2019-03-21 [17:32:35] [Server thread/CRITICAL]: Could not load plugin \'BankNotes\': Unknown dependency: EconomyAPI
2019-03-21 [17:32:35] [Server thread/INFO]: Loading Afterlife v3.2.9
2019-03-21 [17:32:35] [Server thread/INFO]: Loading SkyWars v1.1.0
2019-03-21 [17:32:35] [Server thread/INFO]: Loading BanWarn v1.2.3
2019-03-21 [17:32:35] [Server thread/INFO]: Loading PurePerms v1.4.2-c2a
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineBedrockVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: Starting Minecraft: Bedrock Edition server version v1.10.0
                                            [number:protected] => 4
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1553189554
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Bedrock version
                    [value:protected] => 1.10.0
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]: This server is running PocketMine-MP version 3.7.0
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1553189554
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-03-21 [17:32:34] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Pocketmine version
                    [value:protected] => 3.7.0
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 2019-03-21 [17:32:35] [Server thread/CRITICAL]: Could not load plugin \'BankNotes\': Unknown dependency: EconomyAPI
                                            [number:protected] => 16
                                        )

                                )

                            [level:protected] => CRITICAL
                            [time:protected] => 1553189555
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-03-21 [17:32:35] [Server thread/CRITICAL]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallSolution Object
                                (
                                    [pluginName:protected] => EconomyAPI
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => BankNotes
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => BankNotes
                    [dependencyPluginName:protected] => EconomyAPI
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.10.0", $analysis[0]->getMessage());

        $this->assertEquals("Pocketmine version: 3.7.0", $analysis[1]->getMessage());

        $this->assertEquals("The plugin 'BankNotes' is missing the required the plugin 'EconomyAPI'.", $analysis[2]->getMessage());
        $this->assertEquals("Install the plugin 'EconomyAPI'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Remove the plugin 'BankNotes'.", $analysis[2][1]->getMessage());

    }
}