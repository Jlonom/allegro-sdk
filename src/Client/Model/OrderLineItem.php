<?php

namespace Jlonom\AllegroSDK\Model;

class OrderLineItem extends \ArrayObject
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
     * Order item identifier
     *
     * @var string
     */
    protected $id;
    /**
     * Offer identifier.
     *
     * @var OrderLineItemOfferReference
     */
    protected $offer;
    /**
     * quantity
     *
     * @var float
     */
    protected $quantity;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $originalPrice;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $price;
    /**
     * ISO date when offer was bought
     *
     * @var \DateTime
     */
    protected $boughtAt;
    /**
     * Order item identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Order item identifier
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
     * Offer identifier.
     *
     * @return OrderLineItemOfferReference
     */
    public function getOffer(): OrderLineItemOfferReference
    {
        return $this->offer;
    }
    /**
     * Offer identifier.
     *
     * @param OrderLineItemOfferReference $offer
     *
     * @return self
     */
    public function setOffer(OrderLineItemOfferReference $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * quantity
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    /**
     * quantity
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
    /**
     * The price data.
     *
     * @return Price
     */
    public function getOriginalPrice(): Price
    {
        return $this->originalPrice;
    }
    /**
     * The price data.
     *
     * @param Price $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(Price $originalPrice): self
    {
        $this->initialized['originalPrice'] = true;
        $this->originalPrice = $originalPrice;
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
     * ISO date when offer was bought
     *
     * @return \DateTime
     */
    public function getBoughtAt(): \DateTime
    {
        return $this->boughtAt;
    }
    /**
     * ISO date when offer was bought
     *
     * @param \DateTime $boughtAt
     *
     * @return self
     */
    public function setBoughtAt(\DateTime $boughtAt): self
    {
        $this->initialized['boughtAt'] = true;
        $this->boughtAt = $boughtAt;
        return $this;
    }
}