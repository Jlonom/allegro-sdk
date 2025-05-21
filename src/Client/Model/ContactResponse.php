<?php

namespace Jlonom\AllegroSDK\Model;

class ContactResponse extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var list<EmailResponse>
     */
    protected $emails;
    /**
     * 
     *
     * @var list<PhonesResponse>
     */
    protected $phones;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * @return list<EmailResponse>
     */
    public function getEmails(): array
    {
        return $this->emails;
    }
    /**
     * 
     *
     * @param list<EmailResponse> $emails
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
     * @return list<PhonesResponse>
     */
    public function getPhones(): array
    {
        return $this->phones;
    }
    /**
     * 
     *
     * @param list<PhonesResponse> $phones
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