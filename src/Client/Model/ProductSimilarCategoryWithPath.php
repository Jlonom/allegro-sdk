<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSimilarCategoryWithPath extends \ArrayObject
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
     * Category identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var list<ProductsCategoryPath>
     */
    protected $path;
    /**
     * Category identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Category identifier.
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
     * 
     *
     * @return list<ProductsCategoryPath>
     */
    public function getPath(): array
    {
        return $this->path;
    }
    /**
     * 
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