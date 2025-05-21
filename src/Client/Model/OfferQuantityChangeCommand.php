<?php

namespace Jlonom\AllegroSDK\Model;

class OfferQuantityChangeCommand extends \ArrayObject
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
     * The way the offer quantity should be changed. One of two ways is possible: new quantity, increase/decrease quantity and only one can be chosen at once.
     *
     * @var QuantityModification
     */
    protected $modification;
    /**
     * List of offer criteria
     *
     * @var list<OfferCriterium>
     */
    protected $offerCriteria;
    /**
     * The way the offer quantity should be changed. One of two ways is possible: new quantity, increase/decrease quantity and only one can be chosen at once.
     *
     * @return QuantityModification
     */
    public function getModification(): QuantityModification
    {
        return $this->modification;
    }
    /**
     * The way the offer quantity should be changed. One of two ways is possible: new quantity, increase/decrease quantity and only one can be chosen at once.
     *
     * @param QuantityModification $modification
     *
     * @return self
     */
    public function setModification(QuantityModification $modification): self
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