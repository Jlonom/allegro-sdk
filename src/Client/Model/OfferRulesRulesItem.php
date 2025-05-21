<?php

namespace Jlonom\AllegroSDK\Model;

class OfferRulesRulesItem extends \ArrayObject
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
     * @var OfferRulesRulesItemMarketplace
     */
    protected $marketplace;
    /**
     * 
     *
     * @var OfferRulesRulesItemRule
     */
    protected $rule;
    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE" and "FOLLOW_BY_MARKET_MIN_PRICE" it is necessary for the rule to work.
     *
     * @var AutomaticPricingOfferRuleConfiguration
     */
    protected $configuration;
    /**
     * The date the rule assignment to offer.marketplace was last modified in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return OfferRulesRulesItemMarketplace
     */
    public function getMarketplace(): OfferRulesRulesItemMarketplace
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param OfferRulesRulesItemMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(OfferRulesRulesItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * 
     *
     * @return OfferRulesRulesItemRule
     */
    public function getRule(): OfferRulesRulesItemRule
    {
        return $this->rule;
    }
    /**
     * 
     *
     * @param OfferRulesRulesItemRule $rule
     *
     * @return self
     */
    public function setRule(OfferRulesRulesItemRule $rule): self
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
    /**
     * The date the rule assignment to offer.marketplace was last modified in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the rule assignment to offer.marketplace was last modified in ISO 8601 format.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}