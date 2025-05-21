<?php

namespace Jlonom\AllegroSDK\Model;

class CategoriesResponse extends \ArrayObject
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
     * 
     *
     * @var list<CategoryResponse>
     */
    protected $categories;
    /**
     * 
     *
     * @return list<CategoryResponse>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param list<CategoryResponse> $categories
     *
     * @return self
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
}