<?php

namespace Jlonom\AllegroSDK\Model;

class ContactResponseList extends \ArrayObject
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
     * @var list<ContactResponse>
     */
    protected $contacts;
    /**
     * 
     *
     * @return list<ContactResponse>
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param list<ContactResponse> $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
}