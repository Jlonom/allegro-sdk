<?php

namespace Jlonom\AllegroSDK\Model;

class LineItemReconciliation extends \ArrayObject
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
     * The price data.
     *
     * @var Price
     */
    protected $value;
    /**
     * Reconciliation type used in the Allegro Prices program, in which the offer is included. The following values are possible: * `BILLING` - a reconciliation value is counted as a new entry in the billing * `WALLET` - a reconciliation value is added to the checkout form payment
     *
     * @var string
     */
    protected $type;
    /**
     * Quantity of reconciled items
     *
     * @var int
     */
    protected $quantity;
    /**
     * The price data.
     *
     * @return Price
     */
    public function getValue(): Price
    {
        return $this->value;
    }
    /**
     * The price data.
     *
     * @param Price $value
     *
     * @return self
     */
    public function setValue(Price $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Reconciliation type used in the Allegro Prices program, in which the offer is included. The following values are possible: * `BILLING` - a reconciliation value is counted as a new entry in the billing * `WALLET` - a reconciliation value is added to the checkout form payment
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Reconciliation type used in the Allegro Prices program, in which the offer is included. The following values are possible: * `BILLING` - a reconciliation value is counted as a new entry in the billing * `WALLET` - a reconciliation value is added to the checkout form payment
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
     * Quantity of reconciled items
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Quantity of reconciled items
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