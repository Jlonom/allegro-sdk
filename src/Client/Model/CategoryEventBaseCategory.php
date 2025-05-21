<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryEventBaseCategory extends \ArrayObject
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
     * The ID of the category. This can be either in UUID format or an integer format. You should be ready to accept any string value as the category ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Indicates whether the category is at the lowest level. Leaf categories do not have any children. Offers can be listed only in leaf categories.
     *
     * @var bool
     */
    protected $leaf;
    /**
     * Name of the category.
     *
     * @var string
     */
    protected $name;
    /**
     * The parent category data.
     *
     * @var CategoryEventBaseCategoryParent
     */
    protected $parent;
    /**
     * The ID of the category. This can be either in UUID format or an integer format. You should be ready to accept any string value as the category ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the category. This can be either in UUID format or an integer format. You should be ready to accept any string value as the category ID.
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
     * Indicates whether the category is at the lowest level. Leaf categories do not have any children. Offers can be listed only in leaf categories.
     *
     * @return bool
     */
    public function getLeaf(): bool
    {
        return $this->leaf;
    }
    /**
     * Indicates whether the category is at the lowest level. Leaf categories do not have any children. Offers can be listed only in leaf categories.
     *
     * @param bool $leaf
     *
     * @return self
     */
    public function setLeaf(bool $leaf): self
    {
        $this->initialized['leaf'] = true;
        $this->leaf = $leaf;
        return $this;
    }
    /**
     * Name of the category.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the category.
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
     * The parent category data.
     *
     * @return CategoryEventBaseCategoryParent
     */
    public function getParent(): CategoryEventBaseCategoryParent
    {
        return $this->parent;
    }
    /**
     * The parent category data.
     *
     * @param CategoryEventBaseCategoryParent $parent
     *
     * @return self
     */
    public function setParent(CategoryEventBaseCategoryParent $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}