<?php

namespace Jlonom\AllegroSDK\Model;

class OffersSearchResultDto extends \ArrayObject
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
     * The list of seller's offers matching the request's criteria.
     *
     * @var list<OfferListingDto>
     */
    protected $offers;
    /**
     * Number of offers in the search result.
     *
     * @var int
     */
    protected $count;
    /**
     * The total number of offers matching the request's criteria.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * The list of seller's offers matching the request's criteria.
     *
     * @return list<OfferListingDto>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * The list of seller's offers matching the request's criteria.
     *
     * @param list<OfferListingDto> $offers
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
     * Number of offers in the search result.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of offers in the search result.
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
     * The total number of offers matching the request's criteria.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * The total number of offers matching the request's criteria.
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