<?php

class PaperStart188Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/paper-start-1-8-8.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PaperLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: This server is running CraftBukkit version git-PaperSpigot-"4c7641d" (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Unable to find file banned-players.json, creating it.
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Unable to find file banned-ips.json, creating it.
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Unable to find file ops.json, creating it.
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Unable to find file whitelist.json, creating it.
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Spigot Timings: true - Verbose: true - Interval: 5m - Length: 60m
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Data value allowed items: 
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Starting Minecraft server on *:26185
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:53] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:53] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: -------- World Settings For [world] --------
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Anti X-Ray: true
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: 	Engine Mode: 1
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: 	Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: 	Replace Blocks: [1, 5]
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 8 Hopper Amount: 1
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Sending up to 10 chunks per packet
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Max Entity Collisions: 8
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: View Distance: 8
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Chunks to Grow per Tick: 650
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Clear tick list: false
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: -------- World Settings For [world] --------
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Living Entity Despawn Ranges:  Soft: 32 Hard: 128
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Player blocking damage multiplier set to 0.5
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Remove invalid mob spawner tile entities: true
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Squids will spawn between Y: 45.0 and Y: 63.0
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Max height for cactus growth 3. Max height for reed growth 3
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Water over lava flow speed: 5
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Fix TNT cannons: false
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Allow undead horse types to be leashed: false
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: Keep spawn chunk loaded: true
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: World async lighting: false
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: WorldServer TickNextTick cap set at 10000
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:54] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:54] [Server thread/INFO]: WorldServer TickNextTickList cap always processes redstone: false
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: -------- World Settings For [world_nether] --------
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Anti X-Ray: true
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: 	Engine Mode: 1
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: 	Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: 	Replace Blocks: [1, 5]
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 8 Hopper Amount: 1
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Sending up to 10 chunks per packet
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Max Entity Collisions: 8
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: View Distance: 8
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Clear tick list: false
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: -------- World Settings For [world_nether] --------
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Living Entity Despawn Ranges:  Soft: 32 Hard: 128
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Player blocking damage multiplier set to 0.5
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Remove invalid mob spawner tile entities: true
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Squids will spawn between Y: 45.0 and Y: 63.0
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Max height for cactus growth 3. Max height for reed growth 3
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Water over lava flow speed: 5
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Fix TNT cannons: false
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Allow undead horse types to be leashed: false
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Keep spawn chunk loaded: true
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: World async lighting: false
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: WorldServer TickNextTick cap set at 10000
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: WorldServer TickNextTickList cap always processes redstone: false
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Anti X-Ray: true
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: 	Engine Mode: 1
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: 	Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: 	Replace Blocks: [1, 5]
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Mob Spawn Range: 4
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 8 Hopper Amount: 1
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Sending up to 10 chunks per packet
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Max Entity Collisions: 8
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: View Distance: 8
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Clear tick list: false
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Living Entity Despawn Ranges:  Soft: 32 Hard: 128
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Player blocking damage multiplier set to 0.5
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Remove invalid mob spawner tile entities: true
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Squids will spawn between Y: 45.0 and Y: 63.0
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Max height for cactus growth 3. Max height for reed growth 3
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Water over lava flow speed: 5
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Fix TNT cannons: false
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Allow undead horse types to be leashed: false
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Keep spawn chunk loaded: true
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: World async lighting: false
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: WorldServer TickNextTick cap set at 10000
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: WorldServer TickNextTickList cap always processes redstone: false
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:55] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:55] [Server thread/INFO]: Preparing start region for level 0 (Seed: -4337249689357965493)
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:56] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:56] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:57] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:57] [Server thread/INFO]: Preparing spawn area: 7%
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:58] [Server thread/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:34:59] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:34:59] [Server thread/INFO]: Preparing spawn area: 15%
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:00] [Server thread/INFO]: Preparing spawn area: 19%
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:01] [Server thread/INFO]: Preparing spawn area: 22%
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:02] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:02] [Server thread/INFO]: Preparing spawn area: 26%
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:03] [Server thread/INFO]: Preparing spawn area: 31%
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:04] [Server thread/INFO]: Preparing spawn area: 38%
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:05] [Server thread/INFO]: Preparing spawn area: 46%
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:06] [Server thread/INFO]: Preparing spawn area: 53%
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:07] [Server thread/INFO]: Preparing spawn area: 62%
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:08] [Server thread/INFO]: Preparing spawn area: 70%
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:09] [Server thread/INFO]: Preparing spawn area: 77%
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:10] [Server thread/INFO]: Preparing spawn area: 85%
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:11] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:12] [Server thread/INFO]: Preparing start region for level 1 (Seed: -4337249689357965493)
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:13] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:13] [Server thread/INFO]: Preparing spawn area: 10%
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:14] [Server thread/INFO]: Preparing spawn area: 17%
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:15] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:16] [Server thread/INFO]: Preparing spawn area: 31%
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:17] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:17] [Server thread/INFO]: Preparing spawn area: 45%
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:18] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:18] [Server thread/INFO]: Preparing spawn area: 63%
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:19] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:19] [Server thread/INFO]: Preparing spawn area: 79%
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:20] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:20] [Server thread/INFO]: Preparing spawn area: 91%
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:21] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:21] [Server thread/INFO]: Preparing start region for level 2 (Seed: -4337249689357965493)
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:22] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:22] [Server thread/INFO]: Preparing spawn area: 29%
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:23] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:23] [Server thread/INFO]: Preparing spawn area: 53%
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:24] [Server thread/INFO]: Preparing spawn area: 86%
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:24] [Server thread/INFO]: Done (30.812s)! For help, type "help" or "?"
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:24] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:24] [Query Listener #1/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:24] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:35:24] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:35:24] [Server thread/INFO]: Timings Reset
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:36:50] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:36:50] [Server thread/INFO]: Stopping the server
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:36:50] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:36:50] [Server thread/INFO]: Stopping server
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:36:50] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:36:50] [Server thread/INFO]: Saving players
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:36:50] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:36:50] [Server thread/INFO]: Saving worlds
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:36:50] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:36:50] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:36:51] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:36:51] [Server thread/INFO]: Saving chunks for level \'world_nether\'/Nether
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:36:51] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:36:51] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/The End
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 200
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [18:34:53] [Server thread/INFO]: Starting minecraft server version 1.8.8
[18:34:53] [Server thread/INFO]: Loading properties
[18:34:53] [Server thread/INFO]: Default game type: SURVIVAL
[18:34:53] [Server thread/INFO]: This server is running CraftBukkit version git-PaperSpigot-"4c7641d" (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
[18:34:53] [Server thread/INFO]: Unable to find file banned-players.json, creating it.
[18:34:53] [Server thread/INFO]: Unable to find file banned-ips.json, creating it.
[18:34:53] [Server thread/INFO]: Unable to find file ops.json, creating it.
[18:34:53] [Server thread/INFO]: Unable to find file whitelist.json, creating it.
[18:34:53] [Server thread/INFO]: Spigot Timings: true - Verbose: true - Interval: 5m - Length: 60m
[18:34:53] [Server thread/INFO]: Server Ping Player Sample Count: 12
[18:34:53] [Server thread/INFO]: Using 4 threads for Netty based IO
[18:34:53] [Server thread/INFO]: Debug logging is disabled
[18:34:53] [Server thread/INFO]: Data value allowed items: 
[18:34:53] [Server thread/INFO]: Generating keypair
[18:34:53] [Server thread/INFO]: Starting Minecraft server on *:26185
[18:34:53] [Server thread/INFO]: Using epoll channel type
[18:34:54] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
[18:34:54] [Server thread/INFO]: Preparing level "world"
[18:34:54] [Server thread/INFO]: -------- World Settings For [world] --------
[18:34:54] [Server thread/INFO]: Anti X-Ray: true
[18:34:54] [Server thread/INFO]: 	Engine Mode: 1
[18:34:54] [Server thread/INFO]: 	Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
[18:34:54] [Server thread/INFO]: 	Replace Blocks: [1, 5]
[18:34:54] [Server thread/INFO]: Mob Spawn Range: 4
[18:34:54] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[18:34:54] [Server thread/INFO]: Cactus Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: Cane Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: Melon Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: Sapling Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: Wheat Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[18:34:54] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[18:34:54] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[18:34:54] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 8 Hopper Amount: 1
[18:34:54] [Server thread/INFO]: Random Lighting Updates: false
[18:34:54] [Server thread/INFO]: Structure Info Saving: true
[18:34:54] [Server thread/INFO]: Sending up to 10 chunks per packet
[18:34:54] [Server thread/INFO]: Max Entity Collisions: 8
[18:34:54] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617
[18:34:54] [Server thread/INFO]: Max TNT Explosions: 100
[18:34:54] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[18:34:54] [Server thread/INFO]: Item Merge Radius: 2.5
[18:34:54] [Server thread/INFO]: Item Despawn Rate: 6000
[18:34:54] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[18:34:54] [Server thread/INFO]: Arrow Despawn Rate: 1200
[18:34:54] [Server thread/INFO]: View Distance: 8
[18:34:54] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[18:34:54] [Server thread/INFO]: Chunks to Grow per Tick: 650
[18:34:54] [Server thread/INFO]: Clear tick list: false
[18:34:54] [Server thread/INFO]: Experience Merge Radius: 3.0
[18:34:54] [Server thread/INFO]: -------- World Settings For [world] --------
[18:34:54] [Server thread/INFO]: Living Entity Despawn Ranges:  Soft: 32 Hard: 128
[18:34:54] [Server thread/INFO]: Player blocking damage multiplier set to 0.5
[18:34:54] [Server thread/INFO]: Remove invalid mob spawner tile entities: true
[18:34:54] [Server thread/INFO]: Squids will spawn between Y: 45.0 and Y: 63.0
[18:34:54] [Server thread/INFO]: Max height for cactus growth 3. Max height for reed growth 3
[18:34:54] [Server thread/INFO]: Water over lava flow speed: 5
[18:34:54] [Server thread/INFO]: Fix TNT cannons: false
[18:34:54] [Server thread/INFO]: Allow undead horse types to be leashed: false
[18:34:54] [Server thread/INFO]: Keep spawn chunk loaded: true
[18:34:54] [Server thread/INFO]: World async lighting: false
[18:34:54] [Server thread/INFO]: WorldServer TickNextTick cap set at 10000
[18:34:54] [Server thread/INFO]: WorldServer TickNextTickList cap always processes redstone: false
[18:34:55] [Server thread/INFO]: -------- World Settings For [world_nether] --------
[18:34:55] [Server thread/INFO]: Anti X-Ray: true
[18:34:55] [Server thread/INFO]: 	Engine Mode: 1
[18:34:55] [Server thread/INFO]: 	Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
[18:34:55] [Server thread/INFO]: 	Replace Blocks: [1, 5]
[18:34:55] [Server thread/INFO]: Mob Spawn Range: 4
[18:34:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[18:34:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Cane Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Melon Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[18:34:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[18:34:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 8 Hopper Amount: 1
[18:34:55] [Server thread/INFO]: Random Lighting Updates: false
[18:34:55] [Server thread/INFO]: Structure Info Saving: true
[18:34:55] [Server thread/INFO]: Sending up to 10 chunks per packet
[18:34:55] [Server thread/INFO]: Max Entity Collisions: 8
[18:34:55] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617
[18:34:55] [Server thread/INFO]: Max TNT Explosions: 100
[18:34:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[18:34:55] [Server thread/INFO]: Item Merge Radius: 2.5
[18:34:55] [Server thread/INFO]: Item Despawn Rate: 6000
[18:34:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[18:34:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
[18:34:55] [Server thread/INFO]: View Distance: 8
[18:34:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[18:34:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
[18:34:55] [Server thread/INFO]: Clear tick list: false
[18:34:55] [Server thread/INFO]: Experience Merge Radius: 3.0
[18:34:55] [Server thread/INFO]: -------- World Settings For [world_nether] --------
[18:34:55] [Server thread/INFO]: Living Entity Despawn Ranges:  Soft: 32 Hard: 128
[18:34:55] [Server thread/INFO]: Player blocking damage multiplier set to 0.5
[18:34:55] [Server thread/INFO]: Remove invalid mob spawner tile entities: true
[18:34:55] [Server thread/INFO]: Squids will spawn between Y: 45.0 and Y: 63.0
[18:34:55] [Server thread/INFO]: Max height for cactus growth 3. Max height for reed growth 3
[18:34:55] [Server thread/INFO]: Water over lava flow speed: 5
[18:34:55] [Server thread/INFO]: Fix TNT cannons: false
[18:34:55] [Server thread/INFO]: Allow undead horse types to be leashed: false
[18:34:55] [Server thread/INFO]: Keep spawn chunk loaded: true
[18:34:55] [Server thread/INFO]: World async lighting: false
[18:34:55] [Server thread/INFO]: WorldServer TickNextTick cap set at 10000
[18:34:55] [Server thread/INFO]: WorldServer TickNextTickList cap always processes redstone: false
[18:34:55] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
[18:34:55] [Server thread/INFO]: Anti X-Ray: true
[18:34:55] [Server thread/INFO]: 	Engine Mode: 1
[18:34:55] [Server thread/INFO]: 	Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
[18:34:55] [Server thread/INFO]: 	Replace Blocks: [1, 5]
[18:34:55] [Server thread/INFO]: Mob Spawn Range: 4
[18:34:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[18:34:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Cane Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Melon Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[18:34:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[18:34:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[18:34:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 8 Hopper Amount: 1
[18:34:55] [Server thread/INFO]: Random Lighting Updates: false
[18:34:55] [Server thread/INFO]: Structure Info Saving: true
[18:34:55] [Server thread/INFO]: Sending up to 10 chunks per packet
[18:34:55] [Server thread/INFO]: Max Entity Collisions: 8
[18:34:55] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Feature: 14357617
[18:34:55] [Server thread/INFO]: Max TNT Explosions: 100
[18:34:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[18:34:55] [Server thread/INFO]: Item Merge Radius: 2.5
[18:34:55] [Server thread/INFO]: Item Despawn Rate: 6000
[18:34:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[18:34:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
[18:34:55] [Server thread/INFO]: View Distance: 8
[18:34:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[18:34:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
[18:34:55] [Server thread/INFO]: Clear tick list: false
[18:34:55] [Server thread/INFO]: Experience Merge Radius: 3.0
[18:34:55] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
[18:34:55] [Server thread/INFO]: Living Entity Despawn Ranges:  Soft: 32 Hard: 128
[18:34:55] [Server thread/INFO]: Player blocking damage multiplier set to 0.5
[18:34:55] [Server thread/INFO]: Remove invalid mob spawner tile entities: true
[18:34:55] [Server thread/INFO]: Squids will spawn between Y: 45.0 and Y: 63.0
[18:34:55] [Server thread/INFO]: Max height for cactus growth 3. Max height for reed growth 3
[18:34:55] [Server thread/INFO]: Water over lava flow speed: 5
[18:34:55] [Server thread/INFO]: Fix TNT cannons: false
[18:34:55] [Server thread/INFO]: Allow undead horse types to be leashed: false
[18:34:55] [Server thread/INFO]: Keep spawn chunk loaded: true
[18:34:55] [Server thread/INFO]: World async lighting: false
[18:34:55] [Server thread/INFO]: WorldServer TickNextTick cap set at 10000
[18:34:55] [Server thread/INFO]: WorldServer TickNextTickList cap always processes redstone: false
[18:34:55] [Server thread/INFO]: Preparing start region for level 0 (Seed: -4337249689357965493)
[18:34:56] [Server thread/INFO]: Preparing spawn area: 4%
[18:34:57] [Server thread/INFO]: Preparing spawn area: 7%
[18:34:58] [Server thread/INFO]: Preparing spawn area: 10%
[18:34:59] [Server thread/INFO]: Preparing spawn area: 15%
[18:35:00] [Server thread/INFO]: Preparing spawn area: 19%
[18:35:01] [Server thread/INFO]: Preparing spawn area: 22%
[18:35:02] [Server thread/INFO]: Preparing spawn area: 26%
[18:35:03] [Server thread/INFO]: Preparing spawn area: 31%
[18:35:04] [Server thread/INFO]: Preparing spawn area: 38%
[18:35:05] [Server thread/INFO]: Preparing spawn area: 46%
[18:35:06] [Server thread/INFO]: Preparing spawn area: 53%
[18:35:07] [Server thread/INFO]: Preparing spawn area: 62%
[18:35:08] [Server thread/INFO]: Preparing spawn area: 70%
[18:35:09] [Server thread/INFO]: Preparing spawn area: 77%
[18:35:10] [Server thread/INFO]: Preparing spawn area: 85%
[18:35:11] [Server thread/INFO]: Preparing spawn area: 92%
[18:35:12] [Server thread/INFO]: Preparing start region for level 1 (Seed: -4337249689357965493)
[18:35:13] [Server thread/INFO]: Preparing spawn area: 10%
[18:35:14] [Server thread/INFO]: Preparing spawn area: 17%
[18:35:15] [Server thread/INFO]: Preparing spawn area: 24%
[18:35:16] [Server thread/INFO]: Preparing spawn area: 31%
[18:35:17] [Server thread/INFO]: Preparing spawn area: 45%
[18:35:18] [Server thread/INFO]: Preparing spawn area: 63%
[18:35:19] [Server thread/INFO]: Preparing spawn area: 79%
[18:35:20] [Server thread/INFO]: Preparing spawn area: 91%
[18:35:21] [Server thread/INFO]: Preparing start region for level 2 (Seed: -4337249689357965493)
[18:35:22] [Server thread/INFO]: Preparing spawn area: 29%
[18:35:23] [Server thread/INFO]: Preparing spawn area: 53%
[18:35:24] [Server thread/INFO]: Preparing spawn area: 86%
[18:35:24] [Server thread/INFO]: Done (30.812s)! For help, type "help" or "?"
[18:35:24] [Server thread/INFO]: Starting GS4 status listener
[18:35:24] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
[18:35:24] [Server thread/INFO]: Timings Reset
[18:36:50] [Server thread/INFO]: Stopping the server
[18:36:50] [Server thread/INFO]: Stopping server
[18:36:50] [Server thread/INFO]: Saving players
[18:36:50] [Server thread/INFO]: Saving worlds
[18:36:50] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
[18:36:51] [Server thread/INFO]: Saving chunks for level \'world_nether\'/Nether
[18:36:51] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/The End
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
                    [value:protected] => 1.8.8
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [18:34:53] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [18:34:53] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.8.8", $analysis[0]->getMessage());

    }
}