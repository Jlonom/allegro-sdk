<?php

namespace Jlonom\AllegroSDK\Model;

class PickupProposalsResponseDto extends \ArrayObject
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
     * @var list<PickupDateProposalsDto>
     */
    protected $proposals;
    /**
     * Optional pickup address with optional drop-off point. If empty, then pickup address from Shipment object will be used.
     *
     * @var PickupAddressDto
     */
    protected $address;
    /**
     * 
     *
     * @return list<PickupDateProposalsDto>
     */
    public function getProposals(): array
    {
        return $this->proposals;
    }
    /**
     * 
     *
     * @param list<PickupDateProposalsDto> $proposals
     *
     * @return self
     */
    public function setProposals(array $proposals): self
    {
        $this->initialized['proposals'] = true;
        $this->proposals = $proposals;
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