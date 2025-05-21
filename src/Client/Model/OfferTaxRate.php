<?php

namespace Jlonom\AllegroSDK\Model;

class OfferTaxRate extends \ArrayObject
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
     * Tax rate value.
     *
     * @var string
     */
    protected $rate;
    /**
     * Tax rate country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Tax rate value.
     *
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }
    /**
     * Tax rate value.
     *
     * @param string $rate
     *
     * @return self
     */
    public function setRate(string $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * Tax rate country code.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Tax rate country code.
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