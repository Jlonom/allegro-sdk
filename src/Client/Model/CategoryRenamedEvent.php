<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryRenamedEvent extends CategoryBaseEvent
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
     * Category event category data.
     *
     * @var CategoryEventBaseCategory
     */
    protected $category;
    /**
     * Category event category data.
     *
     * @return CategoryEventBaseCategory
     */
    public function getCategory(): CategoryEventBaseCategory
    {
        return $this->category;
    }
    /**
     * Category event category data.
     *
     * @param CategoryEventBaseCategory $category
     *
     * @return self
     */
    public function setCategory(CategoryEventBaseCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
}