<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormDeliveryPickupPoint extends \ArrayObject
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
     * Delivery point id
     *
     * @var string
     */
    protected $id;
    /**
     * Delivery point name
     *
     * @var string
     */
    protected $name;
    /**
     * Delivery point description
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var CheckoutFormDeliveryPickupPointAddress
     */
    protected $address;
    /**
     * Delivery point id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Delivery point id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Delivery point name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Delivery point name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Delivery point description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Delivery point description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormDeliveryPickupPointAddress
     */
    public function getAddress(): CheckoutFormDeliveryPickupPointAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CheckoutFormDeliveryPickupPointAddress $address
     *
     * @return self
     */
    public function setAddress(CheckoutFormDeliveryPickupPointAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}