<?php

class FabricMissingDependencyUnversionedTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-missing-dependency-unversioned.log");
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
                                    [text:protected] => [14:26:32] [ForkJoinPool-1-worker-3/WARN]: The mod "autoconfig1u" contains invalid entries in its mod json:
                                    [number:protected] => 1
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => - Unsupported root entry "$schema" at line 2 column 14
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:26:32] [ForkJoinPool-1-worker-3/WARN]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:26:32] [main/FATAL]: A critical error occurred
                                    [number:protected] => 3
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Could not find required mod: origins requires {fabric @ [*]}
                                    [number:protected] => 4
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:180) ~[fabric.jar:?]
                                    [number:protected] => 5
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                    [number:protected] => 6
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                    [number:protected] => 7
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                    [number:protected] => 8
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                    [number:protected] => 9
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                    [number:protected] => 10
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                    [number:protected] => 11
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:?]
                                    [number:protected] => 12
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                    [number:protected] => 13
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:566) ~[?:?]
                                    [number:protected] => 14
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                    [number:protected] => 15
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                    [number:protected] => 16
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                    [number:protected] => 17
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: net.fabricmc.loader.util.sat4j.specs.ContradictionException: Creating Empty clause ?
                                    [number:protected] => 18
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.propagationCheck(Clauses.java:117) ~[fabric.jar:?]
                                    [number:protected] => 19
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.sanityCheck(Clauses.java:97) ~[fabric.jar:?]
                                    [number:protected] => 20
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.constraints.MixedDataStructureDanielWL.createClause(MixedDataStructureDanielWL.java:81) ~[fabric.jar:?]
                                    [number:protected] => 21
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.core.Solver.addClause(Solver.java:401) ~[fabric.jar:?]
                                    [number:protected] => 22
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:177) ~[fabric.jar:?]
                                    [number:protected] => 23
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 12 more
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:26:32] [main/FATAL]:
                )

        )

    [iterator:protected] => 2
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [14:26:32] [ForkJoinPool-1-worker-3/WARN]: The mod "autoconfig1u" contains invalid entries in its mod json:
- Unsupported root entry "$schema" at line 2 column 14
[14:26:32] [main/FATAL]: A critical error occurred
net.fabricmc.loader.discovery.ModResolutionException: Could not find required mod: origins requires {fabric @ [*]}
	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:180) ~[fabric.jar:?]
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
Caused by: net.fabricmc.loader.util.sat4j.specs.ContradictionException: Creating Empty clause ?
	at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.propagationCheck(Clauses.java:117) ~[fabric.jar:?]
	at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.sanityCheck(Clauses.java:97) ~[fabric.jar:?]
	at net.fabricmc.loader.util.sat4j.minisat.constraints.MixedDataStructureDanielWL.createClause(MixedDataStructureDanielWL.java:81) ~[fabric.jar:?]
	at net.fabricmc.loader.util.sat4j.minisat.core.Solver.addClause(Solver.java:401) ~[fabric.jar:?]
	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:177) ~[fabric.jar:?]
	... 12 more
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:26:32] [main/FATAL]: A critical error occurred
                                            [number:protected] => 3
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Could not find required mod: origins requires {fabric @ [*]}
                                            [number:protected] => 4
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:180) ~[fabric.jar:?]
                                            [number:protected] => 5
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 6
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 7
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 8
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 9
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:27) [fabric.jar:?]
                                            [number:protected] => 10
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:?]
                                            [number:protected] => 11
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:?]
                                            [number:protected] => 12
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:?]
                                            [number:protected] => 13
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.reflect.Method.invoke(Method.java:566) ~[?:?]
                                            [number:protected] => 14
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 15
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 16
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 17
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: net.fabricmc.loader.util.sat4j.specs.ContradictionException: Creating Empty clause ?
                                            [number:protected] => 18
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.propagationCheck(Clauses.java:117) ~[fabric.jar:?]
                                            [number:protected] => 19
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.sanityCheck(Clauses.java:97) ~[fabric.jar:?]
                                            [number:protected] => 20
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.constraints.MixedDataStructureDanielWL.createClause(MixedDataStructureDanielWL.java:81) ~[fabric.jar:?]
                                            [number:protected] => 21
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.util.sat4j.minisat.core.Solver.addClause(Solver.java:401) ~[fabric.jar:?]
                                            [number:protected] => 22
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:177) ~[fabric.jar:?]
                                            [number:protected] => 23
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	... 12 more
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:26:32] [main/FATAL]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => FabricAPI
                                    [modVersion:protected] => 
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => origins
                    [dependency:protected] => FabricAPI
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("The mod 'origins' is missing the required mod 'FabricAPI'.", $analysis[0]->getMessage());
        $this->assertEquals("Install the mod 'FabricAPI'.", $analysis[0][0]->getMessage());

    }
}