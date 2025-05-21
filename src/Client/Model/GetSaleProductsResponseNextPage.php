<?php

namespace Jlonom\AllegroSDK\Model;

class GetSaleProductsResponseNextPage extends \ArrayObject
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
     * A "cursor" to the next set of results.
     *
     * @var string
     */
    protected $id;
    /**
     * A "cursor" to the next set of results.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A "cursor" to the next set of results.
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