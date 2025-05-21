<?php

namespace Jlonom\AllegroSDK\Model;

class RefundClaimLineItemOffer extends \ArrayObject
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
     * ID of the offer associated with the purchase.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the offer associated with the purchase.
     *
     * @var string
     */
    protected $name;
    /**
     * ID of the offer associated with the purchase.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the offer associated with the purchase.
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
     * Name of the offer associated with the purchase.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the offer associated with the purchase.
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