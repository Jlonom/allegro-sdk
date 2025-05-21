<?php

namespace Jlonom\AllegroSDK\Model;

class MessageAuthor extends \ArrayObject
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
     * @var bool
     */
    protected $isInterlocutor;
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
     * @return bool
     */
    public function getIsInterlocutor(): bool
    {
        return $this->isInterlocutor;
    }
    /**
     * 
     *
     * @param bool $isInterlocutor
     *
     * @return self
     */
    public function setIsInterlocutor(bool $isInterlocutor): self
    {
        $this->initialized['isInterlocutor'] = true;
        $this->isInterlocutor = $isInterlocutor;
        return $this;
    }
}