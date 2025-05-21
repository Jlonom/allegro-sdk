<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedPublication extends \ArrayObject
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
     * Duration in ISO 8601 format.
     *
     * @var string
     */
    protected $duration;
    /**
     * Duration in ISO 8601 format.
     *
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }
    /**
     * Duration in ISO 8601 format.
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
}