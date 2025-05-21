<?php

namespace Jlonom\AllegroSDK\Model;

class OfferSeller extends \ArrayObject
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
     * The seller ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The seller login.
     *
     * @var string
     */
    protected $login;
    /**
     * Indicates whether the seller represents a registered business.
     *
     * @var bool
     */
    protected $company;
    /**
     * Indicates whether the seller has the "Super Sprzedawca" status.
     *
     * @var bool
     */
    protected $superSeller;
    /**
     * The seller ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The seller ID.
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
     * The seller login.
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * The seller login.
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
     * Indicates whether the seller represents a registered business.
     *
     * @return bool
     */
    public function getCompany(): bool
    {
        return $this->company;
    }
    /**
     * Indicates whether the seller represents a registered business.
     *
     * @param bool $company
     *
     * @return self
     */
    public function setCompany(bool $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * Indicates whether the seller has the "Super Sprzedawca" status.
     *
     * @return bool
     */
    public function getSuperSeller(): bool
    {
        return $this->superSeller;
    }
    /**
     * Indicates whether the seller has the "Super Sprzedawca" status.
     *
     * @param bool $superSeller
     *
     * @return self
     */
    public function setSuperSeller(bool $superSeller): self
    {
        $this->initialized['superSeller'] = true;
        $this->superSeller = $superSeller;
        return $this;
    }
}