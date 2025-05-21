<?php

namespace Jlonom\AllegroSDK\Model;

class ParcelTrackingHistoryTrackingDetails extends \ArrayObject
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
     * List of parcel shipping statuses
     *
     * @var list<ParcelTrackingStatus>
     */
    protected $statuses;
    /**
     * The start time parcel tracking recording in ISO 8601 format
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Time of registration of the last shipment status change in ISO 8601 format
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * List of parcel shipping statuses
     *
     * @return list<ParcelTrackingStatus>
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }
    /**
     * List of parcel shipping statuses
     *
     * @param list<ParcelTrackingStatus> $statuses
     *
     * @return self
     */
    public function setStatuses(array $statuses): self
    {
        $this->initialized['statuses'] = true;
        $this->statuses = $statuses;
        return $this;
    }
    /**
     * The start time parcel tracking recording in ISO 8601 format
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The start time parcel tracking recording in ISO 8601 format
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Time of registration of the last shipment status change in ISO 8601 format
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Time of registration of the last shipment status change in ISO 8601 format
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}