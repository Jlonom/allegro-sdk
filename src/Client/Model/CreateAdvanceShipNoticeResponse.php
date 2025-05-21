<?php

namespace Jlonom\AllegroSDK\Model;

class CreateAdvanceShipNoticeResponse extends \ArrayObject
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
     * An UUID identifier of ASN.
     *
     * @var string
     */
    protected $id;
    /**
     * A human friendly identifier of ASN.
     *
     * @var string
     */
    protected $displayNumber;
    /**
     * The Advance Ship Notice Status.
     *
     * @var string
     */
    protected $status;
    /**
     * The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * A list of product items.
     *
     * @var list<ProductItem>
     */
    protected $items;
    /**
     * Represents information about handling unit.
     *
     * @var HandlingUnit
     */
    protected $handlingUnit;
    /**
     * Represents created labels.
     *
     * @var Labels
     */
    protected $labels;
    /**
    * Represents information about package shipment.
    Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     * for method ALREADY_IN_WAREHOUSE: estimatedTimeOfArrival and countryCode are required.
    *
    * @var ShippingExtended
    */
    protected $shipping;
    /**
     * An UUID identifier of ASN.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * An UUID identifier of ASN.
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
     * A human friendly identifier of ASN.
     *
     * @return string
     */
    public function getDisplayNumber(): string
    {
        return $this->displayNumber;
    }
    /**
     * A human friendly identifier of ASN.
     *
     * @param string $displayNumber
     *
     * @return self
     */
    public function setDisplayNumber(string $displayNumber): self
    {
        $this->initialized['displayNumber'] = true;
        $this->displayNumber = $displayNumber;
        return $this;
    }
    /**
     * The Advance Ship Notice Status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The Advance Ship Notice Status.
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
     * The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
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
     * The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * A list of product items.
     *
     * @return list<ProductItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * A list of product items.
     *
     * @param list<ProductItem> $items
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
     * Represents information about handling unit.
     *
     * @return HandlingUnit
     */
    public function getHandlingUnit(): HandlingUnit
    {
        return $this->handlingUnit;
    }
    /**
     * Represents information about handling unit.
     *
     * @param HandlingUnit $handlingUnit
     *
     * @return self
     */
    public function setHandlingUnit(HandlingUnit $handlingUnit): self
    {
        $this->initialized['handlingUnit'] = true;
        $this->handlingUnit = $handlingUnit;
        return $this;
    }
    /**
     * Represents created labels.
     *
     * @return Labels
     */
    public function getLabels(): Labels
    {
        return $this->labels;
    }
    /**
     * Represents created labels.
     *
     * @param Labels $labels
     *
     * @return self
     */
    public function setLabels(Labels $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
    * Represents information about package shipment.
    Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     * for method ALREADY_IN_WAREHOUSE: estimatedTimeOfArrival and countryCode are required.
    *
    * @return ShippingExtended
    */
    public function getShipping(): ShippingExtended
    {
        return $this->shipping;
    }
    /**
    * Represents information about package shipment.
    Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     * for method ALREADY_IN_WAREHOUSE: estimatedTimeOfArrival and countryCode are required.
    *
    * @param ShippingExtended $shipping
    *
    * @return self
    */
    public function setShipping(ShippingExtended $shipping): self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;
        return $this;
    }
}