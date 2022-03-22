<?php

class ForgeMultipleModulesExportTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-multiple-modules-export.log");
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
                                    [text:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 39.1.0, --fml.mcVersion, 1.18.1, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20211210.034407, nogui]
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]: ModLauncher 9.1.0+9.1.0+main.6690ee51 starting: java version 17.0.2 by Oracle Corporation
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20:14:29] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=union:/server/libraries/org/spongepowered/mixin/0.8.5/mixin-0.8.5.jar%2319!/ Service=ModLauncher Env=SERVER
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [20:14:29] [main/INFO] [mixin/]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]: Configuration file /server/config/fml.toml is not correct. Correcting
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]: Incorrect key [defaultConfigPath] was corrected from null to defaultconfigs
                                    [number:protected] => 5
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Exception in thread "main" java.lang.module.ResolutionException: Module roughlyenoughitems contains package mezz.jei.api.runtime, module jei exports package mezz.jei.api.runtime to roughlyenoughitems
                                    [number:protected] => 6
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.module.Resolver.resolveFail(Resolver.java:901)
                                    [number:protected] => 7
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.module.Resolver.failTwoSuppliers(Resolver.java:807)
                                    [number:protected] => 8
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.module.Resolver.checkExportSuppliers(Resolver.java:736)
                                    [number:protected] => 9
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.module.Resolver.finish(Resolver.java:380)
                                    [number:protected] => 10
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.module.Configuration.<init>(Configuration.java:140)
                                    [number:protected] => 11
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.module.Configuration.resolveAndBind(Configuration.java:494)
                                    [number:protected] => 12
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.ModuleLayerHandler.buildLayer(ModuleLayerHandler.java:70)
                                    [number:protected] => 13
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.TransformationServicesHandler.buildTransformingClassLoader(TransformationServicesHandler.java:60)
                                    [number:protected] => 14
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.Launcher.run(Launcher.java:104)
                                    [number:protected] => 15
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.Launcher.main(Launcher.java:77)
                                    [number:protected] => 16
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.BootstrapLaunchConsumer.accept(BootstrapLaunchConsumer.java:26)
                                    [number:protected] => 17
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.BootstrapLaunchConsumer.accept(BootstrapLaunchConsumer.java:23)
                                    [number:protected] => 18
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.bootstraplauncher@1.0.0/cpw.mods.bootstraplauncher.BootstrapLauncher.main(BootstrapLauncher.java:149)
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]:
                )

        )

    [iterator:protected] => 5
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 39.1.0, --fml.mcVersion, 1.18.1, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20211210.034407, nogui]
[20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]: ModLauncher 9.1.0+9.1.0+main.6690ee51 starting: java version 17.0.2 by Oracle Corporation
[20:14:29] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=union:/server/libraries/org/spongepowered/mixin/0.8.5/mixin-0.8.5.jar%2319!/ Service=ModLauncher Env=SERVER
[20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]: Configuration file /server/config/fml.toml is not correct. Correcting
[20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]: Incorrect key [defaultConfigPath] was corrected from null to defaultconfigs
Exception in thread "main" java.lang.module.ResolutionException: Module roughlyenoughitems contains package mezz.jei.api.runtime, module jei exports package mezz.jei.api.runtime to roughlyenoughitems
	at java.base/java.lang.module.Resolver.resolveFail(Resolver.java:901)
	at java.base/java.lang.module.Resolver.failTwoSuppliers(Resolver.java:807)
	at java.base/java.lang.module.Resolver.checkExportSuppliers(Resolver.java:736)
	at java.base/java.lang.module.Resolver.finish(Resolver.java:380)
	at java.base/java.lang.module.Configuration.<init>(Configuration.java:140)
	at java.base/java.lang.module.Configuration.resolveAndBind(Configuration.java:494)
	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.ModuleLayerHandler.buildLayer(ModuleLayerHandler.java:70)
	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.TransformationServicesHandler.buildTransformingClassLoader(TransformationServicesHandler.java:60)
	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.Launcher.run(Launcher.java:104)
	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.Launcher.main(Launcher.java:77)
	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.BootstrapLaunchConsumer.accept(BootstrapLaunchConsumer.java:26)
	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.BootstrapLaunchConsumer.accept(BootstrapLaunchConsumer.java:23)
	at cpw.mods.bootstraplauncher@1.0.0/cpw.mods.bootstraplauncher.BootstrapLauncher.main(BootstrapLauncher.java:149)
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
                                            [text:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 39.1.0, --fml.mcVersion, 1.18.1, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20211210.034407, nogui]
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 39.1.0, --fml.mcVersion, 1.18.1, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20211210.034407, nogui]
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [20:14:29] [main/INFO] [cp.mo.mo.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 39.1.0
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\MultipleModulesExportProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]: Incorrect key [defaultConfigPath] was corrected from null to defaultconfigs
                                            [number:protected] => 5
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Exception in thread "main" java.lang.module.ResolutionException: Module roughlyenoughitems contains package mezz.jei.api.runtime, module jei exports package mezz.jei.api.runtime to roughlyenoughitems
                                            [number:protected] => 6
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.base/java.lang.module.Resolver.resolveFail(Resolver.java:901)
                                            [number:protected] => 7
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.base/java.lang.module.Resolver.failTwoSuppliers(Resolver.java:807)
                                            [number:protected] => 8
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.base/java.lang.module.Resolver.checkExportSuppliers(Resolver.java:736)
                                            [number:protected] => 9
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.base/java.lang.module.Resolver.finish(Resolver.java:380)
                                            [number:protected] => 10
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.base/java.lang.module.Configuration.<init>(Configuration.java:140)
                                            [number:protected] => 11
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.base/java.lang.module.Configuration.resolveAndBind(Configuration.java:494)
                                            [number:protected] => 12
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.ModuleLayerHandler.buildLayer(ModuleLayerHandler.java:70)
                                            [number:protected] => 13
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.TransformationServicesHandler.buildTransformingClassLoader(TransformationServicesHandler.java:60)
                                            [number:protected] => 14
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.Launcher.run(Launcher.java:104)
                                            [number:protected] => 15
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.Launcher.main(Launcher.java:77)
                                            [number:protected] => 16
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.BootstrapLaunchConsumer.accept(BootstrapLaunchConsumer.java:26)
                                            [number:protected] => 17
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at MC-BOOTSTRAP/cpw.mods.modlauncher@9.1.0/cpw.mods.modlauncher.BootstrapLaunchConsumer.accept(BootstrapLaunchConsumer.java:23)
                                            [number:protected] => 18
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at cpw.mods.bootstraplauncher@1.0.0/cpw.mods.bootstraplauncher.BootstrapLauncher.main(BootstrapLauncher.java:149)
                                            [number:protected] => 19
                                        )

                                )

                            [level:protected] => WARN
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [20:14:29] [main/WARN] [ne.mi.fm.lo.FMLConfig/CORE]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                        )

                    [iterator:protected] => 0
                    [modName:protected] => roughlyenoughitems
                    [secondModName:protected] => jei
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.1", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 39.1.0", $analysis[1]->getMessage());

        $this->assertEquals("The mods roughlyenoughitems and jei are incompatible.", $analysis[2]->getMessage());

    }
}