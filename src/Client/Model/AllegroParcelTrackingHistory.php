<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroParcelTrackingHistory extends \ArrayObject
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
     * Waybill number (parcel tracking number).
     *
     * @var string
     */
    protected $waybill;
    /**
     * Parcel tracking history if available.
     *
     * @var AllegroParcelTrackingHistoryTrackingDetails
     */
    protected $trackingDetails;
    /**
     * Waybill number (parcel tracking number).
     *
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }
    /**
     * Waybill number (parcel tracking number).
     *
     * @param string $waybill
     *
     * @return self
     */
    public function setWaybill(string $waybill): self
    {
        $this->initialized['waybill'] = true;
        $this->waybill = $waybill;
        return $this;
    }
    /**
     * Parcel tracking history if available.
     *
     * @return AllegroParcelTrackingHistoryTrackingDetails
     */
    public function getTrackingDetails(): AllegroParcelTrackingHistoryTrackingDetails
    {
        return $this->trackingDetails;
    }
    /**
     * Parcel tracking history if available.
     *
     * @param AllegroParcelTrackingHistoryTrackingDetails $trackingDetails
     *
     * @return self
     */
    public function setTrackingDetails(AllegroParcelTrackingHistoryTrackingDetails $trackingDetails): self
    {
        $this->initialized['trackingDetails'] = true;
        $this->trackingDetails = $trackingDetails;
        return $this;
    }
}