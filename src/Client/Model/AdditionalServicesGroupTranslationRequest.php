<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServicesGroupTranslationRequest extends \ArrayObject
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
     * @var AdditionalServicesGroupTranslationWrapper
     */
    protected $additionalServices;
    /**
     * 
     *
     * @return AdditionalServicesGroupTranslationWrapper
     */
    public function getAdditionalServices(): AdditionalServicesGroupTranslationWrapper
    {
        return $this->additionalServices;
    }
    /**
     * 
     *
     * @param AdditionalServicesGroupTranslationWrapper $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(AdditionalServicesGroupTranslationWrapper $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
}