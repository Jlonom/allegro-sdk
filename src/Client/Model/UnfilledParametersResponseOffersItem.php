<?php

namespace Jlonom\AllegroSDK\Model;

class UnfilledParametersResponseOffersItem extends \ArrayObject
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
     * Identifier of the offer.
     *
     * @var string
     */
    protected $id;
    /**
     * List of unfilled parameters.
     *
     * @var list<UnfilledParametersResponseOffersItemParametersItem>
     */
    protected $parameters;
    /**
     * Category of offer with unfilled parameters
     *
     * @var UnfilledParametersResponseOffersItemCategory
     */
    protected $category;
    /**
     * Identifier of the offer.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the offer.
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
     * List of unfilled parameters.
     *
     * @return list<UnfilledParametersResponseOffersItemParametersItem>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * List of unfilled parameters.
     *
     * @param list<UnfilledParametersResponseOffersItemParametersItem> $parameters
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
     * Category of offer with unfilled parameters
     *
     * @return UnfilledParametersResponseOffersItemCategory
     */
    public function getCategory(): UnfilledParametersResponseOffersItemCategory
    {
        return $this->category;
    }
    /**
     * Category of offer with unfilled parameters
     *
     * @param UnfilledParametersResponseOffersItemCategory $category
     *
     * @return self
     */
    public function setCategory(UnfilledParametersResponseOffersItemCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
}