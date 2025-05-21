<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationDiscounts extends \ArrayObject
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
     * @var ModificationDiscountsWholesalePriceList
     */
    protected $wholesalePriceList;
    /**
     * 
     *
     * @return ModificationDiscountsWholesalePriceList
     */
    public function getWholesalePriceList(): ModificationDiscountsWholesalePriceList
    {
        return $this->wholesalePriceList;
    }
    /**
     * 
     *
     * @param ModificationDiscountsWholesalePriceList $wholesalePriceList
     *
     * @return self
     */
    public function setWholesalePriceList(ModificationDiscountsWholesalePriceList $wholesalePriceList): self
    {
        $this->initialized['wholesalePriceList'] = true;
        $this->wholesalePriceList = $wholesalePriceList;
        return $this;
    }
}