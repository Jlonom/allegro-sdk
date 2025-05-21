<?php

namespace Jlonom\AllegroSDK\Model;

class ListingResponseFiltersValues extends \ArrayObject
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
     * Name of the option; for NUMERIC parameters - word indicating start or end of range (i.e. *from*, *to*).
     *
     * @var string
     */
    protected $name;
    /**
    * Filter value. Should be used as query parameter value in the request. This can be:
    
    - for MULTI and SINGLE parameters - a value identifier (e.g. KUJAWSKO_POMORSKIE option in location.province
    filter),
    - for other types - a value entered by user.
    *
    * @var string
    */
    protected $value;
    /**
     * Suffix used as a second part of query parameter name to be used in the request (the first part is the filter ID). Applicable for NUMERIC values only.
     *
     * @var string
     */
    protected $idSuffix;
    /**
     * Number of search results matching this filter value.
     *
     * @var int
     */
    protected $count;
    /**
     * Indicates whether this filter value was used in the current request.
     *
     * @var bool
     */
    protected $selected;
    /**
     * Name of the option; for NUMERIC parameters - word indicating start or end of range (i.e. *from*, *to*).
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the option; for NUMERIC parameters - word indicating start or end of range (i.e. *from*, *to*).
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
    * Filter value. Should be used as query parameter value in the request. This can be:
    
    - for MULTI and SINGLE parameters - a value identifier (e.g. KUJAWSKO_POMORSKIE option in location.province
    filter),
    - for other types - a value entered by user.
    *
    * @return string
    */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
    * Filter value. Should be used as query parameter value in the request. This can be:
    
    - for MULTI and SINGLE parameters - a value identifier (e.g. KUJAWSKO_POMORSKIE option in location.province
    filter),
    - for other types - a value entered by user.
    *
    * @param string $value
    *
    * @return self
    */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Suffix used as a second part of query parameter name to be used in the request (the first part is the filter ID). Applicable for NUMERIC values only.
     *
     * @return string
     */
    public function getIdSuffix(): string
    {
        return $this->idSuffix;
    }
    /**
     * Suffix used as a second part of query parameter name to be used in the request (the first part is the filter ID). Applicable for NUMERIC values only.
     *
     * @param string $idSuffix
     *
     * @return self
     */
    public function setIdSuffix(string $idSuffix): self
    {
        $this->initialized['idSuffix'] = true;
        $this->idSuffix = $idSuffix;
        return $this;
    }
    /**
     * Number of search results matching this filter value.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of search results matching this filter value.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Indicates whether this filter value was used in the current request.
     *
     * @return bool
     */
    public function getSelected(): bool
    {
        return $this->selected;
    }
    /**
     * Indicates whether this filter value was used in the current request.
     *
     * @param bool $selected
     *
     * @return self
     */
    public function setSelected(bool $selected): self
    {
        $this->initialized['selected'] = true;
        $this->selected = $selected;
        return $this;
    }
}