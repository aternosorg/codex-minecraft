<?php

class ForgeModDependencyTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-dependency.log");
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
                    [prefix:protected] => [00:04:42] [main/INFO] [LaunchWrapper]:
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
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:04:43] [main/INFO] [LaunchWrapper]:
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
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:04:43] [main/INFO] [LaunchWrapper]:
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
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:04:43] [main/DEBUG] [FML]:
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
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:04:43] [main/INFO] [FML]:
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
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:11] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:11] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:11] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:11] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:12] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:12] [Server thread/INFO] [FML]: Replaced 1036 ore ingredients
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:12] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:12] [Server thread/DEBUG] [FML]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer, techguns.core.TechgunsCore]
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/malisiscore-1.12.2-6.4.0.jar
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/techguns-1.12.2-2.0.1.2_1.jar
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod cofhcore (CoFH Core) requires [redstoneflux@[2.1.0,2.2.0)]
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod thermaldynamics (Thermal Dynamics) requires [codechickenlib@[3.2.2,)]
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraft (EvilCraft) requires [cyclopscore@[1.0.0,)]
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraftcompat (EvilCraft-Compat) requires [cyclopscore@[0.11.6,)]
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:19:10] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:19:10] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod appliedenergistics2 (Applied Energistics 2) requires [forge@[14.23.5.2768,)]
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:26:53] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:53] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod exnihilocreatio (Ex Nihilo Creatio) requires [forgelin]
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [02:11:15] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [02:11:15] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod claysoldiers (Clay Soldiers Mod) requires [sanlib@[1.2.0,]]
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod biomesoplenty (Biomes O\' Plenty) requires [forge@[14.23.5.2768,)]
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod forgemultipartcbe (Forge Multipart CBE) requires [codechickenlib@[3.2.2,), forge@[14.23.5.2768,)]
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]:   Adding Mantle-1.12-1.3.3.42.jar to the mod list
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]:   Adding BiomesOPlenty-1.12.2-7.0.1.2425-universal.jar to the mod list
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:13] [Server thread/DEBUG] [FML]:
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: Enabling mod portalgun
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: Enabling mod techguns
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/FATAL] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: Mod sorting data
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	securitycraft(SecurityCraft:v1.8.11): [1.12.2] SecurityCraft v1.8.11.jar (required-after:forge@[14.23.3.2694,))
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	air_support(air_support:0.3.0): AirSupport-0.3.0.jar (after:*)
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	backpack(Backpack:3.0.2): backpack-3.0.2-1.12.2.jar ()
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	biomesoplenty(Biomes O\' Plenty:7.0.1.2425): BiomesOPlenty-1.12.2-7.0.1.2425-universal.jar (required-after:forge@[14.23.5.2768,))
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftcompat(BuildCraft Compat:7.99.21): buildcraft-all-7.99.21.jar (required-after:forge@[14.23.0.2544,);required-after:buildcraftcore@[7.99.21,);after:buildcrafttransport;after:buildcraftbuilders;after:buildcraftsilicon;after:theoneprobe;after:forestry)
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftbuilders(BuildCraft Builders:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftcore(BuildCraft:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftlib@[7.99.21])
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftenergy(BuildCraft Energy:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftfactory(BuildCraft Factory:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftlib(BuildCraft Lib:7.99.21): buildcraft-all-7.99.21.jar (required-after:forge@[14.23.0.2544,))
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftrobotics(BuildCraft Robotics:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcraftsilicon(BuildCraft Silicon:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21];after:buildcrafttransport)
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	buildcrafttransport(BuildCraft Transport:7.99.21): buildcraft-all-7.99.21.jar (required-after:buildcraftcore@[7.99.21])
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	dragonmounts(Dragon Mounts:1.12.2-1.5.3): DragonMounts-1.12.2-1.5.3-resourceFix.jar (required-after:llibrary@[1.7.9,))
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	cfm(MrCrayfish\'s Furniture Mod:6.2.0): furniture-6.2.0-1.12.2.jar (after:crafttweaker)
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	ichunutil(iChunUtil:7.1.4): iChunUtil-1.12.2-7.1.4.jar (required-after:forge@[12.23.2.2151,99999.24.0.0))
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	malisiscore(MalisisCore:1.12.2-6.4.0): malisiscore-1.12.2-6.4.0.jar ()
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	malisisdoors(MalisisDoors:1.12.2-7.3.0): malisisdoors-1.12.2-7.3.0.jar (required-after:malisiscore)
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	mantle(Mantle:1.12-1.3.3.42): Mantle-1.12-1.3.3.42.jar (required-after:forge@[14.21.1.2387,))
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	natura(Natura:1.12.2-4.3.2.66): natura-1.12.2-4.3.2.66.jar (required-after:forge@[14.23.3.2673,);required-after:mantle@[1.12-1.3.0,);)
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	portalgun(PortalGun:7.0.2): PortalGun-1.12.2-7.0.2.jar (required-after:ichunutil@[7.0.2,8.0.0))
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/DEBUG] [FML]: 	techguns(Techguns:**.**.**.**): techguns-1.12.2-2.0.1.2_1.jar (required:forge@[14.23.5.2807,);after:ftblib;after:chisel;after:patchouli)
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
                                    [number:protected] => 57
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
                                    [number:protected] => 58
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.Loader.sortModList(Loader.java:264) ~[Loader.class:?]
                                    [number:protected] => 59
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:570) ~[Loader.class:?]
                                    [number:protected] => 60
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
                                    [number:protected] => 61
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
                                    [number:protected] => 62
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
                                    [number:protected] => 63
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
                                    [number:protected] => 64
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-14_00.05.16-server.txt
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:05:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 60
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [00:04:42] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[00:04:43] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[00:04:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
[00:04:43] [main/DEBUG] [FML]: Injecting tracing printstreams for STDOUT/STDERR.
[00:04:43] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2814 for Minecraft 1.12.2 loading
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
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.12.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [00:05:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 6
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
                            [0] => redstoneflux
                        )

                    [modName:protected] => CoFH Core
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 2.1.0
                                    [modName:protected] => redstoneflux
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod cofhcore (CoFH Core) requires [redstoneflux@[2.1.0,2.2.0)]
                                            [number:protected] => 17
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
                            [0] => codechickenlib
                        )

                    [modName:protected] => Thermal Dynamics
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 3.2.2
                                    [modName:protected] => codechickenlib
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:41:32] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:41:32] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod thermaldynamics (Thermal Dynamics) requires [codechickenlib@[3.2.2,)]
                                            [number:protected] => 18
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => cyclopscore
                        )

                    [modName:protected] => EvilCraft
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 1.0.0
                                    [modName:protected] => cyclopscore
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraft (EvilCraft) requires [cyclopscore@[1.0.0,)]
                                            [number:protected] => 19
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [4] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => cyclopscore
                        )

                    [modName:protected] => EvilCraft-Compat
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 0.11.6
                                    [modName:protected] => cyclopscore
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [23:23:18] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [23:23:18] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod evilcraftcompat (EvilCraft-Compat) requires [cyclopscore@[0.11.6,)]
                                            [number:protected] => 20
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [5] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => forge
                        )

                    [modName:protected] => Applied Energistics 2
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 14.23.5.2768
                                    [modName:protected] => forge
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [18:19:10] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [18:19:10] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod appliedenergistics2 (Applied Energistics 2) requires [forge@[14.23.5.2768,)]
                                            [number:protected] => 21
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [6] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => forgelin
                        )

                    [modName:protected] => Ex Nihilo Creatio
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 
                                    [modName:protected] => forgelin
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:26:53] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:26:53] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod exnihilocreatio (Ex Nihilo Creatio) requires [forgelin]
                                            [number:protected] => 22
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [7] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => sanlib
                        )

                    [modName:protected] => Clay Soldiers Mod
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 1.2.0
                                    [modName:protected] => sanlib
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [02:11:15] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [02:11:15] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod claysoldiers (Clay Soldiers Mod) requires [sanlib@[1.2.0,]]
                                            [number:protected] => 23
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [8] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => forge
                        )

                    [modName:protected] => Biomes O\' Plenty
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 14.23.5.2768
                                    [modName:protected] => forge
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod biomesoplenty (Biomes O\' Plenty) requires [forge@[14.23.5.2768,)]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [9] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => codechickenlib
                            [1] => forge
                        )

                    [modName:protected] => Forge Multipart CBE
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 3.2.2
                                    [modName:protected] => codechickenlib
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 14.23.5.2768
                                    [modName:protected] => forge
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [22:14:04] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:14:04] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod forgemultipartcbe (Forge Multipart CBE) requires [codechickenlib@[3.2.2,), forge@[14.23.5.2768,)]
                                            [number:protected] => 25
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [10] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => llibrary
                        )

                    [modName:protected] => Dragon Mounts
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 1.7.9
                                    [modName:protected] => llibrary
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [00:05:16] [Server thread/FATAL] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [00:05:16] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod dragonmounts (Dragon Mounts) requires [llibrary@[1.7.9,)]
                                            [number:protected] => 33
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 2
                )

        )

    [iterator:protected] => 10
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));
    }
}