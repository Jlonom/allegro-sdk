<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPickupDropOffPointPaymentsItem extends \ArrayObject
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
    protected $method;
    /**
     * 
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * 
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
}