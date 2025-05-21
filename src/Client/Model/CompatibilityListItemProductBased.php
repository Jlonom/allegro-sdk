<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListItemProductBased extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Text description of the compatible item.
     *
     * @var string
     */
    protected $text;
    /**
     * Text description of the compatible item.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Text description of the compatible item.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
}