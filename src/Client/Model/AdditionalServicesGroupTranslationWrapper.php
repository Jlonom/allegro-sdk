<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServicesGroupTranslationWrapper extends \ArrayObject
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
     * 
     *
     * @var list<AdditionalServiceTranslation>
     */
    protected $translation;
    /**
     * 
     *
     * @return list<AdditionalServiceTranslation>
     */
    public function getTranslation(): array
    {
        return $this->translation;
    }
    /**
     * 
     *
     * @param list<AdditionalServiceTranslation> $translation
     *
     * @return self
     */
    public function setTranslation(array $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;
        return $this;
    }
}