<?php

namespace Jlonom\AllegroSDK\Model;

class LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue extends \ArrayObject
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
     * The price data.
     *
     * @var Price
     */
    protected $lowerBound;
    /**
     * The price data.
     *
     * @return Price
     */
    public function getLowerBound(): Price
    {
        return $this->lowerBound;
    }
    /**
     * The price data.
     *
     * @param Price $lowerBound
     *
     * @return self
     */
    public function setLowerBound(Price $lowerBound): self
    {
        $this->initialized['lowerBound'] = true;
        $this->lowerBound = $lowerBound;
        return $this;
    }
}