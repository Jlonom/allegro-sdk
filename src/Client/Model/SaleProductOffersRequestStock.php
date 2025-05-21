<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOffersRequestStock extends \ArrayObject
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
     * Quantity of this offer available for sale - how many times this offer can be sold. Offer can be activated only with stock being greater then 0. Setting this quantity to 0 for 'ACTIVE' or 'ACTIVATING' offer will trigger changing its status to 'ENDED'.
     *
     * @var int
     */
    protected $available;
    /**
     * Stock unit
     *
     * @var string
     */
    protected $unit;
    /**
     * Quantity of this offer available for sale - how many times this offer can be sold. Offer can be activated only with stock being greater then 0. Setting this quantity to 0 for 'ACTIVE' or 'ACTIVATING' offer will trigger changing its status to 'ENDED'.
     *
     * @return int
     */
    public function getAvailable(): int
    {
        return $this->available;
    }
    /**
     * Quantity of this offer available for sale - how many times this offer can be sold. Offer can be activated only with stock being greater then 0. Setting this quantity to 0 for 'ACTIVE' or 'ACTIVATING' offer will trigger changing its status to 'ENDED'.
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
    /**
     * Stock unit
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * Stock unit
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
}