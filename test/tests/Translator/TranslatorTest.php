<?php

namespace Aternos\Codex\Minecraft\Test\Translator;

use Aternos\Codex\Minecraft\Translator\Translator;
use PHPUnit\Framework\TestCase;

class TranslatorTest extends TestCase
{
    public function testGetTranslation(): void
    {
        $translator = Translator::getInstance();
        $this->assertEquals("Minecraft version", $translator->getTranslation("minecraft-version"));
    }

    public function testSetLanguage(): void
    {
        $translator = Translator::getInstance();
        $translator->setLanguage("de");
        $this->assertEquals("Minecraft Version", $translator->getTranslation("minecraft-version"));
    }

    public function testGetTranslationWithReplacement(): void
    {
        $translator = Translator::getInstance();
        $translator->setLanguage("en");
        $this->assertEquals("The plugin 'Test Plugin' could not be loaded.",
            $translator->getTranslation("plugin-load-problem", ["plugin-name" => "Test Plugin"]));
    }
}
