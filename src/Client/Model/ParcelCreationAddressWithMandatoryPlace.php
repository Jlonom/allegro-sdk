<?php

namespace Jlonom\AllegroSDK\Model;

class ParcelCreationAddressWithMandatoryPlace extends \ArrayObject
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
     * Street.
     *
     * @var string
     */
    protected $street;
    /**
     * Post code.
     *
     * @var string
     */
    protected $postCode;
    /**
     * City.
     *
     * @var string
     */
    protected $city;
    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     *
     * @var string
     */
    protected $countryCode = 'PL';
    /**
     * Required for shipments to Irleand ( county name ), United States ( state abbreviation / ISO code ), Canada ( province postal code / ISO code )
     *
     * @var string
     */
    protected $county;
    /**
     * Street.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street.
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
     * Post code.
     *
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }
    /**
     * Post code.
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
    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
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
     * Required for shipments to Irleand ( county name ), United States ( state abbreviation / ISO code ), Canada ( province postal code / ISO code )
     *
     * @return string
     */
    public function getCounty(): string
    {
        return $this->county;
    }
    /**
     * Required for shipments to Irleand ( county name ), United States ( state abbreviation / ISO code ), Canada ( province postal code / ISO code )
     *
     * @param string $county
     *
     * @return self
     */
    public function setCounty(string $county): self
    {
        $this->initialized['county'] = true;
        $this->county = $county;
        return $this;
    }
}