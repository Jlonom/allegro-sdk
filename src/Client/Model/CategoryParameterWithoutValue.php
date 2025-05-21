<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParameterWithoutValue extends \ArrayObject
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
     * Id of another parameter.
     *
     * @var string
     */
    protected $id;
    /**
     * Id of another parameter.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of another parameter.
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