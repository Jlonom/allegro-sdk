<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParameterRequirementConditions extends \ArrayObject
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
     * Condition type which requires this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @var list<CategoryParameterWithValue>
     */
    protected $parametersWithValue;
    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled neither a value nor a value id in an offer or product. Empty if no condition of this type is present.
     *
     * @var list<CategoryParameterWithoutValue>
     */
    protected $parametersWithoutValue;
    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @return list<CategoryParameterWithValue>
     */
    public function getParametersWithValue(): array
    {
        return $this->parametersWithValue;
    }
    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @param list<CategoryParameterWithValue> $parametersWithValue
     *
     * @return self
     */
    public function setParametersWithValue(array $parametersWithValue): self
    {
        $this->initialized['parametersWithValue'] = true;
        $this->parametersWithValue = $parametersWithValue;
        return $this;
    }
    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled neither a value nor a value id in an offer or product. Empty if no condition of this type is present.
     *
     * @return list<CategoryParameterWithoutValue>
     */
    public function getParametersWithoutValue(): array
    {
        return $this->parametersWithoutValue;
    }
    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled neither a value nor a value id in an offer or product. Empty if no condition of this type is present.
     *
     * @param list<CategoryParameterWithoutValue> $parametersWithoutValue
     *
     * @return self
     */
    public function setParametersWithoutValue(array $parametersWithoutValue): self
    {
        $this->initialized['parametersWithoutValue'] = true;
        $this->parametersWithoutValue = $parametersWithoutValue;
        return $this;
    }
}