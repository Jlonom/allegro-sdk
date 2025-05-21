<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormDeliveryPickupPointAddress extends \ArrayObject
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
     * Delivery point street name
     *
     * @var string
     */
    protected $street;
    /**
     * Delivery point postal code
     *
     * @var string
     */
    protected $zipCode;
    /**
     * City name
     *
     * @var string
     */
    protected $city;
    /**
     * Country code
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Delivery point street name
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Delivery point street name
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * Delivery point postal code
     *
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }
    /**
     * Delivery point postal code
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode): self
    {
        $this->initialized['zipCode'] = true;
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * City name
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City name
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * Country code
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}