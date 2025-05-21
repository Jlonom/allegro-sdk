<?php

namespace Jlonom\AllegroSDK\Model;

class ReturnPolicyAddress extends \ArrayObject
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
     * Company or person name. Length is dependent on specified 'countryCode' - for CZ and SK length is equal to 50 characters, for other countries - 200.
     *
     * @var string
     */
    protected $name;
    /**
     * Street name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 35 characters, for other countries - 200.
     *
     * @var string
     */
    protected $street;
    /**
     * Post code format is dependent on 'countryCode' - PL='XX-XXX', CZ='XXX XX', SK='XXX XX' for other countries format is less restrictive - 16 characters alphanumeric with ' '(space) and '-' allowed.
     *
     * @var string
     */
    protected $postCode;
    /**
     * City name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 30 characters, for other countries - 200.
     *
     * @var string
     */
    protected $city;
    /**
     * Country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Company or person name. Length is dependent on specified 'countryCode' - for CZ and SK length is equal to 50 characters, for other countries - 200.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Company or person name. Length is dependent on specified 'countryCode' - for CZ and SK length is equal to 50 characters, for other countries - 200.
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
     * Street name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 35 characters, for other countries - 200.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 35 characters, for other countries - 200.
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
     * Post code format is dependent on 'countryCode' - PL='XX-XXX', CZ='XXX XX', SK='XXX XX' for other countries format is less restrictive - 16 characters alphanumeric with ' '(space) and '-' allowed.
     *
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }
    /**
     * Post code format is dependent on 'countryCode' - PL='XX-XXX', CZ='XXX XX', SK='XXX XX' for other countries format is less restrictive - 16 characters alphanumeric with ' '(space) and '-' allowed.
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
     * City name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 30 characters, for other countries - 200.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 30 characters, for other countries - 200.
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
     * Country code.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code.
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