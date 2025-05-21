<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormSummary extends \ArrayObject
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
     * 
     *
     * @var CheckoutFormSummaryTotalToPay
     */
    protected $totalToPay;
    /**
     * 
     *
     * @return CheckoutFormSummaryTotalToPay
     */
    public function getTotalToPay(): CheckoutFormSummaryTotalToPay
    {
        return $this->totalToPay;
    }
    /**
     * 
     *
     * @param CheckoutFormSummaryTotalToPay $totalToPay
     *
     * @return self
     */
    public function setTotalToPay(CheckoutFormSummaryTotalToPay $totalToPay): self
    {
        $this->initialized['totalToPay'] = true;
        $this->totalToPay = $totalToPay;
        return $this;
    }
}