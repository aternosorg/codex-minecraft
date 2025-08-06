<?php

namespace Aternos\Codex\Minecraft\Log;

class Entry extends \Aternos\Codex\Log\Entry
{
    protected ?string $prefix = null;

    /**
     * Set the prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix(string $prefix): static
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Get the prefix
     *
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $output = parent::jsonSerialize();
        $lines = $output['lines'];
        unset($output['lines']);
        $output['prefix'] = $this->getPrefix();
        $output['lines'] = $lines;
        return $output;
    }
}