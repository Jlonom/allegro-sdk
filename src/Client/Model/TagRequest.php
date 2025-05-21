<?php

namespace Jlonom\AllegroSDK\Model;

class TagRequest extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $hidden;
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHidden(): bool
    {
        return $this->hidden;
    }
    /**
     * 
     *
     * @param bool $hidden
     *
     * @return self
     */
    public function setHidden(bool $hidden): self
    {
        $this->initialized['hidden'] = true;
        $this->hidden = $hidden;
        return $this;
    }
}