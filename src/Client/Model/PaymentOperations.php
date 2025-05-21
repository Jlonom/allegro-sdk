<?php

namespace Jlonom\AllegroSDK\Model;

class PaymentOperations extends \ArrayObject
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
     * Collection of payment operations.
     *
     * @var list<BaseOperation>
     */
    protected $paymentOperations;
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
     * Collection of payment operations.
     *
     * @return list<BaseOperation>
     */
    public function getPaymentOperations(): array
    {
        return $this->paymentOperations;
    }
    /**
     * Collection of payment operations.
     *
     * @param list<BaseOperation> $paymentOperations
     *
     * @return self
     */
    public function setPaymentOperations(array $paymentOperations): self
    {
        $this->initialized['paymentOperations'] = true;
        $this->paymentOperations = $paymentOperations;
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