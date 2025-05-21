<?php

namespace Jlonom\AllegroSDK\Model;

class DeliveryServicesDto extends \ArrayObject
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
     * @var list<DeliveryServiceDto>
     */
    protected $services;
    /**
     * 
     *
     * @return list<DeliveryServiceDto>
     */
    public function getServices(): array
    {
        return $this->services;
    }
    /**
     * 
     *
     * @param list<DeliveryServiceDto> $services
     *
     * @return self
     */
    public function setServices(array $services): self
    {
        $this->initialized['services'] = true;
        $this->services = $services;
        return $this;
    }
}