<?php

namespace Jlonom\AllegroSDK\Model;

class DiscountsProductOfferRequest extends \ArrayObject
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
     * @var DiscountsProductOfferRequestWholesalePriceList
     */
    protected $wholesalePriceList;
    /**
     * 
     *
     * @return DiscountsProductOfferRequestWholesalePriceList
     */
    public function getWholesalePriceList(): DiscountsProductOfferRequestWholesalePriceList
    {
        return $this->wholesalePriceList;
    }
    /**
     * 
     *
     * @param DiscountsProductOfferRequestWholesalePriceList $wholesalePriceList
     *
     * @return self
     */
    public function setWholesalePriceList(DiscountsProductOfferRequestWholesalePriceList $wholesalePriceList): self
    {
        $this->initialized['wholesalePriceList'] = true;
        $this->wholesalePriceList = $wholesalePriceList;
        return $this;
    }
}