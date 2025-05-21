<?php

namespace Jlonom\AllegroSDK\Model;

class OfferCriterium extends \ArrayObject
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
     * Set of offers
     *
     * @var list<OfferId>
     */
    protected $offers;
    /**
     * Criteria type: CONTAINS_OFFERS
     *
     * @var string
     */
    protected $type;
    /**
     * Set of offers
     *
     * @return list<OfferId>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * Set of offers
     *
     * @param list<OfferId> $offers
     *
     * @return self
     */
    public function setOffers(array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;
        return $this;
    }
    /**
     * Criteria type: CONTAINS_OFFERS
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Criteria type: CONTAINS_OFFERS
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}