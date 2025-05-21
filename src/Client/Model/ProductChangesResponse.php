<?php

namespace Jlonom\AllegroSDK\Model;

class ProductChangesResponse extends \ArrayObject
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
     * List of requested product changes.
     *
     * @var list<ProductChangeDto>
     */
    protected $productChanges;
    /**
     * List of requested product changes.
     *
     * @return list<ProductChangeDto>
     */
    public function getProductChanges(): array
    {
        return $this->productChanges;
    }
    /**
     * List of requested product changes.
     *
     * @param list<ProductChangeDto> $productChanges
     *
     * @return self
     */
    public function setProductChanges(array $productChanges): self
    {
        $this->initialized['productChanges'] = true;
        $this->productChanges = $productChanges;
        return $this;
    }
}