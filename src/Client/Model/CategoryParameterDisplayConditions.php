<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParameterDisplayConditions extends \ArrayObject
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
     * Condition type which displays this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @var list<CategoryParameterWithValue>
     */
    protected $parametersWithValue;
    /**
     * Condition type which displays this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @return list<CategoryParameterWithValue>
     */
    public function getParametersWithValue(): array
    {
        return $this->parametersWithValue;
    }
    /**
     * Condition type which displays this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
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
}