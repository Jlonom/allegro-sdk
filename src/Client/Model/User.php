<?php

namespace Jlonom\AllegroSDK\Model;

class User extends \ArrayObject
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
     * Buyer id
     *
     * @var string
     */
    protected $id;
    /**
     * Buyer's login
     *
     * @var string
     */
    protected $login;
    /**
     * Buyer id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Buyer id
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
     * Buyer's login
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * Buyer's login
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