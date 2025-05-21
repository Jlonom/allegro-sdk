<?php

namespace Jlonom\AllegroSDK\Model;

class Interlocutor extends \ArrayObject
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
    protected $login;
    /**
     * 
     *
     * @var string
     */
    protected $avatarUrl;
    /**
     * 
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl): self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
}