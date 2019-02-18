# Codex for Minecraft

### About

Codex (*lat. roughly for "log"*) is a PHP library to read, parse, print and analyse log files to find problems and suggest 
possible solutions. This is the implementation for Minecraft server logs including detectors, parsers and analysers to 
work with different Minecraft server log files.

### Installation

```
composer require aternos/codex-minecraft
```

## Usage

This is only an introduction to the Minecraft implementation of [Codex](https://github.com/aternosorg/codex), for more
information take a look at the Codex repository: [aternosorg/codex](https://github.com/aternosorg/codex)

### Create a log file
*[see [codex#logfile](https://github.com/aternosorg/codex#logfile)]*

```php
<?php

$logFile = new \Aternos\Codex\Log\File\StringLogFile("This is the log content");
$logFile = new \Aternos\Codex\Log\File\PathLogFile("/path/to/log");
$logFile = new \Aternos\Codex\Log\File\StreamLogFile(fopen("/path/to/log", "r"));
```

### Create log object
*[see [codex#log](https://github.com/aternosorg/codex#log)]*

If you know the log type, you can directly create a new log object.
```php
<?php

$log = new \Aternos\Codex\Minecraft\Log\VanillaLog();
$log->setLogFile($logFile);
```

### Detect the log type
*[see [codex#detection](https://github.com/aternosorg/codex#detection)]*

If you don't know the log type, you can let the [Detective](src/Detective/Detective.php) decide and create a log object.
```php
<?php

$detective = new \Aternos\Codex\Minecraft\Detective\Detective();
$log = $detective->detect();
```

### Parse the log content
*[see [codex#parsing](https://github.com/aternosorg/codex#parsing)]*

```php
<?php

$log->parse();
```

### Analyse the log
*[see [codex#analysing](https://github.com/aternosorg/codex#analysing)]*

```php
<?php

$analysis = $log->analyse();
```

The `$analysis` object contains problems and information which you can get with the `$analysis->getProblems()` and `$analysis->getInformation()` functions
or all insights together with `$analysis->getInsights()`. The problems contain solutions, a few of them could be solved automatically. They implement the
`\Aternos\Codex\Analysis\AutomatableSolutionInterface`, e.g. [`FileDeleteSolution`](src/Analysis/Solution/File/FileDeleteSolution.php).

```php
<?php

foreach ($analysis->getInformation() as $information) {
    echo $information->getLabel() . ": " . $information->getValue();
}

foreach ($analysis->getProblems() as $problem) {
    echo $problem->getMessage();
    foreach($problem->getSolutions() as $solution) {
        echo $solution->getMessage();
    }
}
```