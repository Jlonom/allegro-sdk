<?php

namespace Jlonom\AllegroSDK\Model;

class LimitWithCurrencyDto extends \ArrayObject
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
     * Maximum value
     *
     * @var float
     */
    protected $limit;
    /**
     * ISO 4217 currency code. Currency code depends on marketplace, e.g. PLN for allegro-pl, CZK for allegro-cz.
     *
     * @var string
     */
    protected $currency;
    /**
     * Maximum value
     *
     * @return float
     */
    public function getLimit(): float
    {
        return $this->limit;
    }
    /**
     * Maximum value
     *
     * @param float $limit
     *
     * @return self
     */
    public function setLimit(float $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * ISO 4217 currency code. Currency code depends on marketplace, e.g. PLN for allegro-pl, CZK for allegro-cz.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * ISO 4217 currency code. Currency code depends on marketplace, e.g. PLN for allegro-pl, CZK for allegro-cz.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}