<?php

namespace Jlonom\AllegroSDK\Model;

class CreateOfferBundleDTO extends \ArrayObject
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
     * Offers that will make up the bundle.
     *
     * @var list<BundledOfferDTO>
     */
    protected $offers;
    /**
     * Discounts on marketplaces. Can be null or empty if bundle shouldn't have discount on any marketplace.
     *
     * @var list<BundleDiscountDTO>|null
     */
    protected $discounts;
    /**
     * Offers that will make up the bundle.
     *
     * @return list<BundledOfferDTO>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * Offers that will make up the bundle.
     *
     * @param list<BundledOfferDTO> $offers
     *
     * @return self
     */
    public function setOffers(array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;
        return $this;
    }
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