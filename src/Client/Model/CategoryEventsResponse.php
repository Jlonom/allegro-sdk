<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryEventsResponse extends \ArrayObject
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
     * The list of events.
     *
     * @var list<CategoryBaseEvent>
     */
    protected $events;
    /**
     * The list of events.
     *
     * @return list<CategoryBaseEvent>
     */
    public function getEvents(): array
    {
        return $this->events;
    }
    /**
     * The list of events.
     *
     * @param list<CategoryBaseEvent> $events
     *
     * @return self
     */
    public function setEvents(array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
}