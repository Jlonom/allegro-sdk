<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPriceChangedEvent extends SellerOfferBaseEvent
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
     * @var OfferEventExternalOfferForPriceChanges
     */
    protected $offer;
    /**
     * 
     *
     * @return OfferEventExternalOfferForPriceChanges
     */
    public function getOffer(): OfferEventExternalOfferForPriceChanges
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param OfferEventExternalOfferForPriceChanges $offer
     *
     * @return self
     */
    public function setOffer(OfferEventExternalOfferForPriceChanges $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
}