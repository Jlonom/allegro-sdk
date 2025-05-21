<?php

namespace Jlonom\AllegroSDK\Model;

class ThirdParty extends \ArrayObject
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
     * Third party name.
     *
     * @var string
     */
    protected $name;
    /**
     * Third party order number.
     *
     * @var string
     */
    protected $orderNumber;
    /**
     * Third party name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Third party name.
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
    /**
     * Third party order number.
     *
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }
    /**
     * Third party order number.
     *
     * @param string $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(string $orderNumber): self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
        return $this;
    }
}