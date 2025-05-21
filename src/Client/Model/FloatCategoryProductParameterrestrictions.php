<?php

namespace Jlonom\AllegroSDK\Model;

class FloatCategoryProductParameterrestrictions extends \ArrayObject
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
     * The minimum value of this parameter. Lower than or equal to `max`.
     *
     * @var float
     */
    protected $min;
    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     *
     * @var float
     */
    protected $max;
    /**
     * Indicates whether this is a range parameter. If this is `true`, then you have to provide two values for this parameter - `from` and `to`. Both these values have to be between the `min` and `max`.
     *
     * @var bool
     */
    protected $range;
    /**
     * Number of digits you can provide after a comma that can be transferred in the parameter value.
     *
     * @var int
     */
    protected $precision;
    /**
     * The minimum value of this parameter. Lower than or equal to `max`.
     *
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }
    /**
     * The minimum value of this parameter. Lower than or equal to `max`.
     *
     * @param float $min
     *
     * @return self
     */
    public function setMin(float $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     *
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }
    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     *
     * @param float $max
     *
     * @return self
     */
    public function setMax(float $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;
        return $this;
    }
    /**
     * Indicates whether this is a range parameter. If this is `true`, then you have to provide two values for this parameter - `from` and `to`. Both these values have to be between the `min` and `max`.
     *
     * @return bool
     */
    public function getRange(): bool
    {
        return $this->range;
    }
    /**
     * Indicates whether this is a range parameter. If this is `true`, then you have to provide two values for this parameter - `from` and `to`. Both these values have to be between the `min` and `max`.
     *
     * @param bool $range
     *
     * @return self
     */
    public function setRange(bool $range): self
    {
        $this->initialized['range'] = true;
        $this->range = $range;
        return $this;
    }
    /**
     * Number of digits you can provide after a comma that can be transferred in the parameter value.
     *
     * @return int
     */
    public function getPrecision(): int
    {
        return $this->precision;
    }
    /**
     * Number of digits you can provide after a comma that can be transferred in the parameter value.
     *
     * @param int $precision
     *
     * @return self
     */
    public function setPrecision(int $precision): self
    {
        $this->initialized['precision'] = true;
        $this->precision = $precision;
        return $this;
    }
}