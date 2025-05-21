<?php

namespace Jlonom\AllegroSDK\Model;

class DictionaryCategoryProductParameterrestrictions extends \ArrayObject
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
     * Indicates whether this parameter can have more than one value.
     *
     * @var bool
     */
    protected $multipleChoices;
    /**
     * Indicates whether this parameter can have more than one value.
     *
     * @return bool
     */
    public function getMultipleChoices(): bool
    {
        return $this->multipleChoices;
    }
    /**
     * Indicates whether this parameter can have more than one value.
     *
     * @param bool $multipleChoices
     *
     * @return self
     */
    public function setMultipleChoices(bool $multipleChoices): self
    {
        $this->initialized['multipleChoices'] = true;
        $this->multipleChoices = $multipleChoices;
        return $this;
    }
}