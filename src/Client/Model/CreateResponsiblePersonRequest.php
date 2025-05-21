<?php

namespace Jlonom\AllegroSDK\Model;

class CreateResponsiblePersonRequest extends \ArrayObject
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
     * Internal name of responsible person in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @var string
     */
    protected $name;
    /**
     * Responsible person personal data.
     *
     * @var CreateResponsiblePersonRequestPersonalData
     */
    protected $personalData;
    /**
     * Internal name of responsible person in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Internal name of responsible person in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
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
     * @return CreateResponsiblePersonRequestPersonalData
     */
    public function getPersonalData(): CreateResponsiblePersonRequestPersonalData
    {
        return $this->personalData;
    }
    /**
     * Responsible person personal data.
     *
     * @param CreateResponsiblePersonRequestPersonalData $personalData
     *
     * @return self
     */
    public function setPersonalData(CreateResponsiblePersonRequestPersonalData $personalData): self
    {
        $this->initialized['personalData'] = true;
        $this->personalData = $personalData;
        return $this;
    }
}