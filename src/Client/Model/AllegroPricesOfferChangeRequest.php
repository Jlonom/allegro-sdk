<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPricesOfferChangeRequest extends \ArrayObject
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
     * Use it to update the consent on the base marketplace of the offer.
     *
     * @var string
     */
    protected $status;
    /**
     * Use it to update the consent on marketplaces other than the base marketplace of the offer.
     *
     * @var array<string, AllegroPricesOfferChangeRequestAdditionalMarketplacesItem>
     */
    protected $additionalMarketplaces;
    /**
     * Use it to update the consent on the base marketplace of the offer.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Use it to update the consent on the base marketplace of the offer.
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
     * Use it to update the consent on marketplaces other than the base marketplace of the offer.
     *
     * @return array<string, AllegroPricesOfferChangeRequestAdditionalMarketplacesItem>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Use it to update the consent on marketplaces other than the base marketplace of the offer.
     *
     * @param array<string, AllegroPricesOfferChangeRequestAdditionalMarketplacesItem> $additionalMarketplaces
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