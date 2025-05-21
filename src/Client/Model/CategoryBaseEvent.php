<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryBaseEvent extends \ArrayObject
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
     * The ID of the event. It can be used in the `from` parameter of the query.
     *
     * @var string
     */
    protected $id;
    /**
     * The date and time when the change occurred, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var \DateTime
     */
    protected $occurredAt;
    /**
     * The type of the change.
     *
     * @var string
     */
    protected $type;
    /**
     * The ID of the event. It can be used in the `from` parameter of the query.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the event. It can be used in the `from` parameter of the query.
     *
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
    }
    /**
     * The date and time when the change occurred, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @return \DateTime
     */
    public function getOccurredAt(): \DateTime
    {
        return $this->occurredAt;
    }
    /**
     * The date and time when the change occurred, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @param \DateTime $occurredAt
     */
    public function setOccurredAt(\DateTime $occurredAt)
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;
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