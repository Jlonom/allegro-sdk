<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingOfferRuleConfigurationPriceRange extends \ArrayObject
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
     * Price range currency type.
     * `BASE_MARKETPLACE_CURRENCY` - The price must be defined in the same currency as offer base marketplace currency.
     * `MARKETPLACE_CURRENCY` - The price must be defined in the same currency as marketplace currency. For a base marketplace this is the only accepted value.
     *
     * @var string
     */
    protected $type;
    /**
     * The minimum price that can be set.
     *
     * @var AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice
     */
    protected $minPrice;
    /**
     * The maximum price that can be set.
     *
     * @var AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice
     */
    protected $maxPrice;
    /**
     * Price range currency type.
     * `BASE_MARKETPLACE_CURRENCY` - The price must be defined in the same currency as offer base marketplace currency.
     * `MARKETPLACE_CURRENCY` - The price must be defined in the same currency as marketplace currency. For a base marketplace this is the only accepted value.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Price range currency type.
     * `BASE_MARKETPLACE_CURRENCY` - The price must be defined in the same currency as offer base marketplace currency.
     * `MARKETPLACE_CURRENCY` - The price must be defined in the same currency as marketplace currency. For a base marketplace this is the only accepted value.
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
    /**
     * The minimum price that can be set.
     *
     * @return AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice
     */
    public function getMinPrice(): AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice
    {
        return $this->minPrice;
    }
    /**
     * The minimum price that can be set.
     *
     * @param AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice $minPrice
     *
     * @return self
     */
    public function setMinPrice(AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice $minPrice): self
    {
        $this->initialized['minPrice'] = true;
        $this->minPrice = $minPrice;
        return $this;
    }
    /**
     * The maximum price that can be set.
     *
     * @return AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice
     */
    public function getMaxPrice(): AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice
    {
        return $this->maxPrice;
    }
    /**
     * The maximum price that can be set.
     *
     * @param AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice $maxPrice
     *
     * @return self
     */
    public function setMaxPrice(AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice $maxPrice): self
    {
        $this->initialized['maxPrice'] = true;
        $this->maxPrice = $maxPrice;
        return $this;
    }
}