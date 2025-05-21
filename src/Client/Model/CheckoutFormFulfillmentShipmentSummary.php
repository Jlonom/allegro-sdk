<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormFulfillmentShipmentSummary extends \ArrayObject
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
     * Indicates how many line items have tracking number specified.
     *
     * @var mixed
     */
    protected $lineItemsSent;
    /**
     * Indicates how many line items have tracking number specified.
     *
     * @return mixed
     */
    public function getLineItemsSent()
    {
        return $this->lineItemsSent;
    }
    /**
     * Indicates how many line items have tracking number specified.
     *
     * @param mixed $lineItemsSent
     *
     * @return self
     */
    public function setLineItemsSent($lineItemsSent): self
    {
        $this->initialized['lineItemsSent'] = true;
        $this->lineItemsSent = $lineItemsSent;
        return $this;
    }
}