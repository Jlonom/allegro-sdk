<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationAttachmentSafetyInformation extends ModificationSafetyInformation
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
     * Full list of safety information attachments.
     *
     * @var list<ModificationAttachmentSafetyInformationattachmentsItem>
     */
    protected $attachments;
    /**
     * Full list of safety information attachments.
     *
     * @return list<ModificationAttachmentSafetyInformationattachmentsItem>
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * Full list of safety information attachments.
     *
     * @param list<ModificationAttachmentSafetyInformationattachmentsItem> $attachments
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