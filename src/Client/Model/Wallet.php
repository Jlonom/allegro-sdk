<?php

namespace Jlonom\AllegroSDK\Model;

class Wallet extends \ArrayObject
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
     * The payment operator.
     *
     * @var string
     */
    protected $paymentOperator;
    /**
     * The type of the wallet.
     *
     * @var string
     */
    protected $type;
    /**
     * The wallet balance after the operation.
     *
     * @var WalletBalance
     */
    protected $balance;
    /**
     * The payment operator.
     *
     * @return string
     */
    public function getPaymentOperator(): string
    {
        return $this->paymentOperator;
    }
    /**
     * The payment operator.
     *
     * @param string $paymentOperator
     *
     * @return self
     */
    public function setPaymentOperator(string $paymentOperator): self
    {
        $this->initialized['paymentOperator'] = true;
        $this->paymentOperator = $paymentOperator;
        return $this;
    }
    /**
     * The type of the wallet.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the wallet.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The wallet balance after the operation.
     *
     * @return WalletBalance
     */
    public function getBalance(): WalletBalance
    {
        return $this->balance;
    }
    /**
     * The wallet balance after the operation.
     *
     * @param WalletBalance $balance
     *
     * @return self
     */
    public function setBalance(WalletBalance $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;
        return $this;
    }
}