<?php

namespace Jlonom\AllegroSDK\Model;

class ProductCategoryWithPath extends \ArrayObject
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
     * A list of similar categories in which you can sell this product.
     *
     * @var list<ProductSimilarCategoryWithPath>
     */
    protected $similar;
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
    /**
     * A list of similar categories in which you can sell this product.
     *
     * @return list<ProductSimilarCategoryWithPath>
     */
    public function getSimilar(): array
    {
        return $this->similar;
    }
    /**
     * A list of similar categories in which you can sell this product.
     *
     * @param list<ProductSimilarCategoryWithPath> $similar
     *
     * @return self
     */
    public function setSimilar(array $similar): self
    {
        $this->initialized['similar'] = true;
        $this->similar = $similar;
        return $this;
    }
}