<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1B2b extends \ArrayObject
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
     * @var bool
     */
    protected $buyableOnlyByBusiness;
    /**
     * 
     *
     * @return bool
     */
    public function getBuyableOnlyByBusiness(): bool
    {
        return $this->buyableOnlyByBusiness;
    }
    /**
     * 
     *
     * @param bool $buyableOnlyByBusiness
     *
     * @return self
     */
    public function setBuyableOnlyByBusiness(bool $buyableOnlyByBusiness): self
    {
        $this->initialized['buyableOnlyByBusiness'] = true;
        $this->buyableOnlyByBusiness = $buyableOnlyByBusiness;
        return $this;
    }
}