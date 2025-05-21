<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplaceItemLanguages extends \ArrayObject
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
     * Languages in which you can create offer
     *
     * @var list<MarketplaceItemLanguage>
     */
    protected $offerCreation;
    /**
     * Languages in which buyer can see the offer
     *
     * @var list<MarketplaceItemLanguage>
     */
    protected $offerDisplay;
    /**
     * Languages in which you can create offer
     *
     * @return list<MarketplaceItemLanguage>
     */
    public function getOfferCreation(): array
    {
        return $this->offerCreation;
    }
    /**
     * Languages in which you can create offer
     *
     * @param list<MarketplaceItemLanguage> $offerCreation
     *
     * @return self
     */
    public function setOfferCreation(array $offerCreation): self
    {
        $this->initialized['offerCreation'] = true;
        $this->offerCreation = $offerCreation;
        return $this;
    }
    /**
     * Languages in which buyer can see the offer
     *
     * @return list<MarketplaceItemLanguage>
     */
    public function getOfferDisplay(): array
    {
        return $this->offerDisplay;
    }
    /**
     * Languages in which buyer can see the offer
     *
     * @param list<MarketplaceItemLanguage> $offerDisplay
     *
     * @return self
     */
    public function setOfferDisplay(array $offerDisplay): self
    {
        $this->initialized['offerDisplay'] = true;
        $this->offerDisplay = $offerDisplay;
        return $this;
    }
}