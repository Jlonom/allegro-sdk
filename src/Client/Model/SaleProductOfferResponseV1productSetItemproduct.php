<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferResponseV1productSetItemproduct extends \ArrayObject
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
     * Product parameters in the offer.
     *
     * @var list<ParameterProductOfferResponse>
     */
    protected $parameters;
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
    /**
     * Product parameters in the offer.
     *
     * @return list<ParameterProductOfferResponse>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * Product parameters in the offer.
     *
     * @param list<ParameterProductOfferResponse> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}