<?php

namespace Jlonom\AllegroSDK\Model;

class RefusalMessage extends \ArrayObject
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
     * Detailed message.
     *
     * @var string
     */
    protected $text;
    /**
     * Optional link that redirects to page associated with refusal reason.
     *
     * @var string|null
     */
    protected $link;
    /**
     * Detailed message.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Detailed message.
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
    /**
     * Optional link that redirects to page associated with refusal reason.
     *
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Optional link that redirects to page associated with refusal reason.
     *
     * @param string|null $link
     *
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;
        return $this;
    }
}