<?php

namespace Jlonom\AllegroSDK\Model;

class MultiPackBenefitSpecificationconfiguration extends \ArrayObject
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
     * discount percentage
     *
     * @var float
     */
    protected $percentage;
    /**
     * discount percentage
     *
     * @return float
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }
    /**
     * discount percentage
     *
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}