<?php

namespace Jlonom\AllegroSDK\Model;

class ShippingExtended extends \ArrayObject
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
     * The delivery method of the Advance Ship Notice. Not required when Advance Ship Notice in DRAFT status
     *
     * @var string
     */
    protected $method;
    /**
     * The delivery method of the Advance Ship Notice. Not required when Advance Ship Notice in DRAFT status
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * The delivery method of the Advance Ship Notice. Not required when Advance Ship Notice in DRAFT status
     *
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->initialized['method'] = true;
        $this->method = $method;
    }
}