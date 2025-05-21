<?php

namespace Jlonom\AllegroSDK\Model;

class Message extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var ThreadId
     */
    protected $thread;
    /**
     * 
     *
     * @var MessageAuthor
     */
    protected $author;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var string|null
     */
    protected $subject;
    /**
     * 
     *
     * @var MessageRelatedObject
     */
    protected $relatesTo;
    /**
     * 
     *
     * @var bool
     */
    protected $hasAdditionalAttachments;
    /**
     * 
     *
     * @var list<MessageAttachmentInfo>
     */
    protected $attachments;
    /**
     * Contains optional contextual information linked to message.
     *
     * @var MessageAdditionalInformation|null
     */
    protected $additionalInformation;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return ThreadId
     */
    public function getThread(): ThreadId
    {
        return $this->thread;
    }
    /**
     * 
     *
     * @param ThreadId $thread
     *
     * @return self
     */
    public function setThread(ThreadId $thread): self
    {
        $this->initialized['thread'] = true;
        $this->thread = $thread;
        return $this;
    }
    /**
     * 
     *
     * @return MessageAuthor
     */
    public function getAuthor(): MessageAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param MessageAuthor $author
     *
     * @return self
     */
    public function setAuthor(MessageAuthor $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
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
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return MessageRelatedObject
     */
    public function getRelatesTo(): MessageRelatedObject
    {
        return $this->relatesTo;
    }
    /**
     * 
     *
     * @param MessageRelatedObject $relatesTo
     *
     * @return self
     */
    public function setRelatesTo(MessageRelatedObject $relatesTo): self
    {
        $this->initialized['relatesTo'] = true;
        $this->relatesTo = $relatesTo;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasAdditionalAttachments(): bool
    {
        return $this->hasAdditionalAttachments;
    }
    /**
     * 
     *
     * @param bool $hasAdditionalAttachments
     *
     * @return self
     */
    public function setHasAdditionalAttachments(bool $hasAdditionalAttachments): self
    {
        $this->initialized['hasAdditionalAttachments'] = true;
        $this->hasAdditionalAttachments = $hasAdditionalAttachments;
        return $this;
    }
    /**
     * 
     *
     * @return list<MessageAttachmentInfo>
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param list<MessageAttachmentInfo> $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * Contains optional contextual information linked to message.
     *
     * @return MessageAdditionalInformation|null
     */
    public function getAdditionalInformation(): ?MessageAdditionalInformation
    {
        return $this->additionalInformation;
    }
    /**
     * Contains optional contextual information linked to message.
     *
     * @param MessageAdditionalInformation|null $additionalInformation
     *
     * @return self
     */
    public function setAdditionalInformation(?MessageAdditionalInformation $additionalInformation): self
    {
        $this->initialized['additionalInformation'] = true;
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
}