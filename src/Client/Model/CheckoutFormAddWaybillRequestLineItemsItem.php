<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormAddWaybillRequestLineItemsItem extends \ArrayObject
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
     * Identifier of an order line item.
     *
     * @var string
     */
    protected $id;
    /**
     * Identifier of an order line item.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of an order line item.
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