<?php

namespace Jlonom\AllegroSDK\Model;

class OrderEventStats extends \ArrayObject
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
     * Basic information about the latest order event.
     *
     * @var LatestOrderEvent
     */
    protected $latestEvent;
    /**
     * Basic information about the latest order event.
     *
     * @return LatestOrderEvent
     */
    public function getLatestEvent(): LatestOrderEvent
    {
        return $this->latestEvent;
    }
    /**
     * Basic information about the latest order event.
     *
     * @param LatestOrderEvent $latestEvent
     *
     * @return self
     */
    public function setLatestEvent(LatestOrderEvent $latestEvent): self
    {
        $this->initialized['latestEvent'] = true;
        $this->latestEvent = $latestEvent;
        return $this;
    }
}