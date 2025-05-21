<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplicationPurchaseConstraintsLimit extends \ArrayObject
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
     * Limits of purchase of this offer per user while it participates in the campaign.
     *
     * @var BadgeApplicationPurchaseConstraintsLimitPerUser
     */
    protected $perUser;
    /**
     * Limits of purchase of this offer per user while it participates in the campaign.
     *
     * @return BadgeApplicationPurchaseConstraintsLimitPerUser
     */
    public function getPerUser(): BadgeApplicationPurchaseConstraintsLimitPerUser
    {
        return $this->perUser;
    }
    /**
     * Limits of purchase of this offer per user while it participates in the campaign.
     *
     * @param BadgeApplicationPurchaseConstraintsLimitPerUser $perUser
     *
     * @return self
     */
    public function setPerUser(BadgeApplicationPurchaseConstraintsLimitPerUser $perUser): self
    {
        $this->initialized['perUser'] = true;
        $this->perUser = $perUser;
        return $this;
    }
}