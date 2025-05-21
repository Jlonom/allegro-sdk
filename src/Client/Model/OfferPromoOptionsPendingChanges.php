<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPromoOptionsPendingChanges extends \ArrayObject
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
     * @var OfferPromoOption
     */
    protected $basePackage;
    /**
     * 
     *
     * @return OfferPromoOption
     */
    public function getBasePackage(): OfferPromoOption
    {
        return $this->basePackage;
    }
    /**
     * 
     *
     * @param OfferPromoOption $basePackage
     *
     * @return self
     */
    public function setBasePackage(OfferPromoOption $basePackage): self
    {
        $this->initialized['basePackage'] = true;
        $this->basePackage = $basePackage;
        return $this;
    }
}