<?php

namespace Aternos\Codex\Minecraft\Printer;

use Aternos\Codex\Printer\Modification;

/**
 * Class FormatModification
 *
 * @package Printer
 */
abstract class FormatModification extends Modification
{
    /**
     * @var array
     */
    protected $formatCodes = [
        "0;30;22m" => "black",
        "0;34;22m" => "darkblue",
        "0;32;22m" => "darkgreen",
        "0;36;22m" => "darkaqua",
        "0;31;22m" => "darkred",
        "0;35;22m" => "darkpurple",
        "0;33;22m" => "gold",
        "0;37;22m" => "gray",
        "0;30;1m" => "darkgray",
        "0;34;1m" => "blue",
        "0;32;1m" => "green",
        "0;36;1m" => "aqua",
        "0;31;1m" => "red",
        "0;35;1m" => "lightpurple",
        "0;33;1m" => "yellow",
        "0;37;1m" => "white",

        "21m" => "bold",
        "4m" => "underline",
        "3m" => "italic",
        "9m" => "strike",
        "5m" => "magic",

        "m" => "reset"
    ];

    /**
     * Modify the given string and return it
     *
     * @param string $text
     * @return string
     */
    public function modify(string $text): string
    {
        $search = array();
        $replace = array();
        foreach ($this->formatCodes as $code => $format) {
            $search[] = "\e[" . $code;
            $replace[] = '<span class="' . $this->getClasses($format) . '">';
        }

        $count = 0;
        $text = str_replace($search, $replace, $text, $count);

        for ($j = 0; $j < $count; $j++) {
            $text .= '</span>';
        }

        return $text;
    }

    abstract protected function getClasses(string $format): string;
}