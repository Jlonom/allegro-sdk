<?php

namespace Jlonom\AllegroSDK\Model;

class Discounts extends \ArrayObject
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
     * @var DiscountsWholesalePriceList
     */
    protected $wholesalePriceList;
    /**
     * 
     *
     * @return DiscountsWholesalePriceList
     */
    public function getWholesalePriceList(): DiscountsWholesalePriceList
    {
        return $this->wholesalePriceList;
    }
    /**
     * 
     *
     * @param DiscountsWholesalePriceList $wholesalePriceList
     *
     * @return self
     */
    public function setWholesalePriceList(DiscountsWholesalePriceList $wholesalePriceList): self
    {
        $this->initialized['wholesalePriceList'] = true;
        $this->wholesalePriceList = $wholesalePriceList;
        return $this;
    }
}