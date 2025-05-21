<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRuleConfigurationChangeByPercentage extends \ArrayObject
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
     * @var AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage
     */
    protected $changeByPercentage;
    /**
     * 
     *
     * @return AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage
     */
    public function getChangeByPercentage(): AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage
    {
        return $this->changeByPercentage;
    }
    /**
     * 
     *
     * @param AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage $changeByPercentage
     *
     * @return self
     */
    public function setChangeByPercentage(AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage $changeByPercentage): self
    {
        $this->initialized['changeByPercentage'] = true;
        $this->changeByPercentage = $changeByPercentage;
        return $this;
    }
}