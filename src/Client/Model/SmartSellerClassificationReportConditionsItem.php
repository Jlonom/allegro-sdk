<?php

namespace Jlonom\AllegroSDK\Model;

class SmartSellerClassificationReportConditionsItem extends \ArrayObject
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
     * Technical condition name
     *
     * @var string
     */
    protected $code;
    /**
     * Condition name
     *
     * @var string
     */
    protected $name;
    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass
     *
     * @var string
     */
    protected $description;
    /**
     * Value of related user attribute that this condition tests. Has to be greater that threshold if present.
     *
     * @var float
     */
    protected $value;
    /**
     * Minimum required `value` of related user attribute.
     *
     * @var float
     */
    protected $threshold;
    /**
     * Indicates whether this condition is met
     *
     * @var bool
     */
    protected $fulfilled;
    /**
     * Indicates whether this condition is required to obtain Smart! status. Please note that certain conditions may be required (or not) based on result of checking other conditions.
     *
     * @var bool
     */
    protected $required;
    /**
     * Technical condition name
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Technical condition name
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Condition name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Condition name
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
     * Brief condition description, might contain useful instructions to help making that particular condition pass
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Value of related user attribute that this condition tests. Has to be greater that threshold if present.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Value of related user attribute that this condition tests. Has to be greater that threshold if present.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Minimum required `value` of related user attribute.
     *
     * @return float
     */
    public function getThreshold(): float
    {
        return $this->threshold;
    }
    /**
     * Minimum required `value` of related user attribute.
     *
     * @param float $threshold
     *
     * @return self
     */
    public function setThreshold(float $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
    /**
     * Indicates whether this condition is met
     *
     * @return bool
     */
    public function getFulfilled(): bool
    {
        return $this->fulfilled;
    }
    /**
     * Indicates whether this condition is met
     *
     * @param bool $fulfilled
     *
     * @return self
     */
    public function setFulfilled(bool $fulfilled): self
    {
        $this->initialized['fulfilled'] = true;
        $this->fulfilled = $fulfilled;
        return $this;
    }
    /**
     * Indicates whether this condition is required to obtain Smart! status. Please note that certain conditions may be required (or not) based on result of checking other conditions.
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * Indicates whether this condition is required to obtain Smart! status. Please note that certain conditions may be required (or not) based on result of checking other conditions.
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
}