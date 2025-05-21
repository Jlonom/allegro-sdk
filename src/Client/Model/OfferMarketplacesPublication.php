<?php

namespace Jlonom\AllegroSDK\Model;

class OfferMarketplacesPublication extends \ArrayObject
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
     * Offer marketplaces visibility information.
     *
     * @var MarketplacesVisibility
     */
    protected $marketplaces;
    /**
     * List of marketplaces with updated visibility.
     *
     * @var list<string>
     */
    protected $updatedMarketplaces;
    /**
     * Offer marketplaces visibility information.
     *
     * @return MarketplacesVisibility
     */
    public function getMarketplaces(): MarketplacesVisibility
    {
        return $this->marketplaces;
    }
    /**
     * Offer marketplaces visibility information.
     *
     * @param MarketplacesVisibility $marketplaces
     *
     * @return self
     */
    public function setMarketplaces(MarketplacesVisibility $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;
        return $this;
    }
    /**
     * List of marketplaces with updated visibility.
     *
     * @return list<string>
     */
    public function getUpdatedMarketplaces(): array
    {
        return $this->updatedMarketplaces;
    }
    /**
     * List of marketplaces with updated visibility.
     *
     * @param list<string> $updatedMarketplaces
     *
     * @return self
     */
    public function setUpdatedMarketplaces(array $updatedMarketplaces): self
    {
        $this->initialized['updatedMarketplaces'] = true;
        $this->updatedMarketplaces = $updatedMarketplaces;
        return $this;
    }
}