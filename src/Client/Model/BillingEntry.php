<?php

namespace Jlonom\AllegroSDK\Model;

class BillingEntry extends \ArrayObject
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
     * ID of the returned billing entry.
     *
     * @var string
     */
    protected $id;
    /**
     * Date of billing entry.
     *
     * @var \DateTime
     */
    protected $occurredAt;
    /**
     * 
     *
     * @var BillingEntryType
     */
    protected $type;
    /**
     * Offer associated with the returned billing entry.
     *
     * @var BillingEntryOffer
     */
    protected $offer;
    /**
     * Money value of the returned billing entry.
     *
     * @var BillingEntryValue
     */
    protected $value;
    /**
     * Tax rate applied to the returned billing entry. Optional field percentage is present if the returned billing entry is subject to tax. In this case, annotation is not returned. Optional field annotation is present if the returned billing entry is exempt from tax or tax is not applicable; the possible value is "OUT_OF_SCOPE". In this case, percentage is not returned.
     *
     * @var BillingEntryTax
     */
    protected $tax;
    /**
     * User account balance calculated on billing date.
     *
     * @var BillingEntryBalance
     */
    protected $balance;
    /**
     * Order associated with the returned billing entry.
     *
     * @var BillingEntryOrder
     */
    protected $order;
    /**
     * Additional information associated with the returned billing entry.
     *
     * @var list<BillingEntryAdditionalInfoItem>
     */
    protected $additionalInfo;
    /**
     * ID of the returned billing entry.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the returned billing entry.
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
     * Date of billing entry.
     *
     * @return \DateTime
     */
    public function getOccurredAt(): \DateTime
    {
        return $this->occurredAt;
    }
    /**
     * Date of billing entry.
     *
     * @param \DateTime $occurredAt
     *
     * @return self
     */
    public function setOccurredAt(\DateTime $occurredAt): self
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;
        return $this;
    }
    /**
     * 
     *
     * @return BillingEntryType
     */
    public function getType(): BillingEntryType
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param BillingEntryType $type
     *
     * @return self
     */
    public function setType(BillingEntryType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Offer associated with the returned billing entry.
     *
     * @return BillingEntryOffer
     */
    public function getOffer(): BillingEntryOffer
    {
        return $this->offer;
    }
    /**
     * Offer associated with the returned billing entry.
     *
     * @param BillingEntryOffer $offer
     *
     * @return self
     */
    public function setOffer(BillingEntryOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * Money value of the returned billing entry.
     *
     * @return BillingEntryValue
     */
    public function getValue(): BillingEntryValue
    {
        return $this->value;
    }
    /**
     * Money value of the returned billing entry.
     *
     * @param BillingEntryValue $value
     *
     * @return self
     */
    public function setValue(BillingEntryValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Tax rate applied to the returned billing entry. Optional field percentage is present if the returned billing entry is subject to tax. In this case, annotation is not returned. Optional field annotation is present if the returned billing entry is exempt from tax or tax is not applicable; the possible value is "OUT_OF_SCOPE". In this case, percentage is not returned.
     *
     * @return BillingEntryTax
     */
    public function getTax(): BillingEntryTax
    {
        return $this->tax;
    }
    /**
     * Tax rate applied to the returned billing entry. Optional field percentage is present if the returned billing entry is subject to tax. In this case, annotation is not returned. Optional field annotation is present if the returned billing entry is exempt from tax or tax is not applicable; the possible value is "OUT_OF_SCOPE". In this case, percentage is not returned.
     *
     * @param BillingEntryTax $tax
     *
     * @return self
     */
    public function setTax(BillingEntryTax $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;
        return $this;
    }
    /**
     * User account balance calculated on billing date.
     *
     * @return BillingEntryBalance
     */
    public function getBalance(): BillingEntryBalance
    {
        return $this->balance;
    }
    /**
     * User account balance calculated on billing date.
     *
     * @param BillingEntryBalance $balance
     *
     * @return self
     */
    public function setBalance(BillingEntryBalance $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;
        return $this;
    }
    /**
     * Order associated with the returned billing entry.
     *
     * @return BillingEntryOrder
     */
    public function getOrder(): BillingEntryOrder
    {
        return $this->order;
    }
    /**
     * Order associated with the returned billing entry.
     *
     * @param BillingEntryOrder $order
     *
     * @return self
     */
    public function setOrder(BillingEntryOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * Additional information associated with the returned billing entry.
     *
     * @return list<BillingEntryAdditionalInfoItem>
     */
    public function getAdditionalInfo(): array
    {
        return $this->additionalInfo;
    }
    /**
     * Additional information associated with the returned billing entry.
     *
     * @param list<BillingEntryAdditionalInfoItem> $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}