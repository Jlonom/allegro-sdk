<?php

namespace Jlonom\AllegroSDK\Model;

class OfferDelivery extends \ArrayObject
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
     * Indicates whether the offer has free shipping option.
     *
     * @var bool
     */
    protected $availableForFree;
    /**
     * The lowest shipping cost available. Lack of this entity means that the offer has no shipping options (i.e. it is an advertisement or an offer with electronic delivery only).
     *
     * @var OfferLowestPrice
     */
    protected $lowestPrice;
    /**
     * Indicates whether the offer has free shipping option.
     *
     * @return bool
     */
    public function getAvailableForFree(): bool
    {
        return $this->availableForFree;
    }
    /**
     * Indicates whether the offer has free shipping option.
     *
     * @param bool $availableForFree
     *
     * @return self
     */
    public function setAvailableForFree(bool $availableForFree): self
    {
        $this->initialized['availableForFree'] = true;
        $this->availableForFree = $availableForFree;
        return $this;
    }
    /**
     * The lowest shipping cost available. Lack of this entity means that the offer has no shipping options (i.e. it is an advertisement or an offer with electronic delivery only).
     *
     * @return OfferLowestPrice
     */
    public function getLowestPrice(): OfferLowestPrice
    {
        return $this->lowestPrice;
    }
    /**
     * The lowest shipping cost available. Lack of this entity means that the offer has no shipping options (i.e. it is an advertisement or an offer with electronic delivery only).
     *
     * @param OfferLowestPrice $lowestPrice
     *
     * @return self
     */
    public function setLowestPrice(OfferLowestPrice $lowestPrice): self
    {
        $this->initialized['lowestPrice'] = true;
        $this->lowestPrice = $lowestPrice;
        return $this;
    }
}