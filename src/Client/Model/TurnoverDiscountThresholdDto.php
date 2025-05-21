<?php

namespace Jlonom\AllegroSDK\Model;

class TurnoverDiscountThresholdDto extends \ArrayObject
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
     * The minimum turnover that the buyer is required to accumulate in order to receive a discount for the next month.
     *
     * @var TurnoverDiscountThresholdDtoMinimumTurnover
     */
    protected $minimumTurnover;
    /**
     * Discount obtained by user after reaching turnover threshold.
     *
     * @var TurnoverDiscountThresholdDtoDiscount
     */
    protected $discount;
    /**
     * The minimum turnover that the buyer is required to accumulate in order to receive a discount for the next month.
     *
     * @return TurnoverDiscountThresholdDtoMinimumTurnover
     */
    public function getMinimumTurnover(): TurnoverDiscountThresholdDtoMinimumTurnover
    {
        return $this->minimumTurnover;
    }
    /**
     * The minimum turnover that the buyer is required to accumulate in order to receive a discount for the next month.
     *
     * @param TurnoverDiscountThresholdDtoMinimumTurnover $minimumTurnover
     *
     * @return self
     */
    public function setMinimumTurnover(TurnoverDiscountThresholdDtoMinimumTurnover $minimumTurnover): self
    {
        $this->initialized['minimumTurnover'] = true;
        $this->minimumTurnover = $minimumTurnover;
        return $this;
    }
    /**
     * Discount obtained by user after reaching turnover threshold.
     *
     * @return TurnoverDiscountThresholdDtoDiscount
     */
    public function getDiscount(): TurnoverDiscountThresholdDtoDiscount
    {
        return $this->discount;
    }
    /**
     * Discount obtained by user after reaching turnover threshold.
     *
     * @param TurnoverDiscountThresholdDtoDiscount $discount
     *
     * @return self
     */
    public function setDiscount(TurnoverDiscountThresholdDtoDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
}