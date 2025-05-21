<?php

namespace Jlonom\AllegroSDK\Model;

class ReserveInfo extends \ArrayObject
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
     * Prediction of number of days in which inventory will be sold out.
     *
     * @var float
     */
    protected $outOfStockIn;
    /**
     * Gives information about inventory, that can not be expressed using `outOfStockIn` property. Can be one of the given values: NOT_ENOUGH_DATA - not enough data to calculate sufficiency, LOW_STOCK - inventory quantity will run out soon (in 14 days or less) NORMAL - prediction can be calculated, EXCESS_ONE_YEAR - amount of inventory will not be exhausted in (approximately) one year threshold.
     *
     * @var string
     */
    protected $status;
    /**
     * Prediction of number of days in which inventory will be sold out.
     *
     * @return float
     */
    public function getOutOfStockIn(): float
    {
        return $this->outOfStockIn;
    }
    /**
     * Prediction of number of days in which inventory will be sold out.
     *
     * @param float $outOfStockIn
     *
     * @return self
     */
    public function setOutOfStockIn(float $outOfStockIn): self
    {
        $this->initialized['outOfStockIn'] = true;
        $this->outOfStockIn = $outOfStockIn;
        return $this;
    }
    /**
     * Gives information about inventory, that can not be expressed using `outOfStockIn` property. Can be one of the given values: NOT_ENOUGH_DATA - not enough data to calculate sufficiency, LOW_STOCK - inventory quantity will run out soon (in 14 days or less) NORMAL - prediction can be calculated, EXCESS_ONE_YEAR - amount of inventory will not be exhausted in (approximately) one year threshold.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Gives information about inventory, that can not be expressed using `outOfStockIn` property. Can be one of the given values: NOT_ENOUGH_DATA - not enough data to calculate sufficiency, LOW_STOCK - inventory quantity will run out soon (in 14 days or less) NORMAL - prediction can be calculated, EXCESS_ONE_YEAR - amount of inventory will not be exhausted in (approximately) one year threshold.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}