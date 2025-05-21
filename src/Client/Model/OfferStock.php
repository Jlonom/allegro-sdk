<?php

namespace Jlonom\AllegroSDK\Model;

class OfferStock extends \ArrayObject
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
     * The unit type of the stock.
     *
     * @var string
     */
    protected $unit;
    /**
     * The available stock value.
     *
     * @var int
     */
    protected $available;
    /**
     * The unit type of the stock.
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * The unit type of the stock.
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
    /**
     * The available stock value.
     *
     * @return int
     */
    public function getAvailable(): int
    {
        return $this->available;
    }
    /**
     * The available stock value.
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