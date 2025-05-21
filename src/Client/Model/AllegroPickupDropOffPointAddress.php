<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPickupDropOffPointAddress extends \ArrayObject
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
     * Postal code
     *
     * @var string
     */
    protected $postCode;
    /**
     * City name
     *
     * @var string
     */
    protected $city;
    /**
     * Street
     *
     * @var string
     */
    protected $street;
    /**
     * Country code
     *
     * @var string
     */
    protected $countryCode;
    /**
     * 
     *
     * @var Coordinates
     */
    protected $coordinates;
    /**
     * Postal code
     *
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }
    /**
     * Postal code
     *
     * @param string $postCode
     *
     * @return self
     */
    public function setPostCode(string $postCode): self
    {
        $this->initialized['postCode'] = true;
        $this->postCode = $postCode;
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
     * Street
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street
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
    /**
     * 
     *
     * @return Coordinates
     */
    public function getCoordinates(): Coordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param Coordinates $coordinates
     *
     * @return self
     */
    public function setCoordinates(Coordinates $coordinates): self
    {
        $this->initialized['coordinates'] = true;
        $this->coordinates = $coordinates;
        return $this;
    }
}