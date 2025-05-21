<?php

namespace Jlonom\AllegroSDK\Model;

class ProductProposalsRequest extends \ArrayObject
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
     * Suggested product name.
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
     * List of product images. At least one image is required.
     *
     * @var list<ImageUrl>
     */
    protected $images;
    /**
     * List of product parameters.
     *
     * @var list<ProductParameter>
     */
    protected $parameters;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription
     */
    protected $description;
    /**
     * Language of provided product data (name, description, parameters's values).
     *
     * @var string
     */
    protected $language;
    /**
     * Suggested product name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Suggested product name.
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
     * List of product images. At least one image is required.
     *
     * @return list<ImageUrl>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * List of product images. At least one image is required.
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
     * @return list<ProductParameter>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * List of product parameters.
     *
     * @param list<ProductParameter> $parameters
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
     * Language of provided product data (name, description, parameters's values).
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Language of provided product data (name, description, parameters's values).
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
}