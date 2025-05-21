<?php

namespace Jlonom\AllegroSDK\Model;

class ResponsiblePersonContact extends \ArrayObject
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
     * Email of responsible person.
     *
     * @var string
     */
    protected $email;
    /**
     * Phone number of responsible person. This field is optional.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * URL address to contact form.
     *
     * @var string
     */
    protected $formUrl;
    /**
     * Email of responsible person.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email of responsible person.
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
     * Phone number of responsible person. This field is optional.
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Phone number of responsible person. This field is optional.
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * URL address to contact form.
     *
     * @return string
     */
    public function getFormUrl(): string
    {
        return $this->formUrl;
    }
    /**
     * URL address to contact form.
     *
     * @param string $formUrl
     *
     * @return self
     */
    public function setFormUrl(string $formUrl): self
    {
        $this->initialized['formUrl'] = true;
        $this->formUrl = $formUrl;
        return $this;
    }
}