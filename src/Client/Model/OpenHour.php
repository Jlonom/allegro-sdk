<?php

namespace Jlonom\AllegroSDK\Model;

class OpenHour extends \ArrayObject
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
     * Days of the week: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY. Date format ISO 8601
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS
     *
     * @var string
     */
    protected $from;
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS
     *
     * @var string
     */
    protected $to;
    /**
     * Days of the week: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY. Date format ISO 8601
     *
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * Days of the week: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY. Date format ISO 8601
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS
     *
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS
     *
     * @param string $to
     *
     * @return self
     */
    public function setTo(string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}