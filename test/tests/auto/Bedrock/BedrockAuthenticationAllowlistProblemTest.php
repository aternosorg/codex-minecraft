<?php

class BedrockAuthenticationAllowlistProblemTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bedrock/bedrock-authentication-allowlist-problem.log");
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
                                    [text:protected] => [2022-03-02 22:04:05:045 INFO] Starting Server
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [2022-03-02 22:04:05:045 INFO]
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2022-03-02 22:04:05:045 INFO] Version **.**.**.**
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [2022-03-02 22:04:05:045 INFO]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [2022-03-02 22:04:05:046 ERROR] Using an allowlist but without online authentication can be dangerous and is not allowed.
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [2022-03-02 22:04:05:046 ERROR]
                )

        )

    [iterator:protected] => 3
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [2022-03-02 22:04:05:045 INFO] Starting Server
[2022-03-02 22:04:05:045 INFO] Version **.**.**.**
[2022-03-02 22:04:05:046 ERROR] Using an allowlist but without online authentication can be dangerous and is not allowed.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockAuthenticationAllowlistProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [2022-03-02 22:04:05:046 ERROR] Using an allowlist but without online authentication can be dangerous and is not allowed.
                                            [number:protected] => 3
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [2022-03-02 22:04:05:046 ERROR]
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\EnableAuthenticationSolution Object
                                (
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\DisableAllowlistSolution Object
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

        $this->assertEquals("Using an allowlist without online authentication is not allowed.", $analysis[0]->getMessage());
        $this->assertEquals("Enable the online authentication.", $analysis[0][0]->getMessage());
        $this->assertEquals("Disable the allowlist.", $analysis[0][1]->getMessage());

    }
}