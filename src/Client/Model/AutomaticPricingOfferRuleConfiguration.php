<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingOfferRuleConfiguration extends \ArrayObject
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
     * Price range. This field is optional.
     *
     * @var AutomaticPricingOfferRuleConfigurationPriceRange
     */
    protected $priceRange;
    /**
     * Price range. This field is optional.
     *
     * @return AutomaticPricingOfferRuleConfigurationPriceRange
     */
    public function getPriceRange(): AutomaticPricingOfferRuleConfigurationPriceRange
    {
        return $this->priceRange;
    }
    /**
     * Price range. This field is optional.
     *
     * @param AutomaticPricingOfferRuleConfigurationPriceRange $priceRange
     *
     * @return self
     */
    public function setPriceRange(AutomaticPricingOfferRuleConfigurationPriceRange $priceRange): self
    {
        $this->initialized['priceRange'] = true;
        $this->priceRange = $priceRange;
        return $this;
    }
}