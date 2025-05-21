<?php

namespace Jlonom\AllegroSDK\Model;

class OfferId extends \ArrayObject
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
     * Offer id
     *
     * @var string
     */
    protected $id;
    /**
     * Offer id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Offer id
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