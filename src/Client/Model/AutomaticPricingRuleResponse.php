<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRuleResponse extends \ArrayObject
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
     * Identifier of a automatic pricing rule.
     *
     * @var string
     */
    protected $id;
    /**
    * The rule type.
    * `EXCHANGE_RATE` - Calculates prices on additional marketplaces using the latest exchange rates and price from the offer base marketplace.
                       <br />Is not available on base marketplace and business marketplaces.
                       <br /><a href="https://help.allegro.com/sell/en/a/how-the-pricing-rules-based-on-the-price-converter-work-k1wRoYkBEuK">More information about EXCHANGE_RATE type</a>.
    * `FOLLOW_BY_ALLEGRO_MIN_PRICE` - Calculates prices by following the lowest product price on Allegro for a given marketplace.
                       <br />Is not available on business marketplaces.
                       <br /><a href="https://help.allegro.com/en/sell/a/how-the-pricing-rules-based-on-lowest-price-on-allegro-work-8drjrq7EkT5">More information about FOLLOW_BY_ALLEGRO_MIN_PRICE type</a>.
    * `FOLLOW_BY_MARKET_MIN_PRICE` - Calculates prices by following the lowest product price on market for a given marketplace.
                       <br />Is not available on business marketplaces.
                       <br /><a href="https://help.allegro.com/en/sell/a/how-the-pricing-rules-based-on-lowest-price-on-allegro-work-8drjrq7EkT5">More information about FOLLOW_BY_MARKET_MIN_PRICE type</a>.
    
    *
    * @var string
    */
    protected $type;
    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @var string
     */
    protected $name;
    /**
     * Indicates whether a rule is default (true) or created by merchant (false).
     *
     * @var bool
     */
    protected $default;
    /**
     * The date the rule was last modified in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $configuration;
    /**
     * Identifier of a automatic pricing rule.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of a automatic pricing rule.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
    * The rule type.
    * `EXCHANGE_RATE` - Calculates prices on additional marketplaces using the latest exchange rates and price from the offer base marketplace.
                       <br />Is not available on base marketplace and business marketplaces.
                       <br /><a href="https://help.allegro.com/sell/en/a/how-the-pricing-rules-based-on-the-price-converter-work-k1wRoYkBEuK">More information about EXCHANGE_RATE type</a>.
    * `FOLLOW_BY_ALLEGRO_MIN_PRICE` - Calculates prices by following the lowest product price on Allegro for a given marketplace.
                       <br />Is not available on business marketplaces.
                       <br /><a href="https://help.allegro.com/en/sell/a/how-the-pricing-rules-based-on-lowest-price-on-allegro-work-8drjrq7EkT5">More information about FOLLOW_BY_ALLEGRO_MIN_PRICE type</a>.
    * `FOLLOW_BY_MARKET_MIN_PRICE` - Calculates prices by following the lowest product price on market for a given marketplace.
                       <br />Is not available on business marketplaces.
                       <br /><a href="https://help.allegro.com/en/sell/a/how-the-pricing-rules-based-on-lowest-price-on-allegro-work-8drjrq7EkT5">More information about FOLLOW_BY_MARKET_MIN_PRICE type</a>.
    
    *
    * @return string
    */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * The rule type.
    * `EXCHANGE_RATE` - Calculates prices on additional marketplaces using the latest exchange rates and price from the offer base marketplace.
                       <br />Is not available on base marketplace and business marketplaces.
                       <br /><a href="https://help.allegro.com/sell/en/a/how-the-pricing-rules-based-on-the-price-converter-work-k1wRoYkBEuK">More information about EXCHANGE_RATE type</a>.
    * `FOLLOW_BY_ALLEGRO_MIN_PRICE` - Calculates prices by following the lowest product price on Allegro for a given marketplace.
                       <br />Is not available on business marketplaces.
                       <br /><a href="https://help.allegro.com/en/sell/a/how-the-pricing-rules-based-on-lowest-price-on-allegro-work-8drjrq7EkT5">More information about FOLLOW_BY_ALLEGRO_MIN_PRICE type</a>.
    * `FOLLOW_BY_MARKET_MIN_PRICE` - Calculates prices by following the lowest product price on market for a given marketplace.
                       <br />Is not available on business marketplaces.
                       <br /><a href="https://help.allegro.com/en/sell/a/how-the-pricing-rules-based-on-lowest-price-on-allegro-work-8drjrq7EkT5">More information about FOLLOW_BY_MARKET_MIN_PRICE type</a>.
    
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
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Indicates whether a rule is default (true) or created by merchant (false).
     *
     * @return bool
     */
    public function getDefault(): bool
    {
        return $this->default;
    }
    /**
     * Indicates whether a rule is default (true) or created by merchant (false).
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * The date the rule was last modified in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the rule was last modified in ISO 8601 format.
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
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getConfiguration(): ?iterable
    {
        return $this->configuration;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $configuration
     *
     * @return self
     */
    public function setConfiguration(?iterable $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;
        return $this;
    }
}