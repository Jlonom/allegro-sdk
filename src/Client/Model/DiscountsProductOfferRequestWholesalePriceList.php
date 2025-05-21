<?php

namespace Jlonom\AllegroSDK\Model;

class DiscountsProductOfferRequestWholesalePriceList extends \ArrayObject
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
     * The name of the wholesale price list definition.
     *
     * @var string
     */
    protected $name;
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
    /**
     * The name of the wholesale price list definition.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the wholesale price list definition.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}