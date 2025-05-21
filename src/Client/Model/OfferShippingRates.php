<?php

namespace Jlonom\AllegroSDK\Model;

class OfferShippingRates extends \ArrayObject
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
     * If empty there is the shipping rates set attached to offer. You should use the GET /sale/offers/{offerId} resource to retrieve the shipping rates set ID.
     *
     * @var list<ShippingRate>
     */
    protected $rates;
    /**
     * If empty there is the shipping rates set attached to offer. You should use the GET /sale/offers/{offerId} resource to retrieve the shipping rates set ID.
     *
     * @return list<ShippingRate>
     */
    public function getRates(): array
    {
        return $this->rates;
    }
    /**
     * If empty there is the shipping rates set attached to offer. You should use the GET /sale/offers/{offerId} resource to retrieve the shipping rates set ID.
     *
     * @param list<ShippingRate> $rates
     *
     * @return self
     */
    public function setRates(array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;
        return $this;
    }
}