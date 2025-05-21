<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountEligibleOfferDtoAlleDiscount extends \ArrayObject
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
     * Info if offer matches campaign requirements.
     *
     * @var AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions
     */
    protected $campaignConditions;
    /**
     * Maximum price of offer that will be accepted in this AlleDiscount campaign. If you send submission with higher price, it will be rejected. You can submit your offer with lower price than one indicated here.
     *
     * @var AlleDiscountRequiredMerchantPriceDto
     */
    protected $requiredMerchantPrice;
    /**
     * Information what will be minimal guaranteed discount if offer is successfully submitted to AlleDiscount campaign. Final discount can be higher and may change for certain campaigns.
     *
     * @var AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount
     */
    protected $minimumGuaranteedDiscount;
    /**
     * Info if offer matches campaign requirements.
     *
     * @return AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions
     */
    public function getCampaignConditions(): AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions
    {
        return $this->campaignConditions;
    }
    /**
     * Info if offer matches campaign requirements.
     *
     * @param AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions $campaignConditions
     *
     * @return self
     */
    public function setCampaignConditions(AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions $campaignConditions): self
    {
        $this->initialized['campaignConditions'] = true;
        $this->campaignConditions = $campaignConditions;
        return $this;
    }
    /**
     * Maximum price of offer that will be accepted in this AlleDiscount campaign. If you send submission with higher price, it will be rejected. You can submit your offer with lower price than one indicated here.
     *
     * @return AlleDiscountRequiredMerchantPriceDto
     */
    public function getRequiredMerchantPrice(): AlleDiscountRequiredMerchantPriceDto
    {
        return $this->requiredMerchantPrice;
    }
    /**
     * Maximum price of offer that will be accepted in this AlleDiscount campaign. If you send submission with higher price, it will be rejected. You can submit your offer with lower price than one indicated here.
     *
     * @param AlleDiscountRequiredMerchantPriceDto $requiredMerchantPrice
     *
     * @return self
     */
    public function setRequiredMerchantPrice(AlleDiscountRequiredMerchantPriceDto $requiredMerchantPrice): self
    {
        $this->initialized['requiredMerchantPrice'] = true;
        $this->requiredMerchantPrice = $requiredMerchantPrice;
        return $this;
    }
    /**
     * Information what will be minimal guaranteed discount if offer is successfully submitted to AlleDiscount campaign. Final discount can be higher and may change for certain campaigns.
     *
     * @return AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount
     */
    public function getMinimumGuaranteedDiscount(): AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount
    {
        return $this->minimumGuaranteedDiscount;
    }
    /**
     * Information what will be minimal guaranteed discount if offer is successfully submitted to AlleDiscount campaign. Final discount can be higher and may change for certain campaigns.
     *
     * @param AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount $minimumGuaranteedDiscount
     *
     * @return self
     */
    public function setMinimumGuaranteedDiscount(AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount $minimumGuaranteedDiscount): self
    {
        $this->initialized['minimumGuaranteedDiscount'] = true;
        $this->minimumGuaranteedDiscount = $minimumGuaranteedDiscount;
        return $this;
    }
}