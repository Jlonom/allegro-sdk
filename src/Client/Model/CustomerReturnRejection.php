<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnRejection extends \ArrayObject
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
     * Reason of refund cancellation.
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
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
     * Reason of refund cancellation.
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * Reason of refund cancellation.
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
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
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
}