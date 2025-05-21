<?php

namespace Jlonom\AllegroSDK\Model;

class FulfillmentOrderParcelItem extends \ArrayObject
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
     * Product identifier
     *
     * @var string
     */
    protected $productId;
    /**
     * Number of items placed in a parcel
     *
     * @var int
     */
    protected $quantity;
    /**
     * List of serial numbers of included items
     *
     * @var list<string>
     */
    protected $serialNumbers;
    /**
     * Expiration date of all items associated by quantity
     *
     * @var \DateTime
     */
    protected $expirationDate;
    /**
     * Offer identifier
     *
     * @var string
     */
    protected $offerId;
    /**
     * Product identifier
     *
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }
    /**
     * Product identifier
     *
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * Number of items placed in a parcel
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Number of items placed in a parcel
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
     * List of serial numbers of included items
     *
     * @return list<string>
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }
    /**
     * List of serial numbers of included items
     *
     * @param list<string> $serialNumbers
     *
     * @return self
     */
    public function setSerialNumbers(array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;
        return $this;
    }
    /**
     * Expiration date of all items associated by quantity
     *
     * @return \DateTime
     */
    public function getExpirationDate(): \DateTime
    {
        return $this->expirationDate;
    }
    /**
     * Expiration date of all items associated by quantity
     *
     * @param \DateTime $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(\DateTime $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Offer identifier
     *
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }
    /**
     * Offer identifier
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
}