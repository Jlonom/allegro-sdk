<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplaceItem extends \ArrayObject
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
     * Marketplace id
     *
     * @var string
     */
    protected $id;
    /**
     * Languages available for that marketplace
     *
     * @var MarketplaceItemLanguages
     */
    protected $languages;
    /**
     * Currencies available for that marketplace
     *
     * @var MarketplaceItemCurrencies
     */
    protected $currencies;
    /**
     * List of delivery countries for that marketplace
     *
     * @var list<MarketplaceItemShippingCountry>
     */
    protected $shippingCountries;
    /**
     * Marketplace id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Marketplace id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Languages available for that marketplace
     *
     * @return MarketplaceItemLanguages
     */
    public function getLanguages(): MarketplaceItemLanguages
    {
        return $this->languages;
    }
    /**
     * Languages available for that marketplace
     *
     * @param MarketplaceItemLanguages $languages
     *
     * @return self
     */
    public function setLanguages(MarketplaceItemLanguages $languages): self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
    /**
     * Currencies available for that marketplace
     *
     * @return MarketplaceItemCurrencies
     */
    public function getCurrencies(): MarketplaceItemCurrencies
    {
        return $this->currencies;
    }
    /**
     * Currencies available for that marketplace
     *
     * @param MarketplaceItemCurrencies $currencies
     *
     * @return self
     */
    public function setCurrencies(MarketplaceItemCurrencies $currencies): self
    {
        $this->initialized['currencies'] = true;
        $this->currencies = $currencies;
        return $this;
    }
    /**
     * List of delivery countries for that marketplace
     *
     * @return list<MarketplaceItemShippingCountry>
     */
    public function getShippingCountries(): array
    {
        return $this->shippingCountries;
    }
    /**
     * List of delivery countries for that marketplace
     *
     * @param list<MarketplaceItemShippingCountry> $shippingCountries
     *
     * @return self
     */
    public function setShippingCountries(array $shippingCountries): self
    {
        $this->initialized['shippingCountries'] = true;
        $this->shippingCountries = $shippingCountries;
        return $this;
    }
}