<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount extends \ArrayObject
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
     * Guaranteed offer discount as a percentage.
     *
     * @var string
     */
    protected $percentage;
    /**
     * Guaranteed offer discount as a percentage.
     *
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }
    /**
     * Guaranteed offer discount as a percentage.
     *
     * @param string $percentage
     *
     * @return self
     */
    public function setPercentage(string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}