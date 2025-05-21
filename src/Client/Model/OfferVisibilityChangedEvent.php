<?php

namespace Jlonom\AllegroSDK\Model;

class OfferVisibilityChangedEvent extends SellerOfferBaseEvent
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
     * @var OfferEventExternalOfferWithPublication
     */
    protected $offer;
    /**
     * 
     *
     * @return OfferEventExternalOfferWithPublication
     */
    public function getOffer(): OfferEventExternalOfferWithPublication
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param OfferEventExternalOfferWithPublication $offer
     *
     * @return self
     */
    public function setOffer(OfferEventExternalOfferWithPublication $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
}