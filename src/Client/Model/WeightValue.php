<?php

namespace Jlonom\AllegroSDK\Model;

class WeightValue extends \ArrayObject
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
     * Weight value, provided in a string format to avoid rounding errors.
     *
     * @var float
     */
    protected $value;
    /**
     * Weight unit. Currently only `KILOGRAMS` is accepted.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Weight value, provided in a string format to avoid rounding errors.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Weight value, provided in a string format to avoid rounding errors.
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
     * Weight unit. Currently only `KILOGRAMS` is accepted.
     *
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * Weight unit. Currently only `KILOGRAMS` is accepted.
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