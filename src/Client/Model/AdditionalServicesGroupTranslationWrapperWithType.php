<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServicesGroupTranslationWrapperWithType extends \ArrayObject
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
     * Type of translation.
     *
     * @var string
     */
    protected $type;
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
    /**
     * Type of translation.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of translation.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}