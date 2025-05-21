<?php

namespace Jlonom\AllegroSDK\Model;

class PickupDateProposalDto extends \ArrayObject
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
     * Internal pickup proposal ID
     *
     * @var string
     */
    protected $id;
    /**
     * Human readable name of pickup proposal
     *
     * @var string
     */
    protected $name;
    /**
     * Additional information for pickup proposal
     *
     * @var string
     */
    protected $description;
    /**
     * Internal pickup proposal ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Internal pickup proposal ID
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
    /**
     * Human readable name of pickup proposal
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Human readable name of pickup proposal
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
     * Additional information for pickup proposal
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Additional information for pickup proposal
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