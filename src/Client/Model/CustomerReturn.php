<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturn extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $referenceNumber;
    /**
     * 
     *
     * @var string
     */
    protected $orderId;
    /**
     * 
     *
     * @var CustomerReturnBuyer
     */
    protected $buyer;
    /**
     * List of returned items.
     *
     * @var list<CustomerReturnItem>
     */
    protected $items;
    /**
     * This field is present in the case of cash on delivery, bank transfer, Allegro Pay, and Allegro Pay Business payment options.
     *
     * @var CustomerReturnRefund
     */
    protected $refund;
    /**
     * List of returned parcels.
     *
     * @var list<CustomerReturnReturnParcel>
     */
    protected $parcels;
    /**
     * 
     *
     * @var CustomerReturnRejection
     */
    protected $rejection;
    /**
     * The marketplace ID where operation was made.
     *
     * @var string
     */
    protected $marketplaceId;
    /**
     * Current return timeline statuses. The allowed values are:
     * CREATED - The return has been declared,
     * DISPATCHED - The returned items have been dispatched,
     * IN_TRANSIT - The returned items are in transit,
     * DELIVERED - The returned items have been delivered,
     * FINISHED - The payment has been refunded, return process is finished,
     * FINISHED_APT - The payment has been refunded by Allegro Protect, return process is finished,
     * REJECTED - The return has been rejected,
     * COMMISSION_REFUND_CLAIMED - The sales commission refund (transaction rebate) application has been claimed,
     * COMMISSION_REFUNDED - The sales commission was refunded,
     * WAREHOUSE_DELIVERED - The returned items have been delivered to Allegro Warehouse,
     * WAREHOUSE_VERIFICATION - The returned items are under verification.
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param string $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }
    /**
     * 
     *
     * @param string $orderId
     *
     * @return self
     */
    public function setOrderId(string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerReturnBuyer
     */
    public function getBuyer(): CustomerReturnBuyer
    {
        return $this->buyer;
    }
    /**
     * 
     *
     * @param CustomerReturnBuyer $buyer
     *
     * @return self
     */
    public function setBuyer(CustomerReturnBuyer $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;
        return $this;
    }
    /**
     * List of returned items.
     *
     * @return list<CustomerReturnItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * List of returned items.
     *
     * @param list<CustomerReturnItem> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * This field is present in the case of cash on delivery, bank transfer, Allegro Pay, and Allegro Pay Business payment options.
     *
     * @return CustomerReturnRefund
     */
    public function getRefund(): CustomerReturnRefund
    {
        return $this->refund;
    }
    /**
     * This field is present in the case of cash on delivery, bank transfer, Allegro Pay, and Allegro Pay Business payment options.
     *
     * @param CustomerReturnRefund $refund
     *
     * @return self
     */
    public function setRefund(CustomerReturnRefund $refund): self
    {
        $this->initialized['refund'] = true;
        $this->refund = $refund;
        return $this;
    }
    /**
     * List of returned parcels.
     *
     * @return list<CustomerReturnReturnParcel>
     */
    public function getParcels(): array
    {
        return $this->parcels;
    }
    /**
     * List of returned parcels.
     *
     * @param list<CustomerReturnReturnParcel> $parcels
     *
     * @return self
     */
    public function setParcels(array $parcels): self
    {
        $this->initialized['parcels'] = true;
        $this->parcels = $parcels;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerReturnRejection
     */
    public function getRejection(): CustomerReturnRejection
    {
        return $this->rejection;
    }
    /**
     * 
     *
     * @param CustomerReturnRejection $rejection
     *
     * @return self
     */
    public function setRejection(CustomerReturnRejection $rejection): self
    {
        $this->initialized['rejection'] = true;
        $this->rejection = $rejection;
        return $this;
    }
    /**
     * The marketplace ID where operation was made.
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->marketplaceId;
    }
    /**
     * The marketplace ID where operation was made.
     *
     * @param string $marketplaceId
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
        return $this;
    }
    /**
     * Current return timeline statuses. The allowed values are:
     * CREATED - The return has been declared,
     * DISPATCHED - The returned items have been dispatched,
     * IN_TRANSIT - The returned items are in transit,
     * DELIVERED - The returned items have been delivered,
     * FINISHED - The payment has been refunded, return process is finished,
     * FINISHED_APT - The payment has been refunded by Allegro Protect, return process is finished,
     * REJECTED - The return has been rejected,
     * COMMISSION_REFUND_CLAIMED - The sales commission refund (transaction rebate) application has been claimed,
     * COMMISSION_REFUNDED - The sales commission was refunded,
     * WAREHOUSE_DELIVERED - The returned items have been delivered to Allegro Warehouse,
     * WAREHOUSE_VERIFICATION - The returned items are under verification.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Current return timeline statuses. The allowed values are:
     * CREATED - The return has been declared,
     * DISPATCHED - The returned items have been dispatched,
     * IN_TRANSIT - The returned items are in transit,
     * DELIVERED - The returned items have been delivered,
     * FINISHED - The payment has been refunded, return process is finished,
     * FINISHED_APT - The payment has been refunded by Allegro Protect, return process is finished,
     * REJECTED - The return has been rejected,
     * COMMISSION_REFUND_CLAIMED - The sales commission refund (transaction rebate) application has been claimed,
     * COMMISSION_REFUNDED - The sales commission was refunded,
     * WAREHOUSE_DELIVERED - The returned items have been delivered to Allegro Warehouse,
     * WAREHOUSE_VERIFICATION - The returned items are under verification.
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
}