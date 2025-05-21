<?php

namespace Jlonom\AllegroSDK\Model;

class Rates extends \ArrayObject
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
     * Delivery rate value
     *
     * @var int
     */
    protected $delivery;
    /**
     * Delivery cost rate value
     *
     * @var int
     */
    protected $deliveryCost;
    /**
     * Description rate value
     *
     * @var int
     */
    protected $description;
    /**
     * Service rate value
     *
     * @var int
     */
    protected $service;
    /**
     * Delivery rate value
     *
     * @return int
     */
    public function getDelivery(): int
    {
        return $this->delivery;
    }
    /**
     * Delivery rate value
     *
     * @param int $delivery
     *
     * @return self
     */
    public function setDelivery(int $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Delivery cost rate value
     *
     * @return int
     */
    public function getDeliveryCost(): int
    {
        return $this->deliveryCost;
    }
    /**
     * Delivery cost rate value
     *
     * @param int $deliveryCost
     *
     * @return self
     */
    public function setDeliveryCost(int $deliveryCost): self
    {
        $this->initialized['deliveryCost'] = true;
        $this->deliveryCost = $deliveryCost;
        return $this;
    }
    /**
     * Description rate value
     *
     * @return int
     */
    public function getDescription(): int
    {
        return $this->description;
    }
    /**
     * Description rate value
     *
     * @param int $description
     *
     * @return self
     */
    public function setDescription(int $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Service rate value
     *
     * @return int
     */
    public function getService(): int
    {
        return $this->service;
    }
    /**
     * Service rate value
     *
     * @param int $service
     *
     * @return self
     */
    public function setService(int $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
}