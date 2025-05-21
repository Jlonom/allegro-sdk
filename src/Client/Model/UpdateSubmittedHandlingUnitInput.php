<?php

namespace Jlonom\AllegroSDK\Model;

class UpdateSubmittedHandlingUnitInput extends \ArrayObject
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
     * Number of handling units. Depending on the selected handling unit type, it's the number of boxes, pallets or packages placed in the container to be dispatched.
     *
     * @var float
     */
    protected $amount;
    /**
     * Number of handling units. Depending on the selected handling unit type, it's the number of boxes, pallets or packages placed in the container to be dispatched.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * Number of handling units. Depending on the selected handling unit type, it's the number of boxes, pallets or packages placed in the container to be dispatched.
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
}