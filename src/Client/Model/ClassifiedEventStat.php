<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedEventStat extends \ArrayObject
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
     * @var int
     */
    protected $count;
    /**
     * Classified statistical event type.
     *
     * @var string
     */
    protected $eventType;
    /**
     * 
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Classified statistical event type.
     *
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * Classified statistical event type.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
}