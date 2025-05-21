<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountGetSubmitCommandResponseInput extends \ArrayObject
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
     * @var AlleDiscountGetSubmitCommandResponseInputOffer
     */
    protected $offer;
    /**
     * Campaign data.
     *
     * @var AlleDiscountGetSubmitCommandResponseInputCampaign
     */
    protected $campaign;
    /**
     * The price you agreed to lower to for the offer.
     *
     * @var AlleDiscountGetSubmitCommandResponseInputProposedPrice
     */
    protected $proposedPrice;
    /**
     * Offer data.
     *
     * @return AlleDiscountGetSubmitCommandResponseInputOffer
     */
    public function getOffer(): AlleDiscountGetSubmitCommandResponseInputOffer
    {
        return $this->offer;
    }
    /**
     * Offer data.
     *
     * @param AlleDiscountGetSubmitCommandResponseInputOffer $offer
     *
     * @return self
     */
    public function setOffer(AlleDiscountGetSubmitCommandResponseInputOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * Campaign data.
     *
     * @return AlleDiscountGetSubmitCommandResponseInputCampaign
     */
    public function getCampaign(): AlleDiscountGetSubmitCommandResponseInputCampaign
    {
        return $this->campaign;
    }
    /**
     * Campaign data.
     *
     * @param AlleDiscountGetSubmitCommandResponseInputCampaign $campaign
     *
     * @return self
     */
    public function setCampaign(AlleDiscountGetSubmitCommandResponseInputCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * The price you agreed to lower to for the offer.
     *
     * @return AlleDiscountGetSubmitCommandResponseInputProposedPrice
     */
    public function getProposedPrice(): AlleDiscountGetSubmitCommandResponseInputProposedPrice
    {
        return $this->proposedPrice;
    }
    /**
     * The price you agreed to lower to for the offer.
     *
     * @param AlleDiscountGetSubmitCommandResponseInputProposedPrice $proposedPrice
     *
     * @return self
     */
    public function setProposedPrice(AlleDiscountGetSubmitCommandResponseInputProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;
        return $this;
    }
}