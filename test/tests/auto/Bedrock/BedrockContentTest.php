<?php

class BedrockContentTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bedrock/bedrock-content.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\BedrockContentLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Blocks][inform]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:creative_category | {
                                    [number:protected] => 1
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    "category" : "Nature",
                                    [number:protected] => 2
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    "group" : "itemGroup.name.ore"
                                    [number:protected] => 3
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => }
                                    [number:protected] => 4
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 5
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFORM
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Blocks][inform]
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Blocks][error]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:creative_category | child \'minecraft:creative_category\' not valid here.
                                    [number:protected] => 7
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Blocks][error]
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Blocks][inform]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:on_player_destroyed | {
                                    [number:protected] => 9
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    "event" : "destroyed",
                                    [number:protected] => 10
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    "target" : "self"
                                    [number:protected] => 11
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => }
                                    [number:protected] => 12
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 13
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFORM
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Blocks][inform]
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Blocks][error]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:on_player_destroyed | child \'minecraft:on_player_destroyed\' not valid here.
                                    [number:protected] => 15
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Blocks][error]
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Blocks][inform]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | events | destroyed | run_command | {
                                    [number:protected] => 17
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    "command" : [ "summon xp_orb ~ ~ ~" ],
                                    [number:protected] => 18
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    "target" : "self"
                                    [number:protected] => 19
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => }
                                    [number:protected] => 20
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFORM
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Blocks][inform]
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Blocks][error]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_silver_ore.json | oresplus:deepslate_silver_ore | components | minecraft:creative_category | child \'minecraft:creative_category\' not valid here.
                                    [number:protected] => 22
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Blocks][error]
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Item][error]-To use item \'oresplus:pyrite_knife\' turn on the Holiday Creator Features toggle in settings
                                    [number:protected] => 24
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Item][error]
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Item][error]-To use item \'oresplus:ambar_helmet\' turn on the Holiday Creator Features toggle in settings
                                    [number:protected] => 26
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Item][error]
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:19[Json][error]-upgrade items/alexandrite_boots.json | failed to parse file into a json document: Missing a name for object member.
                                    [number:protected] => 28
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 29
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:19[Json][error]
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:20[Recipes][error]-recipes/pyrite_knife.json | oresplus:pyrite_knife | The Item: oresplus:pyrite_knife is missing, cant make the recipe
                                    [number:protected] => 31
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 32
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:20[Recipes][error]
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:20[Recipes][error]-recipes/pyrite_knife.json | oresplus:pyrite_knife | Recipe result malformed
                                    [number:protected] => 34
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 35
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:20[Recipes][error]
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:20[Recipes][error]-recipes/pyrite_knife.json | oresplus:pyrite_knife | Recipe has no result item(s)
                                    [number:protected] => 37
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 38
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:20[Recipes][error]
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Function jade_totem failed to load correctly with error(s):
                                    [number:protected] => 40
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'
                                    [number:protected] => 42
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Function wither_totem failed to load correctly with error(s):
                                    [number:protected] => 44
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'
                                    [number:protected] => 46
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Function cryo_totem failed to load correctly with error(s):
                                    [number:protected] => 48
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'
                                    [number:protected] => 50
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Function infernal_totem failed to load correctly with error(s):
                                    [number:protected] => 52
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'
                                    [number:protected] => 54
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 10:25:21[Commands][warning]-Function spinel_totem failed to load correctly with error(s):
                                    [number:protected] => 56
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => WARNING
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 10:25:21[Commands][warning]
                )

        )

    [iterator:protected] => 21
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => 10:25:19[Blocks][inform]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:creative_category | {
   "category" : "Nature",
   "group" : "itemGroup.name.ore"
}


10:25:19[Blocks][error]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:creative_category | child \'minecraft:creative_category\' not valid here.

10:25:19[Blocks][inform]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:on_player_destroyed | {
   "event" : "destroyed",
   "target" : "self"
}


10:25:19[Blocks][error]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | components | minecraft:on_player_destroyed | child \'minecraft:on_player_destroyed\' not valid here.

10:25:19[Blocks][inform]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_sapphire_ore.json | oresplus:deepslate_sapphire_ore | events | destroyed | run_command | {
   "command" : [ "summon xp_orb ~ ~ ~" ],
   "target" : "self"
}

10:25:19[Blocks][error]-block_definitions | development_behavior_packs/Ores Plus Add-On [BP] v2.1.0 | blocks/deepslate_silver_ore.json | oresplus:deepslate_silver_ore | components | minecraft:creative_category | child \'minecraft:creative_category\' not valid here.

10:25:19[Item][error]-To use item \'oresplus:pyrite_knife\' turn on the Holiday Creator Features toggle in settings

10:25:19[Item][error]-To use item \'oresplus:ambar_helmet\' turn on the Holiday Creator Features toggle in settings

10:25:19[Json][error]-upgrade items/alexandrite_boots.json | failed to parse file into a json document: Missing a name for object member.


10:25:20[Recipes][error]-recipes/pyrite_knife.json | oresplus:pyrite_knife | The Item: oresplus:pyrite_knife is missing, cant make the recipe


10:25:20[Recipes][error]-recipes/pyrite_knife.json | oresplus:pyrite_knife | Recipe result malformed


10:25:20[Recipes][error]-recipes/pyrite_knife.json | oresplus:pyrite_knife | Recipe has no result item(s)


10:25:21[Commands][warning]-Function jade_totem failed to load correctly with error(s):

10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'

10:25:21[Commands][warning]-Function wither_totem failed to load correctly with error(s):

10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'

10:25:21[Commands][warning]-Function cryo_totem failed to load correctly with error(s):

10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'

10:25:21[Commands][warning]-Function infernal_totem failed to load correctly with error(s):

10:25:21[Commands][warning]-Error on line 5: command failed to parse with error \'commands.generic.syntax\'

10:25:21[Commands][warning]-Function spinel_totem failed to load correctly with error(s):

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

    }
}