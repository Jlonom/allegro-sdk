<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplicationPurchaseConstraintsLimitPerUser extends \ArrayObject
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
     * Maximum number of items that one user can buy of this offer, while it participates in the campaign.
     *
     * @var int
     */
    protected $maxItems;
    /**
     * Maximum number of items that one user can buy of this offer, while it participates in the campaign.
     *
     * @return int
     */
    public function getMaxItems(): int
    {
        return $this->maxItems;
    }
    /**
     * Maximum number of items that one user can buy of this offer, while it participates in the campaign.
     *
     * @param int $maxItems
     *
     * @return self
     */
    public function setMaxItems(int $maxItems): self
    {
        $this->initialized['maxItems'] = true;
        $this->maxItems = $maxItems;
        return $this;
    }
}