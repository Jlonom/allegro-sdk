<?php

namespace Jlonom\AllegroSDK\Model;

class SalePartialProductOfferResponseStock extends \ArrayObject
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
    protected $available;
    /**
     * 
     *
     * @return int
     */
    public function getAvailable(): int
    {
        return $this->available;
    }
    /**
     * 
     *
     * @param int $available
     *
     * @return self
     */
    public function setAvailable(int $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
}