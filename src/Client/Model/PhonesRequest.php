<?php

namespace Jlonom\AllegroSDK\Model;

class PhonesRequest extends \ArrayObject
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
     * A valid phone number
     *
     * @var string
     */
    protected $number;
    /**
     * A valid phone number
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * A valid phone number
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
}