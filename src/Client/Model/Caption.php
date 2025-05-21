<?php

namespace Jlonom\AllegroSDK\Model;

class Caption extends \ArrayObject
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
    protected $index;
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }
    /**
     * 
     *
     * @param string $index
     *
     * @return self
     */
    public function setIndex(string $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}