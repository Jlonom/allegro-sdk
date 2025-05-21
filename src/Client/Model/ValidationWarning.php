<?php

namespace Jlonom\AllegroSDK\Model;

class ValidationWarning extends \ArrayObject
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
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $details;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string|null
     */
    protected $path;
    /**
     * 
     *
     * @var string
     */
    protected $userMessage;
    /**
     * Additional technical properties of this error. Set of possible keys depends on the specific error.
     *
     * @var array<string, string>
     */
    protected $metadata;
    /**
     * 
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param string $details
     *
     * @return self
     */
    public function setDetails(string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserMessage(): string
    {
        return $this->userMessage;
    }
    /**
     * 
     *
     * @param string $userMessage
     *
     * @return self
     */
    public function setUserMessage(string $userMessage): self
    {
        $this->initialized['userMessage'] = true;
        $this->userMessage = $userMessage;
        return $this;
    }
    /**
     * Additional technical properties of this error. Set of possible keys depends on the specific error.
     *
     * @return array<string, string>
     */
    public function getMetadata(): iterable
    {
        return $this->metadata;
    }
    /**
     * Additional technical properties of this error. Set of possible keys depends on the specific error.
     *
     * @param array<string, string> $metadata
     *
     * @return self
     */
    public function setMetadata(iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
}