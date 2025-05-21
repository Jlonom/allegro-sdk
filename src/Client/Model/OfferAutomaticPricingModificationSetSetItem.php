<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAutomaticPricingModificationSetSetItem extends \ArrayObject
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
     * 
     *
     * @var OfferAutomaticPricingModificationSetSetItemMarketplace
     */
    protected $marketplace;
    /**
     * 
     *
     * @var OfferAutomaticPricingModificationSetSetItemRule
     */
    protected $rule;
    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE" and "FOLLOW_BY_MARKET_MIN_PRICE" it is necessary for the rule to work.
     *
     * @var AutomaticPricingOfferRuleConfiguration
     */
    protected $configuration;
    /**
     * 
     *
     * @return OfferAutomaticPricingModificationSetSetItemMarketplace
     */
    public function getMarketplace(): OfferAutomaticPricingModificationSetSetItemMarketplace
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param OfferAutomaticPricingModificationSetSetItemMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(OfferAutomaticPricingModificationSetSetItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * 
     *
     * @return OfferAutomaticPricingModificationSetSetItemRule
     */
    public function getRule(): OfferAutomaticPricingModificationSetSetItemRule
    {
        return $this->rule;
    }
    /**
     * 
     *
     * @param OfferAutomaticPricingModificationSetSetItemRule $rule
     *
     * @return self
     */
    public function setRule(OfferAutomaticPricingModificationSetSetItemRule $rule): self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;
        return $this;
    }
    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE" and "FOLLOW_BY_MARKET_MIN_PRICE" it is necessary for the rule to work.
     *
     * @return AutomaticPricingOfferRuleConfiguration
     */
    public function getConfiguration(): AutomaticPricingOfferRuleConfiguration
    {
        return $this->configuration;
    }
    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE" and "FOLLOW_BY_MARKET_MIN_PRICE" it is necessary for the rule to work.
     *
     * @param AutomaticPricingOfferRuleConfiguration $configuration
     *
     * @return self
     */
    public function setConfiguration(AutomaticPricingOfferRuleConfiguration $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;
        return $this;
    }
}