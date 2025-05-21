<?php

namespace Jlonom\AllegroSDK\Model;

class PriceModificationPercentageChangeDecrease extends PriceModification
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
     * Percentage change of offer buy now price, related to types: INCREASE_PERCENTAGE, DECREASE_PERCENTAGE. Provided in a string format to avoid rounding errors.
     *
     * @var string
     */
    protected $percentage;
    /**
     * Percentage change of offer buy now price, related to types: INCREASE_PERCENTAGE, DECREASE_PERCENTAGE. Provided in a string format to avoid rounding errors.
     *
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }
    /**
     * Percentage change of offer buy now price, related to types: INCREASE_PERCENTAGE, DECREASE_PERCENTAGE. Provided in a string format to avoid rounding errors.
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