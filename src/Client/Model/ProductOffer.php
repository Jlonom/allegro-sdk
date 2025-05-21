<?php

namespace Jlonom\AllegroSDK\Model;

class ProductOffer extends \ArrayObject
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
     * Product name.
     *
     * @var string
     */
    protected $name;
    /**
     * Product category
     *
     * @var array<string, mixed>
     */
    protected $category;
    /**
     * Product id.
     *
     * @var string
     */
    protected $id;
    /**
    * Type of id. This field is optional. It helps in finding products more accurately. If an idType is not set, a given id is understood as a product's id.
    - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
    - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
    *
    * @var string
    */
    protected $idType;
    /**
     * List of product parameters.
     *
     * @var list<ParameterProductOfferRequest>
     */
    protected $parameters;
    /**
     * List of product images.
     *
     * @var list<string>
     */
    protected $images;
    /**
     * Product name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Product name.
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
     * Product category
     *
     * @return array<string, mixed>
     */
    public function getCategory(): iterable
    {
        return $this->category;
    }
    /**
     * Product category
     *
     * @param array<string, mixed> $category
     *
     * @return self
     */
    public function setCategory(iterable $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
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
    * Type of id. This field is optional. It helps in finding products more accurately. If an idType is not set, a given id is understood as a product's id.
    - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
    - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
    *
    * @return string
    */
    public function getIdType(): string
    {
        return $this->idType;
    }
    /**
    * Type of id. This field is optional. It helps in finding products more accurately. If an idType is not set, a given id is understood as a product's id.
    - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
    - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
    *
    * @param string $idType
    *
    * @return self
    */
    public function setIdType(string $idType): self
    {
        $this->initialized['idType'] = true;
        $this->idType = $idType;
        return $this;
    }
    /**
     * List of product parameters.
     *
     * @return list<ParameterProductOfferRequest>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * List of product parameters.
     *
     * @param list<ParameterProductOfferRequest> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * List of product images.
     *
     * @return list<string>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * List of product images.
     *
     * @param list<string> $images
     *
     * @return self
     */
    public function setImages(array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;
        return $this;
    }
}