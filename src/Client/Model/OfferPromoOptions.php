<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPromoOptions extends \ArrayObject
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
     * Offer identifier
     *
     * @var string
     */
    protected $offerId;
    /**
     * 
     *
     * @var string
     */
    protected $marketplaceId;
    /**
     * 
     *
     * @var OfferPromoOption
     */
    protected $basePackage;
    /**
     * Extra promotion packages set on offer.
     *
     * @var list<OfferPromoOption>
     */
    protected $extraPackages;
    /**
     * 
     *
     * @var OfferPromoOptionsPendingChanges
     */
    protected $pendingChanges;
    /**
     * Promo packages on additional marketplaces
     *
     * @var list<MarketplaceOfferPromoOption>
     */
    protected $additionalMarketplaces;
    /**
     * Offer identifier
     *
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }
    /**
     * Offer identifier
     *
     * @param string $offerId
     *
     * @return self
     */
    public function setOfferId(string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->marketplaceId;
    }
    /**
     * 
     *
     * @param string $marketplaceId
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
        return $this;
    }
    /**
     * 
     *
     * @return OfferPromoOption
     */
    public function getBasePackage(): OfferPromoOption
    {
        return $this->basePackage;
    }
    /**
     * 
     *
     * @param OfferPromoOption $basePackage
     *
     * @return self
     */
    public function setBasePackage(OfferPromoOption $basePackage): self
    {
        $this->initialized['basePackage'] = true;
        $this->basePackage = $basePackage;
        return $this;
    }
    /**
     * Extra promotion packages set on offer.
     *
     * @return list<OfferPromoOption>
     */
    public function getExtraPackages(): array
    {
        return $this->extraPackages;
    }
    /**
     * Extra promotion packages set on offer.
     *
     * @param list<OfferPromoOption> $extraPackages
     *
     * @return self
     */
    public function setExtraPackages(array $extraPackages): self
    {
        $this->initialized['extraPackages'] = true;
        $this->extraPackages = $extraPackages;
        return $this;
    }
    /**
     * 
     *
     * @return OfferPromoOptionsPendingChanges
     */
    public function getPendingChanges(): OfferPromoOptionsPendingChanges
    {
        return $this->pendingChanges;
    }
    /**
     * 
     *
     * @param OfferPromoOptionsPendingChanges $pendingChanges
     *
     * @return self
     */
    public function setPendingChanges(OfferPromoOptionsPendingChanges $pendingChanges): self
    {
        $this->initialized['pendingChanges'] = true;
        $this->pendingChanges = $pendingChanges;
        return $this;
    }
    /**
     * Promo packages on additional marketplaces
     *
     * @return list<MarketplaceOfferPromoOption>
     */
    public function getAdditionalMarketplaces(): array
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Promo packages on additional marketplaces
     *
     * @param list<MarketplaceOfferPromoOption> $additionalMarketplaces
     *
     * @return self
     */
    public function setAdditionalMarketplaces(array $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;
        return $this;
    }
}