<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeProcess extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * A list of messages with rejection reasons. Returned for process.status = DECLINED only.
     *
     * @var list<BadgeApplicationRejectionReason>
     */
    protected $rejectionReasons;
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * A list of messages with rejection reasons. Returned for process.status = DECLINED only.
     *
     * @return list<BadgeApplicationRejectionReason>
     */
    public function getRejectionReasons(): array
    {
        return $this->rejectionReasons;
    }
    /**
     * A list of messages with rejection reasons. Returned for process.status = DECLINED only.
     *
     * @param list<BadgeApplicationRejectionReason> $rejectionReasons
     *
     * @return self
     */
    public function setRejectionReasons(array $rejectionReasons): self
    {
        $this->initialized['rejectionReasons'] = true;
        $this->rejectionReasons = $rejectionReasons;
        return $this;
    }
}