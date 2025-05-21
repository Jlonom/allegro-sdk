<?php

namespace Jlonom\AllegroSDK\Model;

class CreateResponsibleProducerRequestProducerData extends \ArrayObject
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
     * Name of company, first name and last name or trade name of company responsible for producing product.
     *
     * @var string
     */
    protected $tradeName;
    /**
     * Responsible producer address.
     *
     * @var ResponsibleProducerAddress
     */
    protected $address;
    /**
     * Contact to responsible producer. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @var ResponsibleProducerContact
     */
    protected $contact;
    /**
     * Name of company, first name and last name or trade name of company responsible for producing product.
     *
     * @return string
     */
    public function getTradeName(): string
    {
        return $this->tradeName;
    }
    /**
     * Name of company, first name and last name or trade name of company responsible for producing product.
     *
     * @param string $tradeName
     *
     * @return self
     */
    public function setTradeName(string $tradeName): self
    {
        $this->initialized['tradeName'] = true;
        $this->tradeName = $tradeName;
        return $this;
    }
    /**
     * Responsible producer address.
     *
     * @return ResponsibleProducerAddress
     */
    public function getAddress(): ResponsibleProducerAddress
    {
        return $this->address;
    }
    /**
     * Responsible producer address.
     *
     * @param ResponsibleProducerAddress $address
     *
     * @return self
     */
    public function setAddress(ResponsibleProducerAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact to responsible producer. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @return ResponsibleProducerContact
     */
    public function getContact(): ResponsibleProducerContact
    {
        return $this->contact;
    }
    /**
     * Contact to responsible producer. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @param ResponsibleProducerContact $contact
     *
     * @return self
     */
    public function setContact(ResponsibleProducerContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
}