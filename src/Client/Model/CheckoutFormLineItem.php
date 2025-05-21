<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormLineItem extends \ArrayObject
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
     * Line item identifier
     *
     * @var string
     */
    protected $id;
    /**
     * Offer identifier.
     *
     * @var OfferReference
     */
    protected $offer;
    /**
     * quantity
     *
     * @var float
     */
    protected $quantity;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $originalPrice;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $price;
    /**
     * 
     *
     * @var LineItemReconciliation
     */
    protected $reconciliation;
    /**
     * 
     *
     * @var list<CheckoutFormAdditionalService>
     */
    protected $selectedAdditionalServices;
    /**
     * 
     *
     * @var list<LineItemVoucher>
     */
    protected $vouchers;
    /**
     * 
     *
     * @var CheckoutFormLineItemTax
     */
    protected $tax;
    /**
     * ISO date when offer was bought
     *
     * @var \DateTime
     */
    protected $boughtAt;
    /**
     * 
     *
     * @var list<LineItemDiscount>
     */
    protected $discounts;
    /**
     * Line item identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Line item identifier
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
     * Offer identifier.
     *
     * @return OfferReference
     */
    public function getOffer(): OfferReference
    {
        return $this->offer;
    }
    /**
     * Offer identifier.
     *
     * @param OfferReference $offer
     *
     * @return self
     */
    public function setOffer(OfferReference $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * quantity
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    /**
     * quantity
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The price data.
     *
     * @return Price
     */
    public function getOriginalPrice(): Price
    {
        return $this->originalPrice;
    }
    /**
     * The price data.
     *
     * @param Price $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(Price $originalPrice): self
    {
        $this->initialized['originalPrice'] = true;
        $this->originalPrice = $originalPrice;
        return $this;
    }
    /**
     * The price data.
     *
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }
    /**
     * The price data.
     *
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return LineItemReconciliation
     */
    public function getReconciliation(): LineItemReconciliation
    {
        return $this->reconciliation;
    }
    /**
     * 
     *
     * @param LineItemReconciliation $reconciliation
     *
     * @return self
     */
    public function setReconciliation(LineItemReconciliation $reconciliation): self
    {
        $this->initialized['reconciliation'] = true;
        $this->reconciliation = $reconciliation;
        return $this;
    }
    /**
     * 
     *
     * @return list<CheckoutFormAdditionalService>
     */
    public function getSelectedAdditionalServices(): array
    {
        return $this->selectedAdditionalServices;
    }
    /**
     * 
     *
     * @param list<CheckoutFormAdditionalService> $selectedAdditionalServices
     *
     * @return self
     */
    public function setSelectedAdditionalServices(array $selectedAdditionalServices): self
    {
        $this->initialized['selectedAdditionalServices'] = true;
        $this->selectedAdditionalServices = $selectedAdditionalServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<LineItemVoucher>
     */
    public function getVouchers(): array
    {
        return $this->vouchers;
    }
    /**
     * 
     *
     * @param list<LineItemVoucher> $vouchers
     *
     * @return self
     */
    public function setVouchers(array $vouchers): self
    {
        $this->initialized['vouchers'] = true;
        $this->vouchers = $vouchers;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormLineItemTax
     */
    public function getTax(): CheckoutFormLineItemTax
    {
        return $this->tax;
    }
    /**
     * 
     *
     * @param CheckoutFormLineItemTax $tax
     *
     * @return self
     */
    public function setTax(CheckoutFormLineItemTax $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;
        return $this;
    }
    /**
     * ISO date when offer was bought
     *
     * @return \DateTime
     */
    public function getBoughtAt(): \DateTime
    {
        return $this->boughtAt;
    }
    /**
     * ISO date when offer was bought
     *
     * @param \DateTime $boughtAt
     *
     * @return self
     */
    public function setBoughtAt(\DateTime $boughtAt): self
    {
        $this->initialized['boughtAt'] = true;
        $this->boughtAt = $boughtAt;
        return $this;
    }
    /**
     * 
     *
     * @return list<LineItemDiscount>
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }
    /**
     * 
     *
     * @param list<LineItemDiscount> $discounts
     *
     * @return self
     */
    public function setDiscounts(array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
}