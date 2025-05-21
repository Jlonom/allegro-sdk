<?php

namespace Jlonom\AllegroSDK\Model;

class ImpliedWarrantyPeriod extends \ArrayObject
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
     * Period in ISO 8601 format. Only periods in full years are accepted.
     *
     * @var string
     */
    protected $period;
    /**
     * Period in ISO 8601 format. Only periods in full years are accepted.
     *
     * @return string
     */
    public function getPeriod(): string
    {
        return $this->period;
    }
    /**
     * Period in ISO 8601 format. Only periods in full years are accepted.
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
}