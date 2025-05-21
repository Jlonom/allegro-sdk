<?php

namespace Jlonom\AllegroSDK\Model;

class UpdateOfferBundleDiscountDTO extends \ArrayObject
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
     * Discounts on marketplaces. Can be null or empty if bundle shouldn't have discount on any marketplace.
     *
     * @var list<BundleDiscountDTO>|null
     */
    protected $discounts;
    /**
     * Discounts on marketplaces. Can be null or empty if bundle shouldn't have discount on any marketplace.
     *
     * @return list<BundleDiscountDTO>|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }
    /**
     * Discounts on marketplaces. Can be null or empty if bundle shouldn't have discount on any marketplace.
     *
     * @param list<BundleDiscountDTO>|null $discounts
     *
     * @return self
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
}