<?php

namespace Jlonom\AllegroSDK\Model;

class CourierBySellerShipping extends ShippingExtended
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
     * Represents courier details of shipping.
     *
     * @var Courier
     */
    protected $courier;
    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime
     */
    protected $estimatedTimeOfArrival;
    /**
     * Country code in ISO 3166-1 alpha-2 format (two-letter code), which means the country from which Advance Ship Notice is sent.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Represents courier details of shipping.
     *
     * @return Courier
     */
    public function getCourier(): Courier
    {
        return $this->courier;
    }
    /**
     * Represents courier details of shipping.
     *
     * @param Courier $courier
     *
     * @return self
     */
    public function setCourier(Courier $courier): self
    {
        $this->initialized['courier'] = true;
        $this->courier = $courier;
        return $this;
    }
    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return \DateTime
     */
    public function getEstimatedTimeOfArrival(): \DateTime
    {
        return $this->estimatedTimeOfArrival;
    }
    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \DateTime $estimatedTimeOfArrival
     *
     * @return self
     */
    public function setEstimatedTimeOfArrival(\DateTime $estimatedTimeOfArrival): self
    {
        $this->initialized['estimatedTimeOfArrival'] = true;
        $this->estimatedTimeOfArrival = $estimatedTimeOfArrival;
        return $this;
    }
    /**
     * Country code in ISO 3166-1 alpha-2 format (two-letter code), which means the country from which Advance Ship Notice is sent.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code in ISO 3166-1 alpha-2 format (two-letter code), which means the country from which Advance Ship Notice is sent.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}