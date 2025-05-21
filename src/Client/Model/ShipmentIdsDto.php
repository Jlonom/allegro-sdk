<?php

namespace Jlonom\AllegroSDK\Model;

class ShipmentIdsDto extends \ArrayObject
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
}