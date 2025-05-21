<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplications extends \ArrayObject
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
     * 
     *
     * @var list<BadgeApplication>
     */
    protected $badgeApplications;
    /**
     * 
     *
     * @return list<BadgeApplication>
     */
    public function getBadgeApplications(): array
    {
        return $this->badgeApplications;
    }
    /**
     * 
     *
     * @param list<BadgeApplication> $badgeApplications
     *
     * @return self
     */
    public function setBadgeApplications(array $badgeApplications): self
    {
        $this->initialized['badgeApplications'] = true;
        $this->badgeApplications = $badgeApplications;
        return $this;
    }
}