<?php

namespace Jlonom\AllegroSDK\Model;

class PromoModificationReport extends \ArrayObject
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
     * Offer promotion modification tasks.
     *
     * @var list<PromoModificationTask>
     */
    protected $tasks;
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
     * Offer promotion modification tasks.
     *
     * @return list<PromoModificationTask>
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }
    /**
     * Offer promotion modification tasks.
     *
     * @param list<PromoModificationTask> $tasks
     *
     * @return self
     */
    public function setTasks(array $tasks): self
    {
        $this->initialized['tasks'] = true;
        $this->tasks = $tasks;
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