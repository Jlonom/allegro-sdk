<?php

namespace Jlonom\AllegroSDK\Model;

class StockStorageFeeDetails extends \ArrayObject
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
     * Predicted date when the fee will be charged based on quantity and average sales. Only present in case of PREDICTION status, null otherwise.
     *
     * @var string
     */
    protected $feePayableAt;
    /**
     * Number of items, for which storage fee was charged. For example seller might have 20 items in total, but only 3 of them are stored longer than free storage period, so the fee is applied only for them.
     *
     * @var float
     */
    protected $chargedItemsQuantity;
    /**
     * Total gross amount of the charged fee.
     *
     * @var float
     */
    protected $amountGross;
    /**
     * Currency in which the fee was charged.
     *
     * @var string
     */
    protected $currency;
    /**
     * Predicted date when the fee will be charged based on quantity and average sales. Only present in case of PREDICTION status, null otherwise.
     *
     * @return string
     */
    public function getFeePayableAt(): string
    {
        return $this->feePayableAt;
    }
    /**
     * Predicted date when the fee will be charged based on quantity and average sales. Only present in case of PREDICTION status, null otherwise.
     *
     * @param string $feePayableAt
     *
     * @return self
     */
    public function setFeePayableAt(string $feePayableAt): self
    {
        $this->initialized['feePayableAt'] = true;
        $this->feePayableAt = $feePayableAt;
        return $this;
    }
    /**
     * Number of items, for which storage fee was charged. For example seller might have 20 items in total, but only 3 of them are stored longer than free storage period, so the fee is applied only for them.
     *
     * @return float
     */
    public function getChargedItemsQuantity(): float
    {
        return $this->chargedItemsQuantity;
    }
    /**
     * Number of items, for which storage fee was charged. For example seller might have 20 items in total, but only 3 of them are stored longer than free storage period, so the fee is applied only for them.
     *
     * @param float $chargedItemsQuantity
     *
     * @return self
     */
    public function setChargedItemsQuantity(float $chargedItemsQuantity): self
    {
        $this->initialized['chargedItemsQuantity'] = true;
        $this->chargedItemsQuantity = $chargedItemsQuantity;
        return $this;
    }
    /**
     * Total gross amount of the charged fee.
     *
     * @return float
     */
    public function getAmountGross(): float
    {
        return $this->amountGross;
    }
    /**
     * Total gross amount of the charged fee.
     *
     * @param float $amountGross
     *
     * @return self
     */
    public function setAmountGross(float $amountGross): self
    {
        $this->initialized['amountGross'] = true;
        $this->amountGross = $amountGross;
        return $this;
    }
    /**
     * Currency in which the fee was charged.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Currency in which the fee was charged.
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