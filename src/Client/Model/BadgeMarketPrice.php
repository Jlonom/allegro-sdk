<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeMarketPrice extends \ArrayObject
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
     * Value must be greater than minimal, decimal places aligned with market rules.
     *
     * @var string
     */
    protected $amount;
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Only base currency for a given marketplace is supported, example: PLN for allegro-pl, CZK for allegro-cz, EUR for allegro-sk.
     *
     * @var string
     */
    protected $currency;
    /**
     * Value must be greater than minimal, decimal places aligned with market rules.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Value must be greater than minimal, decimal places aligned with market rules.
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
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Only base currency for a given marketplace is supported, example: PLN for allegro-pl, CZK for allegro-cz, EUR for allegro-sk.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Only base currency for a given marketplace is supported, example: PLN for allegro-pl, CZK for allegro-cz, EUR for allegro-sk.
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