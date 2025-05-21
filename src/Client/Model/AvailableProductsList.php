<?php

namespace Jlonom\AllegroSDK\Model;

class AvailableProductsList extends \ArrayObject
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
     * List of products.
     *
     * @var list<AvailableProductResponse>
     */
    protected $products;
    /**
     * Number of returned products.
     *
     * @var float
     */
    protected $count;
    /**
     * Total number of available products.
     *
     * @var float
     */
    protected $totalCount;
    /**
     * List of products.
     *
     * @return list<AvailableProductResponse>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * List of products.
     *
     * @param list<AvailableProductResponse> $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
     * Number of returned products.
     *
     * @return float
     */
    public function getCount(): float
    {
        return $this->count;
    }
    /**
     * Number of returned products.
     *
     * @param float $count
     *
     * @return self
     */
    public function setCount(float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Total number of available products.
     *
     * @return float
     */
    public function getTotalCount(): float
    {
        return $this->totalCount;
    }
    /**
     * Total number of available products.
     *
     * @param float $totalCount
     *
     * @return self
     */
    public function setTotalCount(float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}