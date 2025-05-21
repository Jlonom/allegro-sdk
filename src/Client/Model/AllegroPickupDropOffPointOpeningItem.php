<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPickupDropOffPointOpeningItem extends \ArrayObject
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
     * Day of week (ISO 8601).
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * Start hour.
     *
     * @var string
     */
    protected $from;
    /**
     * End hour.
     *
     * @var string
     */
    protected $to;
    /**
     * Day of week (ISO 8601).
     *
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * Day of week (ISO 8601).
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
     * Start hour.
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Start hour.
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
     * End hour.
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * End hour.
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