<?php

namespace Jlonom\AllegroSDK\Model;

class OfferStatResponseDto extends \ArrayObject
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
     * Offer details data, containg offer identifier.
     *
     * @var OfferStatModelDto
     */
    protected $offer;
    /**
     * 
     *
     * @var list<ClassifiedEventStat>
     */
    protected $eventStatsTotal;
    /**
     * 
     *
     * @var list<ClassifiedDailyEventStatResponseDto>
     */
    protected $eventsPerDay;
    /**
     * Offer details data, containg offer identifier.
     *
     * @return OfferStatModelDto
     */
    public function getOffer(): OfferStatModelDto
    {
        return $this->offer;
    }
    /**
     * Offer details data, containg offer identifier.
     *
     * @param OfferStatModelDto $offer
     *
     * @return self
     */
    public function setOffer(OfferStatModelDto $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * 
     *
     * @return list<ClassifiedEventStat>
     */
    public function getEventStatsTotal(): array
    {
        return $this->eventStatsTotal;
    }
    /**
     * 
     *
     * @param list<ClassifiedEventStat> $eventStatsTotal
     *
     * @return self
     */
    public function setEventStatsTotal(array $eventStatsTotal): self
    {
        $this->initialized['eventStatsTotal'] = true;
        $this->eventStatsTotal = $eventStatsTotal;
        return $this;
    }
    /**
     * 
     *
     * @return list<ClassifiedDailyEventStatResponseDto>
     */
    public function getEventsPerDay(): array
    {
        return $this->eventsPerDay;
    }
    /**
     * 
     *
     * @param list<ClassifiedDailyEventStatResponseDto> $eventsPerDay
     *
     * @return self
     */
    public function setEventsPerDay(array $eventsPerDay): self
    {
        $this->initialized['eventsPerDay'] = true;
        $this->eventsPerDay = $eventsPerDay;
        return $this;
    }
}