<?php

namespace Jlonom\AllegroSDK\Model;

class ProductChangeDto extends \ArrayObject
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
     * @var ProductChangeDtoProduct
     */
    protected $product;
    /**
     * List of changed product parameters.
     *
     * @var list<ChangedParameterDto>
     */
    protected $changedParameters;
    /**
     * 
     *
     * @return ProductChangeDtoProduct
     */
    public function getProduct(): ProductChangeDtoProduct
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param ProductChangeDtoProduct $product
     *
     * @return self
     */
    public function setProduct(ProductChangeDtoProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * List of changed product parameters.
     *
     * @return list<ChangedParameterDto>
     */
    public function getChangedParameters(): array
    {
        return $this->changedParameters;
    }
    /**
     * List of changed product parameters.
     *
     * @param list<ChangedParameterDto> $changedParameters
     *
     * @return self
     */
    public function setChangedParameters(array $changedParameters): self
    {
        $this->initialized['changedParameters'] = true;
        $this->changedParameters = $changedParameters;
        return $this;
    }
}