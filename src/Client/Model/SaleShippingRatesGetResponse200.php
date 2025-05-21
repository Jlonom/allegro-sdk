<?php

namespace Jlonom\AllegroSDK\Model;

class SaleShippingRatesGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var list<SaleShippingRatesGetResponse200ShippingRatesItem>
     */
    protected $shippingRates;
    /**
     * 
     *
     * @return list<SaleShippingRatesGetResponse200ShippingRatesItem>
     */
    public function getShippingRates(): array
    {
        return $this->shippingRates;
    }
    /**
     * 
     *
     * @param list<SaleShippingRatesGetResponse200ShippingRatesItem> $shippingRates
     *
     * @return self
     */
    public function setShippingRates(array $shippingRates): self
    {
        $this->initialized['shippingRates'] = true;
        $this->shippingRates = $shippingRates;
        return $this;
    }
}