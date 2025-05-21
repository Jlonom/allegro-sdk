<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAdditionalMarketplace extends \ArrayObject
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
     * @var AdditionalMarketplacePublication
     */
    protected $publication;
    /**
     * Offer's selling mode on given marketplace
     *
     * @var AdditionalMarketplaceSellingMode
     */
    protected $sellingMode;
    /**
     * 
     *
     * @return AdditionalMarketplacePublication
     */
    public function getPublication(): AdditionalMarketplacePublication
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param AdditionalMarketplacePublication $publication
     *
     * @return self
     */
    public function setPublication(AdditionalMarketplacePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Offer's selling mode on given marketplace
     *
     * @return AdditionalMarketplaceSellingMode
     */
    public function getSellingMode(): AdditionalMarketplaceSellingMode
    {
        return $this->sellingMode;
    }
    /**
     * Offer's selling mode on given marketplace
     *
     * @param AdditionalMarketplaceSellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(AdditionalMarketplaceSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
}