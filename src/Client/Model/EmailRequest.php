<?php

namespace Jlonom\AllegroSDK\Model;

class EmailRequest extends \ArrayObject
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
     * The contact's email address. The user part (before `@`) cannot be longer than 64 characters.
     *
     * @var string
     */
    protected $address;
    /**
     * The contact's email address. The user part (before `@`) cannot be longer than 64 characters.
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * The contact's email address. The user part (before `@`) cannot be longer than 64 characters.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}