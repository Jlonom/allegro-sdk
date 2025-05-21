<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPricesOfferConsentChangeResponse extends \ArrayObject
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
     * Consent status on the base marketplace of the offer.
     *
     * @var string
     */
    protected $status;
    /**
     * Consent statuses on marketplaces other than the base marketplace of the offer.
     *
     * @var array<string, AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem>
     */
    protected $additionalMarketplaces;
    /**
     * Consent status on the base marketplace of the offer.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Consent status on the base marketplace of the offer.
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
     * Consent statuses on marketplaces other than the base marketplace of the offer.
     *
     * @return array<string, AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Consent statuses on marketplaces other than the base marketplace of the offer.
     *
     * @param array<string, AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem> $additionalMarketplaces
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