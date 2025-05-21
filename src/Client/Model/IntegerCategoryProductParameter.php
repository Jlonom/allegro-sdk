<?php

namespace Jlonom\AllegroSDK\Model;

class IntegerCategoryProductParameter extends CategoryProductParameter
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
     * @var IntegerCategoryProductParameterrestrictions
     */
    protected $restrictions;
    /**
     * The restrictions on values of this parameter.
     *
     * @return IntegerCategoryProductParameterrestrictions
     */
    public function getRestrictions(): IntegerCategoryProductParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param IntegerCategoryProductParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(IntegerCategoryProductParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
}