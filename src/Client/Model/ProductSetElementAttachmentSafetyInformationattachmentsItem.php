<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementAttachmentSafetyInformationattachmentsItem extends \ArrayObject
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
     * Id of the attachment.
     *
     * @var string
     */
    protected $id;
    /**
     * Id of the attachment.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of the attachment.
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