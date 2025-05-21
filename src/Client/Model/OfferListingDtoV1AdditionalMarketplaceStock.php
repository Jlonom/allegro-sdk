<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1AdditionalMarketplaceStock extends \ArrayObject
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
     * The number of sold items in the last 30 days on the given marketplace.
     *
     * @var int
     */
    protected $sold;
    /**
     * The number of sold items in the last 30 days on the given marketplace.
     *
     * @return int
     */
    public function getSold(): int
    {
        return $this->sold;
    }
    /**
     * The number of sold items in the last 30 days on the given marketplace.
     *
     * @param int $sold
     *
     * @return self
     */
    public function setSold(int $sold): self
    {
        $this->initialized['sold'] = true;
        $this->sold = $sold;
        return $this;
    }
}