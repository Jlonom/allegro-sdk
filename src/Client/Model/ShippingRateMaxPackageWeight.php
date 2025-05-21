<?php

namespace Jlonom\AllegroSDK\Model;

class ShippingRateMaxPackageWeight extends \ArrayObject
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
     * Weight value with an accuracy of three decimal places.
     *
     * @var string
     */
    protected $value;
    /**
     * Weight unit. Currently only `KILOGRAM` is supported.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Weight value with an accuracy of three decimal places.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Weight value with an accuracy of three decimal places.
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
    /**
     * Weight unit. Currently only `KILOGRAM` is supported.
     *
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * Weight unit. Currently only `KILOGRAM` is supported.
     *
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
}