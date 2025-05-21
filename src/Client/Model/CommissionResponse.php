<?php

namespace Jlonom\AllegroSDK\Model;

class CommissionResponse extends \ArrayObject
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
     * Commission fee name.
     *
     * @var string
     */
    protected $name;
    /**
     * Commission fee type.
     *
     * @var string
     */
    protected $type;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $fee;
    /**
     * Commission fee name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Commission fee name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Commission fee type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Commission fee type.
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
     * The price data.
     *
     * @return Price
     */
    public function getFee(): Price
    {
        return $this->fee;
    }
    /**
     * The price data.
     *
     * @param Price $fee
     *
     * @return self
     */
    public function setFee(Price $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
        return $this;
    }
}