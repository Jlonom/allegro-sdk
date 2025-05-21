<?php

namespace Jlonom\AllegroSDK\Model;

class BiddingOffersOfferIdBidPutBody extends \ArrayObject
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
}