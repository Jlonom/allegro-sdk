<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationSafetyInformation extends \ArrayObject
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
     * _Note: if the offer contains multiple products, the safety information will only be changed for the first product._
     *
     * @var string
     */
    protected $type;
    /**
     * _Note: if the offer contains multiple products, the safety information will only be changed for the first product._
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * _Note: if the offer contains multiple products, the safety information will only be changed for the first product._
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}