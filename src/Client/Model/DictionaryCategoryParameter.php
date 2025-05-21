<?php

namespace Jlonom\AllegroSDK\Model;

class DictionaryCategoryParameter extends CategoryParameter
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
     * @var DictionaryCategoryParameterrestrictions
     */
    protected $restrictions;
    /**
     * Defines the values accepted for this parameter.
     *
     * @var list<DictionaryCategoryParameterdictionaryItem>
     */
    protected $dictionary;
    /**
     * The restrictions on values of this parameter.
     *
     * @return DictionaryCategoryParameterrestrictions
     */
    public function getRestrictions(): DictionaryCategoryParameterrestrictions
    {
        return $this->restrictions;
    }
    /**
     * The restrictions on values of this parameter.
     *
     * @param DictionaryCategoryParameterrestrictions $restrictions
     *
     * @return self
     */
    public function setRestrictions(DictionaryCategoryParameterrestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * Defines the values accepted for this parameter.
     *
     * @return list<DictionaryCategoryParameterdictionaryItem>
     */
    public function getDictionary(): array
    {
        return $this->dictionary;
    }
    /**
     * Defines the values accepted for this parameter.
     *
     * @param list<DictionaryCategoryParameterdictionaryItem> $dictionary
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