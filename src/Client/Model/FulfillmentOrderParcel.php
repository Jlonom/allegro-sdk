<?php

namespace Jlonom\AllegroSDK\Model;

class FulfillmentOrderParcel extends \ArrayObject
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
     * Waybill number (parcel tracking number).
     *
     * @var string
     */
    protected $waybill;
    /**
     * List of parcels' items
     *
     * @var list<FulfillmentOrderParcelItem>
     */
    protected $items;
    /**
     * Waybill number (parcel tracking number).
     *
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }
    /**
     * Waybill number (parcel tracking number).
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
     * List of parcels' items
     *
     * @return list<FulfillmentOrderParcelItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * List of parcels' items
     *
     * @param list<FulfillmentOrderParcelItem> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}