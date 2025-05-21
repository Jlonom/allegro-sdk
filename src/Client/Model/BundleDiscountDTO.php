<?php

namespace Jlonom\AllegroSDK\Model;

class BundleDiscountDTO extends \ArrayObject
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
     * @var BundleMarketplaceDTO
     */
    protected $marketplace;
    /**
     * Discount value.
     *
     * @var string
     */
    protected $amount;
    /**
     * Discount currency as a 3-letter code in accordance with <a href="https://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217</a> standard. Has to be in base currency of specified marketplace.
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @return BundleMarketplaceDTO
     */
    public function getMarketplace(): BundleMarketplaceDTO
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param BundleMarketplaceDTO $marketplace
     *
     * @return self
     */
    public function setMarketplace(BundleMarketplaceDTO $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * Discount value.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Discount value.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Discount currency as a 3-letter code in accordance with <a href="https://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217</a> standard. Has to be in base currency of specified marketplace.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Discount currency as a 3-letter code in accordance with <a href="https://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217</a> standard. Has to be in base currency of specified marketplace.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}