<?php

namespace Jlonom\AllegroSDK\Model;

class ResponsibleProducerAddress extends \ArrayObject
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
     * Code of responsible producer country (ISO 3166).
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Street and number.
     *
     * @var string
     */
    protected $street;
    /**
     * Postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * City.
     *
     * @var string
     */
    protected $city;
    /**
     * Code of responsible producer country (ISO 3166).
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Code of responsible producer country (ISO 3166).
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
     * Street and number.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street and number.
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
     * Postal code.
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Postal code.
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * City.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City.
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
}