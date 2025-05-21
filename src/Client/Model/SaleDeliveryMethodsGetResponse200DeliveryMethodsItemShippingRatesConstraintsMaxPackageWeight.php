<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight extends \ArrayObject
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
     * Indicates whether the maximum package weight can be set in shipping rates for the delivery method.
     *
     * @var bool
     */
    protected $supported;
    /**
     * Lower limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @var string|null
     */
    protected $min;
    /**
     * Upper limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @var string|null
     */
    protected $max;
    /**
     * Weight unit. Currently only `KILOGRAM` is supported.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Indicates whether the maximum package weight can be set in shipping rates for the delivery method.
     *
     * @return bool
     */
    public function getSupported(): bool
    {
        return $this->supported;
    }
    /**
     * Indicates whether the maximum package weight can be set in shipping rates for the delivery method.
     *
     * @param bool $supported
     *
     * @return self
     */
    public function setSupported(bool $supported): self
    {
        $this->initialized['supported'] = true;
        $this->supported = $supported;
        return $this;
    }
    /**
     * Lower limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @return string|null
     */
    public function getMin(): ?string
    {
        return $this->min;
    }
    /**
     * Lower limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @param string|null $min
     *
     * @return self
     */
    public function setMin(?string $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * Upper limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @return string|null
     */
    public function getMax(): ?string
    {
        return $this->max;
    }
    /**
     * Upper limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @param string|null $max
     *
     * @return self
     */
    public function setMax(?string $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;
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