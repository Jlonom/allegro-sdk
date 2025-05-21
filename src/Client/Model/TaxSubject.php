<?php

namespace Jlonom\AllegroSDK\Model;

class TaxSubject extends \ArrayObject
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
     * Displayable tax subject label.
     *
     * @var string
     */
    protected $label;
    /**
     * Value of subject.
     *
     * @var string
     */
    protected $value;
    /**
     * Displayable tax subject label.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Displayable tax subject label.
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
     * Value of subject.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Value of subject.
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