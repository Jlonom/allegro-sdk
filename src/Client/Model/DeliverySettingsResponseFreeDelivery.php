<?php

namespace Jlonom\AllegroSDK\Model;

class DeliverySettingsResponseFreeDelivery extends \ArrayObject
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
     * ISO 4217 currency code. Currency code depends on marketplace, e.g. PLN for allegro-pl, CZK for allegro-cz.
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