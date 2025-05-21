<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferPublicationMarketplacesResponse extends \ArrayObject
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
     * <small>[read-only]</small> Specifies the offer’s base service. We assign the value in the field automatically when the offer is created and it is read-only, it will never change.
     *
     * @var SaleProductOfferPublicationMarketplacesResponseBase
     */
    protected $base;
    /**
     * Specifies whether an offer is visible in the additional marketplace.
     *
     * @var list<JustId>
     */
    protected $additional;
    /**
     * <small>[read-only]</small> Specifies the offer’s base service. We assign the value in the field automatically when the offer is created and it is read-only, it will never change.
     *
     * @return SaleProductOfferPublicationMarketplacesResponseBase
     */
    public function getBase(): SaleProductOfferPublicationMarketplacesResponseBase
    {
        return $this->base;
    }
    /**
     * <small>[read-only]</small> Specifies the offer’s base service. We assign the value in the field automatically when the offer is created and it is read-only, it will never change.
     *
     * @param SaleProductOfferPublicationMarketplacesResponseBase $base
     *
     * @return self
     */
    public function setBase(SaleProductOfferPublicationMarketplacesResponseBase $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
    /**
     * Specifies whether an offer is visible in the additional marketplace.
     *
     * @return list<JustId>
     */
    public function getAdditional(): array
    {
        return $this->additional;
    }
    /**
     * Specifies whether an offer is visible in the additional marketplace.
     *
     * @param list<JustId> $additional
     *
     * @return self
     */
    public function setAdditional(array $additional): self
    {
        $this->initialized['additional'] = true;
        $this->additional = $additional;
        return $this;
    }
}