<?php

namespace Jlonom\AllegroSDK\Model;

class TurnoverDiscountThresholdDtoMinimumTurnover extends \ArrayObject
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
     * Amount of the minimal turnover. The fractional part must be absent or equal to 0.
     *
     * @var string
     */
    protected $amount;
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Must meet the base currency for the marketplace.
     *
     * @var string
     */
    protected $currency;
    /**
     * Amount of the minimal turnover. The fractional part must be absent or equal to 0.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Amount of the minimal turnover. The fractional part must be absent or equal to 0.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Must meet the base currency for the marketplace.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Must meet the base currency for the marketplace.
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