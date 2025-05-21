<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnRefundBankAccount extends \ArrayObject
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
    protected $owner;
    /**
     * 
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $iban;
    /**
     * 
     *
     * @var string
     */
    protected $swift;
    /**
     * 
     *
     * @var CustomerReturnRefundBankAccountAddress
     */
    protected $address;
    /**
     * 
     *
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param string $owner
     *
     * @return self
     */
    public function setOwner(string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }
    /**
     * 
     *
     * @param string $iban
     *
     * @return self
     */
    public function setIban(string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSwift(): string
    {
        return $this->swift;
    }
    /**
     * 
     *
     * @param string $swift
     *
     * @return self
     */
    public function setSwift(string $swift): self
    {
        $this->initialized['swift'] = true;
        $this->swift = $swift;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerReturnRefundBankAccountAddress
     */
    public function getAddress(): CustomerReturnRefundBankAccountAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CustomerReturnRefundBankAccountAddress $address
     *
     * @return self
     */
    public function setAddress(CustomerReturnRefundBankAccountAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}