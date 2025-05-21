<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmitCommandResponseOutput extends \ArrayObject
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
     * Execution status of the command.
     *
     * @var string
     */
    protected $status;
    /**
     * Creation date of the command. ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Update date of the command. ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Execution status of the command.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Execution status of the command.
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
     * Creation date of the command. ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date of the command. ISO 8601 format.
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
    /**
     * Update date of the command. ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Update date of the command. ISO 8601 format.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}