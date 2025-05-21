<?php

namespace Jlonom\AllegroSDK\Model;

class TurnoverDiscountRequest extends \ArrayObject
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
     * List of thresholds to apply to cumulated turnover.
     *
     * @var list<TurnoverDiscountThresholdDto>
     */
    protected $thresholds;
    /**
     * List of thresholds to apply to cumulated turnover.
     *
     * @return list<TurnoverDiscountThresholdDto>
     */
    public function getThresholds(): array
    {
        return $this->thresholds;
    }
    /**
     * List of thresholds to apply to cumulated turnover.
     *
     * @param list<TurnoverDiscountThresholdDto> $thresholds
     *
     * @return self
     */
    public function setThresholds(array $thresholds): self
    {
        $this->initialized['thresholds'] = true;
        $this->thresholds = $thresholds;
        return $this;
    }
}