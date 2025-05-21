<?php

namespace Jlonom\AllegroSDK\Model;

class RefundDetailsOverpaid extends \ArrayObject
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
     * Overpaid amount for payment refund.
     *
     * @var RefundOverpaidValue
     */
    protected $value;
    /**
     * Overpaid amount for payment refund.
     *
     * @return RefundOverpaidValue
     */
    public function getValue(): RefundOverpaidValue
    {
        return $this->value;
    }
    /**
     * Overpaid amount for payment refund.
     *
     * @param RefundOverpaidValue $value
     *
     * @return self
     */
    public function setValue(RefundOverpaidValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}