<?php

class FabricMissingDependencies2Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-missing-dependencies-2.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\FabricLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:22:11] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:22:11] [main/INFO]: Loading for game Minecraft 1.16.5
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:22:11] [main/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:22:11] [main/FATAL]: A critical error occurred
                                    [number:protected] => 2
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                    [number:protected] => 3
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version after 0.3.5 of mod yet-another-mod, which is missing!
                                    [number:protected] => 4
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - You must install any version after 0.3.5 of yet-another-mod.
                                    [number:protected] => 5
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version of mod fabric, which is missing!
                                    [number:protected] => 6
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - You must install any version of fabric.
                                    [number:protected] => 7
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version before 0.73 of mod other-mod, which is missing!
                                    [number:protected] => 8
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - You must install any version before 0.73 of other-mod.
                                    [number:protected] => 9
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>  - Mod \'Example Mod\' (modid) requires version 1.0.9 of mod specific, which is missing!
                                    [number:protected] => 10
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - You must install version 1.0.9 of specific.
                                    [number:protected] => 11
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                    [number:protected] => 12
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                    [number:protected] => 13
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                    [number:protected] => 14
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                    [number:protected] => 15
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                    [number:protected] => 16
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                    [number:protected] => 17
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_265]
                                    [number:protected] => 18
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_265]
                                    [number:protected] => 19
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_265]
                                    [number:protected] => 20
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_265]
                                    [number:protected] => 21
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                    [number:protected] => 22
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                    [number:protected] => 23
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 2
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [17:22:11] [main/INFO]: Loading for game Minecraft 1.16.5
[17:22:11] [main/FATAL]: A critical error occurred
net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
 - Mod \'Example Mod\' (modid) requires any version after 0.3.5 of mod yet-another-mod, which is missing!
	 - You must install any version after 0.3.5 of yet-another-mod.
 - Mod \'Example Mod\' (modid) requires any version of mod fabric, which is missing!
	 - You must install any version of fabric.
 - Mod \'Example Mod\' (modid) requires any version before 0.73 of mod other-mod, which is missing!
	 - You must install any version before 0.73 of other-mod.
 - Mod \'Example Mod\' (modid) requires version 1.0.9 of mod specific, which is missing!
	 - You must install version 1.0.9 of specific.
	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_265]
	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_265]
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_265]
	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_265]
	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.16.5
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:22:11] [main/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:22:11] [main/INFO]: Loading for game Minecraft 1.16.5
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [dependency:protected] => fabric
                    [modName:protected] => Example Mod
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 
                                    [modName:protected] => fabric
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:22:11] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:22:11] [main/FATAL]: A critical error occurred
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version after 0.3.5 of mod yet-another-mod, which is missing!
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version after 0.3.5 of yet-another-mod.
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version of mod fabric, which is missing!
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of fabric.
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version before 0.73 of mod other-mod, which is missing!
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version before 0.73 of other-mod.
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires version 1.0.9 of mod specific, which is missing!
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install version 1.0.9 of specific.
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_265]
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_265]
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_265]
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_265]
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [dependency:protected] => yet-another-mod
                    [modName:protected] => Example Mod
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => >0.3.5
                                    [modName:protected] => yet-another-mod
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:22:11] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:22:11] [main/FATAL]: A critical error occurred
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version after 0.3.5 of mod yet-another-mod, which is missing!
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version after 0.3.5 of yet-another-mod.
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version of mod fabric, which is missing!
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of fabric.
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version before 0.73 of mod other-mod, which is missing!
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version before 0.73 of other-mod.
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires version 1.0.9 of mod specific, which is missing!
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install version 1.0.9 of specific.
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_265]
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_265]
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_265]
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_265]
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [dependency:protected] => other-mod
                    [modName:protected] => Example Mod
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => <0.73
                                    [modName:protected] => other-mod
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:22:11] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:22:11] [main/FATAL]: A critical error occurred
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version after 0.3.5 of mod yet-another-mod, which is missing!
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version after 0.3.5 of yet-another-mod.
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version of mod fabric, which is missing!
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of fabric.
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version before 0.73 of mod other-mod, which is missing!
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version before 0.73 of other-mod.
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires version 1.0.9 of mod specific, which is missing!
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install version 1.0.9 of specific.
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_265]
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_265]
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_265]
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_265]
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [4] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [dependency:protected] => specific
                    [modName:protected] => Example Mod
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 1.0.9
                                    [modName:protected] => specific
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:22:11] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:22:11] [main/FATAL]: A critical error occurred
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version after 0.3.5 of mod yet-another-mod, which is missing!
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version after 0.3.5 of yet-another-mod.
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version of mod fabric, which is missing!
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of fabric.
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires any version before 0.73 of mod other-mod, which is missing!
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version before 0.73 of other-mod.
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Example Mod\' (modid) requires version 1.0.9 of mod specific, which is missing!
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install version 1.0.9 of specific.
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_265]
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_265]
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_265]
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_265]
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 4
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.16.5", $analysis[0]->getMessage());

        $this->assertEquals("The mod 'Example Mod' is missing the required mod 'fabric'.", $analysis[1]->getMessage());
        $this->assertEquals("Install the mod 'fabric'.", $analysis[1][0]->getMessage());

        $this->assertEquals("The mod 'Example Mod' is missing the required mod 'yet-another-mod'.", $analysis[2]->getMessage());
        $this->assertEquals("Install the mod 'yet-another-mod' with version >0.3.5.", $analysis[2][0]->getMessage());

        $this->assertEquals("The mod 'Example Mod' is missing the required mod 'other-mod'.", $analysis[3]->getMessage());
        $this->assertEquals("Install the mod 'other-mod' with version <0.73.", $analysis[3][0]->getMessage());

        $this->assertEquals("The mod 'Example Mod' is missing the required mod 'specific'.", $analysis[4]->getMessage());
        $this->assertEquals("Install the mod 'specific' with version 1.0.9.", $analysis[4][0]->getMessage());

    }
}