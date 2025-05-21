<?php

namespace Jlonom\AllegroSDK\Model;

class RefundDetails extends \ArrayObject
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
     * The payment refund identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Payment affected by refund operation.
     *
     * @var RefundPayment
     */
    protected $payment;
    /**
     * Reason for a payment refund.
     *
     * @var string
     */
    protected $reason;
    /**
     * Current status of payment refund.
     *
     * @var string
     */
    protected $status;
    /**
     * Date and time when the refund was created provided in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Total amount for payment refund.
     *
     * @var RefundTotalValue
     */
    protected $totalValue;
    /**
     * List of order's line items which can be refunded.
     *
     * @var list<RefundLineItem>
     */
    protected $lineItems;
    /**
     * Payment refund for delivery.
     *
     * @var RefundDetailsDelivery
     */
    protected $delivery;
    /**
     * Payment refund for overpaid.
     *
     * @var RefundDetailsOverpaid
     */
    protected $overpaid;
    /**
     * List of surcharges for payment which can be refunded.
     *
     * @var list<PaymentsSurcharge>
     */
    protected $surcharges;
    /**
     * Payment refund for additional services.
     *
     * @var RefundDetailsAdditionalServices
     */
    protected $additionalServices;
    /**
     * Sellers optional justification for refund.
     *
     * @var string
     */
    protected $sellerComment;
    /**
     * The payment refund identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The payment refund identifier.
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
     * Payment affected by refund operation.
     *
     * @return RefundPayment
     */
    public function getPayment(): RefundPayment
    {
        return $this->payment;
    }
    /**
     * Payment affected by refund operation.
     *
     * @param RefundPayment $payment
     *
     * @return self
     */
    public function setPayment(RefundPayment $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
    /**
     * Reason for a payment refund.
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * Reason for a payment refund.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * Current status of payment refund.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Current status of payment refund.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Date and time when the refund was created provided in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time when the refund was created provided in ISO 8601 format.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Total amount for payment refund.
     *
     * @return RefundTotalValue
     */
    public function getTotalValue(): RefundTotalValue
    {
        return $this->totalValue;
    }
    /**
     * Total amount for payment refund.
     *
     * @param RefundTotalValue $totalValue
     *
     * @return self
     */
    public function setTotalValue(RefundTotalValue $totalValue): self
    {
        $this->initialized['totalValue'] = true;
        $this->totalValue = $totalValue;
        return $this;
    }
    /**
     * List of order's line items which can be refunded.
     *
     * @return list<RefundLineItem>
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }
    /**
     * List of order's line items which can be refunded.
     *
     * @param list<RefundLineItem> $lineItems
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
     * Payment refund for delivery.
     *
     * @return RefundDetailsDelivery
     */
    public function getDelivery(): RefundDetailsDelivery
    {
        return $this->delivery;
    }
    /**
     * Payment refund for delivery.
     *
     * @param RefundDetailsDelivery $delivery
     *
     * @return self
     */
    public function setDelivery(RefundDetailsDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Payment refund for overpaid.
     *
     * @return RefundDetailsOverpaid
     */
    public function getOverpaid(): RefundDetailsOverpaid
    {
        return $this->overpaid;
    }
    /**
     * Payment refund for overpaid.
     *
     * @param RefundDetailsOverpaid $overpaid
     *
     * @return self
     */
    public function setOverpaid(RefundDetailsOverpaid $overpaid): self
    {
        $this->initialized['overpaid'] = true;
        $this->overpaid = $overpaid;
        return $this;
    }
    /**
     * List of surcharges for payment which can be refunded.
     *
     * @return list<PaymentsSurcharge>
     */
    public function getSurcharges(): array
    {
        return $this->surcharges;
    }
    /**
     * List of surcharges for payment which can be refunded.
     *
     * @param list<PaymentsSurcharge> $surcharges
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
     * Payment refund for additional services.
     *
     * @return RefundDetailsAdditionalServices
     */
    public function getAdditionalServices(): RefundDetailsAdditionalServices
    {
        return $this->additionalServices;
    }
    /**
     * Payment refund for additional services.
     *
     * @param RefundDetailsAdditionalServices $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(RefundDetailsAdditionalServices $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * Sellers optional justification for refund.
     *
     * @return string
     */
    public function getSellerComment(): string
    {
        return $this->sellerComment;
    }
    /**
     * Sellers optional justification for refund.
     *
     * @param string $sellerComment
     *
     * @return self
     */
    public function setSellerComment(string $sellerComment): self
    {
        $this->initialized['sellerComment'] = true;
        $this->sellerComment = $sellerComment;
        return $this;
    }
}