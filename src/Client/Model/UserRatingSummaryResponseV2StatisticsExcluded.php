<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingSummaryResponseV2StatisticsExcluded extends \ArrayObject
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
     * Total number of excluded ratings.
     *
     * @var int
     */
    protected $total;
    /**
     * Total number of excluded ratings.
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Total number of excluded ratings.
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
}