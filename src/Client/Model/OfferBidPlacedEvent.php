<?php

namespace Jlonom\AllegroSDK\Model;

class OfferBidPlacedEvent extends SellerOfferBaseEvent
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
     * The data of the offer, for which the event occurred.
     *
     * @var OfferEventBaseOffer
     */
    protected $offer;
    /**
     * The data of the offer, for which the event occurred.
     *
     * @return OfferEventBaseOffer
     */
    public function getOffer(): OfferEventBaseOffer
    {
        return $this->offer;
    }
    /**
     * The data of the offer, for which the event occurred.
     *
     * @param OfferEventBaseOffer $offer
     *
     * @return self
     */
    public function setOffer(OfferEventBaseOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
}