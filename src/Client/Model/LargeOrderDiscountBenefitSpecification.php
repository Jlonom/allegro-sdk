<?php

namespace Jlonom\AllegroSDK\Model;

class LargeOrderDiscountBenefitSpecification extends BenefitSpecification
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
     * List of order discount thresholds. A threshold with a higher orderValue.lowerBound.amount than another one must also have a higher discount.percentage.
     *
     * @var list<LargeOrderDiscountBenefitSpecificationthresholdsItem>
     */
    protected $thresholds;
    /**
     * List of order discount thresholds. A threshold with a higher orderValue.lowerBound.amount than another one must also have a higher discount.percentage.
     *
     * @return list<LargeOrderDiscountBenefitSpecificationthresholdsItem>
     */
    public function getThresholds(): array
    {
        return $this->thresholds;
    }
    /**
     * List of order discount thresholds. A threshold with a higher orderValue.lowerBound.amount than another one must also have a higher discount.percentage.
     *
     * @param list<LargeOrderDiscountBenefitSpecificationthresholdsItem> $thresholds
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