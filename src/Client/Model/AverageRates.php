<?php

namespace Jlonom\AllegroSDK\Model;

class AverageRates extends \ArrayObject
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
     * The average value of delivery rate.
     *
     * @var float
     */
    protected $delivery;
    /**
     * The average value of delivery cost rate.
     *
     * @var float
     */
    protected $deliveryCost;
    /**
     * The average value of description rate.
     *
     * @var float
     */
    protected $description;
    /**
     * The average value of service rate.
     *
     * @var float
     */
    protected $service;
    /**
     * The average value of delivery rate.
     *
     * @return float
     */
    public function getDelivery(): float
    {
        return $this->delivery;
    }
    /**
     * The average value of delivery rate.
     *
     * @param float $delivery
     *
     * @return self
     */
    public function setDelivery(float $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * The average value of delivery cost rate.
     *
     * @return float
     */
    public function getDeliveryCost(): float
    {
        return $this->deliveryCost;
    }
    /**
     * The average value of delivery cost rate.
     *
     * @param float $deliveryCost
     *
     * @return self
     */
    public function setDeliveryCost(float $deliveryCost): self
    {
        $this->initialized['deliveryCost'] = true;
        $this->deliveryCost = $deliveryCost;
        return $this;
    }
    /**
     * The average value of description rate.
     *
     * @return float
     */
    public function getDescription(): float
    {
        return $this->description;
    }
    /**
     * The average value of description rate.
     *
     * @param float $description
     *
     * @return self
     */
    public function setDescription(float $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The average value of service rate.
     *
     * @return float
     */
    public function getService(): float
    {
        return $this->service;
    }
    /**
     * The average value of service rate.
     *
     * @param float $service
     *
     * @return self
     */
    public function setService(float $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
}