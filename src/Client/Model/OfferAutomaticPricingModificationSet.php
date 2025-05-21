<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAutomaticPricingModificationSet extends \ArrayObject
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
     * List of marketplaces to which the rules will be added.
     *
     * @var list<OfferAutomaticPricingModificationSetSetItem>
     */
    protected $set;
    /**
     * List of marketplaces to which the rules will be added.
     *
     * @return list<OfferAutomaticPricingModificationSetSetItem>
     */
    public function getSet(): array
    {
        return $this->set;
    }
    /**
     * List of marketplaces to which the rules will be added.
     *
     * @param list<OfferAutomaticPricingModificationSetSetItem> $set
     *
     * @return self
     */
    public function setSet(array $set): self
    {
        $this->initialized['set'] = true;
        $this->set = $set;
        return $this;
    }
}