<?php

namespace Jlonom\AllegroSDK\Model;

class OrderEventData extends \ArrayObject
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
     * Seller identifier
     *
     * @var SellerReference
     */
    protected $seller;
    /**
     * Buyer data
     *
     * @var BuyerReference
     */
    protected $buyer;
    /**
     * 
     *
     * @var list<OrderLineItem>
     */
    protected $lineItems;
    /**
     * 
     *
     * @var CheckoutFormReference
     */
    protected $checkoutForm;
    /**
     * 
     *
     * @var OrderMarketplace
     */
    protected $marketplace;
    /**
     * Seller identifier
     *
     * @return SellerReference
     */
    public function getSeller(): SellerReference
    {
        return $this->seller;
    }
    /**
     * Seller identifier
     *
     * @param SellerReference $seller
     *
     * @return self
     */
    public function setSeller(SellerReference $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;
        return $this;
    }
    /**
     * Buyer data
     *
     * @return BuyerReference
     */
    public function getBuyer(): BuyerReference
    {
        return $this->buyer;
    }
    /**
     * Buyer data
     *
     * @param BuyerReference $buyer
     *
     * @return self
     */
    public function setBuyer(BuyerReference $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;
        return $this;
    }
    /**
     * 
     *
     * @return list<OrderLineItem>
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }
    /**
     * 
     *
     * @param list<OrderLineItem> $lineItems
     *
     * @return self
     */
    public function setLineItems(array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormReference
     */
    public function getCheckoutForm(): CheckoutFormReference
    {
        return $this->checkoutForm;
    }
    /**
     * 
     *
     * @param CheckoutFormReference $checkoutForm
     *
     * @return self
     */
    public function setCheckoutForm(CheckoutFormReference $checkoutForm): self
    {
        $this->initialized['checkoutForm'] = true;
        $this->checkoutForm = $checkoutForm;
        return $this;
    }
    /**
     * 
     *
     * @return OrderMarketplace
     */
    public function getMarketplace(): OrderMarketplace
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param OrderMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(OrderMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
}