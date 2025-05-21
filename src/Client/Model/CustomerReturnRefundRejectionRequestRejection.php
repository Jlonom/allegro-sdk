<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnRefundRejectionRequestRejection extends \ArrayObject
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
     * Refund rejection code
     *
     * @var string
     */
    protected $code;
    /**
     * Refund rejection reason, required when code is REFUND_REJECTED
     *
     * @var string
     */
    protected $reason;
    /**
     * Refund rejection code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Refund rejection code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Refund rejection reason, required when code is REFUND_REJECTED
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * Refund rejection reason, required when code is REFUND_REJECTED
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
}