<?php

class ForgeStart1132Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-start-1132.log");
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
                                    [text:protected] => [26Feb2019 11:28:05.065] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher starting: java version 1.8.0_144
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:05.065] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:05.160] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 25.0.54, --fml.mcpVersion, 20190213.203750, --fml.mcVersion, 1.13.2, --fml.forgeGroup, net.minecraftforge, nogui]
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:05.160] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:05.470] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:05.470] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:06.485] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 25.0.54, --fml.mcpVersion, 20190213.203750, --fml.mcVersion, 1.13.2, --fml.forgeGroup, net.minecraftforge, nogui]
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:06.485] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.016] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:block\' was empty after loading
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.016] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:potion\' was empty after loading
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:biome\' was empty after loading
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:block_entity_type\' was empty after loading
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:enchantment\' was empty after loading
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:entity_type\' was empty after loading
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:item\' was empty after loading
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:mob_effect\' was empty after loading
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:sound_event\' was empty after loading
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.531] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.531] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.534] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.534] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.535] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.535] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.550] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.550] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.552] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.552] [main/WARN] [net.minecraft.command.Commands/]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.693] [main/INFO] [net.minecraft.item.crafting.RecipeManager/]: Loaded 0 recipes
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.693] [main/INFO] [net.minecraft.item.crafting.RecipeManager/]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.697] [main/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 0 advancements
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.697] [main/INFO] [net.minecraft.advancements.AdvancementList/]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.710] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.13.2
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.710] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.900] [modloading-worker-25/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 25.0.54, for MC 1.13.2 with MCP 20190213.203750
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.900] [modloading-worker-25/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:24.901] [modloading-worker-25/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v25.0.54 Initialized
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:24.901] [modloading-worker-25/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.077] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Starting version check at https://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.077] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.078] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Loading properties
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.078] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.093] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Default game type: SURVIVAL
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.093] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.093] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Generating keypair
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.093] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.234] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting Minecraft server on *:10767
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.234] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.346] [Server thread/INFO] [net.minecraft.network.NetworkSystem/]: Using epoll channel type
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.346] [Server thread/INFO] [net.minecraft.network.NetworkSystem/]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.657] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.657] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:27.053] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Found status: BETA_OUTDATED Target: 25.0.58
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:27.053] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:27.097] [Thread-1/FATAL] [net.minecraftforge.common.ForgeConfig/CORE]: Forge config just got changed on the file system!
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:27.097] [Thread-1/FATAL] [net.minecraftforge.common.ForgeConfig/CORE]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:27.098] [Thread-1/FATAL] [net.minecraftforge.common.ForgeConfig/CORE]: Forge config just got changed on the file system!
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:27.098] [Thread-1/FATAL] [net.minecraftforge.common.ForgeConfig/CORE]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:27.121] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Preparing level "world"
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:27.121] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:27.186] [Server thread/ERROR] [net.minecraftforge.fml.FMLWorldPersistenceHook/WP]: This world was saved with mod minecraft which appears to be missing, things may not work well
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:27.186] [Server thread/ERROR] [net.minecraftforge.fml.FMLWorldPersistenceHook/WP]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:27.212] [Server thread/INFO] [net.minecraftforge.registries.GameData/REGISTRIES]: Injecting existing registry data into this SERVER instance
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:27.212] [Server thread/INFO] [net.minecraftforge.registries.GameData/REGISTRIES]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:27.587] [Server thread/INFO] [net.minecraft.resources.SimpleReloadableResourceManager/]: Reloading ResourceManager: Default, forge-1.13.2-25.0.54-universal.jar
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:27.587] [Server thread/INFO] [net.minecraft.resources.SimpleReloadableResourceManager/]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:28.515] [Server thread/INFO] [net.minecraft.item.crafting.RecipeManager/]: Loaded 524 recipes
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:28.515] [Server thread/INFO] [net.minecraft.item.crafting.RecipeManager/]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:29.632] [Server thread/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 571 advancements
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:29.632] [Server thread/INFO] [net.minecraft.advancements.AdvancementList/]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:29.984] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:29.984] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:30.465] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 4%
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:30.465] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:31.526] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 8%
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:31.526] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:31.651] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 12%
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:31.651] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:31.795] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 16%
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:31.795] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:31.870] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 20%
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:31.870] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:31.919] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 24%
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:31.919] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:31.986] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 28%
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:31.986] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.053] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 32%
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.053] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.106] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 36%
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.106] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.164] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 40%
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.164] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.218] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 44%
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.218] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.303] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 48%
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.303] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.382] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 52%
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.382] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.438] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 56%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.438] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.507] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 60%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.507] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.555] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 64%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.555] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 68%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.683] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 72%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.683] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.746] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 76%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.746] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:32.800] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 80%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:32.800] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.035] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 84%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.035] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.087] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 88%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.087] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.160] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 92%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.160] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.233] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 96%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.233] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.314] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 100%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.314] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.314] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Time elapsed: 3328 ms
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.314] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.316] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Done (6.289s)! For help, type "help"
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.316] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.317] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting GS4 status listener
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.317] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [26Feb2019 11:28:33.336] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer/]: Query running on 0.0.0.0:10767
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [26Feb2019 11:28:33.336] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer/]:
                )

        )

    [iterator:protected] => 72
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [26Feb2019 11:28:05.065] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher starting: java version 1.8.0_144
[26Feb2019 11:28:05.160] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 25.0.54, --fml.mcpVersion, 20190213.203750, --fml.mcVersion, 1.13.2, --fml.forgeGroup, net.minecraftforge, nogui]
[26Feb2019 11:28:05.470] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
[26Feb2019 11:28:06.485] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 25.0.54, --fml.mcpVersion, 20190213.203750, --fml.mcVersion, 1.13.2, --fml.forgeGroup, net.minecraftforge, nogui]
[26Feb2019 11:28:24.016] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:block\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:potion\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:biome\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:block_entity_type\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:enchantment\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:entity_type\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:item\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:mob_effect\' was empty after loading
[26Feb2019 11:28:24.018] [main/ERROR] [net.minecraft.util.registry.IRegistry/]: Registry \'minecraft:sound_event\' was empty after loading
[26Feb2019 11:28:24.531] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[26Feb2019 11:28:24.534] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[26Feb2019 11:28:24.535] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[26Feb2019 11:28:24.550] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[26Feb2019 11:28:24.552] [main/WARN] [net.minecraft.command.Commands/]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[26Feb2019 11:28:24.693] [main/INFO] [net.minecraft.item.crafting.RecipeManager/]: Loaded 0 recipes
[26Feb2019 11:28:24.697] [main/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 0 advancements
[26Feb2019 11:28:24.710] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.13.2
[26Feb2019 11:28:24.900] [modloading-worker-25/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 25.0.54, for MC 1.13.2 with MCP 20190213.203750
[26Feb2019 11:28:24.901] [modloading-worker-25/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v25.0.54 Initialized
[26Feb2019 11:28:26.077] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Starting version check at https://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
[26Feb2019 11:28:26.078] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Loading properties
[26Feb2019 11:28:26.093] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Default game type: SURVIVAL
[26Feb2019 11:28:26.093] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Generating keypair
[26Feb2019 11:28:26.234] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting Minecraft server on *:10767
[26Feb2019 11:28:26.346] [Server thread/INFO] [net.minecraft.network.NetworkSystem/]: Using epoll channel type
[26Feb2019 11:28:26.657] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: The server will make no attempt to authenticate usernames. Beware.
[26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[26Feb2019 11:28:26.658] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer/]: To change this, set "online-mode" to "true" in the server.properties file.
[26Feb2019 11:28:27.053] [Forge Version Check/INFO] [net.minecraftforge.fml.VersionChecker/]: [forge] Found status: BETA_OUTDATED Target: 25.0.58
[26Feb2019 11:28:27.097] [Thread-1/FATAL] [net.minecraftforge.common.ForgeConfig/CORE]: Forge config just got changed on the file system!
[26Feb2019 11:28:27.098] [Thread-1/FATAL] [net.minecraftforge.common.ForgeConfig/CORE]: Forge config just got changed on the file system!
[26Feb2019 11:28:27.121] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Preparing level "world"
[26Feb2019 11:28:27.186] [Server thread/ERROR] [net.minecraftforge.fml.FMLWorldPersistenceHook/WP]: This world was saved with mod minecraft which appears to be missing, things may not work well
[26Feb2019 11:28:27.212] [Server thread/INFO] [net.minecraftforge.registries.GameData/REGISTRIES]: Injecting existing registry data into this SERVER instance
[26Feb2019 11:28:27.587] [Server thread/INFO] [net.minecraft.resources.SimpleReloadableResourceManager/]: Reloading ResourceManager: Default, forge-1.13.2-25.0.54-universal.jar
[26Feb2019 11:28:28.515] [Server thread/INFO] [net.minecraft.item.crafting.RecipeManager/]: Loaded 524 recipes
[26Feb2019 11:28:29.632] [Server thread/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 571 advancements
[26Feb2019 11:28:29.984] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing start region for dimension minecraft:overworld
[26Feb2019 11:28:30.465] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 4%
[26Feb2019 11:28:31.526] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 8%
[26Feb2019 11:28:31.651] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 12%
[26Feb2019 11:28:31.795] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 16%
[26Feb2019 11:28:31.870] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 20%
[26Feb2019 11:28:31.919] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 24%
[26Feb2019 11:28:31.986] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 28%
[26Feb2019 11:28:32.053] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 32%
[26Feb2019 11:28:32.106] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 36%
[26Feb2019 11:28:32.164] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 40%
[26Feb2019 11:28:32.218] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 44%
[26Feb2019 11:28:32.303] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 48%
[26Feb2019 11:28:32.382] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 52%
[26Feb2019 11:28:32.438] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 56%
[26Feb2019 11:28:32.507] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 60%
[26Feb2019 11:28:32.555] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 64%
[26Feb2019 11:28:32.594] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 68%
[26Feb2019 11:28:32.683] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 72%
[26Feb2019 11:28:32.746] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 76%
[26Feb2019 11:28:32.800] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 80%
[26Feb2019 11:28:33.035] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 84%
[26Feb2019 11:28:33.087] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 88%
[26Feb2019 11:28:33.160] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 92%
[26Feb2019 11:28:33.233] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 96%
[26Feb2019 11:28:33.314] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing spawn area: 100%
[26Feb2019 11:28:33.314] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Time elapsed: 3328 ms
[26Feb2019 11:28:33.316] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Done (6.289s)! For help, type "help"
[26Feb2019 11:28:33.317] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting GS4 status listener
[26Feb2019 11:28:33.336] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer/]: Query running on 0.0.0.0:10767
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
                                            [text:protected] => [26Feb2019 11:28:05.160] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 25.0.54, --fml.mcpVersion, 20190213.203750, --fml.mcVersion, 1.13.2, --fml.forgeGroup, net.minecraftforge, nogui]
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [26Feb2019 11:28:05.160] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 3
                    [label:protected] => Minecraft version
                    [value:protected] => 1.13.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [26Feb2019 11:28:05.160] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.forgeVersion, 25.0.54, --fml.mcpVersion, 20190213.203750, --fml.mcVersion, 1.13.2, --fml.forgeGroup, net.minecraftforge, nogui]
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [26Feb2019 11:28:05.160] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                        )

                    [counter:protected] => 3
                    [label:protected] => Forge version
                    [value:protected] => 25.0.54
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.13.2", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 25.0.54", $analysis[1]->getMessage());

    }
}