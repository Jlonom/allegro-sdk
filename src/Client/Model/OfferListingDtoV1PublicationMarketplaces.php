<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1PublicationMarketplaces extends \ArrayObject
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
     * The base marketplace of the offer.
     *
     * @var OfferListingDtoV1PublicationMarketplacesBase
     */
    protected $base;
    /**
     * Additional marketplaces, on which the offer is to be listed.
     *
     * @var list<MarketplaceReference>
     */
    protected $additional;
    /**
     * The base marketplace of the offer.
     *
     * @return OfferListingDtoV1PublicationMarketplacesBase
     */
    public function getBase(): OfferListingDtoV1PublicationMarketplacesBase
    {
        return $this->base;
    }
    /**
     * The base marketplace of the offer.
     *
     * @param OfferListingDtoV1PublicationMarketplacesBase $base
     *
     * @return self
     */
    public function setBase(OfferListingDtoV1PublicationMarketplacesBase $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
    /**
     * Additional marketplaces, on which the offer is to be listed.
     *
     * @return list<MarketplaceReference>
     */
    public function getAdditional(): array
    {
        return $this->additional;
    }
    /**
     * Additional marketplaces, on which the offer is to be listed.
     *
     * @param list<MarketplaceReference> $additional
     *
     * @return self
     */
    public function setAdditional(array $additional): self
    {
        $this->initialized['additional'] = true;
        $this->additional = $additional;
        return $this;
    }
}