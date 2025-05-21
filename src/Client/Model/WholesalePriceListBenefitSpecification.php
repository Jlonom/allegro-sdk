<?php

namespace Jlonom\AllegroSDK\Model;

class WholesalePriceListBenefitSpecification extends BenefitSpecification
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
     * Price list name (visible to you only).
     *
     * @var string
     */
    protected $name;
    /**
     * List of discount thresholds. A threshold with a higher quantity.lowerBound than another must also have a higher discount.percentage.
     *
     * @var list<WholesalePriceListBenefitSpecificationthresholdsItem>
     */
    protected $thresholds;
    /**
     * Price list name (visible to you only).
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Price list name (visible to you only).
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * List of discount thresholds. A threshold with a higher quantity.lowerBound than another must also have a higher discount.percentage.
     *
     * @return list<WholesalePriceListBenefitSpecificationthresholdsItem>
     */
    public function getThresholds(): array
    {
        return $this->thresholds;
    }
    /**
     * List of discount thresholds. A threshold with a higher quantity.lowerBound than another must also have a higher discount.percentage.
     *
     * @param list<WholesalePriceListBenefitSpecificationthresholdsItem> $thresholds
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