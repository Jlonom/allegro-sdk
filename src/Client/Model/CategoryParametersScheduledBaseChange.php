<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParametersScheduledBaseChange extends \ArrayObject
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
     * The date and time when the change was scheduled, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var \DateTime
     */
    protected $scheduledAt;
    /**
     * The date and time when the change will be effective from, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var \DateTime
     */
    protected $scheduledFor;
    /**
     * The type of the change.
     *
     * @var string
     */
    protected $type;
    /**
     * The date and time when the change was scheduled, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @return \DateTime
     */
    public function getScheduledAt(): \DateTime
    {
        return $this->scheduledAt;
    }
    /**
     * The date and time when the change was scheduled, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @param \DateTime $scheduledAt
     */
    public function setScheduledAt(\DateTime $scheduledAt)
    {
        $this->initialized['scheduledAt'] = true;
        $this->scheduledAt = $scheduledAt;
    }
    /**
     * The date and time when the change will be effective from, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @return \DateTime
     */
    public function getScheduledFor(): \DateTime
    {
        return $this->scheduledFor;
    }
    /**
     * The date and time when the change will be effective from, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @param \DateTime $scheduledFor
     */
    public function setScheduledFor(\DateTime $scheduledFor)
    {
        $this->initialized['scheduledFor'] = true;
        $this->scheduledFor = $scheduledFor;
    }
    /**
     * The type of the change.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the change.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}