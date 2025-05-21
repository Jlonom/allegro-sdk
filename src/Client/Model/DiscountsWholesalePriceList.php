<?php

namespace Jlonom\AllegroSDK\Model;

class DiscountsWholesalePriceList extends \ArrayObject
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
     * Wholesale price list id
     *
     * @var string
     */
    protected $id;
    /**
     * Wholesale price list id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Wholesale price list id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}