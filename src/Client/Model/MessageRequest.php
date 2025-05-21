<?php

namespace Jlonom\AllegroSDK\Model;

class MessageRequest extends \ArrayObject
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
     * @var DisputeAttachmentId
     */
    protected $attachment;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
     * @return DisputeAttachmentId
     */
    public function getAttachment(): DisputeAttachmentId
    {
        return $this->attachment;
    }
    /**
     * 
     *
     * @param DisputeAttachmentId $attachment
     *
     * @return self
     */
    public function setAttachment(DisputeAttachmentId $attachment): self
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}