<?php

namespace Jlonom\AllegroSDK\Model;

class TaxRateValue extends \ArrayObject
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
     * Displayable tax rate label.
     *
     * @var string
     */
    protected $label;
    /**
     * A numeric value of VAT tax rate. In case of "OUT_OF_SCOPE_OF_VAT" it is set to 0.
     *
     * @var string
     */
    protected $value;
    /**
     * Exemption field must be filled out if true, otherwise is optional.
     *
     * @var bool
     */
    protected $exemptionRequired;
    /**
     * Displayable tax rate label.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Displayable tax rate label.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * A numeric value of VAT tax rate. In case of "OUT_OF_SCOPE_OF_VAT" it is set to 0.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * A numeric value of VAT tax rate. In case of "OUT_OF_SCOPE_OF_VAT" it is set to 0.
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
     * Exemption field must be filled out if true, otherwise is optional.
     *
     * @return bool
     */
    public function getExemptionRequired(): bool
    {
        return $this->exemptionRequired;
    }
    /**
     * Exemption field must be filled out if true, otherwise is optional.
     *
     * @param bool $exemptionRequired
     *
     * @return self
     */
    public function setExemptionRequired(bool $exemptionRequired): self
    {
        $this->initialized['exemptionRequired'] = true;
        $this->exemptionRequired = $exemptionRequired;
        return $this;
    }
}