<?php

namespace Jlonom\AllegroSDK\Model;

class ReceivingStatus extends \ArrayObject
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
     * Product quantity.
     *
     * @var int
     */
    protected $quantity;
    /**
     * Received item condition.
     *
     * @var string
     */
    protected $receivedType;
    /**
     * The reasonCode indicates the condition of the product after unpacking. For sellable product is given the reasonCode SELLABLE. For a product that is not suitable for sale receives a code specifying a detailed reason for rejection, e.g. "DAMAGED_IN_TRANSPORT" or "NO_BARCODE"
     *
     * @var string
     */
    protected $reasonCode;
    /**
     * Product quantity.
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Product quantity.
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
     * Received item condition.
     *
     * @return string
     */
    public function getReceivedType(): string
    {
        return $this->receivedType;
    }
    /**
     * Received item condition.
     *
     * @param string $receivedType
     *
     * @return self
     */
    public function setReceivedType(string $receivedType): self
    {
        $this->initialized['receivedType'] = true;
        $this->receivedType = $receivedType;
        return $this;
    }
    /**
     * The reasonCode indicates the condition of the product after unpacking. For sellable product is given the reasonCode SELLABLE. For a product that is not suitable for sale receives a code specifying a detailed reason for rejection, e.g. "DAMAGED_IN_TRANSPORT" or "NO_BARCODE"
     *
     * @return string
     */
    public function getReasonCode(): string
    {
        return $this->reasonCode;
    }
    /**
     * The reasonCode indicates the condition of the product after unpacking. For sellable product is given the reasonCode SELLABLE. For a product that is not suitable for sale receives a code specifying a detailed reason for rejection, e.g. "DAMAGED_IN_TRANSPORT" or "NO_BARCODE"
     *
     * @param string $reasonCode
     *
     * @return self
     */
    public function setReasonCode(string $reasonCode): self
    {
        $this->initialized['reasonCode'] = true;
        $this->reasonCode = $reasonCode;
        return $this;
    }
}