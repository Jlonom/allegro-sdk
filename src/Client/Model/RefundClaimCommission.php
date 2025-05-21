<?php

namespace Jlonom\AllegroSDK\Model;

class RefundClaimCommission extends \ArrayObject
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
     * Monetary amount of the returned refund application.
     *
     * @var float
     */
    protected $amount;
    /**
     * Three-letter currency code (ISO-4217) of the returned refund application.
     *
     * @var string
     */
    protected $currency;
    /**
     * Monetary amount of the returned refund application.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * Monetary amount of the returned refund application.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Three-letter currency code (ISO-4217) of the returned refund application.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Three-letter currency code (ISO-4217) of the returned refund application.
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