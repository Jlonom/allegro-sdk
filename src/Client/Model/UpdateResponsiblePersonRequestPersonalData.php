<?php

namespace Jlonom\AllegroSDK\Model;

class UpdateResponsiblePersonRequestPersonalData extends \ArrayObject
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
     * Name of responsible person.
     *
     * @var string
     */
    protected $name;
    /**
     * Responsible person address.
     *
     * @var ResponsiblePersonAddress
     */
    protected $address;
    /**
     * Contact to responsible person. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @var ResponsiblePersonContact
     */
    protected $contact;
    /**
     * Name of responsible person.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of responsible person.
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
     * Responsible person address.
     *
     * @return ResponsiblePersonAddress
     */
    public function getAddress(): ResponsiblePersonAddress
    {
        return $this->address;
    }
    /**
     * Responsible person address.
     *
     * @param ResponsiblePersonAddress $address
     *
     * @return self
     */
    public function setAddress(ResponsiblePersonAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact to responsible person. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @return ResponsiblePersonContact
     */
    public function getContact(): ResponsiblePersonContact
    {
        return $this->contact;
    }
    /**
     * Contact to responsible person. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @param ResponsiblePersonContact $contact
     *
     * @return self
     */
    public function setContact(ResponsiblePersonContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
}