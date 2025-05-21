<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage extends \ArrayObject
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
     * @var string
     */
    protected $value;
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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}