<?php

namespace Jlonom\AllegroSDK\Model;

class DiscountsProductOfferResponse extends \ArrayObject
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
     * @var JustId
     */
    protected $wholesalePriceList;
    /**
     * 
     *
     * @return JustId
     */
    public function getWholesalePriceList(): JustId
    {
        return $this->wholesalePriceList;
    }
    /**
     * 
     *
     * @param JustId $wholesalePriceList
     *
     * @return self
     */
    public function setWholesalePriceList(JustId $wholesalePriceList): self
    {
        $this->initialized['wholesalePriceList'] = true;
        $this->wholesalePriceList = $wholesalePriceList;
        return $this;
    }
}