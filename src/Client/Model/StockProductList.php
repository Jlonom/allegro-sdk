<?php

namespace Jlonom\AllegroSDK\Model;

class StockProductList extends \ArrayObject
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
     * List of products with their quantity.
     *
     * @var list<StockProductItem>
     */
    protected $stock;
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
     * List of products with their quantity.
     *
     * @return list<StockProductItem>
     */
    public function getStock(): array
    {
        return $this->stock;
    }
    /**
     * List of products with their quantity.
     *
     * @param list<StockProductItem> $stock
     *
     * @return self
     */
    public function setStock(array $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
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