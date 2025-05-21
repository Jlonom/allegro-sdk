<?php

namespace Jlonom\AllegroSDK\Model;

class ListingResponseCategories extends \ArrayObject
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
     * Categories with counters, which can be used to refine search results.
     *
     * @var list<ListingCategoryWithCount>
     */
    protected $subcategories;
    /**
     * Categories path to the current listing category (breadcrumbs).
     *
     * @var list<ListingCategory>
     */
    protected $path;
    /**
     * Categories with counters, which can be used to refine search results.
     *
     * @return list<ListingCategoryWithCount>
     */
    public function getSubcategories(): array
    {
        return $this->subcategories;
    }
    /**
     * Categories with counters, which can be used to refine search results.
     *
     * @param list<ListingCategoryWithCount> $subcategories
     *
     * @return self
     */
    public function setSubcategories(array $subcategories): self
    {
        $this->initialized['subcategories'] = true;
        $this->subcategories = $subcategories;
        return $this;
    }
    /**
     * Categories path to the current listing category (breadcrumbs).
     *
     * @return list<ListingCategory>
     */
    public function getPath(): array
    {
        return $this->path;
    }
    /**
     * Categories path to the current listing category (breadcrumbs).
     *
     * @param list<ListingCategory> $path
     *
     * @return self
     */
    public function setPath(array $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
}