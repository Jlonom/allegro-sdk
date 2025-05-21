<?php

namespace Jlonom\AllegroSDK\Model;

class BenefitSpecification extends \ArrayObject
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
     * Type of benefit.
     *
     * @var string
     */
    protected $type;
    /**
     * Type of benefit.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of benefit.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}