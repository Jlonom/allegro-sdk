<?php

namespace Jlonom\AllegroSDK\Model;

class BadgePatchPricesPricesBargain extends \ArrayObject
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
    protected $value;
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @return BadgeApplicationBargainPrice|null
     */
    public function getValue(): ?BadgeApplicationBargainPrice
    {
        return $this->value;
    }
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @param BadgeApplicationBargainPrice|null $value
     *
     * @return self
     */
    public function setValue(?BadgeApplicationBargainPrice $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}