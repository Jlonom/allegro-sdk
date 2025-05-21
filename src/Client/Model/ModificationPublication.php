<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationPublication extends \ArrayObject
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
     * Offer duration time provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var string
     */
    protected $duration;
    /**
     * Unlimited duration time.
     *
     * @var bool
     */
    protected $durationUnlimited;
    /**
     * Offer duration time provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }
    /**
     * Offer duration time provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
    /**
     * Unlimited duration time.
     *
     * @return bool
     */
    public function getDurationUnlimited(): bool
    {
        return $this->durationUnlimited;
    }
    /**
     * Unlimited duration time.
     *
     * @param bool $durationUnlimited
     *
     * @return self
     */
    public function setDurationUnlimited(bool $durationUnlimited): self
    {
        $this->initialized['durationUnlimited'] = true;
        $this->durationUnlimited = $durationUnlimited;
        return $this;
    }
}