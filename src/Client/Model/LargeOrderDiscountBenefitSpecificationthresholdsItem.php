<?php

namespace Jlonom\AllegroSDK\Model;

class LargeOrderDiscountBenefitSpecificationthresholdsItem extends \ArrayObject
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
     * @var LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue
     */
    protected $orderValue;
    /**
     * 
     *
     * @var LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount
     */
    protected $discount;
    /**
     * 
     *
     * @return LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue
     */
    public function getOrderValue(): LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue
    {
        return $this->orderValue;
    }
    /**
     * 
     *
     * @param LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue $orderValue
     *
     * @return self
     */
    public function setOrderValue(LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue $orderValue): self
    {
        $this->initialized['orderValue'] = true;
        $this->orderValue = $orderValue;
        return $this;
    }
    /**
     * 
     *
     * @return LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount
     */
    public function getDiscount(): LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount
    {
        return $this->discount;
    }
    /**
     * 
     *
     * @param LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount $discount
     *
     * @return self
     */
    public function setDiscount(LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
}