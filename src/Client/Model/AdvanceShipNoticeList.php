<?php

namespace Jlonom\AllegroSDK\Model;

class AdvanceShipNoticeList extends \ArrayObject
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
     * 
     *
     * @var list<AdvanceShipNoticeResponse>
     */
    protected $advanceShipNotices;
    /**
     * A number of Advance Ship Notices in response.
     *
     * @var float
     */
    protected $count;
    /**
     * A number of Advance Ship Notices in total.
     *
     * @var float
     */
    protected $totalCount;
    /**
     * 
     *
     * @return list<AdvanceShipNoticeResponse>
     */
    public function getAdvanceShipNotices(): array
    {
        return $this->advanceShipNotices;
    }
    /**
     * 
     *
     * @param list<AdvanceShipNoticeResponse> $advanceShipNotices
     *
     * @return self
     */
    public function setAdvanceShipNotices(array $advanceShipNotices): self
    {
        $this->initialized['advanceShipNotices'] = true;
        $this->advanceShipNotices = $advanceShipNotices;
        return $this;
    }
    /**
     * A number of Advance Ship Notices in response.
     *
     * @return float
     */
    public function getCount(): float
    {
        return $this->count;
    }
    /**
     * A number of Advance Ship Notices in response.
     *
     * @param float $count
     *
     * @return self
     */
    public function setCount(float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * A number of Advance Ship Notices in total.
     *
     * @return float
     */
    public function getTotalCount(): float
    {
        return $this->totalCount;
    }
    /**
     * A number of Advance Ship Notices in total.
     *
     * @param float $totalCount
     *
     * @return self
     */
    public function setTotalCount(float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}