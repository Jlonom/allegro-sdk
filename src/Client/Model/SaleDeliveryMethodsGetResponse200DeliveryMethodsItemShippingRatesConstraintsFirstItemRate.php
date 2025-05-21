<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate extends \ArrayObject
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
     * Lower limit for the rate.
     *
     * @var string
     */
    protected $min;
    /**
     * Upper limit for the rate.
     *
     * @var string
     */
    protected $max;
    /**
     * ISO 4217 currency code.
     *
     * @var string
     */
    protected $currency;
    /**
     * Lower limit for the rate.
     *
     * @return string
     */
    public function getMin(): string
    {
        return $this->min;
    }
    /**
     * Lower limit for the rate.
     *
     * @param string $min
     *
     * @return self
     */
    public function setMin(string $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * Upper limit for the rate.
     *
     * @return string
     */
    public function getMax(): string
    {
        return $this->max;
    }
    /**
     * Upper limit for the rate.
     *
     * @param string $max
     *
     * @return self
     */
    public function setMax(string $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;
        return $this;
    }
    /**
     * ISO 4217 currency code.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * ISO 4217 currency code.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}