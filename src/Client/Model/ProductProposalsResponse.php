<?php

namespace Jlonom\AllegroSDK\Model;

class ProductProposalsResponse extends \ArrayObject
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
     * Product name.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ProductProposalsResponseCategory
     */
    protected $category;
    /**
     * List of product images.
     *
     * @var list<ImageUrl>
     */
    protected $images;
    /**
     * List of product parameters.
     *
     * @var list<NewProductParameterDto>
     */
    protected $parameters;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription
     */
    protected $description;
    /**
     * Supplier id.
     *
     * @var SupplierDto
     */
    protected $supplier;
    /**
     * Offer id.
     *
     * @var string
     */
    protected $offerId;
    /**
     * Language of product data (name, description, parameters's values).
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var ProductProposalsResponsePublication
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
     * 
     *
     * @return ProductProposalsResponseCategory
     */
    public function getCategory(): ProductProposalsResponseCategory
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param ProductProposalsResponseCategory $category
     *
     * @return self
     */
    public function setCategory(ProductProposalsResponseCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * List of product images.
     *
     * @return list<ImageUrl>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * List of product images.
     *
     * @param list<ImageUrl> $images
     *
     * @return self
     */
    public function setImages(array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;
        return $this;
    }
    /**
     * List of product parameters.
     *
     * @return list<NewProductParameterDto>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * List of product parameters.
     *
     * @param list<NewProductParameterDto> $parameters
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
     * The description section cannot have more than 40000 bytes in length.
     *
     * @return StandardizedDescription
     */
    public function getDescription(): StandardizedDescription
    {
        return $this->description;
    }
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @param StandardizedDescription $description
     *
     * @return self
     */
    public function setDescription(StandardizedDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Supplier id.
     *
     * @return SupplierDto
     */
    public function getSupplier(): SupplierDto
    {
        return $this->supplier;
    }
    /**
     * Supplier id.
     *
     * @param SupplierDto $supplier
     *
     * @return self
     */
    public function setSupplier(SupplierDto $supplier): self
    {
        $this->initialized['supplier'] = true;
        $this->supplier = $supplier;
        return $this;
    }
    /**
     * Offer id.
     *
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }
    /**
     * Offer id.
     *
     * @param string $offerId
     *
     * @return self
     */
    public function setOfferId(string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;
        return $this;
    }
    /**
     * Language of product data (name, description, parameters's values).
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Language of product data (name, description, parameters's values).
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return ProductProposalsResponsePublication
     */
    public function getPublication(): ProductProposalsResponsePublication
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param ProductProposalsResponsePublication $publication
     *
     * @return self
     */
    public function setPublication(ProductProposalsResponsePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
}