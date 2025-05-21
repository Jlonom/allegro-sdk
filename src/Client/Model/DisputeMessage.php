<?php

namespace Jlonom\AllegroSDK\Model;

class DisputeMessage extends \ArrayObject
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
    protected $text;
    /**
     * 
     *
     * @var DisputeAttachment
     */
    protected $attachment;
    /**
     * Author of the message
     *
     * @var DisputeMessageAuthor
     */
    protected $author;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
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
     * @return DisputeAttachment
     */
    public function getAttachment(): DisputeAttachment
    {
        return $this->attachment;
    }
    /**
     * 
     *
     * @param DisputeAttachment $attachment
     *
     * @return self
     */
    public function setAttachment(DisputeAttachment $attachment): self
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;
        return $this;
    }
    /**
     * Author of the message
     *
     * @return DisputeMessageAuthor
     */
    public function getAuthor(): DisputeMessageAuthor
    {
        return $this->author;
    }
    /**
     * Author of the message
     *
     * @param DisputeMessageAuthor $author
     *
     * @return self
     */
    public function setAuthor(DisputeMessageAuthor $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
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
}