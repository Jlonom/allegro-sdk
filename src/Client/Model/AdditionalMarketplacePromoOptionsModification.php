<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacePromoOptionsModification extends \ArrayObject
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
     * Promo package modifications to be applied on additional marketplace.
     *
     * @var list<PromoOptionsModification>
     */
    protected $modifications;
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
     * Promo package modifications to be applied on additional marketplace.
     *
     * @return list<PromoOptionsModification>
     */
    public function getModifications(): array
    {
        return $this->modifications;
    }
    /**
     * Promo package modifications to be applied on additional marketplace.
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
}