<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount extends \ArrayObject
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
     * @var string
     */
    protected $operation;
    /**
     * 
     *
     * @var list<AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem>
     */
    protected $values;
    /**
     * 
     *
     * @return string
     */
    public function getOperation(): string
    {
        return $this->operation;
    }
    /**
     * 
     *
     * @param string $operation
     *
     * @return self
     */
    public function setOperation(string $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;
        return $this;
    }
    /**
     * 
     *
     * @return list<AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param list<AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}