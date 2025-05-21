<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRuleConfigurationChangeByAmount extends \ArrayObject
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
     * @var AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount
     */
    protected $changeByAmount;
    /**
     * 
     *
     * @return AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount
     */
    public function getChangeByAmount(): AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount
    {
        return $this->changeByAmount;
    }
    /**
     * 
     *
     * @param AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount $changeByAmount
     *
     * @return self
     */
    public function setChangeByAmount(AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount $changeByAmount): self
    {
        $this->initialized['changeByAmount'] = true;
        $this->changeByAmount = $changeByAmount;
        return $this;
    }
}