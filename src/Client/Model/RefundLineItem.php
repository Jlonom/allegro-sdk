<?php

namespace Jlonom\AllegroSDK\Model;

class RefundLineItem extends \ArrayObject
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
     * The line-item identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Type for line items refund. QUANTITY is provided when you can refund one or more items. AMOUNT is provided when you can refund a partial price.
     *
     * @var string
     */
    protected $type;
    /**
     * This field is provided for QUANTITY type only. It specifies how many items will be refunded.
     *
     * @var float
     */
    protected $quantity;
    /**
     * This field is available for AMOUNT type only and specifies the amount refunded to the customer.
     *
     * @var RefundLineItemValue|null
     */
    protected $value;
    /**
     * The line-item identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The line-item identifier.
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
     * Type for line items refund. QUANTITY is provided when you can refund one or more items. AMOUNT is provided when you can refund a partial price.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type for line items refund. QUANTITY is provided when you can refund one or more items. AMOUNT is provided when you can refund a partial price.
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
    /**
     * This field is provided for QUANTITY type only. It specifies how many items will be refunded.
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    /**
     * This field is provided for QUANTITY type only. It specifies how many items will be refunded.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * This field is available for AMOUNT type only and specifies the amount refunded to the customer.
     *
     * @return RefundLineItemValue|null
     */
    public function getValue(): ?RefundLineItemValue
    {
        return $this->value;
    }
    /**
     * This field is available for AMOUNT type only and specifies the amount refunded to the customer.
     *
     * @param RefundLineItemValue|null $value
     *
     * @return self
     */
    public function setValue(?RefundLineItemValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}