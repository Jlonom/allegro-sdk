<?php

namespace Jlonom\AllegroSDK\Model;

class CharityOrganization extends \ArrayObject
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
     * organization name
     *
     * @var string
     */
    protected $name;
    /**
     * organization name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * organization name
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