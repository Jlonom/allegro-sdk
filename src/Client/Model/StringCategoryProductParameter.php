<?php

namespace Jlonom\AllegroSDK\Model;

class StringCategoryProductParameter extends CategoryProductParameter
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
     * @var StringCategoryProductParameterrestrictions
     */
    protected $restrictions;
    /**
     * The restrictions on values of this parameter.
     *
     * @return StringCategoryProductParameterrestrictions
     */
    public function getRestrictions(): StringCategoryProductParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param StringCategoryProductParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(StringCategoryProductParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
}