<?php

namespace Jlonom\AllegroSDK\Model;

class DictionaryCategoryProductParameter extends CategoryProductParameter
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
     * @var DictionaryCategoryProductParameterrestrictions
     */
    protected $restrictions;
    /**
     * Defines the values accepted for this parameter.
     *
     * @var list<DictionaryCategoryProductParameterdictionaryItem>
     */
    protected $dictionary;
    /**
     * The restrictions on values of this parameter.
     *
     * @return DictionaryCategoryProductParameterrestrictions
     */
    public function getRestrictions(): DictionaryCategoryProductParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param DictionaryCategoryProductParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(DictionaryCategoryProductParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * Defines the values accepted for this parameter.
     *
     * @return list<DictionaryCategoryProductParameterdictionaryItem>
     */
    public function getDictionary(): array
    {
        return $this->dictionary;
    }
    /**
     * Defines the values accepted for this parameter.
     *
     * @param list<DictionaryCategoryProductParameterdictionaryItem> $dictionary
     *
     * @return self
     */
    public function setDictionary(array $dictionary): self
    {
        $this->initialized['dictionary'] = true;
        $this->dictionary = $dictionary;
        return $this;
    }
}