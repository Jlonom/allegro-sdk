<?php

namespace Jlonom\AllegroSDK\Model;

class ManualTitleTranslation extends \ArrayObject
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
     * Manual offer title translation content
     *
     * @var string
     */
    protected $translation;
    /**
     * Manual offer title translation content
     *
     * @return string
     */
    public function getTranslation(): string
    {
        return $this->translation;
    }
    /**
     * Manual offer title translation content
     *
     * @param string $translation
     *
     * @return self
     */
    public function setTranslation(string $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;
        return $this;
    }
}