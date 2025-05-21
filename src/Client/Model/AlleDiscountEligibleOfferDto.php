<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountEligibleOfferDto extends \ArrayObject
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
     * The id of the offer.
     *
     * @var string
     */
    protected $id;
    /**
     * Offer product data.
     *
     * @var AlleDiscountEligibleOfferDtoProduct
     */
    protected $product;
    /**
     * Offer base price.
     *
     * @var AlleDiscountEligibleOfferDtoBasePrice|null
     */
    protected $basePrice;
    /**
     * AlleDiscount specific data.
     *
     * @var AlleDiscountEligibleOfferDtoAlleDiscount
     */
    protected $alleDiscount;
    /**
     * The id of the offer.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the offer.
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
     * Offer product data.
     *
     * @return AlleDiscountEligibleOfferDtoProduct
     */
    public function getProduct(): AlleDiscountEligibleOfferDtoProduct
    {
        return $this->product;
    }
    /**
     * Offer product data.
     *
     * @param AlleDiscountEligibleOfferDtoProduct $product
     *
     * @return self
     */
    public function setProduct(AlleDiscountEligibleOfferDtoProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * Offer base price.
     *
     * @return AlleDiscountEligibleOfferDtoBasePrice|null
     */
    public function getBasePrice(): ?AlleDiscountEligibleOfferDtoBasePrice
    {
        return $this->basePrice;
    }
    /**
     * Offer base price.
     *
     * @param AlleDiscountEligibleOfferDtoBasePrice|null $basePrice
     *
     * @return self
     */
    public function setBasePrice(?AlleDiscountEligibleOfferDtoBasePrice $basePrice): self
    {
        $this->initialized['basePrice'] = true;
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     * AlleDiscount specific data.
     *
     * @return AlleDiscountEligibleOfferDtoAlleDiscount
     */
    public function getAlleDiscount(): AlleDiscountEligibleOfferDtoAlleDiscount
    {
        return $this->alleDiscount;
    }
    /**
     * AlleDiscount specific data.
     *
     * @param AlleDiscountEligibleOfferDtoAlleDiscount $alleDiscount
     *
     * @return self
     */
    public function setAlleDiscount(AlleDiscountEligibleOfferDtoAlleDiscount $alleDiscount): self
    {
        $this->initialized['alleDiscount'] = true;
        $this->alleDiscount = $alleDiscount;
        return $this;
    }
}