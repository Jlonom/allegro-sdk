<?php

namespace Jlonom\AllegroSDK\Model;

class GeneralReport extends \ArrayObject
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
     * Command ID
     *
     * @var string
     */
    protected $id;
    /**
     * Date of command creation. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date of command completion. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * Offers updates summary
     *
     * @var TaskCount
     */
    protected $taskCount;
    /**
     * Command ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Command ID
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
     * Date of command creation. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date of command creation. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ
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
     * Date of command completion. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ
     *
     * @return \DateTime|null
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->completedAt;
    }
    /**
     * Date of command completion. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ
     *
     * @param \DateTime|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * Offers updates summary
     *
     * @return TaskCount
     */
    public function getTaskCount(): TaskCount
    {
        return $this->taskCount;
    }
    /**
     * Offers updates summary
     *
     * @param TaskCount $taskCount
     *
     * @return self
     */
    public function setTaskCount(TaskCount $taskCount): self
    {
        $this->initialized['taskCount'] = true;
        $this->taskCount = $taskCount;
        return $this;
    }
}