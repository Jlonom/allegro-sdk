<?php

namespace Jlonom\AllegroSDK\Model;

class BadgePrices extends \ArrayObject
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
     * Suggested market price. Calculated automatically based on the offer's price history.
     *
     * @var BadgeMarketPrice
     */
    protected $market;
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @var BadgeApplicationBargainPrice|null
     */
    protected $bargain;
    /**
     * Prices that relate to the price reconciliation.
     *
     * @var BadgeSubsidyPrices
     */
    protected $subsidy;
    /**
     * Suggested market price. Calculated automatically based on the offer's price history.
     *
     * @return BadgeMarketPrice
     */
    public function getMarket(): BadgeMarketPrice
    {
        return $this->market;
    }
    /**
     * Suggested market price. Calculated automatically based on the offer's price history.
     *
     * @param BadgeMarketPrice $market
     *
     * @return self
     */
    public function setMarket(BadgeMarketPrice $market): self
    {
        $this->initialized['market'] = true;
        $this->market = $market;
        return $this;
    }
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @return BadgeApplicationBargainPrice|null
     */
    public function getBargain(): ?BadgeApplicationBargainPrice
    {
        return $this->bargain;
    }
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @param BadgeApplicationBargainPrice|null $bargain
     *
     * @return self
     */
    public function setBargain(?BadgeApplicationBargainPrice $bargain): self
    {
        $this->initialized['bargain'] = true;
        $this->bargain = $bargain;
        return $this;
    }
    /**
     * Prices that relate to the price reconciliation.
     *
     * @return BadgeSubsidyPrices
     */
    public function getSubsidy(): BadgeSubsidyPrices
    {
        return $this->subsidy;
    }
    /**
     * Prices that relate to the price reconciliation.
     *
     * @param BadgeSubsidyPrices $subsidy
     *
     * @return self
     */
    public function setSubsidy(BadgeSubsidyPrices $subsidy): self
    {
        $this->initialized['subsidy'] = true;
        $this->subsidy = $subsidy;
        return $this;
    }
}