<?php

namespace Jlonom\AllegroSDK\Model;

class OfferArchivedEvent extends SellerOfferBaseEvent
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
     * @var OfferEventExternalOffer
     */
    protected $offer;
    /**
     * 
     *
     * @return OfferEventExternalOffer
     */
    public function getOffer(): OfferEventExternalOffer
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param OfferEventExternalOffer $offer
     *
     * @return self
     */
    public function setOffer(OfferEventExternalOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
}