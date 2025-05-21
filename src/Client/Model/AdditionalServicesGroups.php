<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServicesGroups extends \ArrayObject
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
     * @var list<AdditionalServicesGroupResponse>
     */
    protected $additionalServicesGroups;
    /**
     * 
     *
     * @return list<AdditionalServicesGroupResponse>
     */
    public function getAdditionalServicesGroups(): array
    {
        return $this->additionalServicesGroups;
    }
    /**
     * 
     *
     * @param list<AdditionalServicesGroupResponse> $additionalServicesGroups
     *
     * @return self
     */
    public function setAdditionalServicesGroups(array $additionalServicesGroups): self
    {
        $this->initialized['additionalServicesGroups'] = true;
        $this->additionalServicesGroups = $additionalServicesGroups;
        return $this;
    }
}