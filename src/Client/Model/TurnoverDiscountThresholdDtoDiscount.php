<?php

namespace Jlonom\AllegroSDK\Model;

class TurnoverDiscountThresholdDtoDiscount extends \ArrayObject
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
     * Discount percentage value. The fractional part must be absent or equal to 0.
     *
     * @var string
     */
    protected $percentage;
    /**
     * Discount percentage value. The fractional part must be absent or equal to 0.
     *
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }
    /**
     * Discount percentage value. The fractional part must be absent or equal to 0.
     *
     * @param string $percentage
     *
     * @return self
     */
    public function setPercentage(string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}