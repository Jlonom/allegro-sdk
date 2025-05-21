<?php

namespace Jlonom\AllegroSDK\Model;

class ManualSafetyInformationTranslation extends \ArrayObject
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
     * @var list<ManualProductSafetyInformationDescriptionTranslation>
     */
    protected $products;
    /**
     * 
     *
     * @return list<ManualProductSafetyInformationDescriptionTranslation>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param list<ManualProductSafetyInformationDescriptionTranslation> $products
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