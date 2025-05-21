<?php

namespace Jlonom\AllegroSDK\Model;

class ManualDescriptionTranslation extends \ArrayObject
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
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription
     */
    protected $translation;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @return StandardizedDescription
     */
    public function getTranslation(): StandardizedDescription
    {
        return $this->translation;
    }
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @param StandardizedDescription $translation
     *
     * @return self
     */
    public function setTranslation(StandardizedDescription $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;
        return $this;
    }
}