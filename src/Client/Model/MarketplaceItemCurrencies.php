<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplaceItemCurrencies extends \ArrayObject
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
     * @var MarketplaceItemCurrency
     */
    protected $base;
    /**
     * List of other currencies available for that marketplace
     *
     * @var list<MarketplaceItemCurrency>
     */
    protected $additional;
    /**
     * 
     *
     * @return MarketplaceItemCurrency
     */
    public function getBase(): MarketplaceItemCurrency
    {
        return $this->base;
    }
    /**
     * 
     *
     * @param MarketplaceItemCurrency $base
     *
     * @return self
     */
    public function setBase(MarketplaceItemCurrency $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
    /**
     * List of other currencies available for that marketplace
     *
     * @return list<MarketplaceItemCurrency>
     */
    public function getAdditional(): array
    {
        return $this->additional;
    }
    /**
     * List of other currencies available for that marketplace
     *
     * @param list<MarketplaceItemCurrency> $additional
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