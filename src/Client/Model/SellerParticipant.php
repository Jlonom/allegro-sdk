<?php

namespace Jlonom\AllegroSDK\Model;

class SellerParticipant extends \ArrayObject
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
     * Company name.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Login.
     *
     * @var string
     */
    protected $login;
    /**
     * First name.
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last name.
     *
     * @var string
     */
    protected $lastName;
    /**
     * Address.
     *
     * @var OperationParticipantAddress
     */
    protected $address;
    /**
     * The seller's ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Company name.
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Company name.
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
     * Login.
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * Login.
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
     * First name.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * First name.
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
     * Last name.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Last name.
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
     * Address.
     *
     * @return OperationParticipantAddress
     */
    public function getAddress(): OperationParticipantAddress
    {
        return $this->address;
    }
    /**
     * Address.
     *
     * @param OperationParticipantAddress $address
     *
     * @return self
     */
    public function setAddress(OperationParticipantAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The seller's ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The seller's ID.
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
}