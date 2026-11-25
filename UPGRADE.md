# Upgrade guide

Classes that were renamed or moved, by release.
Replace the old fully qualified class names with the new ones.

## 7.0.0: outliers and software-neutral folders

| Old class | New class |
|---|---|
| `Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformationInterface` | `Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\BedrockVersionInformationInterface` |
| `Aternos\Codex\Minecraft\Analysis\Problem\Folia\FoliaProblem` | removed |
| `Aternos\Codex\Minecraft\Analysis\Solution\CommandRunSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\General\CommandRunSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\General\DoNothingSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModInstallDifferentVersionSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModInstallSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModRemoveSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\UpdateJavaSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\General\UpdateJavaSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ModMemoryUsageSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModMemoryUsageSolution` |
| `Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\Waterfall\WaterFallProxyLog` | `Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\Waterfall\WaterfallProxyLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia\FoliaCrashReport` | `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia\FoliaCrashReportLog` |
| `Aternos\Codex\Minecraft\Parser\ForgeParser` | `Aternos\Codex\Minecraft\Parser\ModLoaderParser` |

## 7.0.0: crash report classes

| Old class | New class |
|---|---|
| `Aternos\Codex\Minecraft\Analyser\Report\CrashReport\FabricCrashReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\FabricCrashReportAnalyser` |
| `Aternos\Codex\Minecraft\Analyser\Report\CrashReport\ForgeCrashReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\ForgeCrashReportAnalyser` |
| `Aternos\Codex\Minecraft\Analyser\Report\CrashReport\MinecraftCrashReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\VanillaCrashReportAnalyser` |
| `Aternos\Codex\Minecraft\Analyser\Report\CrashReport\NeoForgeCrashReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\NeoForgeCrashReportAnalyser` |
| `Aternos\Codex\Minecraft\Analyser\Report\CrashReport\PaperCrashReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\PaperCrashReportAnalyser` |
| `Aternos\Codex\Minecraft\Analyser\Report\CrashReport\QuiltCrashReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\QuiltCrashReportAnalyser` |
| `Aternos\Codex\Minecraft\Analyser\Report\MinecraftReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\VanillaReportAnalyser` |
| `Aternos\Codex\Minecraft\Analyser\Report\NetworkProtocolErrorReport\MinecraftNetworkProtocolErrorReportAnalyser` | `Aternos\Codex\Minecraft\Analyser\VanillaNetworkProtocolErrorReportAnalyser` |
| `Aternos\Codex\Minecraft\Analysis\Information\CrashReport\JavaVersionInformation` | `Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaReportJavaVersionInformation` |
| `Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation` | `Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaReportVersionInformation` |
| `Aternos\Codex\Minecraft\Analysis\Information\Fabric\CrashReport\FabricVersionInformation` | `Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricCrashReportVersionInformation` |
| `Aternos\Codex\Minecraft\Analysis\Information\Forge\CrashReport\ForgeVersionInformation` | `Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeCrashReportVersionInformation` |
| `Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\CrashReportProblem` | `Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\VanillaCrashReportProblem` |
| `Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingBlockEntityProblem` | `Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\VanillaCrashReportTickingBlockEntityProblem` |
| `Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingEntityProblem` | `Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\VanillaCrashReportTickingEntityProblem` |
| `Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\CrashReportSolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\VanillaCrashReportSolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\RemoveBlockEntitySolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\VanillaCrashReportRemoveBlockEntitySolution` |
| `Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\RemoveEntitySolution` | `Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\VanillaCrashReportRemoveEntitySolution` |
