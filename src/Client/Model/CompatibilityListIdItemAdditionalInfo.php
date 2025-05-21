<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListIdItemAdditionalInfo extends \ArrayObject
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
     * Additional information describing the compatible item. E.g. for cars it can be an engine code or an equipment version.
     *
     * @var string
     */
    protected $value;
    /**
     * Additional information describing the compatible item. E.g. for cars it can be an engine code or an equipment version.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Additional information describing the compatible item. E.g. for cars it can be an engine code or an equipment version.
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