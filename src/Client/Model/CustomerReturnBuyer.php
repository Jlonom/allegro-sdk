<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnBuyer extends \ArrayObject
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
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
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
}