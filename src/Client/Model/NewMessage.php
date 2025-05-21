<?php

namespace Jlonom\AllegroSDK\Model;

class NewMessage extends \ArrayObject
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
     * @var Recipient
     */
    protected $recipient;
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
     * @var MessageOrder|null
     */
    protected $order;
    /**
     * 
     *
     * @return Recipient
     */
    public function getRecipient(): Recipient
    {
        return $this->recipient;
    }
    /**
     * 
     *
     * @param Recipient $recipient
     *
     * @return self
     */
    public function setRecipient(Recipient $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
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
    /**
     * 
     *
     * @return MessageOrder|null
     */
    public function getOrder(): ?MessageOrder
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param MessageOrder|null $order
     *
     * @return self
     */
    public function setOrder(?MessageOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}