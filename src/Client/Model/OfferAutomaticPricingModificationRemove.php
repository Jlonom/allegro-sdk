<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAutomaticPricingModificationRemove extends \ArrayObject
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
     * List of marketplaces from which rules will be removed.
     *
     * @var list<OfferAutomaticPricingModificationRemoveRemoveItem>
     */
    protected $remove;
    /**
     * List of marketplaces from which rules will be removed.
     *
     * @return list<OfferAutomaticPricingModificationRemoveRemoveItem>
     */
    public function getRemove(): array
    {
        return $this->remove;
    }
    /**
     * List of marketplaces from which rules will be removed.
     *
     * @param list<OfferAutomaticPricingModificationRemoveRemoveItem> $remove
     *
     * @return self
     */
    public function setRemove(array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}