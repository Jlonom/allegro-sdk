<?php

namespace Jlonom\AllegroSDK\Model;

class DeliverySettingsRequestCustomCost extends \ArrayObject
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
     * If true the customer can enter a custom shipping cost.
     *
     * @var bool
     */
    protected $allowed;
    /**
     * If true the customer can enter a custom shipping cost.
     *
     * @return bool
     */
    public function getAllowed(): bool
    {
        return $this->allowed;
    }
    /**
     * If true the customer can enter a custom shipping cost.
     *
     * @param bool $allowed
     *
     * @return self
     */
    public function setAllowed(bool $allowed): self
    {
        $this->initialized['allowed'] = true;
        $this->allowed = $allowed;
        return $this;
    }
}