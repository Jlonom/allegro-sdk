<?php

namespace Jlonom\AllegroSDK\Model;

class ImpliedWarranty extends \ArrayObject
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
     * The ID of the implied warranty definition.
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of the implied warranty definition.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the implied warranty definition.
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