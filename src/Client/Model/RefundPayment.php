<?php

namespace Jlonom\AllegroSDK\Model;

class RefundPayment extends \ArrayObject
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
     * The payment identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * The payment identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The payment identifier.
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