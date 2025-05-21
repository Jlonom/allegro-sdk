<?php

namespace Jlonom\AllegroSDK\Model;

class NewMessageInThread extends \ArrayObject
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
    protected $text;
    /**
     * 
     *
     * @var list<MessageAttachmentId>|null
     */
    protected $attachments;
    /**
     * 
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return list<MessageAttachmentId>|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param list<MessageAttachmentId>|null $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
}