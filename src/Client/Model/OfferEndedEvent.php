<?php

namespace Jlonom\AllegroSDK\Model;

class OfferEndedEvent extends SellerOfferBaseEvent
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
     * @var OfferEventEndedOffer
     */
    protected $offer;
    /**
     * 
     *
     * @return OfferEventEndedOffer
     */
    public function getOffer(): OfferEventEndedOffer
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param OfferEventEndedOffer $offer
     *
     * @return self
     */
    public function setOffer(OfferEventEndedOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
}