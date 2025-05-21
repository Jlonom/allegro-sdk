<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacesRequestItem extends \ArrayObject
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
     * @var AdditionalMarketplacesRequestItemSellingMode
     */
    protected $sellingMode;
    /**
     * 
     *
     * @return AdditionalMarketplacesRequestItemSellingMode
     */
    public function getSellingMode(): AdditionalMarketplacesRequestItemSellingMode
    {
        return $this->sellingMode;
    }
    /**
     * 
     *
     * @param AdditionalMarketplacesRequestItemSellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(AdditionalMarketplacesRequestItemSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
}