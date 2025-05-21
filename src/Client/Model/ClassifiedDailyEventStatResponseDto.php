<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedDailyEventStatResponseDto extends \ArrayObject
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
     * Date in format yyyy-MM-dd
     *
     * @var string
     */
    protected $date;
    /**
     * List of event types with number of occurrences.
     *
     * @var list<ClassifiedEventStat>
     */
    protected $eventStats;
    /**
     * Date in format yyyy-MM-dd
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * Date in format yyyy-MM-dd
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * List of event types with number of occurrences.
     *
     * @return list<ClassifiedEventStat>
     */
    public function getEventStats(): array
    {
        return $this->eventStats;
    }
    /**
     * List of event types with number of occurrences.
     *
     * @param list<ClassifiedEventStat> $eventStats
     *
     * @return self
     */
    public function setEventStats(array $eventStats): self
    {
        $this->initialized['eventStats'] = true;
        $this->eventStats = $eventStats;
        return $this;
    }
}