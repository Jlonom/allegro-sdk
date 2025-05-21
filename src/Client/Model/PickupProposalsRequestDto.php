<?php

namespace Jlonom\AllegroSDK\Model;

class PickupProposalsRequestDto extends \ArrayObject
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
     * @var list<string>
     */
    protected $shipmentIds;
    /**
     * Date when shipments will be ready.
     *
     * @var string
     */
    protected $readyDate;
    /**
     * Optional pickup address with optional drop-off point. If empty, then pickup address from Shipment object will be used.
     *
     * @var PickupAddressDto
     */
    protected $address;
    /**
     * 
     *
     * @return list<string>
     */
    public function getShipmentIds(): array
    {
        return $this->shipmentIds;
    }
    /**
     * 
     *
     * @param list<string> $shipmentIds
     *
     * @return self
     */
    public function setShipmentIds(array $shipmentIds): self
    {
        $this->initialized['shipmentIds'] = true;
        $this->shipmentIds = $shipmentIds;
        return $this;
    }
    /**
     * Date when shipments will be ready.
     *
     * @return string
     */
    public function getReadyDate(): string
    {
        return $this->readyDate;
    }
    /**
     * Date when shipments will be ready.
     *
     * @param string $readyDate
     *
     * @return self
     */
    public function setReadyDate(string $readyDate): self
    {
        $this->initialized['readyDate'] = true;
        $this->readyDate = $readyDate;
        return $this;
    }
    /**
     * Optional pickup address with optional drop-off point. If empty, then pickup address from Shipment object will be used.
     *
     * @return PickupAddressDto
     */
    public function getAddress(): PickupAddressDto
    {
        return $this->address;
    }
    /**
     * Optional pickup address with optional drop-off point. If empty, then pickup address from Shipment object will be used.
     *
     * @param PickupAddressDto $address
     *
     * @return self
     */
    public function setAddress(PickupAddressDto $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}