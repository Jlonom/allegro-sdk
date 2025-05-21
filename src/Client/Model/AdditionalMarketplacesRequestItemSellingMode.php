<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacesRequestItemSellingMode extends \ArrayObject
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
     * The offer price for the selected additional marketplace. The price in this field must be provided by the seller in the correct currency, which is specified in the `GET /marketplaces` resource.
     *
     * @var AdditionalMarketplacesRequestItemSellingModePrice
     */
    protected $price;
    /**
     * The offer price for the selected additional marketplace. The price in this field must be provided by the seller in the correct currency, which is specified in the `GET /marketplaces` resource.
     *
     * @return AdditionalMarketplacesRequestItemSellingModePrice
     */
    public function getPrice(): AdditionalMarketplacesRequestItemSellingModePrice
    {
        return $this->price;
    }
    /**
     * The offer price for the selected additional marketplace. The price in this field must be provided by the seller in the correct currency, which is specified in the `GET /marketplaces` resource.
     *
     * @param AdditionalMarketplacesRequestItemSellingModePrice $price
     *
     * @return self
     */
    public function setPrice(AdditionalMarketplacesRequestItemSellingModePrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}