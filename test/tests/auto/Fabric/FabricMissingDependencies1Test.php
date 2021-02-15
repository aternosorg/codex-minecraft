<?php

class FabricMissingDependencies1Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-missing-dependencies-1.log");
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
                    [prefix:protected] => [16:33:50] [main/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:33:50] [main/FATAL]: A critical error occurred
                                    [number:protected] => 1
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                    [number:protected] => 2
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires any version of mod pehkui, which is missing!
                                    [number:protected] => 3
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - You must install any version of pehkui.
                                    [number:protected] => 4
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires any version of mod fabric, which is missing!
                                    [number:protected] => 5
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - You must install any version of fabric.
                                    [number:protected] => 6
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires version 0.4.6 or later of mod origins, which is missing!
                                    [number:protected] => 7
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - You must install version 0.4.6 or later of origins.
                                    [number:protected] => 8
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                    [number:protected] => 9
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                    [number:protected] => 10
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                    [number:protected] => 11
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                    [number:protected] => 12
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                    [number:protected] => 13
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                    [number:protected] => 14
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                    [number:protected] => 15
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:?]
                                    [number:protected] => 16
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                    [number:protected] => 17
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:566) ~[?:?]
                                    [number:protected] => 18
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                    [number:protected] => 19
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                    [number:protected] => 20
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 1
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [16:33:50] [main/FATAL]: A critical error occurred
net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
 - Mod \'Extra Origins\' (extraorigins) requires any version of mod pehkui, which is missing!
	 - You must install any version of pehkui.
 - Mod \'Extra Origins\' (extraorigins) requires any version of mod fabric, which is missing!
	 - You must install any version of fabric.
 - Mod \'Extra Origins\' (extraorigins) requires version 0.4.6 or later of mod origins, which is missing!
	 - You must install version 0.4.6 or later of origins.
	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:?]
	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
	at java.lang.reflect.Method.invoke(Method.java:566) ~[?:?]
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
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [dependency:protected] => pehkui
                    [modName:protected] => Extra Origins
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 
                                    [modName:protected] => pehkui
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:33:50] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:33:50] [main/FATAL]: A critical error occurred
                                            [number:protected] => 1
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                            [number:protected] => 2
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires any version of mod pehkui, which is missing!
                                            [number:protected] => 3
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of pehkui.
                                            [number:protected] => 4
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires any version of mod fabric, which is missing!
                                            [number:protected] => 5
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of fabric.
                                            [number:protected] => 6
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires version 0.4.6 or later of mod origins, which is missing!
                                            [number:protected] => 7
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install version 0.4.6 or later of origins.
                                            [number:protected] => 8
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                            [number:protected] => 9
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 10
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 11
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 12
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 13
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                            [number:protected] => 14
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 15
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:?]
                                            [number:protected] => 16
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 17
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:566) ~[?:?]
                                            [number:protected] => 18
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 19
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 20
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 21
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [dependency:protected] => origins
                    [modName:protected] => Extra Origins
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => >=0.4.6
                                    [modName:protected] => origins
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:33:50] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:33:50] [main/FATAL]: A critical error occurred
                                            [number:protected] => 1
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Errors were found!
                                            [number:protected] => 2
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires any version of mod pehkui, which is missing!
                                            [number:protected] => 3
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of pehkui.
                                            [number:protected] => 4
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires any version of mod fabric, which is missing!
                                            [number:protected] => 5
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install any version of fabric.
                                            [number:protected] => 6
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>  - Mod \'Extra Origins\' (extraorigins) requires version 0.4.6 or later of mod origins, which is missing!
                                            [number:protected] => 7
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - You must install version 0.4.6 or later of origins.
                                            [number:protected] => 8
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:322) ~[fabric.jar:?]
                                            [number:protected] => 9
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 10
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 11
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 12
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 13
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                            [number:protected] => 14
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 15
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:?]
                                            [number:protected] => 16
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 17
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:566) ~[?:?]
                                            [number:protected] => 18
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 19
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 20
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 21
                                        )

                                )

                            [level:protected] => FATAL
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

        $this->assertEquals("The mod 'Extra Origins' is missing the required mod 'pehkui'.", $analysis[0]->getMessage());
        $this->assertEquals("Install the mod 'pehkui'.", $analysis[0][0]->getMessage());

        $this->assertEquals("The mod 'Extra Origins' is missing the required mod 'origins'.", $analysis[1]->getMessage());
        $this->assertEquals("Install the mod 'origins' with version >=0.4.6.", $analysis[1][0]->getMessage());

    }
}