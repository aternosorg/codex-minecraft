<?php

class FabricMissingDependencies3Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/fabric/fabric-missing-dependencies-3.log");
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
                    [prefix:protected] => [19:46:38] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:46:38] [main/INFO]: Loading for game Minecraft 1.16.5
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [19:46:41] [main/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [19:46:41] [main/FATAL]: A critical error occurred
                                    [number:protected] => 2
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Could not find required mod: advanced-xray-fabric requires {minecraft @ [1.17.x]}
                                    [number:protected] => 3
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:180) ~[fabric.jar:?]
                                    [number:protected] => 4
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                    [number:protected] => 5
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                    [number:protected] => 6
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                    [number:protected] => 7
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                    [number:protected] => 8
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:28) [fabric.jar:?]
                                    [number:protected] => 9
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_222]
                                    [number:protected] => 10
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_222]
                                    [number:protected] => 11
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_222]
                                    [number:protected] => 12
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_222]
                                    [number:protected] => 13
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                    [number:protected] => 14
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                    [number:protected] => 15
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                    [number:protected] => 16
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: net.fabricmc.loader.util.sat4j.specs.ContradictionException: Creating Empty clause ?
                                    [number:protected] => 17
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.propagationCheck(Clauses.java:117) ~[fabric.jar:?]
                                    [number:protected] => 18
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.sanityCheck(Clauses.java:97) ~[fabric.jar:?]
                                    [number:protected] => 19
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.constraints.MixedDataStructureDanielWL.createClause(MixedDataStructureDanielWL.java:81) ~[fabric.jar:?]
                                    [number:protected] => 20
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.core.Solver.addClause(Solver.java:401) ~[fabric.jar:?]
                                    [number:protected] => 21
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:177) ~[fabric.jar:?]
                                    [number:protected] => 22
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 12 more
                                    [number:protected] => 23
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
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
            [content:protected] => [19:46:38] [main/INFO]: Loading for game Minecraft 1.16.5
[19:46:41] [main/FATAL]: A critical error occurred
net.fabricmc.loader.discovery.ModResolutionException: Could not find required mod: advanced-xray-fabric requires {minecraft @ [1.17.x]}
at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:180) ~[fabric.jar:?]
at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:28) [fabric.jar:?]
at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_222]
at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_222]
at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_222]
at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_222]
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
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.16.5
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [19:46:38] [main/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [19:46:38] [main/INFO]: Loading for game Minecraft 1.16.5
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
                    [dependency:protected] => minecraft
                    [modName:protected] => advanced-xray-fabric
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 1.17.x
                                    [modName:protected] => minecraft
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [19:46:41] [main/FATAL]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [19:46:41] [main/FATAL]: A critical error occurred
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.fabricmc.loader.discovery.ModResolutionException: Could not find required mod: advanced-xray-fabric requires {minecraft @ [1.17.x]}
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:180) ~[fabric.jar:?]
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.discovery.ModResolver.resolve(ModResolver.java:787) ~[fabric.jar:?]
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.FabricLoader.setup(FabricLoader.java:211) ~[fabric.jar:?]
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.FabricLoader.load(FabricLoader.java:201) [fabric.jar:?]
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.launch.knot.Knot.init(Knot.java:126) [fabric.jar:?]
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.launch.knot.KnotServer.main(KnotServer.java:28) [fabric.jar:?]
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_222]
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_222]
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_222]
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_222]
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.launch.server.FabricServerLauncher.launch(FabricServerLauncher.java:62) [fabric.jar:?]
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.launch.server.FabricServerLauncher.setup(FabricServerLauncher.java:106) [fabric.jar:?]
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.launch.server.FabricServerLauncher.main(FabricServerLauncher.java:50) [fabric.jar:?]
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: net.fabricmc.loader.util.sat4j.specs.ContradictionException: Creating Empty clause ?
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.propagationCheck(Clauses.java:117) ~[fabric.jar:?]
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.constraints.cnf.Clauses.sanityCheck(Clauses.java:97) ~[fabric.jar:?]
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.constraints.MixedDataStructureDanielWL.createClause(MixedDataStructureDanielWL.java:81) ~[fabric.jar:?]
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.util.sat4j.minisat.core.Solver.addClause(Solver.java:401) ~[fabric.jar:?]
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.fabricmc.loader.discovery.ModResolver.findCompatibleSet(ModResolver.java:177) ~[fabric.jar:?]
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 12 more
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
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

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.16.5", $analysis[0]->getMessage());

        $this->assertEquals("The mod 'advanced-xray-fabric' is missing the required mod 'minecraft'.", $analysis[1]->getMessage());
        $this->assertEquals("Install the mod 'minecraft' with version 1.17.x.", $analysis[1][0]->getMessage());

    }
}