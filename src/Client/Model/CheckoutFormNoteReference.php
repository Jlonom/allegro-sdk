<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormNoteReference extends \ArrayObject
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
     * Seller's note for the order
     *
     * @var string
     */
    protected $text;
    /**
     * Seller's note for the order
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Seller's note for the order
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