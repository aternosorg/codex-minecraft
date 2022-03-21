<?php

class BedrockMillisecondsTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bedrock/bedrock-milliseconds.log");
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
                                    [text:protected] => NO LOG FILE! - setting up server logging...
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => 
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-10-22 15:14:07:643 INFO] Starting Server
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [2021-10-22 15:14:07:643 INFO]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-10-22 15:14:07:644 INFO] Version **.**.**.**
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [2021-10-22 15:14:07:644 INFO]
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-10-22 15:14:07:644 INFO] Session ID 40c11d92-4fcf-4494-9820-5c5433fa5c9e
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [2021-10-22 15:14:07:644 INFO]
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2021-10-22 15:14:07:645 ERROR] Using a whitelist but without online authentication can be dangerous and is not allowed.
                                    [number:protected] => 5
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Quit correctly
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [2021-10-22 15:14:07:645 ERROR]
                )

        )

    [iterator:protected] => 5
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => NO LOG FILE! - setting up server logging...
[2021-10-22 15:14:07:643 INFO] Starting Server
[2021-10-22 15:14:07:644 INFO] Version **.**.**.**
[2021-10-22 15:14:07:644 INFO] Session ID 40c11d92-4fcf-4494-9820-5c5433fa5c9e
[2021-10-22 15:14:07:645 ERROR] Using a whitelist but without online authentication can be dangerous and is not allowed.
Quit correctly
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockAuthenticationWhitelistProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [2021-10-22 15:14:07:645 ERROR] Using a whitelist but without online authentication can be dangerous and is not allowed.
                                            [number:protected] => 5
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Quit correctly
                                            [number:protected] => 6
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [2021-10-22 15:14:07:645 ERROR]
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

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Using a whitelist without online authentication is not allowed.", $analysis[0]->getMessage());
        $this->assertEquals("Enable the online authentication.", $analysis[0][0]->getMessage());
        $this->assertEquals("Disable the whitelist.", $analysis[0][1]->getMessage());

    }
}