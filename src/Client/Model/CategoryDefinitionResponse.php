<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryDefinitionResponse extends \ArrayObject
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
     * Id of additional service definition.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of additional service definition, that should be shown to the customer.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var CategoryDefinitionDescriptionResponse
     */
    protected $description;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $maxPrice;
    /**
     * 
     *
     * @var list<AvailableConstraint>|null
     */
    protected $availableConstraints;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Id of additional service definition.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of additional service definition.
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
     * Name of additional service definition, that should be shown to the customer.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of additional service definition, that should be shown to the customer.
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
     * @return CategoryDefinitionDescriptionResponse
     */
    public function getDescription(): CategoryDefinitionDescriptionResponse
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param CategoryDefinitionDescriptionResponse $description
     *
     * @return self
     */
    public function setDescription(CategoryDefinitionDescriptionResponse $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The price data.
     *
     * @return Price
     */
    public function getMaxPrice(): Price
    {
        return $this->maxPrice;
    }
    /**
     * The price data.
     *
     * @param Price $maxPrice
     *
     * @return self
     */
    public function setMaxPrice(Price $maxPrice): self
    {
        $this->initialized['maxPrice'] = true;
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * 
     *
     * @return list<AvailableConstraint>|null
     */
    public function getAvailableConstraints(): ?array
    {
        return $this->availableConstraints;
    }
    /**
     * 
     *
     * @param list<AvailableConstraint>|null $availableConstraints
     *
     * @return self
     */
    public function setAvailableConstraints(?array $availableConstraints): self
    {
        $this->initialized['availableConstraints'] = true;
        $this->availableConstraints = $availableConstraints;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}