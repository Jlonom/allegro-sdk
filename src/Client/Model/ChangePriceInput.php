<?php

namespace Jlonom\AllegroSDK\Model;

class ChangePriceInput extends \ArrayObject
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
    protected $buyNowPrice;
    /**
     * The price data.
     *
     * @return Price
     */
    public function getBuyNowPrice(): Price
    {
        return $this->buyNowPrice;
    }
    /**
     * The price data.
     *
     * @param Price $buyNowPrice
     *
     * @return self
     */
    public function setBuyNowPrice(Price $buyNowPrice): self
    {
        $this->initialized['buyNowPrice'] = true;
        $this->buyNowPrice = $buyNowPrice;
        return $this;
    }
}