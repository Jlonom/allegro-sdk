<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServiceGroupTranslationResponse extends \ArrayObject
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
     * @var list<AdditionalServiceGroupTranslation>
     */
    protected $translations;
    /**
     * 
     *
     * @return list<AdditionalServiceGroupTranslation>
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }
    /**
     * 
     *
     * @param list<AdditionalServiceGroupTranslation> $translations
     *
     * @return self
     */
    public function setTranslations(array $translations): self
    {
        $this->initialized['translations'] = true;
        $this->translations = $translations;
        return $this;
    }
}