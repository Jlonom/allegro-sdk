<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplicationPrices extends \ArrayObject
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
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @var BadgeApplicationBargainPrice|null
     */
    protected $bargain;
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @return BadgeApplicationBargainPrice|null
     */
    public function getBargain(): ?BadgeApplicationBargainPrice
    {
        return $this->bargain;
    }
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @param BadgeApplicationBargainPrice|null $bargain
     *
     * @return self
     */
    public function setBargain(?BadgeApplicationBargainPrice $bargain): self
    {
        $this->initialized['bargain'] = true;
        $this->bargain = $bargain;
        return $this;
    }
}