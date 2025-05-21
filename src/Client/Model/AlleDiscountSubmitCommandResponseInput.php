<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmitCommandResponseInput extends \ArrayObject
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
     * Offer data.
     *
     * @var AlleDiscountSubmitCommandResponseInputOffer
     */
    protected $offer;
    /**
     * Campaign data.
     *
     * @var AlleDiscountSubmitCommandResponseInputCampaign
     */
    protected $campaign;
    /**
     * The price you agreed to lower to for the offer.
     *
     * @var AlleDiscountSubmitCommandResponseInputProposedPrice
     */
    protected $proposedPrice;
    /**
     * Offer data.
     *
     * @return AlleDiscountSubmitCommandResponseInputOffer
     */
    public function getOffer(): AlleDiscountSubmitCommandResponseInputOffer
    {
        return $this->offer;
    }
    /**
     * Offer data.
     *
     * @param AlleDiscountSubmitCommandResponseInputOffer $offer
     *
     * @return self
     */
    public function setOffer(AlleDiscountSubmitCommandResponseInputOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * Campaign data.
     *
     * @return AlleDiscountSubmitCommandResponseInputCampaign
     */
    public function getCampaign(): AlleDiscountSubmitCommandResponseInputCampaign
    {
        return $this->campaign;
    }
    /**
     * Campaign data.
     *
     * @param AlleDiscountSubmitCommandResponseInputCampaign $campaign
     *
     * @return self
     */
    public function setCampaign(AlleDiscountSubmitCommandResponseInputCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * The price you agreed to lower to for the offer.
     *
     * @return AlleDiscountSubmitCommandResponseInputProposedPrice
     */
    public function getProposedPrice(): AlleDiscountSubmitCommandResponseInputProposedPrice
    {
        return $this->proposedPrice;
    }
    /**
     * The price you agreed to lower to for the offer.
     *
     * @param AlleDiscountSubmitCommandResponseInputProposedPrice $proposedPrice
     *
     * @return self
     */
    public function setProposedPrice(AlleDiscountSubmitCommandResponseInputProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;
        return $this;
    }
}