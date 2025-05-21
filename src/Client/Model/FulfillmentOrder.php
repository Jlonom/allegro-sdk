<?php

namespace Jlonom\AllegroSDK\Model;

class FulfillmentOrder extends \ArrayObject
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
     * order identifier
     *
     * @var string
     */
    protected $orderId;
    /**
     * 
     *
     * @var list<FulfillmentOrderParcel>
     */
    protected $parcels;
    /**
     * order identifier
     *
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }
    /**
     * order identifier
     *
     * @param string $orderId
     *
     * @return self
     */
    public function setOrderId(string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * 
     *
     * @return list<FulfillmentOrderParcel>
     */
    public function getParcels(): array
    {
        return $this->parcels;
    }
    /**
     * 
     *
     * @param list<FulfillmentOrderParcel> $parcels
     *
     * @return self
     */
    public function setParcels(array $parcels): self
    {
        $this->initialized['parcels'] = true;
        $this->parcels = $parcels;
        return $this;
    }
}