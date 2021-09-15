<?php

class BedrockEncryptedWorldTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bedrock/bedrock-encrypted-world.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\BedrockLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => NO LOG FILE! - setting up server logging...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => 
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2021-09-15 10:35:25 INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-09-15 10:35:25 INFO] Starting Server
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1631702125
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2021-09-15 10:35:25 INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-09-15 10:35:25 INFO] Version **.**.**.**
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1631702125
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2021-09-15 10:35:25 INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-09-15 10:35:25 INFO] Session ID aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1631702125
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2021-09-15 10:35:25 INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-09-15 10:35:25 INFO] Level Name: world
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1631702125
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2021-09-15 10:35:25 INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-09-15 10:35:25 INFO] Game mode: 0 Survival
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1631702125
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2021-09-15 10:35:25 INFO]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-09-15 10:35:25 INFO] Difficulty: 1 EASY
                                    [number:protected] => 7
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [INFO] opening worlds/world/db
                                    [number:protected] => 8
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [ERROR] DBStorage chain is invalid. Possibly encryption-related, or bad DBStorageConfig passed. Reason: Unable to decipher/decrypt LevelDB.
                                    [number:protected] => 9
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [ERROR] Network port occupied, can\'t start server.
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1631702125
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [2021-09-15 10:40:38 ERROR]
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-09-15 10:40:38 ERROR] [Aternos System]: Server was stopped because it took too long to start. Try reducing the load to avoid this in the future.
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1631702438
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 8
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => NO LOG FILE! - setting up server logging...
[2021-09-15 10:35:25 INFO] Starting Server
[2021-09-15 10:35:25 INFO] Version **.**.**.**
[2021-09-15 10:35:25 INFO] Session ID aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa
[2021-09-15 10:35:25 INFO] Level Name: world
[2021-09-15 10:35:25 INFO] Game mode: 0 Survival
[2021-09-15 10:35:25 INFO] Difficulty: 1 EASY
[INFO] opening worlds/world/db
[ERROR] DBStorage chain is invalid. Possibly encryption-related, or bad DBStorageConfig passed. Reason: Unable to decipher/decrypt LevelDB.
[ERROR] Network port occupied, can\'t start server.
[2021-09-15 10:40:38 ERROR] [Aternos System]: Server was stopped because it took too long to start. Try reducing the load to avoid this in the future.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockDBStorageChainProblem Object
                (
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [2021-09-15 10:35:25 INFO]
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [2021-09-15 10:35:25 INFO] Difficulty: 1 EASY
                                            [number:protected] => 7
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [INFO] opening worlds/world/db
                                            [number:protected] => 8
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [ERROR] DBStorage chain is invalid. Possibly encryption-related, or bad DBStorageConfig passed. Reason: Unable to decipher/decrypt LevelDB.
                                            [number:protected] => 9
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [ERROR] Network port occupied, can\'t start server.
                                            [number:protected] => 10
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1631702125
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

        $this->assertEquals("Unable to decrypt world. Marketplace worlds can't be installed on dedicated servers.", $analysis[0]->getMessage());
        $this->assertEquals("Generate a new world.", $analysis[0][0]->getMessage());

    }
}