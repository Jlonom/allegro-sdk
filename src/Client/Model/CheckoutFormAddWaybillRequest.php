<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormAddWaybillRequest extends \ArrayObject
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
     * Supported carriers are available via <a href="#operation/getOrdersCarriersUsingGET" target="_blank">shipping carriers resource</a>.
     *
     * @var string
     */
    protected $carrierId;
    /**
     * Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters.
     *
     * @var string
     */
    protected $waybill;
    /**
     * Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters.
     *
     * @var string
     */
    protected $carrierName;
    /**
     * List of order line items. They must be from the order specified in the path parameter. When list is not provided or it is empty it means that every item from an order is included in shipment.
     *
     * @var list<CheckoutFormAddWaybillRequestLineItemsItem>
     */
    protected $lineItems;
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
     * List of order line items. They must be from the order specified in the path parameter. When list is not provided or it is empty it means that every item from an order is included in shipment.
     *
     * @return list<CheckoutFormAddWaybillRequestLineItemsItem>
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }
    /**
     * List of order line items. They must be from the order specified in the path parameter. When list is not provided or it is empty it means that every item from an order is included in shipment.
     *
     * @param list<CheckoutFormAddWaybillRequestLineItemsItem> $lineItems
     *
     * @return self
     */
    public function setLineItems(array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;
        return $this;
    }
}