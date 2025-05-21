<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplicationRequest extends \ArrayObject
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
     * @var BadgeApplicationCampaign
     */
    protected $campaign;
    /**
     * 
     *
     * @var BadgeApplicationOffer
     */
    protected $offer;
    /**
     * Required by DISCOUNT and SOURCING campaign.
     *
     * @var BadgeApplicationPrices|null
     */
    protected $prices;
    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     *
     * @var BadgeApplicationPurchaseConstraints
     */
    protected $purchaseConstraints;
    /**
     * 
     *
     * @return BadgeApplicationCampaign
     */
    public function getCampaign(): BadgeApplicationCampaign
    {
        return $this->campaign;
    }
    /**
     * 
     *
     * @param BadgeApplicationCampaign $campaign
     *
     * @return self
     */
    public function setCampaign(BadgeApplicationCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * 
     *
     * @return BadgeApplicationOffer
     */
    public function getOffer(): BadgeApplicationOffer
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param BadgeApplicationOffer $offer
     *
     * @return self
     */
    public function setOffer(BadgeApplicationOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * Required by DISCOUNT and SOURCING campaign.
     *
     * @return BadgeApplicationPrices|null
     */
    public function getPrices(): ?BadgeApplicationPrices
    {
        return $this->prices;
    }
    /**
     * Required by DISCOUNT and SOURCING campaign.
     *
     * @param BadgeApplicationPrices|null $prices
     *
     * @return self
     */
    public function setPrices(?BadgeApplicationPrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     *
     * @return BadgeApplicationPurchaseConstraints
     */
    public function getPurchaseConstraints(): BadgeApplicationPurchaseConstraints
    {
        return $this->purchaseConstraints;
    }
    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     *
     * @param BadgeApplicationPurchaseConstraints $purchaseConstraints
     *
     * @return self
     */
    public function setPurchaseConstraints(BadgeApplicationPurchaseConstraints $purchaseConstraints): self
    {
        $this->initialized['purchaseConstraints'] = true;
        $this->purchaseConstraints = $purchaseConstraints;
        return $this;
    }
}