<?php

namespace Jlonom\AllegroSDK\Model;

class UpdateSubmittedAdvanceShipNoticeRequest extends \ArrayObject
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
     * @var UpdateSubmittedHandlingUnitInput
     */
    protected $handlingUnit;
    /**
     * Represents information about package shipment.
     *
     * @var UpdateSubmittedShippingInput
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
     * @return UpdateSubmittedHandlingUnitInput
     */
    public function getHandlingUnit(): UpdateSubmittedHandlingUnitInput
    {
        return $this->handlingUnit;
    }
    /**
     * Represents information about handling unit.
     *
     * @param UpdateSubmittedHandlingUnitInput $handlingUnit
     *
     * @return self
     */
    public function setHandlingUnit(UpdateSubmittedHandlingUnitInput $handlingUnit): self
    {
        $this->initialized['handlingUnit'] = true;
        $this->handlingUnit = $handlingUnit;
        return $this;
    }
    /**
     * Represents information about package shipment.
     *
     * @return UpdateSubmittedShippingInput
     */
    public function getShipping(): UpdateSubmittedShippingInput
    {
        return $this->shipping;
    }
    /**
     * Represents information about package shipment.
     *
     * @param UpdateSubmittedShippingInput $shipping
     *
     * @return self
     */
    public function setShipping(UpdateSubmittedShippingInput $shipping): self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;
        return $this;
    }
}