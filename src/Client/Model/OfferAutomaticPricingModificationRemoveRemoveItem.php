<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAutomaticPricingModificationRemoveRemoveItem extends \ArrayObject
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
     * @var OfferAutomaticPricingModificationRemoveRemoveItemMarketplace
     */
    protected $marketplace;
    /**
     * 
     *
     * @return OfferAutomaticPricingModificationRemoveRemoveItemMarketplace
     */
    public function getMarketplace(): OfferAutomaticPricingModificationRemoveRemoveItemMarketplace
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param OfferAutomaticPricingModificationRemoveRemoveItemMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(OfferAutomaticPricingModificationRemoveRemoveItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
}