<?php

class BedrockAuthenticationWhitelistProblemTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bedrock/bedrock-authentication-whitelist-problem.log");
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
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-08-29 15:47:34 INFO] Starting Server
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1567093654
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-08-29 15:47:34 INFO]
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-08-29 15:47:34 INFO] Version 1.12.0.28
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 1567093654
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-08-29 15:47:34 INFO]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2019-08-29 15:47:34 ERROR] Using a whitelist but without online authentication can be dangerous and is not allowed.
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 1567093654
                    [iterator:protected] => 0
                    [prefix:protected] => [2019-08-29 15:47:34 ERROR]
                )

        )

    [iterator:protected] => 3
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [2019-08-29 15:47:34 INFO] Starting Server
[2019-08-29 15:47:34 INFO] Version 1.12.0.28
[2019-08-29 15:47:34 ERROR] Using a whitelist but without online authentication can be dangerous and is not allowed.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [2019-08-29 15:47:34 INFO] Version 1.12.0.28
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 1567093654
                            [iterator:protected] => 0
                            [prefix:protected] => [2019-08-29 15:47:34 INFO]
                        )

                    [counter:protected] => 1
                    [label:protected] => Bedrock version
                    [value:protected] => 1.12.0.28
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockAuthenticationWhitelistProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [2019-08-29 15:47:34 ERROR] Using a whitelist but without online authentication can be dangerous and is not allowed.
                                            [number:protected] => 3
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 1567093654
                            [iterator:protected] => 0
                            [prefix:protected] => [2019-08-29 15:47:34 ERROR]
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\EnableAuthenticationSolution Object
                                (
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\DisableWhitelistSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Bedrock version: 1.12.0.28", $analysis[0]->getMessage());

        $this->assertEquals("Using a whitelist without online authentication is not allowed.", $analysis[1]->getMessage());
        $this->assertEquals("Enable the online authentication.", $analysis[1][0]->getMessage());
        $this->assertEquals("Disable the whitelist.", $analysis[1][1]->getMessage());

    }
}