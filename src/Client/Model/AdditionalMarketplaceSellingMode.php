<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplaceSellingMode extends \ArrayObject
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
     * The price data.
     *
     * @var Price
     */
    protected $price;
    /**
     * The price data.
     *
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }
    /**
     * The price data.
     *
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}