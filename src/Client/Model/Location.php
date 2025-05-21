<?php

namespace Jlonom\AllegroSDK\Model;

class Location extends \ArrayObject
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
     * @var string
     */
    protected $city;
    /**
     * The 2-letter country code as defined in ISO 3166.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The format of post code depends on 'countryCode'. For countryCode equal to 'PL', the expected format is 'XX-XXX', for other countries format is less restrictive - 12 characters or less are expected.
     *
     * @var string
     */
    protected $postCode;
    /**
     * This field is mandatory if countryCode is set to "PL", for other values, currently, it is ignored. For countryCode equalling "PL", this field must be set to one of the following: DOLNOSLASKIE, KUJAWSKO_POMORSKIE, LUBELSKIE, LUBUSKIE, LODZKIE, MALOPOLSKIE, MAZOWIECKIE, OPOLSKIE, PODKARPACKIE, PODLASKIE, POMORSKIE, SLASKIE, SWIETOKRZYSKIE, WARMINSKO_MAZURSKIE, WIELKOPOLSKIE, ZACHODNIOPOMORSKIE.
     *
     * @var string
     */
    protected $province;
    /**
     * 
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * 
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
     * The 2-letter country code as defined in ISO 3166.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * The 2-letter country code as defined in ISO 3166.
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
     * The format of post code depends on 'countryCode'. For countryCode equal to 'PL', the expected format is 'XX-XXX', for other countries format is less restrictive - 12 characters or less are expected.
     *
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }
    /**
     * The format of post code depends on 'countryCode'. For countryCode equal to 'PL', the expected format is 'XX-XXX', for other countries format is less restrictive - 12 characters or less are expected.
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
     * This field is mandatory if countryCode is set to "PL", for other values, currently, it is ignored. For countryCode equalling "PL", this field must be set to one of the following: DOLNOSLASKIE, KUJAWSKO_POMORSKIE, LUBELSKIE, LUBUSKIE, LODZKIE, MALOPOLSKIE, MAZOWIECKIE, OPOLSKIE, PODKARPACKIE, PODLASKIE, POMORSKIE, SLASKIE, SWIETOKRZYSKIE, WARMINSKO_MAZURSKIE, WIELKOPOLSKIE, ZACHODNIOPOMORSKIE.
     *
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }
    /**
     * This field is mandatory if countryCode is set to "PL", for other values, currently, it is ignored. For countryCode equalling "PL", this field must be set to one of the following: DOLNOSLASKIE, KUJAWSKO_POMORSKIE, LUBELSKIE, LUBUSKIE, LODZKIE, MALOPOLSKIE, MAZOWIECKIE, OPOLSKIE, PODKARPACKIE, PODLASKIE, POMORSKIE, SLASKIE, SWIETOKRZYSKIE, WARMINSKO_MAZURSKIE, WIELKOPOLSKIE, ZACHODNIOPOMORSKIE.
     *
     * @param string $province
     *
     * @return self
     */
    public function setProvince(string $province): self
    {
        $this->initialized['province'] = true;
        $this->province = $province;
        return $this;
    }
}