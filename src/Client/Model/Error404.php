<?php

namespace Jlonom\AllegroSDK\Model;

class Error404 extends \ArrayObject
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
     * The error code. You can use this code when contacting us about any problems with our systems.
     *
     * @var string
     */
    protected $code;
    /**
     * For some cases, this field provides more details regarding the error. This field can not be null.
     *
     * @var string
     */
    protected $details;
    /**
     * A message directed to the developer of the program. This message give you some more technical details on what exactly has happened.
     *
     * @var string
     */
    protected $message;
    /**
     * This field will point to a specific field in object if the error is connected to a problem with such specific field. This field can be empty
     *
     * @var string|null
     */
    protected $path;
    /**
     * The message that can be presented directly to your user. It will not contain any technical information. This message is translated based on the value of the `Accept-Language` header. By default message in Polish is returned.
     *
     * @var string
     */
    protected $userMessage;
    /**
     * The error code. You can use this code when contacting us about any problems with our systems.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * The error code. You can use this code when contacting us about any problems with our systems.
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
     * For some cases, this field provides more details regarding the error. This field can not be null.
     *
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }
    /**
     * For some cases, this field provides more details regarding the error. This field can not be null.
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
     * A message directed to the developer of the program. This message give you some more technical details on what exactly has happened.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * A message directed to the developer of the program. This message give you some more technical details on what exactly has happened.
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
     * This field will point to a specific field in object if the error is connected to a problem with such specific field. This field can be empty
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * This field will point to a specific field in object if the error is connected to a problem with such specific field. This field can be empty
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
     * The message that can be presented directly to your user. It will not contain any technical information. This message is translated based on the value of the `Accept-Language` header. By default message in Polish is returned.
     *
     * @return string
     */
    public function getUserMessage(): string
    {
        return $this->userMessage;
    }
    /**
     * The message that can be presented directly to your user. It will not contain any technical information. This message is translated based on the value of the `Accept-Language` header. By default message in Polish is returned.
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
}