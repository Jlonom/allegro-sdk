<?php

namespace Jlonom\AllegroSDK\Model;

class PickupCreateRequestDto extends \ArrayObject
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
     * Internal pickup proposal ID
     *
     * @var string
     */
    protected $pickupDateProposalId;
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
     * Internal pickup proposal ID
     *
     * @return string
     */
    public function getPickupDateProposalId(): string
    {
        return $this->pickupDateProposalId;
    }
    /**
     * Internal pickup proposal ID
     *
     * @param string $pickupDateProposalId
     *
     * @return self
     */
    public function setPickupDateProposalId(string $pickupDateProposalId): self
    {
        $this->initialized['pickupDateProposalId'] = true;
        $this->pickupDateProposalId = $pickupDateProposalId;
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