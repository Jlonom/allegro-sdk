<?php

namespace Jlonom\AllegroSDK\Model;

class CarrierParcelTrackingResponse extends \ArrayObject
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
     * Carrier identifier.
     *
     * @var string
     */
    protected $carrierId;
    /**
     * Allegro parcel tracking history for multiple tracking numbers (waybills).
     *
     * @var list<ParcelTrackingHistory>
     */
    protected $waybills;
    /**
     * Carrier identifier.
     *
     * @return string
     */
    public function getCarrierId(): string
    {
        return $this->carrierId;
    }
    /**
     * Carrier identifier.
     *
     * @param string $carrierId
     *
     * @return self
     */
    public function setCarrierId(string $carrierId): self
    {
        $this->initialized['carrierId'] = true;
        $this->carrierId = $carrierId;
        return $this;
    }
    /**
     * Allegro parcel tracking history for multiple tracking numbers (waybills).
     *
     * @return list<ParcelTrackingHistory>
     */
    public function getWaybills(): array
    {
        return $this->waybills;
    }
    /**
     * Allegro parcel tracking history for multiple tracking numbers (waybills).
     *
     * @param list<ParcelTrackingHistory> $waybills
     *
     * @return self
     */
    public function setWaybills(array $waybills): self
    {
        $this->initialized['waybills'] = true;
        $this->waybills = $waybills;
        return $this;
    }
}