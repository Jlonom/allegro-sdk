<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnItem extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $offerId;
    /**
     * 
     *
     * @var int
     */
    protected $quantity;
    /**
     * 
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var CustomerReturnItemReason
     */
    protected $reason;
    /**
     * 
     *
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }
    /**
     * 
     *
     * @param string $offerId
     *
     * @return self
     */
    public function setOfferId(string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerReturnItemReason
     */
    public function getReason(): CustomerReturnItemReason
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param CustomerReturnItemReason $reason
     *
     * @return self
     */
    public function setReason(CustomerReturnItemReason $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
}