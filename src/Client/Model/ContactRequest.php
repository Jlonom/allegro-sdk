<?php

namespace Jlonom\AllegroSDK\Model;

class ContactRequest extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var list<EmailRequest>
     */
    protected $emails;
    /**
     * 
     *
     * @var list<PhonesRequest>
     */
    protected $phones;
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * @return list<EmailRequest>
     */
    public function getEmails(): array
    {
        return $this->emails;
    }
    /**
     * 
     *
     * @param list<EmailRequest> $emails
     *
     * @return self
     */
    public function setEmails(array $emails): self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;
        return $this;
    }
    /**
     * 
     *
     * @return list<PhonesRequest>
     */
    public function getPhones(): array
    {
        return $this->phones;
    }
    /**
     * 
     *
     * @param list<PhonesRequest> $phones
     *
     * @return self
     */
    public function setPhones(array $phones): self
    {
        $this->initialized['phones'] = true;
        $this->phones = $phones;
        return $this;
    }
}