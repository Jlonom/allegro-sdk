<?php

namespace Jlonom\AllegroSDK\Model;

class ParcelAdditionalServicesOptionAvailability extends \ArrayObject
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
     * Name of option that can be passed to additionalServices for parcel creation.
     *
     * @var string
     */
    protected $name;
    /**
     * Brief description of option.
     *
     * @var string
     */
    protected $description;
    /**
     * Name of option that can be passed to additionalServices for parcel creation.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of option that can be passed to additionalServices for parcel creation.
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
     * Brief description of option.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Brief description of option.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}