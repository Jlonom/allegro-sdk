<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormDeliveryAddress extends \ArrayObject
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
     * Receiver's first name
     *
     * @var string
     */
    protected $firstName;
    /**
     * Receiver's last name
     *
     * @var string
     */
    protected $lastName;
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
     * Company name
     *
     * @var string
     */
    protected $companyName;
    /**
     * Phone number
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Address modification date
     *
     * @var string
     */
    protected $modifiedAt;
    /**
     * Receiver's first name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * Receiver's first name
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Receiver's last name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Receiver's last name
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
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
     * Company name
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Company name
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Phone number
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Phone number
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Address modification date
     *
     * @return string
     */
    public function getModifiedAt(): string
    {
        return $this->modifiedAt;
    }
    /**
     * Address modification date
     *
     * @param string $modifiedAt
     *
     * @return self
     */
    public function setModifiedAt(string $modifiedAt): self
    {
        $this->initialized['modifiedAt'] = true;
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
}