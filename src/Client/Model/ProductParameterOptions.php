<?php

namespace Jlonom\AllegroSDK\Model;

class ProductParameterOptions extends \ArrayObject
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
     * @var bool
     */
    protected $identifiesProduct;
    /**
     * 
     *
     * @return bool
     */
    public function getIdentifiesProduct(): bool
    {
        return $this->identifiesProduct;
    }
    /**
     * 
     *
     * @param bool $identifiesProduct
     *
     * @return self
     */
    public function setIdentifiesProduct(bool $identifiesProduct): self
    {
        $this->initialized['identifiesProduct'] = true;
        $this->identifiesProduct = $identifiesProduct;
        return $this;
    }
}