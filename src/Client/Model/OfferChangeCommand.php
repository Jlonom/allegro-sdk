<?php

namespace Jlonom\AllegroSDK\Model;

class OfferChangeCommand extends \ArrayObject
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
     * Contains fields to change
     *
     * @var Modification
     */
    protected $modification;
    /**
     * List of offer criteria
     *
     * @var list<OfferCriterium>
     */
    protected $offerCriteria;
    /**
     * Contains fields to change
     *
     * @return Modification
     */
    public function getModification(): Modification
    {
        return $this->modification;
    }
    /**
     * Contains fields to change
     *
     * @param Modification $modification
     *
     * @return self
     */
    public function setModification(Modification $modification): self
    {
        $this->initialized['modification'] = true;
        $this->modification = $modification;
        return $this;
    }
    /**
     * List of offer criteria
     *
     * @return list<OfferCriterium>
     */
    public function getOfferCriteria(): array
    {
        return $this->offerCriteria;
    }
    /**
     * List of offer criteria
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
}