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
                    [prefix:protected] => [20Aug2020 16:34:09.142] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.142] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 32.0.108, --fml.mcpVersion, 20200625.160719, --fml.mcVersion, 1.16.1, --fml.forgeGroup, net.minecraftforge, nogui]
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.173] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.173] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 6.1.1+74+master.966c698 starting: java version 1.8.0_222 by Oracle Corporation
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.216] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.216] [main/DEBUG] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Found launch services [minecraft,testharness,fmlclient,fmlserver]
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.308] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.308] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Found naming services : []
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.719] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.719] [main/DEBUG] [cpw.mods.modlauncher.LaunchPluginHandler/MODLAUNCHER]: Found launch plugins: [mixin,eventbus,object_holder_definalize,runtime_enum_extender,accesstransformer,capability_inject_definalize,runtimedistcleaner]
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.848] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.848] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Discovering transformation services
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.904] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.904] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found additional transformation services from discovery services: []
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.947] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.947] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Found transformer services : [mixin,fml]
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.948] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.948] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.959] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.959] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service mixin
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.962] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.962] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service mixin
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loading service fml
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.963] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.LauncherVersion/CORE]: Found FMLLauncher version 32.0
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML 32.0 loading
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
                                    [text:protected] => [20Aug2020 16:34:09.986] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found ModLauncher version : 6.1.1+74+master.966c698
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.987] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.987] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Initializing modjar URL handler
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.991] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.991] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found AccessTransformer version : 2.2.0+57+master.16c1bdb
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.993] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.993] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found EventBus version : 3.0.3+63+master.b6b4769
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:09.995] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:09.995] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found Runtime Dist Cleaner
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: FML found CoreMod version : 3.0.0+9+master.3817658
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
                                    [text:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package implementation version 3.1.1+12+master.3ce14ad
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
                                    [text:protected] => [20Aug2020 16:34:10.021] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Found ForgeSPI package specification 3
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.076] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.076] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.112] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.112] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Loaded service fml
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.119] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.119] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Configuring option handling for services
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.247] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.247] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services initializing
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.263] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.263] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service mixin
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.326] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.326] [main/DEBUG] [mixin/]: Mixin bootstrap service org.spongepowered.asm.service.mojang.MixinServiceLaunchWrapperBootstrap is not available: LaunchWrapper is not available
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.372] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.372] [main/DEBUG] [mixin/]: MixinService [ModLauncher] was successfully booted in sun.misc.Launcher$AppClassLoader@232204a1
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.498] [main/INFO] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.498] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8 Source=file:/server/libraries/org/spongepowered/mixin/0.8/mixin-0.8.jar Service=ModLauncher Env=SERVER
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.504] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.504] [main/DEBUG] [mixin/]: Initialising Mixin Platform Manager
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.505] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.505] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.513] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.513] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.515] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.515] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.516] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.516] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.517] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.517] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ModLauncher Root Container(4f56a0a2)
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.524] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.524] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service mixin
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformation service fml
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.525] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Setting up basic FML game directories
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.530] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.530] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing GAMEDIR directory : /server
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path GAMEDIR is /server
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.540] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing MODSDIR directory : /server/mods
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path MODSDIR is /server/mods
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing CONFIGDIR directory : /server/config
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path CONFIGDIR is /server/config
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
                                    [text:protected] => [20Aug2020 16:34:11.541] [main/DEBUG] [net.minecraftforge.fml.loading.FMLPaths/CORE]: Path FMLCONFIG is /server/config/fml.toml
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.542] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.542] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading configuration
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.876] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.876] [main/DEBUG] [net.minecraftforge.fml.loading.FileUtils/CORE]: Found existing default config directory directory : /server/defaultconfigs
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.877] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.877] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing ModFile
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.897] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.897] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Preparing launch handler
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.898] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.898] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Using fmlserver as launch service
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data  : MC Version: \'1.16.1\' MCP Version: \'20200625.160719\' Forge Version: \'32.0.108\' Forge group: \'net.minecraftforge\'
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.926] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.926] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found JAR asm at path /server/libraries/org/ow2/asm/asm/7.2/asm-7.2.jar
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.927] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.927] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found probable library path /server/libraries
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.928] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.928] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Found forge path /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar is present
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: SRG MC at /server/libraries/net/minecraft/server/1.16.1-20200625.160719/server-1.16.1-20200625.160719-srg.jar is present
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
                                    [text:protected] => [20Aug2020 16:34:11.929] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: MC Extras at /server/libraries/net/minecraft/server/1.16.1-20200625.160719/server-1.16.1-20200625.160719-extra.jar is present
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:11.930] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:11.930] [main/DEBUG] [net.minecraftforge.fml.loading.LibraryFinder/CORE]: Forge patches at /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar is present
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.033] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.033] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 0 language providers
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.034] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.034] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding forge as a language from /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.058] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.058] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Adding file:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar to languageloader classloader
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.182] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found 2 language providers
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.183] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.183] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider javafml, version 32.0
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.208] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.208] [main/DEBUG] [net.minecraftforge.fml.loading.LanguageLoadingProvider/CORE]: Found language provider minecraft, version 1
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.229] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.229] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformation service fml
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.232] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.232] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Current naming domain is \'srg\'
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.236] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.236] [main/DEBUG] [cpw.mods.modlauncher.NameMappingServiceHandler/MODLAUNCHER]: Identified name mapping providers {}
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.237] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.237] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services begin scanning
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.239] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.239] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service mixin
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service mixin
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
                                    [text:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Beginning scan trigger - transformation service fml
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.241] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Initiating mod scan
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.384] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.384] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModListHandler/CORE]: Found mod coordinates from lists: []
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.540] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.540] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModDiscoverer/CORE]: Found Mod Locators : (mods folder:null),(maven libs:null),(exploded directory:null),(minecraft:null)
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:12.624] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:12.624] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/mods/tombstone-4.5.6.jar
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-4.5.6.jar with {tombstone} mods - versions {4.5.6}
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.006] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/mods/tombstone-4.5.6.jar with language javafml
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.026] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.026] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/mods/tombstone-5.0.0.jar
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.030] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.030] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file tombstone-5.0.0.jar with {tombstone} mods - versions {5.0.0}
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/mods/tombstone-5.0.0.jar with language javafml
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.031] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.16.1-32.0.108-universal.jar with {forge} mods - versions {32.0.108}
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.046] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar with language javafml
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.237] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.237] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Found coremod fieldtomethodtransformers with Javascript path META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.278] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.278] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Found coremod META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.323] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.323] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileParser/LOADING]: Considering mod file candidate /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFileInfo/LOADING]: Found valid mod file forge-1.16.1-32.0.108-server.jar with {minecraft} mods - versions {1.16.1}
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.328] [main/DEBUG] [net.minecraftforge.fml.loading.moddiscovery.ModFile/LOADING]: Loading mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar with language minecraft
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.339] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.339] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]: Found 2 mods for first modid tombstone, selecting most recent based on version data
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.340] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.340] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/]: Selected file tombstone-5.0.0.jar for modid tombstone with version 5.0.0
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.359] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.359] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 2 mandatory requirements
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:13.364] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:13.364] [main/DEBUG] [net.minecraftforge.fml.loading.ModSorter/LOADING]: Found 0 mandatory mod requirements missing
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.473] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: End scan trigger - transformation service fml
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.474] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.474] [main/DEBUG] [cpw.mods.modlauncher.TransformationServicesHandler/MODLAUNCHER]: Transformation services loading transformers
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.475] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.475] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service mixin
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service mixin
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
                                    [text:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initializing transformers for transformation service fml
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.476] [main/DEBUG] [net.minecraftforge.fml.loading.FMLServiceProvider/CORE]: Loading coremod transformers
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:17.527] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:17.527] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: Loading CoreMod from META-INF/fieldtomethodtransformers.js
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.545] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.545] [main/DEBUG] [net.minecraftforge.coremod.CoreModEngine/COREMOD]: CoreMod loaded successfully
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.728] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.728] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@791cbf87 to Target : CLASS {Lnet/minecraft/potion/EffectInstance;} {} {V}
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.731] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.731] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@2f08c4b to Target : CLASS {Lnet/minecraft/block/FlowingFluidBlock;} {} {V}
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@3f19b8b3 to Target : CLASS {Lnet/minecraft/item/BucketItem;} {} {V}
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
                                    [text:protected] => [20Aug2020 16:34:19.732] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@7de0c6ae to Target : CLASS {Lnet/minecraft/block/StairsBlock;} {} {V}
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@a486d78 to Target : CLASS {Lnet/minecraft/block/FlowerPotBlock;} {} {V}
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
                                    [text:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformStore/MODLAUNCHER]: Adding transformer net.minecraftforge.coremod.transformer.CoreModClassTransformer@cdc3aae to Target : CLASS {Lnet/minecraft/item/FishBucketItem;} {} {V}
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:19.733] [main/DEBUG] [cpw.mods.modlauncher.TransformationServiceDecorator/MODLAUNCHER]: Initialized transformers for transformation service fml
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.038] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.038] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.041] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.041] [main/DEBUG] [mixin/]: Processing launch tasks for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.049] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.049] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.054] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.054] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.057] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.057] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.058] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)]
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.059] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)]
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
                                    [text:protected] => [20Aug2020 16:34:20.060] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.061] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)]
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
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Adding mixin platform agents for container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.062] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentMinecraftForge for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: MixinPlatformAgentMinecraftForge rejected container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
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
                                    [text:protected] => [20Aug2020 16:34:20.063] [main/DEBUG] [mixin/]: MixinPlatformAgentDefault accepted container ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)]
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
                                    [text:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: inject() running with 5 agents
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
                                    [text:protected] => [20Aug2020 16:34:20.064] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ModLauncher Root Container(4f56a0a2)]
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.118] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.118] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-4.5.6.jar:/server/mods/tombstone-4.5.6.jar)]
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.121] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.121] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(tombstone-5.0.0.jar:/server/mods/tombstone-5.0.0.jar)]
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.122] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.122] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-universal.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar)]
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.124] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.124] [main/DEBUG] [mixin/]: Processing inject() for PlatformAgent[MixinPlatformAgentDefault:ContainerHandleModLauncher.Resource(forge-1.16.1-32.0.108-server.jar:/server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-server.jar)]
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.131] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.131] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.526] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.526] [main/DEBUG] [mixin/]: Error cleaning class output directory: .mixin.out/class: failed to delete one or more files; see suppressed exceptions for details
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:20.547] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:20.547] [main/DEBUG] [mixin/]: Preparing mixins for MixinEnvironment[DEFAULT]
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:28.157] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:28.157] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowingFluidBlock
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:28.748] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:28.748] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/StairsBlock
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:29.256] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:29.256] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/block/FlowerPotBlock
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:51.454] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:51.454] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/BucketItem
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:51.772] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:51.772] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/item/FishBucketItem
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:34:54.258] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:34:54.258] [main/DEBUG] [net.minecraftforge.coremod.transformer.CoreModBaseTransformer/COREMOD]: Transforming net/minecraft/potion/EffectInstance
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:22.283] [main/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:22.283] [main/DEBUG] [net.minecraftforge.fml.ForgeI18n/CORE]: Loading I18N data entries: 4903
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:26.080] [main/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:26.080] [main/DEBUG] [net.minecraftforge.fml.ModLoader/CORE]: Loading Network data for FML net version: FML2
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:26.419] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:26.419] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Using 3 threads for parallel mod-loading
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:30.861] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:30.861] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.152] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.152] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.187] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.187] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@25f9407e - got cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.190] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.190] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for ovh.corail.tombstone.ModTombstone with classLoader cpw.mods.modlauncher.TransformingClassLoader@25f9407e & cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass ovh.corail.tombstone.ModTombstone with cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.ModLoader/LOADING]: ModContainer is cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLJavaModLanguageProvider/LOADING]: Loading FMLModContainer from classloader cpw.mods.modlauncher.TransformingClassLoader@25f9407e - got cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:31.780] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Creating FMLModContainer instance for net.minecraftforge.common.ForgeMod with classLoader cpw.mods.modlauncher.TransformingClassLoader@25f9407e & cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.299] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.299] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded modclass net.minecraftforge.common.ForgeMod with cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.631] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.631] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:CONSTRUCT
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.833] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.833] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance tombstone of type ovh.corail.tombstone.ModTombstone
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.828] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.828] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loading mod instance forge of type net.minecraftforge.common.ForgeMod
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.895] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.895] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Forge Version package package net.minecraftforge.versions.forge, Forge, version 32.0 from cpw.mods.modlauncher.TransformingClassLoader@25f9407e
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge version 32.0.108
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
                                    [text:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge spec 32.0
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
                                    [text:protected] => [20Aug2020 16:35:32.896] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.forge.ForgeVersion/CORE]: Found Forge group net.minecraftforge
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.006] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.006] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MC version information 1.16.1
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/DEBUG] [net.minecraftforge.versions.mcp.MCPVersion/CORE]: Found MCP version information 20200625.160719
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.007] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 32.0.108, for MC 1.16.1 with MCP 20200625.160719
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:33.117] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:33.117] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v32.0.108 Initialized
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:36.084] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:36.084] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-client.toml for forge tracking
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:36.085] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:36.085] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file forge-server.toml for forge tracking
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:37.766] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:37.766] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-client.toml for tombstone tracking
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:37.767] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:37.767] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-common.toml for tombstone tracking
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:37.775] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:37.775] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Config file tombstone-server.toml for tombstone tracking
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:38.381] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:38.381] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance tombstone of type ovh.corail.tombstone.ModTombstone
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:38.384] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:38.384] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for tombstone
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:38.572] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:38.572] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for tombstone
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:38.747] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:38.747] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.RegistryHandler$Common to MOD
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:38.798] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:38.798] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSounds to MOD
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:38.828] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:38.828] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSerializers to MOD
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:39.070] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:39.070] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModPerks to MOD
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:39.464] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:39.464] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModPaintings to MOD
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:39.467] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:39.467] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModItems to MOD
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:40.793] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:40.793] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEnchantments to MOD
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:40.952] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:40.952] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance forge of type net.minecraftforge.common.ForgeMod
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:40.954] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:40.954] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for forge
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:40.956] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:40.956] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for forge
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:40.996] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:40.996] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for forge
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:41.037] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:41.037] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEffects to MOD
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:41.049] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:41.049] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModBlocks to MOD
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:41.086] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:41.086] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.helper.WorldFunctionInjector to FORGE
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:41.229] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:41.229] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.event.EventHandler to FORGE
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:42.277] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:42.277] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.config.ConfigTombstone$ConfigEvent to MOD
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:42.327] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:42.327] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for tombstone
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:42.363] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:42.363] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:CREATE_REGISTRIES
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:42.365] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:42.365] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.NewRegistry
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:42.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:42.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.NewRegistry
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:42.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:42.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.NewRegistry
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:42.367] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:42.367] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.NewRegistry
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.056] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.056] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block>
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.618] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.618] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block>
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.619] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.619] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block>
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.623] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.623] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block>
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.662] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.662] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.662] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.662] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:item>
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.706] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.706] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:item>
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.711] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.711] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:item>
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.711] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.711] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:item>
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.726] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.726] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.750] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.750] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<forge:loot_modifier_serializers>
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.751] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.751] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<forge:loot_modifier_serializers>
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.756] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.756] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<forge:loot_modifier_serializers>
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.756] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.756] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<forge:loot_modifier_serializers>
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.758] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.758] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:activities>
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:activities>
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:activities>
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.778] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.778] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:activities>
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:attribute>
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:attribute>
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:attribute>
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.782] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.782] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:attribute>
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.793] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.793] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:biome>
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:biome>
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:biome>
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:biome>
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.796] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.796] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.796] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.796] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block_entity_type>
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block_entity_type>
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block_entity_type>
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block_entity_type>
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.809] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.809] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block_placer_type>
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block_placer_type>
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block_placer_type>
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block_placer_type>
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block_state_provider_type>
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block_state_provider_type>
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block_state_provider_type>
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block_state_provider_type>
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.841] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.841] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.843] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.843] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:carver>
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:carver>
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:carver>
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:carver>
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:chunk_status>
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:chunk_status>
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:chunk_status>
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:chunk_status>
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.884] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.884] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.884] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.884] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:dataserializers>
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:dataserializers>
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:dataserializers>
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:dataserializers>
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:decorator>
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:decorator>
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:decorator>
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:decorator>
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:enchantment>
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:enchantment>
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:enchantment>
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:enchantment>
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.888] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.888] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:entity_type>
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:entity_type>
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:entity_type>
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:entity_type>
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:feature>
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:feature>
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:feature>
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:feature>
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:fluid>
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:fluid>
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:fluid>
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:fluid>
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:foliage_placer_type>
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:foliage_placer_type>
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:foliage_placer_type>
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:foliage_placer_type>
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:memory_module_type>
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:memory_module_type>
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:memory_module_type>
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:memory_module_type>
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:menu>
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:menu>
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:menu>
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:menu>
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:mob_effect>
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:mob_effect>
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:mob_effect>
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:mob_effect>
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.982] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.982] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.985] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.985] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:motive>
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:motive>
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:motive>
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:motive>
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.998] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.998] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:43.998] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:43.998] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:particle_type>
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:particle_type>
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:particle_type>
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:particle_type>
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.097] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.097] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.097] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.097] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:point_of_interest_type>
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:point_of_interest_type>
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:point_of_interest_type>
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:point_of_interest_type>
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:potion>
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:potion>
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:potion>
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:potion>
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.138] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.138] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.138] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.138] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:recipe_serializer>
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.217] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.217] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:recipe_serializer>
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:44.219] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:44.219] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:recipe_serializer>
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.216] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.216] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:recipe_serializer>
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.219] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.219] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.220] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.220] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:schedule>
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.221] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.221] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:schedule>
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.221] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.221] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:schedule>
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.222] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.222] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:schedule>
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.227] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.227] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.228] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.228] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:sensor_type>
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.230] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.230] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:sensor_type>
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.231] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.231] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:sensor_type>
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.231] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.231] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:sensor_type>
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.244] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.244] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.245] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.245] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:sound_event>
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.270] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.270] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:sound_event>
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.271] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.271] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:sound_event>
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.271] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.271] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:sound_event>
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.283] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.283] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.284] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.284] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:stat_type>
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.284] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.284] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:stat_type>
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.285] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.285] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:stat_type>
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [351] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.285] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.285] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:stat_type>
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [352] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.288] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.288] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [353] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.289] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.289] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:structure_feature>
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [354] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.290] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.290] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:structure_feature>
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [355] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.290] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.290] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:structure_feature>
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [356] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.291] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.291] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:structure_feature>
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [357] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.293] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.293] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [358] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.294] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.294] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:surface_builder>
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [359] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.294] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.294] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:surface_builder>
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [360] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.295] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.295] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:surface_builder>
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [361] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.319] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.319] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:surface_builder>
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [362] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.323] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.323] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [363] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.332] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.332] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:tree_decorator_type>
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [364] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.334] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.334] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:tree_decorator_type>
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [365] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.336] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.336] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:tree_decorator_type>
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [366] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.336] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.336] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:tree_decorator_type>
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [367] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.340] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.340] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [368] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.340] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.340] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:villager_profession>
                                    [number:protected] => 369
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [369] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.341] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.341] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:villager_profession>
                                    [number:protected] => 370
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [370] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.345] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.345] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:villager_profession>
                                    [number:protected] => 371
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [371] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:villager_profession>
                                    [number:protected] => 372
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [372] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.369] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.369] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
                                    [number:protected] => 373
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [373] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.370] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.370] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<tombstone:perks>
                                    [number:protected] => 374
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [374] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.372] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.372] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<tombstone:perks>
                                    [number:protected] => 375
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [375] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.378] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.378] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<tombstone:perks>
                                    [number:protected] => 376
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [376] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.386] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.386] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<tombstone:perks>
                                    [number:protected] => 377
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [377] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.429] [main/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.429] [main/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Loading configs type COMMON
                                    [number:protected] => 378
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [378] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.518] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.518] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Built TOML config for /server/config/tombstone-common.toml
                                    [number:protected] => 379
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [379] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.578] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.578] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Loaded TOML config file /server/config/tombstone-common.toml
                                    [number:protected] => 380
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [380] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.662] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.662] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Watching TOML config file /server/config/tombstone-common.toml for changes
                                    [number:protected] => 381
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [381] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.675] [Thread-1/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.675] [Thread-1/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Config file tombstone-common.toml changed, sending notifies
                                    [number:protected] => 382
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [382] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.782] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.782] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:COMMON_SETUP
                                    [number:protected] => 383
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [383] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.784] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.784] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : FMLCommonSetupEvent
                                    [number:protected] => 384
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [384] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:46.791] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:46.791] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : FMLCommonSetupEvent
                                    [number:protected] => 385
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [385] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.120] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.120] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : FMLCommonSetupEvent
                                    [number:protected] => 386
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [386] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.828] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.828] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : FMLCommonSetupEvent
                                    [number:protected] => 387
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [387] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.838] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.838] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:SIDED_SETUP
                                    [number:protected] => 388
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [388] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.839] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.839] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : FMLDedicatedServerSetupEvent
                                    [number:protected] => 389
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [389] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.839] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.839] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : FMLDedicatedServerSetupEvent
                                    [number:protected] => 390
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [390] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.840] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.840] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : FMLDedicatedServerSetupEvent
                                    [number:protected] => 391
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [391] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.841] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.841] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : FMLDedicatedServerSetupEvent
                                    [number:protected] => 392
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [392] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.843] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.843] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:ENQUEUE_IMC
                                    [number:protected] => 393
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [393] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : InterModEnqueueEvent
                                    [number:protected] => 394
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [394] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : InterModEnqueueEvent
                                    [number:protected] => 395
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [395] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.845] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.845] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : InterModEnqueueEvent
                                    [number:protected] => 396
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [396] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.851] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.851] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [tombstone] Starting version check at https://updates.blamejared.com/get?n=tombstone&gv=1.16.1
                                    [number:protected] => 397
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [397] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.910] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.910] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : InterModEnqueueEvent
                                    [number:protected] => 398
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [398] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.911] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.911] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:PROCESS_IMC
                                    [number:protected] => 399
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [399] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.966] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.966] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : InterModProcessEvent
                                    [number:protected] => 400
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [400] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.966] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.966] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : InterModProcessEvent
                                    [number:protected] => 401
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [401] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.970] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.970] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : InterModProcessEvent
                                    [number:protected] => 402
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [402] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:47.990] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:47.990] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : InterModProcessEvent
                                    [number:protected] => 403
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [403] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:48.000] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:48.000] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:COMPLETE
                                    [number:protected] => 404
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [404] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:48.098] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:48.098] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : FMLLoadCompleteEvent
                                    [number:protected] => 405
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [405] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:48.099] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:48.099] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : FMLLoadCompleteEvent
                                    [number:protected] => 406
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [406] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:48.103] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:48.103] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : FMLLoadCompleteEvent
                                    [number:protected] => 407
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [407] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:48.104] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:48.104] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : FMLLoadCompleteEvent
                                    [number:protected] => 408
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [408] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:51.014] [Forge Version Check/DEBUG] [net.minecraftforge.fml.VersionChecker/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:51.014] [Forge Version Check/DEBUG] [net.minecraftforge.fml.VersionChecker/]: [tombstone] Received version check data:
                                    [number:protected] => 409
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Invalid projectName "tombstone" and gameVersion "1.16.1"!
                                    [number:protected] => 410
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [409] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:51.015] [Forge Version Check/WARN] [net.minecraftforge.fml.VersionChecker/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:51.015] [Forge Version Check/WARN] [net.minecraftforge.fml.VersionChecker/]: Failed to process update information
                                    [number:protected] => 411
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => com.google.gson.JsonSyntaxException: java.lang.IllegalStateException: Expected BEGIN_OBJECT but was STRING at line 1 column 1 path $
                                    [number:protected] => 412
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.Gson.fromJson(Gson.java:899) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 413
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.Gson.fromJson(Gson.java:852) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 414
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.Gson.fromJson(Gson.java:801) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 415
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.Gson.fromJson(Gson.java:773) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 416
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.VersionChecker$1.process(VersionChecker.java:214) ~[?:?]
                                    [number:protected] => 417
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Iterable.forEach(Iterable.java:75) [?:1.8.0_222]
                                    [number:protected] => 418
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.VersionChecker$1.run(VersionChecker.java:157) [?:?]
                                    [number:protected] => 419
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.IllegalStateException: Expected BEGIN_OBJECT but was STRING at line 1 column 1 path $
                                    [number:protected] => 420
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.stream.JsonReader.beginObject(JsonReader.java:385) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 421
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.internal.bind.MapTypeAdapterFactory$Adapter.read(MapTypeAdapterFactory.java:183) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 422
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.internal.bind.MapTypeAdapterFactory$Adapter.read(MapTypeAdapterFactory.java:145) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 423
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.google.gson.Gson.fromJson(Gson.java:887) ~[server-1.16.1-20200625.160719-extra.jar:?]
                                    [number:protected] => 424
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 6 more
                                    [number:protected] => 425
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [410] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:51.066] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:51.066] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Starting version check at https://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
                                    [number:protected] => 426
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [411] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:51.787] [Forge Version Check/DEBUG] [net.minecraftforge.fml.VersionChecker/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:51.787] [Forge Version Check/DEBUG] [net.minecraftforge.fml.VersionChecker/]: [forge] Received version check data:
                                    [number:protected] => 427
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => {
                                    [number:protected] => 428
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   "homepage": "http://files.minecraftforge.net/maven/net/minecraftforge/forge/",
                                    [number:protected] => 429
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   "promos": {
                                    [number:protected] => 430
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.1-latest": "**.**.**.**",
                                    [number:protected] => 431
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.10-latest": "12.18.0.2000",
                                    [number:protected] => 432
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.10.2-latest": "12.18.3.2511",
                                    [number:protected] => 433
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.10.2-recommended": "12.18.3.2185",
                                    [number:protected] => 434
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.11-latest": "13.19.1.2199",
                                    [number:protected] => 435
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.11-recommended": "13.19.1.2189",
                                    [number:protected] => 436
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.11.2-latest": "13.20.1.2588",
                                    [number:protected] => 437
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.11.2-recommended": "13.20.1.2386",
                                    [number:protected] => 438
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.12-latest": "14.21.1.2443",
                                    [number:protected] => 439
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.12-recommended": "14.21.1.2387",
                                    [number:protected] => 440
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.12.1-latest": "14.22.1.2485",
                                    [number:protected] => 441
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.12.1-recommended": "14.22.1.2478",
                                    [number:protected] => 442
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.12.2-latest": "14.23.5.2854",
                                    [number:protected] => 443
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.12.2-recommended": "14.23.5.2854",
                                    [number:protected] => 444
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.13.2-latest": "25.0.219",
                                    [number:protected] => 445
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.14.2-latest": "26.0.63",
                                    [number:protected] => 446
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.14.3-latest": "27.0.60",
                                    [number:protected] => 447
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.14.4-latest": "28.2.23",
                                    [number:protected] => 448
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.14.4-recommended": "28.2.0",
                                    [number:protected] => 449
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.15-latest": "29.0.4",
                                    [number:protected] => 450
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.15.1-latest": "30.0.51",
                                    [number:protected] => 451
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.15.2-latest": "31.2.36",
                                    [number:protected] => 452
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.15.2-recommended": "31.2.0",
                                    [number:protected] => 453
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.16.1-latest": "32.0.108",
                                    [number:protected] => 454
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.16.2-latest": "33.0.7",
                                    [number:protected] => 455
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.5.2-latest": "**.**.**.**",
                                    [number:protected] => 456
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.5.2-recommended": "**.**.**.**",
                                    [number:protected] => 457
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.6.1-latest": "**.**.**.**",
                                    [number:protected] => 458
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.6.2-latest": "**.**.**.**",
                                    [number:protected] => 459
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.6.2-recommended": "**.**.**.**",
                                    [number:protected] => 460
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.6.3-latest": "**.**.**.**",
                                    [number:protected] => 461
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.6.4-latest": "9.11.1.1345",
                                    [number:protected] => 462
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.6.4-recommended": "9.11.1.1345",
                                    [number:protected] => 463
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.7.10-latest": "10.13.4.1614",
                                    [number:protected] => 464
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.7.10-latest-1.7.10": "10.13.2.1343",
                                    [number:protected] => 465
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.7.10-recommended": "10.13.4.1558",
                                    [number:protected] => 466
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.7.2-latest": "10.12.2.1147",
                                    [number:protected] => 467
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.7.2-recommended": "10.12.2.1121",
                                    [number:protected] => 468
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.8-latest": "11.14.4.1577",
                                    [number:protected] => 469
                                )

                            [43] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.8-recommended": "11.14.4.1563",
                                    [number:protected] => 470
                                )

                            [44] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.8.8-latest": "11.15.0.1655",
                                    [number:protected] => 471
                                )

                            [45] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.8.9-latest": "11.15.1.2318",
                                    [number:protected] => 472
                                )

                            [46] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.8.9-recommended": "11.15.1.1722",
                                    [number:protected] => 473
                                )

                            [47] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.9-latest": "12.16.0.1942",
                                    [number:protected] => 474
                                )

                            [48] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.9-recommended": "12.16.1.1887",
                                    [number:protected] => 475
                                )

                            [49] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.9.4-latest": "12.17.0.2051",
                                    [number:protected] => 476
                                )

                            [50] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "1.9.4-recommended": "12.17.0.1976",
                                    [number:protected] => 477
                                )

                            [51] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     "latest-1.7.10": "10.13.2.1343"
                                    [number:protected] => 478
                                )

                            [52] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   }
                                    [number:protected] => 479
                                )

                            [53] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => }
                                    [number:protected] => 480
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [412] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:35:51.803] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:35:51.803] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Found status: BETA Current: 32.0.108 Target: 32.0.108
                                    [number:protected] => 481
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [413] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:03.466] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:03.466] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', name=\'PROD\'
                                    [number:protected] => 482
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [414] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:04.380] [main/DEBUG] [net.minecraftforge.fml.server.ServerLifecycleHooks/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:04.380] [main/DEBUG] [net.minecraftforge.fml.server.ServerLifecycleHooks/CORE]: Generating PackInfo named mod:tombstone for mod file /server/mods/tombstone-5.0.0.jar
                                    [number:protected] => 483
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [415] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:04.380] [main/DEBUG] [net.minecraftforge.fml.server.ServerLifecycleHooks/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:04.380] [main/DEBUG] [net.minecraftforge.fml.server.ServerLifecycleHooks/CORE]: Generating PackInfo named mod:forge for mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
                                    [number:protected] => 484
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [416] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.312] [main/ERROR] [net.minecraftforge.eventbus.EventBus/EVENTBUS]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.312] [main/ERROR] [net.minecraftforge.eventbus.EventBus/EVENTBUS]: Exception caught during firing event: null
                                    [number:protected] => 485
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Index: 2
                                    [number:protected] => 486
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Listeners:
                                    [number:protected] => 487
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		0: NORMAL
                                    [number:protected] => 488
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		1: ASM: net.minecraftforge.common.ForgeInternalHandler@619bf35f onCommandsRegister(Lnet/minecraftforge/event/RegisterCommandsEvent;)V
                                    [number:protected] => 489
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		2: ASM: class ovh.corail.tombstone.event.EventHandler onRegisterCommand(Lnet/minecraftforge/event/RegisterCommandsEvent;)V
                                    [number:protected] => 490
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.ExceptionInInitializerError
                                    [number:protected] => 491
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at ovh.corail.tombstone.helper.Helper.initCommands(Helper.java:720)
                                    [number:protected] => 492
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at ovh.corail.tombstone.event.EventHandler.onRegisterCommand(EventHandler.java:135)
                                    [number:protected] => 493
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.ASMEventHandler_36_EventHandler_onRegisterCommand_RegisterCommandsEvent.invoke(.dynamic)
                                    [number:protected] => 494
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85)
                                    [number:protected] => 495
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:297)
                                    [number:protected] => 496
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.event.ForgeEventFactory.onCommandRegister(ForgeEventFactory.java:747)
                                    [number:protected] => 497
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.command.Commands.<init>(Commands.java:186)
                                    [number:protected] => 498
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.resources.DataPackRegistries.<init>(DataPackRegistries.java:26)
                                    [number:protected] => 499
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.resources.DataPackRegistries.func_240961_a_(DataPackRegistries.java:70)
                                    [number:protected] => 500
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.Main.main(Main.java:125)
                                    [number:protected] => 501
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method)
                                    [number:protected] => 502
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62)
                                    [number:protected] => 503
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43)
                                    [number:protected] => 504
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498)
                                    [number:protected] => 505
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.loading.FMLServerLaunchProvider.lambda$launchService$0(FMLServerLaunchProvider.java:51)
                                    [number:protected] => 506
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.LaunchServiceHandlerDecorator.launch(LaunchServiceHandlerDecorator.java:37)
                                    [number:protected] => 507
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:54)
                                    [number:protected] => 508
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:72)
                                    [number:protected] => 509
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.Launcher.run(Launcher.java:81)
                                    [number:protected] => 510
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.Launcher.main(Launcher.java:65)
                                    [number:protected] => 511
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.server.ServerMain$Runner.runLauncher(ServerMain.java:63)
                                    [number:protected] => 512
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.server.ServerMain$Runner.access$100(ServerMain.java:60)
                                    [number:protected] => 513
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.server.ServerMain.main(ServerMain.java:57)
                                    [number:protected] => 514
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: net.minecraftforge.fml.common.ObfuscationReflectionHelper$UnableToFindMethodException: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
                                    [number:protected] => 515
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:166)
                                    [number:protected] => 516
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at ovh.corail.tombstone.command.CommandTBRecovery.<clinit>(CommandTBRecovery.java:216)
                                    [number:protected] => 517
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 23 more
                                    [number:protected] => 518
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
                                    [number:protected] => 519
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Class.getDeclaredMethod(Class.java:2130)
                                    [number:protected] => 520
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:160)
                                    [number:protected] => 521
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 24 more
                                    [number:protected] => 522
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 523
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [417] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.370] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.370] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: java.lang.RuntimeException: java.lang.reflect.InvocationTargetException
                                    [number:protected] => 524
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [418] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.377] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.377] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.LaunchServiceHandlerDecorator.launch(LaunchServiceHandlerDecorator.java:39)
                                    [number:protected] => 525
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [419] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.378] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.378] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:54)
                                    [number:protected] => 526
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [420] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.378] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.378] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:72)
                                    [number:protected] => 527
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [421] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.379] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.379] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.Launcher.run(Launcher.java:81)
                                    [number:protected] => 528
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [422] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.379] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.379] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.Launcher.main(Launcher.java:65)
                                    [number:protected] => 529
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [423] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.379] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.379] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at net.minecraftforge.server.ServerMain$Runner.runLauncher(ServerMain.java:63)
                                    [number:protected] => 530
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [424] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.380] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.380] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at net.minecraftforge.server.ServerMain$Runner.access$100(ServerMain.java:60)
                                    [number:protected] => 531
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [425] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.380] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.380] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at net.minecraftforge.server.ServerMain.main(ServerMain.java:57)
                                    [number:protected] => 532
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [426] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.381] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.381] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: Caused by: java.lang.reflect.InvocationTargetException
                                    [number:protected] => 533
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [427] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.381] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.381] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method)
                                    [number:protected] => 534
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [428] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.381] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.381] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62)
                                    [number:protected] => 535
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [429] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.386] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.386] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43)
                                    [number:protected] => 536
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [430] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.386] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.386] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at java.lang.reflect.Method.invoke(Method.java:498)
                                    [number:protected] => 537
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [431] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.389] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.389] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at net.minecraftforge.fml.loading.FMLServerLaunchProvider.lambda$launchService$0(FMLServerLaunchProvider.java:51)
                                    [number:protected] => 538
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [432] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.390] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.390] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at cpw.mods.modlauncher.LaunchServiceHandlerDecorator.launch(LaunchServiceHandlerDecorator.java:37)
                                    [number:protected] => 539
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [433] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.393] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.393] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	... 7 more
                                    [number:protected] => 540
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [434] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.394] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.394] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: Caused by: java.lang.ExceptionInInitializerError
                                    [number:protected] => 541
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [435] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.394] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.394] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at ovh.corail.tombstone.helper.Helper.initCommands(Helper.java:720)
                                    [number:protected] => 542
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [436] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.394] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.394] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at ovh.corail.tombstone.event.EventHandler.onRegisterCommand(EventHandler.java:135)
                                    [number:protected] => 543
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [437] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.396] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.396] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.eventbus.ASMEventHandler_36_EventHandler_onRegisterCommand_RegisterCommandsEvent.invoke(.dynamic)
                                    [number:protected] => 544
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [438] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.401] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.401] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85)
                                    [number:protected] => 545
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [439] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.401] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.401] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:297)
                                    [number:protected] => 546
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [440] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.402] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.402] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.event.ForgeEventFactory.onCommandRegister(ForgeEventFactory.java:747)
                                    [number:protected] => 547
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [441] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.402] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.402] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.command.Commands.<init>(Commands.java:186)
                                    [number:protected] => 548
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [442] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.403] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.403] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.resources.DataPackRegistries.<init>(DataPackRegistries.java:26)
                                    [number:protected] => 549
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [443] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.403] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.403] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.resources.DataPackRegistries.func_240961_a_(DataPackRegistries.java:70)
                                    [number:protected] => 550
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [444] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.409] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.409] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.server.Main.main(Main.java:125)
                                    [number:protected] => 551
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [445] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.410] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.410] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	... 13 more
                                    [number:protected] => 552
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [446] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.410] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.410] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: Caused by: net.minecraftforge.fml.common.ObfuscationReflectionHelper$UnableToFindMethodException: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
                                    [number:protected] => 553
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [447] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.411] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.411] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: 	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:166)
                                    [number:protected] => 554
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [448] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.411] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.411] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: 	at ovh.corail.tombstone.command.CommandTBRecovery.<clinit>(CommandTBRecovery.java:216)
                                    [number:protected] => 555
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [449] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.411] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.411] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: 	... 23 more
                                    [number:protected] => 556
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [450] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.413] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.413] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: Caused by: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
                                    [number:protected] => 557
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [451] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.414] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.414] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: 	at java.lang.Class.getDeclaredMethod(Class.java:2130)
                                    [number:protected] => 558
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [452] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.414] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.414] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: 	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:160)
                                    [number:protected] => 559
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [453] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [20Aug2020 16:36:07.414] [main/INFO] [STDERR/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [20Aug2020 16:36:07.414] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: 	... 24 more
                                    [number:protected] => 560
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 454
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [20Aug2020 16:34:09.142] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 32.0.108, --fml.mcpVersion, 20200625.160719, --fml.mcVersion, 1.16.1, --fml.forgeGroup, net.minecraftforge, nogui]
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
[20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data  : MC Version: \'1.16.1\' MCP Version: \'20200625.160719\' Forge Version: \'32.0.108\' Forge group: \'net.minecraftforge\'
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
[20Aug2020 16:35:38.381] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance tombstone of type ovh.corail.tombstone.ModTombstone
[20Aug2020 16:35:38.384] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for tombstone
[20Aug2020 16:35:38.572] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for tombstone
[20Aug2020 16:35:38.747] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.RegistryHandler$Common to MOD
[20Aug2020 16:35:38.798] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSounds to MOD
[20Aug2020 16:35:38.828] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModSerializers to MOD
[20Aug2020 16:35:39.070] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModPerks to MOD
[20Aug2020 16:35:39.464] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModPaintings to MOD
[20Aug2020 16:35:39.467] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModItems to MOD
[20Aug2020 16:35:40.793] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEnchantments to MOD
[20Aug2020 16:35:40.952] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Loaded mod instance forge of type net.minecraftforge.common.ForgeMod
[20Aug2020 16:35:40.954] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Injecting Automatic event subscribers for forge
[20Aug2020 16:35:40.956] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Attempting to inject @EventBusSubscriber classes into the eventbus for forge
[20Aug2020 16:35:40.996] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for forge
[20Aug2020 16:35:41.037] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModEffects to MOD
[20Aug2020 16:35:41.049] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.registry.ModBlocks to MOD
[20Aug2020 16:35:41.086] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.helper.WorldFunctionInjector to FORGE
[20Aug2020 16:35:41.229] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.event.EventHandler to FORGE
[20Aug2020 16:35:42.277] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.AutomaticEventSubscriber/LOADING]: Auto-subscribing ovh.corail.tombstone.config.ConfigTombstone$ConfigEvent to MOD
[20Aug2020 16:35:42.327] [modloading-worker-1/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Completed Automatic event subscribers for tombstone
[20Aug2020 16:35:42.363] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:CREATE_REGISTRIES
[20Aug2020 16:35:42.365] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.NewRegistry
[20Aug2020 16:35:42.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.NewRegistry
[20Aug2020 16:35:42.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.NewRegistry
[20Aug2020 16:35:42.367] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.NewRegistry
[20Aug2020 16:35:43.056] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block>
[20Aug2020 16:35:43.618] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block>
[20Aug2020 16:35:43.619] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block>
[20Aug2020 16:35:43.623] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block>
[20Aug2020 16:35:43.662] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.662] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:item>
[20Aug2020 16:35:43.706] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:item>
[20Aug2020 16:35:43.711] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:item>
[20Aug2020 16:35:43.711] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:item>
[20Aug2020 16:35:43.726] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.750] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<forge:loot_modifier_serializers>
[20Aug2020 16:35:43.751] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<forge:loot_modifier_serializers>
[20Aug2020 16:35:43.756] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<forge:loot_modifier_serializers>
[20Aug2020 16:35:43.756] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<forge:loot_modifier_serializers>
[20Aug2020 16:35:43.758] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:activities>
[20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:activities>
[20Aug2020 16:35:43.777] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:activities>
[20Aug2020 16:35:43.778] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:activities>
[20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:attribute>
[20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:attribute>
[20Aug2020 16:35:43.779] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:attribute>
[20Aug2020 16:35:43.782] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:attribute>
[20Aug2020 16:35:43.793] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:biome>
[20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:biome>
[20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:biome>
[20Aug2020 16:35:43.794] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:biome>
[20Aug2020 16:35:43.796] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.796] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block_entity_type>
[20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block_entity_type>
[20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block_entity_type>
[20Aug2020 16:35:43.808] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block_entity_type>
[20Aug2020 16:35:43.809] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block_placer_type>
[20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block_placer_type>
[20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block_placer_type>
[20Aug2020 16:35:43.810] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block_placer_type>
[20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:block_state_provider_type>
[20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:block_state_provider_type>
[20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:block_state_provider_type>
[20Aug2020 16:35:43.811] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:block_state_provider_type>
[20Aug2020 16:35:43.841] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.843] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:carver>
[20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:carver>
[20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:carver>
[20Aug2020 16:35:43.850] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:carver>
[20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:chunk_status>
[20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:chunk_status>
[20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:chunk_status>
[20Aug2020 16:35:43.852] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:chunk_status>
[20Aug2020 16:35:43.884] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.884] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:dataserializers>
[20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:dataserializers>
[20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:dataserializers>
[20Aug2020 16:35:43.885] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:dataserializers>
[20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:decorator>
[20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:decorator>
[20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:decorator>
[20Aug2020 16:35:43.886] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:decorator>
[20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:enchantment>
[20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:enchantment>
[20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:enchantment>
[20Aug2020 16:35:43.887] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:enchantment>
[20Aug2020 16:35:43.888] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:entity_type>
[20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:entity_type>
[20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:entity_type>
[20Aug2020 16:35:43.901] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:entity_type>
[20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:feature>
[20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:feature>
[20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:feature>
[20Aug2020 16:35:43.902] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:feature>
[20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:fluid>
[20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:fluid>
[20Aug2020 16:35:43.946] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:fluid>
[20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:fluid>
[20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.947] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:foliage_placer_type>
[20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:foliage_placer_type>
[20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:foliage_placer_type>
[20Aug2020 16:35:43.948] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:foliage_placer_type>
[20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:memory_module_type>
[20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:memory_module_type>
[20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:memory_module_type>
[20Aug2020 16:35:43.954] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:memory_module_type>
[20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:menu>
[20Aug2020 16:35:43.955] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:menu>
[20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:menu>
[20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:menu>
[20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.956] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:mob_effect>
[20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:mob_effect>
[20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:mob_effect>
[20Aug2020 16:35:43.957] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:mob_effect>
[20Aug2020 16:35:43.982] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.985] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:motive>
[20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:motive>
[20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:motive>
[20Aug2020 16:35:43.996] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:motive>
[20Aug2020 16:35:43.998] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:43.998] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:particle_type>
[20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:particle_type>
[20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:particle_type>
[20Aug2020 16:35:44.095] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:particle_type>
[20Aug2020 16:35:44.097] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:44.097] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:point_of_interest_type>
[20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:point_of_interest_type>
[20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:point_of_interest_type>
[20Aug2020 16:35:44.098] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:point_of_interest_type>
[20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:potion>
[20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:potion>
[20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:potion>
[20Aug2020 16:35:44.137] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:potion>
[20Aug2020 16:35:44.138] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:44.138] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:recipe_serializer>
[20Aug2020 16:35:44.217] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:recipe_serializer>
[20Aug2020 16:35:44.219] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:recipe_serializer>
[20Aug2020 16:35:46.216] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:recipe_serializer>
[20Aug2020 16:35:46.219] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.220] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:schedule>
[20Aug2020 16:35:46.221] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:schedule>
[20Aug2020 16:35:46.221] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:schedule>
[20Aug2020 16:35:46.222] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:schedule>
[20Aug2020 16:35:46.227] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.228] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:sensor_type>
[20Aug2020 16:35:46.230] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:sensor_type>
[20Aug2020 16:35:46.231] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:sensor_type>
[20Aug2020 16:35:46.231] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:sensor_type>
[20Aug2020 16:35:46.244] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.245] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:sound_event>
[20Aug2020 16:35:46.270] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:sound_event>
[20Aug2020 16:35:46.271] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:sound_event>
[20Aug2020 16:35:46.271] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:sound_event>
[20Aug2020 16:35:46.283] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.284] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:stat_type>
[20Aug2020 16:35:46.284] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:stat_type>
[20Aug2020 16:35:46.285] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:stat_type>
[20Aug2020 16:35:46.285] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:stat_type>
[20Aug2020 16:35:46.288] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.289] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:structure_feature>
[20Aug2020 16:35:46.290] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:structure_feature>
[20Aug2020 16:35:46.290] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:structure_feature>
[20Aug2020 16:35:46.291] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:structure_feature>
[20Aug2020 16:35:46.293] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.294] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:surface_builder>
[20Aug2020 16:35:46.294] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:surface_builder>
[20Aug2020 16:35:46.295] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:surface_builder>
[20Aug2020 16:35:46.319] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:surface_builder>
[20Aug2020 16:35:46.323] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.332] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:tree_decorator_type>
[20Aug2020 16:35:46.334] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:tree_decorator_type>
[20Aug2020 16:35:46.336] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:tree_decorator_type>
[20Aug2020 16:35:46.336] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:tree_decorator_type>
[20Aug2020 16:35:46.340] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.340] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<minecraft:villager_profession>
[20Aug2020 16:35:46.341] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<minecraft:villager_profession>
[20Aug2020 16:35:46.345] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<minecraft:villager_profession>
[20Aug2020 16:35:46.366] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<minecraft:villager_profession>
[20Aug2020 16:35:46.369] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching synchronous event LifecycleEvent:LOAD_REGISTRIES
[20Aug2020 16:35:46.370] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : RegistryEvent.Register<tombstone:perks>
[20Aug2020 16:35:46.372] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : RegistryEvent.Register<tombstone:perks>
[20Aug2020 16:35:46.378] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : RegistryEvent.Register<tombstone:perks>
[20Aug2020 16:35:46.386] [main/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : RegistryEvent.Register<tombstone:perks>
[20Aug2020 16:35:46.429] [main/DEBUG] [net.minecraftforge.fml.config.ConfigTracker/CONFIG]: Loading configs type COMMON
[20Aug2020 16:35:46.518] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Built TOML config for /server/config/tombstone-common.toml
[20Aug2020 16:35:46.578] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Loaded TOML config file /server/config/tombstone-common.toml
[20Aug2020 16:35:46.662] [main/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Watching TOML config file /server/config/tombstone-common.toml for changes
[20Aug2020 16:35:46.675] [Thread-1/DEBUG] [net.minecraftforge.fml.config.ConfigFileTypeHandler/CONFIG]: Config file tombstone-common.toml changed, sending notifies
[20Aug2020 16:35:46.782] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:COMMON_SETUP
[20Aug2020 16:35:46.784] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : FMLCommonSetupEvent
[20Aug2020 16:35:46.791] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : FMLCommonSetupEvent
[20Aug2020 16:35:47.120] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : FMLCommonSetupEvent
[20Aug2020 16:35:47.828] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : FMLCommonSetupEvent
[20Aug2020 16:35:47.838] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:SIDED_SETUP
[20Aug2020 16:35:47.839] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : FMLDedicatedServerSetupEvent
[20Aug2020 16:35:47.839] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : FMLDedicatedServerSetupEvent
[20Aug2020 16:35:47.840] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : FMLDedicatedServerSetupEvent
[20Aug2020 16:35:47.841] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : FMLDedicatedServerSetupEvent
[20Aug2020 16:35:47.843] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:ENQUEUE_IMC
[20Aug2020 16:35:47.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : InterModEnqueueEvent
[20Aug2020 16:35:47.845] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : InterModEnqueueEvent
[20Aug2020 16:35:47.845] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : InterModEnqueueEvent
[20Aug2020 16:35:47.851] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [tombstone] Starting version check at https://updates.blamejared.com/get?n=tombstone&gv=1.16.1
[20Aug2020 16:35:47.910] [modloading-worker-0/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : InterModEnqueueEvent
[20Aug2020 16:35:47.911] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:PROCESS_IMC
[20Aug2020 16:35:47.966] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : InterModProcessEvent
[20Aug2020 16:35:47.966] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : InterModProcessEvent
[20Aug2020 16:35:47.970] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : InterModProcessEvent
[20Aug2020 16:35:47.990] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : InterModProcessEvent
[20Aug2020 16:35:48.000] [main/DEBUG] [net.minecraftforge.fml.ModList/LOADING]: Dispatching parallel event LifecycleEvent:COMPLETE
[20Aug2020 16:35:48.098] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid forge : FMLLoadCompleteEvent
[20Aug2020 16:35:48.099] [modloading-worker-3/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid forge : FMLLoadCompleteEvent
[20Aug2020 16:35:48.103] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Firing event for modid tombstone : FMLLoadCompleteEvent
[20Aug2020 16:35:48.104] [modloading-worker-2/DEBUG] [net.minecraftforge.fml.javafmlmod.FMLModContainer/LOADING]: Fired event for modid tombstone : FMLLoadCompleteEvent
[20Aug2020 16:35:51.014] [Forge Version Check/DEBUG] [net.minecraftforge.fml.VersionChecker/]: [tombstone] Received version check data:
Invalid projectName "tombstone" and gameVersion "1.16.1"!
[20Aug2020 16:35:51.015] [Forge Version Check/WARN] [net.minecraftforge.fml.VersionChecker/]: Failed to process update information
com.google.gson.JsonSyntaxException: java.lang.IllegalStateException: Expected BEGIN_OBJECT but was STRING at line 1 column 1 path $
	at com.google.gson.Gson.fromJson(Gson.java:899) ~[server-1.16.1-20200625.160719-extra.jar:?]
	at com.google.gson.Gson.fromJson(Gson.java:852) ~[server-1.16.1-20200625.160719-extra.jar:?]
	at com.google.gson.Gson.fromJson(Gson.java:801) ~[server-1.16.1-20200625.160719-extra.jar:?]
	at com.google.gson.Gson.fromJson(Gson.java:773) ~[server-1.16.1-20200625.160719-extra.jar:?]
	at net.minecraftforge.fml.VersionChecker$1.process(VersionChecker.java:214) ~[?:?]
	at java.lang.Iterable.forEach(Iterable.java:75) [?:1.8.0_222]
	at net.minecraftforge.fml.VersionChecker$1.run(VersionChecker.java:157) [?:?]
Caused by: java.lang.IllegalStateException: Expected BEGIN_OBJECT but was STRING at line 1 column 1 path $
	at com.google.gson.stream.JsonReader.beginObject(JsonReader.java:385) ~[server-1.16.1-20200625.160719-extra.jar:?]
	at com.google.gson.internal.bind.MapTypeAdapterFactory$Adapter.read(MapTypeAdapterFactory.java:183) ~[server-1.16.1-20200625.160719-extra.jar:?]
	at com.google.gson.internal.bind.MapTypeAdapterFactory$Adapter.read(MapTypeAdapterFactory.java:145) ~[server-1.16.1-20200625.160719-extra.jar:?]
	at com.google.gson.Gson.fromJson(Gson.java:887) ~[server-1.16.1-20200625.160719-extra.jar:?]
	... 6 more
[20Aug2020 16:35:51.066] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Starting version check at https://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
[20Aug2020 16:35:51.787] [Forge Version Check/DEBUG] [net.minecraftforge.fml.VersionChecker/]: [forge] Received version check data:
{
  "homepage": "http://files.minecraftforge.net/maven/net/minecraftforge/forge/",
  "promos": {
    "1.1-latest": "**.**.**.**",
    "1.10-latest": "12.18.0.2000",
    "1.10.2-latest": "12.18.3.2511",
    "1.10.2-recommended": "12.18.3.2185",
    "1.11-latest": "13.19.1.2199",
    "1.11-recommended": "13.19.1.2189",
    "1.11.2-latest": "13.20.1.2588",
    "1.11.2-recommended": "13.20.1.2386",
    "1.12-latest": "14.21.1.2443",
    "1.12-recommended": "14.21.1.2387",
    "1.12.1-latest": "14.22.1.2485",
    "1.12.1-recommended": "14.22.1.2478",
    "1.12.2-latest": "14.23.5.2854",
    "1.12.2-recommended": "14.23.5.2854",
    "1.13.2-latest": "25.0.219",
    "1.14.2-latest": "26.0.63",
    "1.14.3-latest": "27.0.60",
    "1.14.4-latest": "28.2.23",
    "1.14.4-recommended": "28.2.0",
    "1.15-latest": "29.0.4",
    "1.15.1-latest": "30.0.51",
    "1.15.2-latest": "31.2.36",
    "1.15.2-recommended": "31.2.0",
    "1.16.1-latest": "32.0.108",
    "1.16.2-latest": "33.0.7",
    "1.5.2-latest": "**.**.**.**",
    "1.5.2-recommended": "**.**.**.**",
    "1.6.1-latest": "**.**.**.**",
    "1.6.2-latest": "**.**.**.**",
    "1.6.2-recommended": "**.**.**.**",
    "1.6.3-latest": "**.**.**.**",
    "1.6.4-latest": "9.11.1.1345",
    "1.6.4-recommended": "9.11.1.1345",
    "1.7.10-latest": "10.13.4.1614",
    "1.7.10-latest-1.7.10": "10.13.2.1343",
    "1.7.10-recommended": "10.13.4.1558",
    "1.7.2-latest": "10.12.2.1147",
    "1.7.2-recommended": "10.12.2.1121",
    "1.8-latest": "11.14.4.1577",
    "1.8-recommended": "11.14.4.1563",
    "1.8.8-latest": "11.15.0.1655",
    "1.8.9-latest": "11.15.1.2318",
    "1.8.9-recommended": "11.15.1.1722",
    "1.9-latest": "12.16.0.1942",
    "1.9-recommended": "12.16.1.1887",
    "1.9.4-latest": "12.17.0.2051",
    "1.9.4-recommended": "12.17.0.1976",
    "latest-1.7.10": "10.13.2.1343"
  }
}
[20Aug2020 16:35:51.803] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Found status: BETA Current: 32.0.108 Target: 32.0.108
[20Aug2020 16:36:03.466] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', name=\'PROD\'
[20Aug2020 16:36:04.380] [main/DEBUG] [net.minecraftforge.fml.server.ServerLifecycleHooks/CORE]: Generating PackInfo named mod:tombstone for mod file /server/mods/tombstone-5.0.0.jar
[20Aug2020 16:36:04.380] [main/DEBUG] [net.minecraftforge.fml.server.ServerLifecycleHooks/CORE]: Generating PackInfo named mod:forge for mod file /server/libraries/net/minecraftforge/forge/1.16.1-32.0.108/forge-1.16.1-32.0.108-universal.jar
[20Aug2020 16:36:07.312] [main/ERROR] [net.minecraftforge.eventbus.EventBus/EVENTBUS]: Exception caught during firing event: null
	Index: 2
	Listeners:
		0: NORMAL
		1: ASM: net.minecraftforge.common.ForgeInternalHandler@619bf35f onCommandsRegister(Lnet/minecraftforge/event/RegisterCommandsEvent;)V
		2: ASM: class ovh.corail.tombstone.event.EventHandler onRegisterCommand(Lnet/minecraftforge/event/RegisterCommandsEvent;)V
java.lang.ExceptionInInitializerError
	at ovh.corail.tombstone.helper.Helper.initCommands(Helper.java:720)
	at ovh.corail.tombstone.event.EventHandler.onRegisterCommand(EventHandler.java:135)
	at net.minecraftforge.eventbus.ASMEventHandler_36_EventHandler_onRegisterCommand_RegisterCommandsEvent.invoke(.dynamic)
	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85)
	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:297)
	at net.minecraftforge.event.ForgeEventFactory.onCommandRegister(ForgeEventFactory.java:747)
	at net.minecraft.command.Commands.<init>(Commands.java:186)
	at net.minecraft.resources.DataPackRegistries.<init>(DataPackRegistries.java:26)
	at net.minecraft.resources.DataPackRegistries.func_240961_a_(DataPackRegistries.java:70)
	at net.minecraft.server.Main.main(Main.java:125)
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method)
	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62)
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43)
	at java.lang.reflect.Method.invoke(Method.java:498)
	at net.minecraftforge.fml.loading.FMLServerLaunchProvider.lambda$launchService$0(FMLServerLaunchProvider.java:51)
	at cpw.mods.modlauncher.LaunchServiceHandlerDecorator.launch(LaunchServiceHandlerDecorator.java:37)
	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:54)
	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:72)
	at cpw.mods.modlauncher.Launcher.run(Launcher.java:81)
	at cpw.mods.modlauncher.Launcher.main(Launcher.java:65)
	at net.minecraftforge.server.ServerMain$Runner.runLauncher(ServerMain.java:63)
	at net.minecraftforge.server.ServerMain$Runner.access$100(ServerMain.java:60)
	at net.minecraftforge.server.ServerMain.main(ServerMain.java:57)
Caused by: net.minecraftforge.fml.common.ObfuscationReflectionHelper$UnableToFindMethodException: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:166)
	at ovh.corail.tombstone.command.CommandTBRecovery.<clinit>(CommandTBRecovery.java:216)
	... 23 more
Caused by: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
	at java.lang.Class.getDeclaredMethod(Class.java:2130)
	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:160)
	... 24 more

[20Aug2020 16:36:07.370] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: java.lang.RuntimeException: java.lang.reflect.InvocationTargetException
[20Aug2020 16:36:07.377] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.LaunchServiceHandlerDecorator.launch(LaunchServiceHandlerDecorator.java:39)
[20Aug2020 16:36:07.378] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:54)
[20Aug2020 16:36:07.378] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.LaunchServiceHandler.launch(LaunchServiceHandler.java:72)
[20Aug2020 16:36:07.379] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.Launcher.run(Launcher.java:81)
[20Aug2020 16:36:07.379] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at cpw.mods.modlauncher.Launcher.main(Launcher.java:65)
[20Aug2020 16:36:07.379] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at net.minecraftforge.server.ServerMain$Runner.runLauncher(ServerMain.java:63)
[20Aug2020 16:36:07.380] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at net.minecraftforge.server.ServerMain$Runner.access$100(ServerMain.java:60)
[20Aug2020 16:36:07.380] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1052]: 	at net.minecraftforge.server.ServerMain.main(ServerMain.java:57)
[20Aug2020 16:36:07.381] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: Caused by: java.lang.reflect.InvocationTargetException
[20Aug2020 16:36:07.381] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method)
[20Aug2020 16:36:07.381] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62)
[20Aug2020 16:36:07.386] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43)
[20Aug2020 16:36:07.386] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at java.lang.reflect.Method.invoke(Method.java:498)
[20Aug2020 16:36:07.389] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at net.minecraftforge.fml.loading.FMLServerLaunchProvider.lambda$launchService$0(FMLServerLaunchProvider.java:51)
[20Aug2020 16:36:07.390] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	at cpw.mods.modlauncher.LaunchServiceHandlerDecorator.launch(LaunchServiceHandlerDecorator.java:37)
[20Aug2020 16:36:07.393] [main/INFO] [STDERR/]: [java.lang.ThreadGroup:uncaughtException:1061]: 	... 7 more
[20Aug2020 16:36:07.394] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: Caused by: java.lang.ExceptionInInitializerError
[20Aug2020 16:36:07.394] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at ovh.corail.tombstone.helper.Helper.initCommands(Helper.java:720)
[20Aug2020 16:36:07.394] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at ovh.corail.tombstone.event.EventHandler.onRegisterCommand(EventHandler.java:135)
[20Aug2020 16:36:07.396] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.eventbus.ASMEventHandler_36_EventHandler_onRegisterCommand_RegisterCommandsEvent.invoke(.dynamic)
[20Aug2020 16:36:07.401] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.eventbus.ASMEventHandler.invoke(ASMEventHandler.java:85)
[20Aug2020 16:36:07.401] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.eventbus.EventBus.post(EventBus.java:297)
[20Aug2020 16:36:07.402] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraftforge.event.ForgeEventFactory.onCommandRegister(ForgeEventFactory.java:747)
[20Aug2020 16:36:07.402] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.command.Commands.<init>(Commands.java:186)
[20Aug2020 16:36:07.403] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.resources.DataPackRegistries.<init>(DataPackRegistries.java:26)
[20Aug2020 16:36:07.403] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.resources.DataPackRegistries.func_240961_a_(DataPackRegistries.java:70)
[20Aug2020 16:36:07.409] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	at net.minecraft.server.Main.main(Main.java:125)
[20Aug2020 16:36:07.410] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:644]: 	... 13 more
[20Aug2020 16:36:07.410] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: Caused by: net.minecraftforge.fml.common.ObfuscationReflectionHelper$UnableToFindMethodException: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
[20Aug2020 16:36:07.411] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: 	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:166)
[20Aug2020 16:36:07.411] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: 	at ovh.corail.tombstone.command.CommandTBRecovery.<clinit>(CommandTBRecovery.java:216)
[20Aug2020 16:36:07.411] [main/INFO] [STDERR/]: [java.lang.Throwable:printStackTrace:668]: 	... 23 more
[20Aug2020 16:36:07.413] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: Caused by: java.lang.NoSuchMethodException: net.minecraft.server.management.PlayerList.func_75753_a(net.minecraft.entity.player.ServerPlayerEntity)
[20Aug2020 16:36:07.414] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: 	at java.lang.Class.getDeclaredMethod(Class.java:2130)
[20Aug2020 16:36:07.414] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: 	at net.minecraftforge.fml.common.ObfuscationReflectionHelper.findMethod(ObfuscationReflectionHelper.java:160)
[20Aug2020 16:36:07.414] [main/INFO] [STDERR/]: [java.lang.Throwable:printEnclosedStackTrace:710]: 	... 24 more
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
                                            [text:protected] => [20Aug2020 16:34:11.924] [main/DEBUG] [net.minecraftforge.fml.loading.FMLLoader/CORE]: Received command line version data  : MC Version: \'1.16.1\' MCP Version: \'20200625.160719\' Forge Version: \'32.0.108\' Forge group: \'net.minecraftforge\'
                                            [number:protected] => 53
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
                                            [number:protected] => 172
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