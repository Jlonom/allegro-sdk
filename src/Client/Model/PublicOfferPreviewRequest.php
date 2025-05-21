<?php

namespace Jlonom\AllegroSDK\Model;

class PublicOfferPreviewRequest extends \ArrayObject
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
     * Single offer data.
     *
     * @var PricingOffer
     */
    protected $offer;
    /**
     * 
     *
     * @var ClassifiedsPackages
     */
    protected $classifiedsPackages;
    /**
     * The marketplace on which the offer should be previewed. If omitted, it will default to the base marketplace.
     *
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Single offer data.
     *
     * @return PricingOffer
     */
    public function getOffer(): PricingOffer
    {
        return $this->offer;
    }
    /**
     * Single offer data.
     *
     * @param PricingOffer $offer
     *
     * @return self
     */
    public function setOffer(PricingOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * 
     *
     * @return ClassifiedsPackages
     */
    public function getClassifiedsPackages(): ClassifiedsPackages
    {
        return $this->classifiedsPackages;
    }
    /**
     * 
     *
     * @param ClassifiedsPackages $classifiedsPackages
     *
     * @return self
     */
    public function setClassifiedsPackages(ClassifiedsPackages $classifiedsPackages): self
    {
        $this->initialized['classifiedsPackages'] = true;
        $this->classifiedsPackages = $classifiedsPackages;
        return $this;
    }
    /**
     * The marketplace on which the offer should be previewed. If omitted, it will default to the base marketplace.
     *
     * @return string|null
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }
    /**
     * The marketplace on which the offer should be previewed. If omitted, it will default to the base marketplace.
     *
     * @param string|null $marketplaceId
     *
     * @return self
     */
    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
        return $this;
    }
}