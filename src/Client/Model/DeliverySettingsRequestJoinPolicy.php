<?php

namespace Jlonom\AllegroSDK\Model;

class DeliverySettingsRequestJoinPolicy extends \ArrayObject
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
    * Strategy used to calculate delivery cost for items from offers with different delivery costs.
    The possible values:
     * `MAX` - The buyer will pay for the most expensive delivery
     * `MIN` - The buyer will pay for the cheapest delivery
     * `SUM` - Items will be sent in separate parcels and delivery costs will be sum of delivery costs for each item.
    *
    * @var string
    */
    protected $strategy;
    /**
    * Strategy used to calculate delivery cost for items from offers with different delivery costs.
    The possible values:
     * `MAX` - The buyer will pay for the most expensive delivery
     * `MIN` - The buyer will pay for the cheapest delivery
     * `SUM` - Items will be sent in separate parcels and delivery costs will be sum of delivery costs for each item.
    *
    * @return string
    */
    public function getStrategy(): string
    {
        return $this->strategy;
    }
    /**
    * Strategy used to calculate delivery cost for items from offers with different delivery costs.
    The possible values:
     * `MAX` - The buyer will pay for the most expensive delivery
     * `MIN` - The buyer will pay for the cheapest delivery
     * `SUM` - Items will be sent in separate parcels and delivery costs will be sum of delivery costs for each item.
    *
    * @param string $strategy
    *
    * @return self
    */
    public function setStrategy(string $strategy): self
    {
        $this->initialized['strategy'] = true;
        $this->strategy = $strategy;
        return $this;
    }
}