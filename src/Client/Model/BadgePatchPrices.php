<?php

namespace Jlonom\AllegroSDK\Model;

class BadgePatchPrices extends \ArrayObject
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
     * @var BadgePatchPricesPrices|null
     */
    protected $prices;
    /**
     * 
     *
     * @return BadgePatchPricesPrices|null
     */
    public function getPrices(): ?BadgePatchPricesPrices
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param BadgePatchPricesPrices|null $prices
     *
     * @return self
     */
    public function setPrices(?BadgePatchPricesPrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
}