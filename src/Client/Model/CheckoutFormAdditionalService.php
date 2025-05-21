<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormAdditionalService extends \ArrayObject
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
     * Additional service id
     *
     * @var string
     */
    protected $definitionId;
    /**
     * Additional service name
     *
     * @var string
     */
    protected $name;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $price;
    /**
     * Quantity of an additional service
     *
     * @var int
     */
    protected $quantity;
    /**
     * Additional service id
     *
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }
    /**
     * Additional service id
     *
     * @param string $definitionId
     *
     * @return self
     */
    public function setDefinitionId(string $definitionId): self
    {
        $this->initialized['definitionId'] = true;
        $this->definitionId = $definitionId;
        return $this;
    }
    /**
     * Additional service name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Additional service name
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
     * The price data.
     *
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }
    /**
     * The price data.
     *
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Quantity of an additional service
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Quantity of an additional service
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}