<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountListEligibleResponse extends \ArrayObject
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
     * Array of offers eligible to be submitted to given AlleDiscount campaign.
     *
     * @var list<AlleDiscountEligibleOfferDto>
     */
    protected $eligibleOffers;
    /**
     * Number of offers returned in page.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of eligible offers.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Array of offers eligible to be submitted to given AlleDiscount campaign.
     *
     * @return list<AlleDiscountEligibleOfferDto>
     */
    public function getEligibleOffers(): array
    {
        return $this->eligibleOffers;
    }
    /**
     * Array of offers eligible to be submitted to given AlleDiscount campaign.
     *
     * @param list<AlleDiscountEligibleOfferDto> $eligibleOffers
     *
     * @return self
     */
    public function setEligibleOffers(array $eligibleOffers): self
    {
        $this->initialized['eligibleOffers'] = true;
        $this->eligibleOffers = $eligibleOffers;
        return $this;
    }
    /**
     * Number of offers returned in page.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of offers returned in page.
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
     * Total number of eligible offers.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of eligible offers.
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