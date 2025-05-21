<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroMarketplaces extends \ArrayObject
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
     * List of marketplaces in allegro
     *
     * @var list<MarketplaceItem>
     */
    protected $marketplaces;
    /**
     * List of marketplaces in allegro
     *
     * @return list<MarketplaceItem>
     */
    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }
    /**
     * List of marketplaces in allegro
     *
     * @param list<MarketplaceItem> $marketplaces
     *
     * @return self
     */
    public function setMarketplaces(array $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;
        return $this;
    }
}