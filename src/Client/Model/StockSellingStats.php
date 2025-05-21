<?php

namespace Jlonom\AllegroSDK\Model;

class StockSellingStats extends \ArrayObject
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
     * Moving daily sales average calculated for last week (7 calendar days before current day), rounded to integer using "half up" logic. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @var float
     */
    protected $lastWeekAverage;
    /**
     * Total sales for the last 30 calendar days. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @var float
     */
    protected $lastThirtyDaysSum;
    /**
     * Moving daily sales average calculated for last week (7 calendar days before current day), rounded to integer using "half up" logic. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @return float
     */
    public function getLastWeekAverage(): float
    {
        return $this->lastWeekAverage;
    }
    /**
     * Moving daily sales average calculated for last week (7 calendar days before current day), rounded to integer using "half up" logic. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @param float $lastWeekAverage
     *
     * @return self
     */
    public function setLastWeekAverage(float $lastWeekAverage): self
    {
        $this->initialized['lastWeekAverage'] = true;
        $this->lastWeekAverage = $lastWeekAverage;
        return $this;
    }
    /**
     * Total sales for the last 30 calendar days. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @return float
     */
    public function getLastThirtyDaysSum(): float
    {
        return $this->lastThirtyDaysSum;
    }
    /**
     * Total sales for the last 30 calendar days. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @param float $lastThirtyDaysSum
     *
     * @return self
     */
    public function setLastThirtyDaysSum(float $lastThirtyDaysSum): self
    {
        $this->initialized['lastThirtyDaysSum'] = true;
        $this->lastThirtyDaysSum = $lastThirtyDaysSum;
        return $this;
    }
}