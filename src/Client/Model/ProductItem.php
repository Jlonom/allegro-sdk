<?php

namespace Jlonom\AllegroSDK\Model;

class ProductItem extends \ArrayObject
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
     * The product data.
     *
     * @var Product
     */
    protected $product;
    /**
     * The quantity of the product.
     *
     * @var float
     */
    protected $quantity;
    /**
     * The product data.
     *
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }
    /**
     * The product data.
     *
     * @param Product $product
     *
     * @return self
     */
    public function setProduct(Product $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * The quantity of the product.
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    /**
     * The quantity of the product.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}