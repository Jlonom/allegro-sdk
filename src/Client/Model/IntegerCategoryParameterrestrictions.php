<?php

namespace Jlonom\AllegroSDK\Model;

class IntegerCategoryParameterrestrictions extends \ArrayObject
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
     * @var int
     */
    protected $min;
    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     *
     * @var int
     */
    protected $max;
    /**
     * Indicates whether this is a range parameter. If this is `true`, then you have to provide two values for this parameter - `from` and `to`. Both these values have to be between the `min` and `max`.
     *
     * @var bool
     */
    protected $range;
    /**
     * The minimum value of this parameter. Lower than or equal to `max`.
     *
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }
    /**
     * The minimum value of this parameter. Lower than or equal to `max`.
     *
     * @param int $min
     *
     * @return self
     */
    public function setMin(int $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     *
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }
    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     *
     * @param int $max
     *
     * @return self
     */
    public function setMax(int $max): self
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
}