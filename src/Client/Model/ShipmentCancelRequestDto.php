<?php

namespace Jlonom\AllegroSDK\Model;

class ShipmentCancelRequestDto extends \ArrayObject
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
}