<?php

class Fabric1171DependencyTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-1171-dependency.log");
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
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [main/INFO]: Loading Minecraft 1.17.1 with Fabric Loader 0.13.3
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [ForkJoinPool-1-worker-7/WARN]: The mod "libcd" contains invalid entries in its mod json:
                                    [number:protected] => 2
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => - Unsupported root entry "licence" at line 9 column 12
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [ForkJoinPool-1-worker-7/WARN]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [main/WARN]: Mod resolution failed
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [main/WARN]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [main/INFO]: Immediate reason: [HARD_DEP_NO_CANDIDATE bewitchment 1.17-15 {depends patchouli @ [*]}, ROOT_FORCELOAD_SINGLE bewitchment 1.17-15]
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [main/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [main/INFO]: Reason: [HARD_DEP bewitchment 1.17-15 {depends patchouli @ [*]}]
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [main/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [main/INFO]: SERVER environment disabled: [fabric-renderer-api-v1, fabric-keybindings-v0, fabric-renderer-registries-v1, fabric-textures-v0, modmenu, fabric-models-v0, fabric-screen-api-v1, fabric-rendering-v0, fabric-rendering-v1, fabric-key-binding-api-v1, fabric-renderer-indigo, fabric-blockrenderlayer-v1]
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [main/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [main/INFO]: Fix: add [add:patchouli 1 ([(-∞,∞)])], remove [], replace []
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [main/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:52:21] [main/ERROR]: Incompatible mod set!
                                    [number:protected] => 9
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.fabricmc.loader.impl.FormattedException: Mod resolution encountered an incompatible mod set!
                                    [number:protected] => 10
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => A potential solution has been determined:
                                    [number:protected] => 11
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - Install patchouli, any version.
                                    [number:protected] => 12
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Unmet dependency listing:
                                    [number:protected] => 13
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	 - Mod \'Bewitchment\' (bewitchment) 1.17-15 requires any version of patchouli, which is missing!
                                    [number:protected] => 14
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.FabricLoaderImpl.load(FabricLoaderImpl.java:190) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 15
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.Knot.init(Knot.java:142) ~[fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 16
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.Knot.launch(Knot.java:71) [fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 17
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.KnotServer.main(KnotServer.java:23) [fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 18
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                    [number:protected] => 19
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:78) ~[?:?]
                                    [number:protected] => 20
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                    [number:protected] => 21
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:567) ~[?:?]
                                    [number:protected] => 22
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.impl.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:66) [fabric-loader-0.13.3.jar:?]
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:52:21] [main/ERROR]:
                )

        )

    [iterator:protected] => 8
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [22:52:21] [main/INFO]: Loading Minecraft 1.17.1 with Fabric Loader 0.13.3
[22:52:21] [ForkJoinPool-1-worker-7/WARN]: The mod "libcd" contains invalid entries in its mod json:
- Unsupported root entry "licence" at line 9 column 12
[22:52:21] [main/WARN]: Mod resolution failed
[22:52:21] [main/INFO]: Immediate reason: [HARD_DEP_NO_CANDIDATE bewitchment 1.17-15 {depends patchouli @ [*]}, ROOT_FORCELOAD_SINGLE bewitchment 1.17-15]
[22:52:21] [main/INFO]: Reason: [HARD_DEP bewitchment 1.17-15 {depends patchouli @ [*]}]
[22:52:21] [main/INFO]: SERVER environment disabled: [fabric-renderer-api-v1, fabric-keybindings-v0, fabric-renderer-registries-v1, fabric-textures-v0, modmenu, fabric-models-v0, fabric-screen-api-v1, fabric-rendering-v0, fabric-rendering-v1, fabric-key-binding-api-v1, fabric-renderer-indigo, fabric-blockrenderlayer-v1]
[22:52:21] [main/INFO]: Fix: add [add:patchouli 1 ([(-∞,∞)])], remove [], replace []
[22:52:21] [main/ERROR]: Incompatible mod set!
net.fabricmc.loader.impl.FormattedException: Mod resolution encountered an incompatible mod set!
A potential solution has been determined:
	 - Install patchouli, any version.
Unmet dependency listing:
	 - Mod \'Bewitchment\' (bewitchment) 1.17-15 requires any version of patchouli, which is missing!
	at net.fabricmc.loader.impl.FabricLoaderImpl.load(FabricLoaderImpl.java:190) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.launch.knot.Knot.init(Knot.java:142) ~[fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.launch.knot.Knot.launch(Knot.java:71) [fabric-loader-0.13.3.jar:?]
	at net.fabricmc.loader.impl.launch.knot.KnotServer.main(KnotServer.java:23) [fabric-loader-0.13.3.jar:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:78) ~[?:?]
	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
	at java.lang.reflect.Method.invoke(Method.java:567) ~[?:?]
	at net.fabricmc.loader.impl.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:66) [fabric-loader-0.13.3.jar:?]
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:52:21] [main/INFO]: Loading Minecraft 1.17.1 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:52:21] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.17.1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:52:21] [main/INFO]: Loading Minecraft 1.17.1 with Fabric Loader 0.13.3
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:52:21] [main/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Fabric loader version
                    [value:protected] => 0.13.3
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:52:21] [main/ERROR]: Incompatible mod set!
                                            [number:protected] => 9
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.impl.FormattedException: Mod resolution encountered an incompatible mod set!
                                            [number:protected] => 10
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => A potential solution has been determined:
                                            [number:protected] => 11
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - Install patchouli, any version.
                                            [number:protected] => 12
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Unmet dependency listing:
                                            [number:protected] => 13
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	 - Mod \'Bewitchment\' (bewitchment) 1.17-15 requires any version of patchouli, which is missing!
                                            [number:protected] => 14
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.FabricLoaderImpl.load(FabricLoaderImpl.java:190) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 15
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.Knot.init(Knot.java:142) ~[fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 16
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.Knot.launch(Knot.java:71) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 17
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.knot.KnotServer.main(KnotServer.java:23) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 18
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 19
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:78) ~[?:?]
                                            [number:protected] => 20
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 21
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:567) ~[?:?]
                                            [number:protected] => 22
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.impl.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:66) [fabric-loader-0.13.3.jar:?]
                                            [number:protected] => 23
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:52:21] [main/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => patchouli
                                    [modVersion:protected] => 
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Bewitchment
                    [dependency:protected] => patchouli
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.17.1", $analysis[0]->getMessage());

        $this->assertEquals("Fabric loader version: 0.13.3", $analysis[1]->getMessage());

        $this->assertEquals("The mod 'Bewitchment' is missing the required mod 'patchouli'.", $analysis[2]->getMessage());
        $this->assertEquals("Install the mod 'patchouli'.", $analysis[2][0]->getMessage());

    }
}