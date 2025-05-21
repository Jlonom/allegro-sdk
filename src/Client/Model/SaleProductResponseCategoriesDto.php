<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductResponseCategoriesDto extends \ArrayObject
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
     * A list of categories that contain results for given search parameters.
     *
     * @var list<ProductsCategorySubcategories>
     */
    protected $subcategories;
    /**
     * The path of current category used as categrory filter in search.
     *
     * @var list<ProductsCategoryPath>
     */
    protected $path;
    /**
     * A list of categories that contain results for given search parameters.
     *
     * @return list<ProductsCategorySubcategories>
     */
    public function getSubcategories(): array
    {
        return $this->subcategories;
    }
    /**
     * A list of categories that contain results for given search parameters.
     *
     * @param list<ProductsCategorySubcategories> $subcategories
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
     * The path of current category used as categrory filter in search.
     *
     * @return list<ProductsCategoryPath>
     */
    public function getPath(): array
    {
        return $this->path;
    }
    /**
     * The path of current category used as categrory filter in search.
     *
     * @param list<ProductsCategoryPath> $path
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