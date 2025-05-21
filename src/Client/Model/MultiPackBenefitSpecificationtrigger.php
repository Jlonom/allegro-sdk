<?php

namespace Jlonom\AllegroSDK\Model;

class MultiPackBenefitSpecificationtrigger extends \ArrayObject
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
     * For every pack of this quantity new rebate will be given.
     *
     * @var float
     */
    protected $forEachQuantity;
    /**
     * Describes how many offers in pack should be discounted by discount percentage.
     *
     * @var float
     */
    protected $discountedNumber;
    /**
     * For every pack of this quantity new rebate will be given.
     *
     * @return float
     */
    public function getForEachQuantity(): float
    {
        return $this->forEachQuantity;
    }
    /**
     * For every pack of this quantity new rebate will be given.
     *
     * @param float $forEachQuantity
     *
     * @return self
     */
    public function setForEachQuantity(float $forEachQuantity): self
    {
        $this->initialized['forEachQuantity'] = true;
        $this->forEachQuantity = $forEachQuantity;
        return $this;
    }
    /**
     * Describes how many offers in pack should be discounted by discount percentage.
     *
     * @return float
     */
    public function getDiscountedNumber(): float
    {
        return $this->discountedNumber;
    }
    /**
     * Describes how many offers in pack should be discounted by discount percentage.
     *
     * @param float $discountedNumber
     *
     * @return self
     */
    public function setDiscountedNumber(float $discountedNumber): self
    {
        $this->initialized['discountedNumber'] = true;
        $this->discountedNumber = $discountedNumber;
        return $this;
    }
}