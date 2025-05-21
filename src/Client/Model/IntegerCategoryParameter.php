<?php

namespace Jlonom\AllegroSDK\Model;

class IntegerCategoryParameter extends CategoryParameter
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
     * @var IntegerCategoryParameterrestrictions
     */
    protected $restrictions;
    /**
     * The restrictions on values of this parameter.
     *
     * @return IntegerCategoryParameterrestrictions
     */
    public function getRestrictions(): IntegerCategoryParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param IntegerCategoryParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(IntegerCategoryParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
}