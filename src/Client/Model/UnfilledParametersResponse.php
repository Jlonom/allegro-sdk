<?php

namespace Jlonom\AllegroSDK\Model;

class UnfilledParametersResponse extends \ArrayObject
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
     * List of offers unfilled parameters.
     *
     * @var list<UnfilledParametersResponseOffersItem>
     */
    protected $offers;
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
     * List of offers unfilled parameters.
     *
     * @return list<UnfilledParametersResponseOffersItem>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * List of offers unfilled parameters.
     *
     * @param list<UnfilledParametersResponseOffersItem> $offers
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