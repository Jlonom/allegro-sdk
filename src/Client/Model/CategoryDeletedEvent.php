<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryDeletedEvent extends CategoryBaseEvent
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
     * Category that should be used instead of deleted one.
     *
     * @var CategoryDeletedEventredirectCategory
     */
    protected $redirectCategory;
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
    /**
     * Category that should be used instead of deleted one.
     *
     * @return CategoryDeletedEventredirectCategory
     */
    public function getRedirectCategory(): CategoryDeletedEventredirectCategory
    {
        return $this->redirectCategory;
    }
    /**
     * Category that should be used instead of deleted one.
     *
     * @param CategoryDeletedEventredirectCategory $redirectCategory
     *
     * @return self
     */
    public function setRedirectCategory(CategoryDeletedEventredirectCategory $redirectCategory): self
    {
        $this->initialized['redirectCategory'] = true;
        $this->redirectCategory = $redirectCategory;
        return $this;
    }
}