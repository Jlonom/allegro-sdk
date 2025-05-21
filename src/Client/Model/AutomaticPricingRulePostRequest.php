<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRulePostRequest extends \ArrayObject
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
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @var string
     */
    protected $name;
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
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $configuration;
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