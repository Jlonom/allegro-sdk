<?php

namespace Jlonom\AllegroSDK\Model;

class SellerOfferEventsResponse extends \ArrayObject
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
     * @var list<SellerOfferBaseEvent>
     */
    protected $offerEvents;
    /**
     * The list of events.
     *
     * @return list<SellerOfferBaseEvent>
     */
    public function getOfferEvents(): array
    {
        return $this->offerEvents;
    }
    /**
     * The list of events.
     *
     * @param list<SellerOfferBaseEvent> $offerEvents
     *
     * @return self
     */
    public function setOfferEvents(array $offerEvents): self
    {
        $this->initialized['offerEvents'] = true;
        $this->offerEvents = $offerEvents;
        return $this;
    }
}