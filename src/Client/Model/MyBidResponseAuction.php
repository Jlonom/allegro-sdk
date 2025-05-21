<?php

namespace Jlonom\AllegroSDK\Model;

class MyBidResponseAuction extends \ArrayObject
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
     * The current highest bid in auction format.
     *
     * @var CurrentPrice
     */
    protected $currentPrice;
    /**
     * The current highest bid in auction format.
     *
     * @return CurrentPrice
     */
    public function getCurrentPrice(): CurrentPrice
    {
        return $this->currentPrice;
    }
    /**
     * The current highest bid in auction format.
     *
     * @param CurrentPrice $currentPrice
     *
     * @return self
     */
    public function setCurrentPrice(CurrentPrice $currentPrice): self
    {
        $this->initialized['currentPrice'] = true;
        $this->currentPrice = $currentPrice;
        return $this;
    }
}