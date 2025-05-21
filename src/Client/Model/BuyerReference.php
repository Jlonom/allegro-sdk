<?php

namespace Jlonom\AllegroSDK\Model;

class BuyerReference extends \ArrayObject
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
     * buyer id
     *
     * @var string
     */
    protected $id;
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
     * is a guest account?
     *
     * @var bool
     */
    protected $guest;
    /**
     * 
     *
     * @var BuyerPreferencesReference
     */
    protected $preferences;
    /**
     * buyer id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * buyer id
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
    /**
     * is a guest account?
     *
     * @return bool
     */
    public function getGuest(): bool
    {
        return $this->guest;
    }
    /**
     * is a guest account?
     *
     * @param bool $guest
     *
     * @return self
     */
    public function setGuest(bool $guest): self
    {
        $this->initialized['guest'] = true;
        $this->guest = $guest;
        return $this;
    }
    /**
     * 
     *
     * @return BuyerPreferencesReference
     */
    public function getPreferences(): BuyerPreferencesReference
    {
        return $this->preferences;
    }
    /**
     * 
     *
     * @param BuyerPreferencesReference $preferences
     *
     * @return self
     */
    public function setPreferences(BuyerPreferencesReference $preferences): self
    {
        $this->initialized['preferences'] = true;
        $this->preferences = $preferences;
        return $this;
    }
}