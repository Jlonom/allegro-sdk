<?php

namespace Jlonom\AllegroSDK\Model;

class RefundIncreaseOperation extends BaseOperation
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
     * The seller's data.
     *
     * @var SellerParticipant
     */
    protected $participant;
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
    /**
     * The seller's data.
     *
     * @return SellerParticipant
     */
    public function getParticipant(): SellerParticipant
    {
        return $this->participant;
    }
    /**
     * The seller's data.
     *
     * @param SellerParticipant $participant
     *
     * @return self
     */
    public function setParticipant(SellerParticipant $participant): self
    {
        $this->initialized['participant'] = true;
        $this->participant = $participant;
        return $this;
    }
}