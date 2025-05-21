<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingSummaryResponseRecommended extends \ArrayObject
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
     * Total number of positive feedbacks received.
     *
     * @var int
     */
    protected $total;
    /**
     * Number of unique users.
     *
     * @var int
     */
    protected $unique;
    /**
     * Total number of positive feedbacks received.
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Total number of positive feedbacks received.
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
     * Number of unique users.
     *
     * @return int
     */
    public function getUnique(): int
    {
        return $this->unique;
    }
    /**
     * Number of unique users.
     *
     * @param int $unique
     *
     * @return self
     */
    public function setUnique(int $unique): self
    {
        $this->initialized['unique'] = true;
        $this->unique = $unique;
        return $this;
    }
}