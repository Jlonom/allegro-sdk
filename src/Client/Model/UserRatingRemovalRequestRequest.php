<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingRemovalRequestRequest extends \ArrayObject
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
     * Message containing explanation for removing rating.
     *
     * @var string
     */
    protected $message;
    /**
     * Message containing explanation for removing rating.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Message containing explanation for removing rating.
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
}