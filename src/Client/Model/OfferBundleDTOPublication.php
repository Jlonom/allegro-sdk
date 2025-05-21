<?php

namespace Jlonom\AllegroSDK\Model;

class OfferBundleDTOPublication extends \ArrayObject
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
     * @var BundleMarketplaceDTO
     */
    protected $marketplace;
    /**
     * Bundle's status.
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return BundleMarketplaceDTO
     */
    public function getMarketplace(): BundleMarketplaceDTO
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param BundleMarketplaceDTO $marketplace
     *
     * @return self
     */
    public function setMarketplace(BundleMarketplaceDTO $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * Bundle's status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Bundle's status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}