<?php

namespace Jlonom\AllegroSDK\Model;

class AvailablePromotionPackages extends \ArrayObject
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
     * @var string
     */
    protected $marketplaceId;
    /**
     * Available base promotion packages. Only one base package can be set on an offer.
     *
     * @var list<AvailablePromotionPackage>
     */
    protected $basePackages;
    /**
     * Available extra promotion packages. Multiple different extra packages can be set on an offer.
     *
     * @var list<AvailablePromotionPackage>
     */
    protected $extraPackages;
    /**
     * Available promotion packages on additional marketplaces.
     *
     * @var list<MarketplaceAvailablePromotionPackages>
     */
    protected $additionalMarketplaces;
    /**
     * 
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->marketplaceId;
    }
    /**
     * 
     *
     * @param string $marketplaceId
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
        return $this;
    }
    /**
     * Available base promotion packages. Only one base package can be set on an offer.
     *
     * @return list<AvailablePromotionPackage>
     */
    public function getBasePackages(): array
    {
        return $this->basePackages;
    }
    /**
     * Available base promotion packages. Only one base package can be set on an offer.
     *
     * @param list<AvailablePromotionPackage> $basePackages
     *
     * @return self
     */
    public function setBasePackages(array $basePackages): self
    {
        $this->initialized['basePackages'] = true;
        $this->basePackages = $basePackages;
        return $this;
    }
    /**
     * Available extra promotion packages. Multiple different extra packages can be set on an offer.
     *
     * @return list<AvailablePromotionPackage>
     */
    public function getExtraPackages(): array
    {
        return $this->extraPackages;
    }
    /**
     * Available extra promotion packages. Multiple different extra packages can be set on an offer.
     *
     * @param list<AvailablePromotionPackage> $extraPackages
     *
     * @return self
     */
    public function setExtraPackages(array $extraPackages): self
    {
        $this->initialized['extraPackages'] = true;
        $this->extraPackages = $extraPackages;
        return $this;
    }
    /**
     * Available promotion packages on additional marketplaces.
     *
     * @return list<MarketplaceAvailablePromotionPackages>
     */
    public function getAdditionalMarketplaces(): array
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Available promotion packages on additional marketplaces.
     *
     * @param list<MarketplaceAvailablePromotionPackages> $additionalMarketplaces
     *
     * @return self
     */
    public function setAdditionalMarketplaces(array $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;
        return $this;
    }
}