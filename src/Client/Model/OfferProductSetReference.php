<?php

namespace Jlonom\AllegroSDK\Model;

class OfferProductSetReference extends \ArrayObject
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
     * List of products in a product set.
     *
     * @var list<OfferProductSetProductReference>
     */
    protected $products;
    /**
     * List of products in a product set.
     *
     * @return list<OfferProductSetProductReference>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * List of products in a product set.
     *
     * @param list<OfferProductSetProductReference> $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
}