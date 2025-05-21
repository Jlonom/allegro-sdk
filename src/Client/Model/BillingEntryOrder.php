<?php

namespace Jlonom\AllegroSDK\Model;

class BillingEntryOrder extends \ArrayObject
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
     * Order id
     *
     * @var string
     */
    protected $id;
    /**
     * Order id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Order id
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