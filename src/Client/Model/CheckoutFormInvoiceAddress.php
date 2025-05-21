<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormInvoiceAddress extends \ArrayObject
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
     * Street name
     *
     * @var string
     */
    protected $street;
    /**
     * City name
     *
     * @var string
     */
    protected $city;
    /**
     * Postal code
     *
     * @var string
     */
    protected $zipCode;
    /**
     * Country code
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Setting the value to null indicates a private purchase, while any other value indicates a corporate purchase.
     *
     * @var CheckoutFormInvoiceAddressCompany
     */
    protected $company;
    /**
     * 
     *
     * @var CheckoutFormInvoiceAddressNaturalPerson
     */
    protected $naturalPerson;
    /**
     * Street name
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street name
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
     * Postal code
     *
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }
    /**
     * Postal code
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
     * Setting the value to null indicates a private purchase, while any other value indicates a corporate purchase.
     *
     * @return CheckoutFormInvoiceAddressCompany
     */
    public function getCompany(): CheckoutFormInvoiceAddressCompany
    {
        return $this->company;
    }
    /**
     * Setting the value to null indicates a private purchase, while any other value indicates a corporate purchase.
     *
     * @param CheckoutFormInvoiceAddressCompany $company
     *
     * @return self
     */
    public function setCompany(CheckoutFormInvoiceAddressCompany $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormInvoiceAddressNaturalPerson
     */
    public function getNaturalPerson(): CheckoutFormInvoiceAddressNaturalPerson
    {
        return $this->naturalPerson;
    }
    /**
     * 
     *
     * @param CheckoutFormInvoiceAddressNaturalPerson $naturalPerson
     *
     * @return self
     */
    public function setNaturalPerson(CheckoutFormInvoiceAddressNaturalPerson $naturalPerson): self
    {
        $this->initialized['naturalPerson'] = true;
        $this->naturalPerson = $naturalPerson;
        return $this;
    }
}