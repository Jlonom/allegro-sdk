<?php

namespace Jlonom\AllegroSDK\Model;

class RefundClaimRequestLineItem extends \ArrayObject
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
     * ID of the purchase for which a refund application will be created.
     *
     * @var string
     */
    protected $id;
    /**
     * ID of the purchase for which a refund application will be created.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the purchase for which a refund application will be created.
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