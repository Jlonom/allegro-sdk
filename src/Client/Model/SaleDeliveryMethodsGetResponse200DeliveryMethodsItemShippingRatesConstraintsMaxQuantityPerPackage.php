<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage extends \ArrayObject
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
     * Upper limit for quantity per package.
     *
     * @var int
     */
    protected $max;
    /**
     * Upper limit for quantity per package.
     *
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }
    /**
     * Upper limit for quantity per package.
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
}