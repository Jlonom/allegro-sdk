<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPricesEligibilityResponse extends \ArrayObject
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
     * Eligibility state on marketplces other than the base marketplace of the account.
     *
     * @var array<string, AllegroPricesEligibilityResponseAdditionalMarketplacesItem>
     */
    protected $additionalMarketplaces;
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
    /**
     * Eligibility state on marketplces other than the base marketplace of the account.
     *
     * @return array<string, AllegroPricesEligibilityResponseAdditionalMarketplacesItem>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Eligibility state on marketplces other than the base marketplace of the account.
     *
     * @param array<string, AllegroPricesEligibilityResponseAdditionalMarketplacesItem> $additionalMarketplaces
     *
     * @return self
     */
    public function setAdditionalMarketplaces(iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;
        return $this;
    }
}