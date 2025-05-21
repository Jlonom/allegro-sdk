<?php

namespace Jlonom\AllegroSDK\Model;

class LatestOrderEvent extends \ArrayObject
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
     * event id
     *
     * @var string
     */
    protected $id;
    /**
     * Date when the event occurred
     *
     * @var \DateTime
     */
    protected $occurredAt;
    /**
     * event id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * event id
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
     * Date when the event occurred
     *
     * @return \DateTime
     */
    public function getOccurredAt(): \DateTime
    {
        return $this->occurredAt;
    }
    /**
     * Date when the event occurred
     *
     * @param \DateTime $occurredAt
     *
     * @return self
     */
    public function setOccurredAt(\DateTime $occurredAt): self
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;
        return $this;
    }
}