<?php

namespace Jlonom\AllegroSDK\Model;

class CashOnDeliveryLimitDto extends \ArrayObject
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
     * Supported currency: 'PLN' | 'CZK
     *
     * @var string
     */
    protected $currency = 'PLN';
    /**
     * Type of payment: Money transfer to merchant bank account or internal wallet payout
     *
     * @var string
     */
    protected $paymentType;
    /**
     * Defined that COD required IBAN for process shipment. If true, then request of shipment creation without IBAN will be rejected.
     *
     * @var bool
     */
    protected $forceRequireIban;
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
     * Supported currency: 'PLN' | 'CZK
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Supported currency: 'PLN' | 'CZK
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
     * Type of payment: Money transfer to merchant bank account or internal wallet payout
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * Type of payment: Money transfer to merchant bank account or internal wallet payout
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * Defined that COD required IBAN for process shipment. If true, then request of shipment creation without IBAN will be rejected.
     *
     * @return bool
     */
    public function getForceRequireIban(): bool
    {
        return $this->forceRequireIban;
    }
    /**
     * Defined that COD required IBAN for process shipment. If true, then request of shipment creation without IBAN will be rejected.
     *
     * @param bool $forceRequireIban
     *
     * @return self
     */
    public function setForceRequireIban(bool $forceRequireIban): self
    {
        $this->initialized['forceRequireIban'] = true;
        $this->forceRequireIban = $forceRequireIban;
        return $this;
    }
}