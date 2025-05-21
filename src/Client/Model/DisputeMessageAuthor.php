<?php

namespace Jlonom\AllegroSDK\Model;

class DisputeMessageAuthor extends \ArrayObject
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
     * Not present if role is ADMIN, SYSTEM or FULFILLMENT
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @var string
     */
    protected $role;
    /**
     * Not present if role is ADMIN, SYSTEM or FULFILLMENT
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * Not present if role is ADMIN, SYSTEM or FULFILLMENT
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
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
}