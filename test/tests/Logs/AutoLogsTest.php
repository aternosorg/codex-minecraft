<?php
/** @noinspection SpellCheckingInspection */

namespace Aternos\Codex\Minecraft\Test\Logs;

use Exception;

/**
 * Class AutoLogsTest
 * 
 * This class is auto-generated by the generate-tests.php script.
 * 
 * @package Aternos\Codex\Minecraft\Test\Logs 
 */
class AutoLogsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return void
     * @throws Exception
     */
    public function test_bedrock_authentication_allowlist_problem(): void
    {
        $log = new TestLog('bedrock/bedrock-authentication-allowlist-problem.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_bedrock_authentication_whitelist_problem(): void
    {
        $log = new TestLog('bedrock/bedrock-authentication-whitelist-problem.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_bedrock_content(): void
    {
        $log = new TestLog('bedrock/bedrock-content.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_bedrock_encrypted_world(): void
    {
        $log = new TestLog('bedrock/bedrock-encrypted-world.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_bedrock_milliseconds(): void
    {
        $log = new TestLog('bedrock/bedrock-milliseconds.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_bedrock_start_19(): void
    {
        $log = new TestLog('bedrock/bedrock-start-19.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_craftbukkit_plugin_enabling(): void
    {
        $log = new TestLog('bukkit/craftbukkit-plugin-enabling.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_craftbukkit_plugin_event(): void
    {
        $log = new TestLog('bukkit/craftbukkit-plugin-event.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_craftbukkit_start_1132(): void
    {
        $log = new TestLog('bukkit/craftbukkit-start-1132.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_craftbukkit_world_duplicate(): void
    {
        $log = new TestLog('bukkit/craftbukkit-world-duplicate.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_glowstone_start_1122(): void
    {
        $log = new TestLog('bukkit/glowstone-start-1122.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_oldcraftbukkit_start_11(): void
    {
        $log = new TestLog('bukkit/oldcraftbukkit-start-11.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_oldspigot_start_11(): void
    {
        $log = new TestLog('bukkit/oldspigot-start-11.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_ambiguous_plugin_name(): void
    {
        $log = new TestLog('bukkit/paper-ambiguous-plugin-name.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_metaspace(): void
    {
        $log = new TestLog('bukkit/paper-metaspace.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_multiple_dependencies(): void
    {
        $log = new TestLog('bukkit/paper-multiple-dependencies.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_plugin_dependency_1_18_2_duplicate(): void
    {
        $log = new TestLog('bukkit/paper-plugin-dependency-1-18-2-duplicate.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_plugin_dependency_1_18_2(): void
    {
        $log = new TestLog('bukkit/paper-plugin-dependency-1-18-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_plugin_dependency_1161(): void
    {
        $log = new TestLog('bukkit/paper-plugin-dependency-1161.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_plugin_disabling(): void
    {
        $log = new TestLog('bukkit/paper-plugin-disabling.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_start_1_8_8(): void
    {
        $log = new TestLog('bukkit/paper-start-1-8-8.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_start_1132(): void
    {
        $log = new TestLog('bukkit/paper-start-1132.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_unsupported_api_version(): void
    {
        $log = new TestLog('bukkit/paper-unsupported-api-version.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_paper_version_downgrade(): void
    {
        $log = new TestLog('bukkit/paper-version-downgrade.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_authme_shutdown(): void
    {
        $log = new TestLog('bukkit/plugin/spigot-authme-shutdown.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_multiverse_load(): void
    {
        $log = new TestLog('bukkit/plugin/spigot-multiverse-load.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_permissionsex_config(): void
    {
        $log = new TestLog('bukkit/plugin/spigot-permissionsex-config.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_chunk_entity_exception(): void
    {
        $log = new TestLog('bukkit/spigot-chunk-entity-exception.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_chunk_load_exception(): void
    {
        $log = new TestLog('bukkit/spigot-chunk-load-exception.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_chunk_load(): void
    {
        $log = new TestLog('bukkit/spigot-chunk-load.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_command_exception(): void
    {
        $log = new TestLog('bukkit/spigot-command-exception.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_plugin_dependency(): void
    {
        $log = new TestLog('bukkit/spigot-plugin-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_plugin_enabling(): void
    {
        $log = new TestLog('bukkit/spigot-plugin-enabling.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_plugin_load(): void
    {
        $log = new TestLog('bukkit/spigot-plugin-load.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_plugin_task_exception(): void
    {
        $log = new TestLog('bukkit/spigot-plugin-task-exception.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_start_1_17_1(): void
    {
        $log = new TestLog('bukkit/spigot-start-1-17-1.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_start_1132(): void
    {
        $log = new TestLog('bukkit/spigot-start-1132.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_spigot_start_1165(): void
    {
        $log = new TestLog('bukkit/spigot-start-1165.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_bungeecord(): void
    {
        $log = new TestLog('bungeecord/bungeecord.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_waterfall(): void
    {
        $log = new TestLog('bungeecord/waterfall.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_1165_origins(): void
    {
        $log = new TestLog('fabric/fabric-1165-origins.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_1165(): void
    {
        $log = new TestLog('fabric/fabric-1165.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_1171_dependency(): void
    {
        $log = new TestLog('fabric/fabric-1171-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_1181(): void
    {
        $log = new TestLog('fabric/fabric-1181.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_client_1_19_2(): void
    {
        $log = new TestLog('fabric/fabric-client-1-19-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_crash_report(): void
    {
        $log = new TestLog('fabric/fabric-crash-report.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_duplicate_mod(): void
    {
        $log = new TestLog('fabric/fabric-duplicate-mod.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_entrypoint_error(): void
    {
        $log = new TestLog('fabric/fabric-entrypoint-error.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_java11(): void
    {
        $log = new TestLog('fabric/fabric-java11.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_java8(): void
    {
        $log = new TestLog('fabric/fabric-java8.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_missing_dependencies_1(): void
    {
        $log = new TestLog('fabric/fabric-missing-dependencies-1.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_missing_dependencies_2(): void
    {
        $log = new TestLog('fabric/fabric-missing-dependencies-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_missing_dependencies_3(): void
    {
        $log = new TestLog('fabric/fabric-missing-dependencies-3.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_missing_dependency_unversioned(): void
    {
        $log = new TestLog('fabric/fabric-missing-dependency-unversioned.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_missing_dependency_versioned(): void
    {
        $log = new TestLog('fabric/fabric-missing-dependency-versioned.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_mod_names(): void
    {
        $log = new TestLog('fabric/fabric-mod-names.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_pre_release(): void
    {
        $log = new TestLog('fabric/fabric-pre-release.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_fabric_wrong_mc_version(): void
    {
        $log = new TestLog('fabric/fabric-wrong-mc-version.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_1165(): void
    {
        $log = new TestLog('forge/forge-1165.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_client_1_16_5(): void
    {
        $log = new TestLog('forge/forge-client-1-16-5.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_client_1_19_2(): void
    {
        $log = new TestLog('forge/forge-client-1-19-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_confirm(): void
    {
        $log = new TestLog('forge/forge-confirm.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_crash_report(): void
    {
        $log = new TestLog('forge/forge-crash-report.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_early_crash(): void
    {
        $log = new TestLog('forge/forge-early-crash.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_missing_mods_exception(): void
    {
        $log = new TestLog('forge/forge-missing-mods-exception.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_dependency(): void
    {
        $log = new TestLog('forge/forge-mod-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_duplicate(): void
    {
        $log = new TestLog('forge/forge-mod-duplicate.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_exception(): void
    {
        $log = new TestLog('forge/forge-mod-exception.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_fatal_1444(): void
    {
        $log = new TestLog('forge/forge-mod-fatal-1444.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_fatal(): void
    {
        $log = new TestLog('forge/forge-mod-fatal.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_loading_dependency(): void
    {
        $log = new TestLog('forge/forge-mod-loading-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_required(): void
    {
        $log = new TestLog('forge/forge-mod-required.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_mod_wrong_minecraft_version(): void
    {
        $log = new TestLog('forge/forge-mod-wrong-minecraft-version.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_multiple_modules_export(): void
    {
        $log = new TestLog('forge/forge-multiple-modules-export.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_polymc_1_19_2(): void
    {
        $log = new TestLog('forge/forge-polymc-1-19-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_ptrlib_dependency(): void
    {
        $log = new TestLog('forge/forge-ptrlib-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_slash_in_thread(): void
    {
        $log = new TestLog('forge/forge-slash-in-thread.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_start_1122(): void
    {
        $log = new TestLog('forge/forge-start-1122.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_start_1132(): void
    {
        $log = new TestLog('forge/forge-start-1132.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_start_1161(): void
    {
        $log = new TestLog('forge/forge-start-1161.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_ticking_entity_1_18_2(): void
    {
        $log = new TestLog('forge/forge-ticking-entity-1-18-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_world_missing_mod(): void
    {
        $log = new TestLog('forge/forge-world-missing-mod.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_forge_world_mod_version(): void
    {
        $log = new TestLog('forge/forge-world-mod-version.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_geyser(): void
    {
        $log = new TestLog('geyser/geyser.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_magma_mod_dependency(): void
    {
        $log = new TestLog('magma/magma-mod-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_magma_plugin_dependency(): void
    {
        $log = new TestLog('magma/magma-plugin-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_magma_start_1122(): void
    {
        $log = new TestLog('magma/magma-start-1122.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_mohist_1_12_2(): void
    {
        $log = new TestLog('mohist/mohist-1-12-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_mohist_1_16_5(): void
    {
        $log = new TestLog('mohist/mohist-1-16-5.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_mohist_1_18_2(): void
    {
        $log = new TestLog('mohist/mohist-1-18-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_mohist_crash_report(): void
    {
        $log = new TestLog('mohist/mohist-crash-report.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_pocketmine_incompatible_api(): void
    {
        $log = new TestLog('pocketmine/pocketmine-incompatible-api.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_pocketmine_incompatible_protocol(): void
    {
        $log = new TestLog('pocketmine/pocketmine-incompatible-protocol.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_pocketmine_new_time_format(): void
    {
        $log = new TestLog('pocketmine/pocketmine-new-time-format.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_pocketmine_plugin_dependency(): void
    {
        $log = new TestLog('pocketmine/pocketmine-plugin-dependency.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_pocketmine_plugin_runtime_problem(): void
    {
        $log = new TestLog('pocketmine/pocketmine-plugin-runtime-problem.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_pocketmine_start_362(): void
    {
        $log = new TestLog('pocketmine/pocketmine-start-362.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_polymc(): void
    {
        $log = new TestLog('polymc/polymc.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_quilt_client_1_19_2(): void
    {
        $log = new TestLog('quilt/quilt-client-1-19-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_quilt(): void
    {
        $log = new TestLog('quilt/quilt.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_old_vanilla_start_152(): void
    {
        $log = new TestLog('vanilla/old-vanilla-start-152.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_aquatic_world_on_older_version(): void
    {
        $log = new TestLog('vanilla/vanilla-aquatic-world-on-older-version.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_client_1_19_2(): void
    {
        $log = new TestLog('vanilla/vanilla-client-1-19-2.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_forge_ticking_entity(): void
    {
        $log = new TestLog('vanilla/vanilla-forge-ticking-entity.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_malformed_encoding(): void
    {
        $log = new TestLog('vanilla/vanilla-malformed-encoding.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_old_player_directory(): void
    {
        $log = new TestLog('vanilla/vanilla-old-player-directory.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_snapshot_19w34a(): void
    {
        $log = new TestLog('vanilla/vanilla-snapshot-19w34a.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_snapshot_21w05b(): void
    {
        $log = new TestLog('vanilla/vanilla-snapshot-21w05b.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_vanilla_start_1132(): void
    {
        $log = new TestLog('vanilla/vanilla-start-1132.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }

    /**
     * @return void
     * @throws Exception
     */
    public function test_velocity(): void
    {
        $log = new TestLog('velocity/velocity.log');
        $this->assertStringEqualsFile($log->getExpectedPath(), $log->getOutput(), $log->getLogPath());
    }
}