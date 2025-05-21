<?php

namespace Jlonom\AllegroSDK\Model;

class RefundDetailsDelivery extends \ArrayObject
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
     * Delivery amount for payment refund.
     *
     * @var RefundDeliveryValue
     */
    protected $value;
    /**
     * Delivery amount for payment refund.
     *
     * @return RefundDeliveryValue
     */
    public function getValue(): RefundDeliveryValue
    {
        return $this->value;
    }
    /**
     * Delivery amount for payment refund.
     *
     * @param RefundDeliveryValue $value
     *
     * @return self
     */
    public function setValue(RefundDeliveryValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}