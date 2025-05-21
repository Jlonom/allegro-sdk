<?php

namespace Jlonom\AllegroSDK\Model;

class ListingResponseOffers extends \ArrayObject
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
     * List of promoted offers.
     *
     * @var list<ListingOffer>
     */
    protected $promoted;
    /**
     * List of regular (non-promoted) offers.
     *
     * @var list<ListingOffer>
     */
    protected $regular;
    /**
     * List of promoted offers.
     *
     * @return list<ListingOffer>
     */
    public function getPromoted(): array
    {
        return $this->promoted;
    }
    /**
     * List of promoted offers.
     *
     * @param list<ListingOffer> $promoted
     *
     * @return self
     */
    public function setPromoted(array $promoted): self
    {
        $this->initialized['promoted'] = true;
        $this->promoted = $promoted;
        return $this;
    }
    /**
     * List of regular (non-promoted) offers.
     *
     * @return list<ListingOffer>
     */
    public function getRegular(): array
    {
        return $this->regular;
    }
    /**
     * List of regular (non-promoted) offers.
     *
     * @param list<ListingOffer> $regular
     *
     * @return self
     */
    public function setRegular(array $regular): self
    {
        $this->initialized['regular'] = true;
        $this->regular = $regular;
        return $this;
    }
}