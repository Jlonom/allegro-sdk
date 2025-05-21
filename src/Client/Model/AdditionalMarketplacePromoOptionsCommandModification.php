<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacePromoOptionsCommandModification extends \ArrayObject
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
     * 
     *
     * @var PromoOptionsCommandModification
     */
    protected $modification;
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
     * 
     *
     * @return PromoOptionsCommandModification
     */
    public function getModification(): PromoOptionsCommandModification
    {
        return $this->modification;
    }
    /**
     * 
     *
     * @param PromoOptionsCommandModification $modification
     *
     * @return self
     */
    public function setModification(PromoOptionsCommandModification $modification): self
    {
        $this->initialized['modification'] = true;
        $this->modification = $modification;
        return $this;
    }
}