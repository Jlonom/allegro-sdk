<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1SaleInfo extends \ArrayObject
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
     * The number of bidders.
     *
     * @var int
     */
    protected $biddersCount;
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
    /**
     * The number of bidders.
     *
     * @return int
     */
    public function getBiddersCount(): int
    {
        return $this->biddersCount;
    }
    /**
     * The number of bidders.
     *
     * @param int $biddersCount
     *
     * @return self
     */
    public function setBiddersCount(int $biddersCount): self
    {
        $this->initialized['biddersCount'] = true;
        $this->biddersCount = $biddersCount;
        return $this;
    }
}