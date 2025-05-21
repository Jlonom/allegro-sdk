<?php

namespace Jlonom\AllegroSDK\Model;

class SizeTableTemplateImageResponse extends \ArrayObject
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
     * @var list<Caption>
     */
    protected $captions;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @return list<Caption>
     */
    public function getCaptions(): array
    {
        return $this->captions;
    }
    /**
     * 
     *
     * @param list<Caption> $captions
     *
     * @return self
     */
    public function setCaptions(array $captions): self
    {
        $this->initialized['captions'] = true;
        $this->captions = $captions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}