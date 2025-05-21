<?php

namespace Jlonom\AllegroSDK\Model;

class RemovalRequest extends \ArrayObject
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
     * Removal request creation datetime in ISO 8601 format
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Message containing explanation for removing rating
     *
     * @var string
     */
    protected $message;
    /**
     * Message containing information who requested removing of a rating
     *
     * @var string
     */
    protected $source;
    /**
     * Removal request creation datetime in ISO 8601 format
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Removal request creation datetime in ISO 8601 format
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Message containing explanation for removing rating
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Message containing explanation for removing rating
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Message containing information who requested removing of a rating
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
     * Message containing information who requested removing of a rating
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}