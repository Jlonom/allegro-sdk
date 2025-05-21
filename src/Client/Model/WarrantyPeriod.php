<?php

namespace Jlonom\AllegroSDK\Model;

class WarrantyPeriod extends \ArrayObject
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
     * Period in ISO 8601 format.
     *
     * @var string
     */
    protected $period;
    /**
     * Indices if it is lifetime warranty.
     *
     * @var bool
     */
    protected $lifetime;
    /**
     * Period in ISO 8601 format.
     *
     * @return string
     */
    public function getPeriod(): string
    {
        return $this->period;
    }
    /**
     * Period in ISO 8601 format.
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * Indices if it is lifetime warranty.
     *
     * @return bool
     */
    public function getLifetime(): bool
    {
        return $this->lifetime;
    }
    /**
     * Indices if it is lifetime warranty.
     *
     * @param bool $lifetime
     *
     * @return self
     */
    public function setLifetime(bool $lifetime): self
    {
        $this->initialized['lifetime'] = true;
        $this->lifetime = $lifetime;
        return $this;
    }
}