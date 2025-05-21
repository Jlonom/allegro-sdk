<?php

namespace Jlonom\AllegroSDK\Model;

class ParcelAdditionalServicesAvailability extends \ArrayObject
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
     * @var ParcelAdditionalServicesCashOnDeliveryAvailability
     */
    protected $cashOnDelivery;
    /**
     * Delivery services.
     *
     * @var list<ParcelAdditionalServicesOptionAvailability>
     */
    protected $options;
    /**
     * 
     *
     * @return ParcelAdditionalServicesCashOnDeliveryAvailability
     */
    public function getCashOnDelivery(): ParcelAdditionalServicesCashOnDeliveryAvailability
    {
        return $this->cashOnDelivery;
    }
    /**
     * 
     *
     * @param ParcelAdditionalServicesCashOnDeliveryAvailability $cashOnDelivery
     *
     * @return self
     */
    public function setCashOnDelivery(ParcelAdditionalServicesCashOnDeliveryAvailability $cashOnDelivery): self
    {
        $this->initialized['cashOnDelivery'] = true;
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }
    /**
     * Delivery services.
     *
     * @return list<ParcelAdditionalServicesOptionAvailability>
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * Delivery services.
     *
     * @param list<ParcelAdditionalServicesOptionAvailability> $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}