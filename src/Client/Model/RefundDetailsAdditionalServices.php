<?php

namespace Jlonom\AllegroSDK\Model;

class RefundDetailsAdditionalServices extends \ArrayObject
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
     * Additional services amount for payment refund.
     *
     * @var RefundAdditionalServicesValue
     */
    protected $value;
    /**
     * Additional services amount for payment refund.
     *
     * @return RefundAdditionalServicesValue
     */
    public function getValue(): RefundAdditionalServicesValue
    {
        return $this->value;
    }
    /**
     * Additional services amount for payment refund.
     *
     * @param RefundAdditionalServicesValue $value
     *
     * @return self
     */
    public function setValue(RefundAdditionalServicesValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}