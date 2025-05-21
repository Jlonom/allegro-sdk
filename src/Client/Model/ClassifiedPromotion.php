<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedPromotion extends \ArrayObject
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
     * Name of the promotion.
     *
     * @var string
     */
    protected $name;
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
    /**
     * Name of the promotion.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the promotion.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}