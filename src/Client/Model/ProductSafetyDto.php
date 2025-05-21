<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSafetyDto extends \ArrayObject
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
     * @var list<ResponsibleProducerResponse>|null
     */
    protected $responsibleProducers;
    /**
     * 
     *
     * @var ProductSafetyDtoSafetyInformation
     */
    protected $safetyInformation;
    /**
     * 
     *
     * @var bool|null
     */
    protected $marketedBeforeGPSRObligation;
    /**
     * 
     *
     * @return list<ResponsibleProducerResponse>|null
     */
    public function getResponsibleProducers(): ?array
    {
        return $this->responsibleProducers;
    }
    /**
     * 
     *
     * @param list<ResponsibleProducerResponse>|null $responsibleProducers
     *
     * @return self
     */
    public function setResponsibleProducers(?array $responsibleProducers): self
    {
        $this->initialized['responsibleProducers'] = true;
        $this->responsibleProducers = $responsibleProducers;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSafetyDtoSafetyInformation
     */
    public function getSafetyInformation(): ProductSafetyDtoSafetyInformation
    {
        return $this->safetyInformation;
    }
    /**
     * 
     *
     * @param ProductSafetyDtoSafetyInformation $safetyInformation
     *
     * @return self
     */
    public function setSafetyInformation(ProductSafetyDtoSafetyInformation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMarketedBeforeGPSRObligation(): ?bool
    {
        return $this->marketedBeforeGPSRObligation;
    }
    /**
     * 
     *
     * @param bool|null $marketedBeforeGPSRObligation
     *
     * @return self
     */
    public function setMarketedBeforeGPSRObligation(?bool $marketedBeforeGPSRObligation): self
    {
        $this->initialized['marketedBeforeGPSRObligation'] = true;
        $this->marketedBeforeGPSRObligation = $marketedBeforeGPSRObligation;
        return $this;
    }
}