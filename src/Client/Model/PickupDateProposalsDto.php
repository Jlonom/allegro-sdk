<?php

namespace Jlonom\AllegroSDK\Model;

class PickupDateProposalsDto extends \ArrayObject
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
     * @var string
     */
    protected $shipmentId;
    /**
     * 
     *
     * @var list<PickupDateProposalDto>
     */
    protected $proposalItems;
    /**
     * 
     *
     * @return string
     */
    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }
    /**
     * 
     *
     * @param string $shipmentId
     *
     * @return self
     */
    public function setShipmentId(string $shipmentId): self
    {
        $this->initialized['shipmentId'] = true;
        $this->shipmentId = $shipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return list<PickupDateProposalDto>
     */
    public function getProposalItems(): array
    {
        return $this->proposalItems;
    }
    /**
     * 
     *
     * @param list<PickupDateProposalDto> $proposalItems
     *
     * @return self
     */
    public function setProposalItems(array $proposalItems): self
    {
        $this->initialized['proposalItems'] = true;
        $this->proposalItems = $proposalItems;
        return $this;
    }
}