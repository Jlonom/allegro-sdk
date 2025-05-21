<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryDefinitionDescriptionResponse extends \ArrayObject
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
     * Hint for the seller for better description for customers.
     *
     * @var string|null
     */
    protected $hint;
    /**
     * Determines whether the description of additional service can be set by the seller, or it's provided by Allegro and cannot be changed.
     *
     * @var bool
     */
    protected $editable;
    /**
     * Default description of special additional service, provided by Allegro.
     *
     * @var string|null
     */
    protected $default;
    /**
     * Hint for the seller for better description for customers.
     *
     * @return string|null
     */
    public function getHint(): ?string
    {
        return $this->hint;
    }
    /**
     * Hint for the seller for better description for customers.
     *
     * @param string|null $hint
     *
     * @return self
     */
    public function setHint(?string $hint): self
    {
        $this->initialized['hint'] = true;
        $this->hint = $hint;
        return $this;
    }
    /**
     * Determines whether the description of additional service can be set by the seller, or it's provided by Allegro and cannot be changed.
     *
     * @return bool
     */
    public function getEditable(): bool
    {
        return $this->editable;
    }
    /**
     * Determines whether the description of additional service can be set by the seller, or it's provided by Allegro and cannot be changed.
     *
     * @param bool $editable
     *
     * @return self
     */
    public function setEditable(bool $editable): self
    {
        $this->initialized['editable'] = true;
        $this->editable = $editable;
        return $this;
    }
    /**
     * Default description of special additional service, provided by Allegro.
     *
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }
    /**
     * Default description of special additional service, provided by Allegro.
     *
     * @param string|null $default
     *
     * @return self
     */
    public function setDefault(?string $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
}