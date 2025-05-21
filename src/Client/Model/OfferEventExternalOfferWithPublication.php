<?php

namespace Jlonom\AllegroSDK\Model;

class OfferEventExternalOfferWithPublication extends \ArrayObject
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
     * The offer ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId
     */
    protected $external;
    /**
     * Offer publication data.
     *
     * @var OfferMarketplacesPublication
     */
    protected $publication;
    /**
     * The offer ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The offer ID.
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
     * The information on the offer in an external system.
     *
     * @return ExternalId
     */
    public function getExternal(): ExternalId
    {
        return $this->external;
    }
    /**
     * The information on the offer in an external system.
     *
     * @param ExternalId $external
     *
     * @return self
     */
    public function setExternal(ExternalId $external): self
    {
        $this->initialized['external'] = true;
        $this->external = $external;
        return $this;
    }
    /**
     * Offer publication data.
     *
     * @return OfferMarketplacesPublication
     */
    public function getPublication(): OfferMarketplacesPublication
    {
        return $this->publication;
    }
    /**
     * Offer publication data.
     *
     * @param OfferMarketplacesPublication $publication
     *
     * @return self
     */
    public function setPublication(OfferMarketplacesPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
}