<?php

namespace Jlonom\AllegroSDK\Model;

class BadgesList extends \ArrayObject
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
     * @var list<Badge>
     */
    protected $badges;
    /**
     * 
     *
     * @return list<Badge>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }
    /**
     * 
     *
     * @param list<Badge> $badges
     *
     * @return self
     */
    public function setBadges(array $badges): self
    {
        $this->initialized['badges'] = true;
        $this->badges = $badges;
        return $this;
    }
}