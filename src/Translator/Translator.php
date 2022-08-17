<?php

namespace Aternos\Codex\Minecraft\Translator;

use InvalidArgumentException;

/**
 * Class Translator
 *
 * @package Aternos\Codex\Minecraft\Translator
 */
class Translator
{
    protected const DEFAULT_LANGUAGE = "en";

    protected static ?Translator $instance = null;
    protected static ?Translator $fallbackInstance = null;

    /**
     * @return static
     */
    public static function getInstance(): Translator
    {
        if (!static::$instance) {
            static::$instance = new Translator();
        }

        return static::$instance;
    }

    /**
     * @return static
     */
    public static function getFallbackInstance(): Translator
    {
        if (!static::$fallbackInstance) {
            static::$fallbackInstance = (new Translator())->setLanguage(static::DEFAULT_LANGUAGE);
        }

        return static::$fallbackInstance;
    }

    protected string $language = self::DEFAULT_LANGUAGE;

    /**
     * @var string[]
     */
    protected array $translations = [];

    /**
     * Get the current language
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Set the current language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage(string $language = self::DEFAULT_LANGUAGE): static
    {
        if (!$this->checkTranslationFile($language)) {
            throw new InvalidArgumentException("Language file for language '" . $language . "' not found.");
        }
        $this->language = $language;
        return $this;
    }

    /**
     * Get a translation string
     *
     * The string might contain {{placeholders}} that can be
     * replaced through $replacements = ["placeholder" => "value"]
     *
     * @param string $variable
     * @param array $replacements
     * @return string
     */
    public function getTranslation(string $variable, array $replacements = []): string
    {
        $translations = $this->loadTranslations();
        if (!isset($translations[$variable])) {
            if ($this->getLanguage() !== static::DEFAULT_LANGUAGE) {
                return static::getFallbackInstance()->getTranslation($variable, $replacements);
            }
            throw new InvalidArgumentException("Translation variable '" . $variable . "' not found.");
        }

        $value = $translations[$variable];
        if ($replacements) {
            foreach ($replacements as $placeholder => $replacement) {
                $value = str_replace("{{" . $placeholder . "}}", $replacement, $value);
            }
        }
        return $value;
    }

    /**
     * Check if the translation file exists
     *
     * @param string $language
     * @return bool
     */
    protected function checkTranslationFile(string $language): bool
    {
        return file_exists($this->getTranslationFile($language));
    }

    /**
     * Get the path to a translation file
     *
     * @param string $language
     * @return string
     */
    protected function getTranslationFile(string $language): string
    {
        return __DIR__ . "/../../lang/" . $language . ".json";
    }

    /**
     * Load translations from translation file for current language
     *
     * @return string[]
     */
    protected function loadTranslations(): array
    {
        if (!isset($this->translations[$this->language])) {
            $file = $this->getTranslationFile($this->language);
            $content = file_get_contents($file);
            $translations = json_decode($content, true);
            if (!is_array($translations)) {
                throw new InvalidArgumentException("Could not parse JSON translation file: " . $file);
            }

            $this->translations[$this->language] = $translations;
        }

        return $this->translations[$this->language];
    }

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }
}