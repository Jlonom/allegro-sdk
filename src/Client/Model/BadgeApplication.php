<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplication extends \ArrayObject
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
     * Badge application ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string
     */
    protected $updatedAt;
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
     * Information about processing of the application.
     *
     * @var BadgeApplicationProcess
     */
    protected $process;
    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     *
     * @var BadgeApplicationPurchaseConstraints
     */
    protected $purchaseConstraints;
    /**
     * Badge application ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Badge application ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
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
     * Information about processing of the application.
     *
     * @return BadgeApplicationProcess
     */
    public function getProcess(): BadgeApplicationProcess
    {
        return $this->process;
    }
    /**
     * Information about processing of the application.
     *
     * @param BadgeApplicationProcess $process
     *
     * @return self
     */
    public function setProcess(BadgeApplicationProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;
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