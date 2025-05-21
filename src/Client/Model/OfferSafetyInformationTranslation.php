<?php

namespace Jlonom\AllegroSDK\Model;

class OfferSafetyInformationTranslation extends \ArrayObject
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
     * @var list<ProductSafetyInformationDescription>
     */
    protected $products;
    /**
     * 
     *
     * @return list<ProductSafetyInformationDescription>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param list<ProductSafetyInformationDescription> $products
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