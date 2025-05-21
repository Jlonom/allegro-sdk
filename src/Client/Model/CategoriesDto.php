<?php

namespace Jlonom\AllegroSDK\Model;

class CategoriesDto extends \ArrayObject
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
     * @var list<CategoryDto>
     */
    protected $categories;
    /**
     * 
     *
     * @return list<CategoryDto>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param list<CategoryDto> $categories
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