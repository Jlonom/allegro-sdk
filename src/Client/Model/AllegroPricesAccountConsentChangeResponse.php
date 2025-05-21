<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPricesAccountConsentChangeResponse extends \ArrayObject
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
    protected $status;
    /**
     * Consent statuses on marketplaces other than the base marketplace of the account.
     *
     * @var array<string, AllegroPricesAccountConsentChangeResponseAdditionalMarketplacesItem>
     */
    protected $additionalMarketplaces;
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Consent statuses on marketplaces other than the base marketplace of the account.
     *
     * @return array<string, AllegroPricesAccountConsentChangeResponseAdditionalMarketplacesItem>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Consent statuses on marketplaces other than the base marketplace of the account.
     *
     * @param array<string, AllegroPricesAccountConsentChangeResponseAdditionalMarketplacesItem> $additionalMarketplaces
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