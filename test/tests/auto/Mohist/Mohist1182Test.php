<?php

class Mohist1182Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/mohist/mohist-1-18-2.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\MohistLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 05Jul2022 23:41:35.352] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 40.1.51, --fml.mcVersion, 1.18.2, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20220404.173914, nogui]
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
                                    [text:protected] => [05Jul2022 23:41:35.366] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 9.1.3+9.1.3+main.9b69c82a starting: java version 17.0.2 by Oracle Corporation
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:41:35.366] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:41:35.955] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=union:/server/libraries/org/spongepowered/mixin/0.8.5/mixin-0.8.5.jar%2315!/ Service=ModLauncher Env=SERVER
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:41:35.955] [main/INFO] [mixin/]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:41:46.268] [main/INFO] [mixin/]: Compatibility level set to JAVA_17
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:41:46.268] [main/INFO] [mixin/]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:41:46.305] [main/ERROR] [mixin/]: Mixin config emotecraft.mixins.json does not specify "minVersion" property
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:41:46.305] [main/ERROR] [mixin/]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:41:46.310] [main/ERROR] [mixin/]: Mixin config bendylib.mixin.json does not specify "minVersion" property
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:41:46.310] [main/ERROR] [mixin/]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:41:46.316] [main/ERROR] [mixin/]: Mixin config emotecraft-arch.mixins.json does not specify "minVersion" property
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:41:46.316] [main/ERROR] [mixin/]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:41:46.431] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'forgeserver\' with arguments [nogui]
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:41:46.431] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 40.1.51, for MC 1.18.2 with MCP 20220404.173914
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v40.1.51 Initialized
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:11.065] [modloading-worker-0/INFO] [Mystical Agriculture/]: Registered plugin: com.blakebr0.mysticalagriculture.lib.ModCorePlugin
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:11.065] [modloading-worker-0/INFO] [Mystical Agriculture/]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:11.162] [modloading-worker-0/INFO] [com.tiviacz.travelersbackpack.TravelersBackpack/]: Registered the class com.tiviacz.travelersbackpack.fluids.effects.WaterEffect as a FluidEffect for Water with the ID 0
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:11.162] [modloading-worker-0/INFO] [com.tiviacz.travelersbackpack.TravelersBackpack/]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:11.164] [modloading-worker-0/INFO] [com.tiviacz.travelersbackpack.TravelersBackpack/]: Registered the class com.tiviacz.travelersbackpack.fluids.effects.LavaEffect as a FluidEffect for Lava with the ID 1
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:11.164] [modloading-worker-0/INFO] [com.tiviacz.travelersbackpack.TravelersBackpack/]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:11.548] [modloading-worker-0/INFO] [dev.itsmeow.betteranimalsplus.BetterAnimalsPlusMod/]: Injecting super coyotes...
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:11.548] [modloading-worker-0/INFO] [dev.itsmeow.betteranimalsplus.BetterAnimalsPlusMod/]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:14.727] [modloading-worker-0/INFO] [voicechat/]: Compatibility version 14
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:14.727] [modloading-worker-0/INFO] [voicechat/]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:14.770] [modloading-worker-0/INFO] [dev.itsmeow.betteranimalsplus.BetterAnimalsPlusMod/]: Overspawning lammergeiers...
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:14.770] [modloading-worker-0/INFO] [dev.itsmeow.betteranimalsplus.BetterAnimalsPlusMod/]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:14.903] [modloading-worker-0/INFO] [voicechat/]: Loading plugins
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:14.903] [modloading-worker-0/INFO] [voicechat/]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]: Loaded 0 plugin(s)
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]: Initializing plugins
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]: Initialized 0 plugin(s)
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.667] [main/INFO] [terrablender/]: Registered region minecraft:overworld to index 0 for type OVERWORLD
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.667] [main/INFO] [terrablender/]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region minecraft:nether to index 0 for type NETHER
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region biomesoplenty:overworld_common to index 1 for type OVERWORLD
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region biomesoplenty:overworld_rare to index 2 for type OVERWORLD
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region biomesoplenty:nether_common to index 1 for type NETHER
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.668] [main/INFO] [terrablender/]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.669] [main/INFO] [terrablender/]: Registered region biomesoplenty:nether_rare to index 2 for type NETHER
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.669] [main/INFO] [terrablender/]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.881] [modloading-worker-0/INFO] [xaero.common.server.XaeroMinimapServer/]: Loading Xaero\'s Minimap - Stage 1/2 (Server)
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.881] [modloading-worker-0/INFO] [xaero.common.server.XaeroMinimapServer/]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.885] [main/INFO] [xaero.common.server.XaeroMinimapServer/]: Loading Xaero\'s Minimap - Stage 2/2 (Server)
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.885] [main/INFO] [xaero.common.server.XaeroMinimapServer/]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:15.933] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [voicechat] Starting version check at https://maxhenkel.de/update/voicechat.json
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:15.933] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:17.462] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [voicechat] Found status: UP_TO_DATE Current: 1.18.2-2.2.47 Target: null
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:17.462] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:17.465] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Starting version check at https://files.minecraftforge.net/net/minecraftforge/forge/promotions_slim.json
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:17.465] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:17.884] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Found status: OUTDATED Current: 40.1.51 Target: 40.1.54
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:17.884] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:17.884] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [gravestone] Starting version check at https://maxhenkel.de/update/gravestone.json
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:17.884] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:17.917] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [gravestone] Found status: UP_TO_DATE Current: 1.18.2-1.0.2 Target: null
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:17.917] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:17.919] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [travelersbackpack] Starting version check at https://gist.githubusercontent.com/Tiviacz1337/906937677aa472285dff9d6c2a189d5e/raw
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:17.919] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:18.084] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [travelersbackpack] Found status: UP_TO_DATE Current: 7.1.2 Target: null
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:18.084] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:22.155] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:22.155] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:26.645] [main/WARN] [net.minecraft.server.packs.VanillaPackResources/]: Assets URL \'union:/server/libraries/net/minecraft/server/1.18.2-20220404.173914/server-1.18.2-20220404.173914-srg.jar%2365!/assets/.mcassetsroot\' uses unexpected schema
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:26.645] [main/WARN] [net.minecraft.server.packs.VanillaPackResources/]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:26.646] [main/WARN] [net.minecraft.server.packs.VanillaPackResources/]: Assets URL \'union:/server/libraries/net/minecraft/server/1.18.2-20220404.173914/server-1.18.2-20220404.173914-srg.jar%2365!/data/.mcassetsroot\' uses unexpected schema
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:26.646] [main/WARN] [net.minecraft.server.packs.VanillaPackResources/]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:45.962] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:45.962] [main/WARN] [net.minecraft.commands.Commands/]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:45.965] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:45.965] [main/WARN] [net.minecraft.commands.Commands/]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:45.971] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:45.971] [main/WARN] [net.minecraft.commands.Commands/]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:45.975] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:45.975] [main/WARN] [net.minecraft.commands.Commands/]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:42:45.978] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:42:45.978] [main/WARN] [net.minecraft.commands.Commands/]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:02.227] [Worker-Main-4/INFO] [net.minecraft.world.item.crafting.RecipeManager/]: Loaded 10 recipes
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:02.227] [Worker-Main-4/INFO] [net.minecraft.world.item.crafting.RecipeManager/]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:08.575] [Worker-Main-4/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 1385 advancements
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:08.575] [Worker-Main-4/INFO] [net.minecraft.advancements.AdvancementList/]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:08.642] [Worker-Main-4/INFO] [Cucumber Library/]: Loaded cucumber-tags.json in 3 ms
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:08.642] [Worker-Main-4/INFO] [Cucumber Library/]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:18.350] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.18.2
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:18.350] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:18.351] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Loading properties
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:18.351] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:18.357] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Default game type: SURVIVAL
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:18.357] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:18.358] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Generating keypair
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:18.358] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:19.283] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting Minecraft server on *:13396
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:19.283] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:19.521] [Server thread/INFO] [net.minecraft.server.network.ServerConnectionListener/]: Using epoll channel type
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:19.521] [Server thread/INFO] [net.minecraft.server.network.ServerConnectionListener/]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:20.194] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:20.194] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:20.195] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:20.195] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:20.195] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:20.195] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:20.196] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:20.196] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:20.967] [Server thread/INFO] [Minecraft/]: This server is running Mohist version 1.18.2 (MC: 1.18.2) (Implementing API version 1.18.2-R0.1-SNAPSHOT, Forge version 40.1.51)
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:20.967] [Server thread/INFO] [Minecraft/]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:23.874] [Server thread/INFO] [net.minecraft.server.players.PlayerList/]: Forge Injected Bukkit!
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:23.874] [Server thread/INFO] [net.minecraft.server.players.PlayerList/]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:29.340] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Loading DiscordSRV v1.25.1
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:29.340] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:29.391] [Server thread/INFO] [Minecraft/]: Debug logging is enabled
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:29.391] [Server thread/INFO] [Minecraft/]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:29.393] [Server thread/INFO] [/]: Server Ping Player Sample Count: 12
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:29.393] [Server thread/INFO] [/]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:29.447] [Server thread/INFO] [Minecraft/]: Using 4 threads for Netty based IO
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:29.447] [Server thread/INFO] [Minecraft/]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:32.695] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Preparing level "world"
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:32.695] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:33.489] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Enabling DiscordSRV v1.25.1
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:33.489] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:33.839] [Server thread/INFO] [Minecraft/]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:33.839] [Server thread/INFO] [Minecraft/]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:33.880] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:33.880] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:36.933] [pool-5-thread-1/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] DiscordSRV is up-to-date. (339e5e81da67cfe6210679af775eb66a9b5033be)
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:36.933] [pool-5-thread-1/INFO] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.687] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.687] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.738] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.738] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.804] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.804] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.825] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.825] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.846] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.846] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.858] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.858] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.868] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.868] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.880] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.880] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.892] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.892] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.904] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.904] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.915] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.915] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:42.981] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:42.981] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.021] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.021] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.111] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.111] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.141] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.141] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.158] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.158] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.195] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.195] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.219] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.219] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.234] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.234] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.393] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.393] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:43.886] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:43.886] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:44.396] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:44.396] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:44.936] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:44.936] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:45.387] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:45.387] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:45.916] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:45.916] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:46.407] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:46.407] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:46.923] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:46.923] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:47.392] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:47.392] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:47.887] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:47.887] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:53.989] [DiscordSRV - Initialization/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] [JDA] Login Successful!
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:53.989] [DiscordSRV - Initialization/INFO] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:55.880] [JDA MainWS-ReadThread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] [JDA] Connected to WebSocket
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:55.880] [JDA MainWS-ReadThread/INFO] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.315] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] [JDA] WebSocket connection was closed and cannot be recovered due to identification issues
                                    [number:protected] => 100
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => CloseCode(4014 / Disallowed intents. Your bot might not be eligible to request a privileged intent such as GUILD_PRESENCES or GUILD_MEMBERS.)
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.315] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.379] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] ==============================================================
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.379] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.380] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.380] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.382] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]  *** PLEASE FOLLOW THE INSTRUCTIONS BELOW TO GET DiscordSRV TO WORK ***
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.382] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.383] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.383] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.384] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]  Your DiscordSRV bot is missing one or more of the following intents: Server Members Intent, Message Content Intent!
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.384] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.385] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]  DiscordSRV requires this intent to function. Instructions:
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.385] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.386] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   1. Go to https://discord.com/developers/applications
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.386] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.387] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   2. Click on the DiscordSRV bot
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.387] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.388] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   3. Click on "Bot" on the left
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.388] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.389] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   4. Enable the "SERVER MEMBERS INTENT" and "MESSAGE CONTENT INTENT"
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.389] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.390] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   5. Restart your server
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.390] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.390] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.390] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:43:57.392] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] ==============================================================
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:43:57.392] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.673] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.673] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.681] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.681] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.683] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.683] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.697] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.697] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.701] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.701] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.703] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.703] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.706] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.706] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.709] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.709] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.712] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.712] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.716] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.716] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.734] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.734] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.738] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.738] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.745] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.745] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.747] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.747] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.753] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.753] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.755] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.755] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.761] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.761] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.763] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.763] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.765] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.765] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.774] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.774] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.779] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.779] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.781] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.781] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.782] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.782] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.784] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.784] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.798] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.798] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.801] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.801] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.804] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.804] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.806] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.806] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.808] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.808] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.810] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.810] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.817] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.817] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.818] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.818] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.824] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.824] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.826] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.826] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.836] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.836] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.838] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.838] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.842] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.842] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.845] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.845] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.848] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.848] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.849] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.849] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.852] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.852] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.857] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.857] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.863] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.863] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.866] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.866] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.869] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.869] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.875] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.875] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.881] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.881] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.883] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.883] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.891] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.891] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.894] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.894] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.896] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.896] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.900] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.900] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.905] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.905] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.913] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.913] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.915] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.915] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.917] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.917] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:16.923] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:16.923] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:17.403] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:17.403] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:17.883] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 5%
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:17.883] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:18.384] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:18.384] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:18.886] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:18.886] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:19.385] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:19.385] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:19.886] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:19.886] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:21.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 56%
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:21.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:21.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 56%
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:21.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:21.774] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 56%
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:21.774] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.063] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]: defineId called for: class dev.itsmeow.betteranimalsplus.common.entity.EntityCrab from class dev.itsmeow.betteranimalsplus.imdlib.entity.EntityTypeContainer
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.063] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.063] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]: defineId called for: class dev.itsmeow.betteranimalsplus.common.entity.EntityCrab from class dev.itsmeow.betteranimalsplus.imdlib.entity.util.EntityTypeContainerContainable
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.063] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.175] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]: defineId called for: class dev.itsmeow.betteranimalsplus.common.entity.EntityGoose from class dev.itsmeow.betteranimalsplus.imdlib.entity.EntityTypeContainer
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.175] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.324] [Server thread/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Time elapsed: 48442 ms
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.324] [Server thread/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.325] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Done (52.835s)! For help, type "help"
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.325] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.344] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting GS4 status listener
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.344] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.370] [Server thread/INFO] [net.minecraft.server.rcon.thread.GenericThread/]: Thread Query Listener started
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.370] [Server thread/INFO] [net.minecraft.server.rcon.thread.GenericThread/]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.378] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: JMX monitoring enabled
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.378] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.372] [Query Listener #1/INFO] [net.minecraft.server.rcon.thread.QueryThreadGs4/]: Query running on 0.0.0.0:9898
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.372] [Query Listener #1/INFO] [net.minecraft.server.rcon.thread.QueryThreadGs4/]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.410] [Server thread/INFO] [net.minecraftforge.server.permission.PermissionAPI/]: Successfully initialized permission handler forge:default_handler
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.410] [Server thread/INFO] [net.minecraftforge.server.permission.PermissionAPI/]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.412] [Server thread/WARN] [voicechat/]: Running in offline mode - Voice chat encryption is not secure!
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.412] [Server thread/WARN] [voicechat/]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.425] [Server thread/INFO] [voicechat/]: Using default voicechat socket implementation
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.425] [Server thread/INFO] [voicechat/]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.463] [VoiceChatServerThread/INFO] [voicechat/]: Server started at port 13396
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.463] [VoiceChatServerThread/INFO] [voicechat/]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:22.505] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Disabling DiscordSRV v1.25.1
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:22.505] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:27.829] [DiscordSRV - Shutdown/WARN] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] JDA took too long to shut down, skipping
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:27.829] [DiscordSRV - Shutdown/WARN] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:28.325] [DiscordSRV - Shutdown/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Shutdown completed in 5820ms
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:28.325] [DiscordSRV - Shutdown/INFO] [github.scarsz.discordsrv.DiscordSRV/]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:28.651] [Server thread/WARN] [net.minecraft.server.MinecraftServer/]: Can\'t keep up! Is the server overloaded? Running 6138ms or 122 ticks behind
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:28.651] [Server thread/WARN] [net.minecraft.server.MinecraftServer/]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:28.958] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
                                    [number:protected] => 199
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraft.ReportedException: Ticking block entity
                                    [number:protected] => 200
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:1048) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 201
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:376) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 202
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:966) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 203
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:789) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 204
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:286) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 205
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:833) [?:?]
                                    [number:protected] => 206
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException: Cannot invoke "org.bukkit.inventory.InventoryHolder.getInventory()" because the return value of "net.minecraft.world.Container.getOwner()" is null
                                    [number:protected] => 207
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.block.entity.HopperBlockEntity.ejectItems(HopperBlockEntity.java:194) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 208
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.block.entity.HopperBlockEntity.m_155578_(HopperBlockEntity.java:140) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 209
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.block.entity.HopperBlockEntity.m_155573_(HopperBlockEntity.java:126) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 210
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.chunk.LevelChunk$BoundTickingBlockEntity.m_142224_(LevelChunk.java:764) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 211
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.chunk.LevelChunk$RebindableTickingBlockEntityWrapper.m_142224_(LevelChunk.java:857) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 212
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.Level.m_46463_(Level.java:547) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 213
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:344) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 214
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:1044) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
                                    [number:protected] => 215
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 5 more
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:28.958] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:28.972] [Server thread/FATAL] [net.minecraftforge.common.ForgeMod/]: Preparing crash report with UUID 22d89adc-ba31-4ba5-ad6c-d7e895926c32
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:28.972] [Server thread/FATAL] [net.minecraftforge.common.ForgeMod/]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:28.973] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: This crash report has been saved to: /server/./crash-reports/crash-2022-07-05_23.44.28-server.txt
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:28.973] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:28.973] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Stopping server
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:28.973] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:28.976] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving players
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:28.976] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:29.076] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving worlds
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:29.076] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:37.935] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving chunks for level \'ServerLevel[world]\'/minecraft:overworld
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:37.935] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:38.452] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving chunks for level \'ServerLevel[world]\'/minecraft:the_end
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:38.452] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:38.455] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving chunks for level \'ServerLevel[world]\'/minecraft:the_nether
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:38.455] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:38.593] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage (world): All chunks are saved
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:38.593] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage (DIM1): All chunks are saved
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage (DIM-1): All chunks are saved
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage: All dimensions are saved
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [05Jul2022 23:44:38.767] [Server thread/INFO] [net.minecraft.server.rcon.thread.GenericThread/]: Thread Query Listener stopped
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [05Jul2022 23:44:38.767] [Server thread/INFO] [net.minecraft.server.rcon.thread.GenericThread/]:
                )

        )

    [iterator:protected] => 211
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 05Jul2022 23:41:35.352] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 40.1.51, --fml.mcVersion, 1.18.2, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20220404.173914, nogui]
[05Jul2022 23:41:35.366] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 9.1.3+9.1.3+main.9b69c82a starting: java version 17.0.2 by Oracle Corporation
[05Jul2022 23:41:35.955] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.5 Source=union:/server/libraries/org/spongepowered/mixin/0.8.5/mixin-0.8.5.jar%2315!/ Service=ModLauncher Env=SERVER
[05Jul2022 23:41:46.268] [main/INFO] [mixin/]: Compatibility level set to JAVA_17
[05Jul2022 23:41:46.305] [main/ERROR] [mixin/]: Mixin config emotecraft.mixins.json does not specify "minVersion" property
[05Jul2022 23:41:46.310] [main/ERROR] [mixin/]: Mixin config bendylib.mixin.json does not specify "minVersion" property
[05Jul2022 23:41:46.316] [main/ERROR] [mixin/]: Mixin config emotecraft-arch.mixins.json does not specify "minVersion" property
[05Jul2022 23:41:46.431] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'forgeserver\' with arguments [nogui]
[05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 40.1.51, for MC 1.18.2 with MCP 20220404.173914
[05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v40.1.51 Initialized
[05Jul2022 23:42:11.065] [modloading-worker-0/INFO] [Mystical Agriculture/]: Registered plugin: com.blakebr0.mysticalagriculture.lib.ModCorePlugin
[05Jul2022 23:42:11.162] [modloading-worker-0/INFO] [com.tiviacz.travelersbackpack.TravelersBackpack/]: Registered the class com.tiviacz.travelersbackpack.fluids.effects.WaterEffect as a FluidEffect for Water with the ID 0
[05Jul2022 23:42:11.164] [modloading-worker-0/INFO] [com.tiviacz.travelersbackpack.TravelersBackpack/]: Registered the class com.tiviacz.travelersbackpack.fluids.effects.LavaEffect as a FluidEffect for Lava with the ID 1
[05Jul2022 23:42:11.548] [modloading-worker-0/INFO] [dev.itsmeow.betteranimalsplus.BetterAnimalsPlusMod/]: Injecting super coyotes...
[05Jul2022 23:42:14.727] [modloading-worker-0/INFO] [voicechat/]: Compatibility version 14
[05Jul2022 23:42:14.770] [modloading-worker-0/INFO] [dev.itsmeow.betteranimalsplus.BetterAnimalsPlusMod/]: Overspawning lammergeiers...
[05Jul2022 23:42:14.903] [modloading-worker-0/INFO] [voicechat/]: Loading plugins
[05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]: Loaded 0 plugin(s)
[05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]: Initializing plugins
[05Jul2022 23:42:14.991] [modloading-worker-0/INFO] [voicechat/]: Initialized 0 plugin(s)
[05Jul2022 23:42:15.667] [main/INFO] [terrablender/]: Registered region minecraft:overworld to index 0 for type OVERWORLD
[05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region minecraft:nether to index 0 for type NETHER
[05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region biomesoplenty:overworld_common to index 1 for type OVERWORLD
[05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region biomesoplenty:overworld_rare to index 2 for type OVERWORLD
[05Jul2022 23:42:15.668] [main/INFO] [terrablender/]: Registered region biomesoplenty:nether_common to index 1 for type NETHER
[05Jul2022 23:42:15.669] [main/INFO] [terrablender/]: Registered region biomesoplenty:nether_rare to index 2 for type NETHER
[05Jul2022 23:42:15.881] [modloading-worker-0/INFO] [xaero.common.server.XaeroMinimapServer/]: Loading Xaero\'s Minimap - Stage 1/2 (Server)
[05Jul2022 23:42:15.885] [main/INFO] [xaero.common.server.XaeroMinimapServer/]: Loading Xaero\'s Minimap - Stage 2/2 (Server)
[05Jul2022 23:42:15.933] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [voicechat] Starting version check at https://maxhenkel.de/update/voicechat.json
[05Jul2022 23:42:17.462] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [voicechat] Found status: UP_TO_DATE Current: 1.18.2-2.2.47 Target: null
[05Jul2022 23:42:17.465] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Starting version check at https://files.minecraftforge.net/net/minecraftforge/forge/promotions_slim.json
[05Jul2022 23:42:17.884] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Found status: OUTDATED Current: 40.1.51 Target: 40.1.54
[05Jul2022 23:42:17.884] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [gravestone] Starting version check at https://maxhenkel.de/update/gravestone.json
[05Jul2022 23:42:17.917] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [gravestone] Found status: UP_TO_DATE Current: 1.18.2-1.0.2 Target: null
[05Jul2022 23:42:17.919] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [travelersbackpack] Starting version check at https://gist.githubusercontent.com/Tiviacz1337/906937677aa472285dff9d6c2a189d5e/raw
[05Jul2022 23:42:18.084] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [travelersbackpack] Found status: UP_TO_DATE Current: 7.1.2 Target: null
[05Jul2022 23:42:22.155] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[05Jul2022 23:42:26.645] [main/WARN] [net.minecraft.server.packs.VanillaPackResources/]: Assets URL \'union:/server/libraries/net/minecraft/server/1.18.2-20220404.173914/server-1.18.2-20220404.173914-srg.jar%2365!/assets/.mcassetsroot\' uses unexpected schema
[05Jul2022 23:42:26.646] [main/WARN] [net.minecraft.server.packs.VanillaPackResources/]: Assets URL \'union:/server/libraries/net/minecraft/server/1.18.2-20220404.173914/server-1.18.2-20220404.173914-srg.jar%2365!/data/.mcassetsroot\' uses unexpected schema
[05Jul2022 23:42:45.962] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[05Jul2022 23:42:45.965] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[05Jul2022 23:42:45.971] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[05Jul2022 23:42:45.975] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[05Jul2022 23:42:45.978] [main/WARN] [net.minecraft.commands.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[05Jul2022 23:43:02.227] [Worker-Main-4/INFO] [net.minecraft.world.item.crafting.RecipeManager/]: Loaded 10 recipes
[05Jul2022 23:43:08.575] [Worker-Main-4/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 1385 advancements
[05Jul2022 23:43:08.642] [Worker-Main-4/INFO] [Cucumber Library/]: Loaded cucumber-tags.json in 3 ms
[05Jul2022 23:43:18.350] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.18.2
[05Jul2022 23:43:18.351] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Loading properties
[05Jul2022 23:43:18.357] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Default game type: SURVIVAL
[05Jul2022 23:43:18.358] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Generating keypair
[05Jul2022 23:43:19.283] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting Minecraft server on *:13396
[05Jul2022 23:43:19.521] [Server thread/INFO] [net.minecraft.server.network.ServerConnectionListener/]: Using epoll channel type
[05Jul2022 23:43:20.194] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[05Jul2022 23:43:20.195] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: The server will make no attempt to authenticate usernames. Beware.
[05Jul2022 23:43:20.195] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[05Jul2022 23:43:20.196] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: To change this, set "online-mode" to "true" in the server.properties file.
[05Jul2022 23:43:20.967] [Server thread/INFO] [Minecraft/]: This server is running Mohist version 1.18.2 (MC: 1.18.2) (Implementing API version 1.18.2-R0.1-SNAPSHOT, Forge version 40.1.51)
[05Jul2022 23:43:23.874] [Server thread/INFO] [net.minecraft.server.players.PlayerList/]: Forge Injected Bukkit!
[05Jul2022 23:43:29.340] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Loading DiscordSRV v1.25.1
[05Jul2022 23:43:29.391] [Server thread/INFO] [Minecraft/]: Debug logging is enabled
[05Jul2022 23:43:29.393] [Server thread/INFO] [/]: Server Ping Player Sample Count: 12
[05Jul2022 23:43:29.447] [Server thread/INFO] [Minecraft/]: Using 4 threads for Netty based IO
[05Jul2022 23:43:32.695] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Preparing level "world"
[05Jul2022 23:43:33.489] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Enabling DiscordSRV v1.25.1
[05Jul2022 23:43:33.839] [Server thread/INFO] [Minecraft/]: Server permissions file permissions.yml is empty, ignoring it
[05Jul2022 23:43:33.880] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing start region for dimension minecraft:overworld
[05Jul2022 23:43:36.933] [pool-5-thread-1/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] DiscordSRV is up-to-date. (339e5e81da67cfe6210679af775eb66a9b5033be)
[05Jul2022 23:43:42.687] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.738] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.804] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.825] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.846] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.858] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.868] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.880] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.892] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.904] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.915] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:42.981] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.021] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.111] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.141] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.158] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.195] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.219] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.234] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.393] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:43.886] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:44.396] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:44.936] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:45.387] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:45.916] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:46.407] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:46.923] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:47.392] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:47.887] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:43:53.989] [DiscordSRV - Initialization/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] [JDA] Login Successful!
[05Jul2022 23:43:55.880] [JDA MainWS-ReadThread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] [JDA] Connected to WebSocket
[05Jul2022 23:43:57.315] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] [JDA] WebSocket connection was closed and cannot be recovered due to identification issues
CloseCode(4014 / Disallowed intents. Your bot might not be eligible to request a privileged intent such as GUILD_PRESENCES or GUILD_MEMBERS.)
[05Jul2022 23:43:57.379] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] ==============================================================
[05Jul2022 23:43:57.380] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]
[05Jul2022 23:43:57.382] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]  *** PLEASE FOLLOW THE INSTRUCTIONS BELOW TO GET DiscordSRV TO WORK ***
[05Jul2022 23:43:57.383] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]
[05Jul2022 23:43:57.384] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]  Your DiscordSRV bot is missing one or more of the following intents: Server Members Intent, Message Content Intent!
[05Jul2022 23:43:57.385] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]  DiscordSRV requires this intent to function. Instructions:
[05Jul2022 23:43:57.386] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   1. Go to https://discord.com/developers/applications
[05Jul2022 23:43:57.387] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   2. Click on the DiscordSRV bot
[05Jul2022 23:43:57.388] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   3. Click on "Bot" on the left
[05Jul2022 23:43:57.389] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   4. Enable the "SERVER MEMBERS INTENT" and "MESSAGE CONTENT INTENT"
[05Jul2022 23:43:57.390] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]   5. Restart your server
[05Jul2022 23:43:57.390] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV]
[05Jul2022 23:43:57.392] [JDA MainWS-ReadThread/ERROR] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] ==============================================================
[05Jul2022 23:44:16.673] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.681] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.683] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.697] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.701] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.703] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.706] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.709] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.712] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.716] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.734] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.738] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.745] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.747] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.753] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.755] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.761] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.763] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.765] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.774] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.779] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.781] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.782] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.784] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.798] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.801] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.804] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.806] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.808] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.810] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.817] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.818] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.824] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.826] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.836] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.838] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.842] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.845] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.848] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.849] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.852] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.857] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.863] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.866] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.869] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.875] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.881] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.883] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.891] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.894] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.896] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.900] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.905] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.913] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.915] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.917] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:16.923] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:17.403] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 0%
[05Jul2022 23:44:17.883] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 5%
[05Jul2022 23:44:18.384] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
[05Jul2022 23:44:18.886] [Worker-Main-3/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
[05Jul2022 23:44:19.385] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
[05Jul2022 23:44:19.886] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 15%
[05Jul2022 23:44:21.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 56%
[05Jul2022 23:44:21.771] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 56%
[05Jul2022 23:44:21.774] [Worker-Main-4/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Preparing spawn area: 56%
[05Jul2022 23:44:22.063] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]: defineId called for: class dev.itsmeow.betteranimalsplus.common.entity.EntityCrab from class dev.itsmeow.betteranimalsplus.imdlib.entity.EntityTypeContainer
[05Jul2022 23:44:22.063] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]: defineId called for: class dev.itsmeow.betteranimalsplus.common.entity.EntityCrab from class dev.itsmeow.betteranimalsplus.imdlib.entity.util.EntityTypeContainerContainable
[05Jul2022 23:44:22.175] [Server thread/WARN] [net.minecraft.network.syncher.SynchedEntityData/]: defineId called for: class dev.itsmeow.betteranimalsplus.common.entity.EntityGoose from class dev.itsmeow.betteranimalsplus.imdlib.entity.EntityTypeContainer
[05Jul2022 23:44:22.324] [Server thread/INFO] [net.minecraft.server.level.progress.LoggerChunkProgressListener/]: Time elapsed: 48442 ms
[05Jul2022 23:44:22.325] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Done (52.835s)! For help, type "help"
[05Jul2022 23:44:22.344] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting GS4 status listener
[05Jul2022 23:44:22.370] [Server thread/INFO] [net.minecraft.server.rcon.thread.GenericThread/]: Thread Query Listener started
[05Jul2022 23:44:22.378] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: JMX monitoring enabled
[05Jul2022 23:44:22.372] [Query Listener #1/INFO] [net.minecraft.server.rcon.thread.QueryThreadGs4/]: Query running on 0.0.0.0:9898
[05Jul2022 23:44:22.410] [Server thread/INFO] [net.minecraftforge.server.permission.PermissionAPI/]: Successfully initialized permission handler forge:default_handler
[05Jul2022 23:44:22.412] [Server thread/WARN] [voicechat/]: Running in offline mode - Voice chat encryption is not secure!
[05Jul2022 23:44:22.425] [Server thread/INFO] [voicechat/]: Using default voicechat socket implementation
[05Jul2022 23:44:22.463] [VoiceChatServerThread/INFO] [voicechat/]: Server started at port 13396
[05Jul2022 23:44:22.505] [Server thread/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Disabling DiscordSRV v1.25.1
[05Jul2022 23:44:27.829] [DiscordSRV - Shutdown/WARN] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] JDA took too long to shut down, skipping
[05Jul2022 23:44:28.325] [DiscordSRV - Shutdown/INFO] [github.scarsz.discordsrv.DiscordSRV/]: [DiscordSRV] Shutdown completed in 5820ms
[05Jul2022 23:44:28.651] [Server thread/WARN] [net.minecraft.server.MinecraftServer/]: Can\'t keep up! Is the server overloaded? Running 6138ms or 122 ticks behind
[05Jul2022 23:44:28.958] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: Encountered an unexpected exception
net.minecraft.ReportedException: Ticking block entity
	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:1048) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:376) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:966) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:789) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:286) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at java.lang.Thread.run(Thread.java:833) [?:?]
Caused by: java.lang.NullPointerException: Cannot invoke "org.bukkit.inventory.InventoryHolder.getInventory()" because the return value of "net.minecraft.world.Container.getOwner()" is null
	at net.minecraft.world.level.block.entity.HopperBlockEntity.ejectItems(HopperBlockEntity.java:194) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.world.level.block.entity.HopperBlockEntity.m_155578_(HopperBlockEntity.java:140) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.world.level.block.entity.HopperBlockEntity.m_155573_(HopperBlockEntity.java:126) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.world.level.chunk.LevelChunk$BoundTickingBlockEntity.m_142224_(LevelChunk.java:764) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.world.level.chunk.LevelChunk$RebindableTickingBlockEntityWrapper.m_142224_(LevelChunk.java:857) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.world.level.Level.m_46463_(Level.java:547) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:344) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:1044) ~[server-1.18.2-20220404.173914-srg.jar%2365!/:?]
	... 5 more
[05Jul2022 23:44:28.972] [Server thread/FATAL] [net.minecraftforge.common.ForgeMod/]: Preparing crash report with UUID 22d89adc-ba31-4ba5-ad6c-d7e895926c32
[05Jul2022 23:44:28.973] [Server thread/ERROR] [net.minecraft.server.MinecraftServer/]: This crash report has been saved to: /server/./crash-reports/crash-2022-07-05_23.44.28-server.txt
[05Jul2022 23:44:28.973] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Stopping server
[05Jul2022 23:44:28.976] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving players
[05Jul2022 23:44:29.076] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving worlds
[05Jul2022 23:44:37.935] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving chunks for level \'ServerLevel[world]\'/minecraft:overworld
[05Jul2022 23:44:38.452] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving chunks for level \'ServerLevel[world]\'/minecraft:the_end
[05Jul2022 23:44:38.455] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Saving chunks for level \'ServerLevel[world]\'/minecraft:the_nether
[05Jul2022 23:44:38.593] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage (world): All chunks are saved
[05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage (DIM1): All chunks are saved
[05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage (DIM-1): All chunks are saved
[05Jul2022 23:44:38.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: ThreadedAnvilChunkStorage: All dimensions are saved
[05Jul2022 23:44:38.767] [Server thread/INFO] [net.minecraft.server.rcon.thread.GenericThread/]: Thread Query Listener stopped
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
                                            [text:protected] => 05Jul2022 23:41:35.352] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--launchTarget, forgeserver, --fml.forgeVersion, 40.1.51, --fml.mcVersion, 1.18.2, --fml.forgeGroup, net.minecraftforge, --fml.mcpVersion, 20220404.173914, nogui]
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => 
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => 
                        )

                    [counter:protected] => 2
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeJavaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [05Jul2022 23:41:35.366] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 9.1.3+9.1.3+main.9b69c82a starting: java version 17.0.2 by Oracle Corporation
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [05Jul2022 23:41:35.366] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Java version
                    [value:protected] => 17.0.2
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v40.1.51 Initialized
                                            [number:protected] => 10
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [05Jul2022 23:42:09.577] [modloading-worker-0/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 40.1.51
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [05Jul2022 23:43:20.967] [Server thread/INFO] [Minecraft/]: This server is running Mohist version 1.18.2 (MC: 1.18.2) (Implementing API version 1.18.2-R0.1-SNAPSHOT, Forge version 40.1.51)
                                            [number:protected] => 58
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [05Jul2022 23:43:20.967] [Server thread/INFO] [Minecraft/]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Mohist version
                    [value:protected] => 1.18.2
                )

        )

    [iterator:protected] => 3
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[0]->getMessage());

        $this->assertEquals("Java version: 17.0.2", $analysis[1]->getMessage());

        $this->assertEquals("Forge version: 40.1.51", $analysis[2]->getMessage());

        $this->assertEquals("Mohist version: 1.18.2", $analysis[3]->getMessage());

    }
}