<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormInvoiceAddressCompanyId extends \ArrayObject
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
     * The tax id type.
     *
     * @var string
     */
    protected $type;
    /**
     * The tax id value.
     *
     * @var string
     */
    protected $value;
    /**
     * The tax id type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The tax id type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The tax id value.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The tax id value.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}