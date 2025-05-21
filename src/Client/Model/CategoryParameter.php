<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParameter extends \ArrayObject
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
     * The ID of the parameter.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the parameter in Polish.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of the parameter. Other fields in this structure may appear based on the type of the parameter.
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates whether the value of this parameter must be set in an offer. Offers without required parameters set cannot be published. See also `requiredIf`.
     *
     * @var bool
     */
    protected $required;
    /**
     * Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created.
     *
     * @var bool
     */
    protected $requiredForProduct;
    /**
     * Restricts the circumstances when this parameter is required. `null` if solely the `required` flag determines if this parameter is required. Present if this parameter is required only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @var CategoryParameterRequirementConditions
     */
    protected $requiredIf;
    /**
     * Restricts the circumstances when this parameter should be displayed e.g. on a user form. `null` if this parameter is displayed always. Present if this parameter should be displayed only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @var CategoryParameterDisplayConditions
     */
    protected $displayedIf;
    /**
     * The unit in which values of the parameter are used. May be `null`.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * A list of the different options which can be used with this parameter.
     *
     * @var CategoryParameterOptions
     */
    protected $options;
    /**
     * The ID of the parameter.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the parameter.
     *
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
    }
    /**
     * The name of the parameter in Polish.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the parameter in Polish.
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->initialized['name'] = true;
        $this->name = $name;
    }
    /**
     * The type of the parameter. Other fields in this structure may appear based on the type of the parameter.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the parameter. Other fields in this structure may appear based on the type of the parameter.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
    /**
     * Indicates whether the value of this parameter must be set in an offer. Offers without required parameters set cannot be published. See also `requiredIf`.
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * Indicates whether the value of this parameter must be set in an offer. Offers without required parameters set cannot be published. See also `requiredIf`.
     *
     * @param bool $required
     */
    public function setRequired(bool $required)
    {
        $this->initialized['required'] = true;
        $this->required = $required;
    }
    /**
     * Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created.
     *
     * @return bool
     */
    public function getRequiredForProduct(): bool
    {
        return $this->requiredForProduct;
    }
    /**
     * Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created.
     *
     * @param bool $requiredForProduct
     */
    public function setRequiredForProduct(bool $requiredForProduct)
    {
        $this->initialized['requiredForProduct'] = true;
        $this->requiredForProduct = $requiredForProduct;
    }
    /**
     * Restricts the circumstances when this parameter is required. `null` if solely the `required` flag determines if this parameter is required. Present if this parameter is required only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @return CategoryParameterRequirementConditions
     */
    public function getRequiredIf(): CategoryParameterRequirementConditions
    {
        return $this->requiredIf;
    }
    /**
     * Restricts the circumstances when this parameter is required. `null` if solely the `required` flag determines if this parameter is required. Present if this parameter is required only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @param CategoryParameterRequirementConditions $requiredIf
     */
    public function setRequiredIf(CategoryParameterRequirementConditions $requiredIf)
    {
        $this->initialized['requiredIf'] = true;
        $this->requiredIf = $requiredIf;
    }
    /**
     * Restricts the circumstances when this parameter should be displayed e.g. on a user form. `null` if this parameter is displayed always. Present if this parameter should be displayed only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @return CategoryParameterDisplayConditions
     */
    public function getDisplayedIf(): CategoryParameterDisplayConditions
    {
        return $this->displayedIf;
    }
    /**
     * Restricts the circumstances when this parameter should be displayed e.g. on a user form. `null` if this parameter is displayed always. Present if this parameter should be displayed only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @param CategoryParameterDisplayConditions $displayedIf
     */
    public function setDisplayedIf(CategoryParameterDisplayConditions $displayedIf)
    {
        $this->initialized['displayedIf'] = true;
        $this->displayedIf = $displayedIf;
    }
    /**
     * The unit in which values of the parameter are used. May be `null`.
     *
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * The unit in which values of the parameter are used. May be `null`.
     *
     * @param string|null $unit
     */
    public function setUnit(?string $unit)
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
    }
    /**
     * A list of the different options which can be used with this parameter.
     *
     * @return CategoryParameterOptions
     */
    public function getOptions(): CategoryParameterOptions
    {
        return $this->options;
    }
    /**
     * A list of the different options which can be used with this parameter.
     *
     * @param CategoryParameterOptions $options
     */
    public function setOptions(CategoryParameterOptions $options)
    {
        $this->initialized['options'] = true;
        $this->options = $options;
    }
}