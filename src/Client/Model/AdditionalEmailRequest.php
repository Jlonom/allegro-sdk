<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalEmailRequest extends \ArrayObject
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
     * A valid email address you want to add to your account. Maximum length of the part before the `@` sign is 64 characters.
     *
     * @var string
     */
    protected $email;
    /**
     * A valid email address you want to add to your account. Maximum length of the part before the `@` sign is 64 characters.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * A valid email address you want to add to your account. Maximum length of the part before the `@` sign is 64 characters.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
}