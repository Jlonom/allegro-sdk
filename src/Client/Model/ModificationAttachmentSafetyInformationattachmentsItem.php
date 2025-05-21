<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationAttachmentSafetyInformationattachmentsItem extends \ArrayObject
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
     * Id of the attachment. See <a href="#operation/createOfferAttachmentUsingPOST">how to create and upload an attachment</a>.
     *
     * @var string
     */
    protected $id;
    /**
     * Id of the attachment. See <a href="#operation/createOfferAttachmentUsingPOST">how to create and upload an attachment</a>.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of the attachment. See <a href="#operation/createOfferAttachmentUsingPOST">how to create and upload an attachment</a>.
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