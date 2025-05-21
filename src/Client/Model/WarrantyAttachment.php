<?php

namespace Jlonom\AllegroSDK\Model;

class WarrantyAttachment extends \ArrayObject
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
     * The Id of the attachment received in a response from *POST /afters-sales-service-conditions/attachments*
     *
     * @var string
     */
    protected $id;
    /**
     * Attachment file name
     *
     * @var string
     */
    protected $name;
    /**
     * The Id of the attachment received in a response from *POST /afters-sales-service-conditions/attachments*
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The Id of the attachment received in a response from *POST /afters-sales-service-conditions/attachments*
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
     * Attachment file name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Attachment file name
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