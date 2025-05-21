<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPricesEligibilityResponseAdditionalMarketplacesItem extends \ArrayObject
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
     * @var string
     */
    protected $consent;
    /**
     * 
     *
     * @var AllegroPricesQualificationResponse
     */
    protected $qualification;
    /**
     * 
     *
     * @return string
     */
    public function getConsent(): string
    {
        return $this->consent;
    }
    /**
     * 
     *
     * @param string $consent
     *
     * @return self
     */
    public function setConsent(string $consent): self
    {
        $this->initialized['consent'] = true;
        $this->consent = $consent;
        return $this;
    }
    /**
     * 
     *
     * @return AllegroPricesQualificationResponse
     */
    public function getQualification(): AllegroPricesQualificationResponse
    {
        return $this->qualification;
    }
    /**
     * 
     *
     * @param AllegroPricesQualificationResponse $qualification
     *
     * @return self
     */
    public function setQualification(AllegroPricesQualificationResponse $qualification): self
    {
        $this->initialized['qualification'] = true;
        $this->qualification = $qualification;
        return $this;
    }
}