<?php

namespace Jlonom\AllegroSDK\Model;

class Benefit extends \ArrayObject
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
     * One of: LargeOrderDiscountBenefitSpecification, WholesalePriceListBenefitSpecification, MultiPackBenefitSpecification
     *
     * @var BenefitSpecification
     */
    protected $specification;
    /**
     * One of: LargeOrderDiscountBenefitSpecification, WholesalePriceListBenefitSpecification, MultiPackBenefitSpecification
     *
     * @return BenefitSpecification
     */
    public function getSpecification(): BenefitSpecification
    {
        return $this->specification;
    }
    /**
     * One of: LargeOrderDiscountBenefitSpecification, WholesalePriceListBenefitSpecification, MultiPackBenefitSpecification
     *
     * @param BenefitSpecification $specification
     *
     * @return self
     */
    public function setSpecification(BenefitSpecification $specification): self
    {
        $this->initialized['specification'] = true;
        $this->specification = $specification;
        return $this;
    }
}