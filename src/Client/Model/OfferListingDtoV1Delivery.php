<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1Delivery extends \ArrayObject
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
}