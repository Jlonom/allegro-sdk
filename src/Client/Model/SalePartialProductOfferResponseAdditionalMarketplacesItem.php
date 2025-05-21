<?php

namespace Jlonom\AllegroSDK\Model;

class SalePartialProductOfferResponseAdditionalMarketplacesItem extends \ArrayObject
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
     * Price information for given addtional marketplace.
     *
     * @var SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode
     */
    protected $sellingMode;
    /**
     * Price information for given addtional marketplace.
     *
     * @return SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode
     */
    public function getSellingMode(): SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode
    {
        return $this->sellingMode;
    }
    /**
     * Price information for given addtional marketplace.
     *
     * @param SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
}