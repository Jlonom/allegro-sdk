<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplicationPurchaseConstraints extends \ArrayObject
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
     * Limits of purchase of this offer while it participates in the campaign. Only DISCOUNT and SOURCING campaigns.
     *
     * @var BadgeApplicationPurchaseConstraintsLimit
     */
    protected $limit;
    /**
     * Limits of purchase of this offer while it participates in the campaign. Only DISCOUNT and SOURCING campaigns.
     *
     * @return BadgeApplicationPurchaseConstraintsLimit
     */
    public function getLimit(): BadgeApplicationPurchaseConstraintsLimit
    {
        return $this->limit;
    }
    /**
     * Limits of purchase of this offer while it participates in the campaign. Only DISCOUNT and SOURCING campaigns.
     *
     * @param BadgeApplicationPurchaseConstraintsLimit $limit
     *
     * @return self
     */
    public function setLimit(BadgeApplicationPurchaseConstraintsLimit $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
}