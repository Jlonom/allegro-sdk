<?php

namespace Jlonom\AllegroSDK\Model;

class StringCategoryParameterrestrictions extends \ArrayObject
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
     * The minimum length of the parameter value.
     *
     * @var int
     */
    protected $minLength;
    /**
     * The maximum length of the parameter value.
     *
     * @var int
     */
    protected $maxLength;
    /**
     * Indicates how many different values can be provided for this parameter.
     *
     * @var int
     */
    protected $allowedNumberOfValues;
    /**
     * The minimum length of the parameter value.
     *
     * @return int
     */
    public function getMinLength(): int
    {
        return $this->minLength;
    }
    /**
     * The minimum length of the parameter value.
     *
     * @param int $minLength
     *
     * @return self
     */
    public function setMinLength(int $minLength): self
    {
        $this->initialized['minLength'] = true;
        $this->minLength = $minLength;
        return $this;
    }
    /**
     * The maximum length of the parameter value.
     *
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->maxLength;
    }
    /**
     * The maximum length of the parameter value.
     *
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength(int $maxLength): self
    {
        $this->initialized['maxLength'] = true;
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * Indicates how many different values can be provided for this parameter.
     *
     * @return int
     */
    public function getAllowedNumberOfValues(): int
    {
        return $this->allowedNumberOfValues;
    }
    /**
     * Indicates how many different values can be provided for this parameter.
     *
     * @param int $allowedNumberOfValues
     *
     * @return self
     */
    public function setAllowedNumberOfValues(int $allowedNumberOfValues): self
    {
        $this->initialized['allowedNumberOfValues'] = true;
        $this->allowedNumberOfValues = $allowedNumberOfValues;
        return $this;
    }
}