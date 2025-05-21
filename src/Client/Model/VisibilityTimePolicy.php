<?php

namespace Jlonom\AllegroSDK\Model;

class VisibilityTimePolicy extends \ArrayObject
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
     * @var string
     */
    protected $type;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string
     */
    protected $from;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string
     */
    protected $to;
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
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
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
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