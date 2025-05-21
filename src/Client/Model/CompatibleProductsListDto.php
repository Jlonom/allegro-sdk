<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibleProductsListDto extends \ArrayObject
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
     * List of compatible products for given type and parameters.
     *
     * @var list<CompatibleProductDto>
     */
    protected $compatibleProducts;
    /**
     * Number of returned elements.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of available elements. Field is not present when `phrase` parameter is used.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * List of compatible products for given type and parameters.
     *
     * @return list<CompatibleProductDto>
     */
    public function getCompatibleProducts(): array
    {
        return $this->compatibleProducts;
    }
    /**
     * List of compatible products for given type and parameters.
     *
     * @param list<CompatibleProductDto> $compatibleProducts
     *
     * @return self
     */
    public function setCompatibleProducts(array $compatibleProducts): self
    {
        $this->initialized['compatibleProducts'] = true;
        $this->compatibleProducts = $compatibleProducts;
        return $this;
    }
    /**
     * Number of returned elements.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of returned elements.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Total number of available elements. Field is not present when `phrase` parameter is used.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of available elements. Field is not present when `phrase` parameter is used.
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}