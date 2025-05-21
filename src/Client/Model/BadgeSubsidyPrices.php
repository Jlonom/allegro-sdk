<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeSubsidyPrices extends \ArrayObject
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
     * The price visible as the Buy Now price.
     *
     * @var BadgeApplicationSubsidyTargetPrice
     */
    protected $targetPrice;
    /**
     * The price requested by partner.
     *
     * @var BadgeApplicationSubsidySellerPrice
     */
    protected $sellerPrice;
    /**
     * The price visible as the Buy Now price.
     *
     * @return BadgeApplicationSubsidyTargetPrice
     */
    public function getTargetPrice(): BadgeApplicationSubsidyTargetPrice
    {
        return $this->targetPrice;
    }
    /**
     * The price visible as the Buy Now price.
     *
     * @param BadgeApplicationSubsidyTargetPrice $targetPrice
     *
     * @return self
     */
    public function setTargetPrice(BadgeApplicationSubsidyTargetPrice $targetPrice): self
    {
        $this->initialized['targetPrice'] = true;
        $this->targetPrice = $targetPrice;
        return $this;
    }
    /**
     * The price requested by partner.
     *
     * @return BadgeApplicationSubsidySellerPrice
     */
    public function getSellerPrice(): BadgeApplicationSubsidySellerPrice
    {
        return $this->sellerPrice;
    }
    /**
     * The price requested by partner.
     *
     * @param BadgeApplicationSubsidySellerPrice $sellerPrice
     *
     * @return self
     */
    public function setSellerPrice(BadgeApplicationSubsidySellerPrice $sellerPrice): self
    {
        $this->initialized['sellerPrice'] = true;
        $this->sellerPrice = $sellerPrice;
        return $this;
    }
}