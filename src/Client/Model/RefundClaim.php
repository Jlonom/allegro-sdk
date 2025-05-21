<?php

namespace Jlonom\AllegroSDK\Model;

class RefundClaim extends \ArrayObject
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
     * ID of the returned refund application.
     *
     * @var string
     */
    protected $id;
    /**
    * Status of the returned refund application. - `IN_PROGRESS` - the application is being processed or awaits user or admin action. - `WAITING_FOR_PAYMENT_REFUND` - the application is being processed and awaits payment refund to buyer. - `GRANTED` - the application was accepted and a commission refund was granted as requested,
     or the application was rejected and the seller successfully appealed.
    - `REJECTED` - the application was rejected and no commission was refunded. - `REJECTED_AFTER_APPEAL` - the application was initially rejected and the seller unsuccessfully appealed. - `CANCELLED` - the application was cancelled by the seller. - `APPEALED` - the application was rejected and the seller appealed, but the appeal has not yet finished processing.
    *
    * @var string
    */
    protected $status;
    /**
     * Quantity of product for which the seller filed the refund application.
     *
     * @var int
     */
    protected $quantity;
    /**
     * Money value of the returned refund application.
     *
     * @var RefundClaimCommission
     */
    protected $commission;
    /**
     * Buyer associated with the refund application.
     *
     * @var RefundClaimBuyer
     */
    protected $buyer;
    /**
     * Date when the refund application was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Purchase associated with the refund application.
     *
     * @var RefundClaimLineItem
     */
    protected $lineItem;
    /**
     * Type of commission refund application. - `MANUAL` - the application was created manually by the seller. - `AUTOMATIC` - the application was created automatically.
     *
     * @var string
     */
    protected $type;
    /**
     * ID of the returned refund application.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the returned refund application.
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
    * Status of the returned refund application. - `IN_PROGRESS` - the application is being processed or awaits user or admin action. - `WAITING_FOR_PAYMENT_REFUND` - the application is being processed and awaits payment refund to buyer. - `GRANTED` - the application was accepted and a commission refund was granted as requested,
     or the application was rejected and the seller successfully appealed.
    - `REJECTED` - the application was rejected and no commission was refunded. - `REJECTED_AFTER_APPEAL` - the application was initially rejected and the seller unsuccessfully appealed. - `CANCELLED` - the application was cancelled by the seller. - `APPEALED` - the application was rejected and the seller appealed, but the appeal has not yet finished processing.
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * Status of the returned refund application. - `IN_PROGRESS` - the application is being processed or awaits user or admin action. - `WAITING_FOR_PAYMENT_REFUND` - the application is being processed and awaits payment refund to buyer. - `GRANTED` - the application was accepted and a commission refund was granted as requested,
     or the application was rejected and the seller successfully appealed.
    - `REJECTED` - the application was rejected and no commission was refunded. - `REJECTED_AFTER_APPEAL` - the application was initially rejected and the seller unsuccessfully appealed. - `CANCELLED` - the application was cancelled by the seller. - `APPEALED` - the application was rejected and the seller appealed, but the appeal has not yet finished processing.
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
     * Quantity of product for which the seller filed the refund application.
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Quantity of product for which the seller filed the refund application.
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Money value of the returned refund application.
     *
     * @return RefundClaimCommission
     */
    public function getCommission(): RefundClaimCommission
    {
        return $this->commission;
    }
    /**
     * Money value of the returned refund application.
     *
     * @param RefundClaimCommission $commission
     *
     * @return self
     */
    public function setCommission(RefundClaimCommission $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;
        return $this;
    }
    /**
     * Buyer associated with the refund application.
     *
     * @return RefundClaimBuyer
     */
    public function getBuyer(): RefundClaimBuyer
    {
        return $this->buyer;
    }
    /**
     * Buyer associated with the refund application.
     *
     * @param RefundClaimBuyer $buyer
     *
     * @return self
     */
    public function setBuyer(RefundClaimBuyer $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;
        return $this;
    }
    /**
     * Date when the refund application was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date when the refund application was created.
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
     * Purchase associated with the refund application.
     *
     * @return RefundClaimLineItem
     */
    public function getLineItem(): RefundClaimLineItem
    {
        return $this->lineItem;
    }
    /**
     * Purchase associated with the refund application.
     *
     * @param RefundClaimLineItem $lineItem
     *
     * @return self
     */
    public function setLineItem(RefundClaimLineItem $lineItem): self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;
        return $this;
    }
    /**
     * Type of commission refund application. - `MANUAL` - the application was created manually by the seller. - `AUTOMATIC` - the application was created automatically.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of commission refund application. - `MANUAL` - the application was created manually by the seller. - `AUTOMATIC` - the application was created automatically.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}