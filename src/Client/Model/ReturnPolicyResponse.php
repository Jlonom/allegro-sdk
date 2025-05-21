<?php

namespace Jlonom\AllegroSDK\Model;

class ReturnPolicyResponse extends \ArrayObject
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
     * The ID of the return policy definition.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var Seller
     */
    protected $seller;
    /**
     * Return policy name.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ReturnPolicyAvailability
     */
    protected $availability;
    /**
     * Period in ISO 8601 format. Can be null if availability range is 'DISABLED'.
     *
     * @var string|null
     */
    protected $withdrawalPeriod;
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @var ReturnPolicyReturnCost|null
     */
    protected $returnCost;
    /**
     * The return address of the policy. Can be null if availability range is 'DISABLED'.
     *
     * @var ReturnPolicyAddress|null
     */
    protected $address;
    /**
     * 
     *
     * @var ReturnPolicyContact|null
     */
    protected $contact;
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @var ReturnPolicyOptions|null
     */
    protected $options;
    /**
     * The ID of the return policy definition.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the return policy definition.
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
     * @return Seller
     */
    public function getSeller(): Seller
    {
        return $this->seller;
    }
    /**
     * 
     *
     * @param Seller $seller
     *
     * @return self
     */
    public function setSeller(Seller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;
        return $this;
    }
    /**
     * Return policy name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Return policy name.
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
     * 
     *
     * @return ReturnPolicyAvailability
     */
    public function getAvailability(): ReturnPolicyAvailability
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param ReturnPolicyAvailability $availability
     *
     * @return self
     */
    public function setAvailability(ReturnPolicyAvailability $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * Period in ISO 8601 format. Can be null if availability range is 'DISABLED'.
     *
     * @return string|null
     */
    public function getWithdrawalPeriod(): ?string
    {
        return $this->withdrawalPeriod;
    }
    /**
     * Period in ISO 8601 format. Can be null if availability range is 'DISABLED'.
     *
     * @param string|null $withdrawalPeriod
     *
     * @return self
     */
    public function setWithdrawalPeriod(?string $withdrawalPeriod): self
    {
        $this->initialized['withdrawalPeriod'] = true;
        $this->withdrawalPeriod = $withdrawalPeriod;
        return $this;
    }
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @return ReturnPolicyReturnCost|null
     */
    public function getReturnCost(): ?ReturnPolicyReturnCost
    {
        return $this->returnCost;
    }
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @param ReturnPolicyReturnCost|null $returnCost
     *
     * @return self
     */
    public function setReturnCost(?ReturnPolicyReturnCost $returnCost): self
    {
        $this->initialized['returnCost'] = true;
        $this->returnCost = $returnCost;
        return $this;
    }
    /**
     * The return address of the policy. Can be null if availability range is 'DISABLED'.
     *
     * @return ReturnPolicyAddress|null
     */
    public function getAddress(): ?ReturnPolicyAddress
    {
        return $this->address;
    }
    /**
     * The return address of the policy. Can be null if availability range is 'DISABLED'.
     *
     * @param ReturnPolicyAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ReturnPolicyAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return ReturnPolicyContact|null
     */
    public function getContact(): ?ReturnPolicyContact
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ReturnPolicyContact|null $contact
     *
     * @return self
     */
    public function setContact(?ReturnPolicyContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @return ReturnPolicyOptions|null
     */
    public function getOptions(): ?ReturnPolicyOptions
    {
        return $this->options;
    }
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @param ReturnPolicyOptions|null $options
     *
     * @return self
     */
    public function setOptions(?ReturnPolicyOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}