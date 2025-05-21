<?php

namespace Jlonom\AllegroSDK\Model;

class InitializeRefund extends \ArrayObject
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
     * List of order's line items which can be refunded.
     *
     * @var list<RefundLineItem>
     */
    protected $lineItems;
    /**
     * Payment refund for delivery.
     *
     * @var InitializeRefundDelivery
     */
    protected $delivery;
    /**
     * Payment refund for overpaid.
     *
     * @var InitializeRefundOverpaid
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
     * @var InitializeRefundAdditionalServices
     */
    protected $additionalServices;
    /**
     * Sellers optional justification for refund.
     *
     * @var string
     */
    protected $sellerComment;
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
     * @return InitializeRefundDelivery
     */
    public function getDelivery(): InitializeRefundDelivery
    {
        return $this->delivery;
    }
    /**
     * Payment refund for delivery.
     *
     * @param InitializeRefundDelivery $delivery
     *
     * @return self
     */
    public function setDelivery(InitializeRefundDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Payment refund for overpaid.
     *
     * @return InitializeRefundOverpaid
     */
    public function getOverpaid(): InitializeRefundOverpaid
    {
        return $this->overpaid;
    }
    /**
     * Payment refund for overpaid.
     *
     * @param InitializeRefundOverpaid $overpaid
     *
     * @return self
     */
    public function setOverpaid(InitializeRefundOverpaid $overpaid): self
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
     * @return InitializeRefundAdditionalServices
     */
    public function getAdditionalServices(): InitializeRefundAdditionalServices
    {
        return $this->additionalServices;
    }
    /**
     * Payment refund for additional services.
     *
     * @param InitializeRefundAdditionalServices $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(InitializeRefundAdditionalServices $additionalServices): self
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