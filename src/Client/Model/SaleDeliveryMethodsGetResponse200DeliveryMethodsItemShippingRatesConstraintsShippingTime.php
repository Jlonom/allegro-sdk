<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime extends \ArrayObject
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
     * Default shipping time.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault
     */
    protected $default;
    /**
     * Indicates if custom shipping time can be set when adding or modifying shipping rates.
     *
     * @var bool
     */
    protected $customizable;
    /**
     * Default shipping time.
     *
     * @return SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault
     */
    public function getDefault(): SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault
    {
        return $this->default;
    }
    /**
     * Default shipping time.
     *
     * @param SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault $default
     *
     * @return self
     */
    public function setDefault(SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * Indicates if custom shipping time can be set when adding or modifying shipping rates.
     *
     * @return bool
     */
    public function getCustomizable(): bool
    {
        return $this->customizable;
    }
    /**
     * Indicates if custom shipping time can be set when adding or modifying shipping rates.
     *
     * @param bool $customizable
     *
     * @return self
     */
    public function setCustomizable(bool $customizable): self
    {
        $this->initialized['customizable'] = true;
        $this->customizable = $customizable;
        return $this;
    }
}