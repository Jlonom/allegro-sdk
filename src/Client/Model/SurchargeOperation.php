<?php

namespace Jlonom\AllegroSDK\Model;

class SurchargeOperation extends BaseOperation
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
     * Surcharge.
     *
     * @var Surcharge
     */
    protected $surcharge;
    /**
     * The buyer's data.
     *
     * @var BuyerParticipant
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
     * Surcharge.
     *
     * @return Surcharge
     */
    public function getSurcharge(): Surcharge
    {
        return $this->surcharge;
    }
    /**
     * Surcharge.
     *
     * @param Surcharge $surcharge
     *
     * @return self
     */
    public function setSurcharge(Surcharge $surcharge): self
    {
        $this->initialized['surcharge'] = true;
        $this->surcharge = $surcharge;
        return $this;
    }
    /**
     * The buyer's data.
     *
     * @return BuyerParticipant
     */
    public function getParticipant(): BuyerParticipant
    {
        return $this->participant;
    }
    /**
     * The buyer's data.
     *
     * @param BuyerParticipant $participant
     *
     * @return self
     */
    public function setParticipant(BuyerParticipant $participant): self
    {
        $this->initialized['participant'] = true;
        $this->participant = $participant;
        return $this;
    }
}