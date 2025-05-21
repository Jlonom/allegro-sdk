<?php

namespace Jlonom\AllegroSDK\Model;

class PromoOptionsCommand extends \ArrayObject
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
     * Offer choice criteria.
     *
     * @var list<OfferCriterium>
     */
    protected $offerCriteria;
    /**
     * 
     *
     * @var PromoOptionsCommandModification
     */
    protected $modification;
    /**
     * 
     *
     * @var list<AdditionalMarketplacePromoOptionsCommandModification>
     */
    protected $additionalMarketplaces;
    /**
     * Offer choice criteria.
     *
     * @return list<OfferCriterium>
     */
    public function getOfferCriteria(): array
    {
        return $this->offerCriteria;
    }
    /**
     * Offer choice criteria.
     *
     * @param list<OfferCriterium> $offerCriteria
     *
     * @return self
     */
    public function setOfferCriteria(array $offerCriteria): self
    {
        $this->initialized['offerCriteria'] = true;
        $this->offerCriteria = $offerCriteria;
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
    /**
     * 
     *
     * @return list<AdditionalMarketplacePromoOptionsCommandModification>
     */
    public function getAdditionalMarketplaces(): array
    {
        return $this->additionalMarketplaces;
    }
    /**
     * 
     *
     * @param list<AdditionalMarketplacePromoOptionsCommandModification> $additionalMarketplaces
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