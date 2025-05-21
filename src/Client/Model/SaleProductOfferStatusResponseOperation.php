<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferStatusResponseOperation extends \ArrayObject
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
     * The unique operation identifier (UUID).
     *
     * @var string
     */
    protected $id;
    /**
     * Status of the operation.
     *
     * @var string
     */
    protected $status;
    /**
     * The starting date and time of operation.
     *
     * @var string
     */
    protected $startedAt;
    /**
     * The unique operation identifier (UUID).
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique operation identifier (UUID).
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Status of the operation.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status of the operation.
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
     * The starting date and time of operation.
     *
     * @return string
     */
    public function getStartedAt(): string
    {
        return $this->startedAt;
    }
    /**
     * The starting date and time of operation.
     *
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(string $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
}