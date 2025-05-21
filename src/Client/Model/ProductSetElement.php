<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElement extends \ArrayObject
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
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @var mixed
     */
    protected $product;
    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @param mixed $product
     *
     * @return self
     */
    public function setProduct($product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
}