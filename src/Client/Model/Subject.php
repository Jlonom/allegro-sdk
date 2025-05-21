<?php

namespace Jlonom\AllegroSDK\Model;

class Subject extends \ArrayObject
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
     * Subject name
     *
     * @var string
     */
    protected $name;
    /**
     * Subject name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Subject name
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
}