<?php

namespace Jlonom\AllegroSDK\Model;

class Thread extends \ArrayObject
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
     * @var bool
     */
    protected $read;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $lastMessageDateTime;
    /**
     * 
     *
     * @var Interlocutor|null
     */
    protected $interlocutor;
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
     * @return bool
     */
    public function getRead(): bool
    {
        return $this->read;
    }
    /**
     * 
     *
     * @param bool $read
     *
     * @return self
     */
    public function setRead(bool $read): self
    {
        $this->initialized['read'] = true;
        $this->read = $read;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getLastMessageDateTime(): ?\DateTime
    {
        return $this->lastMessageDateTime;
    }
    /**
     * 
     *
     * @param \DateTime|null $lastMessageDateTime
     *
     * @return self
     */
    public function setLastMessageDateTime(?\DateTime $lastMessageDateTime): self
    {
        $this->initialized['lastMessageDateTime'] = true;
        $this->lastMessageDateTime = $lastMessageDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return Interlocutor|null
     */
    public function getInterlocutor(): ?Interlocutor
    {
        return $this->interlocutor;
    }
    /**
     * 
     *
     * @param Interlocutor|null $interlocutor
     *
     * @return self
     */
    public function setInterlocutor(?Interlocutor $interlocutor): self
    {
        $this->initialized['interlocutor'] = true;
        $this->interlocutor = $interlocutor;
        return $this;
    }
}