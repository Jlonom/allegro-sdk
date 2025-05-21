<?php

namespace Jlonom\AllegroSDK\Model;

class QuantityModification extends \ArrayObject
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
     * modification type
     *
     * @var string
     */
    protected $changeType;
    /**
    * - For changeType = "FIXED", a new stock quantity > 0
    - For changeType = "GAIN", an increase/decrease in stock quantity
    *
    * @var int
    */
    protected $value;
    /**
     * modification type
     *
     * @return string
     */
    public function getChangeType(): string
    {
        return $this->changeType;
    }
    /**
     * modification type
     *
     * @param string $changeType
     *
     * @return self
     */
    public function setChangeType(string $changeType): self
    {
        $this->initialized['changeType'] = true;
        $this->changeType = $changeType;
        return $this;
    }
    /**
    * - For changeType = "FIXED", a new stock quantity > 0
    - For changeType = "GAIN", an increase/decrease in stock quantity
    *
    * @return int
    */
    public function getValue(): int
    {
        return $this->value;
    }
    /**
    * - For changeType = "FIXED", a new stock quantity > 0
    - For changeType = "GAIN", an increase/decrease in stock quantity
    *
    * @param int $value
    *
    * @return self
    */
    public function setValue(int $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}