<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingSummaryResponseV2Statistics extends \ArrayObject
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
     * Summary of received ratings.
     *
     * @var UserRatingSummaryResponseV2StatisticsReceived
     */
    protected $received;
    /**
     * Summary of excluded ratings.
     *
     * @var UserRatingSummaryResponseV2StatisticsExcluded
     */
    protected $excluded;
    /**
     * Summary of removed ratings.
     *
     * @var UserRatingSummaryResponseV2StatisticsRemoved
     */
    protected $removed;
    /**
     * Summary of received ratings.
     *
     * @return UserRatingSummaryResponseV2StatisticsReceived
     */
    public function getReceived(): UserRatingSummaryResponseV2StatisticsReceived
    {
        return $this->received;
    }
    /**
     * Summary of received ratings.
     *
     * @param UserRatingSummaryResponseV2StatisticsReceived $received
     *
     * @return self
     */
    public function setReceived(UserRatingSummaryResponseV2StatisticsReceived $received): self
    {
        $this->initialized['received'] = true;
        $this->received = $received;
        return $this;
    }
    /**
     * Summary of excluded ratings.
     *
     * @return UserRatingSummaryResponseV2StatisticsExcluded
     */
    public function getExcluded(): UserRatingSummaryResponseV2StatisticsExcluded
    {
        return $this->excluded;
    }
    /**
     * Summary of excluded ratings.
     *
     * @param UserRatingSummaryResponseV2StatisticsExcluded $excluded
     *
     * @return self
     */
    public function setExcluded(UserRatingSummaryResponseV2StatisticsExcluded $excluded): self
    {
        $this->initialized['excluded'] = true;
        $this->excluded = $excluded;
        return $this;
    }
    /**
     * Summary of removed ratings.
     *
     * @return UserRatingSummaryResponseV2StatisticsRemoved
     */
    public function getRemoved(): UserRatingSummaryResponseV2StatisticsRemoved
    {
        return $this->removed;
    }
    /**
     * Summary of removed ratings.
     *
     * @param UserRatingSummaryResponseV2StatisticsRemoved $removed
     *
     * @return self
     */
    public function setRemoved(UserRatingSummaryResponseV2StatisticsRemoved $removed): self
    {
        $this->initialized['removed'] = true;
        $this->removed = $removed;
        return $this;
    }
}