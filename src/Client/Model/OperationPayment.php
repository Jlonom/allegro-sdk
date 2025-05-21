<?php

namespace Jlonom\AllegroSDK\Model;

class OperationPayment extends \ArrayObject
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
     * The payment ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The payment ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The payment ID.
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