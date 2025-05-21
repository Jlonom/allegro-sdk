<?php

namespace Jlonom\AllegroSDK\Model;

class Attachment extends \ArrayObject
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
     * The ID of an attachment received in a response from *POST /sale/offer-attachments*
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of an attachment received in a response from *POST /sale/offer-attachments*
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of an attachment received in a response from *POST /sale/offer-attachments*
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
}