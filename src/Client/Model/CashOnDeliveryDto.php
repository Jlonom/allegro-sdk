<?php

namespace Jlonom\AllegroSDK\Model;

class CashOnDeliveryDto extends \ArrayObject
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
     * Postpaid value
     *
     * @var string
     */
    protected $amount;
    /**
     * ISO 4217 currency code.
     *
     * @var string
     */
    protected $currency;
    /**
     * Bank account owner.
     *
     * @var string
     */
    protected $ownerName;
    /**
     * Bank account number.
     *
     * @var string
     */
    protected $iban;
    /**
     * Postpaid value
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Postpaid value
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
     * ISO 4217 currency code.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * ISO 4217 currency code.
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
    /**
     * Bank account owner.
     *
     * @return string
     */
    public function getOwnerName(): string
    {
        return $this->ownerName;
    }
    /**
     * Bank account owner.
     *
     * @param string $ownerName
     *
     * @return self
     */
    public function setOwnerName(string $ownerName): self
    {
        $this->initialized['ownerName'] = true;
        $this->ownerName = $ownerName;
        return $this;
    }
    /**
     * Bank account number.
     *
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }
    /**
     * Bank account number.
     *
     * @param string $iban
     *
     * @return self
     */
    public function setIban(string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;
        return $this;
    }
}