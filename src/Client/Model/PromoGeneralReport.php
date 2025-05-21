<?php

namespace Jlonom\AllegroSDK\Model;

class PromoGeneralReport extends \ArrayObject
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