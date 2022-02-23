<?php

class ForgeModFatal1444Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-fatal-1444.log");
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
                                    [text:protected] => [14Feb2020 20:34:33.257] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 28.1.117, --fml.mcpVersion, 20190829.143755, --fml.mcVersion, 1.14.4, --fml.forgeGroup, net.minecraftforge, nogui]
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.257] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.275] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 4.1.0+62+5bfa59b starting: java version 1.8.0_242 by Oracle Corporation
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.275] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.297] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Found launch services [minecraft,testharness,fmlclient,fmlserver]
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.297] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.390] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Found naming services : []
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.390] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.452] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]: Found launch plugins: [eventbus,object_holder_definalize,runtime_enum_extender,accesstransformer,capability_inject_definalize,runtimedistcleaner]
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.452] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.514] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Discovering transformation services
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.514] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.552] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found additional transformation services from discovery services: []
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.552] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.611] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found transformer services : [fml]
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.611] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.612] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.612] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.615] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service fml
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.615] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.615] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.615] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.635] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]: Found FMLLauncher version 28.1
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.635] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.636] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML 28.1 loading
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.636] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.636] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found ModLauncher version : 4.1.0+62+5bfa59b
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.636] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.637] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Initializing modjar URL handler
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.637] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.639] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found AccessTransformer version : 1.0.1-milestone.0.1+94458e7+46+94458e7
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.639] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.640] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found EventBus version : 1.0.0+54+3f83a9e
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.640] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.641] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found Runtime Dist Cleaner
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.641] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.662] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found CoreMod version : 1.0.0+4+e6fed88
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.662] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.662] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package implementation version 1.5.0+6+478760f
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.662] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:33.663] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package specification 3
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:33.663] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.291] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.291] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.293] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service fml
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.293] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.300] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Configuring option handling for services
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.300] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.337] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services initializing
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.337] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.339] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service fml
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.339] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.339] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Setting up basic FML game directories
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.339] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.343] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing GAMEDIR directory : /aternos/server
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.343] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.344] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path GAMEDIR is /aternos/server
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.344] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.345] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing MODSDIR directory : /aternos/server/mods
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.345] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.345] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path MODSDIR is /aternos/server/mods
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.345] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.346] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing CONFIGDIR directory : /aternos/server/config
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.346] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.346] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path CONFIGDIR is /aternos/server/config
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.346] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.347] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path FMLCONFIG is /aternos/server/config/fml.toml
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.347] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.347] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading configuration
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.347] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.662] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing default config directory directory : /aternos/server/defaultconfigs
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.662] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.663] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing launch handler
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.663] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.685] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Using fmlserver as launch service
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.685] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.768] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.14.4\' MCP Version: \'20190829.143755\' Forge Version: \'28.1.117\' Forge group: \'net.minecraftforge\'
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.768] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.773] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found JAR asm at path /aternos/server/libraries/org/ow2/asm/asm/6.2/asm-6.2.jar
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.773] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.778] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found probable library path /aternos/server/libraries
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.778] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.781] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found forge path /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar is present
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.781] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.783] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: SRG MC at /aternos/server/libraries/net/minecraft/server/1.14.4-20190829.143755/server-1.14.4-20190829.143755-srg.jar is present
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.783] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.784] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: MC Extras at /aternos/server/libraries/net/minecraft/server/1.14.4/server-1.14.4-extra-stable.jar is present
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.784] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.785] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Forge patches at /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar is present
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.785] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.800] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 0 language providers
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.800] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.803] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding forge as a language from /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.803] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:34.811] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding file:/aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar to languageloader classloader
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:34.811] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.181] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 2 language providers
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.181] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider javafml, version 28.1
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.211] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider minecraft, version 1
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.211] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.221] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service fml
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.221] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.223] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Current naming domain is \'srg\'
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.223] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.226] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Identified name mapping providers {}
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.226] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.226] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services begin scanning
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.226] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.230] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service fml
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.230] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.230] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Initiating mod scan
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.230] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.325] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]: Found mod coordinates from lists: []
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.325] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.431] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]: Found Mod Locators : (mods folder:null),(maven libs:null),(exploded directory:null),(minecraft:null)
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.431] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:35.856] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/[1.14.4] SecurityCraft v1.8.14.jar
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:35.856] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.180] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file [1.14.4] SecurityCraft v1.8.14.jar with {securitycraft} mods - versions {v1.8.14}
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.180] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.181] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/[1.14.4] SecurityCraft v1.8.14.jar with language javafml
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.181] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.199] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/backpacked-1.0.0-1.14.4.jar
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.199] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.203] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file backpacked-1.0.0-1.14.4.jar with {backpacked} mods - versions {1.0.0}
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.203] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.203] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/backpacked-1.0.0-1.14.4.jar with language javafml
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.203] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.452] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod Backpacked with Javascript path coremods/backpacked-transformer.js
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.452] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.453] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod coremods/backpacked-transformer.js
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.453] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.454] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/carrotslib-mc1.14.4-2.0b4.jar
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.454] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.459] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file carrotslib-mc1.14.4-2.0b4.jar with {carrots} mods - versions {2.0.0b4}
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.459] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.460] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/carrotslib-mc1.14.4-2.0b4.jar with language javafml
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.460] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.460] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/comforts-FORGE-1.14.4-2.0-beta3.jar
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.460] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file comforts-FORGE-1.14.4-2.0-beta3.jar with {comforts} mods - versions {FORGE-1.14.4-2.0-beta3}
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/comforts-FORGE-1.14.4-2.0-beta3.jar with language javafml
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/CookingForBlockheads_1.14.4-7.4.4.jar
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.490] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file CookingForBlockheads_1.14.4-7.4.4.jar with {cookingforblockheads} mods - versions {7.4.4}
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.490] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.490] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/CookingForBlockheads_1.14.4-7.4.4.jar with language javafml
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.490] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.491] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/DungeonCrawl-1.14.4-1.6.1.jar
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.491] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file DungeonCrawl-1.14.4-1.6.1.jar with {dungeoncrawl} mods - versions {1.6.1}
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/DungeonCrawl-1.14.4-1.6.1.jar with language javafml
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/ElevatorMod-1.14.4-1.3.11.jar
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file ElevatorMod-1.14.4-1.3.11.jar with {elevatorid} mods - versions {1.14.4-1.3.11}
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/ElevatorMod-1.14.4-1.3.11.jar with language javafml
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/embellishcraft-1.14.4-1.3.0.jar
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.505] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file embellishcraft-1.14.4-1.3.0.jar with {embellishcraft} mods - versions {1.14.4-1.3.0}
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.505] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.505] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/embellishcraft-1.14.4-1.3.0.jar with language javafml
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.505] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.506] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/extlights-1.6.jar
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.506] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.523] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file extlights-1.6.jar with {extlights} mods - versions {1.6}
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.523] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.523] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/extlights-1.6.jar with language javafml
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.523] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.524] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/extraboats-1.0.1-1.14.4.jar
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.524] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.526] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file extraboats-1.0.1-1.14.4.jar with {extraboats} mods - versions {1.0.1}
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.526] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.527] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/extraboats-1.0.1-1.14.4.jar with language javafml
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.527] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.527] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/FarmingForBlockheads_1.14.4-5.3.2.jar
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.527] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file FarmingForBlockheads_1.14.4-5.3.2.jar with {farmingforblockheads} mods - versions {5.3.2}
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/FarmingForBlockheads_1.14.4-5.3.2.jar with language javafml
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/fashion-1.14.4-2.3.0.0.jar
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.549] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file fashion-1.14.4-2.3.0.0.jar with {fashion} mods - versions {**.**.**.**}
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.549] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.549] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/fashion-1.14.4-2.3.0.0.jar with language javafml
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.549] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.550] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/Inspirations-1.14.4-1.0.2.jar
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.550] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.564] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file Inspirations-1.14.4-1.0.2.jar with {inspirations} mods - versions {1.14.4-1.0.2}
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.564] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.565] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/Inspirations-1.14.4-1.0.2.jar with language javafml
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.565] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.565] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/jei-1.14.4-6.0.0.13.jar
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.565] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file jei-1.14.4-6.0.0.13.jar with {jei} mods - versions {**.**.**.**}
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/jei-1.14.4-6.0.0.13.jar with language javafml
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/jmh_1.14.4-2.2.jar
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.570] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file jmh_1.14.4-2.2.jar with {jmh} mods - versions {2.2}
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.570] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.570] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/jmh_1.14.4-2.2.jar with language javafml
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.570] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.571] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/jph_1.14.4-1.0.jar
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.571] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.572] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file jph_1.14.4-1.0.jar with {jph} mods - versions {1.0}
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.572] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.572] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/jph_1.14.4-1.0.jar with language javafml
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.572] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.573] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/Mantle-1.14.4-1.4.32.jar
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.573] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file Mantle-1.14.4-1.4.32.jar with {mantle} mods - versions {1.4.32}
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/Mantle-1.14.4-1.4.32.jar with language javafml
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/MutantBeasts-1.14.4-0.8.1.jar
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.578] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file MutantBeasts-1.14.4-0.8.1.jar with {mutantbeasts} mods - versions {1.14.4-0.8.1}
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.578] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.579] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/MutantBeasts-1.14.4-0.8.1.jar with language javafml
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.579] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.579] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/mysticallib-1.14.4-1.14.0.jar
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.579] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.582] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file mysticallib-1.14.4-1.14.0.jar with {mysticallib} mods - versions {1.14.4-1.14.0}
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.582] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.582] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/mysticallib-1.14.4-1.14.0.jar with language javafml
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.582] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.583] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/mysticalworld-1.14.4-1.6.10.jar
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.583] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file mysticalworld-1.14.4-1.6.10.jar with {mysticalworld} mods - versions {1.14.4-1.6.10}
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/mysticalworld-1.14.4-1.6.10.jar with language javafml
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/simplefarming-1.14.4-1.1.9.jar
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file simplefarming-1.14.4-1.1.9.jar with {simplefarming} mods - versions {1.14.4-1.1.9}
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/simplefarming-1.14.4-1.1.9.jar with language javafml
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/SimpleStorageNetwork-1.14.4-0.2.0.jar
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file SimpleStorageNetwork-1.14.4-0.2.0.jar with {storagenetwork} mods - versions {1.14.4-0.2.0}
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/SimpleStorageNetwork-1.14.4-0.2.0.jar with language javafml
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/subcommonlib-1.14.4-2.1.0.0.jar
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.621] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file subcommonlib-1.14.4-2.1.0.0.jar with {subcommonlib} mods - versions {**.**.**.**}
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.621] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.621] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/subcommonlib-1.14.4-2.1.0.0.jar with language javafml
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.621] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.622] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/tombstone-3.7.5-1.14.4.jar
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.622] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-3.7.5-1.14.4.jar with {tombstone} mods - versions {3.7.5}
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/tombstone-3.7.5-1.14.4.jar with language javafml
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/Trapcraft-1.14.4-2.6.1-universal.jar
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.627] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file Trapcraft-1.14.4-2.6.1-universal.jar with {trapcraft} mods - versions {2.6.1}
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.627] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.628] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/Trapcraft-1.14.4-2.6.1-universal.jar with language javafml
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.628] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.628] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.628] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.630] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-universal.jar with {forge} mods - versions {28.1.117}
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.630] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.631] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar with language javafml
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.631] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod fieldtomethodtransformers with Javascript path META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.651] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-server.jar with {minecraft} mods - versions {1.14.4}
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.651] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.651] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar with language minecraft
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.651] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.710] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 30 mandatory requirements
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.710] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:36.712] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 0 mandatory mod requirements missing
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:36.712] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:40.472] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service fml
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:40.472] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:40.472] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading transformers
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:40.472] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:40.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service fml
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:40.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:40.474] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading coremod transformers
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:40.474] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:40.474] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from coremods/backpacked-transformer.js
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:40.474] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:42.720] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:42.720] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:42.722] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:42.722] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:42.925] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:42.925] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:42.983] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@1494b84d to Target : CLASS {Lnet/minecraft/entity/player/PlayerEntity;} {} {V}
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:42.983] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.010] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@21ca139c to Target : CLASS {Lnet/minecraft/potion/EffectInstance;} {} {V}
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.010] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.011] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@226f885f to Target : CLASS {Lnet/minecraft/block/FlowingFluidBlock;} {} {V}
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.011] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.012] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@2cd2c8fe to Target : CLASS {Lnet/minecraft/item/BucketItem;} {} {V}
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.012] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.013] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@7d61eccf to Target : CLASS {Lnet/minecraft/block/StairsBlock;} {} {V}
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.013] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.014] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@cc6460c to Target : CLASS {Lnet/minecraft/block/FlowerPotBlock;} {} {V}
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.014] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.014] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@52350abb to Target : CLASS {Lnet/minecraft/item/FishBucketItem;} {} {V}
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.014] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.016] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service fml
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.016] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:43.120] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:43.120] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:47.624] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/entity/player/PlayerEntity
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:47.624] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:57.396] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowingFluidBlock
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:57.396] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:34:58.919] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/StairsBlock
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:34:58.919] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:00.709] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowerPotBlock
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:00.709] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:30.405] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/BucketItem
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:30.405] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:30.573] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/FishBucketItem
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:30.573] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:31.432] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/potion/EffectInstance
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:31.432] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:51.529] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:51.529] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:51.535] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:51.535] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:51.573] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:51.573] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:51.587] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:51.587] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:51.607] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:51.607] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:52.598] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.14.4
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:52.598] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:35:53.676] [Server thread/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]: Loading I18N data entries: 4468
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:35:53.676] [Server thread/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.519] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]: Loading Network data for FML net version: FML2
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.519] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.651] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Using 3 threads for parallel mod-loading
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.651] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.660] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.660] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.691] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.691] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.702] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.702] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.703] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.natamus.justmobheads.Main with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.703] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.727] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.natamus.justmobheads.Main with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.727] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for tv.mapper.embellishcraft.EmbellishCraft with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass tv.mapper.embellishcraft.EmbellishCraft with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for mezz.jei.JustEnoughItems with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass mezz.jei.JustEnoughItems with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for enemeez.simplefarming.SimpleFarming with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.791] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass enemeez.simplefarming.SimpleFarming with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.791] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.791] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.791] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.794] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.794] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.794] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for trapcraft.TrapcraftMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.794] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.800] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass trapcraft.TrapcraftMod with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.800] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.markus1002.extraboats.ExtraBoats with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.803] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.markus1002.extraboats.ExtraBoats with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.803] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.804] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.804] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.805] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.805] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.813] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for slimeknights.mantle.Mantle with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.813] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.864] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass slimeknights.mantle.Mantle with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.864] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.864] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.864] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.865] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.865] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.865] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for lib.Lib with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.865] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.868] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass lib.Lib with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.868] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for org.jwaresoftware.mcmods.lib.CarrotsLib with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.872] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass org.jwaresoftware.mcmods.lib.CarrotsLib with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.872] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.893] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.893] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.894] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.894] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.894] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.polyvalord.extlights.Extlights with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.894] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.polyvalord.extlights.Extlights with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.902] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.blay09.mods.cookingforblockheads.CookingForBlockheads with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.902] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.blay09.mods.cookingforblockheads.CookingForBlockheads with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.920] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for top.theillusivec4.comforts.Comforts with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.920] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.948] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass top.theillusivec4.comforts.Comforts with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.948] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.geforcemods.securitycraft.SecurityCraft with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.geforcemods.securitycraft.SecurityCraft with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.000] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.lothrazar.storagenetwork.StorageNetwork with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.000] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.008] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.lothrazar.storagenetwork.StorageNetwork with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.008] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.008] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.008] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.009] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.009] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.009] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.mrcrayfish.backpacked.Backpacked with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.009] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.119] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.mrcrayfish.backpacked.Backpacked with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.119] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.121] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.121] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.122] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.122] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.140] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for xyz.vsngamer.elevatorid.ElevatorMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.140] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.147] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass xyz.vsngamer.elevatorid.ElevatorMod with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.147] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.148] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.148] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.150] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.150] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.151] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.natamus.justplayerheads.Main with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.151] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.162] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.natamus.justplayerheads.Main with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.162] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.163] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.163] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.163] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.163] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.164] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for ovh.corail.tombstone.ModTombstone with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.164] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.352] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass ovh.corail.tombstone.ModTombstone with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.352] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.355] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.355] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.357] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.357] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.359] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for xiroc.dungeoncrawl.DungeonCrawl with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.359] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.464] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass xiroc.dungeoncrawl.DungeonCrawl with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.464] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.467] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.467] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.468] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.468] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.470] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for chumbanotz.mutantbeasts.MutantBeasts with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.470] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass chumbanotz.mutantbeasts.MutantBeasts with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.blay09.mods.farmingforblockheads.FarmingForBlockheads with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.blay09.mods.farmingforblockheads.FarmingForBlockheads with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for epicsquid.mysticalworld.MysticalWorld with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.845] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass epicsquid.mysticalworld.MysticalWorld with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.845] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.845] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.845] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.874] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.874] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.875] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.minecraftforge.common.ForgeMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.875] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.minecraftforge.common.ForgeMod with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:01.981] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for knightminer.inspirations.Inspirations with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:01.981] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass knightminer.inspirations.Inspirations with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.092] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for epicsquid.mysticallib.MysticalLib with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.092] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass epicsquid.mysticallib.MysticalLib with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.160] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for subaraki.fashion.mod.Fashion with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.160] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.213] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass subaraki.fashion.mod.Fashion with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.213] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:02.980] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:CONSTRUCT
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:02.980] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.055] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mantle of type slimeknights.mantle.Mantle
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.055] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.060] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance elevatorid of type xyz.vsngamer.elevatorid.ElevatorMod
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.060] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.076] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance forge of type net.minecraftforge.common.ForgeMod
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.076] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.079] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Forge Version package package net.minecraftforge.versions.forge, Forge, version 28.1 from cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.079] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge version 28.1.117
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge spec 28.1
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge group net.minecraftforge
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.118] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MC version information 1.14.4
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.118] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]:
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.118] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MCP version information 20190829.143755
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.118] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]:
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.118] [modloading-worker-3/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 28.1.117, for MC 1.14.4 with MCP 20190829.143755
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.118] [modloading-worker-3/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]:
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.139] [modloading-worker-3/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v28.1.117 Initialized
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.139] [modloading-worker-3/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.513] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mantle of type slimeknights.mantle.Mantle
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.513] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.513] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mantle
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.513] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.656] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mantle
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.656] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.670] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mantle
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.670] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.670] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance subcommonlib of type lib.Lib
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.670] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.693] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance subcommonlib of type lib.Lib
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.693] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.693] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for subcommonlib
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.693] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.694] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for subcommonlib
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.694] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.837] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing lib.playerclass.network.NetworkHandler to MOD
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.837] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing lib.Lib to MOD
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for subcommonlib
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance extraboats of type com.markus1002.extraboats.ExtraBoats
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.980] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file elevatorid-common.toml for elevatorid tracking
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.980] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance elevatorid of type xyz.vsngamer.elevatorid.ElevatorMod
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for elevatorid
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for elevatorid
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xyz.vsngamer.elevatorid.init.Registry to MOD
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.075] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity extraboats:chest_boat
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.075] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]:
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.127] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xyz.vsngamer.elevatorid.init.ModSounds to MOD
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.127] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.142] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity extraboats:furnace_boat
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.142] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]:
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.166] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xyz.vsngamer.elevatorid.ElevatorMod to MOD
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.166] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.171] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for elevatorid
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.171] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.171] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance jph of type com.natamus.justplayerheads.Main
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.171] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.181] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity extraboats:large_boat
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.181] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]:
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance extraboats of type com.markus1002.extraboats.ExtraBoats
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for extraboats
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for extraboats
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.331] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.markus1002.extraboats.ExtraBoats$RegistryEvents to MOD
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.331] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.markus1002.extraboats.entity.ModEntities to MOD
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for extraboats
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance cookingforblockheads of type net.blay09.mods.cookingforblockheads.CookingForBlockheads
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file jph-common.toml for jph tracking
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance jph of type com.natamus.justplayerheads.Main
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for jph
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for jph
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.natamus.justplayerheads.events.PlayerEvent to FORGE
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.454] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for jph
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.454] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.454] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance tombstone of type ovh.corail.tombstone.ModTombstone
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.454] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.527] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-client.toml for forge tracking
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.527] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.535] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-server.toml for forge tracking
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.535] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.580] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance forge of type net.minecraftforge.common.ForgeMod
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.580] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.583] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for forge
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.583] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.583] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for forge
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.583] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.620] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for forge
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.620] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.621] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance inspirations of type knightminer.inspirations.Inspirations
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.621] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.709] [modloading-worker-3/DEBUG] [slimeknights.mantle.pulsar.config.PulsarConfig/PULSAR]: Built TOML config for /aternos/server/config/inspirationsModules.toml
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.709] [modloading-worker-3/DEBUG] [slimeknights.mantle.pulsar.config.PulsarConfig/PULSAR]:
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.716] [modloading-worker-3/DEBUG] [slimeknights.mantle.pulsar.config.PulsarConfig/PULSAR]: Loaded TOML config file /aternos/server/config/inspirationsModules.toml
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.716] [modloading-worker-3/DEBUG] [slimeknights.mantle.pulsar.config.PulsarConfig/PULSAR]:
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.872] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file cookingforblockheads-common.toml for cookingforblockheads tracking
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.872] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.872] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file cookingforblockheads-client.toml for cookingforblockheads tracking
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.872] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.907] [modloading-worker-3/DEBUG] [Pulsar-inspirations/PULSAR]: Attaching [PulseManager[inspirations]] to event bus for container [net.minecraftforge.fml.javafmlmod.FMLModContainer@384c09f1]
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.907] [modloading-worker-3/DEBUG] [Pulsar-inspirations/PULSAR]:
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.911] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file inspirations-server.toml for inspirations tracking
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.911] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.912] [modloading-worker-3/INFO] [inspirations/]: Loading replacements config file...
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.912] [modloading-worker-3/INFO] [inspirations/]:
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:04.978] [modloading-worker-3/INFO] [inspirations/]: Config loaded.
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:04.978] [modloading-worker-3/INFO] [inspirations/]:
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.178] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance cookingforblockheads of type net.blay09.mods.cookingforblockheads.CookingForBlockheads
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.178] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.178] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for cookingforblockheads
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.178] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [351] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.179] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for cookingforblockheads
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.179] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [352] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.180] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.cookingforblockheads.CookingForBlockheads to MOD
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.180] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [353] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.218] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.cookingforblockheads.compat.json.JsonCompatLoader to FORGE
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.218] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [354] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.290] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-client.toml for tombstone tracking
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.290] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [355] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.292] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-common.toml for tombstone tracking
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.292] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [356] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.760] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.cookingforblockheads.compat.CompatCapabilityLoader to FORGE
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.760] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [357] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance tombstone of type ovh.corail.tombstone.ModTombstone
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [358] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for tombstone
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [359] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for tombstone
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [360] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.RegistryHandler to MOD
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [361] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.772] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSounds to MOD
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.772] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [362] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.788] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for cookingforblockheads
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.788] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [363] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.788] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance comforts of type top.theillusivec4.comforts.Comforts
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.788] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [364] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.805] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSerializers to MOD
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.805] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [365] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.832] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModItems to MOD
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.832] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [366] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.844] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file comforts-server.toml for comforts tracking
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.844] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [367] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance comforts of type top.theillusivec4.comforts.Comforts
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [368] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for comforts
                                    [number:protected] => 369
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [369] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for comforts
                                    [number:protected] => 370
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [370] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing top.theillusivec4.comforts.Comforts$RegistryEvents to MOD
                                    [number:protected] => 371
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [371] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.868] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for comforts
                                    [number:protected] => 372
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.868] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [372] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.876] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance carrots of type org.jwaresoftware.mcmods.lib.CarrotsLib
                                    [number:protected] => 373
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.876] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [373] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:05.903] [modloading-worker-2/INFO] [CRT/]: Carrots Lib mod constructor called
                                    [number:protected] => 374
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:05.903] [modloading-worker-2/INFO] [CRT/]:
                )

            [374] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.360] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity redstone_arrow
                                    [number:protected] => 375
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.360] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [375] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.433] [modloading-worker-2/INFO] [CRT/]: Potion effect neutralizer hook initialized successfully!
                                    [number:protected] => 376
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.433] [modloading-worker-2/INFO] [CRT/]:
                )

            [376] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance inspirations of type knightminer.inspirations.Inspirations
                                    [number:protected] => 377
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [377] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for inspirations
                                    [number:protected] => 378
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [378] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for inspirations
                                    [number:protected] => 379
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [379] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.711] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for inspirations
                                    [number:protected] => 380
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.711] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [380] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.713] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mysticallib of type epicsquid.mysticallib.MysticalLib
                                    [number:protected] => 381
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.713] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [381] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.745] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mysticallib of type epicsquid.mysticallib.MysticalLib
                                    [number:protected] => 382
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.745] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [382] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.746] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mysticallib
                                    [number:protected] => 383
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.746] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [383] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.746] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mysticallib
                                    [number:protected] => 384
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.746] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [384] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.753] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticallib.MysticalLib to MOD
                                    [number:protected] => 385
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.753] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [385] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.755] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticallib.LibRegistry to FORGE
                                    [number:protected] => 386
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.755] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [386] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.770] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mysticallib
                                    [number:protected] => 387
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.770] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [387] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.771] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance fashion of type subaraki.fashion.mod.Fashion
                                    [number:protected] => 388
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.771] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [388] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.816] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance fashion of type subaraki.fashion.mod.Fashion
                                    [number:protected] => 389
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.816] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [389] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.817] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for fashion
                                    [number:protected] => 390
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.817] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [390] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.817] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for fashion
                                    [number:protected] => 391
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.817] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [391] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.818] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing subaraki.fashion.mod.Fashion to MOD
                                    [number:protected] => 392
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.818] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [392] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.826] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing subaraki.fashion.client.event.mod_bus.ModelLoadingEvent to MOD
                                    [number:protected] => 393
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.826] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [393] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.955] [modloading-worker-2/INFO] [CRT/]: Potion type converter hook initialized successfully!
                                    [number:protected] => 394
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.955] [modloading-worker-2/INFO] [CRT/]:
                )

            [394] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.986] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for fashion
                                    [number:protected] => 395
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.986] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [395] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:06.987] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance farmingforblockheads of type net.blay09.mods.farmingforblockheads.FarmingForBlockheads
                                    [number:protected] => 396
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:06.987] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [396] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:07.154] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance farmingforblockheads of type net.blay09.mods.farmingforblockheads.FarmingForBlockheads
                                    [number:protected] => 397
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:07.154] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [397] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for farmingforblockheads
                                    [number:protected] => 398
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [398] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for farmingforblockheads
                                    [number:protected] => 399
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [399] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.farmingforblockheads.registry.market.MarketRegistryLoader to FORGE
                                    [number:protected] => 400
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [400] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.724] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.farmingforblockheads.FarmlandHandler to FORGE
                                    [number:protected] => 401
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.724] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [401] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance carrots of type org.jwaresoftware.mcmods.lib.CarrotsLib
                                    [number:protected] => 402
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [402] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for carrots
                                    [number:protected] => 403
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [403] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for carrots
                                    [number:protected] => 404
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [404] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing org.jwaresoftware.mcmods.lib.CarrotsLib to MOD
                                    [number:protected] => 405
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [405] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for carrots
                                    [number:protected] => 406
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [406] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance extlights of type com.polyvalord.extlights.Extlights
                                    [number:protected] => 407
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [407] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.772] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance extlights of type com.polyvalord.extlights.Extlights
                                    [number:protected] => 408
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.772] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [408] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for extlights
                                    [number:protected] => 409
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [409] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for extlights
                                    [number:protected] => 410
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [410] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.polyvalord.extlights.RegItems to MOD
                                    [number:protected] => 411
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [411] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.776] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.polyvalord.extlights.Extlights$RegistryEvents to MOD
                                    [number:protected] => 412
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.776] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [412] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.847] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.polyvalord.extlights.blocks.RegBlocks to MOD
                                    [number:protected] => 413
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.847] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [413] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.852] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for farmingforblockheads
                                    [number:protected] => 414
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.852] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [414] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.873] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mysticalworld of type epicsquid.mysticalworld.MysticalWorld
                                    [number:protected] => 415
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.873] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [415] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.914] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for extlights
                                    [number:protected] => 416
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.914] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [416] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:08.914] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance jei of type mezz.jei.JustEnoughItems
                                    [number:protected] => 417
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:08.914] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [417] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:09.110] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance jei of type mezz.jei.JustEnoughItems
                                    [number:protected] => 418
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:09.110] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [418] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:09.110] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for jei
                                    [number:protected] => 419
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:09.110] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [419] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for jei
                                    [number:protected] => 420
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [420] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for jei
                                    [number:protected] => 421
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [421] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance simplefarming of type enemeez.simplefarming.SimpleFarming
                                    [number:protected] => 422
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [422] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:09.190] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file simplefarming.toml for simplefarming tracking
                                    [number:protected] => 423
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:09.190] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [423] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.270] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity beetle
                                    [number:protected] => 424
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.270] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [424] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.291] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity deer
                                    [number:protected] => 425
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.291] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [425] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.306] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity frog
                                    [number:protected] => 426
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.306] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [426] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.371] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity silver_fox
                                    [number:protected] => 427
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.371] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [427] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.386] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity sprout
                                    [number:protected] => 428
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.386] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [428] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.535] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity endermini
                                    [number:protected] => 429
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.535] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [429] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance simplefarming of type enemeez.simplefarming.SimpleFarming
                                    [number:protected] => 430
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [430] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for simplefarming
                                    [number:protected] => 431
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [431] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for simplefarming
                                    [number:protected] => 432
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [432] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.569] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity lava_cat
                                    [number:protected] => 433
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.569] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [433] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.579] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing enemeez.simplefarming.config.Config to FORGE
                                    [number:protected] => 434
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.579] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [434] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.675] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for simplefarming
                                    [number:protected] => 435
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.675] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [435] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:10.675] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance trapcraft of type trapcraft.TrapcraftMod
                                    [number:protected] => 436
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:10.675] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [436] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.176] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity owl
                                    [number:protected] => 437
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.176] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [437] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.228] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance trapcraft of type trapcraft.TrapcraftMod
                                    [number:protected] => 438
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.228] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [438] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for trapcraft
                                    [number:protected] => 439
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [439] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for trapcraft
                                    [number:protected] => 440
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [440] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModTileEntities$Registration to MOD
                                    [number:protected] => 441
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [441] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.308] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModItems$Registration to MOD
                                    [number:protected] => 442
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.308] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [442] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.266] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity silkworm
                                    [number:protected] => 443
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.266] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]:
                )

            [443] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.337] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModEntities$Registration to MOD
                                    [number:protected] => 444
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.337] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [444] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.382] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModContainerTypes$Registration to MOD
                                    [number:protected] => 445
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.382] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [445] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.438] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEnchantments to MOD
                                    [number:protected] => 446
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.438] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [446] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.468] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModBlocks$Registration to MOD
                                    [number:protected] => 447
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.468] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [447] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.519] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for trapcraft
                                    [number:protected] => 448
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.519] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [448] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.519] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance jmh of type com.natamus.justmobheads.Main
                                    [number:protected] => 449
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.519] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [449] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.567] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mysticalworld of type epicsquid.mysticalworld.MysticalWorld
                                    [number:protected] => 450
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.567] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [450] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mysticalworld
                                    [number:protected] => 451
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [451] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mysticalworld
                                    [number:protected] => 452
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [452] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.RegistryManager to MOD
                                    [number:protected] => 453
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [453] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.570] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.init.ModVillagers to FORGE
                                    [number:protected] => 454
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.570] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [454] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.617] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.init.ModSounds to MOD
                                    [number:protected] => 455
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.617] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [455] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file jmh-common.toml for jmh tracking
                                    [number:protected] => 456
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [456] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance jmh of type com.natamus.justmobheads.Main
                                    [number:protected] => 457
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [457] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for jmh
                                    [number:protected] => 458
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [458] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for jmh
                                    [number:protected] => 459
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [459] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.natamus.justmobheads.events.EntityEvent to FORGE
                                    [number:protected] => 460
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [460] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.679] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.events.SquidHandler to FORGE
                                    [number:protected] => 461
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.679] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [461] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.700] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for jmh
                                    [number:protected] => 462
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.700] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [462] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.700] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance embellishcraft of type tv.mapper.embellishcraft.EmbellishCraft
                                    [number:protected] => 463
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.700] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [463] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.707] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.events.LootHandler to FORGE
                                    [number:protected] => 464
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.707] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [464] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mysticalworld
                                    [number:protected] => 465
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [465] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mutantbeasts of type chumbanotz.mutantbeasts.MutantBeasts
                                    [number:protected] => 466
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [466] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.723] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEffects to MOD
                                    [number:protected] => 467
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.723] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [467] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.731] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModBlocks to MOD
                                    [number:protected] => 468
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.731] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [468] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.761] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.helper.WorldFunctionInjector to FORGE
                                    [number:protected] => 469
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.761] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [469] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.768] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file embellishcraft-server.toml for embellishcraft tracking
                                    [number:protected] => 470
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.768] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [470] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.770] [modloading-worker-2/DEBUG] [tv.mapper.embellishcraft.EmbellishCraft/]: Loading config file /aternos/server/config/embellishcraft-server.toml
                                    [number:protected] => 471
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.770] [modloading-worker-2/DEBUG] [tv.mapper.embellishcraft.EmbellishCraft/]:
                )

            [471] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file mutantbeasts-common.toml for mutantbeasts tracking
                                    [number:protected] => 472
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [472] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mutantbeasts of type chumbanotz.mutantbeasts.MutantBeasts
                                    [number:protected] => 473
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [473] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mutantbeasts
                                    [number:protected] => 474
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [474] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mutantbeasts
                                    [number:protected] => 475
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [475] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing chumbanotz.mutantbeasts.RegistryHandler to MOD
                                    [number:protected] => 476
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [476] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance embellishcraft of type tv.mapper.embellishcraft.EmbellishCraft
                                    [number:protected] => 477
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [477] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for embellishcraft
                                    [number:protected] => 478
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [478] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for embellishcraft
                                    [number:protected] => 479
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [479] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.util.SeatUtil to FORGE
                                    [number:protected] => 480
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [480] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.832] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.event.EventHandler to FORGE
                                    [number:protected] => 481
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.832] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [481] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.899] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.init.ModItems to MOD
                                    [number:protected] => 482
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.899] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [482] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.911] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing chumbanotz.mutantbeasts.EventHandler to FORGE
                                    [number:protected] => 483
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.911] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [483] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:11.932] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.init.ModEntities$Registration to MOD
                                    [number:protected] => 484
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:11.932] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [484] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.004] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.init.ModBlocks to MOD
                                    [number:protected] => 485
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.004] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [485] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.253] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for embellishcraft
                                    [number:protected] => 486
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.253] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [486] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.264] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance storagenetwork of type com.lothrazar.storagenetwork.StorageNetwork
                                    [number:protected] => 487
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.264] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [487] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.515] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mutantbeasts
                                    [number:protected] => 488
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.515] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [488] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.515] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance securitycraft of type net.geforcemods.securitycraft.SecurityCraft
                                    [number:protected] => 489
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.515] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [489] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file securitycraft-common.toml for securitycraft tracking
                                    [number:protected] => 490
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                )

            [490] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance securitycraft of type net.geforcemods.securitycraft.SecurityCraft
                                    [number:protected] => 491
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [491] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for securitycraft
                                    [number:protected] => 492
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [492] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for securitycraft
                                    [number:protected] => 493
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [493] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.geforcemods.securitycraft.SecurityCraft to MOD
                                    [number:protected] => 494
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [494] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.625] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.geforcemods.securitycraft.SCEventHandler to FORGE
                                    [number:protected] => 495
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.625] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [495] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.666] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance storagenetwork of type com.lothrazar.storagenetwork.StorageNetwork
                                    [number:protected] => 496
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.666] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [496] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for storagenetwork
                                    [number:protected] => 497
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [497] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for storagenetwork
                                    [number:protected] => 498
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [498] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.lothrazar.storagenetwork.StorageNetwork$RegistryEvents to MOD
                                    [number:protected] => 499
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [499] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.679] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for storagenetwork
                                    [number:protected] => 500
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.679] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [500] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:12.679] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance backpacked of type com.mrcrayfish.backpacked.Backpacked
                                    [number:protected] => 501
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:12.679] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [501] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.005] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.ConfigTombstone to FORGE
                                    [number:protected] => 502
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.005] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [502] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.010] [modloading-worker-2/FATAL] [net.minecraftforge.fml.loading.RuntimeDistCleaner/DISTXFORM]: Attempted to load class net/minecraft/client/renderer/texture/AtlasTexture for invalid dist DEDICATED_SERVER
                                    [number:protected] => 503
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.010] [modloading-worker-2/FATAL] [net.minecraftforge.fml.loading.RuntimeDistCleaner/DISTXFORM]:
                )

            [503] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.011] [modloading-worker-2/ERROR] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Failed to create mod instance. ModID: backpacked, class com.mrcrayfish.backpacked.Backpacked
                                    [number:protected] => 504
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.RuntimeException: Attempted to load class net/minecraft/client/renderer/texture/AtlasTexture for invalid dist DEDICATED_SERVER
                                    [number:protected] => 505
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClass(RuntimeDistCleaner.java:71) ~[forge.jar:28.1]
                                    [number:protected] => 506
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.modlauncher.serviceapi.ILaunchPluginService.processClass(ILaunchPluginService.java:102) ~[modlauncher-4.1.0.jar:4.1.0+62+5bfa59b]
                                    [number:protected] => 507
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:80) ~[modlauncher-4.1.0.jar:?]
                                    [number:protected] => 508
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:115) ~[modlauncher-4.1.0.jar:?]
                                    [number:protected] => 509
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.modlauncher.TransformingClassLoader$DelegatedClassLoader.findClass(TransformingClassLoader.java:241) ~[modlauncher-4.1.0.jar:?]
                                    [number:protected] => 510
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:128) ~[modlauncher-4.1.0.jar:?]
                                    [number:protected] => 511
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:98) ~[modlauncher-4.1.0.jar:?]
                                    [number:protected] => 512
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:352) ~[?:1.8.0_242]
                                    [number:protected] => 513
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.getDeclaredConstructors0(Native Method) ~[?:1.8.0_242]
                                    [number:protected] => 514
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.privateGetDeclaredConstructors(Class.java:2671) ~[?:1.8.0_242]
                                    [number:protected] => 515
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.getConstructor0(Class.java:3075) ~[?:1.8.0_242]
                                    [number:protected] => 516
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.getConstructor(Class.java:1825) ~[?:1.8.0_242]
                                    [number:protected] => 517
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.api.EventListenerHelper.computeListenerList(EventListenerHelper.java:96) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 518
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.api.EventListenerHelper.getListenerListInternal(EventListenerHelper.java:63) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 519
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.api.EventListenerHelper.getListenerList(EventListenerHelper.java:48) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 520
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.EventBus.addToListeners(EventBus.java:228) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 521
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:204) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 522
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:200) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 523
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:161) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 524
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:156) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 525
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:151) ~[eventbus-1.0.0-service.jar:?]
                                    [number:protected] => 526
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.mrcrayfish.backpacked.Backpacked.<init>(Backpacked.java:53) ~[?:1.0.0]
                                    [number:protected] => 527
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeConstructorAccessorImpl.newInstance0(Native Method) ~[?:1.8.0_242]
                                    [number:protected] => 528
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeConstructorAccessorImpl.newInstance(NativeConstructorAccessorImpl.java:62) ~[?:1.8.0_242]
                                    [number:protected] => 529
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.DelegatingConstructorAccessorImpl.newInstance(DelegatingConstructorAccessorImpl.java:45) ~[?:1.8.0_242]
                                    [number:protected] => 530
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.reflect.Constructor.newInstance(Constructor.java:423) ~[?:1.8.0_242]
                                    [number:protected] => 531
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.newInstance(Class.java:442) ~[?:1.8.0_242]
                                    [number:protected] => 532
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.javafmlmod.FMLModContainer.constructMod(FMLModContainer.java:131) ~[?:28.1]
                                    [number:protected] => 533
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.function.Consumer.lambda$andThen$0(Consumer.java:65) ~[?:1.8.0_242]
                                    [number:protected] => 534
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.function.Consumer.lambda$andThen$0(Consumer.java:65) ~[?:1.8.0_242]
                                    [number:protected] => 535
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModContainer.transitionState(ModContainer.java:112) ~[?:?]
                                    [number:protected] => 536
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModList.lambda$null$10(ModList.java:134) ~[?:?]
                                    [number:protected] => 537
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ForEachOps$ForEachOp$OfRef.accept(ForEachOps.java:183) [?:1.8.0_242]
                                    [number:protected] => 538
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) [?:1.8.0_242]
                                    [number:protected] => 539
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) [?:1.8.0_242]
                                    [number:protected] => 540
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ForEachOps$ForEachTask.compute(ForEachOps.java:290) [?:1.8.0_242]
                                    [number:protected] => 541
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CountedCompleter.exec(CountedCompleter.java:731) [?:1.8.0_242]
                                    [number:protected] => 542
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.ForkJoinTask.doExec(ForkJoinTask.java:289) [?:1.8.0_242]
                                    [number:protected] => 543
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.ForkJoinPool$WorkQueue.runTask(ForkJoinPool.java:1056) [?:1.8.0_242]
                                    [number:protected] => 544
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1692) [?:1.8.0_242]
                                    [number:protected] => 545
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:157) [?:1.8.0_242]
                                    [number:protected] => 546
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.011] [modloading-worker-2/ERROR] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [504] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.102] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.geforcemods.securitycraft.RegistrationHandler to MOD
                                    [number:protected] => 547
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.102] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [505] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.670] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for tombstone
                                    [number:protected] => 548
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.670] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [506] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.671] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance dungeoncrawl of type xiroc.dungeoncrawl.DungeonCrawl
                                    [number:protected] => 549
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.671] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [507] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.704] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for securitycraft
                                    [number:protected] => 550
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.704] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [508] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.672] [modloading-worker-1/INFO] [Dungeon Crawl/]: Here we go! Launching Dungeon Crawl 1.6.1...
                                    [number:protected] => 551
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.672] [modloading-worker-1/INFO] [Dungeon Crawl/]:
                )

            [509] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance dungeoncrawl of type xiroc.dungeoncrawl.DungeonCrawl
                                    [number:protected] => 552
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [510] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for dungeoncrawl
                                    [number:protected] => 553
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [511] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for dungeoncrawl
                                    [number:protected] => 554
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [512] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xiroc.dungeoncrawl.util.EventManager to MOD
                                    [number:protected] => 555
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                )

            [513] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.925] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for dungeoncrawl
                                    [number:protected] => 556
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.925] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                )

            [514] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:13.925] [Server thread/INFO] [net.minecraftforge.fml.DeferredWorkQueue/LOADING]: Dispatching synchronous work after CONSTRUCT: 2 jobs
                                    [number:protected] => 557
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:13.925] [Server thread/INFO] [net.minecraftforge.fml.DeferredWorkQueue/LOADING]:
                )

            [515] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:14.145] [Server thread/INFO] [net.minecraftforge.fml.DeferredWorkQueue/LOADING]: Synchronous work queue completed in 00:00:00.199
                                    [number:protected] => 558
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:14.145] [Server thread/INFO] [net.minecraftforge.fml.DeferredWorkQueue/LOADING]:
                )

            [516] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:14.162] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/LOADING]: Failed to complete lifecycle event CONSTRUCT, 1 errors found
                                    [number:protected] => 559
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:14.162] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/LOADING]:
                )

            [517] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:14.186] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
                                    [number:protected] => 560
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
                                    [number:protected] => 561
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Backpacked (backpacked) has failed to load correctly
                                    [number:protected] => 562
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => §7Attempted to load class net/minecraft/client/renderer/texture/AtlasTexture for invalid dist DEDICATED_SERVER
                                    [number:protected] => 563
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ]
                                    [number:protected] => 564
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.dispatchAndHandleError(ModLoader.java:201) ~[?:?]
                                    [number:protected] => 565
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:183) ~[?:?]
                                    [number:protected] => 566
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
                                    [number:protected] => 567
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) ~[?:?]
                                    [number:protected] => 568
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
                                    [number:protected] => 569
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 570
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:14.186] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                )

            [518] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:14.311] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2020-02-14_20.36.14-server.txt
                                    [number:protected] => 571
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:14.311] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                )

            [519] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:14.462] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Stopping server
                                    [number:protected] => 572
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:14.462] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [520] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:14.469] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving worlds
                                    [number:protected] => 573
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:14.469] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [521] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14Feb2020 20:36:14.470] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Exception stopping the server
                                    [number:protected] => 574
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.RuntimeException: The server has failed to initialize correctly due to mod loading errors. Examine the crash report for more details.
                                    [number:protected] => 575
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.DimensionManager.getWorld(DimensionManager.java:182) ~[?:?]
                                    [number:protected] => 576
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71218_a(MinecraftServer.java:979) ~[?:?]
                                    [number:protected] => 577
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_213211_a(MinecraftServer.java:521) ~[?:?]
                                    [number:protected] => 578
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71260_j(MinecraftServer.java:553) ~[?:?]
                                    [number:protected] => 579
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71260_j(DedicatedServer.java:544) ~[?:?]
                                    [number:protected] => 580
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:661) [?:?]
                                    [number:protected] => 581
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 582
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14Feb2020 20:36:14.470] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                )

        )

    [iterator:protected] => 522
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [14Feb2020 20:34:33.257] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 28.1.117, --fml.mcpVersion, 20190829.143755, --fml.mcVersion, 1.14.4, --fml.forgeGroup, net.minecraftforge, nogui]
[14Feb2020 20:34:33.275] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 4.1.0+62+5bfa59b starting: java version 1.8.0_242 by Oracle Corporation
[14Feb2020 20:34:33.297] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Found launch services [minecraft,testharness,fmlclient,fmlserver]
[14Feb2020 20:34:33.390] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Found naming services : []
[14Feb2020 20:34:33.452] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]: Found launch plugins: [eventbus,object_holder_definalize,runtime_enum_extender,accesstransformer,capability_inject_definalize,runtimedistcleaner]
[14Feb2020 20:34:33.514] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Discovering transformation services
[14Feb2020 20:34:33.552] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found additional transformation services from discovery services: []
[14Feb2020 20:34:33.611] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found transformer services : [fml]
[14Feb2020 20:34:33.612] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading
[14Feb2020 20:34:33.615] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service fml
[14Feb2020 20:34:33.615] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]: Injecting tracing printstreams for STDOUT/STDERR.
[14Feb2020 20:34:33.635] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]: Found FMLLauncher version 28.1
[14Feb2020 20:34:33.636] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML 28.1 loading
[14Feb2020 20:34:33.636] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found ModLauncher version : 4.1.0+62+5bfa59b
[14Feb2020 20:34:33.637] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Initializing modjar URL handler
[14Feb2020 20:34:33.639] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found AccessTransformer version : 1.0.1-milestone.0.1+94458e7+46+94458e7
[14Feb2020 20:34:33.640] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found EventBus version : 1.0.0+54+3f83a9e
[14Feb2020 20:34:33.641] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found Runtime Dist Cleaner
[14Feb2020 20:34:33.662] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found CoreMod version : 1.0.0+4+e6fed88
[14Feb2020 20:34:33.662] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package implementation version 1.5.0+6+478760f
[14Feb2020 20:34:33.663] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package specification 3
[14Feb2020 20:34:34.291] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
[14Feb2020 20:34:34.293] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service fml
[14Feb2020 20:34:34.300] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Configuring option handling for services
[14Feb2020 20:34:34.337] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services initializing
[14Feb2020 20:34:34.339] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service fml
[14Feb2020 20:34:34.339] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Setting up basic FML game directories
[14Feb2020 20:34:34.343] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing GAMEDIR directory : /aternos/server
[14Feb2020 20:34:34.344] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path GAMEDIR is /aternos/server
[14Feb2020 20:34:34.345] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing MODSDIR directory : /aternos/server/mods
[14Feb2020 20:34:34.345] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path MODSDIR is /aternos/server/mods
[14Feb2020 20:34:34.346] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing CONFIGDIR directory : /aternos/server/config
[14Feb2020 20:34:34.346] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path CONFIGDIR is /aternos/server/config
[14Feb2020 20:34:34.347] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path FMLCONFIG is /aternos/server/config/fml.toml
[14Feb2020 20:34:34.347] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading configuration
[14Feb2020 20:34:34.662] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing default config directory directory : /aternos/server/defaultconfigs
[14Feb2020 20:34:34.663] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing launch handler
[14Feb2020 20:34:34.685] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Using fmlserver as launch service
[14Feb2020 20:34:34.768] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.14.4\' MCP Version: \'20190829.143755\' Forge Version: \'28.1.117\' Forge group: \'net.minecraftforge\'
[14Feb2020 20:34:34.773] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found JAR asm at path /aternos/server/libraries/org/ow2/asm/asm/6.2/asm-6.2.jar
[14Feb2020 20:34:34.778] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found probable library path /aternos/server/libraries
[14Feb2020 20:34:34.781] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found forge path /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar is present
[14Feb2020 20:34:34.783] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: SRG MC at /aternos/server/libraries/net/minecraft/server/1.14.4-20190829.143755/server-1.14.4-20190829.143755-srg.jar is present
[14Feb2020 20:34:34.784] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: MC Extras at /aternos/server/libraries/net/minecraft/server/1.14.4/server-1.14.4-extra-stable.jar is present
[14Feb2020 20:34:34.785] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Forge patches at /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar is present
[14Feb2020 20:34:34.800] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 0 language providers
[14Feb2020 20:34:34.803] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding forge as a language from /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
[14Feb2020 20:34:34.811] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding file:/aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar to languageloader classloader
[14Feb2020 20:34:35.181] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 2 language providers
[14Feb2020 20:34:35.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider javafml, version 28.1
[14Feb2020 20:34:35.211] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider minecraft, version 1
[14Feb2020 20:34:35.221] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service fml
[14Feb2020 20:34:35.223] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Current naming domain is \'srg\'
[14Feb2020 20:34:35.226] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Identified name mapping providers {}
[14Feb2020 20:34:35.226] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services begin scanning
[14Feb2020 20:34:35.230] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service fml
[14Feb2020 20:34:35.230] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Initiating mod scan
[14Feb2020 20:34:35.325] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]: Found mod coordinates from lists: []
[14Feb2020 20:34:35.431] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]: Found Mod Locators : (mods folder:null),(maven libs:null),(exploded directory:null),(minecraft:null)
[14Feb2020 20:34:35.856] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/[1.14.4] SecurityCraft v1.8.14.jar
[14Feb2020 20:34:36.180] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file [1.14.4] SecurityCraft v1.8.14.jar with {securitycraft} mods - versions {v1.8.14}
[14Feb2020 20:34:36.181] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/[1.14.4] SecurityCraft v1.8.14.jar with language javafml
[14Feb2020 20:34:36.199] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/backpacked-1.0.0-1.14.4.jar
[14Feb2020 20:34:36.203] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file backpacked-1.0.0-1.14.4.jar with {backpacked} mods - versions {1.0.0}
[14Feb2020 20:34:36.203] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/backpacked-1.0.0-1.14.4.jar with language javafml
[14Feb2020 20:34:36.452] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod Backpacked with Javascript path coremods/backpacked-transformer.js
[14Feb2020 20:34:36.453] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod coremods/backpacked-transformer.js
[14Feb2020 20:34:36.454] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/carrotslib-mc1.14.4-2.0b4.jar
[14Feb2020 20:34:36.459] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file carrotslib-mc1.14.4-2.0b4.jar with {carrots} mods - versions {2.0.0b4}
[14Feb2020 20:34:36.460] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/carrotslib-mc1.14.4-2.0b4.jar with language javafml
[14Feb2020 20:34:36.460] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/comforts-FORGE-1.14.4-2.0-beta3.jar
[14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file comforts-FORGE-1.14.4-2.0-beta3.jar with {comforts} mods - versions {FORGE-1.14.4-2.0-beta3}
[14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/comforts-FORGE-1.14.4-2.0-beta3.jar with language javafml
[14Feb2020 20:34:36.464] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/CookingForBlockheads_1.14.4-7.4.4.jar
[14Feb2020 20:34:36.490] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file CookingForBlockheads_1.14.4-7.4.4.jar with {cookingforblockheads} mods - versions {7.4.4}
[14Feb2020 20:34:36.490] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/CookingForBlockheads_1.14.4-7.4.4.jar with language javafml
[14Feb2020 20:34:36.491] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/DungeonCrawl-1.14.4-1.6.1.jar
[14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file DungeonCrawl-1.14.4-1.6.1.jar with {dungeoncrawl} mods - versions {1.6.1}
[14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/DungeonCrawl-1.14.4-1.6.1.jar with language javafml
[14Feb2020 20:34:36.499] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/ElevatorMod-1.14.4-1.3.11.jar
[14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file ElevatorMod-1.14.4-1.3.11.jar with {elevatorid} mods - versions {1.14.4-1.3.11}
[14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/ElevatorMod-1.14.4-1.3.11.jar with language javafml
[14Feb2020 20:34:36.502] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/embellishcraft-1.14.4-1.3.0.jar
[14Feb2020 20:34:36.505] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file embellishcraft-1.14.4-1.3.0.jar with {embellishcraft} mods - versions {1.14.4-1.3.0}
[14Feb2020 20:34:36.505] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/embellishcraft-1.14.4-1.3.0.jar with language javafml
[14Feb2020 20:34:36.506] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/extlights-1.6.jar
[14Feb2020 20:34:36.523] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file extlights-1.6.jar with {extlights} mods - versions {1.6}
[14Feb2020 20:34:36.523] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/extlights-1.6.jar with language javafml
[14Feb2020 20:34:36.524] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/extraboats-1.0.1-1.14.4.jar
[14Feb2020 20:34:36.526] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file extraboats-1.0.1-1.14.4.jar with {extraboats} mods - versions {1.0.1}
[14Feb2020 20:34:36.527] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/extraboats-1.0.1-1.14.4.jar with language javafml
[14Feb2020 20:34:36.527] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/FarmingForBlockheads_1.14.4-5.3.2.jar
[14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file FarmingForBlockheads_1.14.4-5.3.2.jar with {farmingforblockheads} mods - versions {5.3.2}
[14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/FarmingForBlockheads_1.14.4-5.3.2.jar with language javafml
[14Feb2020 20:34:36.530] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/fashion-1.14.4-2.3.0.0.jar
[14Feb2020 20:34:36.549] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file fashion-1.14.4-2.3.0.0.jar with {fashion} mods - versions {**.**.**.**}
[14Feb2020 20:34:36.549] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/fashion-1.14.4-2.3.0.0.jar with language javafml
[14Feb2020 20:34:36.550] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/Inspirations-1.14.4-1.0.2.jar
[14Feb2020 20:34:36.564] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file Inspirations-1.14.4-1.0.2.jar with {inspirations} mods - versions {1.14.4-1.0.2}
[14Feb2020 20:34:36.565] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/Inspirations-1.14.4-1.0.2.jar with language javafml
[14Feb2020 20:34:36.565] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/jei-1.14.4-6.0.0.13.jar
[14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file jei-1.14.4-6.0.0.13.jar with {jei} mods - versions {**.**.**.**}
[14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/jei-1.14.4-6.0.0.13.jar with language javafml
[14Feb2020 20:34:36.568] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/jmh_1.14.4-2.2.jar
[14Feb2020 20:34:36.570] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file jmh_1.14.4-2.2.jar with {jmh} mods - versions {2.2}
[14Feb2020 20:34:36.570] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/jmh_1.14.4-2.2.jar with language javafml
[14Feb2020 20:34:36.571] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/jph_1.14.4-1.0.jar
[14Feb2020 20:34:36.572] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file jph_1.14.4-1.0.jar with {jph} mods - versions {1.0}
[14Feb2020 20:34:36.572] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/jph_1.14.4-1.0.jar with language javafml
[14Feb2020 20:34:36.573] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/Mantle-1.14.4-1.4.32.jar
[14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file Mantle-1.14.4-1.4.32.jar with {mantle} mods - versions {1.4.32}
[14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/Mantle-1.14.4-1.4.32.jar with language javafml
[14Feb2020 20:34:36.575] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/MutantBeasts-1.14.4-0.8.1.jar
[14Feb2020 20:34:36.578] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file MutantBeasts-1.14.4-0.8.1.jar with {mutantbeasts} mods - versions {1.14.4-0.8.1}
[14Feb2020 20:34:36.579] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/MutantBeasts-1.14.4-0.8.1.jar with language javafml
[14Feb2020 20:34:36.579] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/mysticallib-1.14.4-1.14.0.jar
[14Feb2020 20:34:36.582] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file mysticallib-1.14.4-1.14.0.jar with {mysticallib} mods - versions {1.14.4-1.14.0}
[14Feb2020 20:34:36.582] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/mysticallib-1.14.4-1.14.0.jar with language javafml
[14Feb2020 20:34:36.583] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/mysticalworld-1.14.4-1.6.10.jar
[14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file mysticalworld-1.14.4-1.6.10.jar with {mysticalworld} mods - versions {1.14.4-1.6.10}
[14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/mysticalworld-1.14.4-1.6.10.jar with language javafml
[14Feb2020 20:34:36.586] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/simplefarming-1.14.4-1.1.9.jar
[14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file simplefarming-1.14.4-1.1.9.jar with {simplefarming} mods - versions {1.14.4-1.1.9}
[14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/simplefarming-1.14.4-1.1.9.jar with language javafml
[14Feb2020 20:34:36.614] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/SimpleStorageNetwork-1.14.4-0.2.0.jar
[14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file SimpleStorageNetwork-1.14.4-0.2.0.jar with {storagenetwork} mods - versions {1.14.4-0.2.0}
[14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/SimpleStorageNetwork-1.14.4-0.2.0.jar with language javafml
[14Feb2020 20:34:36.618] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/subcommonlib-1.14.4-2.1.0.0.jar
[14Feb2020 20:34:36.621] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file subcommonlib-1.14.4-2.1.0.0.jar with {subcommonlib} mods - versions {**.**.**.**}
[14Feb2020 20:34:36.621] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/subcommonlib-1.14.4-2.1.0.0.jar with language javafml
[14Feb2020 20:34:36.622] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/tombstone-3.7.5-1.14.4.jar
[14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-3.7.5-1.14.4.jar with {tombstone} mods - versions {3.7.5}
[14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/tombstone-3.7.5-1.14.4.jar with language javafml
[14Feb2020 20:34:36.625] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/Trapcraft-1.14.4-2.6.1-universal.jar
[14Feb2020 20:34:36.627] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file Trapcraft-1.14.4-2.6.1-universal.jar with {trapcraft} mods - versions {2.6.1}
[14Feb2020 20:34:36.628] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/Trapcraft-1.14.4-2.6.1-universal.jar with language javafml
[14Feb2020 20:34:36.628] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
[14Feb2020 20:34:36.630] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-universal.jar with {forge} mods - versions {28.1.117}
[14Feb2020 20:34:36.631] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar with language javafml
[14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod fieldtomethodtransformers with Javascript path META-INF/fieldtomethodtransformers.js
[14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod META-INF/fieldtomethodtransformers.js
[14Feb2020 20:34:36.632] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar
[14Feb2020 20:34:36.651] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-server.jar with {minecraft} mods - versions {1.14.4}
[14Feb2020 20:34:36.651] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar with language minecraft
[14Feb2020 20:34:36.710] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 30 mandatory requirements
[14Feb2020 20:34:36.712] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 0 mandatory mod requirements missing
[14Feb2020 20:34:40.472] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service fml
[14Feb2020 20:34:40.472] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading transformers
[14Feb2020 20:34:40.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service fml
[14Feb2020 20:34:40.474] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading coremod transformers
[14Feb2020 20:34:40.474] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from coremods/backpacked-transformer.js
[14Feb2020 20:34:42.720] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
[14Feb2020 20:34:42.722] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from META-INF/fieldtomethodtransformers.js
[14Feb2020 20:34:42.925] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
[14Feb2020 20:34:42.983] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@1494b84d to Target : CLASS {Lnet/minecraft/entity/player/PlayerEntity;} {} {V}
[14Feb2020 20:34:43.010] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@21ca139c to Target : CLASS {Lnet/minecraft/potion/EffectInstance;} {} {V}
[14Feb2020 20:34:43.011] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@226f885f to Target : CLASS {Lnet/minecraft/block/FlowingFluidBlock;} {} {V}
[14Feb2020 20:34:43.012] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@2cd2c8fe to Target : CLASS {Lnet/minecraft/item/BucketItem;} {} {V}
[14Feb2020 20:34:43.013] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@7d61eccf to Target : CLASS {Lnet/minecraft/block/StairsBlock;} {} {V}
[14Feb2020 20:34:43.014] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@cc6460c to Target : CLASS {Lnet/minecraft/block/FlowerPotBlock;} {} {V}
[14Feb2020 20:34:43.014] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@52350abb to Target : CLASS {Lnet/minecraft/item/FishBucketItem;} {} {V}
[14Feb2020 20:34:43.016] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service fml
[14Feb2020 20:34:43.120] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
[14Feb2020 20:34:47.624] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/entity/player/PlayerEntity
[14Feb2020 20:34:57.396] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowingFluidBlock
[14Feb2020 20:34:58.919] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/StairsBlock
[14Feb2020 20:35:00.709] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowerPotBlock
[14Feb2020 20:35:30.405] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/BucketItem
[14Feb2020 20:35:30.573] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/FishBucketItem
[14Feb2020 20:35:31.432] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/potion/EffectInstance
[14Feb2020 20:35:51.529] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[14Feb2020 20:35:51.535] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[14Feb2020 20:35:51.573] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[14Feb2020 20:35:51.587] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[14Feb2020 20:35:51.607] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[14Feb2020 20:35:52.598] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.14.4
[14Feb2020 20:35:53.676] [Server thread/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]: Loading I18N data entries: 4468
[14Feb2020 20:36:00.519] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]: Loading Network data for FML net version: FML2
[14Feb2020 20:36:00.651] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Using 3 threads for parallel mod-loading
[14Feb2020 20:36:00.660] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.691] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.702] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.703] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.natamus.justmobheads.Main with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.727] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.natamus.justmobheads.Main with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.728] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for tv.mapper.embellishcraft.EmbellishCraft with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass tv.mapper.embellishcraft.EmbellishCraft with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.732] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for mezz.jei.JustEnoughItems with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass mezz.jei.JustEnoughItems with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.735] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for enemeez.simplefarming.SimpleFarming with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.791] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass enemeez.simplefarming.SimpleFarming with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.791] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.794] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.794] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for trapcraft.TrapcraftMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.800] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass trapcraft.TrapcraftMod with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.801] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.markus1002.extraboats.ExtraBoats with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.803] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.markus1002.extraboats.ExtraBoats with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.804] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.805] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.813] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for slimeknights.mantle.Mantle with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.864] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass slimeknights.mantle.Mantle with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.864] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.865] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.865] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for lib.Lib with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.868] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass lib.Lib with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.869] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for org.jwaresoftware.mcmods.lib.CarrotsLib with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.872] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass org.jwaresoftware.mcmods.lib.CarrotsLib with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.893] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.894] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.894] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.polyvalord.extlights.Extlights with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.polyvalord.extlights.Extlights with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.901] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.902] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.blay09.mods.cookingforblockheads.CookingForBlockheads with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.blay09.mods.cookingforblockheads.CookingForBlockheads with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.919] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.920] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for top.theillusivec4.comforts.Comforts with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.948] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass top.theillusivec4.comforts.Comforts with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.949] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.geforcemods.securitycraft.SecurityCraft with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.geforcemods.securitycraft.SecurityCraft with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:00.999] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.000] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.lothrazar.storagenetwork.StorageNetwork with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.008] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.lothrazar.storagenetwork.StorageNetwork with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.008] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.009] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.009] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.mrcrayfish.backpacked.Backpacked with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.119] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.mrcrayfish.backpacked.Backpacked with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.121] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.122] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.140] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for xyz.vsngamer.elevatorid.ElevatorMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.147] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass xyz.vsngamer.elevatorid.ElevatorMod with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.148] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.150] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.151] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for com.natamus.justplayerheads.Main with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.162] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass com.natamus.justplayerheads.Main with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.163] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.163] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.164] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for ovh.corail.tombstone.ModTombstone with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.352] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass ovh.corail.tombstone.ModTombstone with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.355] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.357] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.359] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for xiroc.dungeoncrawl.DungeonCrawl with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.464] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass xiroc.dungeoncrawl.DungeonCrawl with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.467] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.468] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.470] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for chumbanotz.mutantbeasts.MutantBeasts with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass chumbanotz.mutantbeasts.MutantBeasts with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.545] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.blay09.mods.farmingforblockheads.FarmingForBlockheads with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.blay09.mods.farmingforblockheads.FarmingForBlockheads with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.621] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for epicsquid.mysticalworld.MysticalWorld with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.845] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass epicsquid.mysticalworld.MysticalWorld with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.845] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.874] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.875] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.minecraftforge.common.ForgeMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.minecraftforge.common.ForgeMod with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.980] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:01.981] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for knightminer.inspirations.Inspirations with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass knightminer.inspirations.Inspirations with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.077] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.092] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for epicsquid.mysticallib.MysticalLib with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass epicsquid.mysticallib.MysticalLib with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.159] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 - got cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.160] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for subaraki.fashion.mod.Fashion with classLoader cpw.mods.modlauncher.TransformingClassLoader@d1f74b8 & cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.213] [Server thread/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass subaraki.fashion.mod.Fashion with cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:02.980] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:CONSTRUCT
[14Feb2020 20:36:03.055] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mantle of type slimeknights.mantle.Mantle
[14Feb2020 20:36:03.060] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance elevatorid of type xyz.vsngamer.elevatorid.ElevatorMod
[14Feb2020 20:36:03.076] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance forge of type net.minecraftforge.common.ForgeMod
[14Feb2020 20:36:03.079] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Forge Version package package net.minecraftforge.versions.forge, Forge, version 28.1 from cpw.mods.modlauncher.TransformingClassLoader@d1f74b8
[14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge version 28.1.117
[14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge spec 28.1
[14Feb2020 20:36:03.080] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge group net.minecraftforge
[14Feb2020 20:36:03.118] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MC version information 1.14.4
[14Feb2020 20:36:03.118] [modloading-worker-3/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MCP version information 20190829.143755
[14Feb2020 20:36:03.118] [modloading-worker-3/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 28.1.117, for MC 1.14.4 with MCP 20190829.143755
[14Feb2020 20:36:03.139] [modloading-worker-3/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v28.1.117 Initialized
[14Feb2020 20:36:03.513] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mantle of type slimeknights.mantle.Mantle
[14Feb2020 20:36:03.513] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mantle
[14Feb2020 20:36:03.656] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mantle
[14Feb2020 20:36:03.670] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mantle
[14Feb2020 20:36:03.670] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance subcommonlib of type lib.Lib
[14Feb2020 20:36:03.693] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance subcommonlib of type lib.Lib
[14Feb2020 20:36:03.693] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for subcommonlib
[14Feb2020 20:36:03.694] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for subcommonlib
[14Feb2020 20:36:03.837] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing lib.playerclass.network.NetworkHandler to MOD
[14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing lib.Lib to MOD
[14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for subcommonlib
[14Feb2020 20:36:03.948] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance extraboats of type com.markus1002.extraboats.ExtraBoats
[14Feb2020 20:36:03.980] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file elevatorid-common.toml for elevatorid tracking
[14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance elevatorid of type xyz.vsngamer.elevatorid.ElevatorMod
[14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for elevatorid
[14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for elevatorid
[14Feb2020 20:36:03.981] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xyz.vsngamer.elevatorid.init.Registry to MOD
[14Feb2020 20:36:04.075] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity extraboats:chest_boat
[14Feb2020 20:36:04.127] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xyz.vsngamer.elevatorid.init.ModSounds to MOD
[14Feb2020 20:36:04.142] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity extraboats:furnace_boat
[14Feb2020 20:36:04.166] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xyz.vsngamer.elevatorid.ElevatorMod to MOD
[14Feb2020 20:36:04.171] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for elevatorid
[14Feb2020 20:36:04.171] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance jph of type com.natamus.justplayerheads.Main
[14Feb2020 20:36:04.181] [modloading-worker-2/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity extraboats:large_boat
[14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance extraboats of type com.markus1002.extraboats.ExtraBoats
[14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for extraboats
[14Feb2020 20:36:04.330] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for extraboats
[14Feb2020 20:36:04.331] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.markus1002.extraboats.ExtraBoats$RegistryEvents to MOD
[14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.markus1002.extraboats.entity.ModEntities to MOD
[14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for extraboats
[14Feb2020 20:36:04.362] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance cookingforblockheads of type net.blay09.mods.cookingforblockheads.CookingForBlockheads
[14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file jph-common.toml for jph tracking
[14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance jph of type com.natamus.justplayerheads.Main
[14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for jph
[14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for jph
[14Feb2020 20:36:04.440] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.natamus.justplayerheads.events.PlayerEvent to FORGE
[14Feb2020 20:36:04.454] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for jph
[14Feb2020 20:36:04.454] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance tombstone of type ovh.corail.tombstone.ModTombstone
[14Feb2020 20:36:04.527] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-client.toml for forge tracking
[14Feb2020 20:36:04.535] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-server.toml for forge tracking
[14Feb2020 20:36:04.580] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance forge of type net.minecraftforge.common.ForgeMod
[14Feb2020 20:36:04.583] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for forge
[14Feb2020 20:36:04.583] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for forge
[14Feb2020 20:36:04.620] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for forge
[14Feb2020 20:36:04.621] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance inspirations of type knightminer.inspirations.Inspirations
[14Feb2020 20:36:04.709] [modloading-worker-3/DEBUG] [slimeknights.mantle.pulsar.config.PulsarConfig/PULSAR]: Built TOML config for /aternos/server/config/inspirationsModules.toml
[14Feb2020 20:36:04.716] [modloading-worker-3/DEBUG] [slimeknights.mantle.pulsar.config.PulsarConfig/PULSAR]: Loaded TOML config file /aternos/server/config/inspirationsModules.toml
[14Feb2020 20:36:04.872] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file cookingforblockheads-common.toml for cookingforblockheads tracking
[14Feb2020 20:36:04.872] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file cookingforblockheads-client.toml for cookingforblockheads tracking
[14Feb2020 20:36:04.907] [modloading-worker-3/DEBUG] [Pulsar-inspirations/PULSAR]: Attaching [PulseManager[inspirations]] to event bus for container [net.minecraftforge.fml.javafmlmod.FMLModContainer@384c09f1]
[14Feb2020 20:36:04.911] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file inspirations-server.toml for inspirations tracking
[14Feb2020 20:36:04.912] [modloading-worker-3/INFO] [inspirations/]: Loading replacements config file...
[14Feb2020 20:36:04.978] [modloading-worker-3/INFO] [inspirations/]: Config loaded.
[14Feb2020 20:36:05.178] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance cookingforblockheads of type net.blay09.mods.cookingforblockheads.CookingForBlockheads
[14Feb2020 20:36:05.178] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for cookingforblockheads
[14Feb2020 20:36:05.179] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for cookingforblockheads
[14Feb2020 20:36:05.180] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.cookingforblockheads.CookingForBlockheads to MOD
[14Feb2020 20:36:05.218] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.cookingforblockheads.compat.json.JsonCompatLoader to FORGE
[14Feb2020 20:36:05.290] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-client.toml for tombstone tracking
[14Feb2020 20:36:05.292] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-common.toml for tombstone tracking
[14Feb2020 20:36:05.760] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.cookingforblockheads.compat.CompatCapabilityLoader to FORGE
[14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance tombstone of type ovh.corail.tombstone.ModTombstone
[14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for tombstone
[14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for tombstone
[14Feb2020 20:36:05.763] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.RegistryHandler to MOD
[14Feb2020 20:36:05.772] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSounds to MOD
[14Feb2020 20:36:05.788] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for cookingforblockheads
[14Feb2020 20:36:05.788] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance comforts of type top.theillusivec4.comforts.Comforts
[14Feb2020 20:36:05.805] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSerializers to MOD
[14Feb2020 20:36:05.832] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModItems to MOD
[14Feb2020 20:36:05.844] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file comforts-server.toml for comforts tracking
[14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance comforts of type top.theillusivec4.comforts.Comforts
[14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for comforts
[14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for comforts
[14Feb2020 20:36:05.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing top.theillusivec4.comforts.Comforts$RegistryEvents to MOD
[14Feb2020 20:36:05.868] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for comforts
[14Feb2020 20:36:05.876] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance carrots of type org.jwaresoftware.mcmods.lib.CarrotsLib
[14Feb2020 20:36:05.903] [modloading-worker-2/INFO] [CRT/]: Carrots Lib mod constructor called
[14Feb2020 20:36:06.360] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity redstone_arrow
[14Feb2020 20:36:06.433] [modloading-worker-2/INFO] [CRT/]: Potion effect neutralizer hook initialized successfully!
[14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance inspirations of type knightminer.inspirations.Inspirations
[14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for inspirations
[14Feb2020 20:36:06.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for inspirations
[14Feb2020 20:36:06.711] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for inspirations
[14Feb2020 20:36:06.713] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mysticallib of type epicsquid.mysticallib.MysticalLib
[14Feb2020 20:36:06.745] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mysticallib of type epicsquid.mysticallib.MysticalLib
[14Feb2020 20:36:06.746] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mysticallib
[14Feb2020 20:36:06.746] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mysticallib
[14Feb2020 20:36:06.753] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticallib.MysticalLib to MOD
[14Feb2020 20:36:06.755] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticallib.LibRegistry to FORGE
[14Feb2020 20:36:06.770] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mysticallib
[14Feb2020 20:36:06.771] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance fashion of type subaraki.fashion.mod.Fashion
[14Feb2020 20:36:06.816] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance fashion of type subaraki.fashion.mod.Fashion
[14Feb2020 20:36:06.817] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for fashion
[14Feb2020 20:36:06.817] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for fashion
[14Feb2020 20:36:06.818] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing subaraki.fashion.mod.Fashion to MOD
[14Feb2020 20:36:06.826] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing subaraki.fashion.client.event.mod_bus.ModelLoadingEvent to MOD
[14Feb2020 20:36:06.955] [modloading-worker-2/INFO] [CRT/]: Potion type converter hook initialized successfully!
[14Feb2020 20:36:06.986] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for fashion
[14Feb2020 20:36:06.987] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance farmingforblockheads of type net.blay09.mods.farmingforblockheads.FarmingForBlockheads
[14Feb2020 20:36:07.154] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance farmingforblockheads of type net.blay09.mods.farmingforblockheads.FarmingForBlockheads
[14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for farmingforblockheads
[14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for farmingforblockheads
[14Feb2020 20:36:07.155] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.farmingforblockheads.registry.market.MarketRegistryLoader to FORGE
[14Feb2020 20:36:08.724] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.blay09.mods.farmingforblockheads.FarmlandHandler to FORGE
[14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance carrots of type org.jwaresoftware.mcmods.lib.CarrotsLib
[14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for carrots
[14Feb2020 20:36:08.750] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for carrots
[14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing org.jwaresoftware.mcmods.lib.CarrotsLib to MOD
[14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for carrots
[14Feb2020 20:36:08.751] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance extlights of type com.polyvalord.extlights.Extlights
[14Feb2020 20:36:08.772] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance extlights of type com.polyvalord.extlights.Extlights
[14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for extlights
[14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for extlights
[14Feb2020 20:36:08.773] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.polyvalord.extlights.RegItems to MOD
[14Feb2020 20:36:08.776] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.polyvalord.extlights.Extlights$RegistryEvents to MOD
[14Feb2020 20:36:08.847] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.polyvalord.extlights.blocks.RegBlocks to MOD
[14Feb2020 20:36:08.852] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for farmingforblockheads
[14Feb2020 20:36:08.873] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mysticalworld of type epicsquid.mysticalworld.MysticalWorld
[14Feb2020 20:36:08.914] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for extlights
[14Feb2020 20:36:08.914] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance jei of type mezz.jei.JustEnoughItems
[14Feb2020 20:36:09.110] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance jei of type mezz.jei.JustEnoughItems
[14Feb2020 20:36:09.110] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for jei
[14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for jei
[14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for jei
[14Feb2020 20:36:09.111] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance simplefarming of type enemeez.simplefarming.SimpleFarming
[14Feb2020 20:36:09.190] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file simplefarming.toml for simplefarming tracking
[14Feb2020 20:36:10.270] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity beetle
[14Feb2020 20:36:10.291] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity deer
[14Feb2020 20:36:10.306] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity frog
[14Feb2020 20:36:10.371] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity silver_fox
[14Feb2020 20:36:10.386] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity sprout
[14Feb2020 20:36:10.535] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity endermini
[14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance simplefarming of type enemeez.simplefarming.SimpleFarming
[14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for simplefarming
[14Feb2020 20:36:10.578] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for simplefarming
[14Feb2020 20:36:10.569] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity lava_cat
[14Feb2020 20:36:10.579] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing enemeez.simplefarming.config.Config to FORGE
[14Feb2020 20:36:10.675] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for simplefarming
[14Feb2020 20:36:10.675] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance trapcraft of type trapcraft.TrapcraftMod
[14Feb2020 20:36:11.176] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity owl
[14Feb2020 20:36:11.228] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance trapcraft of type trapcraft.TrapcraftMod
[14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for trapcraft
[14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for trapcraft
[14Feb2020 20:36:11.229] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModTileEntities$Registration to MOD
[14Feb2020 20:36:11.308] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModItems$Registration to MOD
[14Feb2020 20:36:11.266] [modloading-worker-3/WARN] [net.minecraft.entity.EntityType/]: No data fixer registered for entity silkworm
[14Feb2020 20:36:11.337] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModEntities$Registration to MOD
[14Feb2020 20:36:11.382] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModContainerTypes$Registration to MOD
[14Feb2020 20:36:11.438] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEnchantments to MOD
[14Feb2020 20:36:11.468] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing trapcraft.ModBlocks$Registration to MOD
[14Feb2020 20:36:11.519] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for trapcraft
[14Feb2020 20:36:11.519] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance jmh of type com.natamus.justmobheads.Main
[14Feb2020 20:36:11.567] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mysticalworld of type epicsquid.mysticalworld.MysticalWorld
[14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mysticalworld
[14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mysticalworld
[14Feb2020 20:36:11.568] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.RegistryManager to MOD
[14Feb2020 20:36:11.570] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.init.ModVillagers to FORGE
[14Feb2020 20:36:11.617] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.init.ModSounds to MOD
[14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file jmh-common.toml for jmh tracking
[14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance jmh of type com.natamus.justmobheads.Main
[14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for jmh
[14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for jmh
[14Feb2020 20:36:11.677] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.natamus.justmobheads.events.EntityEvent to FORGE
[14Feb2020 20:36:11.679] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.events.SquidHandler to FORGE
[14Feb2020 20:36:11.700] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for jmh
[14Feb2020 20:36:11.700] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance embellishcraft of type tv.mapper.embellishcraft.EmbellishCraft
[14Feb2020 20:36:11.707] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing epicsquid.mysticalworld.events.LootHandler to FORGE
[14Feb2020 20:36:11.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mysticalworld
[14Feb2020 20:36:11.710] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance mutantbeasts of type chumbanotz.mutantbeasts.MutantBeasts
[14Feb2020 20:36:11.723] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEffects to MOD
[14Feb2020 20:36:11.731] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModBlocks to MOD
[14Feb2020 20:36:11.761] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.helper.WorldFunctionInjector to FORGE
[14Feb2020 20:36:11.768] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file embellishcraft-server.toml for embellishcraft tracking
[14Feb2020 20:36:11.770] [modloading-worker-2/DEBUG] [tv.mapper.embellishcraft.EmbellishCraft/]: Loading config file /aternos/server/config/embellishcraft-server.toml
[14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file mutantbeasts-common.toml for mutantbeasts tracking
[14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance mutantbeasts of type chumbanotz.mutantbeasts.MutantBeasts
[14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for mutantbeasts
[14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for mutantbeasts
[14Feb2020 20:36:11.788] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing chumbanotz.mutantbeasts.RegistryHandler to MOD
[14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance embellishcraft of type tv.mapper.embellishcraft.EmbellishCraft
[14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for embellishcraft
[14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for embellishcraft
[14Feb2020 20:36:11.803] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.util.SeatUtil to FORGE
[14Feb2020 20:36:11.832] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.event.EventHandler to FORGE
[14Feb2020 20:36:11.899] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.init.ModItems to MOD
[14Feb2020 20:36:11.911] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing chumbanotz.mutantbeasts.EventHandler to FORGE
[14Feb2020 20:36:11.932] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.init.ModEntities$Registration to MOD
[14Feb2020 20:36:12.004] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing tv.mapper.embellishcraft.init.ModBlocks to MOD
[14Feb2020 20:36:12.253] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for embellishcraft
[14Feb2020 20:36:12.264] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance storagenetwork of type com.lothrazar.storagenetwork.StorageNetwork
[14Feb2020 20:36:12.515] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for mutantbeasts
[14Feb2020 20:36:12.515] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance securitycraft of type net.geforcemods.securitycraft.SecurityCraft
[14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file securitycraft-common.toml for securitycraft tracking
[14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance securitycraft of type net.geforcemods.securitycraft.SecurityCraft
[14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for securitycraft
[14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for securitycraft
[14Feb2020 20:36:12.584] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.geforcemods.securitycraft.SecurityCraft to MOD
[14Feb2020 20:36:12.625] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.geforcemods.securitycraft.SCEventHandler to FORGE
[14Feb2020 20:36:12.666] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance storagenetwork of type com.lothrazar.storagenetwork.StorageNetwork
[14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for storagenetwork
[14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for storagenetwork
[14Feb2020 20:36:12.667] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing com.lothrazar.storagenetwork.StorageNetwork$RegistryEvents to MOD
[14Feb2020 20:36:12.679] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for storagenetwork
[14Feb2020 20:36:12.679] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance backpacked of type com.mrcrayfish.backpacked.Backpacked
[14Feb2020 20:36:13.005] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.ConfigTombstone to FORGE
[14Feb2020 20:36:13.010] [modloading-worker-2/FATAL] [net.minecraftforge.fml.loading.RuntimeDistCleaner/DISTXFORM]: Attempted to load class net/minecraft/client/renderer/texture/AtlasTexture for invalid dist DEDICATED_SERVER
[14Feb2020 20:36:13.011] [modloading-worker-2/ERROR] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Failed to create mod instance. ModID: backpacked, class com.mrcrayfish.backpacked.Backpacked
java.lang.RuntimeException: Attempted to load class net/minecraft/client/renderer/texture/AtlasTexture for invalid dist DEDICATED_SERVER
at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClass(RuntimeDistCleaner.java:71) ~[forge.jar:28.1]
at cpw.mods.modlauncher.serviceapi.ILaunchPluginService.processClass(ILaunchPluginService.java:102) ~[modlauncher-4.1.0.jar:4.1.0+62+5bfa59b]
at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:80) ~[modlauncher-4.1.0.jar:?]
at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:115) ~[modlauncher-4.1.0.jar:?]
at cpw.mods.modlauncher.TransformingClassLoader$DelegatedClassLoader.findClass(TransformingClassLoader.java:241) ~[modlauncher-4.1.0.jar:?]
at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:128) ~[modlauncher-4.1.0.jar:?]
at cpw.mods.modlauncher.TransformingClassLoader.loadClass(TransformingClassLoader.java:98) ~[modlauncher-4.1.0.jar:?]
at java.lang.ClassLoader.loadClass(ClassLoader.java:352) ~[?:1.8.0_242]
at java.lang.Class.getDeclaredConstructors0(Native Method) ~[?:1.8.0_242]
at java.lang.Class.privateGetDeclaredConstructors(Class.java:2671) ~[?:1.8.0_242]
at java.lang.Class.getConstructor0(Class.java:3075) ~[?:1.8.0_242]
at java.lang.Class.getConstructor(Class.java:1825) ~[?:1.8.0_242]
at net.minecraftforge.eventbus.api.EventListenerHelper.computeListenerList(EventListenerHelper.java:96) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.api.EventListenerHelper.getListenerListInternal(EventListenerHelper.java:63) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.api.EventListenerHelper.getListenerList(EventListenerHelper.java:48) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.EventBus.addToListeners(EventBus.java:228) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:204) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:200) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:161) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:156) ~[eventbus-1.0.0-service.jar:?]
at net.minecraftforge.eventbus.EventBus.addListener(EventBus.java:151) ~[eventbus-1.0.0-service.jar:?]
at com.mrcrayfish.backpacked.Backpacked.<init>(Backpacked.java:53) ~[?:1.0.0]
at sun.reflect.NativeConstructorAccessorImpl.newInstance0(Native Method) ~[?:1.8.0_242]
at sun.reflect.NativeConstructorAccessorImpl.newInstance(NativeConstructorAccessorImpl.java:62) ~[?:1.8.0_242]
at sun.reflect.DelegatingConstructorAccessorImpl.newInstance(DelegatingConstructorAccessorImpl.java:45) ~[?:1.8.0_242]
at java.lang.reflect.Constructor.newInstance(Constructor.java:423) ~[?:1.8.0_242]
at java.lang.Class.newInstance(Class.java:442) ~[?:1.8.0_242]
at net.minecraftforge.fml.javafmlmod.FMLModContainer.constructMod(FMLModContainer.java:131) ~[?:28.1]
at java.util.function.Consumer.lambda$andThen$0(Consumer.java:65) ~[?:1.8.0_242]
at java.util.function.Consumer.lambda$andThen$0(Consumer.java:65) ~[?:1.8.0_242]
at net.minecraftforge.fml.ModContainer.transitionState(ModContainer.java:112) ~[?:?]
at net.minecraftforge.fml.ModList.lambda$null$10(ModList.java:134) ~[?:?]
at java.util.stream.ForEachOps$ForEachOp$OfRef.accept(ForEachOps.java:183) [?:1.8.0_242]
at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) [?:1.8.0_242]
at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) [?:1.8.0_242]
at java.util.stream.ForEachOps$ForEachTask.compute(ForEachOps.java:290) [?:1.8.0_242]
at java.util.concurrent.CountedCompleter.exec(CountedCompleter.java:731) [?:1.8.0_242]
at java.util.concurrent.ForkJoinTask.doExec(ForkJoinTask.java:289) [?:1.8.0_242]
at java.util.concurrent.ForkJoinPool$WorkQueue.runTask(ForkJoinPool.java:1056) [?:1.8.0_242]
at java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1692) [?:1.8.0_242]
at java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:157) [?:1.8.0_242]
[14Feb2020 20:36:13.102] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing net.geforcemods.securitycraft.RegistrationHandler to MOD
[14Feb2020 20:36:13.670] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for tombstone
[14Feb2020 20:36:13.671] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance dungeoncrawl of type xiroc.dungeoncrawl.DungeonCrawl
[14Feb2020 20:36:13.704] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for securitycraft
[14Feb2020 20:36:13.672] [modloading-worker-1/INFO] [Dungeon Crawl/]: Here we go! Launching Dungeon Crawl 1.6.1...
[14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance dungeoncrawl of type xiroc.dungeoncrawl.DungeonCrawl
[14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for dungeoncrawl
[14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for dungeoncrawl
[14Feb2020 20:36:13.921] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing xiroc.dungeoncrawl.util.EventManager to MOD
[14Feb2020 20:36:13.925] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for dungeoncrawl
[14Feb2020 20:36:13.925] [Server thread/INFO] [net.minecraftforge.fml.DeferredWorkQueue/LOADING]: Dispatching synchronous work after CONSTRUCT: 2 jobs
[14Feb2020 20:36:14.145] [Server thread/INFO] [net.minecraftforge.fml.DeferredWorkQueue/LOADING]: Synchronous work queue completed in 00:00:00.199
[14Feb2020 20:36:14.162] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/LOADING]: Failed to complete lifecycle event CONSTRUCT, 1 errors found
[14Feb2020 20:36:14.186] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
Backpacked (backpacked) has failed to load correctly
§7Attempted to load class net/minecraft/client/renderer/texture/AtlasTexture for invalid dist DEDICATED_SERVER
]
at net.minecraftforge.fml.ModLoader.dispatchAndHandleError(ModLoader.java:201) ~[?:?]
at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:183) ~[?:?]
at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) ~[?:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
[14Feb2020 20:36:14.311] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2020-02-14_20.36.14-server.txt
[14Feb2020 20:36:14.462] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Stopping server
[14Feb2020 20:36:14.469] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving worlds
[14Feb2020 20:36:14.470] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Exception stopping the server
java.lang.RuntimeException: The server has failed to initialize correctly due to mod loading errors. Examine the crash report for more details.
at net.minecraftforge.common.DimensionManager.getWorld(DimensionManager.java:182) ~[?:?]
at net.minecraft.server.MinecraftServer.func_71218_a(MinecraftServer.java:979) ~[?:?]
at net.minecraft.server.MinecraftServer.func_213211_a(MinecraftServer.java:521) ~[?:?]
at net.minecraft.server.MinecraftServer.func_71260_j(MinecraftServer.java:553) ~[?:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71260_j(DedicatedServer.java:544) ~[?:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:661) [?:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
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
                                            [text:protected] => [14Feb2020 20:34:34.768] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.14.4\' MCP Version: \'20190829.143755\' Forge Version: \'28.1.117\' Forge group: \'net.minecraftforge\'
                                            [number:protected] => 39
                                        )

                                )

                            [level:protected] => DEBUG
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14Feb2020 20:34:34.768] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                        )

                    [counter:protected] => 2
                    [label:protected] => Minecraft version
                    [value:protected] => 1.14.4
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14Feb2020 20:36:03.139] [modloading-worker-3/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v28.1.117 Initialized
                                            [number:protected] => 296
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14Feb2020 20:36:03.139] [modloading-worker-3/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 28.1.117
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModFatalProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14Feb2020 20:36:14.186] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
                                            [number:protected] => 560
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
                                            [number:protected] => 561
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Backpacked (backpacked) has failed to load correctly
                                            [number:protected] => 562
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => §7Attempted to load class net/minecraft/client/renderer/texture/AtlasTexture for invalid dist DEDICATED_SERVER
                                            [number:protected] => 563
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ]
                                            [number:protected] => 564
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoader.dispatchAndHandleError(ModLoader.java:201) ~[?:?]
                                            [number:protected] => 565
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:183) ~[?:?]
                                            [number:protected] => 566
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
                                            [number:protected] => 567
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) ~[?:?]
                                            [number:protected] => 568
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
                                            [number:protected] => 569
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                            [number:protected] => 570
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14Feb2020 20:36:14.186] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution Object
                                (
                                    [modName:protected] => Backpacked
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution Object
                                (
                                    [modName:protected] => Backpacked
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Backpacked
                    [modFileName:protected] => 
                    [modVersion:protected] => 
                    [modId:protected] => backpacked
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.14.4", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 28.1.117", $analysis[1]->getMessage());

        $this->assertEquals("The mod 'Backpacked' has a fatal error.", $analysis[2]->getMessage());
        $this->assertEquals("Remove the mod 'Backpacked'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Install a different version of the mod 'Backpacked'.", $analysis[2][1]->getMessage());

    }
}