<?php

namespace Jlonom\AllegroSDK\Model;

class ParcelTrackingHistory extends \ArrayObject
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
     * @var ParcelTrackingHistoryTrackingDetails
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
     * @return ParcelTrackingHistoryTrackingDetails
     */
    public function getTrackingDetails(): ParcelTrackingHistoryTrackingDetails
    {
        return $this->trackingDetails;
    }
    /**
     * Parcel tracking history if available.
     *
     * @param ParcelTrackingHistoryTrackingDetails $trackingDetails
     *
     * @return self
     */
    public function setTrackingDetails(ParcelTrackingHistoryTrackingDetails $trackingDetails): self
    {
        $this->initialized['trackingDetails'] = true;
        $this->trackingDetails = $trackingDetails;
        return $this;
    }
}