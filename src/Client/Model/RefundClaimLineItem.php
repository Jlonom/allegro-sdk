<?php

namespace Jlonom\AllegroSDK\Model;

class RefundClaimLineItem extends \ArrayObject
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
     * ID of the purchase associated with the refund application.
     *
     * @var string
     */
    protected $id;
    /**
     * Total quantity of product purchased by the buyer. Equal to or greater than quantity for which the seller filed the refund application.
     *
     * @var int
     */
    protected $quantity;
    /**
     * Date when the purchase was made.
     *
     * @var \DateTime
     */
    protected $boughtAt;
    /**
     * Offer associated with the purchase.
     *
     * @var RefundClaimLineItemOffer
     */
    protected $offer;
    /**
     * ID of the purchase associated with the refund application.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the purchase associated with the refund application.
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
     * Total quantity of product purchased by the buyer. Equal to or greater than quantity for which the seller filed the refund application.
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Total quantity of product purchased by the buyer. Equal to or greater than quantity for which the seller filed the refund application.
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
     * Date when the purchase was made.
     *
     * @return \DateTime
     */
    public function getBoughtAt(): \DateTime
    {
        return $this->boughtAt;
    }
    /**
     * Date when the purchase was made.
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
    /**
     * Offer associated with the purchase.
     *
     * @return RefundClaimLineItemOffer
     */
    public function getOffer(): RefundClaimLineItemOffer
    {
        return $this->offer;
    }
    /**
     * Offer associated with the purchase.
     *
     * @param RefundClaimLineItemOffer $offer
     *
     * @return self
     */
    public function setOffer(RefundClaimLineItemOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
}