<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferResponseV1productSetItemresponsiblePerson extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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