<?php

namespace Jlonom\AllegroSDK\Model;

class CreateAdvanceShipNoticeRequest extends \ArrayObject
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
    * Represents information about package shipment.
    Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
    *
    * @var Shipping
    */
    protected $shipping;
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
    * Represents information about package shipment.
    Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
    *
    * @return Shipping
    */
    public function getShipping(): Shipping
    {
        return $this->shipping;
    }
    /**
    * Represents information about package shipment.
    Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
    *
    * @param Shipping $shipping
    *
    * @return self
    */
    public function setShipping(Shipping $shipping): self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;
        return $this;
    }
}