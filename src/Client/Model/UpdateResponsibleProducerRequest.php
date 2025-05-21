<?php

namespace Jlonom\AllegroSDK\Model;

class UpdateResponsibleProducerRequest extends \ArrayObject
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
     * Responsible producer ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @var string
     */
    protected $name;
    /**
     * Responsible producer data.
     *
     * @var UpdateResponsibleProducerRequestProducerData
     */
    protected $producerData;
    /**
     * Responsible producer ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Responsible producer ID.
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
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
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
     * Responsible producer data.
     *
     * @return UpdateResponsibleProducerRequestProducerData
     */
    public function getProducerData(): UpdateResponsibleProducerRequestProducerData
    {
        return $this->producerData;
    }
    /**
     * Responsible producer data.
     *
     * @param UpdateResponsibleProducerRequestProducerData $producerData
     *
     * @return self
     */
    public function setProducerData(UpdateResponsibleProducerRequestProducerData $producerData): self
    {
        $this->initialized['producerData'] = true;
        $this->producerData = $producerData;
        return $this;
    }
}