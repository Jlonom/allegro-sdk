<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementQuantityQuantity extends \ArrayObject
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
     * @var int
     */
    protected $value;
    /**
     * 
     *
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}