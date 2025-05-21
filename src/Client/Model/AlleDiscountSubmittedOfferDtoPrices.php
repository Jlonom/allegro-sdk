<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmittedOfferDtoPrices extends \ArrayObject
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
     * The price you agreed to lower to for the offer.
     *
     * @var AlleDiscountSubmittedOfferDtoPricesProposedPrice
     */
    protected $proposedPrice;
    /**
     * Minimal price reduction on the offer.
     *
     * @var AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction
     */
    protected $minimalPriceReduction;
    /**
     * Maximum price for the offer after discount. Can be lower.
     *
     * @var AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice
     */
    protected $maximumSellingPrice;
    /**
     * The price you agreed to lower to for the offer.
     *
     * @return AlleDiscountSubmittedOfferDtoPricesProposedPrice
     */
    public function getProposedPrice(): AlleDiscountSubmittedOfferDtoPricesProposedPrice
    {
        return $this->proposedPrice;
    }
    /**
     * The price you agreed to lower to for the offer.
     *
     * @param AlleDiscountSubmittedOfferDtoPricesProposedPrice $proposedPrice
     *
     * @return self
     */
    public function setProposedPrice(AlleDiscountSubmittedOfferDtoPricesProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;
        return $this;
    }
    /**
     * Minimal price reduction on the offer.
     *
     * @return AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction
     */
    public function getMinimalPriceReduction(): AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction
    {
        return $this->minimalPriceReduction;
    }
    /**
     * Minimal price reduction on the offer.
     *
     * @param AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction $minimalPriceReduction
     *
     * @return self
     */
    public function setMinimalPriceReduction(AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction $minimalPriceReduction): self
    {
        $this->initialized['minimalPriceReduction'] = true;
        $this->minimalPriceReduction = $minimalPriceReduction;
        return $this;
    }
    /**
     * Maximum price for the offer after discount. Can be lower.
     *
     * @return AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice
     */
    public function getMaximumSellingPrice(): AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice
    {
        return $this->maximumSellingPrice;
    }
    /**
     * Maximum price for the offer after discount. Can be lower.
     *
     * @param AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice $maximumSellingPrice
     *
     * @return self
     */
    public function setMaximumSellingPrice(AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice $maximumSellingPrice): self
    {
        $this->initialized['maximumSellingPrice'] = true;
        $this->maximumSellingPrice = $maximumSellingPrice;
        return $this;
    }
}