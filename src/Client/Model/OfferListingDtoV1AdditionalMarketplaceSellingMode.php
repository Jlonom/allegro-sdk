<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1AdditionalMarketplaceSellingMode extends \ArrayObject
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
     * The price of the offer on the given marketplace.
     *
     * @var mixed
     */
    protected $price;
    /**
     * The automatic pricing rule on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation
     */
    protected $priceAutomation;
    /**
     * The price of the offer on the given marketplace.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * The price of the offer on the given marketplace.
     *
     * @param mixed $price
     *
     * @return self
     */
    public function setPrice($price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * The automatic pricing rule on the given marketplace.
     *
     * @return OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation
     */
    public function getPriceAutomation(): OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation
    {
        return $this->priceAutomation;
    }
    /**
     * The automatic pricing rule on the given marketplace.
     *
     * @param OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation $priceAutomation
     *
     * @return self
     */
    public function setPriceAutomation(OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation $priceAutomation): self
    {
        $this->initialized['priceAutomation'] = true;
        $this->priceAutomation = $priceAutomation;
        return $this;
    }
}