<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1Stats extends \ArrayObject
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
     * The number of users who added this offer to their watch lists.
     *
     * @var int
     */
    protected $watchersCount;
    /**
     * The number of unique users viewing this offer in the past 30 days.
     *
     * @var int
     */
    protected $visitsCount;
    /**
     * The number of users who added this offer to their watch lists.
     *
     * @return int
     */
    public function getWatchersCount(): int
    {
        return $this->watchersCount;
    }
    /**
     * The number of users who added this offer to their watch lists.
     *
     * @param int $watchersCount
     *
     * @return self
     */
    public function setWatchersCount(int $watchersCount): self
    {
        $this->initialized['watchersCount'] = true;
        $this->watchersCount = $watchersCount;
        return $this;
    }
    /**
     * The number of unique users viewing this offer in the past 30 days.
     *
     * @return int
     */
    public function getVisitsCount(): int
    {
        return $this->visitsCount;
    }
    /**
     * The number of unique users viewing this offer in the past 30 days.
     *
     * @param int $visitsCount
     *
     * @return self
     */
    public function setVisitsCount(int $visitsCount): self
    {
        $this->initialized['visitsCount'] = true;
        $this->visitsCount = $visitsCount;
        return $this;
    }
}