<?php

namespace Jlonom\AllegroSDK\Model;

class RefundClaimBuyer extends \ArrayObject
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
     * ID of the buyer associated with the refund application.
     *
     * @var string
     */
    protected $id;
    /**
     * Login of the buyer associated with the refund application.
     *
     * @var string
     */
    protected $login;
    /**
     * ID of the buyer associated with the refund application.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the buyer associated with the refund application.
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
     * Login of the buyer associated with the refund application.
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * Login of the buyer associated with the refund application.
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