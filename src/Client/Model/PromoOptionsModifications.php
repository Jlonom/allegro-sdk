<?php

namespace Jlonom\AllegroSDK\Model;

class PromoOptionsModifications extends \ArrayObject
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
     * Promo package modifications to be applied.
     *
     * @var list<PromoOptionsModification>
     */
    protected $modifications;
    /**
     * Promo package modifications to be applied on additional marketplaces.
     *
     * @var list<AdditionalMarketplacePromoOptionsModification>
     */
    protected $additionalMarketplaces;
    /**
     * Promo package modifications to be applied.
     *
     * @return list<PromoOptionsModification>
     */
    public function getModifications(): array
    {
        return $this->modifications;
    }
    /**
     * Promo package modifications to be applied.
     *
     * @param list<PromoOptionsModification> $modifications
     *
     * @return self
     */
    public function setModifications(array $modifications): self
    {
        $this->initialized['modifications'] = true;
        $this->modifications = $modifications;
        return $this;
    }
    /**
     * Promo package modifications to be applied on additional marketplaces.
     *
     * @return list<AdditionalMarketplacePromoOptionsModification>
     */
    public function getAdditionalMarketplaces(): array
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Promo package modifications to be applied on additional marketplaces.
     *
     * @param list<AdditionalMarketplacePromoOptionsModification> $additionalMarketplaces
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