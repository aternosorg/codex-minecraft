<?php

class ForgeStart1161Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-start-1161.log");
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
                    [prefix:protected] => 
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => 
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.142] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.142] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 32.0.108, --fml.mcpVersion, 20200625.160719, --fml.mcVersion, 1.16.1, --fml.forgeGroup, net.minecraftforge, nogui]
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.173] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.173] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 6.1.1+74+master.966c698 starting: java version 1.8.0_222 by Oracle Corporation
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.216] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.216] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Found launch services [minecraft,testharness,fmlclient,fmlserver]
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.308] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.308] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Found naming services : []
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.719] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.719] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]: Found launch plugins: [mixin,eventbus,object_holder_definalize,runtime_enum_extender,accesstransformer,capability_inject_definalize,runtimedistcleaner]
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.848] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.848] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Discovering transformation services
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.904] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.904] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found additional transformation services from discovery services: []
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.947] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.947] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found transformer services : [mixin,fml]
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.948] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.948] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.959] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.959] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service mixin
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.962] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.962] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service mixin
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service fml
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]: Found FMLLauncher version 32.0
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML 32.0 loading
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found ModLauncher version : 6.1.1+74+master.966c698
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.987] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.987] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Initializing modjar URL handler
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.991] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.991] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found AccessTransformer version : 2.2.0+57+master.16c1bdb
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.993] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.993] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found EventBus version : 3.0.3+63+master.b6b4769
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.995] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.995] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found Runtime Dist Cleaner
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found CoreMod version : 3.0.0+9+master.3817658
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package implementation version 3.1.1+12+master.3ce14ad
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package specification 3
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.076] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.076] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.112] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.112] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service fml
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.119] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.119] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Configuring option handling for services
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.247] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.247] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services initializing
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.263] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.263] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service mixin
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.326] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.326] [main/DEBUG] [mixin/]: Mixin bootstrap service org.spongepowered.asm.service.mojang.MixinServiceLaunchWrapperBootstrap is not available: LaunchWrapper is not available
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.372] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.372] [main/DEBUG] [mixin/]: MixinService [ModLauncher] was successfully booted in sun.misc.Launcher$AppClassLoader@232204a1
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.498] [main/INFO] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.498] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8 Source=file:/server/libraries/org/spongepowered/mixin/0.8/mixin-0.8.jar Service=ModLauncher Env=SERVER
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.504] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.504] [main/DEBUG] [mixin/]: Initialising Mixin Platform Manager
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.505] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.505] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.513] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.513] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.515] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.515] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.516] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.516] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.517] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.517] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.524] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.524] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service mixin
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service fml
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Setting up basic FML game directories
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.530] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.530] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing GAMEDIR directory : /server
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path GAMEDIR is /server
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing MODSDIR directory : /server/mods
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path MODSDIR is /server/mods
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing CONFIGDIR directory : /server/config
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path CONFIGDIR is /server/config
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path FMLCONFIG is /server/config/fml.toml
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.542] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.542] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading configuration
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.876] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.876] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing default config directory directory : /server/defaultconfigs
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.877] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.877] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing ModFile
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.897] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.897] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing launch handler
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.898] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.898] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Using fmlserver as launch service
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.16.1\' MCP Version: \'20200625.160719\' Forge Version: \'32.0.108\' Forge group: \'net.minecraftforge\'
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.926] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.926] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found JAR asm at path /server/libraries/org/ow2/asm/asm/7.2/asm-7.2.jar
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.927] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.927] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found probable library path /server/libraries
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.928] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.928] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found forge path /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar is present
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: SRG MC at /server/libraries/net/minecraft/server/1.16.1-20200625.160719/server-1.16.1-20200625.160719-srg.jar is present
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: MC Extras at /server/libraries/net/minecraft/server/1.16.1-20200625.160719/server-1.16.1-20200625.160719-extra.jar is present
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.930] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.930] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Forge patches at /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar is present
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.033] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.033] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 0 language providers
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.034] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.034] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding forge as a language from /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.058] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.058] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding file:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar to languageloader classloader
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 2 language providers
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.183] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.183] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider javafml, version 32.0
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.208] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.208] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider minecraft, version 1
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.229] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.229] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service fml
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.232] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.232] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Current naming domain is \'srg\'
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.236] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.236] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Identified name mapping providers {}
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.237] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.237] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services begin scanning
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.239] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.239] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service mixin
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service mixin
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service fml
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Initiating mod scan
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.384] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.384] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]: Found mod coordinates from lists: []
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.540] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.540] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]: Found Mod Locators : (mods folder:null),(maven libs:null),(exploded directory:null),(minecraft:null)
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.624] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.624] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/mods/tombstone-4.5.6.jar
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-4.5.6.jar with {tombstone} mods - versions {4.5.6}
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/mods/tombstone-4.5.6.jar with language javafml
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.026] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.026] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/mods/tombstone-5.0.0.jar
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.030] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.030] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-5.0.0.jar with {tombstone} mods - versions {5.0.0}
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/mods/tombstone-5.0.0.jar with language javafml
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.16.1-32.0.108-universal.jar with {forge} mods - versions {32.0.108}
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar with language javafml
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.237] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.237] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod fieldtomethodtransformers with Javascript path META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.278] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.278] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.323] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.323] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.16.1-32.0.108-server.jar with {minecraft} mods - versions {1.16.1}
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar with language minecraft
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.339] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.339] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]: Found 2 mods for first modid tombstone, selecting most recent based on version data
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.340] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.340] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]: Selected file tombstone-5.0.0.jar for modid tombstone with version 5.0.0
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.359] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.359] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 2 mandatory requirements
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.364] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.364] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 0 mandatory mod requirements missing
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service fml
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.474] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.474] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading transformers
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.475] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.475] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service mixin
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service mixin
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service fml
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading coremod transformers
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.527] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.527] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.545] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.545] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.728] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.728] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@791cbf87 to Target : CLASS {Lnet/minecraft/potion/EffectInstance;} {} {V}
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.731] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.731] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@2f08c4b to Target : CLASS {Lnet/minecraft/block/FlowingFluidBlock;} {} {V}
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@3f19b8b3 to Target : CLASS {Lnet/minecraft/item/BucketItem;} {} {V}
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@7de0c6ae to Target : CLASS {Lnet/minecraft/block/StairsBlock;} {} {V}
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@a486d78 to Target : CLASS {Lnet/minecraft/block/FlowerPotBlock;} {} {V}
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@cdc3aae to Target : CLASS {Lnet/minecraft/item/FishBucketItem;} {} {V}
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service fml
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.038] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.038] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.041] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.041] [main/DEBUG] [mixin/]: Processing launch tasks for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.049] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.049] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.054] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.054] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.057] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.057] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)]
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)]
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)]
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)]
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: inject() running with 5 agents
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.118] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.118] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)]
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.121] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.121] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)]
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.122] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.122] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)]
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.124] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.124] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)]
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.131] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.131] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.526] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.526] [main/DEBUG] [mixin/]: Error cleaning class output directory: .mixin.out/class: failed to delete one or more files; see suppressed exceptions for details
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.547] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.547] [main/DEBUG] [mixin/]: Preparing mixins for MixinEnvironment[DEFAULT]
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:28.157] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:28.157] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowingFluidBlock
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:28.748] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:28.748] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/StairsBlock
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:29.256] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:29.256] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowerPotBlock
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:51.454] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:51.454] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/BucketItem
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:51.772] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:51.772] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/FishBucketItem
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:54.258] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:54.258] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/potion/EffectInstance
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:22.283] [main/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:22.283] [main/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]: Loading I18N data entries: 4903
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:26.080] [main/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:26.080] [main/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]: Loading Network data for FML net version: FML2
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:26.419] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:26.419] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Using 3 threads for parallel mod-loading
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:30.861] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:30.861] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.152] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.152] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.187] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.187] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@25f9407e - got cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.190] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.190] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for ovh.corail.tombstone.ModTombstone with classLoader cpw.mods.modlauncher.TransformingClassLoader@25f9407e & cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass ovh.corail.tombstone.ModTombstone with cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@25f9407e - got cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.minecraftforge.common.ForgeMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@25f9407e & cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.299] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.299] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.minecraftforge.common.ForgeMod with cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.631] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.631] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:CONSTRUCT
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.833] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.833] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance tombstone of type ovh.corail.tombstone.ModTombstone
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.828] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.828] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance forge of type net.minecraftforge.common.ForgeMod
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.895] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.895] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Forge Version package package net.minecraftforge.versions.forge, Forge, version 32.0 from cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge version 32.0.108
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge spec 32.0
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge group net.minecraftforge
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.006] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.006] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MC version information 1.16.1
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MCP version information 20200625.160719
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 32.0.108, for MC 1.16.1 with MCP 20200625.160719
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.117] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.117] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v32.0.108 Initialized
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:36.084] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:36.084] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-client.toml for forge tracking
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:36.085] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:36.085] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-server.toml for forge tracking
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:37.766] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:37.766] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-client.toml for tombstone tracking
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:37.767] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:37.767] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-common.toml for tombstone tracking
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:37.775] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:37.775] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-server.toml for tombstone tracking
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 178
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 
[20Aug2020 16:34:09.142] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 32.0.108, --fml.mcpVersion, 20200625.160719, --fml.mcVersion, 1.16.1, --fml.forgeGroup, net.minecraftforge, nogui]
[20Aug2020 16:34:09.173] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 6.1.1+74+master.966c698 starting: java version 1.8.0_222 by Oracle Corporation
[20Aug2020 16:34:09.216] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Found launch services [minecraft,testharness,fmlclient,fmlserver]
[20Aug2020 16:34:09.308] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Found naming services : []
[20Aug2020 16:34:09.719] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]: Found launch plugins: [mixin,eventbus,object_holder_definalize,runtime_enum_extender,accesstransformer,capability_inject_definalize,runtimedistcleaner]
[20Aug2020 16:34:09.848] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Discovering transformation services
[20Aug2020 16:34:09.904] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found additional transformation services from discovery services: []
[20Aug2020 16:34:09.947] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found transformer services : [mixin,fml]
[20Aug2020 16:34:09.948] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading
[20Aug2020 16:34:09.959] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service mixin
[20Aug2020 16:34:09.962] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service mixin
[20Aug2020 16:34:09.963] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service fml
[20Aug2020 16:34:09.963] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]: Injecting tracing printstreams for STDOUT/STDERR.
[20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]: Found FMLLauncher version 32.0
[20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML 32.0 loading
[20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found ModLauncher version : 6.1.1+74+master.966c698
[20Aug2020 16:34:09.987] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Initializing modjar URL handler
[20Aug2020 16:34:09.991] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found AccessTransformer version : 2.2.0+57+master.16c1bdb
[20Aug2020 16:34:09.993] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found EventBus version : 3.0.3+63+master.b6b4769
[20Aug2020 16:34:09.995] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found Runtime Dist Cleaner
[20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found CoreMod version : 3.0.0+9+master.3817658
[20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package implementation version 3.1.1+12+master.3ce14ad
[20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package specification 3
[20Aug2020 16:34:11.076] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
[20Aug2020 16:34:11.112] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service fml
[20Aug2020 16:34:11.119] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Configuring option handling for services
[20Aug2020 16:34:11.247] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services initializing
[20Aug2020 16:34:11.263] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service mixin
[20Aug2020 16:34:11.326] [main/DEBUG] [mixin/]: Mixin bootstrap service org.spongepowered.asm.service.mojang.MixinServiceLaunchWrapperBootstrap is not available: LaunchWrapper is not available
[20Aug2020 16:34:11.372] [main/DEBUG] [mixin/]: MixinService [ModLauncher] was successfully booted in sun.misc.Launcher$AppClassLoader@232204a1
[20Aug2020 16:34:11.498] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8 Source=file:/server/libraries/org/spongepowered/mixin/0.8/mixin-0.8.jar Service=ModLauncher Env=SERVER
[20Aug2020 16:34:11.504] [main/DEBUG] [mixin/]: Initialising Mixin Platform Manager
[20Aug2020 16:34:11.505] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ModLauncher Root Container(4f56a0a2)
[20Aug2020 16:34:11.513] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ModLauncher Root Container(4f56a0a2)
[20Aug2020 16:34:11.515] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ModLauncher Root Container(4f56a0a2)
[20Aug2020 16:34:11.516] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ModLauncher Root Container(4f56a0a2)
[20Aug2020 16:34:11.517] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ModLauncher Root Container(4f56a0a2)
[20Aug2020 16:34:11.524] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service mixin
[20Aug2020 16:34:11.525] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service fml
[20Aug2020 16:34:11.525] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Setting up basic FML game directories
[20Aug2020 16:34:11.530] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing GAMEDIR directory : /server
[20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path GAMEDIR is /server
[20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing MODSDIR directory : /server/mods
[20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path MODSDIR is /server/mods
[20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing CONFIGDIR directory : /server/config
[20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path CONFIGDIR is /server/config
[20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path FMLCONFIG is /server/config/fml.toml
[20Aug2020 16:34:11.542] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading configuration
[20Aug2020 16:34:11.876] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing default config directory directory : /server/defaultconfigs
[20Aug2020 16:34:11.877] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing ModFile
[20Aug2020 16:34:11.897] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing launch handler
[20Aug2020 16:34:11.898] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Using fmlserver as launch service
[20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.16.1\' MCP Version: \'20200625.160719\' Forge Version: \'32.0.108\' Forge group: \'net.minecraftforge\'
[20Aug2020 16:34:11.926] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found JAR asm at path /server/libraries/org/ow2/asm/asm/7.2/asm-7.2.jar
[20Aug2020 16:34:11.927] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found probable library path /server/libraries
[20Aug2020 16:34:11.928] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found forge path /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar is present
[20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: SRG MC at /server/libraries/net/minecraft/server/1.16.1-20200625.160719/server-1.16.1-20200625.160719-srg.jar is present
[20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: MC Extras at /server/libraries/net/minecraft/server/1.16.1-20200625.160719/server-1.16.1-20200625.160719-extra.jar is present
[20Aug2020 16:34:11.930] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Forge patches at /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar is present
[20Aug2020 16:34:12.033] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 0 language providers
[20Aug2020 16:34:12.034] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding forge as a language from /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
[20Aug2020 16:34:12.058] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding file:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar to languageloader classloader
[20Aug2020 16:34:12.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 2 language providers
[20Aug2020 16:34:12.183] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider javafml, version 32.0
[20Aug2020 16:34:12.208] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider minecraft, version 1
[20Aug2020 16:34:12.229] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service fml
[20Aug2020 16:34:12.232] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Current naming domain is \'srg\'
[20Aug2020 16:34:12.236] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Identified name mapping providers {}
[20Aug2020 16:34:12.237] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services begin scanning
[20Aug2020 16:34:12.239] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service mixin
[20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service mixin
[20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service fml
[20Aug2020 16:34:12.241] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Initiating mod scan
[20Aug2020 16:34:12.384] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]: Found mod coordinates from lists: []
[20Aug2020 16:34:12.540] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]: Found Mod Locators : (mods folder:null),(maven libs:null),(exploded directory:null),(minecraft:null)
[20Aug2020 16:34:12.624] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/mods/tombstone-4.5.6.jar
[20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-4.5.6.jar with {tombstone} mods - versions {4.5.6}
[20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/mods/tombstone-4.5.6.jar with language javafml
[20Aug2020 16:34:13.026] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/mods/tombstone-5.0.0.jar
[20Aug2020 16:34:13.030] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-5.0.0.jar with {tombstone} mods - versions {5.0.0}
[20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/mods/tombstone-5.0.0.jar with language javafml
[20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
[20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.16.1-32.0.108-universal.jar with {forge} mods - versions {32.0.108}
[20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar with language javafml
[20Aug2020 16:34:13.237] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod fieldtomethodtransformers with Javascript path META-INF/fieldtomethodtransformers.js
[20Aug2020 16:34:13.278] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod META-INF/fieldtomethodtransformers.js
[20Aug2020 16:34:13.323] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar
[20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.16.1-32.0.108-server.jar with {minecraft} mods - versions {1.16.1}
[20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar with language minecraft
[20Aug2020 16:34:13.339] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]: Found 2 mods for first modid tombstone, selecting most recent based on version data
[20Aug2020 16:34:13.340] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]: Selected file tombstone-5.0.0.jar for modid tombstone with version 5.0.0
[20Aug2020 16:34:13.359] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 2 mandatory requirements
[20Aug2020 16:34:13.364] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 0 mandatory mod requirements missing
[20Aug2020 16:34:17.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service fml
[20Aug2020 16:34:17.474] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading transformers
[20Aug2020 16:34:17.475] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service mixin
[20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service mixin
[20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service fml
[20Aug2020 16:34:17.476] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading coremod transformers
[20Aug2020 16:34:17.527] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from META-INF/fieldtomethodtransformers.js
[20Aug2020 16:34:19.545] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
[20Aug2020 16:34:19.728] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@791cbf87 to Target : CLASS {Lnet/minecraft/potion/EffectInstance;} {} {V}
[20Aug2020 16:34:19.731] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@2f08c4b to Target : CLASS {Lnet/minecraft/block/FlowingFluidBlock;} {} {V}
[20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@3f19b8b3 to Target : CLASS {Lnet/minecraft/item/BucketItem;} {} {V}
[20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@7de0c6ae to Target : CLASS {Lnet/minecraft/block/StairsBlock;} {} {V}
[20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@a486d78 to Target : CLASS {Lnet/minecraft/block/FlowerPotBlock;} {} {V}
[20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@cdc3aae to Target : CLASS {Lnet/minecraft/item/FishBucketItem;} {} {V}
[20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service fml
[20Aug2020 16:34:20.038] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
[20Aug2020 16:34:20.041] [main/DEBUG] [mixin/]: Processing launch tasks for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
[20Aug2020 16:34:20.049] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
[20Aug2020 16:34:20.054] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
[20Aug2020 16:34:20.057] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
[20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
[20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
[20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)]
[20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
[20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
[20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
[20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
[20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
[20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)]
[20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
[20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
[20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
[20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
[20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
[20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)]
[20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
[20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
[20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
[20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
[20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
[20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)]
[20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: inject() running with 5 agents
[20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
[20Aug2020 16:34:20.118] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)]
[20Aug2020 16:34:20.121] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)]
[20Aug2020 16:34:20.122] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)]
[20Aug2020 16:34:20.124] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)]
[20Aug2020 16:34:20.131] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
[20Aug2020 16:34:20.526] [main/DEBUG] [mixin/]: Error cleaning class output directory: .mixin.out/class: failed to delete one or more files; see suppressed exceptions for details
[20Aug2020 16:34:20.547] [main/DEBUG] [mixin/]: Preparing mixins for MixinEnvironment[DEFAULT]
[20Aug2020 16:34:28.157] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowingFluidBlock
[20Aug2020 16:34:28.748] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/StairsBlock
[20Aug2020 16:34:29.256] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowerPotBlock
[20Aug2020 16:34:51.454] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/BucketItem
[20Aug2020 16:34:51.772] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/FishBucketItem
[20Aug2020 16:34:54.258] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/potion/EffectInstance
[20Aug2020 16:35:22.283] [main/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]: Loading I18N data entries: 4903
[20Aug2020 16:35:26.080] [main/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]: Loading Network data for FML net version: FML2
[20Aug2020 16:35:26.419] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Using 3 threads for parallel mod-loading
[20Aug2020 16:35:30.861] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:31.152] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:31.187] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@25f9407e - got cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:31.190] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for ovh.corail.tombstone.ModTombstone with classLoader cpw.mods.modlauncher.TransformingClassLoader@25f9407e & cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:31.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass ovh.corail.tombstone.ModTombstone with cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@25f9407e - got cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.minecraftforge.common.ForgeMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@25f9407e & cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:32.299] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.minecraftforge.common.ForgeMod with cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:32.631] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:CONSTRUCT
[20Aug2020 16:35:32.833] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance tombstone of type ovh.corail.tombstone.ModTombstone
[20Aug2020 16:35:32.828] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance forge of type net.minecraftforge.common.ForgeMod
[20Aug2020 16:35:32.895] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Forge Version package package net.minecraftforge.versions.forge, Forge, version 32.0 from cpw.mods.modlauncher.TransformingClassLoader@25f9407e
[20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge version 32.0.108
[20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge spec 32.0
[20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge group net.minecraftforge
[20Aug2020 16:35:33.006] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MC version information 1.16.1
[20Aug2020 16:35:33.007] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MCP version information 20200625.160719
[20Aug2020 16:35:33.007] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 32.0.108, for MC 1.16.1 with MCP 20200625.160719
[20Aug2020 16:35:33.117] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v32.0.108 Initialized
[20Aug2020 16:35:36.084] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-client.toml for forge tracking
[20Aug2020 16:35:36.085] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-server.toml for forge tracking
[20Aug2020 16:35:37.766] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-client.toml for tombstone tracking
[20Aug2020 16:35:37.767] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-common.toml for tombstone tracking
[20Aug2020 16:35:37.775] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-server.toml for tombstone tracking
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.16.1
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data : MC Version: \'1.16.1\' MCP Version: \'20200625.160719\' Forge Version: \'32.0.108\' Forge group: \'net.minecraftforge\'
                                            [number:protected] => 54
                                        )

                                )

                            [level:protected] => DEBUG
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [label:protected] => Forge version
                    [value:protected] => 32.0.108
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [20Aug2020 16:35:33.117] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [20Aug2020 16:35:33.117] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v32.0.108 Initialized
                                            [number:protected] => 173
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.16.1", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 32.0.108", $analysis[1]->getMessage());

    }
}