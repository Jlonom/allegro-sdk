<?php

namespace Jlonom\AllegroSDK\Model;

class ProductParameter extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * Parameter's range value
     *
     * @var ParameterRangeValue
     */
    protected $rangeValue;
    /**
     * 
     *
     * @var list<string>
     */
    protected $values;
    /**
     * 
     *
     * @var list<string>
     */
    protected $valuesIds;
    /**
     * 
     *
     * @var list<string>
     */
    protected $valuesLabels;
    /**
     * 
     *
     * @var string
     */
    protected $unit;
    /**
     * 
     *
     * @var ProductParameterOptions
     */
    protected $options;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * Parameter's range value
     *
     * @return ParameterRangeValue
     */
    public function getRangeValue(): ParameterRangeValue
    {
        return $this->rangeValue;
    }
    /**
     * Parameter's range value
     *
     * @param ParameterRangeValue $rangeValue
     *
     * @return self
     */
    public function setRangeValue(ParameterRangeValue $rangeValue): self
    {
        $this->initialized['rangeValue'] = true;
        $this->rangeValue = $rangeValue;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param list<string> $values
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
     * 
     *
     * @return list<string>
     */
    public function getValuesIds(): array
    {
        return $this->valuesIds;
    }
    /**
     * 
     *
     * @param list<string> $valuesIds
     *
     * @return self
     */
    public function setValuesIds(array $valuesIds): self
    {
        $this->initialized['valuesIds'] = true;
        $this->valuesIds = $valuesIds;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getValuesLabels(): array
    {
        return $this->valuesLabels;
    }
    /**
     * 
     *
     * @param list<string> $valuesLabels
     *
     * @return self
     */
    public function setValuesLabels(array $valuesLabels): self
    {
        $this->initialized['valuesLabels'] = true;
        $this->valuesLabels = $valuesLabels;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return ProductParameterOptions
     */
    public function getOptions(): ProductParameterOptions
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param ProductParameterOptions $options
     *
     * @return self
     */
    public function setOptions(ProductParameterOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}