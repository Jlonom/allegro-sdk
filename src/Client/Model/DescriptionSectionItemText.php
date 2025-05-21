<?php

namespace Jlonom\AllegroSDK\Model;

class DescriptionSectionItemText extends DescriptionSectionItem
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
     * 
     *
     * @var string
     */
    protected $content;
    /**
     * 
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}