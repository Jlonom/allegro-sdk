<?php

namespace Jlonom\AllegroSDK\Model;

class ResponsiblePersonResponse extends \ArrayObject
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
     * Responsible person ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Internal name of responsible person in dictionary (visible only to you).
     *
     * @var string
     */
    protected $name;
    /**
     * Responsible person personal data.
     *
     * @var ResponsiblePersonResponsePersonalData
     */
    protected $personalData;
    /**
     * Responsible person ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Responsible person ID.
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
     * Internal name of responsible person in dictionary (visible only to you).
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Internal name of responsible person in dictionary (visible only to you).
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
     * Responsible person personal data.
     *
     * @return ResponsiblePersonResponsePersonalData
     */
    public function getPersonalData(): ResponsiblePersonResponsePersonalData
    {
        return $this->personalData;
    }
    /**
     * Responsible person personal data.
     *
     * @param ResponsiblePersonResponsePersonalData $personalData
     *
     * @return self
     */
    public function setPersonalData(ResponsiblePersonResponsePersonalData $personalData): self
    {
        $this->initialized['personalData'] = true;
        $this->personalData = $personalData;
        return $this;
    }
}