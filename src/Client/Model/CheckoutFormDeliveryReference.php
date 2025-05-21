<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormDeliveryReference extends \ArrayObject
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
     * @var CheckoutFormDeliveryAddress
     */
    protected $address;
    /**
     * 
     *
     * @var CheckoutFormDeliveryMethod
     */
    protected $method;
    /**
     * 
     *
     * @var CheckoutFormDeliveryPickupPoint
     */
    protected $pickupPoint;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $cost;
    /**
     * 
     *
     * @var CheckoutFormDeliveryTime
     */
    protected $time;
    /**
     * Buyer used a SMART option
     *
     * @var bool
     */
    protected $smart;
    /**
     * The delivery cancellation information.
     *
     * @var CheckoutFormDeliveryCancellation
     */
    protected $cancellation;
    /**
     * Calculated number of packages.
     *
     * @var int
     */
    protected $calculatedNumberOfPackages;
    /**
     * 
     *
     * @return CheckoutFormDeliveryAddress
     */
    public function getAddress(): CheckoutFormDeliveryAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CheckoutFormDeliveryAddress $address
     *
     * @return self
     */
    public function setAddress(CheckoutFormDeliveryAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormDeliveryMethod
     */
    public function getMethod(): CheckoutFormDeliveryMethod
    {
        return $this->method;
    }
    /**
     * 
     *
     * @param CheckoutFormDeliveryMethod $method
     *
     * @return self
     */
    public function setMethod(CheckoutFormDeliveryMethod $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormDeliveryPickupPoint
     */
    public function getPickupPoint(): CheckoutFormDeliveryPickupPoint
    {
        return $this->pickupPoint;
    }
    /**
     * 
     *
     * @param CheckoutFormDeliveryPickupPoint $pickupPoint
     *
     * @return self
     */
    public function setPickupPoint(CheckoutFormDeliveryPickupPoint $pickupPoint): self
    {
        $this->initialized['pickupPoint'] = true;
        $this->pickupPoint = $pickupPoint;
        return $this;
    }
    /**
     * The price data.
     *
     * @return Price
     */
    public function getCost(): Price
    {
        return $this->cost;
    }
    /**
     * The price data.
     *
     * @param Price $cost
     *
     * @return self
     */
    public function setCost(Price $cost): self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormDeliveryTime
     */
    public function getTime(): CheckoutFormDeliveryTime
    {
        return $this->time;
    }
    /**
     * 
     *
     * @param CheckoutFormDeliveryTime $time
     *
     * @return self
     */
    public function setTime(CheckoutFormDeliveryTime $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * Buyer used a SMART option
     *
     * @return bool
     */
    public function getSmart(): bool
    {
        return $this->smart;
    }
    /**
     * Buyer used a SMART option
     *
     * @param bool $smart
     *
     * @return self
     */
    public function setSmart(bool $smart): self
    {
        $this->initialized['smart'] = true;
        $this->smart = $smart;
        return $this;
    }
    /**
     * The delivery cancellation information.
     *
     * @return CheckoutFormDeliveryCancellation
     */
    public function getCancellation(): CheckoutFormDeliveryCancellation
    {
        return $this->cancellation;
    }
    /**
     * The delivery cancellation information.
     *
     * @param CheckoutFormDeliveryCancellation $cancellation
     *
     * @return self
     */
    public function setCancellation(CheckoutFormDeliveryCancellation $cancellation): self
    {
        $this->initialized['cancellation'] = true;
        $this->cancellation = $cancellation;
        return $this;
    }
    /**
     * Calculated number of packages.
     *
     * @return int
     */
    public function getCalculatedNumberOfPackages(): int
    {
        return $this->calculatedNumberOfPackages;
    }
    /**
     * Calculated number of packages.
     *
     * @param int $calculatedNumberOfPackages
     *
     * @return self
     */
    public function setCalculatedNumberOfPackages(int $calculatedNumberOfPackages): self
    {
        $this->initialized['calculatedNumberOfPackages'] = true;
        $this->calculatedNumberOfPackages = $calculatedNumberOfPackages;
        return $this;
    }
}