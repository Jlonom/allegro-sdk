<?php

namespace Jlonom\AllegroSDK\Model;

class BillingEntryValue extends \ArrayObject
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
     * Monetary amount of the returned billing entry.
     *
     * @var string
     */
    protected $amount;
    /**
     * Three-letter currency code (ISO-4217) of the returned billing entry.
     *
     * @var string
     */
    protected $currency;
    /**
     * Monetary amount of the returned billing entry.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Monetary amount of the returned billing entry.
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
     * Three-letter currency code (ISO-4217) of the returned billing entry.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Three-letter currency code (ISO-4217) of the returned billing entry.
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