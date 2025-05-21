<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutForm extends \ArrayObject
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
     * Checkout form id
     *
     * @var string
     */
    protected $id;
    /**
     * Message from buyer to seller
     *
     * @var string
     */
    protected $messageToSeller;
    /**
     * Buyer data
     *
     * @var CheckoutFormBuyerReference
     */
    protected $buyer;
    /**
     * 
     *
     * @var CheckoutFormPaymentReference
     */
    protected $payment;
    /**
     * Describes status of the form delivery and purchase options based on payment and purchase status. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `CANCELLED` - purchase cancelled by buyer.
     *
     * @var mixed
     */
    protected $status;
    /**
     * 
     *
     * @var CheckoutFormFulfillment
     */
    protected $fulfillment;
    /**
     * 
     *
     * @var CheckoutFormDeliveryReference
     */
    protected $delivery;
    /**
     * 
     *
     * @var CheckoutFormInvoiceInfo
     */
    protected $invoice;
    /**
     * 
     *
     * @var list<CheckoutFormLineItem>
     */
    protected $lineItems;
    /**
     * 
     *
     * @var list<CheckoutFormPaymentReference>
     */
    protected $surcharges;
    /**
     * Deprecated. This field is deprecated in favor of `lineItems[].discounts` and will be removed in the future.
     *
     * @deprecated
     *
     * @var list<CheckoutFormDiscount>
     */
    protected $discounts;
    /**
     * 
     *
     * @var CheckoutFormNoteReference
     */
    protected $note;
    /**
     * 
     *
     * @var CheckoutFormMarketplace
     */
    protected $marketplace;
    /**
     * 
     *
     * @var CheckoutFormSummary
     */
    protected $summary;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Checkout form revision
     *
     * @var string
     */
    protected $revision;
    /**
     * Checkout form id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Checkout form id
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
     * Message from buyer to seller
     *
     * @return string
     */
    public function getMessageToSeller(): string
    {
        return $this->messageToSeller;
    }
    /**
     * Message from buyer to seller
     *
     * @param string $messageToSeller
     *
     * @return self
     */
    public function setMessageToSeller(string $messageToSeller): self
    {
        $this->initialized['messageToSeller'] = true;
        $this->messageToSeller = $messageToSeller;
        return $this;
    }
    /**
     * Buyer data
     *
     * @return CheckoutFormBuyerReference
     */
    public function getBuyer(): CheckoutFormBuyerReference
    {
        return $this->buyer;
    }
    /**
     * Buyer data
     *
     * @param CheckoutFormBuyerReference $buyer
     *
     * @return self
     */
    public function setBuyer(CheckoutFormBuyerReference $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormPaymentReference
     */
    public function getPayment(): CheckoutFormPaymentReference
    {
        return $this->payment;
    }
    /**
     * 
     *
     * @param CheckoutFormPaymentReference $payment
     *
     * @return self
     */
    public function setPayment(CheckoutFormPaymentReference $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
    /**
     * Describes status of the form delivery and purchase options based on payment and purchase status. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `CANCELLED` - purchase cancelled by buyer.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Describes status of the form delivery and purchase options based on payment and purchase status. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `CANCELLED` - purchase cancelled by buyer.
     *
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormFulfillment
     */
    public function getFulfillment(): CheckoutFormFulfillment
    {
        return $this->fulfillment;
    }
    /**
     * 
     *
     * @param CheckoutFormFulfillment $fulfillment
     *
     * @return self
     */
    public function setFulfillment(CheckoutFormFulfillment $fulfillment): self
    {
        $this->initialized['fulfillment'] = true;
        $this->fulfillment = $fulfillment;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormDeliveryReference
     */
    public function getDelivery(): CheckoutFormDeliveryReference
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param CheckoutFormDeliveryReference $delivery
     *
     * @return self
     */
    public function setDelivery(CheckoutFormDeliveryReference $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormInvoiceInfo
     */
    public function getInvoice(): CheckoutFormInvoiceInfo
    {
        return $this->invoice;
    }
    /**
     * 
     *
     * @param CheckoutFormInvoiceInfo $invoice
     *
     * @return self
     */
    public function setInvoice(CheckoutFormInvoiceInfo $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * 
     *
     * @return list<CheckoutFormLineItem>
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }
    /**
     * 
     *
     * @param list<CheckoutFormLineItem> $lineItems
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
     * @return list<CheckoutFormPaymentReference>
     */
    public function getSurcharges(): array
    {
        return $this->surcharges;
    }
    /**
     * 
     *
     * @param list<CheckoutFormPaymentReference> $surcharges
     *
     * @return self
     */
    public function setSurcharges(array $surcharges): self
    {
        $this->initialized['surcharges'] = true;
        $this->surcharges = $surcharges;
        return $this;
    }
    /**
     * Deprecated. This field is deprecated in favor of `lineItems[].discounts` and will be removed in the future.
     *
     * @deprecated
     *
     * @return list<CheckoutFormDiscount>
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }
    /**
     * Deprecated. This field is deprecated in favor of `lineItems[].discounts` and will be removed in the future.
     *
     * @param list<CheckoutFormDiscount> $discounts
     *
     * @deprecated
     *
     * @return self
     */
    public function setDiscounts(array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormNoteReference
     */
    public function getNote(): CheckoutFormNoteReference
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param CheckoutFormNoteReference $note
     *
     * @return self
     */
    public function setNote(CheckoutFormNoteReference $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormMarketplace
     */
    public function getMarketplace(): CheckoutFormMarketplace
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param CheckoutFormMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(CheckoutFormMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormSummary
     */
    public function getSummary(): CheckoutFormSummary
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param CheckoutFormSummary $summary
     *
     * @return self
     */
    public function setSummary(CheckoutFormSummary $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Checkout form revision
     *
     * @return string
     */
    public function getRevision(): string
    {
        return $this->revision;
    }
    /**
     * Checkout form revision
     *
     * @param string $revision
     *
     * @return self
     */
    public function setRevision(string $revision): self
    {
        $this->initialized['revision'] = true;
        $this->revision = $revision;
        return $this;
    }
}