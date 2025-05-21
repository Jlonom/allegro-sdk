<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingSummaryResponseV2StatisticsRemoved extends \ArrayObject
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
     * Total number of removed ratings.
     *
     * @var int
     */
    protected $total;
    /**
     * Number of ratings removed by admin.
     *
     * @var int
     */
    protected $byAdmin;
    /**
     * Number of ratings removed by buyer.
     *
     * @var int
     */
    protected $byBuyer;
    /**
     * Number of ratings removed by buyer due to compensation.
     *
     * @var int
     */
    protected $byBuyerDueToCompensation;
    /**
     * Total number of removed ratings.
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Total number of removed ratings.
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * Number of ratings removed by admin.
     *
     * @return int
     */
    public function getByAdmin(): int
    {
        return $this->byAdmin;
    }
    /**
     * Number of ratings removed by admin.
     *
     * @param int $byAdmin
     *
     * @return self
     */
    public function setByAdmin(int $byAdmin): self
    {
        $this->initialized['byAdmin'] = true;
        $this->byAdmin = $byAdmin;
        return $this;
    }
    /**
     * Number of ratings removed by buyer.
     *
     * @return int
     */
    public function getByBuyer(): int
    {
        return $this->byBuyer;
    }
    /**
     * Number of ratings removed by buyer.
     *
     * @param int $byBuyer
     *
     * @return self
     */
    public function setByBuyer(int $byBuyer): self
    {
        $this->initialized['byBuyer'] = true;
        $this->byBuyer = $byBuyer;
        return $this;
    }
    /**
     * Number of ratings removed by buyer due to compensation.
     *
     * @return int
     */
    public function getByBuyerDueToCompensation(): int
    {
        return $this->byBuyerDueToCompensation;
    }
    /**
     * Number of ratings removed by buyer due to compensation.
     *
     * @param int $byBuyerDueToCompensation
     *
     * @return self
     */
    public function setByBuyerDueToCompensation(int $byBuyerDueToCompensation): self
    {
        $this->initialized['byBuyerDueToCompensation'] = true;
        $this->byBuyerDueToCompensation = $byBuyerDueToCompensation;
        return $this;
    }
}