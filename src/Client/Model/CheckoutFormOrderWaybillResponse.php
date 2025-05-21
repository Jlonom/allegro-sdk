<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormOrderWaybillResponse extends \ArrayObject
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
     * List of parcel tracking numbers currently assigned to the order.
     *
     * @var list<CheckoutFormAddWaybillCreated>
     */
    protected $shipments;
    /**
     * List of parcel tracking numbers currently assigned to the order.
     *
     * @return list<CheckoutFormAddWaybillCreated>
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }
    /**
     * List of parcel tracking numbers currently assigned to the order.
     *
     * @param list<CheckoutFormAddWaybillCreated> $shipments
     *
     * @return self
     */
    public function setShipments(array $shipments): self
    {
        $this->initialized['shipments'] = true;
        $this->shipments = $shipments;
        return $this;
    }
}