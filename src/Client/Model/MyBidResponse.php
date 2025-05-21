<?php

namespace Jlonom\AllegroSDK\Model;

class MyBidResponse extends \ArrayObject
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
     * Maximum amount that user is willing to pay for the auction.
     *
     * @var MaxPrice
     */
    protected $maxAmount;
    /**
     * This indicates if the minimal price of the auction has been met or is not set at all. A minimal price can be set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not higher than the minimal price when the auction ends, the listing ends and the item is not sold.
     *
     * @var bool
     */
    protected $minimalPriceMet;
    /**
     * Is this bid currently winning?
     *
     * @var bool
     */
    protected $highBidder;
    /**
     * Auction details.
     *
     * @var MyBidResponseAuction
     */
    protected $auction;
    /**
     * Maximum amount that user is willing to pay for the auction.
     *
     * @return MaxPrice
     */
    public function getMaxAmount(): MaxPrice
    {
        return $this->maxAmount;
    }
    /**
     * Maximum amount that user is willing to pay for the auction.
     *
     * @param MaxPrice $maxAmount
     *
     * @return self
     */
    public function setMaxAmount(MaxPrice $maxAmount): self
    {
        $this->initialized['maxAmount'] = true;
        $this->maxAmount = $maxAmount;
        return $this;
    }
    /**
     * This indicates if the minimal price of the auction has been met or is not set at all. A minimal price can be set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not higher than the minimal price when the auction ends, the listing ends and the item is not sold.
     *
     * @return bool
     */
    public function getMinimalPriceMet(): bool
    {
        return $this->minimalPriceMet;
    }
    /**
     * This indicates if the minimal price of the auction has been met or is not set at all. A minimal price can be set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not higher than the minimal price when the auction ends, the listing ends and the item is not sold.
     *
     * @param bool $minimalPriceMet
     *
     * @return self
     */
    public function setMinimalPriceMet(bool $minimalPriceMet): self
    {
        $this->initialized['minimalPriceMet'] = true;
        $this->minimalPriceMet = $minimalPriceMet;
        return $this;
    }
    /**
     * Is this bid currently winning?
     *
     * @return bool
     */
    public function getHighBidder(): bool
    {
        return $this->highBidder;
    }
    /**
     * Is this bid currently winning?
     *
     * @param bool $highBidder
     *
     * @return self
     */
    public function setHighBidder(bool $highBidder): self
    {
        $this->initialized['highBidder'] = true;
        $this->highBidder = $highBidder;
        return $this;
    }
    /**
     * Auction details.
     *
     * @return MyBidResponseAuction
     */
    public function getAuction(): MyBidResponseAuction
    {
        return $this->auction;
    }
    /**
     * Auction details.
     *
     * @param MyBidResponseAuction $auction
     *
     * @return self
     */
    public function setAuction(MyBidResponseAuction $auction): self
    {
        $this->initialized['auction'] = true;
        $this->auction = $auction;
        return $this;
    }
}