<?php

namespace Jlonom\AllegroSDK\Model;

class RefundCancelOperation extends BaseOperation
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
     * Payment.
     *
     * @var OperationPayment
     */
    protected $payment;
    /**
     * Payment.
     *
     * @return OperationPayment
     */
    public function getPayment(): OperationPayment
    {
        return $this->payment;
    }
    /**
     * Payment.
     *
     * @param OperationPayment $payment
     *
     * @return self
     */
    public function setPayment(OperationPayment $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
}