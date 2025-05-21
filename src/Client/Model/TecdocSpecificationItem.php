<?php

namespace Jlonom\AllegroSDK\Model;

class TecdocSpecificationItem extends \ArrayObject
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
     * Technical specification property name.
     *
     * @var string
     */
    protected $name;
    /**
     * Technical specification property values.
     *
     * @var list<string>
     */
    protected $values;
    /**
     * Technical specification property name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Technical specification property name.
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
     * Technical specification property values.
     *
     * @return list<string>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * Technical specification property values.
     *
     * @param list<string> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}