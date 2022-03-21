<?php

class OldcraftbukkitStart11Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/oldcraftbukkit-start-11.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\OldCraftBukkitLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668799
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668799
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:19 [INFO] Starting Minecraft server on *:10719
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668799
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] This server is running CraftBukkit version git-Bukkit-1.1-R6-b1988jnks (MC: 1.1) (Implementing API version 1.1-R6)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] [ItemNBTAPI] Loading ItemNBTAPI v1.1
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] [Admin Chat] Loading Admin Chat v1.0
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing level "world"
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Default game type: 0
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:20 [INFO] Preparing start region for level 0 (Seed: 2360843)
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668800
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:20 [INFO]
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:21 [INFO] Preparing spawn area: 65%
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668801
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:21 [INFO]
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing start region for level 1 (Seed: 2360843)
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668802
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:22 [INFO]
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:22 [INFO] Preparing spawn area: 60%
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668802
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:22 [INFO]
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Done (2.709s)! For help, type "help" or "?"
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Starting GS4 status listener
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 2019-02-08 23:33:23 [INFO] Query running on **.**.**.**:10719
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1549668803
                    [iterator:protected] => 0
                    [prefix:protected] => 2019-02-08 23:33:23 [INFO]
                )

        )

    [iterator:protected] => 16
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
2019-02-08 23:33:19 [INFO] Loading properties
2019-02-08 23:33:19 [INFO] Starting Minecraft server on *:10719
2019-02-08 23:33:20 [INFO] This server is running CraftBukkit version git-Bukkit-1.1-R6-b1988jnks (MC: 1.1) (Implementing API version 1.1-R6)
2019-02-08 23:33:20 [INFO] [ItemNBTAPI] Loading ItemNBTAPI v1.1
2019-02-08 23:33:20 [INFO] [Admin Chat] Loading Admin Chat v1.0
2019-02-08 23:33:20 [INFO] Preparing level "world"
2019-02-08 23:33:20 [INFO] Default game type: 0
2019-02-08 23:33:20 [INFO] Preparing start region for level 0 (Seed: 2360843)
2019-02-08 23:33:21 [INFO] Preparing spawn area: 65%
2019-02-08 23:33:22 [INFO] Preparing start region for level 1 (Seed: 2360843)
2019-02-08 23:33:22 [INFO] Preparing spawn area: 60%
2019-02-08 23:33:23 [INFO] Server permissions file permissions.yml is empty, ignoring it
2019-02-08 23:33:23 [INFO] Done (2.709s)! For help, type "help" or "?"
2019-02-08 23:33:23 [INFO] Starting GS4 status listener
2019-02-08 23:33:23 [INFO] Query running on **.**.**.**:10719
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
                                            [text:protected] => 2019-02-08 23:33:19 [INFO] Starting minecraft server version 1.1
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1549668799
                            [iterator:protected] => 0
                            [prefix:protected] => 2019-02-08 23:33:19 [INFO]
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.1
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.1", $analysis[0]->getMessage());

    }
}