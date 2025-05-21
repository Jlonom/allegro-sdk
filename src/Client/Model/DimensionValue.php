<?php

namespace Jlonom\AllegroSDK\Model;

class DimensionValue extends \ArrayObject
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
     * Dimension value.
     *
     * @var float
     */
    protected $value;
    /**
     * Dimension unit. Currently only `CENTIMETER` is accepted.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Dimension value.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Dimension value.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Dimension unit. Currently only `CENTIMETER` is accepted.
     *
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * Dimension unit. Currently only `CENTIMETER` is accepted.
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