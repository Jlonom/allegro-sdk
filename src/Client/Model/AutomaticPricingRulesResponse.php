<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRulesResponse extends \ArrayObject
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
     * List of rules.
     *
     * @var list<AutomaticPricingRuleResponse>
     */
    protected $rules;
    /**
     * List of rules.
     *
     * @return list<AutomaticPricingRuleResponse>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * List of rules.
     *
     * @param list<AutomaticPricingRuleResponse> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}