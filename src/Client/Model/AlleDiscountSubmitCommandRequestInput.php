<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmitCommandRequestInput extends \ArrayObject
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
     * Data of the offer you want to submit to the AlleDiscount campaign.
     *
     * @var AlleDiscountSubmitCommandRequestInputOffer
     */
    protected $offer;
    /**
     * Data of AlleDiscount campaign you want to submit your offer to.
     *
     * @var AlleDiscountSubmitCommandRequestInputCampaign
     */
    protected $campaign;
    /**
     * The price you agree to lower to for the offer. Must be equal or lower than requiredMerchantPrice returned in `/sale/alle-discount/{campaignId}/eligible-offers` endpoint.
     *
     * @var AlleDiscountSubmitCommandRequestInputProposedPrice
     */
    protected $proposedPrice;
    /**
     * Data of the offer you want to submit to the AlleDiscount campaign.
     *
     * @return AlleDiscountSubmitCommandRequestInputOffer
     */
    public function getOffer(): AlleDiscountSubmitCommandRequestInputOffer
    {
        return $this->offer;
    }
    /**
     * Data of the offer you want to submit to the AlleDiscount campaign.
     *
     * @param AlleDiscountSubmitCommandRequestInputOffer $offer
     *
     * @return self
     */
    public function setOffer(AlleDiscountSubmitCommandRequestInputOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * Data of AlleDiscount campaign you want to submit your offer to.
     *
     * @return AlleDiscountSubmitCommandRequestInputCampaign
     */
    public function getCampaign(): AlleDiscountSubmitCommandRequestInputCampaign
    {
        return $this->campaign;
    }
    /**
     * Data of AlleDiscount campaign you want to submit your offer to.
     *
     * @param AlleDiscountSubmitCommandRequestInputCampaign $campaign
     *
     * @return self
     */
    public function setCampaign(AlleDiscountSubmitCommandRequestInputCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * The price you agree to lower to for the offer. Must be equal or lower than requiredMerchantPrice returned in `/sale/alle-discount/{campaignId}/eligible-offers` endpoint.
     *
     * @return AlleDiscountSubmitCommandRequestInputProposedPrice
     */
    public function getProposedPrice(): AlleDiscountSubmitCommandRequestInputProposedPrice
    {
        return $this->proposedPrice;
    }
    /**
     * The price you agree to lower to for the offer. Must be equal or lower than requiredMerchantPrice returned in `/sale/alle-discount/{campaignId}/eligible-offers` endpoint.
     *
     * @param AlleDiscountSubmitCommandRequestInputProposedPrice $proposedPrice
     *
     * @return self
     */
    public function setProposedPrice(AlleDiscountSubmitCommandRequestInputProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;
        return $this;
    }
}