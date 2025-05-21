<?php

namespace Jlonom\AllegroSDK\Model;

class TaskCount extends \ArrayObject
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
     * Current number of failed offers updates
     *
     * @var int
     */
    protected $failed;
    /**
     * Current number of success offers updates
     *
     * @var int
     */
    protected $success;
    /**
     * Total number of scheduled offers updates
     *
     * @var int
     */
    protected $total;
    /**
     * Current number of failed offers updates
     *
     * @return int
     */
    public function getFailed(): int
    {
        return $this->failed;
    }
    /**
     * Current number of failed offers updates
     *
     * @param int $failed
     *
     * @return self
     */
    public function setFailed(int $failed): self
    {
        $this->initialized['failed'] = true;
        $this->failed = $failed;
        return $this;
    }
    /**
     * Current number of success offers updates
     *
     * @return int
     */
    public function getSuccess(): int
    {
        return $this->success;
    }
    /**
     * Current number of success offers updates
     *
     * @param int $success
     *
     * @return self
     */
    public function setSuccess(int $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
    /**
     * Total number of scheduled offers updates
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Total number of scheduled offers updates
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