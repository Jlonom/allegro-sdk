<?php

namespace Jlonom\AllegroSDK\Model;

class TaxExemption extends \ArrayObject
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
     * Displayable exemption label.
     *
     * @var string
     */
    protected $label;
    /**
     * Value of exemption.
     *
     * @var string
     */
    protected $value;
    /**
     * Displayable exemption label.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Displayable exemption label.
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
     * Value of exemption.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Value of exemption.
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
}