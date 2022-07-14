<?php

class ForgeTickingEntity1182Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/crash-reports/forge-ticking-entity-1-18-2.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\CrashReport\ForgeCrashReportLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ---- Minecraft Crash Report ----
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => // Why did you do that?
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => COMMENT
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Time: 6/14/22, 4:49 AM
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Time:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Description: Ticking entity
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Description:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.BootstrapMethodError: java.lang.RuntimeException: Attempted to load class net/mcreator/villageemployment/client/particle/OrbOfDominanceSmokeParticle for invalid dist DEDICATED_SERVER
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.mcreator.villageemployment.init.VillageEmploymentModParticles.<clinit>(VillageEmploymentModParticles.java:28) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.mcreator.villageemployment.procedures.IllagerMinionOnEntityTickUpdateProcedure.execute(IllagerMinionOnEntityTickUpdateProcedure.java:11) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.mcreator.villageemployment.entity.IllagerMinionEntity.m_6075_(IllagerMinionEntity.java:177) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.entity.Entity.m_8119_(Entity.java:413) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:backpacked.mixins.json:common.EntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.EntityMixin,pl:mixin:APP:blueprint.mixins.json:EntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorEntity,pl:mixin:APP:earthmobsmod.mixins.json:EntityMixin,pl:mixin:APP:netherportalfix.mixins.json:EntityAccessor,pl:mixin:APP:quark.mixins.json:EntityMixin,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.EntityMixin,pl:mixin:APP:radium.mixins.json:alloc.deep_passengers.EntityMixin,pl:mixin:APP:radium.mixins.json:block.hopper.EntityAccessor,pl:mixin:APP:radium.mixins.json:entity.collisions.fluid.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.movement.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.suffocation.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_fire_check.EntityMixin,pl:mixin:APP:structure_gel.mixins.json:EntityMixin,pl:mixin:APP:supplementaries.mixins.json:EntityMixin,pl:mixin:A}
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.entity.LivingEntity.m_8119_(LivingEntity.java:2215) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin_Lootblock,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:totem.LivingEntityMixin,pl:mixin:APP:blue_skies.mixins.json:LivingEntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorLivingEntity,pl:mixin:APP:caelus.mixins.json:MixinLivingEntity,pl:mixin:APP:citadel.mixins.json:LivingEntityMixin,pl:mixin:APP:clienttweaks.mixins.json:LivingEntityAccessor,pl:mixin:APP:curioofundying.mixins.json:LivingEntityMixin,pl:mixin:APP:curios.mixins.json:MixinLivingEntity,pl:mixin:APP:earthmobsmod.mixins.json:LivingEntityMixin,pl:mixin:APP:ecologics.mixins.json:MixinLivingEntity,pl:mixin:APP:enhancedcelestials.mixins.json:MixinLivingEntity,pl:mixin:APP:netherportalfix.mixins.json:LivingEntityAccessor,pl:mixin:APP:quark.mixins.json:LivingEntityAccessor,pl:mixin:APP:radium.mixins.json:alloc.enum_values.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_elytra_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_hand_swing.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_powder_snow_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.LivingEntityMixin,pl:mixin:APP:snowyspirit.mixins.json:EntityMixin,pl:mixin:APP:spirit.mixins.json:LivingEntityMixin,pl:mixin:APP:supplementaries.mixins.json:LivingEntityMixin,pl:mixin:A}
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.entity.Mob.m_8119_(Mob.java:307) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:MobMixin,pl:mixin:APP:biomemakeover-common.mixins.json:MobAccess,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorMob,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.MobEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.MobEntityMixin,pl:mixin:A}
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_8647_(ServerLevel.java:652) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.Level.m_46653_(Level.java:486) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.LevelMixin,pl:mixin:APP:enhancedcelestials.mixins.json:MixinWorld,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.WorldMixin,pl:mixin:APP:radium.mixins.json:world.block_entity_retrieval.WorldMixin,pl:mixin:APP:radium.mixins.json:world.chunk_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_block_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_height.WorldMixin,pl:mixin:APP:sereneseasons.mixins.json:MixinLevel,pl:mixin:A}
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_184063_(ServerLevel.java:319) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.entity.EntityTickList.m_156910_(EntityTickList.java:54) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,re:classloading,pl:mixin:APP:radium.mixins.json:collections.entity_ticking.EntityListMixin,pl:mixin:A}
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:299) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:902) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:326) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B}
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:842) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:685) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:261) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:833) [?:?] {re:mixin}
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.RuntimeException: Attempted to load class net/mcreator/villageemployment/client/particle/OrbOfDominanceSmokeParticle for invalid dist DEDICATED_SERVER
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClassWithFlags(RuntimeDistCleaner.java:57) ~[fmlloader-1.18.2-40.1.25.jar%2316!/:1.0] {}
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:88) ~[modlauncher-9.1.3.jar%235!/:?] {}
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:120) ~[modlauncher-9.1.3.jar%235!/:?] {}
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.modlauncher.TransformingClassLoader.maybeTransformClassBytes(TransformingClassLoader.java:50) ~[modlauncher-9.1.3.jar%235!/:?] {}
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.cl.ModuleClassLoader.readerToClass(ModuleClassLoader.java:110) ~[securejarhandler-1.0.3.jar:?] {}
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.cl.ModuleClassLoader.lambda$findClass$16(ModuleClassLoader.java:216) ~[securejarhandler-1.0.3.jar:?] {}
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.cl.ModuleClassLoader.loadFromModule(ModuleClassLoader.java:226) ~[securejarhandler-1.0.3.jar:?] {}
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.cl.ModuleClassLoader.findClass(ModuleClassLoader.java:216) ~[securejarhandler-1.0.3.jar:?] {}
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at cpw.mods.cl.ModuleClassLoader.loadClass(ModuleClassLoader.java:132) ~[securejarhandler-1.0.3.jar:?] {}
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.ClassLoader.loadClass(ClassLoader.java:520) ~[?:?] {}
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	... 17 more
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => A detailed walkthrough of the error, its code path and all known details is as follows:
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ---------------------------------------------------------------------------------------
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Head --
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Thread: Server thread
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Thread:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Stacktrace:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.mcreator.villageemployment.init.VillageEmploymentModParticles.<clinit>(VillageEmploymentModParticles.java:28) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.mcreator.villageemployment.procedures.IllagerMinionOnEntityTickUpdateProcedure.execute(IllagerMinionOnEntityTickUpdateProcedure.java:11) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.mcreator.villageemployment.entity.IllagerMinionEntity.m_6075_(IllagerMinionEntity.java:177) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.entity.Entity.m_8119_(Entity.java:413) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:backpacked.mixins.json:common.EntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.EntityMixin,pl:mixin:APP:blueprint.mixins.json:EntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorEntity,pl:mixin:APP:earthmobsmod.mixins.json:EntityMixin,pl:mixin:APP:netherportalfix.mixins.json:EntityAccessor,pl:mixin:APP:quark.mixins.json:EntityMixin,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.EntityMixin,pl:mixin:APP:radium.mixins.json:alloc.deep_passengers.EntityMixin,pl:mixin:APP:radium.mixins.json:block.hopper.EntityAccessor,pl:mixin:APP:radium.mixins.json:entity.collisions.fluid.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.movement.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.suffocation.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_fire_check.EntityMixin,pl:mixin:APP:structure_gel.mixins.json:EntityMixin,pl:mixin:APP:supplementaries.mixins.json:EntityMixin,pl:mixin:A}
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.entity.LivingEntity.m_8119_(LivingEntity.java:2215) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin_Lootblock,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:totem.LivingEntityMixin,pl:mixin:APP:blue_skies.mixins.json:LivingEntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorLivingEntity,pl:mixin:APP:caelus.mixins.json:MixinLivingEntity,pl:mixin:APP:citadel.mixins.json:LivingEntityMixin,pl:mixin:APP:clienttweaks.mixins.json:LivingEntityAccessor,pl:mixin:APP:curioofundying.mixins.json:LivingEntityMixin,pl:mixin:APP:curios.mixins.json:MixinLivingEntity,pl:mixin:APP:earthmobsmod.mixins.json:LivingEntityMixin,pl:mixin:APP:ecologics.mixins.json:MixinLivingEntity,pl:mixin:APP:enhancedcelestials.mixins.json:MixinLivingEntity,pl:mixin:APP:netherportalfix.mixins.json:LivingEntityAccessor,pl:mixin:APP:quark.mixins.json:LivingEntityAccessor,pl:mixin:APP:radium.mixins.json:alloc.enum_values.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_elytra_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_hand_swing.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_powder_snow_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.LivingEntityMixin,pl:mixin:APP:snowyspirit.mixins.json:EntityMixin,pl:mixin:APP:spirit.mixins.json:LivingEntityMixin,pl:mixin:APP:supplementaries.mixins.json:LivingEntityMixin,pl:mixin:A}
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.entity.Mob.m_8119_(Mob.java:307) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:MobMixin,pl:mixin:APP:biomemakeover-common.mixins.json:MobAccess,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorMob,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.MobEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.MobEntityMixin,pl:mixin:A}
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_8647_(ServerLevel.java:652) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.Level.m_46653_(Level.java:486) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.LevelMixin,pl:mixin:APP:enhancedcelestials.mixins.json:MixinWorld,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.WorldMixin,pl:mixin:APP:radium.mixins.json:world.block_entity_retrieval.WorldMixin,pl:mixin:APP:radium.mixins.json:world.chunk_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_block_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_height.WorldMixin,pl:mixin:APP:sereneseasons.mixins.json:MixinLevel,pl:mixin:A}
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_184063_(ServerLevel.java:319) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.entity.EntityTickList.m_156910_(EntityTickList.java:54) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,re:classloading,pl:mixin:APP:radium.mixins.json:collections.entity_ticking.EntityListMixin,pl:mixin:A}
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:299) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Entity being ticked --
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Details:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity Type: village_employment:illager_minion (net.mcreator.villageemployment.entity.IllagerMinionEntity)
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity Type:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity ID: 5
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity ID:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity Name: Illager Minion
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity Name:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Exact location: 439.00, 71.94, 91.00
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Exact location:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Block location: World: (439,71,91), Section: (at 7,7,11 in 27,4,5; chunk contains blocks 432,-64,80 to 447,319,95), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,-64,0 to 511,319,511)
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Block location:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Momentum: 0.00, 0.00, 0.00
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Momentum:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Passengers: []
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Passengers:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Vehicle: null
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Vehicle:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Stacktrace:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.Level.m_46653_(Level.java:486) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.LevelMixin,pl:mixin:APP:enhancedcelestials.mixins.json:MixinWorld,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.WorldMixin,pl:mixin:APP:radium.mixins.json:world.block_entity_retrieval.WorldMixin,pl:mixin:APP:radium.mixins.json:world.chunk_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_block_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_height.WorldMixin,pl:mixin:APP:sereneseasons.mixins.json:MixinLevel,pl:mixin:A}
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_184063_(ServerLevel.java:319) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.entity.EntityTickList.m_156910_(EntityTickList.java:54) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,re:classloading,pl:mixin:APP:radium.mixins.json:collections.entity_ticking.EntityListMixin,pl:mixin:A}
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:299) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:902) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:326) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B}
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:842) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:685) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:261) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:833) [?:?] {re:mixin}
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Affected level --
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Details:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	All players: 0 total; []
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	All players:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Chunk stats: 2209
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Chunk stats:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level dimension: minecraft:overworld
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level dimension:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level spawn location: World: (461,66,120), Section: (at 13,2,8 in 28,4,7; chunk contains blocks 448,-64,112 to 463,319,127), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,-64,0 to 511,319,511)
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level spawn location:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level time: 336463 game time, 1000 day time
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level time:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level name: world
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level name:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level game mode: Game mode: survival (ID 0). Hardcore: false. Cheats: false
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level game mode:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level weather: Rain time: 1 (now: false), thunder time: 1 (now: false)
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level weather:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Known server brands: forge
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Known server brands:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level was modded: true
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level was modded:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level storage version: 0x04ABD - Anvil
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level storage version:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Stacktrace:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:902) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:326) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B}
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:842) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:685) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:261) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:833) [?:?] {re:mixin}
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- System Details --
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Details:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Minecraft Version: 1.18.2
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Minecraft Version:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Minecraft Version ID: 1.18.2
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Minecraft Version ID:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Operating System: Linux (amd64) version 5.4.0-100-generic
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Operating System:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java Version: 17.0.1, Oracle Corporation
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Java Version:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode, sharing), Oracle Corporation
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Java VM Version:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Memory: 837241864 bytes (798 MiB) / 2831155200 bytes (2700 MiB) up to 2831155200 bytes (2700 MiB)
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Memory:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	CPUs: 4
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	CPUs:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Processor Vendor: AuthenticAMD
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Processor Vendor:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Processor Name: AMD EPYC 7401P 24-Core Processor
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Processor Name:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Identifier: AuthenticAMD Family 23 Model 1 Stepping 2
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Identifier:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Microarchitecture: Zen
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Microarchitecture:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Frequency (GHz): -0.00
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Frequency (GHz):
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Number of physical packages: 1
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Number of physical packages:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Number of physical CPUs: 24
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Number of physical CPUs:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Number of logical CPUs: 48
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Number of logical CPUs:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 name: unknown
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 name:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 vendor: unknown
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 vendor:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 VRAM (MB): 0.00
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 VRAM (MB):
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 deviceId: unknown
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 deviceId:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 versionInfo: unknown
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 versionInfo:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Virtual memory max (MB): 129934.37
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Virtual memory max (MB):
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Virtual memory used (MB): 128143.55
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Virtual memory used (MB):
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Swap memory total (MB): 1024.00
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Swap memory total (MB):
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Swap memory used (MB): 17.79
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Swap memory used (MB):
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	JVM Flags: 3 total; -XX:MaxMetaspaceSize=400M -Xmx2700M -Xms1350M
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	JVM Flags:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Server Running: true
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Server Running:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Player Count: 0 / 20; []
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Player Count:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Data Packs: vanilla, mod:betterdungeons, mod:blue_skies (incompatible), mod:netherportalfix (incompatible), mod:cftlc, mod:additionalbanners (incompatible), mod:incontrol (incompatible), mod:stalwart_dungeons, mod:bambooeverything (incompatible), mod:kleeslabs (incompatible), mod:villagernames, mod:duckling (incompatible), mod:xaeroworldmap, mod:citadel (incompatible), mod:alexsmobs (incompatible), mod:yungsapi, mod:feature_nbt_deadlock_be_gone (incompatible), mod:upgradednetherite_items (incompatible), mod:bookshelf (incompatible), mod:guardvillagers (incompatible), mod:twigs (incompatible), mod:additionalstructures, mod:bygonenether (incompatible), mod:balm (incompatible), mod:carryon (incompatible), mod:cloth_config (incompatible), mod:dragonmounts (incompatible), mod:absentbydesign, mod:revampedwolf, mod:upgradednetherite (incompatible), mod:structure_gel, mod:corpse (incompatible), mod:chipped (incompatible), mod:farmersdelight (incompatible), mod:repurposed_structures, mod:morevillagers (incompatible), mod:bcc (incompatible), mod:verdure (incompatible), mod:simpleshops (incompatible), mod:geode (incompatible), mod:skinnedlanterns (incompatible), mod:supermartijn642corelib, mod:yungsbridges, mod:spark (incompatible), mod:illager_plushies, mod:curios (incompatible), mod:cataclysm (incompatible), mod:patchouli (incompatible), mod:corail_woodcutter, mod:collective, mod:snowpig (incompatible), mod:yungsextras, mod:villagertools (incompatible), mod:betterthirdperson (incompatible), mod:elevatorid, mod:betterstrongholds, mod:runelic (incompatible), mod:starterkit, mod:spirit (incompatible), mod:architectury (incompatible), mod:curiouselytra (incompatible), mod:biomeinfo (incompatible), mod:aiimprovements (incompatible), mod:adorn (incompatible), mod:bettershields (incompatible), mod:fallingtree, mod:enchantwithmob, mod:easyshulkerboxes (incompatible), mod:mavm (incompatible), mod:bettermineshafts, mod:voidtotem (incompatible), mod:veinmining (incompatible), mod:geckolib3 (incompatible), mod:bettermodsbutton (incompatible), mod:darkpaintings (incompatible), mod:tradingpost (incompatible), mod:radium (incompatible), mod:clienttweaks (incompatible), mod:ftblibrary (incompatible), mod:ftbteams (incompatible), mod:biomemakeover (incompatible), mod:culturaldelights, mod:configmenusforge (incompatible), mod:additionallanterns (incompatible), mod:nourished_nether, mod:itemfilters (incompatible), mod:easymagic (incompatible), mod:nourished_end, mod:jei (incompatible), mod:visualworkbench (incompatible), mod:universalbonemeal (incompatible), mod:graveyard (incompatible), mod:steves_vanilla, mod:attributefix (incompatible), mod:conjurer_illager, mod:goblintraders (incompatible), mod:caelus (incompatible), mod:paxi, mod:immersive_weathering (incompatible), mod:waystones (incompatible), mod:merchantmarkers (incompatible), mod:clumps (incompatible), mod:village_employment, mod:comforts (incompatible), mod:naturescompass (incompatible), mod:additionalbars (incompatible), mod:storagenetwork (incompatible), mod:sereneseasons (incompatible), mod:decorative_blocks, mod:curioofundying (incompatible), mod:badmobs, mod:more_babies (incompatible), mod:snuffles (incompatible), mod:blueprint (incompatible), mod:crafttweaker (incompatible), mod:ftbchunks (incompatible), mod:forge (incompatible), mod:curiouslights, mod:forgottenrecipes (incompatible), mod:friendsandfoes (incompatible), mod:selene (incompatible), mod:supplementaries (incompatible), mod:dungeons_arise, mod:radon (incompatible), mod:pigsteel (incompatible), mod:dynamic_asset_generator (incompatible), mod:excavated_variants (incompatible), mod:terrablender (incompatible), mod:ftbquests (incompatible), mod:magnumtorch (incompatible), mod:jade, mod:additionaladditions (incompatible), mod:snowyspirit (incompatible), mod:another_furniture, mod:nethersdelight (incompatible), mod:rocks, mod:paintings (incompatible), mod:iceberg (incompatible), mod:farmersrespite (incompatible), mod:xaerominimap, mod:polymorph (incompatible), mod:autoreglib (incompatible), mod:akashictome (incompatible), mod:quark (incompatible), mod:ecologics (incompatible), mod:warden_and_sculk, mod:earthmobsmod, mod:backpacked (incompatible), mod:inventoryhud (incompatible), mod:blocksplus (incompatible), mod:upgradedcore (incompatible), mod:hunterillager, mod:zillagersweararmor (incompatible), mod:creeperoverhaul (incompatible), mod:ferritecore (incompatible), mod:upgradednetherite_ultimate (incompatible), mod:puzzleslib (incompatible), mod:enhancedcelestials (incompatible), mod:byg (incompatible), mod:aquaculture (incompatible), mod:xpbook (incompatible), Immersive Weathering Generated Pack, Repurposed_Structures-Better_Dungeons_v2.zip (incompatible), Repurposed_Structures-Better_Strongholds_v3.zip, Repurposed_Structures-Farmers_Delight_v3.zip (incompatible), Repurposed_Structures-Friends_And_Foes-v1.zip, Repurposed_Structures-More_Villagers_v6.zip, Snowyspirit Virtual Resourcepack, Supplementaries Generated Pack, dynamic_asset_generator:data (incompatible), ichphilipp-s-endcity-vanilla-v1-1-1-18-1-e640.zip
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Data Packs:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	World Generation: Stable
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	World Generation:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Is Modded: Definitely; Server brand changed to \'forge\'
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Is Modded:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Type: Dedicated Server (map_server.txt)
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Type:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher: 9.1.3+9.1.3+main.9b69c82a
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	ModLauncher:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher launch target: forgeserver
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	ModLauncher launch target:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher naming: srg
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	ModLauncher naming:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	ModLauncher services:
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	ModLauncher services:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 mixin PLUGINSERVICE
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 eventbus PLUGINSERVICE
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 slf4jfixer PLUGINSERVICE
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 object_holder_definalize PLUGINSERVICE
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 runtime_enum_extender PLUGINSERVICE
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 capability_token_subclass PLUGINSERVICE
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 accesstransformer PLUGINSERVICE
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 runtimedistcleaner PLUGINSERVICE
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 mixin TRANSFORMATIONSERVICE
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		 fml TRANSFORMATIONSERVICE
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	FML Language Providers:
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	FML Language Providers:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		minecraft@1.0
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		kotlinforforge@3.3.2
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		javafml@null
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Mod List:
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Mod List:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		YungsBetterDungeons-1.18.2-Forge-2.1.0.jar        |YUNG\'s Better Dungeons        |betterdungeons                |1.18.2-Forge-2.1.0  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		blue_skies-1.18.2-1.3.12.jar                      |Blue Skies                    |blue_skies                    |1.3.12              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		netherportalfix-forge-1.18-9.0.0.jar              |NetherPortalFix               |netherportalfix               |9.0.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		cftlc-1.0.1+1.18.2.jar                            |Creatures from the Lush Cave  |cftlc                         |1.0.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		AdditionalBanners-Forge-1.18.2-7.0.4.jar          |AdditionalBanners             |additionalbanners             |7.0.4               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		incontrol-1.18-6.0.9.jar                          |InControl                     |incontrol                     |1.18-6.0.9          |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		stalwart-dungeons-1.18.2-1.2.2.jar                |Stalwart Dungeons             |stalwart_dungeons             |1.2.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		bambooeverything-1.2.7-build.14+mc1.18.2.jar      |Bamboo Everything             |bambooeverything              |1.2.7-build.14+mc1.1|DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		kleeslabs-forge-1.18.1-11.1.0.jar                 |KleeSlabs                     |kleeslabs                     |11.1.0              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		villagernames_1.18.2-3.5.jar                      |Villager Names                |villagernames                 |3.5                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		duckling-1.0.5-forge.jar                          |Duckling                      |duckling                      |1.0.5               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		XaerosWorldMap_1.22.0_Forge_1.18.2.jar            |Xaero\'s World Map             |xaeroworldmap                 |1.22.0              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		citadel-1.11.3-1.18.2.jar                         |Citadel                       |citadel                       |1.11.3              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		alexsmobs-1.18.3.jar                              |Alex\'s Mobs                   |alexsmobs                     |1.18.3              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		YungsApi-1.18.2-Forge-2.0.8.jar                   |YUNG\'s API                    |yungsapi                      |1.18.2-Forge-2.0.8  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		feature_nbt_deadlock_be_gone_forge-2.0.0+1.18.2.ja|Feature NBT Deadlock Be Gone  |feature_nbt_deadlock_be_gone  |2.0.0+1.18.2        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		upgradednetherite_items-1.18.2-3.2.0.0-release.jar|Upgraded Netherite : Items    |upgradednetherite_items       |1.18.2-3.2.0.0-relea|DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Bookshelf-Forge-1.18.2-13.0.13.jar                |Bookshelf                     |bookshelf                     |13.0.13             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		guardvillagers-1.**.**.**.**.2.jar                   |Guard Villagers               |guardvillagers                |1.4.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		twigs-forge-1.1.4-patch3+1.18.2.jar               |Twigs                         |twigs                         |1.1.4-patch1+1.18.2 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Rex\'s-AdditionalStructures-1.18.2-(v.3.0.3).jar   |Additional Structures         |additionalstructures          |3.0.3               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		bygonenether-1.1.2-1.18.2.jar                     |Bygone Nether                 |bygonenether                  |1.1.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		balm-3.0.3+0.jar                                  |Balm                          |balm                          |3.0.3+0             |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		carryon-1.18.2-1.17.0.8.jar                       |Carry On                      |carryon                       |**.**.**.**            |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		cloth-config-6.2.62-forge.jar                     |Cloth Config v4 API           |cloth_config                  |6.2.62              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		dragonmounts-1.18.2-BETA_1.1.0b1.jar              |Dragon Mounts: Legacy         |dragonmounts                  |1.18.2-BETA_1.1.0b1 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		absentbydesign-1.18.2-1.6.2.jar                   |Absent By Design Mod          |absentbydesign                |1.18.2-1.6.2        |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		revampedwolf-1.18.2-1.2.0.jar                     |RevampedWolf                  |revampedwolf                  |1.18.2-1.2.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		upgradednetherite-1.18.2-4.2.0.6-release.jar      |Upgraded Netherite            |upgradednetherite             |1.18.2-4.2.0.6-relea|DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		structure_gel-1.18.2-2.3.0.jar                    |Structure Gel API             |structure_gel                 |2.3.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		corpse-1.18.2-1.0.1.jar                           |Corpse                        |corpse                        |1.18.2-1.0.1        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		chipped-1.18.2-1.2.1-forge.jar                    |Chipped                       |chipped                       |1.18.2-1.2.1-forge  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		FarmersDelight-1.18.2-1.1.1.jar                   |Farmer\'s Delight              |farmersdelight                |1.18.2-1.1.1        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		repurposed_structures_forge-5.1.9+1.18.2.jar      |Repurposed Structures         |repurposed_structures         |5.1.9+1.18.2        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		morevillagers-FORGE-1.18.2-3.2.0.jar              |More Villagers                |morevillagers                 |3.2.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BetterCompatibilityChecker-1.1.14-build.26+mc1.18.|Better Compatibility Checker  |bcc                           |1.1.14-build.26+mc1.|DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		verdure-1.18.2-1.1.2.jar                          |Verdure                       |verdure                       |1.1.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		simpleshops-1.2.1.jar                             |Simple Shops                  |simpleshops                   |1.1.4               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Geode+_v1.0.1+1.18.2.jar                          |Geode+                        |geode                         |1.0.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		skinned_lanterns-1.18.2-1.3.4.jar                 |Skinned Lanterns              |skinnedlanterns               |1.18.2-1.3.4        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		supermartijn642corelib-1.0.18-forge-mc1.18.jar    |SuperMartijn642\'s Core Lib    |supermartijn642corelib        |1.0.18              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		YungsBridges-1.18.2-Forge-2.1.0.jar               |YUNG\'s Bridges                |yungsbridges                  |1.18.2-Forge-2.1.0  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		spark-1.9.1-forge.jar                             |spark                         |spark                         |1.9.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Illager Plushies 1.1.5 1.18.2.jar                 |Illager Plushies              |illager_plushies              |1.1.5               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		curios-forge-1.18.2-5.0.7.0.jar                   |Curios API                    |curios                        |1.18.2-5.0.7.0      |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Cataclysm-0.18 -congfig fix.jar                   |Cataclysm Mod                 |cataclysm                     |1.0                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Patchouli-1.18.2-67.jar                           |Patchouli                     |patchouli                     |1.18.2-67           |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		corail_woodcutter-1.18.2-2.3.3.jar                |Corail Woodcutter             |corail_woodcutter             |2.3.3               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		collective-1.18.2-4.25.jar                        |Collective                    |collective                    |4.25                |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Snow_Pig-1.18.2-4.2.0.jar                         |Snow Pig                      |snowpig                       |1.18.2-4.2.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		YungsExtras-1.18.2-Forge-2.1.0.jar                |YUNG\'s Extras                 |yungsextras                   |1.18.2-Forge-2.1.0  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		villagertools-1.18-1.0.2.jar                      |villagertools                 |villagertools                 |1.18-1.0.2          |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BetterThirdPerson-Forge-1.18.2-1.7.3.jar          |Better Third Person           |betterthirdperson             |1.7.3               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		elevatorid-1.18.2-1.8.4.jar                       |Elevator Mod                  |elevatorid                    |1.18.2-1.8.4        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		YungsBetterStrongholds-1.18.2-Forge-2.1.1.jar     |YUNG\'s Better Strongholds     |betterstrongholds             |1.18.2-Forge-2.1.1  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Runelic-Forge-1.18.2-11.0.1.jar                   |Runelic                       |runelic                       |11.0.1              |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		starterkit_1.18.2-3.2.jar                         |Starter Kit                   |starterkit                    |3.2                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Spirit-forge-1.18.2-1.3.0.jar                     |Spirit                        |spirit                        |1.3.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		architectury-4.4.68.jar                           |Architectury                  |architectury                  |4.4.68              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		curiouselytra-forge-1.18.1-5.0.1.0.jar            |Curious Elytra                |curiouselytra                 |1.18.1-5.0.1.0      |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		biomeinfo-1.18.2-1.4.jar                          |BiomeInfo                     |biomeinfo                     |1.4                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		AI-Improvements-1.18.2-0.5.0.jar                  |AI-Improvements               |aiimprovements                |0.5.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Adorn-3.5.0+1.18.2-forge.jar                      |Adorn                         |adorn                         |3.5.0+1.18.2        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BetterShieldsMC1.18.1-1.0.1.jar                   |Better Shields                |bettershields                 |1.0.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		FallingTree-1.18.2-3.5.1.jar                      |FallingTree                   |fallingtree                   |3.5.1               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		enchantwithmob-1.18.2-4.1.0.jar                   |Enchant With Mob              |enchantwithmob                |1.18.2-4.1.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		EasyShulkerBoxes-v3.1.1-1.18.2-Forge.jar          |Easy Shulker Boxes            |easyshulkerboxes              |3.1.1               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		mavm-forge-1.18.1-1.0.7a.jar                      |More Axolotl Variants Mod     |mavm                          |1.0.7a              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		YungsBetterMineshafts-1.18.2-Forge-2.1.3.jar      |YUNG\'s Better Mineshafts      |bettermineshafts              |1.18.2-Forge-2.1.3  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		voidtotem-forge-1.18.2-1.3.1.jar                  |Void Totem                    |voidtotem                     |1.18.2-1.3.1        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		veinmining-forge-1.18.2-0.18.jar                  |Vein Mining                   |veinmining                    |1.18.2-0.18         |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		geckolib-1.18-forge-3.0.18.jar                    |GeckoLib                      |geckolib3                     |3.0.18              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BetterModsButton-v3.2.2-1.18.2-Forge.jar          |Better Mods Button            |bettermodsbutton              |3.2.2               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		DarkPaintings-Forge-1.18.2-10.0.3.jar             |DarkPaintings                 |darkpaintings                 |10.0.3              |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		TradingPost-v3.2.0-1.18.2-Forge.jar               |Trading Post                  |tradingpost                   |3.2.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		radium-0.7.10.jar                                 |Radium                        |radium                        |0.7.10              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		clienttweaks-forge-1.18.1-7.1.0.jar               |Client Tweaks                 |clienttweaks                  |7.1.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ftb-library-forge-1802.3.6-build.119.jar          |FTB Library                   |ftblibrary                    |1802.3.6-build.119  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ftb-teams-forge-1802.2.6-build.51.jar             |FTB Teams                     |ftbteams                      |1802.2.6-build.51   |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		biomemakeover-FORGE-1.18.2-1.4.23.jar             |Biome Makeover                |biomemakeover                 |1.18.2-1.4.23       |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		culturaldelights-1.18.2-0.11.jar                  |Cultural Delights             |culturaldelights              |1.18.2-0.11         |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ConfigMenusForge-v3.2.0-1.18.2-Forge.jar          |Config Menus for Forge        |configmenusforge              |3.2.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		additionallanterns-1.0.1-mc1.18.jar               |Additional Lanterns           |additionallanterns            |1.0.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		NourishedNetherV12.jar                            |Nourished Nether              |nourished_nether              |1.1.3               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		item-filters-forge-1802.2.7-build.27.jar          |Item Filters                  |itemfilters                   |1802.2.7-build.27   |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		EasyMagic-v3.3.0-1.18.2-Forge.jar                 |Easy Magic                    |easymagic                     |3.3.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Enlightened End BB V1.3.jar                       |Enlightened End               |nourished_end                 |1.1.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		jei-1.18.2-9.7.0.195.jar                          |Just Enough Items             |jei                           |**.**.**.**           |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		VisualWorkbench-v3.3.0-1.18.2-Forge.jar           |Visual Workbench              |visualworkbench               |3.3.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		UniversalBoneMeal-v3.0.5-1.18.2-Forge.jar         |Universal Bone Meal           |universalbonemeal             |3.0.5               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		The_Graveyard_1.8_(FORGE)_for_1.18.2.jar          |The Graveyard                 |graveyard                     |1.8                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Steve\'s_Vanilla_v0.3.9+1.18.2.jar                 |Steve\'s Vanilla               |steves_vanilla                |0.3.9               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		AttributeFix-Forge-1.18.2-14.0.2.jar              |AttributeFix                  |attributefix                  |14.0.2              |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		the-conjurer-1.18.2-1.1.1.jar                     |The Conjurer                  |conjurer_illager              |1.1.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		goblintraders-1.7.2-1.18.2.jar                    |Goblin Traders                |goblintraders                 |1.7.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		caelus-forge-1.18.1-3.0.0.2.jar                   |Caelus API                    |caelus                        |1.18.1-3.0.0.2      |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Paxi-1.18.2-Forge-2.0.jar                         |Paxi                          |paxi                          |1.18.2-Forge-2.0    |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		immersive_weathering-1.18.2-1.2.10.jar            |Immersive Weathering          |immersive_weathering          |1.18.2-1.2.10       |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		waystones-forge-1.18.2-10.0.0.jar                 |Waystones                     |waystones                     |10.0.0              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		MerchantMarkers-1.18.2-1.2.0.jar                  |Merchant Markers              |merchantmarkers               |1.2.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Clumps-forge-1.18.2-8.0.0+8.jar                   |Clumps                        |clumps                        |8.0.0+8             |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		village-employment-1.18.2-1.5.1.jar               |Village Employment            |village_employment            |1.5.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		comforts-forge-1.18.2-5.0.0.4.jar                 |Comforts                      |comforts                      |1.18.2-5.0.0.4      |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		NaturesCompass-1.18.2-1.9.5-forge.jar             |Nature\'s Compass              |naturescompass                |1.18.2-1.9.5-forge  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		additionalbars-3.0.1-beta+1.18.2.jar              |Additional Bars               |additionalbars                |3.0.1-beta          |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		SimpleStorageNetwork-1.18.2-1.6.1.jar             |Simple Storage Network        |storagenetwork                |1.18.2-1.6.1        |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		SereneSeasons-1.18.2-7.0.0.15.jar                 |Serene Seasons                |sereneseasons                 |0.0NONE             |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Decorative Blocks-forge-1.18.2-2.1.0.jar          |Decorative Blocks             |decorative_blocks             |2.1.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		curioofundying-forge-1.18-5.3.0.0.jar             |Curio of Undying              |curioofundying                |1.18-5.3.0.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		BadMobs-1.18.2-13.01.jar                          |BadMobs                       |badmobs                       |13.01               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		More Babies-forge-1.18.1-0.5.2.jar                |More Babies                   |more_babies                   |0.5.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		snuffles-1.0.2.jar                                |Snuffles                      |snuffles                      |1.0.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		blueprint-1.18.2-5.3.2.jar                        |Blueprint                     |blueprint                     |5.3.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		CraftTweaker-forge-1.18.2-9.1.143.jar             |CraftTweaker                  |crafttweaker                  |9.1.143             |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ftb-chunks-forge-1802.3.6-build.145.jar           |FTB Chunks                    |ftbchunks                     |1802.3.6-build.145  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		forge-1.18.2-40.1.25-universal.jar                |Forge                         |forge                         |40.1.25             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		curiouslights-forge-1.1.0+1.18.2.jar              |Curious Lights                |curiouslights                 |1.1.0+1.18.2        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		forgottenrecipes-forge-1.18.1-1.0.0.jar           |Forgotten Recipes             |forgottenrecipes              |1.18.1-1.0.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		friendsandfoes-forge-mc1.18.2-1.4.0.jar           |Friends&Foes                  |friendsandfoes                |1.4.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		selene-1.18.2-1.16.3.jar                          |Selene                        |selene                        |1.18.2-1.16.3       |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		supplementaries-1.18.2-1.4.0.jar                  |Supplementaries               |supplementaries               |1.18.2-1.4.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		DungeonsArise-1.18.2-2.1.50d-beta.jar             |When Dungeons Arise           |dungeons_arise                |2.1.50d-1.18.2      |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		radon-0.8.1.jar                                   |Radon                         |radon                         |0.8.1               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		pigsteel-1.18.2-3.1.0.jar                         |Pigsteel Mod                  |pigsteel                      |1.18.2-3.1.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		dynamic_asset_generator-forge-1.18.2-0.6.3.jar    |DynamicAssetGenerator         |dynamic_asset_generator       |0.6.3               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		excavated_variants-forge-1.18.2-0.6.2.jar         |Excavated Variants            |excavated_variants            |0.6.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		TerraBlender-forge-1.18.2-1.1.0.101.jar           |TerraBlender                  |terrablender                  |1.18.2-1.1.0.101    |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ftb-quests-forge-1802.3.8-build.101.jar           |FTB Quests                    |ftbquests                     |1802.3.8-build.101  |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		MagnumTorch-v3.1.3-1.18.2-Forge.jar               |Magnum Torch                  |magnumtorch                   |3.1.3               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Jade-1.18.2-5.2.0.jar                             |Jade                          |jade                          |5.2.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		additionaladditions-4.0.3.jar                     |Additional Additions          |additionaladditions           |4.0.3               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		snowyspirit-1.18.2-1.3.1.jar                      |Snowy Spirit                  |snowyspirit                   |1.18.2-1.3.1        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		another_furniture-1.18.2-1.0.3.jar                |Another Furniture Mod         |another_furniture             |1.0.3               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		NethersDelight-1.18.2-2.2.0.jar                   |Nethers Delight               |nethersdelight                |2.2                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ThisRocks-1.18.2-1.0.2.jar                        |This Rocks! (Forge)           |rocks                         |1.0.2               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Paintings-forge-1.18.2-9.1.2.1.jar                |Paintings ++                  |paintings                     |**.**.**.**             |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Iceberg-1.18.2-1.0.44.jar                         |Iceberg                       |iceberg                       |1.0.44              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		FarmersRespite-1.18.2-1.2.0.jar                   |Farmer\'s Respite              |farmersrespite                |1.18.1-1.2.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Xaeros_Minimap_22.8.2_Forge_1.18.2.jar            |Xaero\'s Minimap               |xaerominimap                  |22.8.2              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		polymorph-forge-1.18.2-0.44.jar                   |Polymorph                     |polymorph                     |1.18.2-0.44         |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		AutoRegLib-1.7-53.jar                             |AutoRegLib                    |autoreglib                    |1.7-53              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		AkashicTome-1.5-20.jar                            |Akashic Tome                  |akashictome                   |1.5-20              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Quark-3.2-357.jar                                 |Quark                         |quark                         |3.2-357             |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ecologics-FORGE-1.18.2-1.6.7.jar                  |Ecologics                     |ecologics                     |1.6.7               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		warden_and_sculk-2.0.0.jar                        |Warden and Sculk              |warden_and_sculk              |2.0.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		EarthMobs-1.18.2-1.0.0.jar                        |Earth Mobs Mod                |earthmobsmod                  |1.18.2-1.0.0        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		backpacked-2.1.6-1.18.2.jar                       |Backpacked                    |backpacked                    |2.1.6               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		InventoryHud_[1.18].forge-3.4.4.jar               |Inventory HUD+(Forge edition) |inventoryhud                  |3.4.4               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Blocks + 1.18.1 - 1.4.jar                         |Blocks +                      |blocksplus                    |1.4                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		upgradedcore-1.18.2-3.2.0.0-release.jar           |Upgraded Core                 |upgradedcore                  |1.18.2-3.2.0.0-relea|DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		HunterIllager-1.18.2-4.0.1.jar                    |Hunter Illager                |hunterillager                 |1.18.2-4.0.1        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		illagersweararmor-1.1.5.jar                       |Illagers Wear Armor           |zillagersweararmor            |1.1.5               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		server-1.18.2-20220404.173914-srg.jar             |Minecraft                     |minecraft                     |1.18.2              |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		creeperoverhaul-1.18.2-1.3.0-forge.jar            |Creeper Overhaul              |creeperoverhaul               |1.3.0               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		ferritecore-4.2.1-forge.jar                       |Ferrite Core                  |ferritecore                   |0.0NONE             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		upgradednetherite_ultimate-1.18.2-3.2.0.1-release.|Upgraded Netherite : Ultimerit|upgradednetherite_ultimate    |1.18.2-3.2.0.1-relea|DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		PuzzlesLib-v3.3.5-1.18.2-Forge.jar                |Puzzles Lib                   |puzzleslib                    |3.3.5               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Enhanced_Celestials-forge-1.18.2-2.0.7.jar        |Enhanced Celestials           |enhancedcelestials            |2.0.7               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Oh_The_Biomes_You\'ll_Go-forge-1.18.2-1.4-RC-21.jar|Oh The Biomes You\'ll Go       |byg                           |1.4                 |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		Aquaculture-1.18.2-2.3.6.jar                      |Aquaculture 2                 |aquaculture                   |1.18.2-2.3.6        |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		xptome-1.18.2-2.1.5.jar                           |XP Tome                       |xpbook                        |2.1.5               |DONE      |Manifest: NOSIGNATURE
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Crash Report UUID: 26150b89-ecf4-4abc-a7a4-6868a3cadba4
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Crash Report UUID:
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	FML: 40.1
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	FML:
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Forge: net.minecraftforge:40.1.25
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Forge:
                )

        )

    [iterator:protected] => 316
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => ---- Minecraft Crash Report ----
// Why did you do that?

Time: 6/14/22, 4:49 AM
Description: Ticking entity

java.lang.BootstrapMethodError: java.lang.RuntimeException: Attempted to load class net/mcreator/villageemployment/client/particle/OrbOfDominanceSmokeParticle for invalid dist DEDICATED_SERVER
	at net.mcreator.villageemployment.init.VillageEmploymentModParticles.<clinit>(VillageEmploymentModParticles.java:28) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
	at net.mcreator.villageemployment.procedures.IllagerMinionOnEntityTickUpdateProcedure.execute(IllagerMinionOnEntityTickUpdateProcedure.java:11) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
	at net.mcreator.villageemployment.entity.IllagerMinionEntity.m_6075_(IllagerMinionEntity.java:177) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
	at net.minecraft.world.entity.Entity.m_8119_(Entity.java:413) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:backpacked.mixins.json:common.EntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.EntityMixin,pl:mixin:APP:blueprint.mixins.json:EntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorEntity,pl:mixin:APP:earthmobsmod.mixins.json:EntityMixin,pl:mixin:APP:netherportalfix.mixins.json:EntityAccessor,pl:mixin:APP:quark.mixins.json:EntityMixin,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.EntityMixin,pl:mixin:APP:radium.mixins.json:alloc.deep_passengers.EntityMixin,pl:mixin:APP:radium.mixins.json:block.hopper.EntityAccessor,pl:mixin:APP:radium.mixins.json:entity.collisions.fluid.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.movement.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.suffocation.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_fire_check.EntityMixin,pl:mixin:APP:structure_gel.mixins.json:EntityMixin,pl:mixin:APP:supplementaries.mixins.json:EntityMixin,pl:mixin:A}
	at net.minecraft.world.entity.LivingEntity.m_8119_(LivingEntity.java:2215) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin_Lootblock,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:totem.LivingEntityMixin,pl:mixin:APP:blue_skies.mixins.json:LivingEntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorLivingEntity,pl:mixin:APP:caelus.mixins.json:MixinLivingEntity,pl:mixin:APP:citadel.mixins.json:LivingEntityMixin,pl:mixin:APP:clienttweaks.mixins.json:LivingEntityAccessor,pl:mixin:APP:curioofundying.mixins.json:LivingEntityMixin,pl:mixin:APP:curios.mixins.json:MixinLivingEntity,pl:mixin:APP:earthmobsmod.mixins.json:LivingEntityMixin,pl:mixin:APP:ecologics.mixins.json:MixinLivingEntity,pl:mixin:APP:enhancedcelestials.mixins.json:MixinLivingEntity,pl:mixin:APP:netherportalfix.mixins.json:LivingEntityAccessor,pl:mixin:APP:quark.mixins.json:LivingEntityAccessor,pl:mixin:APP:radium.mixins.json:alloc.enum_values.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_elytra_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_hand_swing.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_powder_snow_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.LivingEntityMixin,pl:mixin:APP:snowyspirit.mixins.json:EntityMixin,pl:mixin:APP:spirit.mixins.json:LivingEntityMixin,pl:mixin:APP:supplementaries.mixins.json:LivingEntityMixin,pl:mixin:A}
	at net.minecraft.world.entity.Mob.m_8119_(Mob.java:307) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:MobMixin,pl:mixin:APP:biomemakeover-common.mixins.json:MobAccess,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorMob,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.MobEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.MobEntityMixin,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_8647_(ServerLevel.java:652) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
	at net.minecraft.world.level.Level.m_46653_(Level.java:486) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.LevelMixin,pl:mixin:APP:enhancedcelestials.mixins.json:MixinWorld,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.WorldMixin,pl:mixin:APP:radium.mixins.json:world.block_entity_retrieval.WorldMixin,pl:mixin:APP:radium.mixins.json:world.chunk_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_block_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_height.WorldMixin,pl:mixin:APP:sereneseasons.mixins.json:MixinLevel,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_184063_(ServerLevel.java:319) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
	at net.minecraft.world.level.entity.EntityTickList.m_156910_(EntityTickList.java:54) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,re:classloading,pl:mixin:APP:radium.mixins.json:collections.entity_ticking.EntityListMixin,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:299) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:902) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:326) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B}
	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:842) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:685) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:261) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at java.lang.Thread.run(Thread.java:833) [?:?] {re:mixin}
Caused by: java.lang.RuntimeException: Attempted to load class net/mcreator/villageemployment/client/particle/OrbOfDominanceSmokeParticle for invalid dist DEDICATED_SERVER
	at net.minecraftforge.fml.loading.RuntimeDistCleaner.processClassWithFlags(RuntimeDistCleaner.java:57) ~[fmlloader-1.18.2-40.1.25.jar%2316!/:1.0] {}
	at cpw.mods.modlauncher.LaunchPluginHandler.offerClassNodeToPlugins(LaunchPluginHandler.java:88) ~[modlauncher-9.1.3.jar%235!/:?] {}
	at cpw.mods.modlauncher.ClassTransformer.transform(ClassTransformer.java:120) ~[modlauncher-9.1.3.jar%235!/:?] {}
	at cpw.mods.modlauncher.TransformingClassLoader.maybeTransformClassBytes(TransformingClassLoader.java:50) ~[modlauncher-9.1.3.jar%235!/:?] {}
	at cpw.mods.cl.ModuleClassLoader.readerToClass(ModuleClassLoader.java:110) ~[securejarhandler-1.0.3.jar:?] {}
	at cpw.mods.cl.ModuleClassLoader.lambda$findClass$16(ModuleClassLoader.java:216) ~[securejarhandler-1.0.3.jar:?] {}
	at cpw.mods.cl.ModuleClassLoader.loadFromModule(ModuleClassLoader.java:226) ~[securejarhandler-1.0.3.jar:?] {}
	at cpw.mods.cl.ModuleClassLoader.findClass(ModuleClassLoader.java:216) ~[securejarhandler-1.0.3.jar:?] {}
	at cpw.mods.cl.ModuleClassLoader.loadClass(ModuleClassLoader.java:132) ~[securejarhandler-1.0.3.jar:?] {}
	at java.lang.ClassLoader.loadClass(ClassLoader.java:520) ~[?:?] {}
	... 17 more


A detailed walkthrough of the error, its code path and all known details is as follows:
---------------------------------------------------------------------------------------

-- Head --
Thread: Server thread
Stacktrace:
	at net.mcreator.villageemployment.init.VillageEmploymentModParticles.<clinit>(VillageEmploymentModParticles.java:28) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
	at net.mcreator.villageemployment.procedures.IllagerMinionOnEntityTickUpdateProcedure.execute(IllagerMinionOnEntityTickUpdateProcedure.java:11) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
	at net.mcreator.villageemployment.entity.IllagerMinionEntity.m_6075_(IllagerMinionEntity.java:177) ~[village-employment-1.18.2-1.5.1.jar%23182!/:?] {re:classloading}
	at net.minecraft.world.entity.Entity.m_8119_(Entity.java:413) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:backpacked.mixins.json:common.EntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.EntityMixin,pl:mixin:APP:blueprint.mixins.json:EntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorEntity,pl:mixin:APP:earthmobsmod.mixins.json:EntityMixin,pl:mixin:APP:netherportalfix.mixins.json:EntityAccessor,pl:mixin:APP:quark.mixins.json:EntityMixin,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.EntityMixin,pl:mixin:APP:radium.mixins.json:alloc.deep_passengers.EntityMixin,pl:mixin:APP:radium.mixins.json:block.hopper.EntityAccessor,pl:mixin:APP:radium.mixins.json:entity.collisions.fluid.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.movement.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.suffocation.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.EntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_fire_check.EntityMixin,pl:mixin:APP:structure_gel.mixins.json:EntityMixin,pl:mixin:APP:supplementaries.mixins.json:EntityMixin,pl:mixin:A}
	at net.minecraft.world.entity.LivingEntity.m_8119_(LivingEntity.java:2215) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:LivingEntityMixin_Lootblock,pl:mixin:APP:biomemakeover-common.mixins.json:enchantment.LivingEntityMixin,pl:mixin:APP:biomemakeover-common.mixins.json:totem.LivingEntityMixin,pl:mixin:APP:blue_skies.mixins.json:LivingEntityMixin,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorLivingEntity,pl:mixin:APP:caelus.mixins.json:MixinLivingEntity,pl:mixin:APP:citadel.mixins.json:LivingEntityMixin,pl:mixin:APP:clienttweaks.mixins.json:LivingEntityAccessor,pl:mixin:APP:curioofundying.mixins.json:LivingEntityMixin,pl:mixin:APP:curios.mixins.json:MixinLivingEntity,pl:mixin:APP:earthmobsmod.mixins.json:LivingEntityMixin,pl:mixin:APP:ecologics.mixins.json:MixinLivingEntity,pl:mixin:APP:enhancedcelestials.mixins.json:MixinLivingEntity,pl:mixin:APP:netherportalfix.mixins.json:LivingEntityAccessor,pl:mixin:APP:quark.mixins.json:LivingEntityAccessor,pl:mixin:APP:radium.mixins.json:alloc.enum_values.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.collisions.unpushable_cramming.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_elytra_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_hand_swing.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.fast_powder_snow_check.LivingEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.LivingEntityMixin,pl:mixin:APP:snowyspirit.mixins.json:EntityMixin,pl:mixin:APP:spirit.mixins.json:LivingEntityMixin,pl:mixin:APP:supplementaries.mixins.json:LivingEntityMixin,pl:mixin:A}
	at net.minecraft.world.entity.Mob.m_8119_(Mob.java:307) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:AdditionalAdditions.mixins.json:MobMixin,pl:mixin:APP:biomemakeover-common.mixins.json:MobAccess,pl:mixin:APP:bookshelf.common.mixins.json:entity.AccessorMob,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.MobEntityMixin,pl:mixin:APP:radium.mixins.json:entity.skip_equipment_change_check.MobEntityMixin,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_8647_(ServerLevel.java:652) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
	at net.minecraft.world.level.Level.m_46653_(Level.java:486) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.LevelMixin,pl:mixin:APP:enhancedcelestials.mixins.json:MixinWorld,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.WorldMixin,pl:mixin:APP:radium.mixins.json:world.block_entity_retrieval.WorldMixin,pl:mixin:APP:radium.mixins.json:world.chunk_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_block_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_height.WorldMixin,pl:mixin:APP:sereneseasons.mixins.json:MixinLevel,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_184063_(ServerLevel.java:319) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
	at net.minecraft.world.level.entity.EntityTickList.m_156910_(EntityTickList.java:54) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,re:classloading,pl:mixin:APP:radium.mixins.json:collections.entity_ticking.EntityListMixin,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:299) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
-- Entity being ticked --
Details:
	Entity Type: village_employment:illager_minion (net.mcreator.villageemployment.entity.IllagerMinionEntity)
	Entity ID: 5
	Entity Name: Illager Minion
	Entity\'s Exact location: 439.00, 71.94, 91.00
	Entity\'s Block location: World: (439,71,91), Section: (at 7,7,11 in 27,4,5; chunk contains blocks 432,-64,80 to 447,319,95), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,-64,0 to 511,319,511)
	Entity\'s Momentum: 0.00, 0.00, 0.00
	Entity\'s Passengers: []
	Entity\'s Vehicle: null
Stacktrace:
	at net.minecraft.world.level.Level.m_46653_(Level.java:486) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:mixin,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.LevelMixin,pl:mixin:APP:enhancedcelestials.mixins.json:MixinWorld,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.WorldMixin,pl:mixin:APP:radium.mixins.json:world.block_entity_retrieval.WorldMixin,pl:mixin:APP:radium.mixins.json:world.chunk_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_block_access.WorldMixin,pl:mixin:APP:radium.mixins.json:world.inline_height.WorldMixin,pl:mixin:APP:sereneseasons.mixins.json:MixinLevel,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_184063_(ServerLevel.java:319) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
	at net.minecraft.world.level.entity.EntityTickList.m_156910_(EntityTickList.java:54) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,re:classloading,pl:mixin:APP:radium.mixins.json:collections.entity_ticking.EntityListMixin,pl:mixin:A}
	at net.minecraft.server.level.ServerLevel.m_8793_(ServerLevel.java:299) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,re:classloading,pl:accesstransformer:B,xf:fml:sereneseasons:temperature_transformer,pl:mixin:APP:biomemakeover-common.mixins.json:multipart.ServerLevelMixin,pl:mixin:APP:blueprint.mixins.json:ServerLevelMixin,pl:mixin:APP:crafttweaker.mixins.json:common.transform.world.level.MixinServerLevel,pl:mixin:APP:enhancedcelestials.mixins.json:MixinServerWorld,pl:mixin:APP:friendsandfoes-common.mixins.json:ServerWorldAccessor,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevellMixin,pl:mixin:APP:immersive_weathering.mixins.json:ServerLevelSnowMixin,pl:mixin:APP:byg.mixins.json:common.world.MixinServerLevel,pl:mixin:APP:radium.mixins.json:ai.nearby_entity_tracking.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:alloc.chunk_random.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:chunk.entity_class_groups.ServerWorldAccessor,pl:mixin:APP:radium.mixins.json:entity.inactive_navigations.ServerWorldMixin,pl:mixin:APP:radium.mixins.json:profiler.ServerWorldMixin,pl:mixin:APP:supplementaries.mixins.json:ServerLevelMixin,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:902) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:326) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B}
	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:842) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:685) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:261) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at java.lang.Thread.run(Thread.java:833) [?:?] {re:mixin}


-- Affected level --
Details:
	All players: 0 total; []
	Chunk stats: 2209
	Level dimension: minecraft:overworld
	Level spawn location: World: (461,66,120), Section: (at 13,2,8 in 28,4,7; chunk contains blocks 448,-64,112 to 463,319,127), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,-64,0 to 511,319,511)
	Level time: 336463 game time, 1000 day time
	Level name: world
	Level game mode: Game mode: survival (ID 0). Hardcore: false. Cheats: false
	Level weather: Rain time: 1 (now: false), thunder time: 1 (now: false)
	Known server brands: forge
	Level was modded: true
	Level storage version: 0x04ABD - Anvil
Stacktrace:
	at net.minecraft.server.MinecraftServer.m_5703_(MinecraftServer.java:902) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.dedicated.DedicatedServer.m_5703_(DedicatedServer.java:326) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B}
	at net.minecraft.server.MinecraftServer.m_5705_(MinecraftServer.java:842) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_130011_(MinecraftServer.java:685) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at net.minecraft.server.MinecraftServer.m_177918_(MinecraftServer.java:261) ~[server-1.18.2-20220404.173914-srg.jar%23199!/:?] {re:mixin,pl:accesstransformer:B,re:computing_frames,pl:accesstransformer:B,re:classloading,pl:accesstransformer:B,pl:mixin:APP:balm.mixins.json:MinecraftServerMixin,pl:mixin:APP:crafttweaker.mixins.json:common.access.server.AccessMinecraftServer,pl:mixin:APP:mixin.excavated_variants.json:IMinecraftServerMixin,pl:mixin:APP:byg.mixins.json:access.MinecraftServerAccess,pl:mixin:APP:byg.mixins.json:server.MixinMinecraftServer,pl:mixin:APP:paxi.mixins.json:MixinMinecraftServer,pl:mixin:A}
	at java.lang.Thread.run(Thread.java:833) [?:?] {re:mixin}


-- System Details --
Details:
	Minecraft Version: 1.18.2
	Minecraft Version ID: 1.18.2
	Operating System: Linux (amd64) version 5.4.0-100-generic
	Java Version: 17.0.1, Oracle Corporation
	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode, sharing), Oracle Corporation
	Memory: 837241864 bytes (798 MiB) / 2831155200 bytes (2700 MiB) up to 2831155200 bytes (2700 MiB)
	CPUs: 4
	Processor Vendor: AuthenticAMD
	Processor Name: AMD EPYC 7401P 24-Core Processor
	Identifier: AuthenticAMD Family 23 Model 1 Stepping 2
	Microarchitecture: Zen
	Frequency (GHz): -0.00
	Number of physical packages: 1
	Number of physical CPUs: 24
	Number of logical CPUs: 48
	Graphics card #0 name: unknown
	Graphics card #0 vendor: unknown
	Graphics card #0 VRAM (MB): 0.00
	Graphics card #0 deviceId: unknown
	Graphics card #0 versionInfo: unknown
	Virtual memory max (MB): 129934.37
	Virtual memory used (MB): 128143.55
	Swap memory total (MB): 1024.00
	Swap memory used (MB): 17.79
	JVM Flags: 3 total; -XX:MaxMetaspaceSize=400M -Xmx2700M -Xms1350M
	Server Running: true
	Player Count: 0 / 20; []
	Data Packs: vanilla, mod:betterdungeons, mod:blue_skies (incompatible), mod:netherportalfix (incompatible), mod:cftlc, mod:additionalbanners (incompatible), mod:incontrol (incompatible), mod:stalwart_dungeons, mod:bambooeverything (incompatible), mod:kleeslabs (incompatible), mod:villagernames, mod:duckling (incompatible), mod:xaeroworldmap, mod:citadel (incompatible), mod:alexsmobs (incompatible), mod:yungsapi, mod:feature_nbt_deadlock_be_gone (incompatible), mod:upgradednetherite_items (incompatible), mod:bookshelf (incompatible), mod:guardvillagers (incompatible), mod:twigs (incompatible), mod:additionalstructures, mod:bygonenether (incompatible), mod:balm (incompatible), mod:carryon (incompatible), mod:cloth_config (incompatible), mod:dragonmounts (incompatible), mod:absentbydesign, mod:revampedwolf, mod:upgradednetherite (incompatible), mod:structure_gel, mod:corpse (incompatible), mod:chipped (incompatible), mod:farmersdelight (incompatible), mod:repurposed_structures, mod:morevillagers (incompatible), mod:bcc (incompatible), mod:verdure (incompatible), mod:simpleshops (incompatible), mod:geode (incompatible), mod:skinnedlanterns (incompatible), mod:supermartijn642corelib, mod:yungsbridges, mod:spark (incompatible), mod:illager_plushies, mod:curios (incompatible), mod:cataclysm (incompatible), mod:patchouli (incompatible), mod:corail_woodcutter, mod:collective, mod:snowpig (incompatible), mod:yungsextras, mod:villagertools (incompatible), mod:betterthirdperson (incompatible), mod:elevatorid, mod:betterstrongholds, mod:runelic (incompatible), mod:starterkit, mod:spirit (incompatible), mod:architectury (incompatible), mod:curiouselytra (incompatible), mod:biomeinfo (incompatible), mod:aiimprovements (incompatible), mod:adorn (incompatible), mod:bettershields (incompatible), mod:fallingtree, mod:enchantwithmob, mod:easyshulkerboxes (incompatible), mod:mavm (incompatible), mod:bettermineshafts, mod:voidtotem (incompatible), mod:veinmining (incompatible), mod:geckolib3 (incompatible), mod:bettermodsbutton (incompatible), mod:darkpaintings (incompatible), mod:tradingpost (incompatible), mod:radium (incompatible), mod:clienttweaks (incompatible), mod:ftblibrary (incompatible), mod:ftbteams (incompatible), mod:biomemakeover (incompatible), mod:culturaldelights, mod:configmenusforge (incompatible), mod:additionallanterns (incompatible), mod:nourished_nether, mod:itemfilters (incompatible), mod:easymagic (incompatible), mod:nourished_end, mod:jei (incompatible), mod:visualworkbench (incompatible), mod:universalbonemeal (incompatible), mod:graveyard (incompatible), mod:steves_vanilla, mod:attributefix (incompatible), mod:conjurer_illager, mod:goblintraders (incompatible), mod:caelus (incompatible), mod:paxi, mod:immersive_weathering (incompatible), mod:waystones (incompatible), mod:merchantmarkers (incompatible), mod:clumps (incompatible), mod:village_employment, mod:comforts (incompatible), mod:naturescompass (incompatible), mod:additionalbars (incompatible), mod:storagenetwork (incompatible), mod:sereneseasons (incompatible), mod:decorative_blocks, mod:curioofundying (incompatible), mod:badmobs, mod:more_babies (incompatible), mod:snuffles (incompatible), mod:blueprint (incompatible), mod:crafttweaker (incompatible), mod:ftbchunks (incompatible), mod:forge (incompatible), mod:curiouslights, mod:forgottenrecipes (incompatible), mod:friendsandfoes (incompatible), mod:selene (incompatible), mod:supplementaries (incompatible), mod:dungeons_arise, mod:radon (incompatible), mod:pigsteel (incompatible), mod:dynamic_asset_generator (incompatible), mod:excavated_variants (incompatible), mod:terrablender (incompatible), mod:ftbquests (incompatible), mod:magnumtorch (incompatible), mod:jade, mod:additionaladditions (incompatible), mod:snowyspirit (incompatible), mod:another_furniture, mod:nethersdelight (incompatible), mod:rocks, mod:paintings (incompatible), mod:iceberg (incompatible), mod:farmersrespite (incompatible), mod:xaerominimap, mod:polymorph (incompatible), mod:autoreglib (incompatible), mod:akashictome (incompatible), mod:quark (incompatible), mod:ecologics (incompatible), mod:warden_and_sculk, mod:earthmobsmod, mod:backpacked (incompatible), mod:inventoryhud (incompatible), mod:blocksplus (incompatible), mod:upgradedcore (incompatible), mod:hunterillager, mod:zillagersweararmor (incompatible), mod:creeperoverhaul (incompatible), mod:ferritecore (incompatible), mod:upgradednetherite_ultimate (incompatible), mod:puzzleslib (incompatible), mod:enhancedcelestials (incompatible), mod:byg (incompatible), mod:aquaculture (incompatible), mod:xpbook (incompatible), Immersive Weathering Generated Pack, Repurposed_Structures-Better_Dungeons_v2.zip (incompatible), Repurposed_Structures-Better_Strongholds_v3.zip, Repurposed_Structures-Farmers_Delight_v3.zip (incompatible), Repurposed_Structures-Friends_And_Foes-v1.zip, Repurposed_Structures-More_Villagers_v6.zip, Snowyspirit Virtual Resourcepack, Supplementaries Generated Pack, dynamic_asset_generator:data (incompatible), ichphilipp-s-endcity-vanilla-v1-1-1-18-1-e640.zip
	World Generation: Stable
	Is Modded: Definitely; Server brand changed to \'forge\'
	Type: Dedicated Server (map_server.txt)
	ModLauncher: 9.1.3+9.1.3+main.9b69c82a
	ModLauncher launch target: forgeserver
	ModLauncher naming: srg
	ModLauncher services:
		 mixin PLUGINSERVICE
		 eventbus PLUGINSERVICE
		 slf4jfixer PLUGINSERVICE
		 object_holder_definalize PLUGINSERVICE
		 runtime_enum_extender PLUGINSERVICE
		 capability_token_subclass PLUGINSERVICE
		 accesstransformer PLUGINSERVICE
		 runtimedistcleaner PLUGINSERVICE
		 mixin TRANSFORMATIONSERVICE
		 fml TRANSFORMATIONSERVICE
	FML Language Providers:
		minecraft@1.0
		kotlinforforge@3.3.2
		javafml@null
	Mod List:
		YungsBetterDungeons-1.18.2-Forge-2.1.0.jar        |YUNG\'s Better Dungeons        |betterdungeons                |1.18.2-Forge-2.1.0  |DONE      |Manifest: NOSIGNATURE
		blue_skies-1.18.2-1.3.12.jar                      |Blue Skies                    |blue_skies                    |1.3.12              |DONE      |Manifest: NOSIGNATURE
		netherportalfix-forge-1.18-9.0.0.jar              |NetherPortalFix               |netherportalfix               |9.0.0               |DONE      |Manifest: NOSIGNATURE
		cftlc-1.0.1+1.18.2.jar                            |Creatures from the Lush Cave  |cftlc                         |1.0.1               |DONE      |Manifest: NOSIGNATURE
		AdditionalBanners-Forge-1.18.2-7.0.4.jar          |AdditionalBanners             |additionalbanners             |7.0.4               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		incontrol-1.18-6.0.9.jar                          |InControl                     |incontrol                     |1.18-6.0.9          |DONE      |Manifest: NOSIGNATURE
		stalwart-dungeons-1.18.2-1.2.2.jar                |Stalwart Dungeons             |stalwart_dungeons             |1.2.2               |DONE      |Manifest: NOSIGNATURE
		bambooeverything-1.2.7-build.14+mc1.18.2.jar      |Bamboo Everything             |bambooeverything              |1.2.7-build.14+mc1.1|DONE      |Manifest: NOSIGNATURE
		kleeslabs-forge-1.18.1-11.1.0.jar                 |KleeSlabs                     |kleeslabs                     |11.1.0              |DONE      |Manifest: NOSIGNATURE
		villagernames_1.18.2-3.5.jar                      |Villager Names                |villagernames                 |3.5                 |DONE      |Manifest: NOSIGNATURE
		duckling-1.0.5-forge.jar                          |Duckling                      |duckling                      |1.0.5               |DONE      |Manifest: NOSIGNATURE
		XaerosWorldMap_1.22.0_Forge_1.18.2.jar            |Xaero\'s World Map             |xaeroworldmap                 |1.22.0              |DONE      |Manifest: NOSIGNATURE
		citadel-1.11.3-1.18.2.jar                         |Citadel                       |citadel                       |1.11.3              |DONE      |Manifest: NOSIGNATURE
		alexsmobs-1.18.3.jar                              |Alex\'s Mobs                   |alexsmobs                     |1.18.3              |DONE      |Manifest: NOSIGNATURE
		YungsApi-1.18.2-Forge-2.0.8.jar                   |YUNG\'s API                    |yungsapi                      |1.18.2-Forge-2.0.8  |DONE      |Manifest: NOSIGNATURE
		feature_nbt_deadlock_be_gone_forge-2.0.0+1.18.2.ja|Feature NBT Deadlock Be Gone  |feature_nbt_deadlock_be_gone  |2.0.0+1.18.2        |DONE      |Manifest: NOSIGNATURE
		upgradednetherite_items-1.18.2-3.2.0.0-release.jar|Upgraded Netherite : Items    |upgradednetherite_items       |1.18.2-3.2.0.0-relea|DONE      |Manifest: NOSIGNATURE
		Bookshelf-Forge-1.18.2-13.0.13.jar                |Bookshelf                     |bookshelf                     |13.0.13             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		guardvillagers-1.**.**.**.**.2.jar                   |Guard Villagers               |guardvillagers                |1.4.2               |DONE      |Manifest: NOSIGNATURE
		twigs-forge-1.1.4-patch3+1.18.2.jar               |Twigs                         |twigs                         |1.1.4-patch1+1.18.2 |DONE      |Manifest: NOSIGNATURE
		Rex\'s-AdditionalStructures-1.18.2-(v.3.0.3).jar   |Additional Structures         |additionalstructures          |3.0.3               |DONE      |Manifest: NOSIGNATURE
		bygonenether-1.1.2-1.18.2.jar                     |Bygone Nether                 |bygonenether                  |1.1.2               |DONE      |Manifest: NOSIGNATURE
		balm-3.0.3+0.jar                                  |Balm                          |balm                          |3.0.3+0             |DONE      |Manifest: NOSIGNATURE
		carryon-1.18.2-1.17.0.8.jar                       |Carry On                      |carryon                       |**.**.**.**            |DONE      |Manifest: NOSIGNATURE
		cloth-config-6.2.62-forge.jar                     |Cloth Config v4 API           |cloth_config                  |6.2.62              |DONE      |Manifest: NOSIGNATURE
		dragonmounts-1.18.2-BETA_1.1.0b1.jar              |Dragon Mounts: Legacy         |dragonmounts                  |1.18.2-BETA_1.1.0b1 |DONE      |Manifest: NOSIGNATURE
		absentbydesign-1.18.2-1.6.2.jar                   |Absent By Design Mod          |absentbydesign                |1.18.2-1.6.2        |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		revampedwolf-1.18.2-1.2.0.jar                     |RevampedWolf                  |revampedwolf                  |1.18.2-1.2.0        |DONE      |Manifest: NOSIGNATURE
		upgradednetherite-1.18.2-4.2.0.6-release.jar      |Upgraded Netherite            |upgradednetherite             |1.18.2-4.2.0.6-relea|DONE      |Manifest: NOSIGNATURE
		structure_gel-1.18.2-2.3.0.jar                    |Structure Gel API             |structure_gel                 |2.3.0               |DONE      |Manifest: NOSIGNATURE
		corpse-1.18.2-1.0.1.jar                           |Corpse                        |corpse                        |1.18.2-1.0.1        |DONE      |Manifest: NOSIGNATURE
		chipped-1.18.2-1.2.1-forge.jar                    |Chipped                       |chipped                       |1.18.2-1.2.1-forge  |DONE      |Manifest: NOSIGNATURE
		FarmersDelight-1.18.2-1.1.1.jar                   |Farmer\'s Delight              |farmersdelight                |1.18.2-1.1.1        |DONE      |Manifest: NOSIGNATURE
		repurposed_structures_forge-5.1.9+1.18.2.jar      |Repurposed Structures         |repurposed_structures         |5.1.9+1.18.2        |DONE      |Manifest: NOSIGNATURE
		morevillagers-FORGE-1.18.2-3.2.0.jar              |More Villagers                |morevillagers                 |3.2.0               |DONE      |Manifest: NOSIGNATURE
		BetterCompatibilityChecker-1.1.14-build.26+mc1.18.|Better Compatibility Checker  |bcc                           |1.1.14-build.26+mc1.|DONE      |Manifest: NOSIGNATURE
		verdure-1.18.2-1.1.2.jar                          |Verdure                       |verdure                       |1.1.2               |DONE      |Manifest: NOSIGNATURE
		simpleshops-1.2.1.jar                             |Simple Shops                  |simpleshops                   |1.1.4               |DONE      |Manifest: NOSIGNATURE
		Geode+_v1.0.1+1.18.2.jar                          |Geode+                        |geode                         |1.0.1               |DONE      |Manifest: NOSIGNATURE
		skinned_lanterns-1.18.2-1.3.4.jar                 |Skinned Lanterns              |skinnedlanterns               |1.18.2-1.3.4        |DONE      |Manifest: NOSIGNATURE
		supermartijn642corelib-1.0.18-forge-mc1.18.jar    |SuperMartijn642\'s Core Lib    |supermartijn642corelib        |1.0.18              |DONE      |Manifest: NOSIGNATURE
		YungsBridges-1.18.2-Forge-2.1.0.jar               |YUNG\'s Bridges                |yungsbridges                  |1.18.2-Forge-2.1.0  |DONE      |Manifest: NOSIGNATURE
		spark-1.9.1-forge.jar                             |spark                         |spark                         |1.9.1               |DONE      |Manifest: NOSIGNATURE
		Illager Plushies 1.1.5 1.18.2.jar                 |Illager Plushies              |illager_plushies              |1.1.5               |DONE      |Manifest: NOSIGNATURE
		curios-forge-1.18.2-5.0.7.0.jar                   |Curios API                    |curios                        |1.18.2-5.0.7.0      |DONE      |Manifest: NOSIGNATURE
		Cataclysm-0.18 -congfig fix.jar                   |Cataclysm Mod                 |cataclysm                     |1.0                 |DONE      |Manifest: NOSIGNATURE
		Patchouli-1.18.2-67.jar                           |Patchouli                     |patchouli                     |1.18.2-67           |DONE      |Manifest: NOSIGNATURE
		corail_woodcutter-1.18.2-2.3.3.jar                |Corail Woodcutter             |corail_woodcutter             |2.3.3               |DONE      |Manifest: NOSIGNATURE
		collective-1.18.2-4.25.jar                        |Collective                    |collective                    |4.25                |DONE      |Manifest: NOSIGNATURE
		Snow_Pig-1.18.2-4.2.0.jar                         |Snow Pig                      |snowpig                       |1.18.2-4.2.0        |DONE      |Manifest: NOSIGNATURE
		YungsExtras-1.18.2-Forge-2.1.0.jar                |YUNG\'s Extras                 |yungsextras                   |1.18.2-Forge-2.1.0  |DONE      |Manifest: NOSIGNATURE
		villagertools-1.18-1.0.2.jar                      |villagertools                 |villagertools                 |1.18-1.0.2          |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		BetterThirdPerson-Forge-1.18.2-1.7.3.jar          |Better Third Person           |betterthirdperson             |1.7.3               |DONE      |Manifest: NOSIGNATURE
		elevatorid-1.18.2-1.8.4.jar                       |Elevator Mod                  |elevatorid                    |1.18.2-1.8.4        |DONE      |Manifest: NOSIGNATURE
		YungsBetterStrongholds-1.18.2-Forge-2.1.1.jar     |YUNG\'s Better Strongholds     |betterstrongholds             |1.18.2-Forge-2.1.1  |DONE      |Manifest: NOSIGNATURE
		Runelic-Forge-1.18.2-11.0.1.jar                   |Runelic                       |runelic                       |11.0.1              |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		starterkit_1.18.2-3.2.jar                         |Starter Kit                   |starterkit                    |3.2                 |DONE      |Manifest: NOSIGNATURE
		Spirit-forge-1.18.2-1.3.0.jar                     |Spirit                        |spirit                        |1.3.0               |DONE      |Manifest: NOSIGNATURE
		architectury-4.4.68.jar                           |Architectury                  |architectury                  |4.4.68              |DONE      |Manifest: NOSIGNATURE
		curiouselytra-forge-1.18.1-5.0.1.0.jar            |Curious Elytra                |curiouselytra                 |1.18.1-5.0.1.0      |DONE      |Manifest: NOSIGNATURE
		biomeinfo-1.18.2-1.4.jar                          |BiomeInfo                     |biomeinfo                     |1.4                 |DONE      |Manifest: NOSIGNATURE
		AI-Improvements-1.18.2-0.5.0.jar                  |AI-Improvements               |aiimprovements                |0.5.0               |DONE      |Manifest: NOSIGNATURE
		Adorn-3.5.0+1.18.2-forge.jar                      |Adorn                         |adorn                         |3.5.0+1.18.2        |DONE      |Manifest: NOSIGNATURE
		BetterShieldsMC1.18.1-1.0.1.jar                   |Better Shields                |bettershields                 |1.0.1               |DONE      |Manifest: NOSIGNATURE
		FallingTree-1.18.2-3.5.1.jar                      |FallingTree                   |fallingtree                   |3.5.1               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		enchantwithmob-1.18.2-4.1.0.jar                   |Enchant With Mob              |enchantwithmob                |1.18.2-4.1.0        |DONE      |Manifest: NOSIGNATURE
		EasyShulkerBoxes-v3.1.1-1.18.2-Forge.jar          |Easy Shulker Boxes            |easyshulkerboxes              |3.1.1               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		mavm-forge-1.18.1-1.0.7a.jar                      |More Axolotl Variants Mod     |mavm                          |1.0.7a              |DONE      |Manifest: NOSIGNATURE
		YungsBetterMineshafts-1.18.2-Forge-2.1.3.jar      |YUNG\'s Better Mineshafts      |bettermineshafts              |1.18.2-Forge-2.1.3  |DONE      |Manifest: NOSIGNATURE
		voidtotem-forge-1.18.2-1.3.1.jar                  |Void Totem                    |voidtotem                     |1.18.2-1.3.1        |DONE      |Manifest: NOSIGNATURE
		veinmining-forge-1.18.2-0.18.jar                  |Vein Mining                   |veinmining                    |1.18.2-0.18         |DONE      |Manifest: NOSIGNATURE
		geckolib-1.18-forge-3.0.18.jar                    |GeckoLib                      |geckolib3                     |3.0.18              |DONE      |Manifest: NOSIGNATURE
		BetterModsButton-v3.2.2-1.18.2-Forge.jar          |Better Mods Button            |bettermodsbutton              |3.2.2               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		DarkPaintings-Forge-1.18.2-10.0.3.jar             |DarkPaintings                 |darkpaintings                 |10.0.3              |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		TradingPost-v3.2.0-1.18.2-Forge.jar               |Trading Post                  |tradingpost                   |3.2.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		radium-0.7.10.jar                                 |Radium                        |radium                        |0.7.10              |DONE      |Manifest: NOSIGNATURE
		clienttweaks-forge-1.18.1-7.1.0.jar               |Client Tweaks                 |clienttweaks                  |7.1.0               |DONE      |Manifest: NOSIGNATURE
		ftb-library-forge-1802.3.6-build.119.jar          |FTB Library                   |ftblibrary                    |1802.3.6-build.119  |DONE      |Manifest: NOSIGNATURE
		ftb-teams-forge-1802.2.6-build.51.jar             |FTB Teams                     |ftbteams                      |1802.2.6-build.51   |DONE      |Manifest: NOSIGNATURE
		biomemakeover-FORGE-1.18.2-1.4.23.jar             |Biome Makeover                |biomemakeover                 |1.18.2-1.4.23       |DONE      |Manifest: NOSIGNATURE
		culturaldelights-1.18.2-0.11.jar                  |Cultural Delights             |culturaldelights              |1.18.2-0.11         |DONE      |Manifest: NOSIGNATURE
		ConfigMenusForge-v3.2.0-1.18.2-Forge.jar          |Config Menus for Forge        |configmenusforge              |3.2.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		additionallanterns-1.0.1-mc1.18.jar               |Additional Lanterns           |additionallanterns            |1.0.1               |DONE      |Manifest: NOSIGNATURE
		NourishedNetherV12.jar                            |Nourished Nether              |nourished_nether              |1.1.3               |DONE      |Manifest: NOSIGNATURE
		item-filters-forge-1802.2.7-build.27.jar          |Item Filters                  |itemfilters                   |1802.2.7-build.27   |DONE      |Manifest: NOSIGNATURE
		EasyMagic-v3.3.0-1.18.2-Forge.jar                 |Easy Magic                    |easymagic                     |3.3.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		Enlightened End BB V1.3.jar                       |Enlightened End               |nourished_end                 |1.1.0               |DONE      |Manifest: NOSIGNATURE
		jei-1.18.2-9.7.0.195.jar                          |Just Enough Items             |jei                           |**.**.**.**           |DONE      |Manifest: NOSIGNATURE
		VisualWorkbench-v3.3.0-1.18.2-Forge.jar           |Visual Workbench              |visualworkbench               |3.3.0               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		UniversalBoneMeal-v3.0.5-1.18.2-Forge.jar         |Universal Bone Meal           |universalbonemeal             |3.0.5               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		The_Graveyard_1.8_(FORGE)_for_1.18.2.jar          |The Graveyard                 |graveyard                     |1.8                 |DONE      |Manifest: NOSIGNATURE
		Steve\'s_Vanilla_v0.3.9+1.18.2.jar                 |Steve\'s Vanilla               |steves_vanilla                |0.3.9               |DONE      |Manifest: NOSIGNATURE
		AttributeFix-Forge-1.18.2-14.0.2.jar              |AttributeFix                  |attributefix                  |14.0.2              |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		the-conjurer-1.18.2-1.1.1.jar                     |The Conjurer                  |conjurer_illager              |1.1.1               |DONE      |Manifest: NOSIGNATURE
		goblintraders-1.7.2-1.18.2.jar                    |Goblin Traders                |goblintraders                 |1.7.2               |DONE      |Manifest: NOSIGNATURE
		caelus-forge-1.18.1-3.0.0.2.jar                   |Caelus API                    |caelus                        |1.18.1-3.0.0.2      |DONE      |Manifest: NOSIGNATURE
		Paxi-1.18.2-Forge-2.0.jar                         |Paxi                          |paxi                          |1.18.2-Forge-2.0    |DONE      |Manifest: NOSIGNATURE
		immersive_weathering-1.18.2-1.2.10.jar            |Immersive Weathering          |immersive_weathering          |1.18.2-1.2.10       |DONE      |Manifest: NOSIGNATURE
		waystones-forge-1.18.2-10.0.0.jar                 |Waystones                     |waystones                     |10.0.0              |DONE      |Manifest: NOSIGNATURE
		MerchantMarkers-1.18.2-1.2.0.jar                  |Merchant Markers              |merchantmarkers               |1.2.0               |DONE      |Manifest: NOSIGNATURE
		Clumps-forge-1.18.2-8.0.0+8.jar                   |Clumps                        |clumps                        |8.0.0+8             |DONE      |Manifest: NOSIGNATURE
		village-employment-1.18.2-1.5.1.jar               |Village Employment            |village_employment            |1.5.1               |DONE      |Manifest: NOSIGNATURE
		comforts-forge-1.18.2-5.0.0.4.jar                 |Comforts                      |comforts                      |1.18.2-5.0.0.4      |DONE      |Manifest: NOSIGNATURE
		NaturesCompass-1.18.2-1.9.5-forge.jar             |Nature\'s Compass              |naturescompass                |1.18.2-1.9.5-forge  |DONE      |Manifest: NOSIGNATURE
		additionalbars-3.0.1-beta+1.18.2.jar              |Additional Bars               |additionalbars                |3.0.1-beta          |DONE      |Manifest: NOSIGNATURE
		SimpleStorageNetwork-1.18.2-1.6.1.jar             |Simple Storage Network        |storagenetwork                |1.18.2-1.6.1        |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		SereneSeasons-1.18.2-7.0.0.15.jar                 |Serene Seasons                |sereneseasons                 |0.0NONE             |DONE      |Manifest: NOSIGNATURE
		Decorative Blocks-forge-1.18.2-2.1.0.jar          |Decorative Blocks             |decorative_blocks             |2.1.0               |DONE      |Manifest: NOSIGNATURE
		curioofundying-forge-1.18-5.3.0.0.jar             |Curio of Undying              |curioofundying                |1.18-5.3.0.0        |DONE      |Manifest: NOSIGNATURE
		BadMobs-1.18.2-13.01.jar                          |BadMobs                       |badmobs                       |13.01               |DONE      |Manifest: NOSIGNATURE
		More Babies-forge-1.18.1-0.5.2.jar                |More Babies                   |more_babies                   |0.5.2               |DONE      |Manifest: NOSIGNATURE
		snuffles-1.0.2.jar                                |Snuffles                      |snuffles                      |1.0.2               |DONE      |Manifest: NOSIGNATURE
		blueprint-1.18.2-5.3.2.jar                        |Blueprint                     |blueprint                     |5.3.2               |DONE      |Manifest: NOSIGNATURE
		CraftTweaker-forge-1.18.2-9.1.143.jar             |CraftTweaker                  |crafttweaker                  |9.1.143             |DONE      |Manifest: NOSIGNATURE
		ftb-chunks-forge-1802.3.6-build.145.jar           |FTB Chunks                    |ftbchunks                     |1802.3.6-build.145  |DONE      |Manifest: NOSIGNATURE
		forge-1.18.2-40.1.25-universal.jar                |Forge                         |forge                         |40.1.25             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		curiouslights-forge-1.1.0+1.18.2.jar              |Curious Lights                |curiouslights                 |1.1.0+1.18.2        |DONE      |Manifest: NOSIGNATURE
		forgottenrecipes-forge-1.18.1-1.0.0.jar           |Forgotten Recipes             |forgottenrecipes              |1.18.1-1.0.0        |DONE      |Manifest: NOSIGNATURE
		friendsandfoes-forge-mc1.18.2-1.4.0.jar           |Friends&Foes                  |friendsandfoes                |1.4.0               |DONE      |Manifest: NOSIGNATURE
		selene-1.18.2-1.16.3.jar                          |Selene                        |selene                        |1.18.2-1.16.3       |DONE      |Manifest: NOSIGNATURE
		supplementaries-1.18.2-1.4.0.jar                  |Supplementaries               |supplementaries               |1.18.2-1.4.0        |DONE      |Manifest: NOSIGNATURE
		DungeonsArise-1.18.2-2.1.50d-beta.jar             |When Dungeons Arise           |dungeons_arise                |2.1.50d-1.18.2      |DONE      |Manifest: NOSIGNATURE
		radon-0.8.1.jar                                   |Radon                         |radon                         |0.8.1               |DONE      |Manifest: NOSIGNATURE
		pigsteel-1.18.2-3.1.0.jar                         |Pigsteel Mod                  |pigsteel                      |1.18.2-3.1.0        |DONE      |Manifest: NOSIGNATURE
		dynamic_asset_generator-forge-1.18.2-0.6.3.jar    |DynamicAssetGenerator         |dynamic_asset_generator       |0.6.3               |DONE      |Manifest: NOSIGNATURE
		excavated_variants-forge-1.18.2-0.6.2.jar         |Excavated Variants            |excavated_variants            |0.6.2               |DONE      |Manifest: NOSIGNATURE
		TerraBlender-forge-1.18.2-1.1.0.101.jar           |TerraBlender                  |terrablender                  |1.18.2-1.1.0.101    |DONE      |Manifest: NOSIGNATURE
		ftb-quests-forge-1802.3.8-build.101.jar           |FTB Quests                    |ftbquests                     |1802.3.8-build.101  |DONE      |Manifest: NOSIGNATURE
		MagnumTorch-v3.1.3-1.18.2-Forge.jar               |Magnum Torch                  |magnumtorch                   |3.1.3               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		Jade-1.18.2-5.2.0.jar                             |Jade                          |jade                          |5.2.0               |DONE      |Manifest: NOSIGNATURE
		additionaladditions-4.0.3.jar                     |Additional Additions          |additionaladditions           |4.0.3               |DONE      |Manifest: NOSIGNATURE
		snowyspirit-1.18.2-1.3.1.jar                      |Snowy Spirit                  |snowyspirit                   |1.18.2-1.3.1        |DONE      |Manifest: NOSIGNATURE
		another_furniture-1.18.2-1.0.3.jar                |Another Furniture Mod         |another_furniture             |1.0.3               |DONE      |Manifest: NOSIGNATURE
		NethersDelight-1.18.2-2.2.0.jar                   |Nethers Delight               |nethersdelight                |2.2                 |DONE      |Manifest: NOSIGNATURE
		ThisRocks-1.18.2-1.0.2.jar                        |This Rocks! (Forge)           |rocks                         |1.0.2               |DONE      |Manifest: NOSIGNATURE
		Paintings-forge-1.18.2-9.1.2.1.jar                |Paintings ++                  |paintings                     |**.**.**.**             |DONE      |Manifest: NOSIGNATURE
		Iceberg-1.18.2-1.0.44.jar                         |Iceberg                       |iceberg                       |1.0.44              |DONE      |Manifest: NOSIGNATURE
		FarmersRespite-1.18.2-1.2.0.jar                   |Farmer\'s Respite              |farmersrespite                |1.18.1-1.2.0        |DONE      |Manifest: NOSIGNATURE
		Xaeros_Minimap_22.8.2_Forge_1.18.2.jar            |Xaero\'s Minimap               |xaerominimap                  |22.8.2              |DONE      |Manifest: NOSIGNATURE
		polymorph-forge-1.18.2-0.44.jar                   |Polymorph                     |polymorph                     |1.18.2-0.44         |DONE      |Manifest: NOSIGNATURE
		AutoRegLib-1.7-53.jar                             |AutoRegLib                    |autoreglib                    |1.7-53              |DONE      |Manifest: NOSIGNATURE
		AkashicTome-1.5-20.jar                            |Akashic Tome                  |akashictome                   |1.5-20              |DONE      |Manifest: NOSIGNATURE
		Quark-3.2-357.jar                                 |Quark                         |quark                         |3.2-357             |DONE      |Manifest: NOSIGNATURE
		ecologics-FORGE-1.18.2-1.6.7.jar                  |Ecologics                     |ecologics                     |1.6.7               |DONE      |Manifest: NOSIGNATURE
		warden_and_sculk-2.0.0.jar                        |Warden and Sculk              |warden_and_sculk              |2.0.0               |DONE      |Manifest: NOSIGNATURE
		EarthMobs-1.18.2-1.0.0.jar                        |Earth Mobs Mod                |earthmobsmod                  |1.18.2-1.0.0        |DONE      |Manifest: NOSIGNATURE
		backpacked-2.1.6-1.18.2.jar                       |Backpacked                    |backpacked                    |2.1.6               |DONE      |Manifest: NOSIGNATURE
		InventoryHud_[1.18].forge-3.4.4.jar               |Inventory HUD+(Forge edition) |inventoryhud                  |3.4.4               |DONE      |Manifest: NOSIGNATURE
		Blocks + 1.18.1 - 1.4.jar                         |Blocks +                      |blocksplus                    |1.4                 |DONE      |Manifest: NOSIGNATURE
		upgradedcore-1.18.2-3.2.0.0-release.jar           |Upgraded Core                 |upgradedcore                  |1.18.2-3.2.0.0-relea|DONE      |Manifest: NOSIGNATURE
		HunterIllager-1.18.2-4.0.1.jar                    |Hunter Illager                |hunterillager                 |1.18.2-4.0.1        |DONE      |Manifest: NOSIGNATURE
		illagersweararmor-1.1.5.jar                       |Illagers Wear Armor           |zillagersweararmor            |1.1.5               |DONE      |Manifest: NOSIGNATURE
		server-1.18.2-20220404.173914-srg.jar             |Minecraft                     |minecraft                     |1.18.2              |DONE      |Manifest: NOSIGNATURE
		creeperoverhaul-1.18.2-1.3.0-forge.jar            |Creeper Overhaul              |creeperoverhaul               |1.3.0               |DONE      |Manifest: NOSIGNATURE
		ferritecore-4.2.1-forge.jar                       |Ferrite Core                  |ferritecore                   |0.0NONE             |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		upgradednetherite_ultimate-1.18.2-3.2.0.1-release.|Upgraded Netherite : Ultimerit|upgradednetherite_ultimate    |1.18.2-3.2.0.1-relea|DONE      |Manifest: NOSIGNATURE
		PuzzlesLib-v3.3.5-1.18.2-Forge.jar                |Puzzles Lib                   |puzzleslib                    |3.3.5               |DONE      |Manifest: ****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****:****
		Enhanced_Celestials-forge-1.18.2-2.0.7.jar        |Enhanced Celestials           |enhancedcelestials            |2.0.7               |DONE      |Manifest: NOSIGNATURE
		Oh_The_Biomes_You\'ll_Go-forge-1.18.2-1.4-RC-21.jar|Oh The Biomes You\'ll Go       |byg                           |1.4                 |DONE      |Manifest: NOSIGNATURE
		Aquaculture-1.18.2-2.3.6.jar                      |Aquaculture 2                 |aquaculture                   |1.18.2-2.3.6        |DONE      |Manifest: NOSIGNATURE
		xptome-1.18.2-2.1.5.jar                           |XP Tome                       |xpbook                        |2.1.5               |DONE      |Manifest: NOSIGNATURE
	Crash Report UUID: 26150b89-ecf4-4abc-a7a4-6868a3cadba4
	FML: 40.1
	Forge: net.minecraftforge:40.1.25
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingEntityProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Description: Ticking entity
                                            [number:protected] => 5
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => Description:
                        )

                    [counter:protected] => 4
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\RemoveEntitySolution Object
                                (
                                    [name:protected] => Illager Minion
                                    [locationX:protected] => 439
                                    [locationY:protected] => 71.94
                                    [locationZ:protected] => 91
                                )

                        )

                    [iterator:protected] => 0
                    [matchedPattern:protected] => description
                    [type:protected] => village_employment:illager_minion
                    [name:protected] => Illager Minion
                    [locationX:protected] => 439
                    [locationY:protected] => 71.94
                    [locationZ:protected] => 91
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	Minecraft Version: 1.18.2
                                            [number:protected] => 103
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => 	Minecraft Version:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("The entity 'Illager Minion' at the location 439, 71.94, 91 is causing issues while ticking.", $analysis[0]->getMessage());
        $this->assertEquals("Remove the entity 'Illager Minion' at the location 439, 71.94, 91.", $analysis[0][0]->getMessage());

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[1]->getMessage());

    }
}