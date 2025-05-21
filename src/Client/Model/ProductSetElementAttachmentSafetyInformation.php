<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementAttachmentSafetyInformation extends ProductSetElementSafetyInformation
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
     * @var list<ProductSetElementAttachmentSafetyInformationattachmentsItem>
     */
    protected $attachments;
    /**
     * 
     *
     * @return list<ProductSetElementAttachmentSafetyInformationattachmentsItem>
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param list<ProductSetElementAttachmentSafetyInformationattachmentsItem> $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
}