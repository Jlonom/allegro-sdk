<?php

namespace Jlonom\AllegroSDK\Model;

class SellerOfferStatsResponseDto extends \ArrayObject
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