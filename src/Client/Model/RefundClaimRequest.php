<?php

namespace Jlonom\AllegroSDK\Model;

class RefundClaimRequest extends \ArrayObject
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
     * Purchase for which a refund application will be created.
     *
     * @var RefundClaimRequestLineItem
     */
    protected $lineItem;
    /**
     * Quantity of product for which the refund application will be created. Must be greater than zero.
     *
     * @var int
     */
    protected $quantity;
    /**
     * Purchase for which a refund application will be created.
     *
     * @return RefundClaimRequestLineItem
     */
    public function getLineItem(): RefundClaimRequestLineItem
    {
        return $this->lineItem;
    }
    /**
     * Purchase for which a refund application will be created.
     *
     * @param RefundClaimRequestLineItem $lineItem
     *
     * @return self
     */
    public function setLineItem(RefundClaimRequestLineItem $lineItem): self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;
        return $this;
    }
    /**
     * Quantity of product for which the refund application will be created. Must be greater than zero.
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Quantity of product for which the refund application will be created. Must be greater than zero.
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
}