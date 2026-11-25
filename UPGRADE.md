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
