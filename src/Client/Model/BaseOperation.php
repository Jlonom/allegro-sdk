<?php

namespace Jlonom\AllegroSDK\Model;

class BaseOperation extends \ArrayObject
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
     * Type of the operation.
     *
     * @var string
     */
    protected $type;
    /**
     * The group to which the given operation type belongs.
     *
     * @var string
     */
    protected $group;
    /**
     * The state of the wallet after the operation.
     *
     * @var Wallet
     */
    protected $wallet;
    /**
     * The operation value.
     *
     * @var OperationValue
     */
    protected $value;
    /**
     * Date and time of the operation in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $occurredAt;
    /**
     * The marketplace ID where operation was made. Value may be `null` for operations not assigned to any marketplace.
     *
     * @var string
     */
    protected $marketplaceId;
    /**
     * Type of the operation.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the operation.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
    /**
     * The group to which the given operation type belongs.
     *
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }
    /**
     * The group to which the given operation type belongs.
     *
     * @param string $group
     */
    public function setGroup(string $group)
    {
        $this->initialized['group'] = true;
        $this->group = $group;
    }
    /**
     * The state of the wallet after the operation.
     *
     * @return Wallet
     */
    public function getWallet(): Wallet
    {
        return $this->wallet;
    }
    /**
     * The state of the wallet after the operation.
     *
     * @param Wallet $wallet
     */
    public function setWallet(Wallet $wallet)
    {
        $this->initialized['wallet'] = true;
        $this->wallet = $wallet;
    }
    /**
     * The operation value.
     *
     * @return OperationValue
     */
    public function getValue(): OperationValue
    {
        return $this->value;
    }
    /**
     * The operation value.
     *
     * @param OperationValue $value
     */
    public function setValue(OperationValue $value)
    {
        $this->initialized['value'] = true;
        $this->value = $value;
    }
    /**
     * Date and time of the operation in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getOccurredAt(): \DateTime
    {
        return $this->occurredAt;
    }
    /**
     * Date and time of the operation in ISO 8601 format.
     *
     * @param \DateTime $occurredAt
     */
    public function setOccurredAt(\DateTime $occurredAt)
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;
    }
    /**
     * The marketplace ID where operation was made. Value may be `null` for operations not assigned to any marketplace.
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->marketplaceId;
    }
    /**
     * The marketplace ID where operation was made. Value may be `null` for operations not assigned to any marketplace.
     *
     * @param string $marketplaceId
     */
    public function setMarketplaceId(string $marketplaceId)
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
    }
}