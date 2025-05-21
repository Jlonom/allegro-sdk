<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation extends \ArrayObject
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
     * @var PriceAutomationRule
     */
    protected $rule;
    /**
     * 
     *
     * @return PriceAutomationRule
     */
    public function getRule(): PriceAutomationRule
    {
        return $this->rule;
    }
    /**
     * 
     *
     * @param PriceAutomationRule $rule
     *
     * @return self
     */
    public function setRule(PriceAutomationRule $rule): self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;
        return $this;
    }
}