<?php

namespace Jlonom\AllegroSDK\Model;

class OfferSellingMode extends \ArrayObject
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
     * The price of the offer. It is the buy now price for *BUY_NOW* selling format and current auction price for *AUCTION* format.
     *
     * @var OfferPrice
     */
    protected $price;
    /**
     * Fixed (buy now) price of the offer in case of *AUCTION* selling format with buy now option enabled.
     *
     * @var OfferFixedPrice
     */
    protected $fixedPrice;
    /**
     * Lower bound of popularity range of the offer for *BUY_NOW* selling format.
     *
     * @var int
     */
    protected $popularity;
    /**
     * Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+]
     *
     * @var string
     */
    protected $popularityRange;
    /**
     * Number of bidders for *AUCTION* selling format.
     *
     * @var int
     */
    protected $bidCount;
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
     * The price of the offer. It is the buy now price for *BUY_NOW* selling format and current auction price for *AUCTION* format.
     *
     * @return OfferPrice
     */
    public function getPrice(): OfferPrice
    {
        return $this->price;
    }
    /**
     * The price of the offer. It is the buy now price for *BUY_NOW* selling format and current auction price for *AUCTION* format.
     *
     * @param OfferPrice $price
     *
     * @return self
     */
    public function setPrice(OfferPrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Fixed (buy now) price of the offer in case of *AUCTION* selling format with buy now option enabled.
     *
     * @return OfferFixedPrice
     */
    public function getFixedPrice(): OfferFixedPrice
    {
        return $this->fixedPrice;
    }
    /**
     * Fixed (buy now) price of the offer in case of *AUCTION* selling format with buy now option enabled.
     *
     * @param OfferFixedPrice $fixedPrice
     *
     * @return self
     */
    public function setFixedPrice(OfferFixedPrice $fixedPrice): self
    {
        $this->initialized['fixedPrice'] = true;
        $this->fixedPrice = $fixedPrice;
        return $this;
    }
    /**
     * Lower bound of popularity range of the offer for *BUY_NOW* selling format.
     *
     * @return int
     */
    public function getPopularity(): int
    {
        return $this->popularity;
    }
    /**
     * Lower bound of popularity range of the offer for *BUY_NOW* selling format.
     *
     * @param int $popularity
     *
     * @return self
     */
    public function setPopularity(int $popularity): self
    {
        $this->initialized['popularity'] = true;
        $this->popularity = $popularity;
        return $this;
    }
    /**
     * Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+]
     *
     * @return string
     */
    public function getPopularityRange(): string
    {
        return $this->popularityRange;
    }
    /**
     * Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+]
     *
     * @param string $popularityRange
     *
     * @return self
     */
    public function setPopularityRange(string $popularityRange): self
    {
        $this->initialized['popularityRange'] = true;
        $this->popularityRange = $popularityRange;
        return $this;
    }
    /**
     * Number of bidders for *AUCTION* selling format.
     *
     * @return int
     */
    public function getBidCount(): int
    {
        return $this->bidCount;
    }
    /**
     * Number of bidders for *AUCTION* selling format.
     *
     * @param int $bidCount
     *
     * @return self
     */
    public function setBidCount(int $bidCount): self
    {
        $this->initialized['bidCount'] = true;
        $this->bidCount = $bidCount;
        return $this;
    }
}