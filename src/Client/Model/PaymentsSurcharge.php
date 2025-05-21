<?php

namespace Jlonom\AllegroSDK\Model;

class PaymentsSurcharge extends \ArrayObject
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
     * The payment identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Surcharge refund amount.
     *
     * @var RefundSurchargeValue
     */
    protected $value;
    /**
     * The payment identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The payment identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Surcharge refund amount.
     *
     * @return RefundSurchargeValue
     */
    public function getValue(): RefundSurchargeValue
    {
        return $this->value;
    }
    /**
     * Surcharge refund amount.
     *
     * @param RefundSurchargeValue $value
     *
     * @return self
     */
    public function setValue(RefundSurchargeValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}