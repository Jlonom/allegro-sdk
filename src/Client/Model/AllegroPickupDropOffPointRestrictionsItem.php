<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPickupDropOffPointRestrictionsItem extends \ArrayObject
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
     * Set of values can be extended.
     *
     * @var string
     */
    protected $type;
    /**
     * Set of values can be extended.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set of values can be extended.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}