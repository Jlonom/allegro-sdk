<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormBuyerReference extends \ArrayObject
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
     * buyer id
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $login;
    /**
     * Buyer's first name
     *
     * @var string
     */
    protected $firstName;
    /**
     * Buyer's last name
     *
     * @var string
     */
    protected $lastName;
    /**
     * Company name
     *
     * @var string
     */
    protected $companyName;
    /**
     * is a guest account?
     *
     * @var bool
     */
    protected $guest;
    /**
     * Buyer's personal identity number (PESEL)
     *
     * @var string
     */
    protected $personalIdentity;
    /**
     * Phone number
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @var BuyerPreferencesReference
     */
    protected $preferences;
    /**
     * Buyer address
     *
     * @var CheckoutFormBuyerAddressReference
     */
    protected $address;
    /**
     * buyer id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * buyer id
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
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * Buyer's first name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * Buyer's first name
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
     * Buyer's last name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Buyer's last name
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
     * is a guest account?
     *
     * @return bool
     */
    public function getGuest(): bool
    {
        return $this->guest;
    }
    /**
     * is a guest account?
     *
     * @param bool $guest
     *
     * @return self
     */
    public function setGuest(bool $guest): self
    {
        $this->initialized['guest'] = true;
        $this->guest = $guest;
        return $this;
    }
    /**
     * Buyer's personal identity number (PESEL)
     *
     * @return string
     */
    public function getPersonalIdentity(): string
    {
        return $this->personalIdentity;
    }
    /**
     * Buyer's personal identity number (PESEL)
     *
     * @param string $personalIdentity
     *
     * @return self
     */
    public function setPersonalIdentity(string $personalIdentity): self
    {
        $this->initialized['personalIdentity'] = true;
        $this->personalIdentity = $personalIdentity;
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
     * 
     *
     * @return BuyerPreferencesReference
     */
    public function getPreferences(): BuyerPreferencesReference
    {
        return $this->preferences;
    }
    /**
     * 
     *
     * @param BuyerPreferencesReference $preferences
     *
     * @return self
     */
    public function setPreferences(BuyerPreferencesReference $preferences): self
    {
        $this->initialized['preferences'] = true;
        $this->preferences = $preferences;
        return $this;
    }
    /**
     * Buyer address
     *
     * @return CheckoutFormBuyerAddressReference
     */
    public function getAddress(): CheckoutFormBuyerAddressReference
    {
        return $this->address;
    }
    /**
     * Buyer address
     *
     * @param CheckoutFormBuyerAddressReference $address
     *
     * @return self
     */
    public function setAddress(CheckoutFormBuyerAddressReference $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}