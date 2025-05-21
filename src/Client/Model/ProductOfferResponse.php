<?php

namespace Jlonom\AllegroSDK\Model;

class ProductOfferResponse extends \ArrayObject
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
     * Product id.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var ProductOfferResponsePublication
     */
    protected $publication;
    /**
     * Product id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Product id.
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
     * 
     *
     * @return ProductOfferResponsePublication
     */
    public function getPublication(): ProductOfferResponsePublication
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param ProductOfferResponsePublication $publication
     *
     * @return self
     */
    public function setPublication(ProductOfferResponsePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
}