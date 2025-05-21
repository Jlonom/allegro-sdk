<?php

namespace Jlonom\AllegroSDK\Model;

class CategorySuggestionCategoryNode extends \ArrayObject
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
     * ID of category.
     *
     * @var string
     */
    protected $id;
    /**
     * Category name.
     *
     * @var string
     */
    protected $name;
    /**
     * Category suggestion category object.
     *
     * @var CategorySuggestionCategoryNode
     */
    protected $parent;
    /**
     * ID of category.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of category.
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
     * Category name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Category name.
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
     * Category suggestion category object.
     *
     * @return CategorySuggestionCategoryNode
     */
    public function getParent(): CategorySuggestionCategoryNode
    {
        return $this->parent;
    }
    /**
     * Category suggestion category object.
     *
     * @param CategorySuggestionCategoryNode $parent
     *
     * @return self
     */
    public function setParent(CategorySuggestionCategoryNode $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}