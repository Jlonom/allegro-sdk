<?php

namespace Jlonom\AllegroSDK\Model;

class WholesalePriceListBenefitSpecificationthresholdsItemQuantity extends \ArrayObject
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
     * Minimum number of units of an offer for which the threshold is applicable.
     *
     * @var float
     */
    protected $lowerBound;
    /**
     * Minimum number of units of an offer for which the threshold is applicable.
     *
     * @return float
     */
    public function getLowerBound(): float
    {
        return $this->lowerBound;
    }
    /**
     * Minimum number of units of an offer for which the threshold is applicable.
     *
     * @param float $lowerBound
     *
     * @return self
     */
    public function setLowerBound(float $lowerBound): self
    {
        $this->initialized['lowerBound'] = true;
        $this->lowerBound = $lowerBound;
        return $this;
    }
}