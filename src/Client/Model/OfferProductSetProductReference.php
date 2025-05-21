<?php

namespace Jlonom\AllegroSDK\Model;

class OfferProductSetProductReference extends \ArrayObject
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
     * Product id.
     *
     * @var string
     */
    protected $id;
    /**
     * Product quantity in a product set.
     *
     * @var float
     */
    protected $quantity;
    /**
     * Product id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Product id.
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
     * Product quantity in a product set.
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    /**
     * Product quantity in a product set.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}