<?php

namespace Jlonom\AllegroSDK\Model;

class OfferTaxSettings extends \ArrayObject
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
     * Tax rates for offer.
     *
     * @var list<OfferTaxRate>
     */
    protected $rates;
    /**
     * The subject of taxation for offer.
     *
     * @var string
     */
    protected $subject;
    /**
     * The exemption of taxation for offer.
     *
     * @var string
     */
    protected $exemption;
    /**
     * Tax rates for offer.
     *
     * @return list<OfferTaxRate>
     */
    public function getRates(): array
    {
        return $this->rates;
    }
    /**
     * Tax rates for offer.
     *
     * @param list<OfferTaxRate> $rates
     *
     * @return self
     */
    public function setRates(array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;
        return $this;
    }
    /**
     * The subject of taxation for offer.
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * The subject of taxation for offer.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * The exemption of taxation for offer.
     *
     * @return string
     */
    public function getExemption(): string
    {
        return $this->exemption;
    }
    /**
     * The exemption of taxation for offer.
     *
     * @param string $exemption
     *
     * @return self
     */
    public function setExemption(string $exemption): self
    {
        $this->initialized['exemption'] = true;
        $this->exemption = $exemption;
        return $this;
    }
}