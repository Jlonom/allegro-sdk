<?php

namespace Jlonom\AllegroSDK\Model;

class WholesalePriceListBenefitSpecificationthresholdsItemDiscount extends \ArrayObject
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
     * Discount percentage applied when the threshold is applied. The fractional part must be equal to 0.
     *
     * @var string
     */
    protected $percentage;
    /**
     * Discount percentage applied when the threshold is applied. The fractional part must be equal to 0.
     *
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }
    /**
     * Discount percentage applied when the threshold is applied. The fractional part must be equal to 0.
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