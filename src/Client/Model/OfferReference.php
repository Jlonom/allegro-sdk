<?php

namespace Jlonom\AllegroSDK\Model;

class OfferReference extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * Offer name.
     *
     * @var string
     */
    protected $name;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId
     */
    protected $external;
    /**
     * If the offer was a product set, you can see a list of component products (product id with quantity).
     *
     * @var OfferProductSetReference
     */
    protected $productSet;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * Offer name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Offer name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
     * If the offer was a product set, you can see a list of component products (product id with quantity).
     *
     * @return OfferProductSetReference
     */
    public function getProductSet(): OfferProductSetReference
    {
        return $this->productSet;
    }
    /**
     * If the offer was a product set, you can see a list of component products (product id with quantity).
     *
     * @param OfferProductSetReference $productSet
     *
     * @return self
     */
    public function setProductSet(OfferProductSetReference $productSet): self
    {
        $this->initialized['productSet'] = true;
        $this->productSet = $productSet;
        return $this;
    }
}