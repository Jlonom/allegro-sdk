<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementQuantity extends \ArrayObject
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
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>
     *
     * @var ProductSetElementQuantityQuantity
     */
    protected $quantity;
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>
     *
     * @return ProductSetElementQuantityQuantity
     */
    public function getQuantity(): ProductSetElementQuantityQuantity
    {
        return $this->quantity;
    }
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>
     *
     * @param ProductSetElementQuantityQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(ProductSetElementQuantityQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}