<?php

namespace Jlonom\AllegroSDK\Model;

class SellerRebateOfferCriterion extends \ArrayObject
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
     * Set of offers – only if `type` is `CONTAINS_OFFERS`
     *
     * @var list<SellerRebateOfferCriterionOffersItem>
     */
    protected $offers;
    /**
     * Criteria type: CONTAINS_OFFERS or OFFERS_ASSIGNED_EXTERNALLY
     *
     * @var string
     */
    protected $type;
    /**
     * Set of offers – only if `type` is `CONTAINS_OFFERS`
     *
     * @return list<SellerRebateOfferCriterionOffersItem>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * Set of offers – only if `type` is `CONTAINS_OFFERS`
     *
     * @param list<SellerRebateOfferCriterionOffersItem> $offers
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
     * Criteria type: CONTAINS_OFFERS or OFFERS_ASSIGNED_EXTERNALLY
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Criteria type: CONTAINS_OFFERS or OFFERS_ASSIGNED_EXTERNALLY
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