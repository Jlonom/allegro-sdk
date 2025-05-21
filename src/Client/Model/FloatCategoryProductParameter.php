<?php

namespace Jlonom\AllegroSDK\Model;

class FloatCategoryProductParameter extends CategoryProductParameter
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
     * The restrictions on values of this parameter.
     *
     * @var FloatCategoryProductParameterrestrictions
     */
    protected $restrictions;
    /**
     * The restrictions on values of this parameter.
     *
     * @return FloatCategoryProductParameterrestrictions
     */
    public function getRestrictions(): FloatCategoryProductParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param FloatCategoryProductParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(FloatCategoryProductParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
}