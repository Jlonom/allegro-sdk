<?php

namespace Jlonom\AllegroSDK\Model;

class BillingEntryAdditionalInfoItem extends \ArrayObject
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
     * The technical key identifying the type of additional information.
     *
     * @var string
     */
    protected $type;
    /**
     * The display name for the additional information type. This value is translated based on the "Accept-Language" header. By default a message in English is returned.
     *
     * @var string
     */
    protected $name;
    /**
     * The actual value associated with the given additional information type.
     *
     * @var string
     */
    protected $value;
    /**
     * The technical key identifying the type of additional information.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The technical key identifying the type of additional information.
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
    /**
     * The display name for the additional information type. This value is translated based on the "Accept-Language" header. By default a message in English is returned.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The display name for the additional information type. This value is translated based on the "Accept-Language" header. By default a message in English is returned.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The actual value associated with the given additional information type.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The actual value associated with the given additional information type.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}