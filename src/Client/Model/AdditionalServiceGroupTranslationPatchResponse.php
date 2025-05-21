<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServiceGroupTranslationPatchResponse extends \ArrayObject
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
     * IETF language tag.
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var AdditionalServicesGroupTranslationWrapperWithType
     */
    protected $additionalServices;
    /**
     * IETF language tag.
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * IETF language tag.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return AdditionalServicesGroupTranslationWrapperWithType
     */
    public function getAdditionalServices(): AdditionalServicesGroupTranslationWrapperWithType
    {
        return $this->additionalServices;
    }
    /**
     * 
     *
     * @param AdditionalServicesGroupTranslationWrapperWithType $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(AdditionalServicesGroupTranslationWrapperWithType $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
}