<?php

namespace Jlonom\AllegroSDK\Model;

class ThreadReadFlag extends \ArrayObject
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
     * @var bool
     */
    protected $read;
    /**
     * 
     *
     * @return bool
     */
    public function getRead(): bool
    {
        return $this->read;
    }
    /**
     * 
     *
     * @param bool $read
     *
     * @return self
     */
    public function setRead(bool $read): self
    {
        $this->initialized['read'] = true;
        $this->read = $read;
        return $this;
    }
}