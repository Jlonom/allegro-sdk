<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormAddWaybillCreated extends \ArrayObject
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
     * Identifier of a shipment.
     *
     * @var string
     */
    protected $id;
    /**
     * Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters.
     *
     * @var string
     */
    protected $waybill;
    /**
     * Supported carriers are available via <a href="#operation/getOrdersCarriersUsingGET" target="_blank">shipping carriers resource</a>.
     *
     * @var string
     */
    protected $carrierId;
    /**
     * Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters.
     *
     * @var string
     */
    protected $carrierName;
    /**
     * List of order line items. They must be from the order specified in the path parameter. List cannot be empty.
     *
     * @var mixed
     */
    protected $lineItems;
    /**
     * Date and time of the parcel tracking number registration in UTC (ISO8601 format).
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Identifier of a shipment.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of a shipment.
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
     * Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters.
     *
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }
    /**
     * Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters.
     *
     * @param string $waybill
     *
     * @return self
     */
    public function setWaybill(string $waybill): self
    {
        $this->initialized['waybill'] = true;
        $this->waybill = $waybill;
        return $this;
    }
    /**
     * Supported carriers are available via <a href="#operation/getOrdersCarriersUsingGET" target="_blank">shipping carriers resource</a>.
     *
     * @return string
     */
    public function getCarrierId(): string
    {
        return $this->carrierId;
    }
    /**
     * Supported carriers are available via <a href="#operation/getOrdersCarriersUsingGET" target="_blank">shipping carriers resource</a>.
     *
     * @param string $carrierId
     *
     * @return self
     */
    public function setCarrierId(string $carrierId): self
    {
        $this->initialized['carrierId'] = true;
        $this->carrierId = $carrierId;
        return $this;
    }
    /**
     * Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters.
     *
     * @return string
     */
    public function getCarrierName(): string
    {
        return $this->carrierName;
    }
    /**
     * Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters.
     *
     * @param string $carrierName
     *
     * @return self
     */
    public function setCarrierName(string $carrierName): self
    {
        $this->initialized['carrierName'] = true;
        $this->carrierName = $carrierName;
        return $this;
    }
    /**
     * List of order line items. They must be from the order specified in the path parameter. List cannot be empty.
     *
     * @return mixed
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }
    /**
     * List of order line items. They must be from the order specified in the path parameter. List cannot be empty.
     *
     * @param mixed $lineItems
     *
     * @return self
     */
    public function setLineItems($lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;
        return $this;
    }
    /**
     * Date and time of the parcel tracking number registration in UTC (ISO8601 format).
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Date and time of the parcel tracking number registration in UTC (ISO8601 format).
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}