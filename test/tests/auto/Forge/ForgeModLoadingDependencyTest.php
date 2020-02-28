<?php

class ForgeModLoadingDependencyTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-loading-dependency.log");
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
                    [prefix:protected] => [07Feb2020 20:20:01.329] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.329] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 28.1.117, --fml.mcpVersion, 20190829.143755, --fml.mcVersion, 1.14.4, --fml.forgeGroup, net.minecraftforge, nogui]
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.360] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.360] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 4.1.0+62+5bfa59b starting: java version 1.8.0_242 by Oracle Corporation
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.429] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.429] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Found launch services [minecraft,testharness,fmlclient,fmlserver]
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.467] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.467] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Found naming services : []
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.499] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.499] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]: Found launch plugins: [eventbus,object_holder_definalize,runtime_enum_extender,accesstransformer,capability_inject_definalize,runtimedistcleaner]
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.526] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.526] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Discovering transformation services
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.547] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.547] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found additional transformation services from discovery services: []
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.652] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.652] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found transformer services : [fml]
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.653] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.653] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.709] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.709] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service fml
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.710] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.710] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.757] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.757] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]: Found FMLLauncher version 28.1
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.774] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.774] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML 28.1 loading
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.775] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.775] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found ModLauncher version : 4.1.0+62+5bfa59b
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.775] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.775] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Initializing modjar URL handler
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.778] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.778] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found AccessTransformer version : 1.0.1-milestone.0.1+94458e7+46+94458e7
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.780] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.780] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found EventBus version : 1.0.0+54+3f83a9e
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.781] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.781] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found Runtime Dist Cleaner
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.917] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.917] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found CoreMod version : 1.0.0+4+e6fed88
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.919] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.919] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package implementation version 1.5.0+6+478760f
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:01.940] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:01.940] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package specification 3
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:02.953] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:02.953] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:02.965] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:02.965] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service fml
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.014] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.014] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Configuring option handling for services
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.105] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.105] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services initializing
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.107] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.107] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service fml
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.107] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.107] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Setting up basic FML game directories
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.126] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.126] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing GAMEDIR directory : /aternos/server
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.131] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.131] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path GAMEDIR is /aternos/server
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing MODSDIR directory : /aternos/server/mods
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path MODSDIR is /aternos/server/mods
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing CONFIGDIR directory : /aternos/server/config
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path CONFIGDIR is /aternos/server/config
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.133] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.133] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path FMLCONFIG is /aternos/server/config/fml.toml
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.133] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.133] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading configuration
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.558] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.558] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing default config directory directory : /aternos/server/defaultconfigs
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.559] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.559] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing launch handler
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.560] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.560] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Using fmlserver as launch service
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.602] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.602] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.14.4\' MCP Version: \'20190829.143755\' Forge Version: \'28.1.117\' Forge group: \'net.minecraftforge\'
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.637] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.637] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found JAR asm at path /aternos/server/libraries/org/ow2/asm/asm/6.2/asm-6.2.jar
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.637] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.637] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found probable library path /aternos/server/libraries
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.639] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.639] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found forge path /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar is present
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.640] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.640] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: SRG MC at /aternos/server/libraries/net/minecraft/server/1.14.4-20190829.143755/server-1.14.4-20190829.143755-srg.jar is present
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.641] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.641] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: MC Extras at /aternos/server/libraries/net/minecraft/server/1.14.4/server-1.14.4-extra-stable.jar is present
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.641] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.641] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Forge patches at /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar is present
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.669] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.669] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 0 language providers
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.694] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.694] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding forge as a language from /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:03.699] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:03.699] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding file:/aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar to languageloader classloader
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.148] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.148] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 2 language providers
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.148] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.148] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider javafml, version 28.1
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.228] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.228] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider minecraft, version 1
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.267] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.267] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service fml
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.287] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.287] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Current naming domain is \'srg\'
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.297] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.297] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Identified name mapping providers {}
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.300] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.300] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services begin scanning
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.311] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.311] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service fml
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.313] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.313] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Initiating mod scan
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.416] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.416] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]: Found mod coordinates from lists: []
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.474] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.474] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]: Found Mod Locators : (mods folder:null),(maven libs:null),(exploded directory:null),(minecraft:null)
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.663] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.663] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/MS Auto-Compat-1.14.4-1.5.1.jar
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.876] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.876] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file MS Auto-Compat-1.14.4-1.5.1.jar with {azurecompat} mods - versions {1.5.1}
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.877] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.877] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/MS Auto-Compat-1.14.4-1.5.1.jar with language javafml
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.879] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.879] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/u_team_core-1.14.4-2.8.2.150.jar
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.898] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.898] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file u_team_core-1.14.4-2.8.2.150.jar with {uteamcore} mods - versions {**.**.**.**}
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.898] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.898] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/u_team_core-1.14.4-2.8.2.150.jar with language javafml
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.899] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.899] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.901] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.901] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-universal.jar with {forge} mods - versions {28.1.117}
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:04.902] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:04.902] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar with language javafml
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:05.153] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:05.153] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod fieldtomethodtransformers with Javascript path META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:05.153] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:05.153] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:05.166] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:05.166] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:05.170] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:05.170] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-server.jar with {minecraft} mods - versions {1.14.4}
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:05.170] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:05.170] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar with language minecraft
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:05.267] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:05.267] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 3 mandatory requirements
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:05.270] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:05.270] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 2 mandatory mod requirements missing
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:08.550] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:08.550] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service fml
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:08.550] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:08.550] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading transformers
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:08.559] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:08.559] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service fml
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:08.560] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:08.560] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading coremod transformers
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:08.561] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:08.561] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.211] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.211] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.245] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.245] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@6722db6e to Target : CLASS {Lnet/minecraft/potion/EffectInstance;} {} {V}
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.249] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.249] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@5049d8b2 to Target : CLASS {Lnet/minecraft/block/FlowingFluidBlock;} {} {V}
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.250] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.250] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@6d0b5baf to Target : CLASS {Lnet/minecraft/item/BucketItem;} {} {V}
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.250] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.250] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@631e06ab to Target : CLASS {Lnet/minecraft/block/StairsBlock;} {} {V}
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.252] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.252] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@2a3591c5 to Target : CLASS {Lnet/minecraft/block/FlowerPotBlock;} {} {V}
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.253] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.253] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@34a75079 to Target : CLASS {Lnet/minecraft/item/FishBucketItem;} {} {V}
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.255] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.255] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service fml
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:10.484] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:10.484] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:21.824] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:21.824] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowingFluidBlock
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:22.899] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:22.899] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/StairsBlock
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:20:24.048] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:20:24.048] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowerPotBlock
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:08.931] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:08.931] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/BucketItem
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:09.099] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:09.099] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/FishBucketItem
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:12.368] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:12.368] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/potion/EffectInstance
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:36.556] [main/WARN] [net.minecraft.command.Commands/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:36.556] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:36.560] [main/WARN] [net.minecraft.command.Commands/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:36.560] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:36.564] [main/WARN] [net.minecraft.command.Commands/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:36.564] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:36.567] [main/WARN] [net.minecraft.command.Commands/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:36.567] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:36.592] [main/WARN] [net.minecraft.command.Commands/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:36.592] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:37.212] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:37.212] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.14.4
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:38.952] [Server thread/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:38.952] [Server thread/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]: Loading I18N data entries: 4468
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:41.413] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:41.413] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]: Loading Network data for FML net version: FML2
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:41.817] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:41.817] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Using 3 threads for parallel mod-loading
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:41.818] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:41.818] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]: Error during pre-loading phase
                                    [number:protected] => 105
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.ModLoadingException: Mod §eazurecompat§r requires §6mmorpg§r §o1 or above§r
                                    [number:protected] => 106
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => §7Currently, §6mmorpg§r§7 is §o§nnot installed
                                    [number:protected] => 107
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoadingException.lambda$fromEarlyException$0(ModLoadingException.java:63) ~[?:?]
                                    [number:protected] => 108
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline$3$1.accept(ReferencePipeline.java:193) ~[?:1.8.0_242]
                                    [number:protected] => 109
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                    [number:protected] => 110
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                    [number:protected] => 111
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                    [number:protected] => 112
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ForEachOps$ForEachOp.evaluateSequential(ForEachOps.java:150) ~[?:1.8.0_242]
                                    [number:protected] => 113
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ForEachOps$ForEachOp$OfRef.evaluateSequential(ForEachOps.java:173) ~[?:1.8.0_242]
                                    [number:protected] => 114
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                    [number:protected] => 115
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline.forEach(ReferencePipeline.java:485) ~[?:1.8.0_242]
                                    [number:protected] => 116
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline$7$1.accept(ReferencePipeline.java:272) ~[?:1.8.0_242]
                                    [number:protected] => 117
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                    [number:protected] => 118
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                    [number:protected] => 119
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                    [number:protected] => 120
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReduceOps$ReduceOp.evaluateSequential(ReduceOps.java:708) ~[?:1.8.0_242]
                                    [number:protected] => 121
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                    [number:protected] => 122
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline.collect(ReferencePipeline.java:566) ~[?:1.8.0_242]
                                    [number:protected] => 123
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.<init>(ModLoader.java:117) ~[?:?]
                                    [number:protected] => 124
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.get(ModLoader.java:146) [?:?]
                                    [number:protected] => 125
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) [?:?]
                                    [number:protected] => 126
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) [?:?]
                                    [number:protected] => 127
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
                                    [number:protected] => 128
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.054] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.054] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
                                    [number:protected] => 130
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
                                    [number:protected] => 131
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Mod §eazurecompat§r requires §6mmorpg§r §o1 or above§r
                                    [number:protected] => 132
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => §7Currently, §6mmorpg§r§7 is §o§nnot installed,
                                    [number:protected] => 133
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Mod §euteamcore§r requires §6forge§r §o28.2.0 or above§r
                                    [number:protected] => 134
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => §7Currently, §6forge§r§7 is §o28.1.117
                                    [number:protected] => 135
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ]
                                    [number:protected] => 136
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:168) ~[?:?]
                                    [number:protected] => 137
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
                                    [number:protected] => 138
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) ~[?:?]
                                    [number:protected] => 139
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
                                    [number:protected] => 140
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.117] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.117] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Forge Version package package net.minecraftforge.versions.forge, Forge, version 28.1 from cpw.mods.modlauncher.TransformingClassLoader@4ebea12c
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge version 28.1.117
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge spec 28.1
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge group net.minecraftforge
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.303] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.303] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2020-02-07_20.21.42-server.txt
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.692] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.692] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Stopping server
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.710] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.710] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving worlds
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [07Feb2020 20:21:42.718] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [07Feb2020 20:21:42.718] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Exception stopping the server
                                    [number:protected] => 149
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.RuntimeException: The server has failed to initialize correctly due to mod loading errors. Examine the crash report for more details.
                                    [number:protected] => 150
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.DimensionManager.getWorld(DimensionManager.java:182) ~[?:?]
                                    [number:protected] => 151
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71218_a(MinecraftServer.java:979) ~[?:?]
                                    [number:protected] => 152
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_213211_a(MinecraftServer.java:521) ~[?:?]
                                    [number:protected] => 153
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71260_j(MinecraftServer.java:553) ~[?:?]
                                    [number:protected] => 154
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71260_j(DedicatedServer.java:544) ~[?:?]
                                    [number:protected] => 155
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:661) [?:?]
                                    [number:protected] => 156
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15Feb2020 14:45:26.737] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15Feb2020 14:45:26.737] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]: Error during pre-loading phase
                                    [number:protected] => 158
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.ModLoadingException: Mod §ecar§r requires §6minecraft§r §o1.15.1§r
                                    [number:protected] => 159
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => §7Currently, §6minecraft§r§7 is §o1.15.2
                                    [number:protected] => 160
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoadingException.lambda$fromEarlyException$0(ModLoadingException.java:63) ~[?:?]
                                    [number:protected] => 161
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline$3$1.accept(ReferencePipeline.java:193) ~[?:1.8.0_242]
                                    [number:protected] => 162
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                    [number:protected] => 163
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                    [number:protected] => 164
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                    [number:protected] => 165
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ForEachOps$ForEachOp.evaluateSequential(ForEachOps.java:150) ~[?:1.8.0_242]
                                    [number:protected] => 166
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ForEachOps$ForEachOp$OfRef.evaluateSequential(ForEachOps.java:173) ~[?:1.8.0_242]
                                    [number:protected] => 167
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                    [number:protected] => 168
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline.forEach(ReferencePipeline.java:485) ~[?:1.8.0_242]
                                    [number:protected] => 169
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline$7$1.accept(ReferencePipeline.java:272) ~[?:1.8.0_242]
                                    [number:protected] => 170
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                    [number:protected] => 171
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                    [number:protected] => 172
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                    [number:protected] => 173
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReduceOps$ReduceOp.evaluateSequential(ReduceOps.java:708) ~[?:1.8.0_242]
                                    [number:protected] => 174
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                    [number:protected] => 175
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.stream.ReferencePipeline.collect(ReferencePipeline.java:566) ~[?:1.8.0_242]
                                    [number:protected] => 176
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.<init>(ModLoader.java:117) ~[?:?]
                                    [number:protected] => 177
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.get(ModLoader.java:146) [?:?]
                                    [number:protected] => 178
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) [?:?]
                                    [number:protected] => 179
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:122) [?:?]
                                    [number:protected] => 180
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:611) [?:?]
                                    [number:protected] => 181
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15Feb2020 14:45:27.141] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15Feb2020 14:45:27.141] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
                                    [number:protected] => 183
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
                                    [number:protected] => 184
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Mod §ecar§r requires §6minecraft§r §o1.15.1§r
                                    [number:protected] => 185
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => §7Currently, §6minecraft§r§7 is §o1.15.2
                                    [number:protected] => 186
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ]
                                    [number:protected] => 187
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:168) ~[?:?]
                                    [number:protected] => 188
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
                                    [number:protected] => 189
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:122) ~[?:?]
                                    [number:protected] => 190
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:611) [?:?]
                                    [number:protected] => 191
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                    [number:protected] => 192
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 116
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [07Feb2020 20:20:01.329] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 28.1.117, --fml.mcpVersion, 20190829.143755, --fml.mcVersion, 1.14.4, --fml.forgeGroup, net.minecraftforge, nogui]
[07Feb2020 20:20:01.360] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 4.1.0+62+5bfa59b starting: java version 1.8.0_242 by Oracle Corporation
[07Feb2020 20:20:01.429] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Found launch services [minecraft,testharness,fmlclient,fmlserver]
[07Feb2020 20:20:01.467] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Found naming services : []
[07Feb2020 20:20:01.499] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]: Found launch plugins: [eventbus,object_holder_definalize,runtime_enum_extender,accesstransformer,capability_inject_definalize,runtimedistcleaner]
[07Feb2020 20:20:01.526] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Discovering transformation services
[07Feb2020 20:20:01.547] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found additional transformation services from discovery services: []
[07Feb2020 20:20:01.652] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found transformer services : [fml]
[07Feb2020 20:20:01.653] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading
[07Feb2020 20:20:01.709] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service fml
[07Feb2020 20:20:01.710] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]: Injecting tracing printstreams for STDOUT/STDERR.
[07Feb2020 20:20:01.757] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]: Found FMLLauncher version 28.1
[07Feb2020 20:20:01.774] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML 28.1 loading
[07Feb2020 20:20:01.775] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found ModLauncher version : 4.1.0+62+5bfa59b
[07Feb2020 20:20:01.775] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Initializing modjar URL handler
[07Feb2020 20:20:01.778] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found AccessTransformer version : 1.0.1-milestone.0.1+94458e7+46+94458e7
[07Feb2020 20:20:01.780] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found EventBus version : 1.0.0+54+3f83a9e
[07Feb2020 20:20:01.781] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found Runtime Dist Cleaner
[07Feb2020 20:20:01.917] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found CoreMod version : 1.0.0+4+e6fed88
[07Feb2020 20:20:01.919] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package implementation version 1.5.0+6+478760f
[07Feb2020 20:20:01.940] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package specification 3
[07Feb2020 20:20:02.953] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
[07Feb2020 20:20:02.965] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service fml
[07Feb2020 20:20:03.014] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Configuring option handling for services
[07Feb2020 20:20:03.105] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services initializing
[07Feb2020 20:20:03.107] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service fml
[07Feb2020 20:20:03.107] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Setting up basic FML game directories
[07Feb2020 20:20:03.126] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing GAMEDIR directory : /aternos/server
[07Feb2020 20:20:03.131] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path GAMEDIR is /aternos/server
[07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing MODSDIR directory : /aternos/server/mods
[07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path MODSDIR is /aternos/server/mods
[07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing CONFIGDIR directory : /aternos/server/config
[07Feb2020 20:20:03.132] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path CONFIGDIR is /aternos/server/config
[07Feb2020 20:20:03.133] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path FMLCONFIG is /aternos/server/config/fml.toml
[07Feb2020 20:20:03.133] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading configuration
[07Feb2020 20:20:03.558] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing default config directory directory : /aternos/server/defaultconfigs
[07Feb2020 20:20:03.559] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing launch handler
[07Feb2020 20:20:03.560] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Using fmlserver as launch service
[07Feb2020 20:20:03.602] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.14.4\' MCP Version: \'20190829.143755\' Forge Version: \'28.1.117\' Forge group: \'net.minecraftforge\'
[07Feb2020 20:20:03.637] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found JAR asm at path /aternos/server/libraries/org/ow2/asm/asm/6.2/asm-6.2.jar
[07Feb2020 20:20:03.637] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found probable library path /aternos/server/libraries
[07Feb2020 20:20:03.639] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found forge path /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar is present
[07Feb2020 20:20:03.640] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: SRG MC at /aternos/server/libraries/net/minecraft/server/1.14.4-20190829.143755/server-1.14.4-20190829.143755-srg.jar is present
[07Feb2020 20:20:03.641] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: MC Extras at /aternos/server/libraries/net/minecraft/server/1.14.4/server-1.14.4-extra-stable.jar is present
[07Feb2020 20:20:03.641] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Forge patches at /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar is present
[07Feb2020 20:20:03.669] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 0 language providers
[07Feb2020 20:20:03.694] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding forge as a language from /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
[07Feb2020 20:20:03.699] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding file:/aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar to languageloader classloader
[07Feb2020 20:20:04.148] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 2 language providers
[07Feb2020 20:20:04.148] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider javafml, version 28.1
[07Feb2020 20:20:04.228] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider minecraft, version 1
[07Feb2020 20:20:04.267] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service fml
[07Feb2020 20:20:04.287] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Current naming domain is \'srg\'
[07Feb2020 20:20:04.297] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Identified name mapping providers {}
[07Feb2020 20:20:04.300] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services begin scanning
[07Feb2020 20:20:04.311] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service fml
[07Feb2020 20:20:04.313] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Initiating mod scan
[07Feb2020 20:20:04.416] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]: Found mod coordinates from lists: []
[07Feb2020 20:20:04.474] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]: Found Mod Locators : (mods folder:null),(maven libs:null),(exploded directory:null),(minecraft:null)
[07Feb2020 20:20:04.663] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/MS Auto-Compat-1.14.4-1.5.1.jar
[07Feb2020 20:20:04.876] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file MS Auto-Compat-1.14.4-1.5.1.jar with {azurecompat} mods - versions {1.5.1}
[07Feb2020 20:20:04.877] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/MS Auto-Compat-1.14.4-1.5.1.jar with language javafml
[07Feb2020 20:20:04.879] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/mods/u_team_core-1.14.4-2.8.2.150.jar
[07Feb2020 20:20:04.898] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file u_team_core-1.14.4-2.8.2.150.jar with {uteamcore} mods - versions {**.**.**.**}
[07Feb2020 20:20:04.898] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/mods/u_team_core-1.14.4-2.8.2.150.jar with language javafml
[07Feb2020 20:20:04.899] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar
[07Feb2020 20:20:04.901] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-universal.jar with {forge} mods - versions {28.1.117}
[07Feb2020 20:20:04.902] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-universal.jar with language javafml
[07Feb2020 20:20:05.153] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod fieldtomethodtransformers with Javascript path META-INF/fieldtomethodtransformers.js
[07Feb2020 20:20:05.153] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod META-INF/fieldtomethodtransformers.js
[07Feb2020 20:20:05.166] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar
[07Feb2020 20:20:05.170] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.14.4-28.1.117-server.jar with {minecraft} mods - versions {1.14.4}
[07Feb2020 20:20:05.170] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /aternos/server/libraries/net/minecraftforge/forge/1.14.4-28.1.117/forge-1.14.4-28.1.117-server.jar with language minecraft
[07Feb2020 20:20:05.267] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 3 mandatory requirements
[07Feb2020 20:20:05.270] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 2 mandatory mod requirements missing
[07Feb2020 20:20:08.550] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service fml
[07Feb2020 20:20:08.550] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading transformers
[07Feb2020 20:20:08.559] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service fml
[07Feb2020 20:20:08.560] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading coremod transformers
[07Feb2020 20:20:08.561] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from META-INF/fieldtomethodtransformers.js
[07Feb2020 20:20:10.211] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
[07Feb2020 20:20:10.245] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@6722db6e to Target : CLASS {Lnet/minecraft/potion/EffectInstance;} {} {V}
[07Feb2020 20:20:10.249] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@5049d8b2 to Target : CLASS {Lnet/minecraft/block/FlowingFluidBlock;} {} {V}
[07Feb2020 20:20:10.250] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@6d0b5baf to Target : CLASS {Lnet/minecraft/item/BucketItem;} {} {V}
[07Feb2020 20:20:10.250] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@631e06ab to Target : CLASS {Lnet/minecraft/block/StairsBlock;} {} {V}
[07Feb2020 20:20:10.252] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@2a3591c5 to Target : CLASS {Lnet/minecraft/block/FlowerPotBlock;} {} {V}
[07Feb2020 20:20:10.253] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@34a75079 to Target : CLASS {Lnet/minecraft/item/FishBucketItem;} {} {V}
[07Feb2020 20:20:10.255] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service fml
[07Feb2020 20:20:10.484] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
[07Feb2020 20:20:21.824] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowingFluidBlock
[07Feb2020 20:20:22.899] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/StairsBlock
[07Feb2020 20:20:24.048] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowerPotBlock
[07Feb2020 20:21:08.931] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/BucketItem
[07Feb2020 20:21:09.099] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/FishBucketItem
[07Feb2020 20:21:12.368] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/potion/EffectInstance
[07Feb2020 20:21:36.556] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[07Feb2020 20:21:36.560] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[07Feb2020 20:21:36.564] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[07Feb2020 20:21:36.567] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[07Feb2020 20:21:36.592] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[07Feb2020 20:21:37.212] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.14.4
[07Feb2020 20:21:38.952] [Server thread/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]: Loading I18N data entries: 4468
[07Feb2020 20:21:41.413] [Server thread/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]: Loading Network data for FML net version: FML2
[07Feb2020 20:21:41.817] [Server thread/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Using 3 threads for parallel mod-loading
[07Feb2020 20:21:41.818] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]: Error during pre-loading phase
net.minecraftforge.fml.ModLoadingException: Mod §eazurecompat§r requires §6mmorpg§r §o1 or above§r
§7Currently, §6mmorpg§r§7 is §o§nnot installed
at net.minecraftforge.fml.ModLoadingException.lambda$fromEarlyException$0(ModLoadingException.java:63) ~[?:?]
at java.util.stream.ReferencePipeline$3$1.accept(ReferencePipeline.java:193) ~[?:1.8.0_242]
at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
at java.util.stream.ForEachOps$ForEachOp.evaluateSequential(ForEachOps.java:150) ~[?:1.8.0_242]
at java.util.stream.ForEachOps$ForEachOp$OfRef.evaluateSequential(ForEachOps.java:173) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
at java.util.stream.ReferencePipeline.forEach(ReferencePipeline.java:485) ~[?:1.8.0_242]
at java.util.stream.ReferencePipeline$7$1.accept(ReferencePipeline.java:272) ~[?:1.8.0_242]
at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
at java.util.stream.ReduceOps$ReduceOp.evaluateSequential(ReduceOps.java:708) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
at java.util.stream.ReferencePipeline.collect(ReferencePipeline.java:566) ~[?:1.8.0_242]
at net.minecraftforge.fml.ModLoader.<init>(ModLoader.java:117) ~[?:?]
at net.minecraftforge.fml.ModLoader.get(ModLoader.java:146) [?:?]
at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) [?:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) [?:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
[07Feb2020 20:21:42.054] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
Mod §eazurecompat§r requires §6mmorpg§r §o1 or above§r
§7Currently, §6mmorpg§r§7 is §o§nnot installed,
Mod §euteamcore§r requires §6forge§r §o28.2.0 or above§r
§7Currently, §6forge§r§7 is §o28.1.117
]
at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:168) ~[?:?]
at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) ~[?:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
[07Feb2020 20:21:42.117] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Forge Version package package net.minecraftforge.versions.forge, Forge, version 28.1 from cpw.mods.modlauncher.TransformingClassLoader@4ebea12c
[07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge version 28.1.117
[07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge spec 28.1
[07Feb2020 20:21:42.118] [Server thread/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge group net.minecraftforge
[07Feb2020 20:21:42.303] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2020-02-07_20.21.42-server.txt
[07Feb2020 20:21:42.692] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Stopping server
[07Feb2020 20:21:42.710] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving worlds
[07Feb2020 20:21:42.718] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Exception stopping the server
java.lang.RuntimeException: The server has failed to initialize correctly due to mod loading errors. Examine the crash report for more details.
at net.minecraftforge.common.DimensionManager.getWorld(DimensionManager.java:182) ~[?:?]
at net.minecraft.server.MinecraftServer.func_71218_a(MinecraftServer.java:979) ~[?:?]
at net.minecraft.server.MinecraftServer.func_213211_a(MinecraftServer.java:521) ~[?:?]
at net.minecraft.server.MinecraftServer.func_71260_j(MinecraftServer.java:553) ~[?:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71260_j(DedicatedServer.java:544) ~[?:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:661) [?:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
[15Feb2020 14:45:26.737] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]: Error during pre-loading phase
net.minecraftforge.fml.ModLoadingException: Mod §ecar§r requires §6minecraft§r §o1.15.1§r
§7Currently, §6minecraft§r§7 is §o1.15.2
at net.minecraftforge.fml.ModLoadingException.lambda$fromEarlyException$0(ModLoadingException.java:63) ~[?:?]
at java.util.stream.ReferencePipeline$3$1.accept(ReferencePipeline.java:193) ~[?:1.8.0_242]
at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
at java.util.stream.ForEachOps$ForEachOp.evaluateSequential(ForEachOps.java:150) ~[?:1.8.0_242]
at java.util.stream.ForEachOps$ForEachOp$OfRef.evaluateSequential(ForEachOps.java:173) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
at java.util.stream.ReferencePipeline.forEach(ReferencePipeline.java:485) ~[?:1.8.0_242]
at java.util.stream.ReferencePipeline$7$1.accept(ReferencePipeline.java:272) ~[?:1.8.0_242]
at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
at java.util.stream.ReduceOps$ReduceOp.evaluateSequential(ReduceOps.java:708) ~[?:1.8.0_242]
at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
at java.util.stream.ReferencePipeline.collect(ReferencePipeline.java:566) ~[?:1.8.0_242]
at net.minecraftforge.fml.ModLoader.<init>(ModLoader.java:117) ~[?:?]
at net.minecraftforge.fml.ModLoader.get(ModLoader.java:146) [?:?]
at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) [?:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:122) [?:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:611) [?:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
[15Feb2020 14:45:27.141] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
Mod §ecar§r requires §6minecraft§r §o1.15.1§r
§7Currently, §6minecraft§r§7 is §o1.15.2
]
at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:168) ~[?:?]
at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:122) ~[?:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:611) [?:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.14.4
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [07Feb2020 20:21:37.212] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [07Feb2020 20:21:37.212] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.14.4
                                            [number:protected] => 101
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => mmorpg
                        )

                    [modName:protected] => azurecompat
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 1
                                    [modName:protected] => mmorpg
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [07Feb2020 20:21:41.818] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [07Feb2020 20:21:41.818] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]: Error during pre-loading phase
                                            [number:protected] => 105
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.minecraftforge.fml.ModLoadingException: Mod §eazurecompat§r requires §6mmorpg§r §o1 or above§r
                                            [number:protected] => 106
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => §7Currently, §6mmorpg§r§7 is §o§nnot installed
                                            [number:protected] => 107
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoadingException.lambda$fromEarlyException$0(ModLoadingException.java:63) ~[?:?]
                                            [number:protected] => 108
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline$3$1.accept(ReferencePipeline.java:193) ~[?:1.8.0_242]
                                            [number:protected] => 109
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                            [number:protected] => 110
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                            [number:protected] => 111
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                            [number:protected] => 112
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ForEachOps$ForEachOp.evaluateSequential(ForEachOps.java:150) ~[?:1.8.0_242]
                                            [number:protected] => 113
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ForEachOps$ForEachOp$OfRef.evaluateSequential(ForEachOps.java:173) ~[?:1.8.0_242]
                                            [number:protected] => 114
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                            [number:protected] => 115
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline.forEach(ReferencePipeline.java:485) ~[?:1.8.0_242]
                                            [number:protected] => 116
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline$7$1.accept(ReferencePipeline.java:272) ~[?:1.8.0_242]
                                            [number:protected] => 117
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                            [number:protected] => 118
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                            [number:protected] => 119
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                            [number:protected] => 120
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReduceOps$ReduceOp.evaluateSequential(ReduceOps.java:708) ~[?:1.8.0_242]
                                            [number:protected] => 121
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                            [number:protected] => 122
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline.collect(ReferencePipeline.java:566) ~[?:1.8.0_242]
                                            [number:protected] => 123
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoader.<init>(ModLoader.java:117) ~[?:?]
                                            [number:protected] => 124
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoader.get(ModLoader.java:146) [?:?]
                                            [number:protected] => 125
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) [?:?]
                                            [number:protected] => 126
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) [?:?]
                                            [number:protected] => 127
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
                                            [number:protected] => 128
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                            [number:protected] => 129
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => forge
                        )

                    [modName:protected] => uteamcore
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 28.2.0
                                    [modName:protected] => forge
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [07Feb2020 20:21:42.054] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [07Feb2020 20:21:42.054] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
                                            [number:protected] => 130
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: [
                                            [number:protected] => 131
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Mod §eazurecompat§r requires §6mmorpg§r §o1 or above§r
                                            [number:protected] => 132
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => §7Currently, §6mmorpg§r§7 is §o§nnot installed,
                                            [number:protected] => 133
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Mod §euteamcore§r requires §6forge§r §o28.2.0 or above§r
                                            [number:protected] => 134
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => §7Currently, §6forge§r§7 is §o28.1.117
                                            [number:protected] => 135
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ]
                                            [number:protected] => 136
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoader.gatherAndInitializeMods(ModLoader.java:168) ~[?:?]
                                            [number:protected] => 137
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) ~[?:?]
                                            [number:protected] => 138
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:121) ~[?:?]
                                            [number:protected] => 139
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:598) [?:?]
                                            [number:protected] => 140
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                            [number:protected] => 141
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => minecraft
                        )

                    [modName:protected] => car
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 1.15.1
                                    [modName:protected] => minecraft
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [15Feb2020 14:45:26.737] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [15Feb2020 14:45:26.737] [Server thread/FATAL] [net.minecraftforge.fml.ModLoader/CORE]: Error during pre-loading phase
                                            [number:protected] => 158
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.minecraftforge.fml.ModLoadingException: Mod §ecar§r requires §6minecraft§r §o1.15.1§r
                                            [number:protected] => 159
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => §7Currently, §6minecraft§r§7 is §o1.15.2
                                            [number:protected] => 160
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoadingException.lambda$fromEarlyException$0(ModLoadingException.java:63) ~[?:?]
                                            [number:protected] => 161
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline$3$1.accept(ReferencePipeline.java:193) ~[?:1.8.0_242]
                                            [number:protected] => 162
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                            [number:protected] => 163
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                            [number:protected] => 164
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                            [number:protected] => 165
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ForEachOps$ForEachOp.evaluateSequential(ForEachOps.java:150) ~[?:1.8.0_242]
                                            [number:protected] => 166
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ForEachOps$ForEachOp$OfRef.evaluateSequential(ForEachOps.java:173) ~[?:1.8.0_242]
                                            [number:protected] => 167
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                            [number:protected] => 168
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline.forEach(ReferencePipeline.java:485) ~[?:1.8.0_242]
                                            [number:protected] => 169
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline$7$1.accept(ReferencePipeline.java:272) ~[?:1.8.0_242]
                                            [number:protected] => 170
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.ArrayList$ArrayListSpliterator.forEachRemaining(ArrayList.java:1382) ~[?:1.8.0_242]
                                            [number:protected] => 171
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.copyInto(AbstractPipeline.java:482) ~[?:1.8.0_242]
                                            [number:protected] => 172
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.wrapAndCopyInto(AbstractPipeline.java:472) ~[?:1.8.0_242]
                                            [number:protected] => 173
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReduceOps$ReduceOp.evaluateSequential(ReduceOps.java:708) ~[?:1.8.0_242]
                                            [number:protected] => 174
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.AbstractPipeline.evaluate(AbstractPipeline.java:234) ~[?:1.8.0_242]
                                            [number:protected] => 175
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.stream.ReferencePipeline.collect(ReferencePipeline.java:566) ~[?:1.8.0_242]
                                            [number:protected] => 176
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoader.<init>(ModLoader.java:117) ~[?:?]
                                            [number:protected] => 177
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.ModLoader.get(ModLoader.java:146) [?:?]
                                            [number:protected] => 178
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.server.ServerModLoader.begin(ServerModLoader.java:45) [?:?]
                                            [number:protected] => 179
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:122) [?:?]
                                            [number:protected] => 180
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:611) [?:?]
                                            [number:protected] => 181
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_242]
                                            [number:protected] => 182
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 2
                )

        )

    [iterator:protected] => 3
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.14.4", $analysis[0]->getMessage());

        $this->assertEquals("The mod 'azurecompat' is missing the required mod 'mmorpg'.", $analysis[1]->getMessage());
        $this->assertEquals("Install the mod 'mmorpg' with version 1.", $analysis[1][0]->getMessage());

        $this->assertEquals("The mod 'uteamcore' is missing the required mod 'forge'.", $analysis[2]->getMessage());
        $this->assertEquals("Install the mod 'forge' with version 28.2.0.", $analysis[2][0]->getMessage());

        $this->assertEquals("The mod 'car' is missing the required mod 'minecraft'.", $analysis[3]->getMessage());
        $this->assertEquals("Install the mod 'minecraft' with version 1.15.1.", $analysis[3][0]->getMessage());

    }
}