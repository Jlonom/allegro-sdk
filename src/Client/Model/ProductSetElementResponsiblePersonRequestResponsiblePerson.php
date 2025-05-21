<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementResponsiblePersonRequestResponsiblePerson extends \ArrayObject
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
     * Identifier of a responsible person.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of a responsible person. Note that this references name of the person object, not the name in their personal data section.
     *
     * @var string
     */
    protected $name;
    /**
     * Identifier of a responsible person.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of a responsible person.
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
     * Name of a responsible person. Note that this references name of the person object, not the name in their personal data section.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of a responsible person. Note that this references name of the person object, not the name in their personal data section.
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