<?php

namespace Jlonom\AllegroSDK\Model;

class FloatCategoryParameter extends CategoryParameter
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
     * @var FloatCategoryParameterrestrictions
     */
    protected $restrictions;
    /**
     * The restrictions on values of this parameter.
     *
     * @return FloatCategoryParameterrestrictions
     */
    public function getRestrictions(): FloatCategoryParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param FloatCategoryParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(FloatCategoryParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
}