<?php

namespace Jlonom\AllegroSDK\Model;

class OfferTranslations extends \ArrayObject
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
     * @var list<OfferTranslation>
     */
    protected $translations;
    /**
     * 
     *
     * @return list<OfferTranslation>
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }
    /**
     * 
     *
     * @param list<OfferTranslation> $translations
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