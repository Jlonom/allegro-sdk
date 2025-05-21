<?php

namespace Jlonom\AllegroSDK\Model;

class PriceModificationValueChangeDecrease extends PriceModification
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
     * Change of offer buy now price, related to types: INCREASE_PRICE, DECREASE_PRICE.
     *
     * @var PriceModificationValueChangeHolder
     */
    protected $value;
    /**
     * Change of offer buy now price, related to types: INCREASE_PRICE, DECREASE_PRICE.
     *
     * @return PriceModificationValueChangeHolder
     */
    public function getValue(): PriceModificationValueChangeHolder
    {
        return $this->value;
    }
    /**
     * Change of offer buy now price, related to types: INCREASE_PRICE, DECREASE_PRICE.
     *
     * @param PriceModificationValueChangeHolder $value
     *
     * @return self
     */
    public function setValue(PriceModificationValueChangeHolder $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}