<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormDeliveryMethod extends \ArrayObject
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
     * Delivery method id
     *
     * @var string
     */
    protected $id;
    /**
     * Delivery method name
     *
     * @var string
     */
    protected $name;
    /**
     * Delivery method id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Delivery method id
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
     * Delivery method name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Delivery method name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}