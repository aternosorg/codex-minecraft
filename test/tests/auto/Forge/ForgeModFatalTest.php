<?php

class ForgeModFatalTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-fatal.log");
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
                                    [text:protected] => [18:59:01] [Server thread/ERROR] [FML/]: Fatal errors were detected during the transition from PREINITIALIZATION to INITIALIZATION. Loading cannot continue
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [18:59:01] [Server thread/ERROR] [FML/]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:59:01] [Server thread/ERROR] [FML/]:
                                    [number:protected] => 2
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
                                    [number:protected] => 3
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH mcp{9.05} [Minecraft Coder Pack] (minecraft.jar)
                                    [number:protected] => 4
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH FML{**.**.**.**} [Forge Mod Loader] (forge.jar)
                                    [number:protected] => 5
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH Forge{10.13.4.1614} [Minecraft Forge] (forge.jar)
                                    [number:protected] => 6
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH appliedenergistics2-core{rv3-beta-6} [Applied Energistics 2 Core] (minecraft.jar)
                                    [number:protected] => 7
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH &lt;CoFH ASM&gt;{000} [CoFH ASM] (minecraft.jar)
                                    [number:protected] => 8
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH mod_ThreadedLighting{1.7.10-1.0} [Threaded Lighting] (minecraft.jar)
                                    [number:protected] => 9
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH gilded-games-util{1.7.10-1.2} [Gilded Games Utility] (gilded-games-util-1.7.10-1.9.jar)
                                    [number:protected] => 10
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH bspkrsCore{6.15} [bspkrsCore] ([1.7.10]bspkrsCore-universal-6.15.jar)
                                    [number:protected] => 11
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH Treecapitator{1.7.10} [Treecapitator] (%5b1.7.10%5dTreecapitator-universal-2.0.4.jar)
                                    [number:protected] => 12
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH aether{1.7.10-1.6} [Aether II] (aether-1.7.10-1.6.jar)
                                    [number:protected] => 13
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH appliedenergistics2{rv3-beta-6} [Applied Energistics 2] (appliedenergistics2-rv3-beta-6.jar)
                                    [number:protected] => 14
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH Avaritia{1.11} [Avaritia] (Avaritia-1.11.jar)
                                    [number:protected] => 15
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH blockarmor{1.1} [Block Armor] (BlockArmor-1.7.10-1.1.jar)
                                    [number:protected] => 16
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH CoFHCore{1.7.10R3.1.4} [CoFH Core] (CoFHCore-%5b1.7.10%5d3.1.4-329.jar)
                                    [number:protected] => 17
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH BuildCraft|Core{7.1.23} [BuildCraft] (buildcraft-7.1.23.jar)
                                    [number:protected] => 18
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH BuildCraft|Transport{7.1.23} [BC Transport] (buildcraft-7.1.23.jar)
                                    [number:protected] => 19
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH BuildCraft|Factory{7.1.23} [BC Factory] (buildcraft-7.1.23.jar)
                                    [number:protected] => 20
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH BuildCraft|Silicon{7.1.23} [BC Silicon] (buildcraft-7.1.23.jar)
                                    [number:protected] => 21
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH BuildCraft|Robotics{7.1.23} [BC Robotics] (buildcraft-7.1.23.jar)
                                    [number:protected] => 22
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH BuildCraft|Energy{7.1.23} [BC Energy] (buildcraft-7.1.23.jar)
                                    [number:protected] => 23
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH BuildCraft|Builders{7.1.23} [BC Builders] (buildcraft-7.1.23.jar)
                                    [number:protected] => 24
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH CarpentersBlocks{**.**.**.**} [Carpenter\'s Blocks] (Carpenter%27s+Blocks+v3.3.8.1+-+MC+1.7.10.jar)
                                    [number:protected] => 25
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH PTRModelLib{1.0.0} [PTRModelLib] (Decocraft-2.4.2_1.7.10.jar)
                                    [number:protected] => 26
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH props{2.4.2} [Decocraft] (Decocraft-2.4.2_1.7.10.jar)
                                    [number:protected] => 27
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH emeraldobsidianmod{1.3.1} [Emerald &amp; Obsidian tools/armor mod] (emeraldobsidianmod-1.7.10-1.3.1.jar)
                                    [number:protected] => 28
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH fairylights{1.4.0} [Fairy Lights] (fairylights-1.4.0-1.7.10.jar)
                                    [number:protected] => 29
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH iChunUtil{4.2.2} [iChunUtil] (iChunUtil-4.2.2.jar)
                                    [number:protected] => 30
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH GraviGun{4.0.0-beta} [GraviGun] (GravityGun-4.0.0-beta.jar)
                                    [number:protected] => 31
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH ThermalFoundation{1.7.10R1.2.6} [Thermal Foundation] (ThermalFoundation-%5b1.7.10%5d1.2.6-118.jar)
                                    [number:protected] => 32
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH ImmersiveEngineering{0.7.7} [Immersive Engineering] (ImmersiveEngineering-0.7.7.jar)
                                    [number:protected] => 33
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH IronChest{**.**.**.**} [Iron Chest] (ironchest-1.7.10-6.0.62.742-universal.jar)
                                    [number:protected] => 34
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH ThermalExpansion{1.7.10R4.1.5} [Thermal Expansion] (ThermalExpansion-%5b1.7.10%5d4.1.5-248.jar)
                                    [number:protected] => 35
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH LogisticsPipes{**.**.**.**} [Logistics Pipes] (logisticspipes-0.9.3.132.jar)
                                    [number:protected] => 36
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH ForgeMultipart{**.**.**.**} [Forge Multipart] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
                                    [number:protected] => 37
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH Mekanism{9.1.1} [Mekanism] (Mekanism-1.7.10-9.1.1.1031.jar)
                                    [number:protected] => 38
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH MekanismGenerators{9.1.1} [MekanismGenerators] (MekanismGenerators-1.7.10-9.1.1.1031.jar)
                                    [number:protected] => 39
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH MekanismTools{9.1.1} [MekanismTools] (MekanismTools-1.7.10-9.1.1.1031.jar)
                                    [number:protected] => 40
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH moglowstone{1.0.2} [Mo\' Glowstone] (Mo-Glowstone-1.7.10-1.0.2.jar)
                                    [number:protected] => 41
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH MSM3{3.0.0d} [More Swords 3] (MSM-SNAP-3.0.0e-For-MC-1.7.10.jar)
                                    [number:protected] => 42
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH PortalGun{4.0.0-beta-6} [PortalGun] (PortalGun-4.0.0-beta-6-fix-1.jar)
                                    [number:protected] => 43
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCE Techguns{0.1.2_alphatest4.1} [Techguns] (Techguns.beta.1.2_alphatest4.1.jar)
                                    [number:protected] => 44
                                )

                            [43] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH ThermalDynamics{1.7.10R1.2.1} [Thermal Dynamics] (ThermalDynamics-%5b1.7.10%5d1.2.1-172.jar)
                                    [number:protected] => 45
                                )

                            [44] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH thermsingul{1.7.10-1.2} [Thermal Singularities] (ThermalSingularities-1.7.10-1.2.jar)
                                    [number:protected] => 46
                                )

                            [45] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH TwilightForest{2.3.7} [The Twilight Forest] (twilightforest-1.7.10-2.3.7.jar)
                                    [number:protected] => 47
                                )

                            [46] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH McMultipart{**.**.**.**} [Minecraft Multipart Plugin] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
                                    [number:protected] => 48
                                )

                            [47] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>     UCH ForgeMicroblock{**.**.**.**} [Forge Microblocks] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
                                    [number:protected] => 49
                                )

                            [48] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [18:59:01] [Server thread/ERROR] [FML/]:
                )

        )

    [iterator:protected] => 2
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [18:59:01] [Server thread/ERROR] [FML/]: Fatal errors were detected during the transition from PREINITIALIZATION to INITIALIZATION. Loading cannot continue
[18:59:01] [Server thread/ERROR] [FML/]:
    States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
    UCH mcp{9.05} [Minecraft Coder Pack] (minecraft.jar)
    UCH FML{**.**.**.**} [Forge Mod Loader] (forge.jar)
    UCH Forge{10.13.4.1614} [Minecraft Forge] (forge.jar)
    UCH appliedenergistics2-core{rv3-beta-6} [Applied Energistics 2 Core] (minecraft.jar)
    UCH &lt;CoFH ASM&gt;{000} [CoFH ASM] (minecraft.jar)
    UCH mod_ThreadedLighting{1.7.10-1.0} [Threaded Lighting] (minecraft.jar)
    UCH gilded-games-util{1.7.10-1.2} [Gilded Games Utility] (gilded-games-util-1.7.10-1.9.jar)
    UCH bspkrsCore{6.15} [bspkrsCore] ([1.7.10]bspkrsCore-universal-6.15.jar)
    UCH Treecapitator{1.7.10} [Treecapitator] (%5b1.7.10%5dTreecapitator-universal-2.0.4.jar)
    UCH aether{1.7.10-1.6} [Aether II] (aether-1.7.10-1.6.jar)
    UCH appliedenergistics2{rv3-beta-6} [Applied Energistics 2] (appliedenergistics2-rv3-beta-6.jar)
    UCH Avaritia{1.11} [Avaritia] (Avaritia-1.11.jar)
    UCH blockarmor{1.1} [Block Armor] (BlockArmor-1.7.10-1.1.jar)
    UCH CoFHCore{1.7.10R3.1.4} [CoFH Core] (CoFHCore-%5b1.7.10%5d3.1.4-329.jar)
    UCH BuildCraft|Core{7.1.23} [BuildCraft] (buildcraft-7.1.23.jar)
    UCH BuildCraft|Transport{7.1.23} [BC Transport] (buildcraft-7.1.23.jar)
    UCH BuildCraft|Factory{7.1.23} [BC Factory] (buildcraft-7.1.23.jar)
    UCH BuildCraft|Silicon{7.1.23} [BC Silicon] (buildcraft-7.1.23.jar)
    UCH BuildCraft|Robotics{7.1.23} [BC Robotics] (buildcraft-7.1.23.jar)
    UCH BuildCraft|Energy{7.1.23} [BC Energy] (buildcraft-7.1.23.jar)
    UCH BuildCraft|Builders{7.1.23} [BC Builders] (buildcraft-7.1.23.jar)
    UCH CarpentersBlocks{**.**.**.**} [Carpenter\'s Blocks] (Carpenter%27s+Blocks+v3.3.8.1+-+MC+1.7.10.jar)
    UCH PTRModelLib{1.0.0} [PTRModelLib] (Decocraft-2.4.2_1.7.10.jar)
    UCH props{2.4.2} [Decocraft] (Decocraft-2.4.2_1.7.10.jar)
    UCH emeraldobsidianmod{1.3.1} [Emerald &amp; Obsidian tools/armor mod] (emeraldobsidianmod-1.7.10-1.3.1.jar)
    UCH fairylights{1.4.0} [Fairy Lights] (fairylights-1.4.0-1.7.10.jar)
    UCH iChunUtil{4.2.2} [iChunUtil] (iChunUtil-4.2.2.jar)
    UCH GraviGun{4.0.0-beta} [GraviGun] (GravityGun-4.0.0-beta.jar)
    UCH ThermalFoundation{1.7.10R1.2.6} [Thermal Foundation] (ThermalFoundation-%5b1.7.10%5d1.2.6-118.jar)
    UCH ImmersiveEngineering{0.7.7} [Immersive Engineering] (ImmersiveEngineering-0.7.7.jar)
    UCH IronChest{**.**.**.**} [Iron Chest] (ironchest-1.7.10-6.0.62.742-universal.jar)
    UCH ThermalExpansion{1.7.10R4.1.5} [Thermal Expansion] (ThermalExpansion-%5b1.7.10%5d4.1.5-248.jar)
    UCH LogisticsPipes{**.**.**.**} [Logistics Pipes] (logisticspipes-0.9.3.132.jar)
    UCH ForgeMultipart{**.**.**.**} [Forge Multipart] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
    UCH Mekanism{9.1.1} [Mekanism] (Mekanism-1.7.10-9.1.1.1031.jar)
    UCH MekanismGenerators{9.1.1} [MekanismGenerators] (MekanismGenerators-1.7.10-9.1.1.1031.jar)
    UCH MekanismTools{9.1.1} [MekanismTools] (MekanismTools-1.7.10-9.1.1.1031.jar)
    UCH moglowstone{1.0.2} [Mo\' Glowstone] (Mo-Glowstone-1.7.10-1.0.2.jar)
    UCH MSM3{3.0.0d} [More Swords 3] (MSM-SNAP-3.0.0e-For-MC-1.7.10.jar)
    UCH PortalGun{4.0.0-beta-6} [PortalGun] (PortalGun-4.0.0-beta-6-fix-1.jar)
    UCE Techguns{0.1.2_alphatest4.1} [Techguns] (Techguns.beta.1.2_alphatest4.1.jar)
    UCH ThermalDynamics{1.7.10R1.2.1} [Thermal Dynamics] (ThermalDynamics-%5b1.7.10%5d1.2.1-172.jar)
    UCH thermsingul{1.7.10-1.2} [Thermal Singularities] (ThermalSingularities-1.7.10-1.2.jar)
    UCH TwilightForest{2.3.7} [The Twilight Forest] (twilightforest-1.7.10-2.3.7.jar)
    UCH McMultipart{**.**.**.**} [Minecraft Multipart Plugin] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
    UCH ForgeMicroblock{**.**.**.**} [Forge Microblocks] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModFatalProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [18:59:01] [Server thread/ERROR] [FML/]:
                                            [number:protected] => 2
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
                                            [number:protected] => 3
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH mcp{9.05} [Minecraft Coder Pack] (minecraft.jar)
                                            [number:protected] => 4
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH FML{**.**.**.**} [Forge Mod Loader] (forge.jar)
                                            [number:protected] => 5
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH Forge{10.13.4.1614} [Minecraft Forge] (forge.jar)
                                            [number:protected] => 6
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH appliedenergistics2-core{rv3-beta-6} [Applied Energistics 2 Core] (minecraft.jar)
                                            [number:protected] => 7
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH &lt;CoFH ASM&gt;{000} [CoFH ASM] (minecraft.jar)
                                            [number:protected] => 8
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH mod_ThreadedLighting{1.7.10-1.0} [Threaded Lighting] (minecraft.jar)
                                            [number:protected] => 9
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH gilded-games-util{1.7.10-1.2} [Gilded Games Utility] (gilded-games-util-1.7.10-1.9.jar)
                                            [number:protected] => 10
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH bspkrsCore{6.15} [bspkrsCore] ([1.7.10]bspkrsCore-universal-6.15.jar)
                                            [number:protected] => 11
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH Treecapitator{1.7.10} [Treecapitator] (%5b1.7.10%5dTreecapitator-universal-2.0.4.jar)
                                            [number:protected] => 12
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH aether{1.7.10-1.6} [Aether II] (aether-1.7.10-1.6.jar)
                                            [number:protected] => 13
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH appliedenergistics2{rv3-beta-6} [Applied Energistics 2] (appliedenergistics2-rv3-beta-6.jar)
                                            [number:protected] => 14
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH Avaritia{1.11} [Avaritia] (Avaritia-1.11.jar)
                                            [number:protected] => 15
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH blockarmor{1.1} [Block Armor] (BlockArmor-1.7.10-1.1.jar)
                                            [number:protected] => 16
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH CoFHCore{1.7.10R3.1.4} [CoFH Core] (CoFHCore-%5b1.7.10%5d3.1.4-329.jar)
                                            [number:protected] => 17
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH BuildCraft|Core{7.1.23} [BuildCraft] (buildcraft-7.1.23.jar)
                                            [number:protected] => 18
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH BuildCraft|Transport{7.1.23} [BC Transport] (buildcraft-7.1.23.jar)
                                            [number:protected] => 19
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH BuildCraft|Factory{7.1.23} [BC Factory] (buildcraft-7.1.23.jar)
                                            [number:protected] => 20
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH BuildCraft|Silicon{7.1.23} [BC Silicon] (buildcraft-7.1.23.jar)
                                            [number:protected] => 21
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH BuildCraft|Robotics{7.1.23} [BC Robotics] (buildcraft-7.1.23.jar)
                                            [number:protected] => 22
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH BuildCraft|Energy{7.1.23} [BC Energy] (buildcraft-7.1.23.jar)
                                            [number:protected] => 23
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH BuildCraft|Builders{7.1.23} [BC Builders] (buildcraft-7.1.23.jar)
                                            [number:protected] => 24
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH CarpentersBlocks{**.**.**.**} [Carpenter\'s Blocks] (Carpenter%27s+Blocks+v3.3.8.1+-+MC+1.7.10.jar)
                                            [number:protected] => 25
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH PTRModelLib{1.0.0} [PTRModelLib] (Decocraft-2.4.2_1.7.10.jar)
                                            [number:protected] => 26
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH props{2.4.2} [Decocraft] (Decocraft-2.4.2_1.7.10.jar)
                                            [number:protected] => 27
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH emeraldobsidianmod{1.3.1} [Emerald &amp; Obsidian tools/armor mod] (emeraldobsidianmod-1.7.10-1.3.1.jar)
                                            [number:protected] => 28
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH fairylights{1.4.0} [Fairy Lights] (fairylights-1.4.0-1.7.10.jar)
                                            [number:protected] => 29
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH iChunUtil{4.2.2} [iChunUtil] (iChunUtil-4.2.2.jar)
                                            [number:protected] => 30
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH GraviGun{4.0.0-beta} [GraviGun] (GravityGun-4.0.0-beta.jar)
                                            [number:protected] => 31
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH ThermalFoundation{1.7.10R1.2.6} [Thermal Foundation] (ThermalFoundation-%5b1.7.10%5d1.2.6-118.jar)
                                            [number:protected] => 32
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH ImmersiveEngineering{0.7.7} [Immersive Engineering] (ImmersiveEngineering-0.7.7.jar)
                                            [number:protected] => 33
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH IronChest{**.**.**.**} [Iron Chest] (ironchest-1.7.10-6.0.62.742-universal.jar)
                                            [number:protected] => 34
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH ThermalExpansion{1.7.10R4.1.5} [Thermal Expansion] (ThermalExpansion-%5b1.7.10%5d4.1.5-248.jar)
                                            [number:protected] => 35
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH LogisticsPipes{**.**.**.**} [Logistics Pipes] (logisticspipes-0.9.3.132.jar)
                                            [number:protected] => 36
                                        )

                                    [35] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH ForgeMultipart{**.**.**.**} [Forge Multipart] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
                                            [number:protected] => 37
                                        )

                                    [36] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH Mekanism{9.1.1} [Mekanism] (Mekanism-1.7.10-9.1.1.1031.jar)
                                            [number:protected] => 38
                                        )

                                    [37] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH MekanismGenerators{9.1.1} [MekanismGenerators] (MekanismGenerators-1.7.10-9.1.1.1031.jar)
                                            [number:protected] => 39
                                        )

                                    [38] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH MekanismTools{9.1.1} [MekanismTools] (MekanismTools-1.7.10-9.1.1.1031.jar)
                                            [number:protected] => 40
                                        )

                                    [39] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH moglowstone{1.0.2} [Mo\' Glowstone] (Mo-Glowstone-1.7.10-1.0.2.jar)
                                            [number:protected] => 41
                                        )

                                    [40] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH MSM3{3.0.0d} [More Swords 3] (MSM-SNAP-3.0.0e-For-MC-1.7.10.jar)
                                            [number:protected] => 42
                                        )

                                    [41] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH PortalGun{4.0.0-beta-6} [PortalGun] (PortalGun-4.0.0-beta-6-fix-1.jar)
                                            [number:protected] => 43
                                        )

                                    [42] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCE Techguns{0.1.2_alphatest4.1} [Techguns] (Techguns.beta.1.2_alphatest4.1.jar)
                                            [number:protected] => 44
                                        )

                                    [43] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH ThermalDynamics{1.7.10R1.2.1} [Thermal Dynamics] (ThermalDynamics-%5b1.7.10%5d1.2.1-172.jar)
                                            [number:protected] => 45
                                        )

                                    [44] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH thermsingul{1.7.10-1.2} [Thermal Singularities] (ThermalSingularities-1.7.10-1.2.jar)
                                            [number:protected] => 46
                                        )

                                    [45] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH TwilightForest{2.3.7} [The Twilight Forest] (twilightforest-1.7.10-2.3.7.jar)
                                            [number:protected] => 47
                                        )

                                    [46] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH McMultipart{**.**.**.**} [Minecraft Multipart Plugin] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
                                            [number:protected] => 48
                                        )

                                    [47] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] =>     UCH ForgeMicroblock{**.**.**.**} [Forge Microblocks] (ForgeMultipart-1.7.10-1.1.2.331-universal.jar)
                                            [number:protected] => 49
                                        )

                                    [48] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 
                                            [number:protected] => 50
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [18:59:01] [Server thread/ERROR] [FML/]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => mods/Techguns.beta.1.2_alphatest4.1.jar
                                    [relativePath:protected] => 1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution Object
                                (
                                    [modName:protected] => Techguns
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Techguns
                    [modFileName:protected] => Techguns.beta.1.2_alphatest4.1.jar
                    [modVersion:protected] => 0.1.2_alphatest4.1
                    [modId:protected] => Techguns
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("The mod 'Techguns' has a fatal error.", $analysis[0]->getMessage());
        $this->assertEquals("Delete the file 'mods/Techguns.beta.1.2_alphatest4.1.jar'.", $analysis[0][0]->getMessage());
        $this->assertEquals("Install a different version of the mod 'Techguns'.", $analysis[0][1]->getMessage());

    }
}