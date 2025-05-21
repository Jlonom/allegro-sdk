<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplaceOfferPromoOption extends \ArrayObject
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
}