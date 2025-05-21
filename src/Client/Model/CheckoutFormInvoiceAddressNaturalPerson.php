<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormInvoiceAddressNaturalPerson extends \ArrayObject
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
     * Invoice receiver first name
     *
     * @var string
     */
    protected $firstName;
    /**
     * Invoice receiver last name
     *
     * @var string
     */
    protected $lastName;
    /**
     * Invoice receiver first name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * Invoice receiver first name
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
     * Invoice receiver last name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Invoice receiver last name
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
}