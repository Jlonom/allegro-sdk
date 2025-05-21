<?php

namespace Jlonom\AllegroSDK\Model;

class Badge extends \ArrayObject
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
     * @var BadgeApplicationOffer
     */
    protected $offer;
    /**
     * 
     *
     * @var OfferBadgeCampaign
     */
    protected $campaign;
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @var BadgePublicationTimePolicy|null
     */
    protected $publication;
    /**
     * Provided for DISCOUNT and SOURCING campaigns.
     *
     * @var BadgePrices|null
     */
    protected $prices;
    /**
     * Information about badge processing.
     *
     * @var BadgeProcess
     */
    protected $process;
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
     * 
     *
     * @return OfferBadgeCampaign
     */
    public function getCampaign(): OfferBadgeCampaign
    {
        return $this->campaign;
    }
    /**
     * 
     *
     * @param OfferBadgeCampaign $campaign
     *
     * @return self
     */
    public function setCampaign(OfferBadgeCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @return BadgePublicationTimePolicy|null
     */
    public function getPublication(): ?BadgePublicationTimePolicy
    {
        return $this->publication;
    }
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @param BadgePublicationTimePolicy|null $publication
     *
     * @return self
     */
    public function setPublication(?BadgePublicationTimePolicy $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Provided for DISCOUNT and SOURCING campaigns.
     *
     * @return BadgePrices|null
     */
    public function getPrices(): ?BadgePrices
    {
        return $this->prices;
    }
    /**
     * Provided for DISCOUNT and SOURCING campaigns.
     *
     * @param BadgePrices|null $prices
     *
     * @return self
     */
    public function setPrices(?BadgePrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * Information about badge processing.
     *
     * @return BadgeProcess
     */
    public function getProcess(): BadgeProcess
    {
        return $this->process;
    }
    /**
     * Information about badge processing.
     *
     * @param BadgeProcess $process
     *
     * @return self
     */
    public function setProcess(BadgeProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;
        return $this;
    }
}