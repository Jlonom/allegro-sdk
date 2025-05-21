<?php

namespace Jlonom\AllegroSDK\Model;

class SellingModeWithNetPrice extends \ArrayObject
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
     * The selling format of the offer.
     *
     * @var string
     */
    protected $format;
    /**
     * The buy now or advertisement price (depending on the offer's format).
     *
     * @var BuyNowPrice
     */
    protected $price;
    /**
     * The minimal price for offers in auction format.
     *
     * @var MinimalPrice
     */
    protected $minimalPrice;
    /**
     * The starting price for offers in auction format.
     *
     * @var StartingPrice
     */
    protected $startingPrice;
    /**
     * The buy now net price computed based on tax. Provided for informational purposes only - ignored when creating (POST) or updating (PUT).
     *
     * @var NetPrice
     */
    protected $netPrice;
    /**
     * The selling format of the offer.
     *
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }
    /**
     * The selling format of the offer.
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * The buy now or advertisement price (depending on the offer's format).
     *
     * @return BuyNowPrice
     */
    public function getPrice(): BuyNowPrice
    {
        return $this->price;
    }
    /**
     * The buy now or advertisement price (depending on the offer's format).
     *
     * @param BuyNowPrice $price
     *
     * @return self
     */
    public function setPrice(BuyNowPrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * The minimal price for offers in auction format.
     *
     * @return MinimalPrice
     */
    public function getMinimalPrice(): MinimalPrice
    {
        return $this->minimalPrice;
    }
    /**
     * The minimal price for offers in auction format.
     *
     * @param MinimalPrice $minimalPrice
     *
     * @return self
     */
    public function setMinimalPrice(MinimalPrice $minimalPrice): self
    {
        $this->initialized['minimalPrice'] = true;
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * The starting price for offers in auction format.
     *
     * @return StartingPrice
     */
    public function getStartingPrice(): StartingPrice
    {
        return $this->startingPrice;
    }
    /**
     * The starting price for offers in auction format.
     *
     * @param StartingPrice $startingPrice
     *
     * @return self
     */
    public function setStartingPrice(StartingPrice $startingPrice): self
    {
        $this->initialized['startingPrice'] = true;
        $this->startingPrice = $startingPrice;
        return $this;
    }
    /**
     * The buy now net price computed based on tax. Provided for informational purposes only - ignored when creating (POST) or updating (PUT).
     *
     * @return NetPrice
     */
    public function getNetPrice(): NetPrice
    {
        return $this->netPrice;
    }
    /**
     * The buy now net price computed based on tax. Provided for informational purposes only - ignored when creating (POST) or updating (PUT).
     *
     * @param NetPrice $netPrice
     *
     * @return self
     */
    public function setNetPrice(NetPrice $netPrice): self
    {
        $this->initialized['netPrice'] = true;
        $this->netPrice = $netPrice;
        return $this;
    }
}