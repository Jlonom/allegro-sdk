<?php

namespace Jlonom\AllegroSDK\Model;

class OrderEventsList extends \ArrayObject
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
     * @var list<OrderEvent>
     */
    protected $events;
    /**
     * 
     *
     * @return list<OrderEvent>
     */
    public function getEvents(): array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param list<OrderEvent> $events
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