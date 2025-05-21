<?php

namespace Jlonom\AllegroSDK\Model;

class PriceModificationFixedPrice extends PriceModification
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
     * New offer buy now price, related to type FIXED_PRICE.
     *
     * @var PriceModificationFixedPriceHolder
     */
    protected $price;
    /**
     * New offer buy now price, related to type FIXED_PRICE.
     *
     * @return PriceModificationFixedPriceHolder
     */
    public function getPrice(): PriceModificationFixedPriceHolder
    {
        return $this->price;
    }
    /**
     * New offer buy now price, related to type FIXED_PRICE.
     *
     * @param PriceModificationFixedPriceHolder $price
     *
     * @return self
     */
    public function setPrice(PriceModificationFixedPriceHolder $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}