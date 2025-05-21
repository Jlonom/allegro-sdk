<?php

namespace Jlonom\AllegroSDK\Model;

class ListingResponseFilters extends \ArrayObject
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
     * Identifier of the filter. Should be used as query parameter key, optionally followed by idSuffix from parameter value (only for NUMERIC filters).
     *
     * @var string
     */
    protected $id;
    /**
    * The type of the filter:
    
    - *MULTI* - multiple choice filter,
    - *SINGLE* - single select (dropdown) filter,
    - *NUMERIC* - range of numeric values (search offers with value matching this range),
    - *NUMERIC_SINGLE* - single numeric value (search offers with given value matching the range defined in offer),
    - *TEXT* - filter allowing user to input any text.
    *
    * @var string
    */
    protected $type;
    /**
     * Name of the filter.
     *
     * @var string
     */
    protected $name;
    /**
     * Available filter values.
     *
     * @var list<ListingResponseFiltersValues>
     */
    protected $values;
    /**
     * Minimum valid value for filters of type NUMERIC.
     *
     * @var float
     */
    protected $minValue;
    /**
     * Maximum valid value for filters of type NUMERIC.
     *
     * @var float
     */
    protected $maxValue;
    /**
     * Unit of the NUMERIC/NUMERIC_SINGLE filter.
     *
     * @var string
     */
    protected $unit;
    /**
     * Identifier of the filter. Should be used as query parameter key, optionally followed by idSuffix from parameter value (only for NUMERIC filters).
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the filter. Should be used as query parameter key, optionally followed by idSuffix from parameter value (only for NUMERIC filters).
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
    * The type of the filter:
    
    - *MULTI* - multiple choice filter,
    - *SINGLE* - single select (dropdown) filter,
    - *NUMERIC* - range of numeric values (search offers with value matching this range),
    - *NUMERIC_SINGLE* - single numeric value (search offers with given value matching the range defined in offer),
    - *TEXT* - filter allowing user to input any text.
    *
    * @return string
    */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * The type of the filter:
    
    - *MULTI* - multiple choice filter,
    - *SINGLE* - single select (dropdown) filter,
    - *NUMERIC* - range of numeric values (search offers with value matching this range),
    - *NUMERIC_SINGLE* - single numeric value (search offers with given value matching the range defined in offer),
    - *TEXT* - filter allowing user to input any text.
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Name of the filter.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the filter.
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
     * Available filter values.
     *
     * @return list<ListingResponseFiltersValues>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * Available filter values.
     *
     * @param list<ListingResponseFiltersValues> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    /**
     * Minimum valid value for filters of type NUMERIC.
     *
     * @return float
     */
    public function getMinValue(): float
    {
        return $this->minValue;
    }
    /**
     * Minimum valid value for filters of type NUMERIC.
     *
     * @param float $minValue
     *
     * @return self
     */
    public function setMinValue(float $minValue): self
    {
        $this->initialized['minValue'] = true;
        $this->minValue = $minValue;
        return $this;
    }
    /**
     * Maximum valid value for filters of type NUMERIC.
     *
     * @return float
     */
    public function getMaxValue(): float
    {
        return $this->maxValue;
    }
    /**
     * Maximum valid value for filters of type NUMERIC.
     *
     * @param float $maxValue
     *
     * @return self
     */
    public function setMaxValue(float $maxValue): self
    {
        $this->initialized['maxValue'] = true;
        $this->maxValue = $maxValue;
        return $this;
    }
    /**
     * Unit of the NUMERIC/NUMERIC_SINGLE filter.
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * Unit of the NUMERIC/NUMERIC_SINGLE filter.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
}