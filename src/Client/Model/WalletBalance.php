<?php

namespace Jlonom\AllegroSDK\Model;

class WalletBalance extends \ArrayObject
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
     * The amount provided in a string format to avoid rounding errors.
     *
     * @var string
     */
    protected $amount;
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217).
     *
     * @var string
     */
    protected $currency;
    /**
     * The amount provided in a string format to avoid rounding errors.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * The amount provided in a string format to avoid rounding errors.
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
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217).
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217).
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