<?php

namespace Jlonom\AllegroSDK\Model;

class PaymentsRefundsGetResponse200 extends \ArrayObject
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
     * Collection of payments refunds.
     *
     * @var list<RefundDetails>
     */
    protected $refunds;
    /**
     * Number of payment operations returned in search result for the given parameters.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of payment operations for the given parameters.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Collection of payments refunds.
     *
     * @return list<RefundDetails>
     */
    public function getRefunds(): array
    {
        return $this->refunds;
    }
    /**
     * Collection of payments refunds.
     *
     * @param list<RefundDetails> $refunds
     *
     * @return self
     */
    public function setRefunds(array $refunds): self
    {
        $this->initialized['refunds'] = true;
        $this->refunds = $refunds;
        return $this;
    }
    /**
     * Number of payment operations returned in search result for the given parameters.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of payment operations returned in search result for the given parameters.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Total number of payment operations for the given parameters.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of payment operations for the given parameters.
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}