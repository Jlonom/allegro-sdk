<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPromoOptionsForSeller extends \ArrayObject
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
     * Promo options for seller offers.
     *
     * @var list<OfferPromoOptions>
     */
    protected $promoOptions;
    /**
     * Number of returned elements.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of available elements.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Promo options for seller offers.
     *
     * @return list<OfferPromoOptions>
     */
    public function getPromoOptions(): array
    {
        return $this->promoOptions;
    }
    /**
     * Promo options for seller offers.
     *
     * @param list<OfferPromoOptions> $promoOptions
     *
     * @return self
     */
    public function setPromoOptions(array $promoOptions): self
    {
        $this->initialized['promoOptions'] = true;
        $this->promoOptions = $promoOptions;
        return $this;
    }
    /**
     * Number of returned elements.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of returned elements.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Total number of available elements.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of available elements.
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}