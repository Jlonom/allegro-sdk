<?php

namespace Jlonom\AllegroSDK\Model;

class WholesalePriceListBenefitSpecificationthresholdsItem extends \ArrayObject
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
     * @var WholesalePriceListBenefitSpecificationthresholdsItemQuantity
     */
    protected $quantity;
    /**
     * 
     *
     * @var WholesalePriceListBenefitSpecificationthresholdsItemDiscount
     */
    protected $discount;
    /**
     * 
     *
     * @return WholesalePriceListBenefitSpecificationthresholdsItemQuantity
     */
    public function getQuantity(): WholesalePriceListBenefitSpecificationthresholdsItemQuantity
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param WholesalePriceListBenefitSpecificationthresholdsItemQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(WholesalePriceListBenefitSpecificationthresholdsItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return WholesalePriceListBenefitSpecificationthresholdsItemDiscount
     */
    public function getDiscount(): WholesalePriceListBenefitSpecificationthresholdsItemDiscount
    {
        return $this->discount;
    }
    /**
     * 
     *
     * @param WholesalePriceListBenefitSpecificationthresholdsItemDiscount $discount
     *
     * @return self
     */
    public function setDiscount(WholesalePriceListBenefitSpecificationthresholdsItemDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
}