<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200 extends \ArrayObject
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
     * @var list<SaleDeliveryMethodsGetResponse200DeliveryMethodsItem>
     */
    protected $deliveryMethods;
    /**
     * 
     *
     * @return list<SaleDeliveryMethodsGetResponse200DeliveryMethodsItem>
     */
    public function getDeliveryMethods(): array
    {
        return $this->deliveryMethods;
    }
    /**
     * 
     *
     * @param list<SaleDeliveryMethodsGetResponse200DeliveryMethodsItem> $deliveryMethods
     *
     * @return self
     */
    public function setDeliveryMethods(array $deliveryMethods): self
    {
        $this->initialized['deliveryMethods'] = true;
        $this->deliveryMethods = $deliveryMethods;
        return $this;
    }
}