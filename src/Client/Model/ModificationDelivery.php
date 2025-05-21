<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationDelivery extends \ArrayObject
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
     * @var ShippingRates
     */
    protected $shippingRates;
    /**
     * Handling time, ISO 8601 duration format. PT0S for immediately.
     *
     * @var string
     */
    protected $handlingTime;
    /**
     * 
     *
     * @return ShippingRates
     */
    public function getShippingRates(): ShippingRates
    {
        return $this->shippingRates;
    }
    /**
     * 
     *
     * @param ShippingRates $shippingRates
     *
     * @return self
     */
    public function setShippingRates(ShippingRates $shippingRates): self
    {
        $this->initialized['shippingRates'] = true;
        $this->shippingRates = $shippingRates;
        return $this;
    }
    /**
     * Handling time, ISO 8601 duration format. PT0S for immediately.
     *
     * @return string
     */
    public function getHandlingTime(): string
    {
        return $this->handlingTime;
    }
    /**
     * Handling time, ISO 8601 duration format. PT0S for immediately.
     *
     * @param string $handlingTime
     *
     * @return self
     */
    public function setHandlingTime(string $handlingTime): self
    {
        $this->initialized['handlingTime'] = true;
        $this->handlingTime = $handlingTime;
        return $this;
    }
}