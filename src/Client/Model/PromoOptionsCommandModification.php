<?php

namespace Jlonom\AllegroSDK\Model;

class PromoOptionsCommandModification extends \ArrayObject
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
     * The base package. Available packages can be determined using <a href="#operation/getAvailableOfferPromotionPackages">GET /sale/offer-promotion-packages</a>.
     *
     * @var PromoOptionsCommandModificationBasePackage
     */
    protected $basePackage;
    /**
     * Extra packages to be set on offer. Omitting this parameter will preserve the packages already present.
     *
     * @var list<PromoOptionsCommandModificationPackage>
     */
    protected $extraPackages;
    /**
     * Time at which the modification will be applied.
     *
     * @var string
     */
    protected $modificationTime;
    /**
     * The base package. Available packages can be determined using <a href="#operation/getAvailableOfferPromotionPackages">GET /sale/offer-promotion-packages</a>.
     *
     * @return PromoOptionsCommandModificationBasePackage
     */
    public function getBasePackage(): PromoOptionsCommandModificationBasePackage
    {
        return $this->basePackage;
    }
    /**
     * The base package. Available packages can be determined using <a href="#operation/getAvailableOfferPromotionPackages">GET /sale/offer-promotion-packages</a>.
     *
     * @param PromoOptionsCommandModificationBasePackage $basePackage
     *
     * @return self
     */
    public function setBasePackage(PromoOptionsCommandModificationBasePackage $basePackage): self
    {
        $this->initialized['basePackage'] = true;
        $this->basePackage = $basePackage;
        return $this;
    }
    /**
     * Extra packages to be set on offer. Omitting this parameter will preserve the packages already present.
     *
     * @return list<PromoOptionsCommandModificationPackage>
     */
    public function getExtraPackages(): array
    {
        return $this->extraPackages;
    }
    /**
     * Extra packages to be set on offer. Omitting this parameter will preserve the packages already present.
     *
     * @param list<PromoOptionsCommandModificationPackage> $extraPackages
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
     * Time at which the modification will be applied.
     *
     * @return string
     */
    public function getModificationTime(): string
    {
        return $this->modificationTime;
    }
    /**
     * Time at which the modification will be applied.
     *
     * @param string $modificationTime
     *
     * @return self
     */
    public function setModificationTime(string $modificationTime): self
    {
        $this->initialized['modificationTime'] = true;
        $this->modificationTime = $modificationTime;
        return $this;
    }
}