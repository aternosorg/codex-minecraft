<?php

class ForgeEarlyCrashTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-early-crash.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\ForgeLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17Mar2022 00:00:24.134] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 40.0.17, --fml.mcVersion, 1.18.2, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20220228.144236, nogui]
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17Mar2022 00:00:24.134] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17Mar2022 00:00:24.137] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 9.1.3+9.1.3+main.9b69c82a starting: java version 17.0.1 by Oracle Corporation
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17Mar2022 00:00:24.137] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17Mar2022 00:00:24.219] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=union:/server/libraries/org/spongepowered/mixin/0.8.5/mixin-0.8.5.jar%2314!/ Service=ModLauncher Env=SERVER
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17Mar2022 00:00:24.219] [main/INFO] [mixin/]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17Mar2022 00:00:24.557] [main/ERROR] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Missing mandatory dependencies: dynamicregistries
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17Mar2022 00:00:24.557] [main/ERROR] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17Mar2022 00:00:25.586] [main/INFO] [mixin/]: Compatibility level set to JAVA_17
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17Mar2022 00:00:25.586] [main/INFO] [mixin/]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17Mar2022 00:00:25.614] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'forgeserver\' with arguments [nogui]
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17Mar2022 00:00:25.614] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                )

        )

    [iterator:protected] => 6
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [17Mar2022 00:00:24.134] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 40.0.17, --fml.mcVersion, 1.18.2, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20220228.144236, nogui]
[17Mar2022 00:00:24.137] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 9.1.3+9.1.3+main.9b69c82a starting: java version 17.0.1 by Oracle Corporation
[17Mar2022 00:00:24.219] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=union:/server/libraries/org/spongepowered/mixin/0.8.5/mixin-0.8.5.jar%2314!/ Service=ModLauncher Env=SERVER
[17Mar2022 00:00:24.557] [main/ERROR] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Missing mandatory dependencies: dynamicregistries
[17Mar2022 00:00:25.586] [main/INFO] [mixin/]: Compatibility level set to JAVA_17
[17Mar2022 00:00:25.614] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'forgeserver\' with arguments [nogui]
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17Mar2022 00:00:24.134] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 40.0.17, --fml.mcVersion, 1.18.2, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20220228.144236, nogui]
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [17Mar2022 00:00:24.134] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17Mar2022 00:00:24.134] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 40.0.17, --fml.mcVersion, 1.18.2, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20220228.144236, nogui]
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [17Mar2022 00:00:24.134] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 40.0.17
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeJavaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17Mar2022 00:00:24.137] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 9.1.3+9.1.3+main.9b69c82a starting: java version 17.0.1 by Oracle Corporation
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [17Mar2022 00:00:24.137] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Java version
                    [value:protected] => 17.0.1
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 40.0.17", $analysis[1]->getMessage());

        $this->assertEquals("Java version: 17.0.1", $analysis[2]->getMessage());

    }
}