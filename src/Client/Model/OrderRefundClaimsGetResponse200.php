<?php

namespace Jlonom\AllegroSDK\Model;

class OrderRefundClaimsGetResponse200 extends \ArrayObject
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
     * Collection of refund applications.
     *
     * @var list<RefundClaim>
     */
    protected $refundClaims;
    /**
     * Count of refund applications returned.
     *
     * @var int
     */
    protected $count;
    /**
     * Collection of refund applications.
     *
     * @return list<RefundClaim>
     */
    public function getRefundClaims(): array
    {
        return $this->refundClaims;
    }
    /**
     * Collection of refund applications.
     *
     * @param list<RefundClaim> $refundClaims
     *
     * @return self
     */
    public function setRefundClaims(array $refundClaims): self
    {
        $this->initialized['refundClaims'] = true;
        $this->refundClaims = $refundClaims;
        return $this;
    }
    /**
     * Count of refund applications returned.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Count of refund applications returned.
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
}