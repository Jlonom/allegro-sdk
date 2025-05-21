<?php

namespace Jlonom\AllegroSDK\Model;

class OrdersShippingCarriersResponse extends \ArrayObject
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
     * List of shipping carriers.
     *
     * @var list<OrdersShippingCarrier>
     */
    protected $carriers;
    /**
     * List of shipping carriers.
     *
     * @return list<OrdersShippingCarrier>
     */
    public function getCarriers(): array
    {
        return $this->carriers;
    }
    /**
     * List of shipping carriers.
     *
     * @param list<OrdersShippingCarrier> $carriers
     *
     * @return self
     */
    public function setCarriers(array $carriers): self
    {
        $this->initialized['carriers'] = true;
        $this->carriers = $carriers;
        return $this;
    }
}