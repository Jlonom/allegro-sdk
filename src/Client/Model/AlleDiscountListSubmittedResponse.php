<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountListSubmittedResponse extends \ArrayObject
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
     * Array of offers submitted to a given AlleDiscount campaign. This list contains all active and non active offer participations. There can be only one submission for offer in one AlleDiscount campaign.
     *
     * @var list<AlleDiscountSubmittedOfferDto>
     */
    protected $submittedOffers;
    /**
     * Number of offers returned in page.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of submitted offers.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Array of offers submitted to a given AlleDiscount campaign. This list contains all active and non active offer participations. There can be only one submission for offer in one AlleDiscount campaign.
     *
     * @return list<AlleDiscountSubmittedOfferDto>
     */
    public function getSubmittedOffers(): array
    {
        return $this->submittedOffers;
    }
    /**
     * Array of offers submitted to a given AlleDiscount campaign. This list contains all active and non active offer participations. There can be only one submission for offer in one AlleDiscount campaign.
     *
     * @param list<AlleDiscountSubmittedOfferDto> $submittedOffers
     *
     * @return self
     */
    public function setSubmittedOffers(array $submittedOffers): self
    {
        $this->initialized['submittedOffers'] = true;
        $this->submittedOffers = $submittedOffers;
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
     * Total number of submitted offers.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of submitted offers.
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