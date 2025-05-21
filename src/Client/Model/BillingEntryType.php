<?php

namespace Jlonom\AllegroSDK\Model;

class BillingEntryType extends \ArrayObject
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
     * Three-letter code of the billing type of the returned billing entry.
     *
     * @var string
     */
    protected $id;
    /**
     * Billing type of the returned billing entry. This type is translated based on the value of the "Accept-Language" header. By default a message in English is returned.
     *
     * @var string
     */
    protected $name;
    /**
     * Three-letter code of the billing type of the returned billing entry.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Three-letter code of the billing type of the returned billing entry.
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
     * Billing type of the returned billing entry. This type is translated based on the value of the "Accept-Language" header. By default a message in English is returned.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Billing type of the returned billing entry. This type is translated based on the value of the "Accept-Language" header. By default a message in English is returned.
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
}