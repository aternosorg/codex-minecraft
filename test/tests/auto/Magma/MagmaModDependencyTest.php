<?php

class MagmaModDependencyTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/magma/magma-mod-dependency.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\MagmaLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:04:42] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:04:42] [main/INFO] [LaunchWrapper]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:04:43] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:04:43] [main/INFO] [LaunchWrapper]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:04:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:04:43] [main/INFO] [LaunchWrapper]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:04:43] [main/DEBUG] [FML]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:04:43] [main/DEBUG] [FML]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:04:43] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2814 for Minecraft 1.12.2 loading
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:04:43] [main/INFO] [FML]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:53] [Server thread/INFO] [Minecraft]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:11] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:11] [Server thread/INFO] [FML]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:11] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:11] [Server thread/INFO] [FML]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:12] [Server thread/INFO] [FML]: Replaced 1036 ore ingredients
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:12] [Server thread/INFO] [FML]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:12] [Server thread/DEBUG] [FML]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:12] [Server thread/DEBUG] [FML]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer, techguns.core.TechgunsCore]
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/malisiscore-1.12.2-6.4.0.jar
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/TRACE] [FML]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/techguns-1.12.2-2.0.1.2_1.jar
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/TRACE] [FML]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod cofhcore (CoFH Core) requires [redstoneflux@[2.1.0,2.2.0)]
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod thermaldynamics (Thermal Dynamics) requires [codechickenlib@[3.2.2,)]
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraft (EvilCraft) requires [cyclopscore@[1.0.0,)]
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraftcompat (EvilCraft-Compat) requires [cyclopscore@[0.11.6,)]
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:19:10] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod appliedenergistics2 (Applied Energistics 2) requires [forge@[14.23.5.2768,)]
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [18:19:10] [Server thread/FATAL] [FML]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:53] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod exnihilocreatio (Ex Nihilo Creatio) requires [forgelin]
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:53] [Server thread/FATAL] [FML]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:11:15] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod claysoldiers (Clay Soldiers Mod) requires [sanlib@[1.2.0,]]
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [02:11:15] [Server thread/FATAL] [FML]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod biomesoplenty (Biomes O\' Plenty) requires [forge@[14.23.5.2768,)]
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod forgemultipartcbe (Forge Multipart CBE) requires [codechickenlib@[3.2.2,), forge@[14.23.5.2768,)]
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/INFO] [FML]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]:   Adding Mantle-1.12-1.3.3.42.jar to the mod list
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]:   Adding BiomesOPlenty-1.12.2-7.0.1.2425-universal.jar to the mod list
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: Enabling mod portalgun
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: Enabling mod techguns
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/TRACE] [FML]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/FATAL] [FML]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: Mod sorting data
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	securitycraft(SecurityCraft:v1.8.11): [1.12.2] SecurityCraft v1.8.11.jar (required-after:forge@[14.23.3.2694,))
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	air_support(air_support:0.3.0): AirSupport-0.3.0.jar (after:*)
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	backpack(Backpack:3.0.2): backpack-3.0.2-1.12.2.jar ()
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	biomesoplenty(Biomes O\' Plenty:7.0.1.2425): BiomesOPlenty-1.12.2-7.0.1.2425-universal.jar (required-after:forge@[14.23.5.2768,))
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftcompat(BuildCraft Compat:7.99.21): buildcraft-all-7.99.21.jar (required-after:forge@[14.23.0.2544,);required-after:buildcraftcore@[7.99.21,);after:buildcrafttransport;after:buildcraftbuilders;after:buildcraftsilicon;after:theoneprobe;after:forestry)
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftbuilders(BuildCraft Builders:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftcore(BuildCraft:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftlib@[7.99.21])
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftenergy(BuildCraft Energy:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftfactory(BuildCraft Factory:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftlib(BuildCraft Lib:7.99.21): buildcraft-all-7.99.21.jar (required-after:forge@[14.23.0.2544,))
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftrobotics(BuildCraft Robotics:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftsilicon(BuildCraft Silicon:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21];after:buildcrafttransport)
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcrafttransport(BuildCraft Transport:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	dragonmounts(Dragon Mounts:1.12.2-1.5.3): DragonMounts-1.12.2-1.5.3-resourceFix.jar (required-after:llibrary@[1.7.9,))
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	cfm(MrCrayfish\'s Furniture Mod:6.2.0): furniture-6.2.0-1.12.2.jar (after:crafttweaker)
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	ichunutil(iChunUtil:7.1.4): iChunUtil-1.12.2-7.1.4.jar (required-after:forge@[12.23.2.2151,99999.24.0.0))
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	malisiscore(MalisisCore:1.12.2-6.4.0): malisiscore-1.12.2-6.4.0.jar ()
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	malisisdoors(MalisisDoors:1.12.2-7.3.0): malisisdoors-1.12.2-7.3.0.jar (required-after:malisiscore)
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	mantle(Mantle:1.12-1.3.3.42): Mantle-1.12-1.3.3.42.jar (required-after:forge@[14.21.1.2387,))
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	natura(Natura:1.12.2-4.3.2.66): natura-1.12.2-4.3.2.66.jar (required-after:forge@[14.23.3.2673,);required-after:mantle@[1.12-1.3.0,);)
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	portalgun(PortalGun:7.0.2): PortalGun-1.12.2-7.0.2.jar (required-after:ichunutil@[7.0.2,8.0.0))
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	techguns(Techguns:**.**.**.**): techguns-1.12.2-2.0.1.2_1.jar (required:forge@[14.23.5.2807,);after:ftblib;after:chisel;after:patchouli)
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
                                    [number:protected] => 58
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
                                    [number:protected] => 59
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.Loader.sortModList(Loader.java:264) ~[Loader.class:?]
                                    [number:protected] => 60
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:570) ~[Loader.class:?]
                                    [number:protected] => 61
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
                                    [number:protected] => 62
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
                                    [number:protected] => 63
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
                                    [number:protected] => 64
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
                                    [number:protected] => 65
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-14_00.05.16-server.txt
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

        )

    [iterator:protected] => 61
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [00:04:42] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[00:04:43] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[00:04:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
[00:04:43] [main/DEBUG] [FML]: Injecting tracing printstreams for STDOUT/STDERR.
[00:04:43] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2814 for Minecraft 1.12.2 loading
[15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
[00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
[00:05:11] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
[00:05:11] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
[00:05:12] [Server thread/INFO] [FML]: Replaced 1036 ore ingredients
[00:05:12] [Server thread/DEBUG] [FML]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
[00:05:13] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer, techguns.core.TechgunsCore]
[00:05:13] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
[00:05:13] [Server thread/DEBUG] [FML]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
[00:05:13] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/malisiscore-1.12.2-6.4.0.jar
[00:05:13] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/techguns-1.12.2-2.0.1.2_1.jar
[00:05:13] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
[16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod cofhcore (CoFH Core) requires [redstoneflux@[2.1.0,2.2.0)]
[16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod thermaldynamics (Thermal Dynamics) requires [codechickenlib@[3.2.2,)]
[23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraft (EvilCraft) requires [cyclopscore@[1.0.0,)]
[23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraftcompat (EvilCraft-Compat) requires [cyclopscore@[0.11.6,)]
[18:19:10] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod appliedenergistics2 (Applied Energistics 2) requires [forge@[14.23.5.2768,)]
[17:26:53] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod exnihilocreatio (Ex Nihilo Creatio) requires [forgelin]
[02:11:15] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod claysoldiers (Clay Soldiers Mod) requires [sanlib@[1.2.0,]]
[22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod biomesoplenty (Biomes O\' Plenty) requires [forge@[14.23.5.2768,)]
[22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod forgemultipartcbe (Forge Multipart CBE) requires [codechickenlib@[3.2.2,), forge@[14.23.5.2768,)]
[00:05:13] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
[00:05:13] [Server thread/DEBUG] [FML]:   Adding Mantle-1.12-1.3.3.42.jar to the mod list
[00:05:13] [Server thread/DEBUG] [FML]:   Adding BiomesOPlenty-1.12.2-7.0.1.2425-universal.jar to the mod list
[00:05:13] [Server thread/DEBUG] [FML]:
[00:05:16] [Server thread/DEBUG] [FML]: Enabling mod portalgun
[00:05:16] [Server thread/DEBUG] [FML]: Enabling mod techguns
[00:05:16] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
[00:05:16] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
[00:05:16] [Server thread/DEBUG] [FML]: Mod sorting data
[00:05:16] [Server thread/DEBUG] [FML]: 	securitycraft(SecurityCraft:v1.8.11): [1.12.2] SecurityCraft v1.8.11.jar (required-after:forge@[14.23.3.2694,))
[00:05:16] [Server thread/DEBUG] [FML]: 	air_support(air_support:0.3.0): AirSupport-0.3.0.jar (after:*)
[00:05:16] [Server thread/DEBUG] [FML]: 	backpack(Backpack:3.0.2): backpack-3.0.2-1.12.2.jar ()
[00:05:16] [Server thread/DEBUG] [FML]: 	biomesoplenty(Biomes O\' Plenty:7.0.1.2425): BiomesOPlenty-1.12.2-7.0.1.2425-universal.jar (required-after:forge@[14.23.5.2768,))
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftcompat(BuildCraft Compat:7.99.21): buildcraft-all-7.99.21.jar (required-after:forge@[14.23.0.2544,);required-after:buildcraftcore@[7.99.21,);after:buildcrafttransport;after:buildcraftbuilders;after:buildcraftsilicon;after:theoneprobe;after:forestry)
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftbuilders(BuildCraft Builders:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftcore(BuildCraft:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftlib@[7.99.21])
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftenergy(BuildCraft Energy:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftfactory(BuildCraft Factory:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftlib(BuildCraft Lib:7.99.21): buildcraft-all-7.99.21.jar (required-after:forge@[14.23.0.2544,))
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftrobotics(BuildCraft Robotics:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftsilicon(BuildCraft Silicon:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21];after:buildcrafttransport)
[00:05:16] [Server thread/DEBUG] [FML]: 	buildcrafttransport(BuildCraft Transport:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
[00:05:16] [Server thread/DEBUG] [FML]: 	dragonmounts(Dragon Mounts:1.12.2-1.5.3): DragonMounts-1.12.2-1.5.3-resourceFix.jar (required-after:llibrary@[1.7.9,))
[00:05:16] [Server thread/DEBUG] [FML]: 	cfm(MrCrayfish\'s Furniture Mod:6.2.0): furniture-6.2.0-1.12.2.jar (after:crafttweaker)
[00:05:16] [Server thread/DEBUG] [FML]: 	ichunutil(iChunUtil:7.1.4): iChunUtil-1.12.2-7.1.4.jar (required-after:forge@[12.23.2.2151,99999.24.0.0))
[00:05:16] [Server thread/DEBUG] [FML]: 	malisiscore(MalisisCore:1.12.2-6.4.0): malisiscore-1.12.2-6.4.0.jar ()
[00:05:16] [Server thread/DEBUG] [FML]: 	malisisdoors(MalisisDoors:1.12.2-7.3.0): malisisdoors-1.12.2-7.3.0.jar (required-after:malisiscore)
[00:05:16] [Server thread/DEBUG] [FML]: 	mantle(Mantle:1.12-1.3.3.42): Mantle-1.12-1.3.3.42.jar (required-after:forge@[14.21.1.2387,))
[00:05:16] [Server thread/DEBUG] [FML]: 	natura(Natura:1.12.2-4.3.2.66): natura-1.12.2-4.3.2.66.jar (required-after:forge@[14.23.3.2673,);required-after:mantle@[1.12-1.3.0,);)
[00:05:16] [Server thread/DEBUG] [FML]: 	portalgun(PortalGun:7.0.2): PortalGun-1.12.2-7.0.2.jar (required-after:ichunutil@[7.0.2,8.0.0))
[00:05:16] [Server thread/DEBUG] [FML]: 	techguns(Techguns:**.**.**.**): techguns-1.12.2-2.0.1.2_1.jar (required:forge@[14.23.5.2807,);after:ftblib;after:chisel;after:patchouli)
[00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
	at net.minecraftforge.fml.common.Loader.sortModList(Loader.java:264) ~[Loader.class:?]
	at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:570) ~[Loader.class:?]
	at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
	at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
	at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-14_00.05.16-server.txt
[00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Magma\MagmaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
                                            [number:protected] => 6
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:02:53] [Server thread/INFO] [Minecraft]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Magma version
                    [value:protected] => e2b9ab6
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 7
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.12.2
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [00:05:11] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [00:05:11] [Server thread/INFO] [FML]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 14.23.5.2814
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod cofhcore (CoFH Core) requires [redstoneflux@[2.1.0,2.2.0)]
                                            [number:protected] => 18
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => redstoneflux
                                    [modVersion:protected] => 2.1.0
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => CoFH Core
                    [dependencyMods:protected] => Array
                        (
                            [0] => redstoneflux
                        )

                )

            [4] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod thermaldynamics (Thermal Dynamics) requires [codechickenlib@[3.2.2,)]
                                            [number:protected] => 19
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => codechickenlib
                                    [modVersion:protected] => 3.2.2
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Thermal Dynamics
                    [dependencyMods:protected] => Array
                        (
                            [0] => codechickenlib
                        )

                )

            [5] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraft (EvilCraft) requires [cyclopscore@[1.0.0,)]
                                            [number:protected] => 20
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => cyclopscore
                                    [modVersion:protected] => 1.0.0
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => EvilCraft
                    [dependencyMods:protected] => Array
                        (
                            [0] => cyclopscore
                        )

                )

            [6] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraftcompat (EvilCraft-Compat) requires [cyclopscore@[0.11.6,)]
                                            [number:protected] => 21
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => cyclopscore
                                    [modVersion:protected] => 0.11.6
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => EvilCraft-Compat
                    [dependencyMods:protected] => Array
                        (
                            [0] => cyclopscore
                        )

                )

            [7] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [18:19:10] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod appliedenergistics2 (Applied Energistics 2) requires [forge@[14.23.5.2768,)]
                                            [number:protected] => 22
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [18:19:10] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => forge
                                    [modVersion:protected] => 14.23.5.2768
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Applied Energistics 2
                    [dependencyMods:protected] => Array
                        (
                            [0] => forge
                        )

                )

            [8] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:26:53] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod exnihilocreatio (Ex Nihilo Creatio) requires [forgelin]
                                            [number:protected] => 23
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [17:26:53] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => forgelin
                                    [modVersion:protected] => 
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Ex Nihilo Creatio
                    [dependencyMods:protected] => Array
                        (
                            [0] => forgelin
                        )

                )

            [9] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [02:11:15] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod claysoldiers (Clay Soldiers Mod) requires [sanlib@[1.2.0,]]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [02:11:15] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => sanlib
                                    [modVersion:protected] => 1.2.0
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Clay Soldiers Mod
                    [dependencyMods:protected] => Array
                        (
                            [0] => sanlib
                        )

                )

            [10] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod biomesoplenty (Biomes O\' Plenty) requires [forge@[14.23.5.2768,)]
                                            [number:protected] => 25
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => forge
                                    [modVersion:protected] => 14.23.5.2768
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Biomes O\' Plenty
                    [dependencyMods:protected] => Array
                        (
                            [0] => forge
                        )

                )

            [11] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod forgemultipartcbe (Forge Multipart CBE) requires [codechickenlib@[3.2.2,), forge@[14.23.5.2768,)]
                                            [number:protected] => 26
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => codechickenlib
                                    [modVersion:protected] => 3.2.2
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => forge
                                    [modVersion:protected] => 14.23.5.2768
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Forge Multipart CBE
                    [dependencyMods:protected] => Array
                        (
                            [0] => codechickenlib
                            [1] => forge
                        )

                )

            [12] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [00:05:16] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
                                            [number:protected] => 34
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [00:05:16] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 2
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => llibrary
                                    [modVersion:protected] => 1.7.9
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Dragon Mounts
                    [dependencyMods:protected] => Array
                        (
                            [0] => llibrary
                        )

                )

        )

    [iterator:protected] => 12
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Magma version: e2b9ab6", $analysis[0]->getMessage());

        $this->assertEquals("Minecraft version: 1.12.2", $analysis[1]->getMessage());

        $this->assertEquals("Forge version: 14.23.5.2814", $analysis[2]->getMessage());

        $this->assertEquals("The mod 'CoFH Core' is missing the required mod 'redstoneflux'.", $analysis[3]->getMessage());
        $this->assertEquals("Install the mod 'redstoneflux' with version 2.1.0.", $analysis[3][0]->getMessage());

        $this->assertEquals("The mod 'Thermal Dynamics' is missing the required mod 'codechickenlib'.", $analysis[4]->getMessage());
        $this->assertEquals("Install the mod 'codechickenlib' with version 3.2.2.", $analysis[4][0]->getMessage());

        $this->assertEquals("The mod 'EvilCraft' is missing the required mod 'cyclopscore'.", $analysis[5]->getMessage());
        $this->assertEquals("Install the mod 'cyclopscore' with version 1.0.0.", $analysis[5][0]->getMessage());

        $this->assertEquals("The mod 'EvilCraft-Compat' is missing the required mod 'cyclopscore'.", $analysis[6]->getMessage());
        $this->assertEquals("Install the mod 'cyclopscore' with version 0.11.6.", $analysis[6][0]->getMessage());

        $this->assertEquals("The mod 'Applied Energistics 2' is missing the required mod 'forge'.", $analysis[7]->getMessage());
        $this->assertEquals("Install the mod 'forge' with version 14.23.5.2768.", $analysis[7][0]->getMessage());

        $this->assertEquals("The mod 'Ex Nihilo Creatio' is missing the required mod 'forgelin'.", $analysis[8]->getMessage());
        $this->assertEquals("Install the mod 'forgelin'.", $analysis[8][0]->getMessage());

        $this->assertEquals("The mod 'Clay Soldiers Mod' is missing the required mod 'sanlib'.", $analysis[9]->getMessage());
        $this->assertEquals("Install the mod 'sanlib' with version 1.2.0.", $analysis[9][0]->getMessage());

        $this->assertEquals("The mod 'Biomes O' Plenty' is missing the required mod 'forge'.", $analysis[10]->getMessage());
        $this->assertEquals("Install the mod 'forge' with version 14.23.5.2768.", $analysis[10][0]->getMessage());

        $this->assertEquals("The mod 'Forge Multipart CBE' is missing the required mods 'codechickenlib', 'forge'.", $analysis[11]->getMessage());
        $this->assertEquals("Install the mod 'codechickenlib' with version 3.2.2.", $analysis[11][0]->getMessage());
        $this->assertEquals("Install the mod 'forge' with version 14.23.5.2768.", $analysis[11][1]->getMessage());

        $this->assertEquals("The mod 'Dragon Mounts' is missing the required mod 'llibrary'.", $analysis[12]->getMessage());
        $this->assertEquals("Install the mod 'llibrary' with version 1.7.9.", $analysis[12][0]->getMessage());

    }
}