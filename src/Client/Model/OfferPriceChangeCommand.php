<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPriceChangeCommand extends \ArrayObject
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
     * The way the offer price should be changed. One of three ways is possible: new price, increase/decrease price, percentage change and only one can be chosen at once.
     *
     * @var PriceModification
     */
    protected $modification;
    /**
     * List of offer criteria
     *
     * @var list<OfferCriterium>
     */
    protected $offerCriteria;
    /**
     * The way the offer price should be changed. One of three ways is possible: new price, increase/decrease price, percentage change and only one can be chosen at once.
     *
     * @return PriceModification
     */
    public function getModification(): PriceModification
    {
        return $this->modification;
    }
    /**
     * The way the offer price should be changed. One of three ways is possible: new price, increase/decrease price, percentage change and only one can be chosen at once.
     *
     * @param PriceModification $modification
     *
     * @return self
     */
    public function setModification(PriceModification $modification): self
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