<?php

namespace Jlonom\AllegroSDK\Model;

class OrderMarketplace extends \ArrayObject
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
     * Id of the purchase marketplace
     *
     * @var string
     */
    protected $id;
    /**
     * Id of the purchase marketplace
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of the purchase marketplace
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
}