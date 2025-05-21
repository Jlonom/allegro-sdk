<?php

namespace Jlonom\AllegroSDK\Model;

class StringCategoryParameter extends CategoryParameter
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
     * @var StringCategoryParameterrestrictions
     */
    protected $restrictions;
    /**
     * The restrictions on values of this parameter.
     *
     * @return StringCategoryParameterrestrictions
     */
    public function getRestrictions(): StringCategoryParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param StringCategoryParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(StringCategoryParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
}