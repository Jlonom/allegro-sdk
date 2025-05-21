<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacesResponseItem extends \ArrayObject
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
     * The offer price for the selected additional marketplace.
     *
     * @var AdditionalMarketplacesResponseItemSellingMode
     */
    protected $sellingMode;
    /**
     * <small>[read-only]</small> Contains information about the visibility status of the listing for the given service.
     *
     * @var AdditionalMarketplacesResponseItemPublication
     */
    protected $publication;
    /**
     * The offer price for the selected additional marketplace.
     *
     * @return AdditionalMarketplacesResponseItemSellingMode
     */
    public function getSellingMode(): AdditionalMarketplacesResponseItemSellingMode
    {
        return $this->sellingMode;
    }
    /**
     * The offer price for the selected additional marketplace.
     *
     * @param AdditionalMarketplacesResponseItemSellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(AdditionalMarketplacesResponseItemSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
    /**
     * <small>[read-only]</small> Contains information about the visibility status of the listing for the given service.
     *
     * @return AdditionalMarketplacesResponseItemPublication
     */
    public function getPublication(): AdditionalMarketplacesResponseItemPublication
    {
        return $this->publication;
    }
    /**
     * <small>[read-only]</small> Contains information about the visibility status of the listing for the given service.
     *
     * @param AdditionalMarketplacesResponseItemPublication $publication
     *
     * @return self
     */
    public function setPublication(AdditionalMarketplacesResponseItemPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
}